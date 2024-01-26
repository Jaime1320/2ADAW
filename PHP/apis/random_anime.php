<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Animes</title>
</head>
<body>

    <form action="" method="post">
        Titulo: <input type="text" name="titulo"><br>
        Limite: <select name="limit">
            <option value="">Todos</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>
        Minimo: <select name="minimo">
            <option value="">Minimo</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        Maximo: <select name="maximo">
            <option value="">Maximo</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <input type="submit" value="Buscar">

    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $titulo = urlencode($_POST["titulo"]);
            $limit =  $_POST["limit"];
            $minimo =  $_POST["minimo"];
            $maximo =  $_POST["maximo"];
            $apiUrl = "https://api.jikan.moe/v4/anime?q=$titulo&limit=$limit&min_score=$minimo&max_score=$maximo";
    
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            $respuesta = curl_exec($curl);
            $array = json_decode($respuesta, true);
            $animes = $array['data'];

            foreach($animes as $anime){ ?>
                <h1><?php echo $anime['title']?></h1>
                <img src="<?php echo $anime['images']['jpg']['image_url'] ?>" alt="">
                <p><?php echo $anime['score']?></p>
            <?php }
        }
    ?>
        <br>

   
</body>
</html>