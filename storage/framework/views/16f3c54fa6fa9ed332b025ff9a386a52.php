<?php $__env->startSection('content'); ?>
    <div id="intro" class="w-full flex items-center pl-40 h-screen">
        <div class="flex flex-col md:flex-row md:justify-between w-full items-center">
            <div class="flex md:justify-center">
                <div class=" mt-8 md:mt-0">
                    <h2 class="md:max-w-[557px] text-4xl mb-3 font-bold text-center md:text-start text-black">
                        Mengapa Anda Harus Bergabung
                        Di Hayed Consulting ?
                    </h2>
                    <p class="max-w-2xl md:text-justify text-black font-light">
                        Hayed Consulting adalah perusahaan yang
                        menawarkan layanan profesional kepada klien
                        dan bisnis dari semua ukuran. Keduanya
                        komersial dan pribadi.
                        Kami bertujuan untuk membangun hubungan, kepercayaan,
                        dan kesuksesan klien kami karena
                        pertumbuhan klien adalah pertumbuhan kami. Visi kami adalah menjadi Terkemuka
                        Konsultan dan Pusat Pengetahuan di
                        bidang Perpajakan, Akuntansi,
                        dan Manajemen Bisnis.
                    </p>
                </div>
            </div>
            <div class="flex items-center w-1/2">
                <img src="<?php echo e(asset('assets/frontend-image/job-team.png')); ?>" class="w-3/4" alt="Hayed Logo" />
            </div>
        </div>
    </div>
    <div id="job-vacancy" class="w-full flex items-center px-40 pb-32">
        <div class="flex flex-col w-full items-center gap-y-8">
            <div class="flex flex-col items-center">
                <h2 class="text-3xl font-semibold text-start ml-3 text-black">
                    Daftar List Lowongan Pekerjaan
                </h2>
            </div>
            <div class="flex flex-wrap justify-center gap-x-8 gap-y-16 mt-8 w-full">
                <a href="#" class="flex items-center shadow-md rounded-xl">
                    <img src="<?php echo e(asset('assets/frontend-image/logo4.png')); ?>" class="object-cover w-36 mx-8" alt="">
                    <p class="font-normal text-white text-center text-sm bg-[#00213F] p-10 rounded-r-xl">daddadaada</p>
                </a>
                <a href="#" class="flex items-center shadow-md rounded-xl">
                    <img src="<?php echo e(asset('assets/frontend-image/logo4.png')); ?>" class="object-cover w-36 mx-8" alt="">
                    <p class="font-normal text-white text-center text-sm bg-[#00213F] p-10 rounded-r-xl">daddadaada</p>
                </a>
                <a href="#" class="flex items-center shadow-md rounded-xl">
                    <img src="<?php echo e(asset('assets/frontend-image/logo4.png')); ?>" class="object-cover w-36 mx-8" alt="">
                    <p class="font-normal text-white text-center text-sm bg-[#00213F] p-10 rounded-r-xl">daddadaada</p>
                </a>
                <a href="#" class="flex items-center shadow-md rounded-xl">
                    <img src="<?php echo e(asset('assets/frontend-image/logo4.png')); ?>" class="object-cover w-36 mx-8" alt="">
                    <p class="font-normal text-white text-center text-sm bg-[#00213F] p-10 rounded-r-xl">daddadaada</p>
                </a>
                <a href="#" class="flex items-center shadow-md rounded-xl">
                    <img src="<?php echo e(asset('assets/frontend-image/logo4.png')); ?>" class="object-cover w-36 mx-8" alt="">
                    <p class="font-normal text-white text-center text-sm bg-[#00213F] p-10 rounded-r-xl">daddadaada</p>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahyazackys/Dev/backend/hayed-backend/resources/views/frontend/career/job-vacancy.blade.php ENDPATH**/ ?>