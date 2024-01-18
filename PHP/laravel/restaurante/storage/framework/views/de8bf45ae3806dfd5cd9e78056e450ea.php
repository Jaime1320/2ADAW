<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bebidas</title>
</head>
<body>
    <h1>Estas son mis Bebidas</h1>
    <h2><?php echo e($mensaje); ?></h2>
    <table border="1px">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th>Ver bebida</th>
                <th>Editar bebida</th>
                <th>Borrar bebida</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $bebidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bebida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($bebida->nombre); ?></td>
                <td><?php echo e($bebida->precio); ?></td>
                <td><?php echo e($bebida->tipo); ?></td>
                <td>
                    <form action="<?php echo e(route('bebidas.show',['bebida' => $bebida ->id])); ?>" method="get">
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('bebidas.edit',['bebida' => $bebida ->id])); ?>" method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('bebidas.destroy',['bebida' => $bebida ->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\restaurante\resources\views/bebidas/index.blade.php ENDPATH**/ ?>