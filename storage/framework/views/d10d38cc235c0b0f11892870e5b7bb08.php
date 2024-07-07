<div  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Galeria</h2>
                  </div>
               </div>
            </div>
            <div class="row">

               <?php $__currentLoopData = $gallary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="/gallary/<?php echo e($gallary->image); ?>" alt="#"/></figure>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
         </div>
      </div><?php /**PATH D:\tesis\tesis\tesis\resources\views/home/galary.blade.php ENDPATH**/ ?>