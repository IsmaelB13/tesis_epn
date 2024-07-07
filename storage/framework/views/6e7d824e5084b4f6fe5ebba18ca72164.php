<!DOCTYPE html>
<html>
  <head>
    <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">
        .table_deg {
            border: 2px solid black; /* Cambiado a negro */
            margin:auto;
            width:80%;
            text-align: center;
            margin-top:40px;
        }
        .th_deg {
            background: #007bff; /* Cambiado a azul */
            color: white; /* Texto en blanco para mejor legibilidad */
            padding:15px;
        }

        tr {
            border: 2px solid black; /* Cambiado a negro */
        }
        td {
            padding:10px;
      
        }
    </style>
  </head>
  <body>
    <?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
      <!-- Sidebar Navigation end-->

      <div class="page-content" style="background-color: #ffffff;" >
        <div class="page-header" style="background-color: #ffffff;">
          <div class="container-fluid">
            <h1>Este módulo te permite visualizar la calificación de los clientes sobre un viaje realizado</h1><br>

          <table class ="table_deg">
            <tr>
                <th class = "th_deg">Cliente</th>
                <th class = "th_deg">Email</th>
                <th class = "th_deg">Teléfono</th>
                <th class = "th_deg">Calificación</th>
            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->calificacion !== null): ?>
                <tr>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->phone); ?></td>
                    <td><?php echo e($item->calificacion); ?></td>
                </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
          <br>
          <center>
          <h1>¡No existen registros!</h1>
        </center>
          </div>
        </div>
      </div>

    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH D:\tesis\tesis\resources\views/admin/booking.blade.php ENDPATH**/ ?>