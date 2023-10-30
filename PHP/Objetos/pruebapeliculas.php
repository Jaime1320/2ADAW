<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba peliculas</title>
    <?php require "pelicula.php"?>
</head>
<body>
    <?php
    $sql = "SELECT * FROM peliculas";
    $resultado = $conenxion->query($sql);

    while($fila = $resultado->fetch_assoc()){
        echo $fila["id_pelicula"]." ".$fila["titulo"]." ".$fila["fecha_estreno"]." ".$fila["edad_recomendada"]."<br>";
    }

    $pelicula1 = new pelicula(1, "Spiderman", "2020-01-01", "13");  

    /*
    -CREAR 3 PELICULAS Y AÑADIMOS A UN ARRAY "PELICULAS"
    -MEDIANTE UN FOREACH MOSTRAMOS LOS DATOS DE LAS PELICULAS DEL ARRAY EN UNA TABLA
    */
    $pelicula2 = new pelicula(2, "Batman", "2020-01-01", "13");
    $pelicula3 = new pelicula(3, "Superman", "2020-01-01", "13");

    $peliculas = array($pelicula1, $pelicula2, $pelicula3);
    ?>
    
    <?php
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Titulo</th>";
    echo "<th>Fecha estreno</th>";
    echo "<th>Edad recomendada</th>";
    echo "</tr>";

    foreach($peliculas as $pelicula){
        echo "<tr>";
        echo "<td>".$pelicula->id_pelicula."</td>";
        echo "<td>".$pelicula->titulo."</td>";
        echo "<td>".$pelicula->fecha_estreno."</td>";
        echo "<td>".$pelicula->edad_recomendada."</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>
</body>
</html>