<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de tren</title>
</head>
<body>
    
    <table>
            <thead>
                <tr>
                    <th>Tipo de tren</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $trainTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($trainType->type); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    
</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\trenes\resources\views/trainstypes/index.blade.php ENDPATH**/ ?>