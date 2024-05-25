<?php $__env->startSection('content'); ?>
    <h1><?php echo e($forum->title); ?></h1>
    <p><?php echo e($forum->content); ?></p>

    <hr>

    <h3>Komentar</h3>
    <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="margin-left: 20px;">
        <p><?php echo e($reply->content); ?> - <small><?php echo e($reply->user->name); ?></small></p>
        <form action="<?php echo e(route('comments-like', $reply->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit">
                <?php echo e($reply->likes->count()); ?> Like
            </button>
        </form>
        <?php echo $__env->make('forum.comment', ['comment' => $reply], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<form action="<?php echo e(route('comments-store', $comment->forum_id)); ?>" method="POST" style="margin-left: 20px;">
    <?php echo csrf_field(); ?>
    <textarea name="content" rows="2" required></textarea>
    <input type="hidden" name="parent_id" value="<?php echo e($comment->id); ?>">
    <button type="submit">Balas</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hayed-backend/resources/views/forum/comment.blade.php ENDPATH**/ ?>