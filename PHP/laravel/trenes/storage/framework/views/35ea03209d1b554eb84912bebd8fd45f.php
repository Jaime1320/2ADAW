<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <a href="<?php echo e(route('trains.create')); ?>">Crear tren</a>
    <table border="2px solid black">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año de fabricacion</th>
                <th>Tipo de tren</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $trains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $train): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($train->name); ?></td>
                    <td><?php echo e($train->passengers); ?></td>
                    <td><?php echo e($train->year); ?></td>
                    <td><?php echo e($train->train_type->type); ?></td>
                    <td><form action="<?php echo e(route('trains.show', ['train' => $train->id])); ?>">
                        <input type="submit" value="Ver">
                    </form>
                    </td>
                    <td>
                        <form action="<?php echo e(route('trains.edit', ['train' => $train->id])); ?>">
                        <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="<?php echo e(route('trains.destroy', ['train' => $train->id])); ?>" method="post">
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
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\trenes\resources\views/trains/index.blade.php ENDPATH**/ ?>