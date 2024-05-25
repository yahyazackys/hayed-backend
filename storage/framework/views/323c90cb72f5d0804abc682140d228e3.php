<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        <h4>User table</h4>
                        <a href="<?php echo e(route('user-create')); ?>"
                            class="btn btn-sm btn-primary text-xs font-weight-bold mt-4">Add</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0 mx-4">
                            <table class="table align-items-center mb-0" id="datatables">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Nama</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Password</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            No HP</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Gambar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Role</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <h6 class="text-secondary font-weight-bold text-xs text-center">
                                                    <?php echo e($loop->index + 1); ?>

                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class=" text-secondary font-weight-bold text-xs text-center "
                                                    style=" max-width: 300px; 
                                                white-space: normal;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">
                                                    <?php echo e($user->name); ?>

                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class=" text-secondary font-weight-bold text-xs text-center">
                                                    <?php echo e($user->email); ?>

                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class=" text-secondary font-weight-bold text-xs text-center">
                                                    <?php echo e($user->password); ?>

                                                </h6>
                                            </td>
                                            <td>
                                                <h6 class=" text-secondary font-weight-bold text-xs text-center">
                                                    <?php echo e($user->no_hp); ?>

                                                </h6>
                                            </td>
                                            <td>
                                                <img src="<?php echo e(asset('user-images/' . $user->gambar)); ?>" width="150">
                                            </td>
                                            <td>
                                                <h6 class=" text-secondary font-weight-bold text-xs text-center">
                                                    <?php echo e($user->role == '0' ? 'Admin' : 'User'); ?>

                                                </h6>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href=" <?php echo e(route('user-edit', $user->id)); ?>"
                                                    class="btn btn-sm btn-info text-xs font-weight-bold">Edit</a>
                                                <a href="<?php echo e(route('user-delete', $user->id)); ?>"
                                                    onclick="return confirm('Yakin hapus data ini?')"
                                                    class="btn btn-sm btn-danger text-xs font-weight-bold">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahyazackys/Dev/backend/hayed-backend/resources/views/user/index.blade.php ENDPATH**/ ?>