<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require './database_conection.php' ?>
</head>

<body>
    <div class="container mt-3">
        <h1>Videojuegos</h1>
        <form action="index.php" method="post">
            <div class="row mb-3">
                <div class="col-4">
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="col-2 ml-5">
                    <input class="btn btn-primary" type="submit" value="buscar">
                </div>
            </div>
            <div class="row mb-3">
                <div class="row mb-3">
                    <select name="campo" id="">
                        <option value="titulo">Titulo</option>
                        <option value="distribuidora">Distribuidora</option>
                        <option value="precio">Precio</option>
                    </select>
                </div>
                <div class="row mb-3">
                    <select name="orden" id="">
                        <option value="asc">Ascendente</option>
                        <option value="desc">Descendente</option>
                    </select>
                </div>
            </div>
        </form>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Distribuidora</th>
                    <th>Precio</th>
                </tr>
            <tbody>
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $titulo = $_POST["titulo"];
                    $campo = $_POST["campo"];
                    $orden = $_POST["orden"];
                    $sql = $conexion->prepare("Select * from videojuegos where titulo like CONCAT ('%',?,'%') order by $campo $orden");
                    $sql -> bind_param("s" , $titulo);
                }else if($_SERVER["REQUEST_METHOD"] == "GET"){
                    $sql = $conexion->prepare("Select * from videojuegos");
                }
                $sql->execute();
                $result = $sql->get_result();
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["titulo"] . "</td>";
                    echo "<td>" . $row["distribuidora"] . "</td>";
                    echo "<td>" . $row["precio"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            </thead>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>