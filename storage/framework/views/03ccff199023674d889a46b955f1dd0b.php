<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header justify-content-between d-flex mt-2">
                        <h4>Edit Data User</h4>
                        <a href="<?php echo e(route('user')); ?>"class="btn btn-sm btn-primary text-xs font-weight-bold">Kembali</a>
                    </div>
                    <div class="card-body pt-0">
                        <form action="<?php echo e(route('user-update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Nama</label>
                                        <input type="text" name="name" class="form-control"
                                            value="<?php echo e($data->name); ?>" placeholder="Nama...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php echo e($data->email); ?>" placeholder="Email...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            value="<?php echo e($data->password); ?>" placeholder="Password...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputSpesifikasi4">No HP</label>
                                        <input type="text" name="no_hp" class="form-control"
                                            value="<?php echo e($data->no_hp); ?>" placeholder="No HP...">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Role</label>
                                        <select class="form-control" id="" name="role">
                                            <option value="0"
                                                <?php if($data->role == '0'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Admin
                                            </option>
                                            <option value="1"
                                                <?php if($data->role == '1'): ?> <?php echo e('selected'); ?> <?php endif; ?>>User
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahyazackys/Dev/backend/hayed-backend/resources/views/user/edit.blade.php ENDPATH**/ ?>