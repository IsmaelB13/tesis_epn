<!DOCTYPE html>
<html>
<head>
  <title>Agregar Plan Turístico</title>
  <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    input[type=text], input[type=number], textarea, select, input[type=file] {
      width: calc(100% - 130px);
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    textarea {
      resize: vertical;
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
    .alert {
      color: #721c24;
      background-color: #f8d7da;
      border-color: #f5c6cb;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 4px;
    }
    .form-group.transferencia {
      display: none;
    }
  </style>
</head>
<body>
  <?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="page-content" style="background-color: #ffffff;">
    <div class="page-header" style="background-color: #ffffff;">
      <h1>Este módulo te permite agregar un viaje</h1><br>
      <div class="container">
        <h1 style="font-size: 30px; font-weight:bold; text-align: center;">Agregar </h1>

        <?php if($errors->any()): ?>
          <div class="alert">
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
          <div class="alert-success">
            <?php echo e(session('success')); ?>

          </div>
        <?php endif; ?>

        <form action="<?php echo e(url('c_add_room')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>

          <div class="form-group">
            <label for="title">Título</label>
            <input type="text" id="title" name="title" maxlength="45" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s]+" required>
          </div>
        
          <div class="form-group">
            <label for="description">Descripción Turística</label>
            <textarea id="description" name="description" rows="4" maxlength="50" required></textarea>
          </div>

          <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" id="price" name="price" max="1000" required>
          </div>

          <div class="form-group">
            <label for="type">Tipo de Vehiculo</label>
            <select id="type" name="type" required>
              <option selected value="Automovil">Automovil</option>
              <option value="Camioneta">Camioneta</option>
              <option value="Furgoneta">Furgoneta</option>
              <option value="Automovil XL">Automovil XL</option>
              <option value="Automovil Deluxe">Automovil Deluxe</option>
            </select>
          </div>

          <div class="form-group">
            <label for="wifi">Pago</label>
            <select id="wifi" name="wifi" required>
              <option selected value="efectivo">Efectivo</option>
              <option value="transferencia">Transferencia</option>
            </select>
          </div>

          <div class="form-group transferencia">
            <label for="bank">Banco</label>
            <input type="text" id="bank" name="bank" pattern="[A-Za-z\s]{1,20}" maxlength="20" title="Solo se permiten letras y espacios, máximo 20 caracteres" required>
          </div>

          <div class="form-group transferencia">
            <label for="account_number">Número de Cuenta ahorros (10 dígitos)</label>
            <input type="text" id="account_number" name="account_number" pattern="[0-9]{10}" title="Solo se permiten 10 números" required>
        </div>
          <div class="form-group">
            <label for="image">Imagen del Tour</label>
            <input type="file" id="image" name="image" accept=".jpg,.png,.jfif" required>
          </div>

          <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Agregar">
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php echo $__env->make('conductor.c_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#wifi').change(function() {
        if ($(this).val() == 'transferencia') {
          $('.form-group.transferencia').show();
        } else {
          $('.form-group.transferencia').hide();
        }
      });
    });
  </script>
</body>
</html>
<?php /**PATH D:\tesis\tesis\resources\views/conductor/c_create_room.blade.php ENDPATH**/ ?>