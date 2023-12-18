<?php
    require './database_conection.php';
    if($_SERVER["REQUEST_METHOD"] == "GET") {
            $titulo = $_GET["titulo"];
            $sql = $conexion -> prepare("delete from videojuegos  where titulo = ?");
            $sql -> bind_param("s", $titulo);
            $sql ->execute();
            $conexion ->close();
            header('location: index.php');
        }
?>
