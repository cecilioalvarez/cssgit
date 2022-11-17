<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$basedatos = "curso2";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Numero:<?=$_GET["numero"]?></p>
    <p>Concepto:<?=$_GET["concepto"]?></p>
    <p>Importe:<?=$_GET["importe"]?></p>
    <?phP

        //$sql="insert into facturas values (1,'ordenador',200);"
        $sql="insert into facturas (numero,concepto,importe) values ("
        .$_GET["numero"].
        ",'".$_GET["concepto"]."',".$_GET["importe"].");";
        echo $sql;
    ?>

    <?php
   
        $conn = mysqli_connect($servidor,
         $usuario, 
         $clave, $basedatos);
        if (mysqli_query($conn,$sql)) {
            echo "insertado";
          }else {
            echo  "ha petado todo".mysqli_error($conn);
          }
          mysqli_close($conn);
    ?>

</body>

</html>