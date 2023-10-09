<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="estilosheet" href="estilo.css">
</head>
<body>
    <?php
        $array = array();
        for ($i = 1; $i <= 50; $i++){
            $array[] = $i;
        }
        foreach($array as $MiArray => $numero){
            if($numero % 3 == 0){
                unset($array[$MiArray]);
            }
        }
        foreach($array as  $numero){
            echo $numero."<br>";
        }
    ?>
</body>
</html>