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
?>
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
<?php $conn->close();?>