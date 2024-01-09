<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require './database_conection.php'?>
</head>
<body>
    <div class="container">
    <h1>Filtrar:</h1>
    <form action="index.php" method="post">
        <div class="row mb-3">
            <input type="text" name="rango1" placeholder="rango 1">
            <input type="text" name="rango2" placeholder="rango 2">
        </div>
        <div class="col-2 ml-5 mb-3">
            <input class="btn btn-primary" type="submit" value="Filtrar">
        </div>
    </form>
    <?php
        
    ?>
    
    <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Paginas</th>
            <th>Genero</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["rango1"])){
                    $_POST["rango1"] = PHP_FLOAT_MIN;
                }
                if(empty($_POST["rango2"])){
                    $_POST["rango2"] = PHP_FLOAT_MAX;
                }
                $rango1 = $_POST["rango1"];
                $rango2 = $_POST["rango2"];
                $sql = $conexion->prepare("Select * from comics where paginas between $rango1 and $rango2");
            }else if ($_SERVER["REQUEST_METHOD"] == "GET"){
                $sql = $conexion->prepare("Select * from comics");
            }
            $sql->execute();
            $result = $sql->get_result();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["titulo_comic"] . "</td>";
                echo "<td>" . $row["paginas"] . "</td>";
                echo "<td>" . $row["genero"] . "</td>";
        ?> 
        <td>
            <form action="view_comic.php" method="get">
                <input type="hidden" name="id_comic" value="<?php echo $row['id_comic'] ?>">
                <input class="btn btn-success" type="submit" value="Ver Comic">
            </form>
        </td>
        <td>
            <form action="delete_comic.php" method="get">
                <input type="hidden" name="id_comic" value="<?php echo $row['id_comic'] ?>">
                <input class="btn btn-danger" type="submit" value="Eliminar">
            </form>
        </td>
        <?php
        }
        ?>
    </tbody>
    </table>
    <form action="create_comic.php" method="get">
        <input class="btn btn-secondary" type="submit" value="Crear comic">
    </form>
    </div>
</body>
</html>