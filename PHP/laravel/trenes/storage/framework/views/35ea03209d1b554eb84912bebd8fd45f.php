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
    <table>
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
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\trenes\resources\views/trains/index.blade.php ENDPATH**/ ?>