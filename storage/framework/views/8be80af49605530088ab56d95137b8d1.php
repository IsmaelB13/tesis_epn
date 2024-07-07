<!DOCTYPE html>
<html lang="en">
   <head>
    <?php echo $__env->make('home.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </head>
   <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </header>
     
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
</html><?php /**PATH D:\tesis\tesis\resources\views/home/contact_us.blade.php ENDPATH**/ ?>