<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require ('C:\Users\usuario\Documents\2ADAW\PHP\Funciones\ejercicio_irpf.php')?>
    <?php require('C:\Users\usuario\Documents\2ADAW\PHP\Funciones\ejercicio_iva.php')?>
</head>

<body>
    <h2>Formulario IVA</h2>
    <form action="" method="post">
        <label>Precio</label>
        <br>
        <input type="text" name="precio">
        <br><br>
        <label>Tipo de iva</label>
        <br>
        <input type="text" name="tipo_iva">
        <br><br>
        <input type="hidden" name="action" value="iva">
        <input type="submit" value="Calcular">
    </form>
    <h2>Formulario IRPF</h2>
    <form action="" method="post">
        <label>Salario</label>
        <br>
        <input type="number" step="1000" name="salario">
        <br><br>
        <input type="hidden" name="action" value="irpf">
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["action"] == "iva") {
            $precio = (float) $_POST["precio"];
            $iva = $_POST["tipo_iva"];
            echo precioConIva($precio, $iva);
        }
        if ($_POST["action"] == "irpf") {
            $salario = (float) $_POST["salario"];
            echo calcularIRPF($salario);
        }
    }
    ?>
</body>

</html>