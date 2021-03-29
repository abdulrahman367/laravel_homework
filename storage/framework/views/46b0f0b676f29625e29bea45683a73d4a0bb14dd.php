<?php $__env->startSection('dashboard-content'); ?>
<?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
                <?php echo e(return route('login')); ?>

            <?php endif; ?>
        <?php else: ?>
    <h3 class="text-white mt-3">Add New Post</h3>
        <?php if(Session::has('post_msg')): ?>
            <div class="alert alert-seccess text-white" role="alert">
                <?php echo e(Session::get('post_msg')); ?>

            </div>
        <?php endif; ?>
    <form action="<?php echo e(route('create.post')); ?>" method="post" class="text-white bg-transparent" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
            <div class="form-group position-relative">
                <input type="text" name="title" id="title" class="text-white" placeholder="Post Title">
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Post something..."></textarea>
                <input type="file" name="img" id="img" class="form-control-file ">
                <button type="submit">Upload</button>
            </div>
    </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohul\OneDrive\Desktop\laravel8hw\resources\views/dashboard/add-post.blade.php ENDPATH**/ ?>