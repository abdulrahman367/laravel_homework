 <?php $__env->startSection('title'); ?>
     Login page
 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('content'); ?>
 <div class="container">
     <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6  mt-5 pt-5 ml-5 h-100">
             <div class="login text-white ">
                  <h2 >Login </h2>
                 <form action="<?php echo e(route('login.auth')); ?>" method="post" class="text-white bg-transparent" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" name="username" id="title" class="text-white" placeholder=" Your Username">
                        <input type="text" name="password" id="title" class="text-white" placeholder=" Your Password">
                        <button type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohul\OneDrive\Desktop\laravel8hw\resources\views/login/login.blade.php ENDPATH**/ ?>