<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }
        .th_deg {
            background-color: #007bff; /* Color de fondo azul */
            color: white; /* Color del texto blanco */
            padding: 15px;
        }
        tr {
            border: 2px solid black; 
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
<?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Sidebar Navigation end-->

<div class="page-content" style="background-color: #ffffff;">
    <div class="page-header" style="background-color: #ffffff;">
        <div class="container-fluid">
            <h1>Este modulo te permite ver la información de la reserva</h1>
          
            <table class="table_deg">
                <tr>
                    <th class="th_deg">ID</th>
                    <th class="th_deg">Cliente</th>
                    <th class="th_deg">Teléfono</th>
                    <th class="th_deg">Llegada</th>
                    <th class="th_deg">Salida</th>
                    <th class="th_deg">Estado</th>
                    <th class="th_deg">Solicitud</th>
                    <th class="th_deg"></th>
                </tr>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->room_id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->phone); ?></td>
                    <td><?php echo e($item->start_date); ?></td>
                    <td><?php echo e($item->end_date); ?></td>
                    <td>
                        <?php if($item->status == 'Aprobado'): ?>
                            <span style="color:green;">Aprobado</span>
                        <?php elseif($item->status == 'Rechazado'): ?>
                            <span style="color:red;">Rechazado</span>
                        <?php elseif($item->status == 'Espera'): ?>
                            <span style="color:rgb(255, 102, 0);">Espera</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($item->status == 'Espera'): ?>
                            <span style="padding-bottom:10px;">
                                <a onclick="return confirm('¿Seguro que desea eliminar?');" class="btn btn-danger" href="<?php echo e(url('c_delete_booking',$item->id)); ?>">Eliminar</a>
                                <a class="btn btn-success" href="<?php echo e(url('c_approve_book',$item->id)); ?>">Aprobar</a>
                                <a class="btn btn-warning" href="<?php echo e(url('c_reject_book',$item->id)); ?>">Rechazar</a>
                            </span>
                        <?php else: ?>
                            <!-- Si no está en estado 'waiting', deshabilitar los botones -->
                            <span style="padding-bottom:10px;">
                                <button class="btn btn-danger" disabled>Eliminar</button>
                                <button class="btn btn-success" disabled>Aprobar</button>
                                <button class="btn btn-warning" disabled>Rechazar</button>
                            </span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>

<?php echo $__env->make('conductor.c_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\tesis\tesis\resources\views/conductor/c_booking.blade.php ENDPATH**/ ?>