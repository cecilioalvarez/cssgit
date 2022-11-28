<?php

$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basedatos = "videoclub";

$conn = mysqli_connect($servidor,
         $usuario, 
         $clave, $basedatos);

$sql = "delete from clientes where dni='". $_GET["dni"]."'";
if (mysqli_query($conn,$sql)) {
    header('location:listaclientes.php');
  }else {
    echo  "ha petado todo". mysqli_error($conn);
  }

  mysqli_close($conn);
//header('location:listaclientes.php');
?>