<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "videoclub";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from Clientes";
$resultado = $conn->query($sql);
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {

       $(".alquileres").click(function(e) {

                var dni=$(this).data("dni");
                e.preventDefault();
                $.get("verAlquileresClienteAjax.php?dni="+dni,function(datos) {

                   $("#veralquileres").empty().append(datos);

                })

       })

       $("#filtrar").click(function() {

        alert($("#nombre").val());
       })
    })
    </script>

</head>

<body>
    <?php
?>
    <div class="container">
        <form>
            <label for="nombre">
                Nombre:
            </label>
            <input type="text"  id="nombre" name="nombre" />
            <button class="btn btn-primary" id="filtrar">filtrar</button>
        </form>
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

        <a href="formularioCliente.html" class="btn btn-primary">nuevo</a>
        <div id="veralquileres">
                    zona de alquileres
    </div>
    </div>
   
</body>

</html>
<?php $conn->close();?>