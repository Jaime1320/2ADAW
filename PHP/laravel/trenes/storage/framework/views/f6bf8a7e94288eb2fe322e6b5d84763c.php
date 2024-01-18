<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>
<body>
    <a href="<?php echo e(route('tickets.create')); ?>">Crear ticket</a>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Tipo de ticket</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($ticket->date); ?></td>
                    <td><?php echo e($ticket->price); ?></td>
                    <td><?php echo e($ticket->train_name->name); ?></td>
                    <td><?php echo e($ticket->ticket_type->type); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\usuario\Documents\2ADAW\PHP\laravel\trenes\resources\views/tickets/index.blade.php ENDPATH**/ ?>