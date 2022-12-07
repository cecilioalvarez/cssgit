<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "videoclub";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from Clientes";
$resultado = $conn->query($sql);
?>

        <table class="table">
            <tr>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Borrar</th>
                <th>Ver Alquileres</th>
                <th>AJAX</th>
            </tr>
            <?php while($fila = $resultado->fetch_assoc()){?>


            <tr>
                <td><?=$fila["dni"]?></td>
                <td><?=$fila["nombre"]?></td>
                <td><?=$fila["apellidos"]?></td>
                <td><a href="borrarcliente.php?dni=<?=$fila["dni"]?>" class="btn btn-primary">Borrar</a></td>

                <td>
                    <a href="verAlquileresCliente.php?dni=<?=$fila["dni"]?>" class="btn btn-primary">Ver</a>
                </td>
                <td>
                    <a href="verAlquileresCliente.php?dni=<?=$fila["dni"]?>" class="btn btn-primary alquileres" data-dni="<?=$fila["dni"]?>">Ver Ajax</a>
                </td>


            </tr>
            <?php } ?>
        </table>

<?php $conn->close();?>