<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de tren</title>
</head>
<body>
    <a href="<?php echo e(route('trainsTypes.create')); ?>">Crear tipo de tren</a>
    <table border="2px solid black">
            <thead>
                <tr>
                    <th>Tipo de tren</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $trainTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($trainType->type); ?></td>
                        <td><form method="get" action="<?php echo e(route('trainsTypes.show', ['trainsType' => $trainType->id])); ?>">
                            <input type="submit" value="Ver">
                        </form>
                        </td>
                        <td>
                            <form action="<?php echo e(route('trainsTypes.edit', ['trainsType' => $trainType->id])); ?>">
                            <input type="submit" value="Editar">
                            </form>
                        </td>
                        <td>
                            <form action="<?php echo e(route('trainsTypes.destroy', ['trainsType' => $trainType->id])); ?>" method="post">
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
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\trenes\resources\views/trainstypes/index.blade.php ENDPATH**/ ?>