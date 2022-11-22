<?php

//variables en php se encargan de definir datos que puedne variar
// empiezan por $
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "curso2";

// new mysqli genera un objeto a partir de unos parametors
// ese objeto es la conexion se mete en $conn
$conn = new mysqli($servername, $username, $password, $dbname);
//defino una consulta SQL que es untexto
$sql = "select * from Facturas ";

if (!empty($_GET["concepto"])) {
  //echo $_GET["orden"];
  $sql=$sql . " where concepto='"
   . $_GET["concepto"]. "' ";

}

if (!empty($_GET["orden"])) {
  //echo $_GET["orden"];
  $sql=$sql . "order by " . $_GET["orden"];

}
echo "sql del listado :<b>" .$sql. "</b>";


//conexion a la base de datos que la ejecute
//viene en la variable resultado
$resultado = $conn->query($sql);
?>

<html>
<body>
  <p>
    <form>
  Concepto:<input type="text" name="concepto"/>
  <input type="submit" value="filtrar"/>
</form>
</p>
  <table>
  <tr>
  <th><a href="?orden=numero">Numero</a></th>
  <th><a href="?orden=concepto">Concepto</a></th>
  <th><a href="?orden=importe">Importe</a></th>
</tr>


<?php while($fila = $resultado->fetch_assoc()){?>

    <tr>
      <td><?=$fila["numero"]?></td>
      <td><?=$fila["concepto"]?></td>
      <td><?=$fila["importe"]?></td>
      <td><a href="borrar.php
      ?numero=<?=$fila["numero"]?>">Borrar</a>
</tr>
<?php } ?>
<?php

$sql2="select sum(importe) as suma from Facturas";
$resultado2 = $conn->query($sql2);
$filaResultado2 = $resultado2->fetch_assoc();
?>
<tr>
  <td colspan="2">Total:</td>
  <td><?=$filaResultado2["suma"]?></td>
  <td>Euros</td>
</tr>
</table>
<a href="formularioNuevo.html">nuevo</a>
</body>
</html>
<?php $conn->close();?>