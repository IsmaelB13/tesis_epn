<!DOCTYPE html>
<html>
<head>
  <title>Update Room</title>
  <base href="/public";>
  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <style type="text/css">
    body {
      font-family: Arial, sans-serif; /* Cambiar la fuente según necesites */
      background-color: #f0f0f0; /* Color de fondo para toda la página */
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px; /* Ancho máximo del contenido del formulario */
      margin: auto; /* Centrar el contenido horizontalmente */
      padding: 20px;
      background-color: #fff; /* Fondo blanco para el formulario */
      border-radius: 8px; /* Bordes redondeados */
      box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Sombra ligera */
      border: 2px solid #ffc107; /* Borde amarillo */
    }
    label {
      display: inline-block;
      width: 120px; /* Ancho de las etiquetas */
      margin-bottom: 10px;
      font-weight: bold;
    }
    input[type=text], input[type=password], input[type=number], input[type=email] {
      width: calc(100% - 130px); /* Ancho de los campos de entrada */
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc; /* Borde del campo de entrada */
      border-radius: 4px; /* Bordes redondeados */
      box-sizing: border-box; /* Asegurar que el padding no afecte el ancho total */
    }
    .btn-warning {
      display: block;
      width: 100%; /* Ancho completo del botón */
      background-color: #ffc107; /* Color de fondo del botón de advertencia */
      color: #212529; /* Color del texto del botón de advertencia */
      padding: 10px 0; /* Padding arriba y abajo, 0 a los lados para centrarlo */
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    .btn-warning:hover {
      background-color: #e0a800; /* Cambio de color al pasar el mouse sobre el botón */
    }
  </style>
</head>
<body>
  <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="page-content" style="background-color: #ffffff;">
    <div class="page-header" style="background-color: #ffffff;">
   
        <h1>Este módulo te permite actualizar la información del conductor</h1><br>
        
      <div class="container">
        
        <h1 style="font-size: 30px; font-weight:bold; text-align: center;">Actualizar </h1> <br>

        <form action="<?php echo e(url('edit_room', $data->id)); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
      
      
          <?php if(session('success')): ?>
              <div class="alert alert-success">
                  <?php echo e(session('success')); ?>

              </div>
          <?php endif; ?>
      
          <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" id="name" name="name" required maxlength="15" pattern="[A-Za-zÀ-ÿ\s]+" title="Solo se permiten letras y espacios." value="<?php echo e(old('name', $data->name)); ?>">
              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="alert alert-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
      
          <div class="form-group">
              <label for="email">Correo</label>
              <input type="email" id="email" name="email" required value="<?php echo e(old('email', $data->email)); ?>">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="alert alert-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
      
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      
          <div class="form-group">
              <label for="phone">Teléfono</label>
              <input type="number" id="phone" name="phone" required value="<?php echo e(old('phone', $data->phone)); ?>">
              <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="alert alert-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
      
          <input type="hidden" id="usertype" name="usertype" value="conductor">
      
          <div class="form-group">
              <input class="btn btn-warning" type="submit" value="Actualizar">
          </div>
      </form>
      
      </div>
    </div>
  </div>

  <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\tesis\tesis\resources\views/admin/update_room.blade.php ENDPATH**/ ?>