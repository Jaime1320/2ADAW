<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random anime</title>
</head>
<body>
    <?php
    // Define la URL de la API Jikan que proporciona información sobre un anime aleatorio
    $apiUrl = "https://api.jikan.moe/v4/random/anime";

    // Inicializa una sesión cURL para realizar la solicitud HTTP a la API
    $curl = curl_init();

    // Configura las opciones de cURL, estableciendo la URL y solicitando que la respuesta sea devuelta como una cadena de texto
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Ejecuta la solicitud y almacena la respuesta en la variable $respuesta
    $respuesta = curl_exec($curl);

    // Convierte la respuesta JSON en un array asociativo
    $array = json_decode($respuesta, true);

    // Descomenta la línea siguiente para imprimir el array completo y depurarlo si es necesario
    //var_dump($array);

    // Extrae la información del anime del array obtenido
    $anime = $array['data'];
 
    // Almacena el título del anime en la variable $titulo
    $titulo = $anime['title'];

    // Almacena la URL de la imagen del anime en la variable $imagen
    $imagen = $anime['images']['jpg']['image_url'];
    ?>

    <!-- Imprime el título del anime en un elemento <h1> del HTML -->
    <h1><?php echo $titulo ?></h1>
    <!-- Imprime la foto del anime en un elemento <img> del HTML -->
    <img src="<?php echo $imagen?>" alt="">
</body>
</html>
