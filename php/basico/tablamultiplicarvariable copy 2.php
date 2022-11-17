<html>

<body>
    <table border="1px solid black">
        <tr>
            <th>multiplicacion</th>
        </tr>
        <?php for($i=0;$i<10;$i++){ ?>

        <tr>
            <td><?=($i*$_GET["numero"])?></td>
        </tr>

        <?php }?>
    </table>
</body>

</html>