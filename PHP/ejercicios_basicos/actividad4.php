<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="estilosheet" href="estilo.css">
</head>

<body>
    <?php
    $personas = array(
        array("Juan", "Perez", rand(0, 100)),
        array("Maria", "Gomez", rand(0, 100)),
        array("Carlos", "Lopez", rand(0, 100)),
    );
    ?>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Tipo Persona</th>
        </tr>
        <?php
        foreach ($personas as $pers) {
            list($nombre, $apellido, $edad) = $pers;
            $tipoPersona = match (true) {
                $edad >= 0 && $edad <= 18 => "Menor de edad",
                $edad > 18 && $edad <= 64 => "Mayor de edad",
                default => "Jubilado",
            };
            echo "<tr>";
            echo "<td>$nombre</td><td>$apellido</td><td>$edad</td><td>$tipoPersona</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>