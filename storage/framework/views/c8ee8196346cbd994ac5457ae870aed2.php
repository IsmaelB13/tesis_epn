<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Sugerencias</h2>
                  </div>

                  <?php if(session()->has('message')): ?>
                  <div class="alert alert-success">
                     <button type="button" class="close" data-bs-dismiss='alert'>x</button>
                  <?php echo e(session()->get('message')); ?>


                  </div>

                  

                  <?php endif; ?>





               </div>
            </div>

            
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="<?php echo e(url('contact')); ?>" method="Post">
                     <?php echo csrf_field(); ?>
                     <div class="row">
                         <div class="col-md-12">
                             <input class="contactus" placeholder="Nombre" type="text" name="name" 
                             <?php if(Auth::check()): ?>
                                 value="<?php echo e(Auth::user()->name); ?>" readonly
                             <?php endif; ?>
                             required> 
                         </div>
                         <div class="col-md-12">
                             <input class="contactus" placeholder="Correo" type="email" name="email" 
                             <?php if(Auth::check()): ?>
                                 value="<?php echo e(Auth::user()->email); ?>" readonly
                             <?php endif; ?>
                             required> 
                         </div>
                         <div class="col-md-12">
                             <input class="contactus" placeholder="Telefono" type="number" name="phone" 
                             <?php if(Auth::check()): ?>
                                 value="<?php echo e(Auth::user()->phone); ?>" readonly
                             <?php endif; ?>
                             required> 
                         </div>
                         <div class="col-md-12">
                             <label for="rooms">Selecciona el plan turístico:</label><br>
                             <select id="rooms" name="title">
                                 <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($rooms->room_title); ?>"><?php echo e($rooms->room_title); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                         </div>
                         <div>
                             <h1></h1>
                         </div>
                         <div class="col-md-12">
                             <textarea class="textarea" placeholder="Mensaje" name="message" required></textarea>
                         </div>
                         <div class="col-md-12">
                             <button type="submit" class="send_btn">Enviar</button>
                         </div>
                     </div>
                 </form>
                 
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Mitad+del+Mundo+Ecuador" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div><?php /**PATH D:\tesis\git hub\tesis\resources\views/home/contact.blade.php ENDPATH**/ ?>