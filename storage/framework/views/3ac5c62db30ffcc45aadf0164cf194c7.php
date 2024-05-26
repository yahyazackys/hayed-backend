<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        <h4>Jobs table</h4>
                        <a href="<?php echo e(route('job-create')); ?>"
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
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Pekerjaan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Keterangan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <?php echo e($job->nama_pekerjaan); ?>

                                                </h6>
                                            </td>
                                            <td>
                                                <h6 style=" max-width: 600px; 
                                                  white-space: normal;
                                                  overflow: hidden;
                                                  text-overflow: ellipsis;"
                                                    class="text-secondary font-weight-bold text-xs">
                                                    <?php echo htmlspecialchars_decode($job->keterangan); ?>
                                                </h6>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href=" <?php echo e(route('job-edit', $job->id)); ?>"
                                                    class="btn btn-sm btn-info text-xs font-weight-bold">Edit</a>
                                                <a href="<?php echo e(route('job-delete', $job->id)); ?>"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hayed-backend/resources/views/job/index.blade.php ENDPATH**/ ?>