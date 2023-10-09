<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqui estan todos los formularios de clase</title>
</head>
<body>
<form action="" method="post">
        <label>Nombre</label>
        <br>
        <input type="text" name ="nombre">
        <br><br>
        <label>Apellido</label>
        <br>
        <input type="text" name ="apellido">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        echo "<h3>Formulario enviado</h3>";
        $nombre = $_POST ["nombre"];
        $apellido = $_POST["apellido"];
        echo "<h4>$nombre $apellido</h4>";
    }
    ?>
<br>
<form action="" method="post">
        <label>Número 1</label>
        <br>
        <input type="text" name ="num1">
        <br><br>
        <label>Número 2</label>
        <br>
        <input type="text" name ="num2">
        <br><br>
        <label>Número 3</label>
        <br>
        <input type="text" name ="num3">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST ["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        if (($num1 > $num2) && ($num1 > $num3)){
            echo "<h4>El número más grande es: $num1</h4>";
        }
        else if (($num2 > $num1) && ($num2 > $num3)){
            echo "<h4>El número más grande es: $num2</h4>";
        }
        else if (($num3 > $num1) && ($num3 > $num2)){
            echo "<h4>El número más grande es: $num3</h4>";
        } else {
            echo "<h4>Los tres números son iguales $num3</h4>";
        }
    }
    ?>
<br>
<form action="" method="post">
        <label>Base</label>
        <br>
        <input type="text" name ="base">
        <br><br>
        <label>Exponente</label>
        <br>
        <input type="text" name ="exponente">
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $base = (int) $_POST ["base"];
        $exponente = (int) $_POST["exponente"];
        echo "<h4>" . ($base**$exponente) . "</h4>";
    }
?>


</body>
</html>