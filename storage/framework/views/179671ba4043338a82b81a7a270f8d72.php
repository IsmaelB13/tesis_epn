<!-- body -->
<body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="<?php echo e(url('/')); ?>"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="<?php echo e(url('/')); ?>">Inicio</a>
                              </li>
                              
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(url('our_rooms')); ?>">Viajes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(url('hotel_gallary')); ?>">Galeria</a>
                              </li>

                              <!--  
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(url('our_calificacion')); ?>">Calificar</a>
                              </li>--> 
                              
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(url('contact_us')); ?>">Sugerencias</a>
                              </li>



                              
                              

                              <?php if(Route::has('login')): ?>
                          
                                <?php if(auth()->guard()->check()): ?>
                                     <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 
                                      <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
 
                                <?php else: ?>
                                    <li class="nav-item" style="padding-right:10px;">
                                        <a class="btn btn-success" href="<?php echo e(url('login')); ?>">Login</a>
                                    </li>

                                    <?php if(Route::has('register')): ?>
                                            <li class="nav-item">
                                                <a class="btn btn-primary" href="<?php echo e(url('register')); ?>">Register</a>
                                            </li>

                                    <?php endif; ?>
                                <?php endif; ?>
                            
                        <?php endif; ?>



                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div><?php /**PATH D:\tesis\tesis\resources\views/home/header.blade.php ENDPATH**/ ?>