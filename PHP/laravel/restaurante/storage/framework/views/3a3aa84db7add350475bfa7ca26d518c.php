<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta</title>
</head>
<body>
    <h1>Esta es la carta</h1>
    <table>
        <thead>
            <tr>
                <th>Plato</th>
                <th>Precio</th>
                <th>Racion</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $__currentLoopData = $platos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($plato[0]); ?></td>
                <td><?php echo e($plato[1]); ?></td>
                <td><?php echo e($plato[2]); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $bebidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bebida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($bebida[0]); ?></td>
                <td><?php echo e($bebida[1]); ?></td>
                <td><?php echo e($bebida[2]); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\restaurante\resources\views//carta.blade.php ENDPATH**/ ?>