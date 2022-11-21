<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basedatos = "curso2";

        //$sql="insert into facturas values (1,'ordenador',200);"
        $sql="insert into facturas (numero,concepto,importe) values ("
        .$_GET["numero"].
        ",'".$_GET["concepto"]."',".$_GET["importe"].");";
        $conn = mysqli_connect($servidor,
         $usuario, 
         $clave, $basedatos);
        if (mysqli_query($conn,$sql)) {
            header('location:listaFacturas.php');
          }else {
            echo  "ha petado todo".mysqli_error($conn);
          }
          mysqli_close($conn);
    ?>
