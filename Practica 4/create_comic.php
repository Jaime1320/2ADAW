<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create comic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require './database_conection.php' ?>
</head>

<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo_comic"];
            $paginas = $_POST["paginas"];
            $genero = $_POST["genero"];

            $sql = $conexion -> prepare("insert into comics(titulo_comic, paginas, genero) values (?, ? ,?)");
            $sql -> bind_param("sis", $titulo,$paginas,$genero);
            $sql ->execute();
            $conexion ->close();
            
        }
    ?>

    <div class="container">
        <h1>Nuevo Videojuego</h1>

    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">Título del comic</label>
            <input class="form-control" type="text" name="titulo_comic">
        </div>
        <div class="mb-3">
            <label class="form-label">Paginas del comic</label>
            <input class="form-control" type="text" name="paginas">
        </div>
        <div class="row mb-3">
                    <select name="genero" id="">
                        <option value="accion">Accion</option>
                        <option value="aventuras">Aventuras</option>
                        <option value="romance">Romance</option>
                        <option value="comedia">Comedia</option>
                    </select>
                </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="crear">
        </div>
    </form>
    <form action="index.php" method="get">
            <input class="btn btn-secondary" type="submit" value="Volver al index">
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>