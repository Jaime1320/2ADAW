<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar bebidas</title>
</head>
<body>
    <form method="post" action="<?php echo e(route('bebidas.update',['bebida' =>$bebida ->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('PUT')); ?>

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo e($bebida -> nombre); ?>"><br><br>
        <label>Precio:</label>
        <input type="number" step="0.1" name="precio" value="<?php echo e($bebida -> precio); ?>"><br><br>
        <label>Tipo:</label>
        <select name="tipo">
            <option selected hidden value="<?php echo e($bebida -> tipo); ?>"><?php echo e($bebida -> tipo); ?></option>
            <option value="Refresco">Refresco</option>
            <option value="Alcohol">Alcohol</option>
        </select>
        <br><br>
        <input type="submit" value="Editar bebida">
    </form>
</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\restaurante\resources\views/bebidas/edit.blade.php ENDPATH**/ ?>