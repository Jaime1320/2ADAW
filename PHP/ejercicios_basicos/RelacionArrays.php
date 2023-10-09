<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="estilosheet" href="estilo.css">
</head>

<body>
    <?php
    echo "<h2>EJERCICIO 1</h2>Crea un array que almacene nombres de productos y sus respectivos precios.Muestra en una tabla los productos con sus precios, ordenados alfabeticamente por el nombre del producto.Muestra tambien el precio total de los productos y cuantos productos hay en el array.<br><br>";
    ?>
    <table>
        <tr>
            <td>Productos</td>
            <td>Precios</td>
        </tr>
        <?php
        $almacen = [
            ["manzanas", 3],
            ["peras", 1],
            ["naranjas", 2],
            ["melocotones", 4],
        ];
        sort($almacen);
        foreach ($almacen as $prod) {
            list($producto, $precio) = $prod;
            echo "<tr>";
            echo "<td>$producto</td><td>$precio</td>";
            echo "</tr>";
        }
        $precioTotal = 0;
        foreach ($almacen as $prod) {
            list($producto, $precio) = $prod;
            $precioTotal += $precio;
        }
        ?>
    </table>
    <?php
    echo "<br>";
    echo "Hay " . count($almacen) . " productos totales";
    echo "<br>";
    echo "El precio total es: " . $precioTotal;
    ?>
    
    <?php
    echo "<h2>EJERCICIO 2</h2> Modifica el array anterior para que ademas de los productos y sus precios almacene la cantidad que se ha comprado de cada producto. Muestra en una columna adicional el precio total de cada producto (producto x cantidad) y al final de la tabla el precio total de todos los productos comprados y la cantidad de productos adquiridos. <br><br>";
    ?>
</body>

</html>