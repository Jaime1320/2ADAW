<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show anime</title>
</head>
<body>
    <?php
    // Obtiene el parámetro "id" de la URL utilizando $_GET
    $id = $_GET["id"];
    
    // Construye la URL de la API Jikan para obtener información completa del anime con el ID proporcionado
    $apiUrl = "https://api.jikan.moe/v4/anime/$id/full";

    // Inicia una sesión cURL y configura las opciones para la solicitud a la API
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Ejecuta la solicitud y almacena la respuesta en la variable $respuesta
    $respuesta = curl_exec($curl);

    // Decodifica la respuesta JSON y obtiene un array asociativo con la información del anime
    $array = json_decode($respuesta, true);

    // Descomenta la línea siguiente para imprimir el array completo y depurarlo si es necesario
    //var_dump($array);

    // Extrae la información del anime del array obtenido
    $anime = $array['data'];
    ?>

    <!-- Muestra el título del anime -->
    <h1><?php echo $anime['title'] ?></h1>
    
    <!-- Muestra la sinopsis del anime -->
    <p><?php echo $anime['synopsis'] ?></p>
    
    <!-- Muestra la imagen del anime -->
    <p><img src="<?php echo $anime['images']['jpg']['image_url'] ?>"></p>
</body>
</html>
