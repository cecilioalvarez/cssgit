<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "videoclub";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "delete from clientes where dni='". $_GET["dni"]."' ";
$resultado = $conn->query($sql);
$conn->close();
header("Location":"listaclientes.php");
?>