<?php $__env->startSection('dashboard-content'); ?>
<div class="dashboard-content text-white p-3">
    <h3>All Posts</h3>
    <table class=" table text-white mt-4">
        <thead>
            <th>Post Id</td>
            <th>Post Title</td>
            <th>Post Author</td>
            <th>Action</td>
        </thead>
        <tbody>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->post_title); ?></td>
                <td>Author</td>
                <td><a href="<?php echo e(route('delete.post', ['id'=>$item->id])); ?>">Delete</a> <a href="">Update</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohul\OneDrive\Desktop\laravel8hw\resources\views/dashboard/allpost.blade.php ENDPATH**/ ?>