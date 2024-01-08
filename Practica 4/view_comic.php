<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View comic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require './database_conection.php' ?>
</head>
<body>
    <?php
        if(!isset($_GET["id_comic"]));
        if($_SERVER["REQUEST_METHOD"]="GET"){
            $id_comic = $_GET["id_comic"];

            $sql = $conexion -> prepare("SELECT * FROM comics WHERE id_comic = ?");
            $sql->bind_param("i", $id_comic);
            $sql -> execute();
            $resultado = $sql -> get_result();
            
            $fila = $resultado -> fetch_assoc();
            $titulo = $fila["titulo_comic"];
            $paginas = $fila["paginas"];
            $genero = $fila["genero"];
            $conexion -> close();
        }
    ?>
    <div class="container">
        <h1>View comic</h1>
        <h3><?php echo $id_comic ?></h3>
        <h3><?php echo $titulo ?></h3>
        <h3><?php echo $paginas ?></h3>
        <h3><?php echo $genero ?></h3>
        <form action="edit_comic.php" method="get">
            <input type="hidden" name="id_comic" value="<?php echo $id_comic ?>">
            <input class="btn btn-secondary" type="submit" value="Editar comic">
        </form>
        <form class="mt-3" action="index.php" method="get">
            <input class="btn btn-secondary" type="submit" value="Volver al index">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>