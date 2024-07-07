<!DOCTYPE html>
<html>
<head>
  <title>Calificaciones de Clientes</title>
  <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <style type="text/css">
    .table_deg {
      border: 2px solid black; /* Borde negro */
      margin: auto;
      width: 80%;
      text-align: center;
      margin-top: 40px;
    }
    .th_deg {
      background: #007bff; /* Fondo azul */
      color: white; /* Texto blanco para mejor legibilidad */
      padding: 15px;
    }
    tr {
      border: 2px solid black; /* Borde negro */
    }
    td {
      padding: 10px;
    }
  </style>
</head>
<body>
  <?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="page-content" style="background-color: #ffffff;">
    <div class="page-header" style="background-color: #ffffff;">
      <div class="container-fluid">
        <h1>Este módulo te permite visualizar la calificación de los clientes sobre un viaje realizado</h1><br>

        <?php if($ver->isEmpty()): ?>
          <p>No hay registros disponibles.</p>
        <?php else: ?>
          <table class="table_deg">
            <tr>
              <th class="th_deg">Cliente</th>
              <th class="th_deg">Email</th>
              <th class="th_deg">Teléfono</th>
              <th class="th_deg">Calificación</th>
            </tr>
            <?php $__currentLoopData = $ver; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($item->calificacion !== null && $item->estado !== 'rechazado'): ?>
                <tr>
                  <td><?php echo e($item->name); ?></td>
                  <td><?php echo e($item->email); ?></td>
                  <td><?php echo e($item->phone); ?></td>
                  <td>
                    <?php echo e($item->calificacion); ?>

                  </td>
                </tr>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\tesis\tesis\tesis\resources\views/conductor/c_view_calificacion.blade.php ENDPATH**/ ?>