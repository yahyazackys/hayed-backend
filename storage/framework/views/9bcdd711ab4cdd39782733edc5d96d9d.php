<?php $__env->startSection('content'); ?>
    <div id="vision" class="w-full  flex items-center px-40 pt-40">
        <div class="flex flex-col md:flex-row md:justify-between w-full items-center">
            <div class="flex md:justify-center">
                <div class="md:max-w-[557px] mt-8 md:mt-0">
                    <h2 class="text-4xl mb-3 font-bold text-center md:text-start text-black">
                        VISION
                    </h2>
                    <p class="max-w-lg md:text-justify text-black">
                        Our vision is to become a Leading Consultant and Knowledge Center in the fields of Taxation,
                        Accounting, and Business Management.
                    </p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="<?php echo e(asset('assets/frontend-image/vision.png')); ?>" class="w-80" alt="Hayed Logo" />
            </div>
        </div>
    </div>
    <div id="mission" class="w-full flex items-center px-40 py-20">
        <div class="flex flex-col md:flex-row md:justify-between w-full items-center">
            <div class="flex items-center">
                <img src="<?php echo e(asset('assets/frontend-image/vision.png')); ?>" class="w-80" alt="Hayed Logo" />
            </div>
            <div class="flex md:justify-center">
                <div class="md:max-w-[557px] mt-8 md:mt-0">
                    <h2 class="text-4xl mb-3 font-bold text-center md:text-start text-black">
                        MISSION
                    </h2>
                    <p class="max-w-lg md:text-justify text-black">
                        Our missions are strengthening leadership in tax consulting services, accounting & business
                        management, strengthening presence in the national market, providing the best service and quality
                        for clients, and providing added value for client's business growth.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="value" class="w-full flex items-center px-40 pb-32 pt-8">
        <div class="flex flex-col w-full items-center">
            <h2 class="text-3xl font-bold text-start ml-3 text-black">
                OUR SERVICES
            </h2>
            <div class="flex flex-row mt-8 justify-between">
                <div class="p-6 flex flex-col items-center gap-y-4">
                    <img src="<?php echo e(asset('assets/frontend-image/value-image/solution.png')); ?>" class="w-24 h-24 object-cover"
                        alt="}" />
                    <h5 class="text-2xl font-bold tracking-tight text-black text-center">
                        Solution</h5>
                    <p class="font-normal text-black text-center text-sm">Our consultants have a good level of knowledge
                        and have broad insights</p>
                </div>
                <div class="p-6 flex flex-col items-center gap-y-4">
                    <img src="<?php echo e(asset('assets/frontend-image/value-image/manageable.png')); ?>"
                        class="w-24 h-24 object-cover" alt="}" />
                    <h5 class="text-2xl font-bold tracking-tight text-black text-center">
                        Manageable</h5>
                    <p class="font-normal text-black text-center text-sm">Our consultants have a good level of knowledge and
                        have broad insights</p>
                </div>
                <div class="p-6 flex flex-col items-center gap-y-4">
                    <img src="<?php echo e(asset('assets/frontend-image/value-image/accountable.png')); ?>"
                        class="w-24 h-24 object-cover" alt="}" />
                    <h5 class="text-2xl font-bold tracking-tight text-black text-center">
                        Accountable</h5>
                    <p class="font-normal text-black text-center text-sm">Our consultants have a good level of knowledge
                        and have broad insights</p>
                </div>
                <div class="p-6 flex flex-col items-center gap-y-4">
                    <img src="<?php echo e(asset('assets/frontend-image/value-image/responsive.png')); ?>"
                        class="w-24 h-24 object-cover" alt="}" />
                    <h5 class="text-2xl font-bold tracking-tight text-black text-center">
                        Responsive</h5>
                    <p class="font-normal text-black text-center text-sm">Our consultants have a good level of knowledge
                        and have broad insights</p>
                </div>
                <div class="p-6 flex flex-col items-center gap-y-4">
                    <img src="<?php echo e(asset('assets/frontend-image/value-image/trust.png')); ?>" class="w-24 h-24 object-cover"
                        alt="}" />
                    <h5 class="text-2xl font-bold tracking-tight text-black text-center">
                        Trust</h5>
                    <p class="font-normal text-black text-center text-sm">Our consultants have a good level of knowledge
                        and have broad insights</p>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hayed-company/resources/views/frontend/aboutUs/vision.blade.php ENDPATH**/ ?>