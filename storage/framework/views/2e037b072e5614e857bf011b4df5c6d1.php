
<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">



          <center>

          <h1 style="font-size:40px; font-weight:bolder;">
            Galeria
          </h1>
          <div class="row">
          <?php $__currentLoopData = $gallary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4">
          <img style="height: 200!important; width: 300px!important;" src="/gallary/<?php echo e($gallary->image); ?>" >
          <a class="btn btn-danger" href="<?php echo e(url('c_delete_gallary',$gallary->id)); ?>">Eliminar Imagen</a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>



          
          <form action="<?php echo e(url('c_upload_gallary')); ?>" method="Post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div style="padding:30px;">
                <label style="color:white; font-weight:bold;" >Carga una Imagen:</label>
                <input type="file" name="image">
            
                
                <input class="btn btn-success" type="submit" value="Agregar Imagen">
            </div>


          </form>
          </center>
         



          </div>
          </div>
          </div>

    <?php echo $__env->make('conductor.c_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH D:\tesis\tesis\resources\views/conductor/c_gallary.blade.php ENDPATH**/ ?>