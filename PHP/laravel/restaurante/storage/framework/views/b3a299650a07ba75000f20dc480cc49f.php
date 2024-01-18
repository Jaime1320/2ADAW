<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>platos</title>
</head>
<body>
    <h1>Estos son mis platillos</h1>
    <h2><?php echo e($mensaje); ?></h2>

    <p>
        <a href="<?php echo e(route('platos.create')); ?>">Crear Plato</a>
    </p>
    <table border="1px">
        <thead>
            <tr>
                <th>Plato</th>
                <th>Precio</th>
                <th>Racion</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $__currentLoopData = $platos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($plato->nombre); ?></td>
                <td><?php echo e($plato->precio); ?></td>
                <td><?php echo e($plato->tipo_plato->tipo); ?></td>
                <td>
                    <form action="<?php echo e(route('platos.show',['plato' => $plato ->id])); ?>" method="get">
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('platos.edit',['plato' => $plato ->id])); ?>" method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('platos.destroy',['plato' => $plato ->id])); ?>" method="post">
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
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\restaurante\resources\views/platos/index.blade.php ENDPATH**/ ?>