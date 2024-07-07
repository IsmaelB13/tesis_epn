<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Color de fondo para toda la página */
            margin: 0;
            padding: 0;
        }
        .table_deg {
            border: 2px solid black; /* Borde negro para la tabla */
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }
        .th_deg {
            background: #007bff; /* Fondo azul para los encabezados */
            color: white; /* Texto blanco para los encabezados */
            padding: 20px; /* Espaciado interno */
            
        }
        tr {
            border: 2px solid black; /* Borde negro para las filas */
        }
        td {
            padding: 10px; /* Espaciado interno de las celdas */
            
        }
        .btn {
            text-decoration: none; /* Quita el subrayado predeterminado en los botones */
            color: white; /* Texto blanco en los botones */
            padding: 8px 16px; /* Espaciado interno de los botones */
            border-radius: 4px; /* Bordes redondeados en los botones */
        }
        .btn-success {
            background-color: #28a745; /* Fondo verde para el botón "Enviar Correo" */
        }
        .btn-success:hover {
            background-color: #218838; /* Cambio de color al pasar el mouse sobre el botón */
        }
        .pagination-links {
    margin-top: 10px; /* Ejemplo de ajuste de margen superior */
}

.pagination-info {
    margin-right: 10px; /* Ejemplo de ajuste de margen derecho */
}
    </style>
</head>
<body>
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Sidebar Navigation end-->
    <div class="page-content" style="background-color: #ffffff;">
        <div class="page-header" style="background-color: #ffffff;">
            <h1>Este módulo te permite responder a las observaciones de los clientes</h1>
            <div class="container-fluid">
                <table class="table_deg">
                    
                    <tr>
                        <th class="th_deg">Nombre</th>
                        <th class="th_deg">Correo</th>
                        <th class="th_deg">Teléfono</th>
                        <th class="th_deg">Observación</th>
                        <th class="th_deg">Tour</th>
                        <th class="th_deg">Acción</th>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->phone); ?></td>
                        <td><?php echo e($item->message); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo e(url('send_mail', $item->id)); ?>">Responder</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                
            <h1><br><br></h1>
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
                
            </div>
        </div>
    </div>
    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\tesis\tesis\resources\views/admin/all_message.blade.php ENDPATH**/ ?>