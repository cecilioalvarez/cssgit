<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "curso2";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from Facturas";
$resultado = $conn->query($sql);
?>

<html>
<body>
<table>
<?php while($fila = $resultado->fetch_assoc()){?>

    <tr>
      <td><?=$fila["numero"]?></td>
      <td><?=$fila["concepto"]?></td>
      <td><?=$fila["importe"]?></td>
</tr>
<?php}?>
</table>
</body>
</html>
<?php $conn->close();?>





