<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $personas = array(
        array("45354633J","Jaime"),
        array("84695744P", "Arturo"),
        array("45786456T", "Manuela"),
        array("43725488W", "Jacinta"),
        array("789641X", "Ataulfo"),
    );
    ?>
    <table border="1">
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>DNI correcto</th>
        </tr>
        <?php
        foreach ($personas as $pers) {
            list($DNI, $nombre) = $pers;
            $DNIcorrecto = match (true) {
                strlen($DNI) == 9 => "DNI correcto",
                strlen($DNI) != 9 => "DNI incorrecto",
                default  => $DNIcorrecto,
            };
            echo "<tr>";
            echo "<td>$DNI</td><td>$nombre</td><td>$DNIcorrecto</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>