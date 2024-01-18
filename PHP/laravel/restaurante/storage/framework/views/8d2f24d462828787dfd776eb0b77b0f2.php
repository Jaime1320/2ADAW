<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear bebidas</title>
</head>
<body>
    <form method="post" action="<?php echo e(route('bebidas.store')); ?>">
        <?php echo csrf_field(); ?>
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>
        <label>Precio:</label>
        <input type="number" step="0.1" name="precio"><br><br>
        <label>Tipo:</label>
        <select name="tipo">
            <option value="Refresco">Refresco</option>
            <option value="Alcohol">Alcohol</option>
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\restaurante\resources\views/bebidas/create.blade.php ENDPATH**/ ?>