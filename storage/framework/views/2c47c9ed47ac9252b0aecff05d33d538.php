<!DOCTYPE html>
<html lang="en">
   <head>
    <?php echo $__env->make('home.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </head>
   <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
    <?php echo $__env->make('home.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end banner -->
      <!-- about -->
     <?php echo $__env->make('home.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end about -->
      <!-- our_room -->
      <?php echo $__env->make('home.room', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end our_room -->
      <!-- gallery -->
      <?php echo $__env->make('home.galary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end gallery -->
      <!-- blog -->
      <?php echo $__env->make('home.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end blog -->
    
      <!--  contact -->
      <?php echo $__env->make('home.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end contact -->
      <!--  footer -->
      <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end footer -->
      <!-- Javascript files-->
       <script>
         $(window).scroll(function{
            sessionStorage.scrollTop = $(this).scrollTop();
         });
         $(document).ready(function{
            if(sessionStorage.scrollTop != "undefined"){
               $(window).scrollTop(sessionStorage.scrollTop);
            }
         });
       </script>
   </body>
</html><?php /**PATH D:\tesis\tesis\tesis\resources\views/home/index.blade.php ENDPATH**/ ?>