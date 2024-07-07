

<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('conductor.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('conductor.c_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('conductor.c_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Sidebar Navigation end-->
    <?php echo $__env->make('conductor.c_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->make('conductor.c_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH D:\tesis\tesis\resources\views/conductor/index.blade.php ENDPATH**/ ?>