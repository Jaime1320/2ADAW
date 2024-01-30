<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random anime</title>
</head>
<body>
    <!-- Formulario de búsqueda de animes -->
    <form action="" method="post">
        <!-- Campo de entrada para el título del anime -->
        Título: <input type="text" name="titulo">

        <!-- Botón de envío del formulario -->
        <input type="submit" value="Buscar"><br><br>

        <!-- Menú desplegable para el límite de resultados -->
        Límite: <select name="limite">
            <option selected value="">Todos</option>
            <?php for($i = 1; $i <= 5; $i++) { ?>
                <!-- Genera opciones numéricas en el menú desplegable -->
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>

        <!-- Menú desplegable para la nota mínima -->
        Nota mínima: <select name="notaMin">
            <option selected hidden value="1">1</option>
            <?php for($i = 1; $i <= 10; $i++) { ?>
                <!-- Genera opciones numéricas en el menú desplegable -->
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>

        <!-- Menú desplegable para la nota máxima -->
        Nota máxima: <select name="notaMax">
            <option selected hidden value="10">10</option>
            <?php for($i = 1; $i <= 10; $i++) { ?>
                <!-- Genera opciones numéricas en el menú desplegable -->
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
    </form>

    <?php
    // Verifica si el formulario ha sido enviado usando el método POST
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoge los valores del formulario
        $titulo = $_POST["titulo"];
        // Reemplaza espacios en blanco con '+' en el título
        $titulo = preg_replace('/\s+/','+',$titulo);

        $limite = $_POST["limite"];
        $notaMin = $_POST["notaMin"];
        $notaMax = $_POST["notaMax"];

        // Construye los parámetros para la URL de la API
        $q = "q=$titulo";
        $limit = "limit=$limite";
        $min_score = "min_score=$notaMin";
        $max_score = "max_score=$notaMax";

        // Construye la URL completa de la API con los parámetros
        $apiUrl = "https://api.jikan.moe/v4/anime?$q&$limit&$min_score&$max_score";
        echo $apiUrl;  // Muestra la URL para depuración

        // Inicia una sesión cURL y realiza la solicitud a la API
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);

        // Decodifica la respuesta JSON y obtiene la información de los animes
        $array = json_decode($respuesta, true);
        $animes = $array['data'];

        // Itera sobre los animes obtenidos e imprime sus detalles
        foreach($animes as $anime) { ?>
            <h1><?php echo $anime['title'] ?></h1>
            <p>
                <!-- Enlace para ver detalles del anime -->
                <a href="show_anime.php?id=<?php echo $anime['mal_id'] ?>">
                    Ver detalles
                </a>
            </p>
            <p><?php echo $anime['score'] ?></p>
            <!-- Imagen del anime -->
            <img src="<?php echo $anime['images']['jpg']['image_url'] ?>">
        <?php }
    }
    ?>
</body>
</html>
