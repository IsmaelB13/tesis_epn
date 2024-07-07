<div class="our_room">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="titlepage">
                   <h2>Viajes </h2>
                   <p>Vive las experiencias turísticas más increíbles en Quito</p>
               </div>
           </div>
       </div>

       <div class="row">
           <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-md-4 col-sm-6">
               <div id="serv_hover" class="room">
                   <div class="room_img">
                       <img style="height:200px; width:320px" src="room/<?php echo e($rooms->image); ?>" alt="#"/>
                   </div>
                   <div class="bed_room">
                       <h3><?php echo e($rooms->room_title); ?></h3>
                       <p style="padding:10px"><?php echo Str::limit($rooms->description, 100); ?></p>

                       <?php if(Auth::check()): ?>
                           <a class="btn btn-primary" href="<?php echo e(url('room_details', $rooms->id)); ?>">Ver Detalles</a>
                       <?php else: ?>
                           <button class="btn btn-primary" disabled>Ver Detalles</button>
                       <?php endif; ?>
                   </div>
               </div>
           </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
   </div>
</div>
<?php /**PATH D:\tesis\tesis\tesis\resources\views/home/room.blade.php ENDPATH**/ ?>