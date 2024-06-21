@extends('frontend.template')

@section('content')
    <div class="swiper-container w-full h-screen overflow-hidden">
        <!-- Added padding-top to offset the fixed navbar -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide relative">
                <img src="{{ asset('assets/frontend-image/article-bg.svg') }}" class="w-full h-full object-cover"
                    alt="Slide 1">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div> <!-- Overlay -->
                <div
                    class="absolute top-0 left-0 w-full h-full flex items-start justify-end mx-28 pb-20 flex-col z-10 gap-y-4 max-w-[70%]">
                    <span class="text-white text-5xl font-semibold">Stock Exchanges in Indonesia Increase Drastically</span>
                    <span class="text-white text-md font-extralight">14 Minutes ago, 2022</span>
                    <span class="text-white text-2xl font-extralight">The Stock Exchange in Indonesia Increased drastically
                        in
                        2023 due to the large number of entrepreneurs who joined the Stock Exchange, causing a surge in the
                        Market...</span>
                    <a href="" class="text-white text-md font-light mt-2 hover:underline">Read More</a>
                </div>
            </div>
            <div class="swiper-slide relative">
                <img src="{{ asset('assets/frontend-image/article-bg.svg') }}" class="w-full h-full object-cover"
                    alt="Slide 1">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div> <!-- Overlay -->
                <div
                    class="absolute top-0 left-0 w-full h-full flex items-start justify-end mx-28 pb-20 flex-col z-10 gap-y-4 max-w-[70%]">
                    <span class="text-white text-5xl font-semibold">Stock Exchanges in Indonesia Increase Drastically</span>
                    <span class="text-white text-md font-extralight">14 Minutes ago, 2022</span>
                    <span class="text-white text-2xl font-extralight">The Stock Exchange in Indonesia Increased drastically
                        in
                        2023 due to the large number of entrepreneurs who joined the Stock Exchange, causing a surge in the
                        Market...</span>
                    <a href="" class="text-white text-md font-light mt-2 hover:underline">Read More</a>
                </div>
            </div>
            <div class="swiper-slide relative">
                <img src="{{ asset('assets/frontend-image/article-bg.svg') }}" class="w-full h-full object-cover"
                    alt="Slide 1">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div> <!-- Overlay -->
                <div
                    class="absolute top-0 left-0 w-full h-full flex items-start justify-end mx-28 pb-20 flex-col z-10 gap-y-4 max-w-[70%]">
                    <span class="text-white text-5xl font-semibold">Stock Exchanges in Indonesia Increase Drastically</span>
                    <span class="text-white text-md font-extralight">14 Minutes ago, 2022</span>
                    <span class="text-white text-2xl font-extralight">The Stock Exchange in Indonesia Increased drastically
                        in
                        2023 due to the large number of entrepreneurs who joined the Stock Exchange, causing a surge in the
                        Market...</span>
                    <a href="" class="text-white text-md font-light mt-2 hover:underline">Read More</a>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <div id="breaking-news" class="w-full flex items-center px-40 py-16">
        <div class="flex flex-col w-full">
            <h2 class="text-3xl font-semibold text-start text-black">
                Berita Hangat
            </h2>
            <div class="flex flex-row mt-8 justify-between">
                <a href="#"
                    class="relative bg-white rounded-lg shadow-xl shadow-slate-200 w-[31%] flex flex-col justify-start items-center">
                    <img src="{{ asset('assets/frontend-image/article-breaking.svg') }}" class="w-full" alt="">
                    <div class="flex flex-col p-4 gap-y-5 w-full">
                        <h5 class=" text-2xl font-normal text-start text-black max-h-16">
                            Indonesian oil is of international interest</h5>
                        <p class=" font-light text-black text-justify tracking-tighter text-md line-clamp-3">
                            Indonesia Establishes International Cooperation in the oil business sector Indonesia Establishes
                            International Cooperation in the oil business sector Indonesia Establishes International
                            Cooperation in the oil business sectorIndonesia Establishes International Cooperation in the oil
                            business sector
                        </p>
                    </div>
                    <div href=""
                        class="px-8 py-3 mb-6 mt-3 text-white text-sm hover:text-black hover:border-black hover:border bg-[#00213F] hover:bg-white rounded-tr-[40px] rounded-bl-[40px] items-center flex flex-col justify-center">
                        Selengkapnya
                    </div>
                </a>
                <a href="#"
                    class="relative bg-white rounded-lg shadow-xl shadow-slate-200 w-[31%] flex flex-col justify-start items-center">
                    <img src="{{ asset('assets/frontend-image/article-breaking.svg') }}" class="w-full" alt="">
                    <div class="flex flex-col p-4 gap-y-5 w-full">
                        <h5 class=" text-2xl font-normal text-start text-black max-h-16">
                            Indonesian oil is of international interest</h5>
                        <p class=" font-light text-black text-justify tracking-tighter text-md line-clamp-3">
                            Indonesia Establishes International Cooperation in the oil business sector Indonesia Establishes
                            International Cooperation in the oil business sector Indonesia Establishes International
                            Cooperation in the oil business sectorIndonesia Establishes International Cooperation in the oil
                            business sector
                        </p>
                    </div>
                    <div href=""
                        class="px-8 py-3 mb-6 mt-3 text-white text-sm hover:text-black hover:border-black hover:border bg-[#00213F] hover:bg-white rounded-tr-[40px] rounded-bl-[40px] items-center flex flex-col justify-center">
                        Selengkapnya
                    </div>
                </a>
                <a href="#"
                    class="relative bg-white rounded-lg shadow-xl shadow-slate-200 w-[31%] flex flex-col justify-start items-center">
                    <img src="{{ asset('assets/frontend-image/article-breaking.svg') }}" class="w-full" alt="">
                    <div class="flex flex-col p-4 gap-y-5 w-full">
                        <h5 class=" text-2xl font-normal text-start text-black max-h-16">
                            Indonesian oil is of international interest</h5>
                        <p class=" font-light text-black text-justify tracking-tighter text-md line-clamp-3">
                            Indonesia Establishes International Cooperation in the oil business sector Indonesia Establishes
                            International Cooperation in the oil business sector Indonesia Establishes International
                            Cooperation in the oil business sectorIndonesia Establishes International Cooperation in the oil
                            business sector
                        </p>
                    </div>
                    <div href=""
                        class="px-8 py-3 mb-6 mt-3 text-white text-sm hover:text-black hover:border-black border-white border bg-[#00213F] hover:bg-white rounded-tr-[40px] rounded-bl-[40px] items-center flex flex-col justify-center">
                        Selengkapnya
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="flex w-full px-40 py-16 justify-between">
        <div id="beritaterbaru" class="flex flex-col max-w-[650px]">
            <div class="flex justify-between w-full mb-8 items-center">
                <h2 class="text-3xl font-semibold text-start text-black">Berita Terbaru</h2>
                <div class="relative">
                    <div id="categoryDropdown" class="flex gap-x-2 items-center cursor-pointer group">
                        <img src="{{ asset('assets/frontend-image/sort.png') }}" class="w-5" alt="">
                        <p id="categoryText" class="text-black font-medium text-[13px] group-hover:text-[#21409A]">Category
                        </p>
                    </div>
                    <div id="categoryList"
                        class="absolute bg-white shadow-xl mt-1 py-2 hidden text-[13px] text-black w-full">
                        <p class="cursor-pointer hover:bg-gray-100 px-2 py-1">Akuntansi</p>
                        <p class="cursor-pointer hover:bg-gray-100 px-2 py-1">Audit</p>
                        <p class="cursor-pointer hover:bg-gray-100 px-2 py-1">Penasihat Bisnis</p>
                        <p class="cursor-pointer hover:bg-gray-100 px-2 py-1">Pelatihan Bisnis</p>
                        <p class="cursor-pointer hover:bg-gray-100 px-2 py-1">Perpajakan</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-y-8">
                <a href="" class="flex w-full text-black gap-x-5 group">
                    <div class= "w-80">
                        <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                            alt="">
                    </div>
                    <div class="w-full flex flex-col items-start justify-center gap-y-4">
                        <p class="text-[20px] group-hover:text-[#21409A]">Indonesian Oil Stocks Rise Drastically in 2023
                        </p>
                        <p class="text-[11px] font-light">44 minute ago</p>
                    </div>
                </a>
                <a href="" class="flex w-full text-black gap-x-5 group">
                    <div class="w-80">
                        <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                            alt="">
                    </div>
                    <div class="w-full flex flex-col items-start justify-center gap-y-4">
                        <p class="text-[20px] group-hover:text-[#21409A]">Indonesdadaaian Oil Stocks Rise Drastically in
                            2023
                        </p>
                        <p class="text-[11px] font-light">44 minute ago</p>
                    </div>
                </a>
            </div>
        </div>
        <div id="beritateratas" class="flex flex-col w-[40%]">
            <h2 class="text-3xl font-semibold text-start text-black mb-8">Berita Teratas</h2>
            <div class="flex flex-col w-full bg-white p-8 rounded-xl shadow-md shadow-slate-200">
                <div class="flex flex-col">
                    <a href="" class="flex w-full text-black group gap-x-4">
                        <div class="w-40">
                            <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                                alt="">
                        </div>
                        <div class="w-full flex flex-col items-start justify-center gap-y-4">
                            <p class="text-[16px] group-hover:text-[#21409A]">Indonesdadaaian Oil Stocks Rise Drastically
                                in
                                2023
                            </p>
                            <p class="text-[11px] font-light">44 minute ago</p>
                        </div>
                    </a>
                    <hr class="my-5 border-black">
                </div>
                <div class="flex flex-col">
                    <a href="" class="flex w-full text-black group gap-x-4">
                        <div class="w-40">
                            <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                                alt="">
                        </div>
                        <div class="w-full flex flex-col items-start justify-center gap-y-4">
                            <p class="text-[16px] group-hover:text-[#21409A]">Indonesdadaaian Oil Stocks Rise Drastically
                                in
                                2023
                            </p>
                            <p class="text-[11px] font-light">44 minute ago</p>
                        </div>
                    </a>
                    <hr class="my-5 border-black">
                </div>
                <div class="flex flex-col">
                    <a href="" class="flex w-full text-black group gap-x-4">
                        <div class="w-40">
                            <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                                alt="">
                        </div>
                        <div class="w-full flex flex-col items-start justify-center gap-y-4">
                            <p class="text-[16px] group-hover:text-[#21409A]">Indonesdadaaian Oil Stocks Rise Drastically
                                in
                                2023
                            </p>
                            <p class="text-[11px] font-light">44 minute ago</p>
                        </div>
                    </a>
                    <hr class="my-5 border-black">
                </div>
                <div class="flex flex-col">
                    <a href="" class="flex w-full text-black group gap-x-4">
                        <div class="w-40">
                            <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                                alt="">
                        </div>
                        <div class="w-full flex flex-col items-start justify-center gap-y-4">
                            <p class="text-[16px] group-hover:text-[#21409A]">Indonesdadaaian Oil Stocks Rise Drastically
                                in
                                2023
                            </p>
                            <p class="text-[11px] font-light">44 minute ago</p>
                        </div>
                    </a>
                    <hr class="my-5 border-black">
                </div>
                <div class="flex flex-col">
                    <a href="" class="flex w-full text-black group gap-x-4">
                        <div class="w-40">
                            <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                                alt="">
                        </div>
                        <div class="w-full flex flex-col items-start justify-center gap-y-4">
                            <p class="text-[16px] group-hover:text-[#21409A]">Indonesdadaaian Oil Stocks Rise Drastically
                                in
                                2023
                            </p>
                            <p class="text-[11px] font-light">44 minute ago</p>
                        </div>
                    </a>
                    <hr class="my-5 border-black">
                </div>
                <div class="flex flex-col">
                    <a href="" class="flex w-full text-black group gap-x-4">
                        <div class="w-40">
                            <img src="{{ asset('assets/frontend-image/article-feed.svg') }}" class="object-contain"
                                alt="">
                        </div>
                        <div class="w-full flex flex-col items-start justify-center gap-y-4">
                            <p class="text-[16px] group-hover:text-[#21409A]">Indonesdadaaian Oil Stocks Rise Drastically
                                in
                                2023
                            </p>
                            <p class="text-[11px] font-light">44 minute ago</p>
                        </div>
                    </a>
                    <hr class="my-5 border-black">
                </div>
            </div>
        </div>
    </div>


    {{-- Java Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryDropdown = document.getElementById('categoryDropdown');
            const categoryList = document.getElementById('categoryList');

            categoryDropdown.addEventListener('click', function() {
                categoryList.classList.toggle('hidden');
            });

            // Hide dropdown when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInside = categoryDropdown.contains(event.target);
                if (!isClickInside) {
                    categoryList.classList.add('hidden');
                }
            });
        });
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Fungsi untuk mengubah bahasa yang dipilih


        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            effect: 'slide',
            speed: 1200,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // Menonaktifkan penggunaan mousewheel dan keyboard sebagai navigasi swiper
            keyboard: {
                enabled: false,
            },
            touchStartPreventDefault: true,
            mousewheel: {
                enabled: false,
            },

        });
    </script>
@endsection
