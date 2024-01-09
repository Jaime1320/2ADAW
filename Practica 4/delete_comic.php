<?php
    require './database_conection.php';
    if($_SERVER["REQUEST_METHOD"] == "GET") {
            $id_comic = $_GET["id_comic"];
            $sql = $conexion -> prepare("delete from comics  where id_comic = ?");
            $sql -> bind_param("i", $id_comic);
            $sql ->execute();
            $conexion ->close();
            header('location: index.php');
        }
?>