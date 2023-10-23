<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require '../Funciones/base_peliculas.php' ?>
</head>

<body>
    <?php
    function depurar($entrada)
    {
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        return $salida;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_id_pelicula = depurar($_POST["id"]);
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);
        $temp_apellidos = depurar($_POST["apellidos"]);
    }

     #   Validación id_pelicula
     if(strlen($temp_id_pelicula) == 0) {
        $err_id = "El id es obligatorio";
    } else {
        if(strlen($temp_id_pelicula) > 8 || strlen($temp_id_pelicula) < 8) {
            $err_id_pelicula = "El nombre no puede tener más de 30 caracteres o menos de 2";
        } else {
            $patron = "/^[a-zA-Z][a-zA-Z ]*[a-zA-Z]$/";
            if(!preg_match($patron, $temp_id_pelicula)) {
                $err_id_pelicula = "El id solo puede contener letras o espacios en blanco";
            } else {
                $temp_id_pelicula = strtolower($temp_id_pelicula);
                $temp_id_pelicula = ucwords($temp_id_pelicula);
                $id_pelicula = $temp_id_pelicula;
            }
        }
    }

    #   Validación titulo
    if(strlen($temp_titulo) == 0) {
        $err_titulo = "El titulo es obligatorio";
    } else {
        if(strlen($temp_titulo) > 1 || strlen($temp_titulo) < 80) {
            $err_titulo = "El titulo no puede tener más de 80 caracteres o menos de 1";
        } else {
            $patron = "/^[a-zA-Z][a-zA-Z ]*[a-zA-Z]$/";
            if(!preg_match($patron, $temp_titulo)) {
                $err_titulo = "El titulo solo puede contener letras o espacios en blanco";
            } else {
                $temp_titulo = strtolower($temp_titulo);
                $temp_titulo = ucwords($temp_titulo);
                $titulo = $temp_titulo;
            }
        }
    }

    ?>
    <form action="" method="post">
        <fieldset>
            <label>ID_PELICULA: </label>
            <input type="text" name="id_pelicula">
            <?php if (isset($err_id)) echo $err_id ?>
            <br><br>
            <label>Titulo: </label>
            <input type="text" name="titulo">
            <?php if (isset($err_titulo)) echo $err_titulo ?>
            <br><br>
            <label>Edad recomendada: </label>
            <input type="text" name="edad_recomendada">
            <?php if (isset($err_edad)) echo $err_edad ?>
            <br><br>
            <label>Fecha de estreno: </label>
            <input type="date" name="fecha_estreno">
            <?php if (isset($err_fecha_estreno)) echo $err_fecha_estreno ?>
            <br><b>
                <input type="submit" value="Registrarse">
        </fieldset>
    </form>
    <?php
    if(isset($id_pelicula) && isset($titulo) && isset($edad_recomendada) && isset($fecha_estreno)) {

        echo "<h3>Id_pelicula: $id_pelicula</h3>";
        echo "<h3>Titulo: $titulo</h3>";
        echo "<h3>Edad recomendada: $edad_recomendada</h3>";
        echo "<h3>fecha de estreno: $fecha_estreno</h3>";

        $sql = "INSERT INTO peliculas (id_pelicula , titulo , edad_recomendada , fecha_estreno)
        VALUES ('$id_pelicula' , '$titulo' , '$edad_recomendada' , '$fecha_estreno')";

        $conexion -> query($sql);
    }
    ?>
</body>

</html>