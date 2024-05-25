<?php $__env->startSection('content'); ?>
    <h1>Forum</h1>
    <?php $__currentLoopData = $forums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            
            <h2><a href="<?php echo e(route('forum-show', $forum->id)); ?>"><?php echo e($forum->title); ?></a></h2>
            <p><?php echo e($forum->content); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hayed-backend/resources/views/forum/index.blade.php ENDPATH**/ ?>