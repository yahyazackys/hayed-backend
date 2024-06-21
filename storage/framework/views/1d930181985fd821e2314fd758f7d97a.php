<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css', 'resources/js/app.js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="w-full h-full bg-white font-raleway">
    <nav class="bg-white shadow-md border-gray-200 fixed top-0 w-full z-50 py-6">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto px-4">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?php echo e(asset('assets/frontend-image/logo.png')); ?>" class="w-40" alt="Hayed Logo" />
            </a>

            <!-- Navigation Menu -->
            <div class="hidden md:flex flex-1 justify-center" id="navbar-dropdown">
                <ul
                    class="flex flex-col md:flex-row font-medium p-4 md:p-0 mt-4 md:mt-0 border border-gray-100 rounded-lg bg-gray-50 md:border-0 md:bg-white space-y-2 md:space-y-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <a href="<?php echo e(route('home')); ?>"
                            class="text-lg block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Beranda</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="text-lg flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Tentang
                            Kami
                            <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-300 transform-gpu"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="<?php echo e(route('vision-mission-value')); ?>"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Visi,
                                        Misi dan Nilai</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('konsultan')); ?>"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Konsultan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                            class="text-lg flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Layanan
                            <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-300 transform-gpu"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar2"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow">
                            <ul class="py-2 text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="<?php echo e(route('seminar')); ?>"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Seminar dan
                                        Kegiatan</a>
                                </li>
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Servis<svg
                                            class="w-2.5 h-2.5 ms-2.5 transition-transform duration-300 transform-gpu"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="<?php echo e(route('service.accounting')); ?>"
                                                    class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Accounting</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('service.auditing')); ?>"
                                                    class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Auditing</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('service.advisory')); ?>"
                                                    class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Business
                                                    Advisory</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('service.business')); ?>"
                                                    class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Business
                                                    Training</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('service.tax')); ?>"
                                                    class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Taxation</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                            class="text-lg flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Karir
                            <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-300 transform-gpu"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar3"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="<?php echo e(route('career.job-vacancy')); ?>"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Lowongan
                                        Pekerjaan</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('career.program-activity')); ?>"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black text-[16px]">Program dan
                                        Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo e(route('article')); ?>"
                            class="text-lg block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Artikel</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-lg block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Forum</a>
                    </li>
                </ul>
            </div>

            <!-- Search Form and Language Dropdown -->
            <div class="relative hidden md:flex items-center space-x-4" id="search-language-container">
                <!-- Search Icon -->
                <button id="search-icon" class="flex items-center text-black focus:outline-none">
                    <svg class="w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </button>

                <div class="hidden md:block h-6 border-l border-black mx-4"></div>

                <!-- Language Dropdown -->
                <div class="relative">
                    <button id="languageDropdownButton" data-dropdown-toggle="languageDropdown"
                        class="flex items-center text-black focus:outline-none">
                        <span id="selectedLanguage" class="m-2"></span>
                        <svg class="w-4 h-4 transition-transform duration-300 transform-gpu" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="languageDropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-28">
                        <ul class="py-2 text-sm text-black" aria-labelledby="languageDropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    onclick="selectLanguage('ENG')">English</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    onclick="selectLanguage('IDN')">Indonesian</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Mobile Menu Button -->
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <footer id="footer"
        class="w-full items-center py-12 px-40 bg-[#0B436B] z-20 flex flex-col gap-y-12 rounded-t-[100px] shadow-xl shadow-white">
        <div class="flex flex-col lg:flex-row justify-between w-full items-center">
            <div class="flex flex-col">
                <img src="<?php echo e(asset('assets/frontend-image/logo-white.png')); ?>" class="w-60 text-white"
                    alt="Hayed Logo" />
            </div>
            <div class="flex flex-col gap-y-8 w-[50%]">
                <h3 class="text-xl font-bold text-white">Lokasi</h3>
                <div class="flex flex-col gap-y-10 font-medium">
                    <div class="flex items-center gap-x-3">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('go-location-16'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 text-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div class="flex flex-col gap-y-2">
                            <div class="font-semibold text-lg text-white">Kantor</div>
                            <div class="font-normal text-sm text-white">
                                Pusat Bisnis Thamrin City, Jl.Thamrin Boulevard Lt 7 OS 23,
                                Kebon Kacang, Tanah Abang, Central Jakarta 10230
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('go-location-16'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 text-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div class="flex flex-col gap-y-2">
                            <div class="font-semibold text-lg text-white">Kantor</div>
                            <div class="font-normal text-sm text-white">
                                Pusat Bisnis Thamrin City, Jl.Thamrin Boulevard Lt 7 OS 23,
                                Kebon Kacang, Tanah Abang, Central Jakarta 10230
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-y-8">
                <h3 class="text-xl text-white font-bold">Kontak Kami</h3>
                <div class="flex items-center gap-x-3">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 text-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    <div class="flex flex-col gap-y-2">
                        <div class="font-semibold text-md text-white">+628127770242</div>
                    </div>
                </div>
                <div class="flex items-center gap-x-3">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('gmdi-email'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 text-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    <div class="flex flex-col gap-y-2">
                        <div class="font-semibold text-md text-white">yahyazacky123456@gmail.com</div>
                    </div>
                </div>
                <div class="flex items-start gap-x-3 ">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-clock'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 text-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    <div class="flex flex-col gap-y-2">
                        <div class="font-semibold text-md text-white">Jam Buka</div>
                        <div class="font-normal text-sm text-white">Senin - Jumat : 08.00 - 17.00 WIB</div>
                        <div class="font-normal text-sm text-white">Sabtu - Minggu : Tutup</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-4 text-sm text-white">
            @2023 Copyright by IDZTeam
        </div>
    </footer>


    <script>
        function selectLanguage(language) {
            document.getElementById('selectedLanguage').innerText = language === 'ENG' ? 'ENG' : 'IDN';
        }

        // Set Bahasa Indonesia sebagai default saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            selectLanguage('IDN');
        });
    </script>
    <script>
        const dropdownLinks = document.querySelectorAll('[data-dropdown-toggle]');
        dropdownLinks.forEach(link => {
            link.addEventListener('click', function() {
                const arrowIcon = link.querySelector('svg');
                arrowIcon.classList.toggle('rotate-180');
            });
            link.addEventListener('blur', function() {
                const arrowIcon = link.querySelector('svg');
                arrowIcon.classList.remove(
                    'rotate-180');
            });
        });
    </script>

</body>

</html>
<?php /**PATH /Users/yahyazackys/Dev/backend/hayed-backend/resources/views/frontend/template.blade.php ENDPATH**/ ?>