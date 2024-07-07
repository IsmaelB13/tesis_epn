<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style type="text/css">
        .table_deg {
    border: 2px solid black; /* Cambia el color del borde a negro */
    margin: auto;
    width: 80%;
    text-align: center;
    margin-top: 40px;
}

.th_deg {
    background-color: #007bff; /* Fondo azul para los encabezados */
    color: white; /* Texto blanco para los encabezados */
    padding: 20px;
    border-top: 2px solid black; /* Borde negro en la parte superior */
    border-left: none; /* Sin borde izquierdo */
    border-right: none; /* Sin borde derecho */
}


tr {
    border: 1px solid black; /* Borde negro para las filas */
}

td {
    padding: 10px;

}
.pagination-links {
    margin-top: 10px; /* Ejemplo de ajuste de margen superior */
}

.pagination-info {
    margin-right: 10px; /* Ejemplo de ajuste de margen derecho */
}


    </style>
    <!-- Añade el enlace a Bootstrap aquí -->
      <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">-->
</head>
<body>
    <?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Sidebar Navigation end-->
    <div class="page-content"style="background-color: #ffffff;">
        <div class="page-header" style="background-color: #ffffff;">
            <div class="container-fluid">
                
                <h1>Este modulo te permite ver la información del viaje</h1>
               
                <table class="table_deg">
                    <tr>
                        <th class="th_deg">Título</th>
                        <th class="th_deg">Precio</th>
                        <th class="th_deg">Tipo de Vehiculo</th>
                        <th class="th_deg">Imagen</th>
                        <th class="th_deg">Acciones</th>
                       
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->room_title); ?></td>
                        <td><?php echo e($item->price); ?></td>
                        <td><?php echo e($item->room_type); ?></td>
                        <td>
                            <img width="120" src="room/<?php echo e($item->image); ?>">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo e(url('c_detalles', $item->id)); ?>">Ver detalles</a>
                            <a onclick="return confirm('¿Seguro de eliminar este registro?')" class="btn btn-danger" href="<?php echo e(url('c_room_delete', $item->id)); ?>">Eliminar</a>
                            <a class="btn btn-success" href="<?php echo e(url('c_room_update', $item->id)); ?>">Actualizar</a>
                        </td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <!-- Paginación -->
                <div class="d-flex justify-content-center">
                    <div class="pagination-info mr-2"> <!-- Añadir margen derecho para separar del paginador -->
                        <span><?php echo e(__('pagination.showing')); ?> <?php echo e($data->firstItem()); ?> <?php echo e(__('pagination.to')); ?> <?php echo e($data->lastItem()); ?> <?php echo e(__('pagination.of')); ?> <?php echo e($data->total()); ?> <?php echo e(__('pagination.results')); ?></span>
                        <span class="ml-2"><?php echo e(__('pagination.page')); ?> <?php echo e($data->currentPage()); ?> <?php echo e(__('pagination.current_page')); ?> <?php echo e($data->lastPage()); ?></span>
                    </div>
                    <div > <!-- Añadir margen superior para separar -->
                        <?php echo e($data->links('vendor.pagination.simple-bootstrap-4')); ?>

                    </div>
                </div>
                
                
                <?php echo $__env->make('conductor.c_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\tesis\tesis\tesis\resources\views/conductor/c_view_room.blade.php ENDPATH**/ ?>