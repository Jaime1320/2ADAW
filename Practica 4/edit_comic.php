<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit comic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require './database_conection.php' ?>
</head>
<body>
<?php
        if(!isset($_GET["id_comic"])) header('location: index.php');
        if($_SERVER["REQUEST_METHOD"] == "GET"){
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
        }if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id_comic = $_POST["id_comic"];
            $titulo = $_POST["titulo"];
            $paginas = $_POST["paginas"];
            $genero = $_POST["genero"];
            $sql = $conexion -> prepare("UPDATE comics SET titulo_comic = ?, paginas = ?,genero = ? WHERE id_comic = ?");
            $sql -> bind_param("sisi", $titulo , $paginas , $genero, $id_comic);
            $sql -> execute();
            $conexion -> close();
            header('location: index.php');
        }
    ?>
    <div class="container">
        <h1>Editar comic</h1>
    <form action="" method="POST">
            <input type="hidden" name="id_comic" value="<?php echo $id_comic ?>">
            <label class="form-label">Título del comic</label>
            <input class="form-control" type="text" name="titulo" value="<?php echo $titulo ?>">
            <label class="form-label">Paginas</label>
            <input class="form-control" type="text" name="paginas" value="<?php echo $paginas ?>">
            <label class="form-label">Genero</label>
            <select name="genero" id="" <?php echo $genero ?>">
                <option value="accion">Accion</option>
                <option value="aventuras">Aventuras</option>
                <option value="romance">Romance</option>
                <option value="comedia">Comedia</option>
            </select>
            <br>
            <input class="btn btn-primary mt-3" type="submit" value="Editar comic">
    </form>
    <form class="mt-3" action="index.php" method="get">
            <input class="btn btn-secondary" type="submit" value="Volver al index">
    </form>
    </div>
    
</body>
</html>