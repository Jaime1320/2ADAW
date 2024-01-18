<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Plato</title>
</head>
<body>
    <form method="post" action="<?php echo e(route('platos.update', ['plato'=>$plato->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('PUT')); ?>

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo e($plato -> nombre); ?>"><br><br>
        <label>Precio:</label>
        <input type="number" step="0.1" name="precio" value="<?php echo e($plato -> precio); ?>""><br><br>
        <label>Tipo:</label>
        <select name="tipo">
            <option selected hidden value="<?php echo e($plato -> tipo_plato->tipo); ?>"><?php echo e($plato -> tipo_plato->tipo); ?></option>
            <option value="1">Racion</option>
            <option value="2">Media racion</option>
            <option value="3">Tapa</option>
        </select>
        <br><br>
        <input type="submit" value="Editar plato">
    </form>
</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\restaurante\resources\views/platos/edit.blade.php ENDPATH**/ ?>