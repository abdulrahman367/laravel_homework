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
            <tr>
                <td>221</td>
                <td>New System</td>
                <td>Ali Rostami</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohul\OneDrive\Desktop\laravel8hw\resources\views/dashboard/all-post.blade.php ENDPATH**/ ?>