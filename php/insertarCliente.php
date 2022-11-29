<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basedatos = "videoclub";

        //$sql="insert into facturas values (1,'ordenador',200);"
        $sql="insert into Clientes (dni,nombre,apellidos) values ("
        .$_GET["dni"].
        ",'".$_GET["nombre"]."','".$_GET["apellidos"]."');";
        echo $sql;
        $conn = mysqli_connect($servidor,
         $usuario, 
         $clave, $basedatos);
        if (mysqli_query($conn,$sql)) {
            header('location:listaclientes.php');
          }else {
            echo  "ha petado todo".mysqli_error($conn);
          }
          mysqli_close($conn);
    ?>
