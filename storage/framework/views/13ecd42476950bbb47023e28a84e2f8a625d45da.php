<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="line"></div>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-white" href="#">DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="#" class="nav-link text-white" data-toggle="modal" data-target=".modal1">Search</a>
          <div class="modal fade modal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <input type="text" placeholder="Search" class="form-control border-0">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">notification</a>
          <div class="dropdown-menu dropdown-menu-right text-gray" aria-labelledby="navbarDropdown">
            <a class="dropdown-item pt-1" href="#">Mike John responded to your email</a>
            <a class="dropdown-item pt-1" href="#">You have 5 more tasks</a>
            <a class="dropdown-item pt-1" href="#">Your friend Michael is in town</a>
            <a class="dropdown-item pt-1" href="#">4 new notfication</a>

          </div>
        </li>

            <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
            <?php endif; ?>
        <?php else: ?>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->name); ?>

            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item pt-1" href="#">Profile</a>
                <a class="dropdown-item pt-1" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>


                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
    <?php endif; ?>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="contianer-fluid">
      <div class="row">
          <div class="col-md-3">
            <div class="sidebar-wrapper" id="sidebar">
                <div class="sidebar">
                  <div class="sidebar-logo mt-3">
                    <a href="#">CODE 9INE</a>
                  </div>
                  <div class="sidebar-content m-1">
                    <ul>
                      <li class="sidebar-item "><a href="" class="sidebar-link">Dashboard</a></li>
                      <li class="sidebar-item "><a href="" class="sidebar-link">User Profile</a></li>
                      <li class="sidebar-item "><a href="" class="sidebar-link">All Posts</a></li>
                      <li class="sidebar-item "><a href="" class="sidebar-link">Add New Post</a></li>

                    </ul>
                  </div>

                </div>
              </div>
          </div>
          <div class="col-md-9">
                <?php echo $__env->yieldContent('dashboard-content'); ?>
          </div>
      </div>
  </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohul\OneDrive\Desktop\laravel8hw\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>