<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Trivial</title>
</head>
<body>

    <form action="" method="post">
        <label for="Numero de preguntas">Numero de preguntas: </label>
        
        <input type="text" name="amount">
        <br><br>
        <label for="Categoria">Tipo de preguntas: </label>
        
        <select name="category">
            <option value="23">Historia</option>
            <option value="22">Geografia</option>
            <option value="27">Animales</option>
            <option value="15">Videojuegos</option>
        </select>
        <br><br>
        <label for="Dificultad">Dificultad: </label>
        <select name="difficulty">
            <option value="easy">Easy</option>
            <option value="medium">Medium</option>
            <option value="hard">Hard</option>
        </select>
        <br><br>
        <input type="submit" value="Buscar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $amount = $_POST["amount"];
            $category = $_POST["category"];
            $difficulty = $_POST["difficulty"];
            $amount = "amount=$amount";
            $category = "category=$category";
            $difficulty = "difficulty=$difficulty";

            $apiUrl = "https://opentdb.com/api.php?$amount&$category&$difficulty";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $respuesta = curl_exec($curl);
            $array = json_decode($respuesta, true);
            $resultados = $array["results"];
        
            foreach ($resultados as $resultado) {
            ?>
            <center>
            <h3>
                <?php echo $resultado['question'] ?>
            </h3>
            </center>
            <center><h5>Categoria: <?php echo $resultado['category'] ?></h5></center>
            <center><h5>Dificultad: <?php echo $resultado['difficulty'] ?></h5></center>
            <center><p style="color: green;"><?php echo $resultado['correct_answer'] ?></p></center>
                <?php
                    foreach ($resultado['incorrect_answers'] as $resmala) {
                ?>
                    <center><p style="color: red;"><?php echo $resmala ?></p></center>
                    <?php
                    }
                ?>
            <?php
            }
        }
        ?>
    
</body>
</html>