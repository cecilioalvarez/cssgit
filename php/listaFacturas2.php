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
$sql = "select * from Facturas";
$resultado = $conn->query($sql);
?>

<html>

<body>
<?php // el bucle while lo que haces es recorrer las filas
// lo que hace es pedir a la variale resultado una fila
// al pedir una fila puede acceder a las columans
// esto siempre es cierto mientras haya una fila y el bucle se cumple
?>
<?php while($fila = $resultado->fetch_assoc()){?>

 
      <p><?=$fila["numero"]?>,
      <?=$fila["concepto"]?>,
      <?=$fila["importe"]?>,
     <a href="borrar.php
      ?numero=<?=$fila["numero"]?>">Borrar</a>
    </p>
<?php } ?>

<a href="formularioNuevo.html">nuevo</a>
</body>
</html>
<?php $conn->close();?>