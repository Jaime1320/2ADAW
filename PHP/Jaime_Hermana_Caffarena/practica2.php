<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require "../Jaime_Hermana_Caffarena/funciones.php"; ?>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <form action="" method="post">
        <h4>Ingrese una cantidad</h4>
        <label>Introduzca una cantidad</label>
        <br>
        <input type="text" name="cantidad">
        <br><br>
        <label>Elija su conversion</label>
        <br><br>
        <div id="u1">
            <fieldset>
                <input type="radio" id="euros" name="u1" value="EUROS">
                <label for="EUROS">EUROS</label><br>
                <input type="radio" id="dolares" name="u1" value="DOLARES">
                <label for="DOLARES">DOLARES</label><br>
                <input type="radio" id="yenes" name="u1" value="YENES">
                <label for="YENES">YENES</label><br>
            </fieldset>
        </div>
        <div id="u2">
            <fieldset>
                <input type="radio" id="euros" name="u2" value="EUROS">
                <label for="EUROS">EUROS</label><br>
                <input type="radio" id="dolares" name="u2" value="DOLARES">
                <label for="DOLARES">DOLARES</label><br>
                <input type="radio" id="yenes" name="u2" value="YENES">
                <label for="YENES">YENES</label><br>
            </fieldset>
        </div>
        <input type="hidden" name="action" value="res">
        <input type="submit" value="Transformar">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["action"] == "res") {
                if (isset($_POST["u1"]) && isset($_POST["u2"])) {
                    $cantidad = (float)$_POST["cantidad"];
                    $u1 = $_POST["u1"];
                    $u2 = $_POST["u2"];
                    if (!empty($cantidad)) {
                        $div1 = $_POST["u1"];
                        $div2 = $_POST["u2"];
                        echo "<h3>" . cambiarDivisa($cantidad, $u1, $u2) . "</h3>";
                    } else {
                        echo "<h3>Pon numero</h3>";
                    }
                } else {
                    echo "<h3>elige unidad</h3>";
                }
            }
        }
        ?>
    </form>
    <br><br>
    <form action="" method="post">
        <fieldset>
            <label for="num">Numero: </label>
            <input name="num" type="number">
            <label for="operacion">Tipo de Operación</label>
            <select name="operacion">
                <option value="sumatorio">Sumatorio</option>
                <option value="factorial">Factorial</option>
            </select>
            <input type="hidden" name="action" value="res1">
            <br><br>
            <input type="submit" value="Calcular">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "res1") {
                    $numero = (int) $_POST["num"];

                    $eleccion = $_POST["operacion"];
                    if ($eleccion == "sumatorio") {
                        if ($numero >= 0) {
                            $resultado = sumatorio($numero);
                            echo "<h4>El sumatorio es $resultado</h4>";
                        } else {
                            echo "El numero debe ser mayor que 0";
                        }
                    } else {
                        if ($numero >= 1) {
                            $resultado = factorial($numero);
                            echo "<h4>El sumatorio es $resultado</h4>";
                        } else {
                            echo "El numero debe ser mayor o igual que 1";
                        }
                    }
                }
            }
            ?>
        </fieldset>
    </form>

</body>

</html>