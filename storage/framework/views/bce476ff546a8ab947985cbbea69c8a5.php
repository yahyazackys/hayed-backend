<?php $__env->startSection('content'); ?>
    <div id="intro" class="w-full flex items-center pl-40 h-screen">
        <div class="flex flex-col md:flex-row md:justify-between w-full items-center">
            <div class="flex md:justify-center">
                <div class="md:max-w-[557px] mt-8 md:mt-0">
                    <h2 class="text-4xl mb-3 font-bold text-center md:text-start text-black">
                        Seminar and Pelatihan
                    </h2>
                    <p class="max-w-lg md:text-justify text-black">
                        Kami membuat program Seminar dan Training bertujuan untuk membentuk dan mengembangkan potensi anak
                        muda dalam menjalankan suatu bisnis ataupun perusahaan agar dapat berjalan sesuai dengan yang
                        seharusnya dan sesuai dengan aturan yang berlaku.
                    </p>
                </div>
            </div>
            <div class="flex items-center w-1/2">
                <img src="<?php echo e(asset('assets/frontend-image/seminar-image/intro.png')); ?>" class="w-full" alt="Hayed Logo" />
            </div>
        </div>
    </div>

    <div id="previous" class="flex w-full items-center bg-[#00213F] pt-20 pb-40 px-40 -mb-28 rounded-t-[100px]">
        <div class="flex flex-col w-full items-center">
            <h2 class="text-4xl font-bold text-white">Acara Sebelumnya</h2>
            <div class="relative w-full h-full mt-2">
                <div class="swiper-container overflow-hidden w-full py-20">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $previous; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <a href="#"
                                class="swiper-slide border border-gray-200 rounded-xl bg-white shadow w-72 flex flex-col items-center mr-4">
                                <img src="<?php echo e($item['image']); ?>" class="object-cover w-full" alt="<?php echo e($item['title']); ?>">
                                
                                <p class="font-normal text-black text-center text-sm m-4"><?php echo e($item['title']); ?></p>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2"></div>
                </div>
                <div
                    class="swiper-button-next after:text-white lg:py-7 lg:pl-8 lg:pr-7 cursor-pointer transform translate-x-full -mr-6">
                </div>
                <div
                    class="swiper-button-prev after:text-white lg:py-7 lg:pr-8 lg:pl-7 cursor-pointer transform -translate-x-full -ml-6">
                </div>
            </div>
        </div>
    </div>
    <div id="next" class="flex w-full items-center bg-[#F4F4F4] pt-20 pb-40 px-40 -mb-28 rounded-t-[100px]">
        <div class="flex flex-col w-full items-center">
            <h2 class="text-4xl font-bold text-black">Acara Yang Akan Datang</h2>
            <div class="relative w-full h-full mt-2">
                <div class="swiper-container overflow-hidden w-full py-20">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $previous; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <a href="#" class="swiper-slide rounded-xl bg-white w-72 flex flex-col items-center mr-4">
                                <img src="<?php echo e($item['image']); ?>" class="object-cover w-full" alt="<?php echo e($item['title']); ?>">
                                
                                <p class="font-normal text-black text-center text-sm m-4"><?php echo e($item['title']); ?></p>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                </div>
                <div
                    class="swiper-button-next after:text-gray-700 lg:py-7 lg:pl-8 lg:pr-7 cursor-pointer transform translate-x-full -mr-6">
                </div>
                <div
                    class="swiper-button-prev after:text-gray-700 lg:py-7 lg:pr-8 lg:pl-7 cursor-pointer transform -translate-x-full -ml-6">
                </div>
            </div>
        </div>
    </div>


    <script>
        var mySwiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            slidesPerGroup: 1,
            spaceBetween: 30,
            loop: false,
            speed: 1000,
            // pagination: {
            //     el: '.swiper-pagination',
            //     clickable: true,
            // },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 640px
                0: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                    spaceBetween: 10
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    slidesPerGroup: 2,
                    spaceBetween: 20
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 4,
                    slidesPerGroup: 1,
                    spaceBetween: 30
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahyazackys/Dev/backend/hayed-backend/resources/views/frontend/service/seminar.blade.php ENDPATH**/ ?>