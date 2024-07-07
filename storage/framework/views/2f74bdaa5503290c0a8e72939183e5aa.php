<!DOCTYPE html>
<html>
<head>
  <title>Agregar conductor</title>
  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border: 2px solid #007bff;
    }
    label {
      display: inline-block;
      width: 120px;
      margin-bottom: 10px;
      font-weight: bold;
    }
    input[type=text], input[type=password], input[type=number], input[type=email] {
      width: calc(100% - 130px);
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .btn-primary {
      display: block;
      width: 100%;
      background-color: #007bff;
      color: #fff;
      padding: 10px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="page-content" style="background-color: #ffffff;">
    <div class="page-header" style="background-color: #ffffff;">
      <h1>Este módulo te permite agregar conductores</h1><br>
      <div class="container">
        <h1 style="font-size: 30px; font-weight: bold; text-align: center;">Agregar </h1><br>
        <form action="<?php echo e(url('add_room')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php if(session('success')): ?>
              <div class="alert alert-success">
                  <?php echo e(session('success')); ?>

              </div>
          <?php endif; ?>
          <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" id="name" name="name" required maxlength="15" pattern="[A-Za-zÀ-ÿ\s]+" title="Solo se permiten letras y espacios." value="<?php echo e(old('name')); ?>">
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
              <input type="email" id="email" name="email" required value="<?php echo e(old('email')); ?>">
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
              <input type="number" id="phone" name="phone" required value="<?php echo e(old('phone')); ?>">
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
              <input class="btn btn-primary" type="submit" value="Agregar">
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\tesis\tesis\tesis\resources\views/admin/create_room.blade.php ENDPATH**/ ?>