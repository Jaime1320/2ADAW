<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris</title>
</head>
<body>
    <form action="" method="post">
        <label for="Categoria">Categoria</label>
        <select name="categoria">
        <?php 
        $apiUrl = "https://api.chucknorris.io/jokes/categories";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        $categorias = json_decode($respuesta, true);

        foreach($categorias as  $categoria) { 
            ?> <option value="<?php echo $categoria ?>"><?php echo $categoria?></option> <?php
        }
    ?>  
    </select>
    <br>
    <input type="submit" value="Generar chiste">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        $categoria = $_POST["categoria"];

        $apiUrl = "https://api.chucknorris.io/jokes/random?category=$categoria";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $respuesta = curl_exec($curl);

        $array = json_decode($respuesta, true);
        $categoria = $array;
        $chiste = $categoria['value'];
        echo $chiste;
        }
    ?>
   
</body>
</html>