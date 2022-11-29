<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "videoclub";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select numero, date_format(fecha,'%d/%m/%Y') as fecha,titulo

from Alquileres inner join Peliculas 
on Peliculas.isbn= Alquileres.peliculas_isbn 
 where  clientes_dni='".$_GET["dni"]."'";
$resultado = $conn->query($sql);
echo $sql;
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</head>

<body>
    <?php
?>
    <div class="container">
        <table class="table">
            <tr>
            <th>Alquiler</th>
            <th>Fecha</th>
            <th>Titulo</th>
           
            </tr>
            <?php while($fila = $resultado->fetch_assoc()){?>


            <tr>
                <td><?=$fila["numero"]?></td>
                <td><?=$fila["fecha"]?></td>
                <td><?=$fila["titulo"]?></td>
               

            </tr>
            <?php } ?>
            </table>
    </div>
</body>

</html>
<?php $conn->close();?>