<?php $__env->startSection('title'); ?>
  Laravel Homework
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-white" href="#">AFG NEWS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white">Menu</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a href="#" class="nav-link text-white mx-1">Home</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white mx-1">About</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white mx-1">Contact</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white mx-1">Services</a>
        </li>
      </ul>
      <ul class="navbar-nav my-auto">
        <li class="nav-item">
            <a href="<?php echo e(route('login')); ?>" class="nav-link text-white mx-1">login</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white mx-1">Register</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container text-white">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 mt-3">
            <h1 >Latest News </h1>
             <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="news_content my-3">
                 <img src="<?php echo e(asset('images')); ?>/<?php echo e($item->post_img); ?>" alt=""  width="100%">
                 <div class="mt-1"><h3><?php echo e($item->post_title); ?></h3></div>
                 <div class="desc">
                     <p class="fs-lg"><?php echo e($item->post_description); ?></p>
                    </div>
                </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




        </div>
          <div class="col-md-2"></div>
      </div>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohul\OneDrive\Desktop\laravel8hw\resources\views/index.blade.php ENDPATH**/ ?>