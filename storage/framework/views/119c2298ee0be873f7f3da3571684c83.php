<!DOCTYPE html>
<html>
<head>
    <base href="/public";>
    <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .page-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            border: 2px solid #ffc107; /* Borde amarillo */
        }

        .form-container h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container textarea,
        .form-container select,
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-container img {
            display: block;
            margin: 0 auto 15px auto;
            max-width: 100px;
            border-radius: 4px;
        }

        .form-container .btn {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #ffc107;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        .form-container .btn:hover {
            background-color: #e0a800;
        }

        .alert {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

    <div class="page-content" style="background-color: #ffffff;">
        <div class="form-container">
            <h1>Actualizar Viaje</h1>

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

            <form action="<?php echo e(url('c_edit_room', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div>
                    <label>Título</label>
                    <input type="text" name="title" value="<?php echo e($data->room_title); ?>" maxlength="25" pattern="[A-Za-z\s]+" required>
                </div>
                <div>
                    <label>Descripción</label>
                    <textarea name="description" maxlength="50" required><?php echo e($data->description); ?></textarea>
                </div>
                <div>
                    <label>Precio</label>
                    <input type="number" name="price" value="<?php echo e($data->price); ?>" max="1000" required>
                </div>
                <div>
                    <label for="type">Tipo de Vehículo</label>
                    <select id="type" name="type" required>
                        <option selected value="Automovil">Automóvil</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Furgoneta">Furgoneta</option>
                        <option value="Automovil Xl">Automóvil XL</option>
                        <option value="Automovil Deluxe">Automóvil Deluxe</option>
                    </select>
                </div>
                <div>
                    <label for="wifi">Pago</label>
                    <select id="wifi" name="wifi" required>
                        <option selected value="Efectivo">Efectivo</option>
                        <option value="Transferencia">Transferencia</option>
                    </select>
                </div>
                <div>
                    <label>Imagen</label>
                    <img src="/room/<?php echo e($data->image); ?>" alt="Room Image">
                </div>
                <div>
                    <label>Actualizar Imagen</label>
                    <input type="file" name="image" accept=".jpg,.png,.jfif">
                </div>
                <div>
                    <input class="btn" type="submit" value="Actualizar">
                </div>
            </form>
        </div>
    </div>

    <?php echo $__env->make('conductor.c_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\tesis\tesis\resources\views/conductor/c_update_room.blade.php ENDPATH**/ ?>