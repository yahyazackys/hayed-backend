<?php $__env->startSection('content'); ?>
    <h1><?php echo e($forum->title); ?></h1>
    <p><?php echo e($forum->content); ?></p>

    <hr>

    <h3>Komentar</h3>
    <?php $__currentLoopData = $forum->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin-bottom: 20px;">
            <p><?php echo e($comment->content); ?> - <small><?php echo e($comment->user->name); ?></small></p>
            <form action="<?php echo e(route('comments-like', $comment->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <button type="submit"><?php echo e($comment->likes->count()); ?> Like</button>
            </form>
            <button onclick="toggleReplyForm(<?php echo e($comment->id); ?>)">Balas</button>

            <!-- Form balasan untuk komentar utama -->
            <form id="reply-form-<?php echo e($comment->id); ?>" action="<?php echo e(route('comments-store', $forum->id)); ?>" method="POST" style="display:none; margin-left: 20px; margin-top: 10px;">
                <?php echo csrf_field(); ?>
                <textarea name="content" rows="2" required></textarea>
                <input type="hidden" name="parent_id" value="<?php echo e($comment->id); ?>">
                <button type="submit">Balas</button>
            </form>

            <div id="replies-<?php echo e($comment->id); ?>">
                <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin-left: 20px; border-left: 1px solid #ccc; padding-left: 10px; margin-top: 10px;">
                        <p><?php echo e($reply->content); ?> - <small><?php echo e($reply->user->name); ?> replied <?php echo e($reply->parent->user->name); ?></small></p>
                        <form action="<?php echo e(route('comments-like', $reply->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <button type="submit"><?php echo e($reply->likes->count()); ?> Like</button>
                        </form>
                        <button onclick="toggleReplyForm(<?php echo e($reply->id); ?>)">Balas</button>

                        <!-- Form balasan untuk balasan -->
                        <form id="reply-form-<?php echo e($reply->id); ?>" action="<?php echo e(route('comments-store', $forum->id)); ?>" method="POST" style="display:none; margin-left: 20px; margin-top: 10px;">
                            <?php echo csrf_field(); ?>
                            <textarea name="content" rows="2" required></textarea>
                            <input type="hidden" name="parent_id" value="<?php echo e($reply->id); ?>">
                            <button type="submit">Balas</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form action="<?php echo e(route('comments-store', $forum->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <textarea name="content" rows="4" required></textarea>
        <button type="submit">Tambah Komentar</button>
    </form>
<?php $__env->stopSection(); ?>

<script>
    function toggleReplyForm(commentId) {
        const replyForm = document.getElementById(`reply-form-${commentId}`);
        if (replyForm.style.display === 'none' || replyForm.style.display === '') {
            replyForm.style.display = 'block';
        } else {
            replyForm.style.display = 'none';
        }
    }

    function displayReplyForm(commentId, parentId) {
        const replyForm = document.getElementById(`reply-form-${parentId}`);
        const repliesDiv = document.getElementById(`replies-${parentId}`);
        
        // Tampilkan form balasan di bawah komentar yang menjadi target balasan
        replyForm.style.display = 'block';
        repliesDiv.appendChild(replyForm);

        // Tambahkan form balasan juga di bawah komentar utama
        const commentRepliesDiv = document.getElementById(`replies-${commentId}`);
        commentRepliesDiv.appendChild(replyForm);
    }
</script>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hayed-backend/resources/views/forum/show.blade.php ENDPATH**/ ?>