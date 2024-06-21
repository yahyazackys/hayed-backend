@extends('frontend.template')

@section('content')
    <div class="swiper-container w-full h-screen overflow-hidden">
        <!-- Added padding-top to offset the fixed navbar -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide relative">
                <img src="{{ asset('assets/frontend-image/bg.png') }}" class="w-full h-full object-cover" alt="Slide 1">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div> <!-- Overlay -->
                <div
                    class="absolute top-0 left-0 w-full h-full flex items-start justify-center mt-16 mx-28 pb-20 flex-col z-10 gap-y-4 max-w-[70%]">
                    <span class="text-white text-5xl font-semibold">Bergabung Bersama Kami, dan Buat Bisnis Anda Menjadi Yang
                        Terbaik</span>
                    <span class="text-white text-2xl font-extralight">Kami Siap Untuk Membantu Anda!</span>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next after:text-gray-400 p-8 rounded-full cursor-pointer absolute mr-8">
        </div>
        <div class="swiper-button-prev after:text-gray-400 p-8 rounded-full cursor-pointer absolute ml-8">
        </div>
    </div>

    <div id="about" class="w-full  flex items-center px-40 py-32">
        <div class="flex flex-col md:flex-row md:justify-between w-full">
            <div class="flex md:justify-center">
                <div class="md:max-w-[557px] mt-8 md:mt-0">
                    <h2 class="text-4xl mb-6 font-bold text-center md:text-start text-black">
                        HAYED CONSULTING
                    </h2>
                    <p class="max-w-lg md:text-justify text-black">
                        Hayed Consulting is a company that
                        offers professional services to clients
                        and businesses of all sizes. Both
                        commercial and personal.
                        We aim to build a relationship, trust,
                        and the success of our client because
                        client growth is our growth. Our vision is to become a Leading
                        Consultant and Knowledge Center in
                        the fields of Taxation, Accounting,
                        and Business Management.
                    </p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('assets/frontend-image/logo4.png') }}" class="w-96 h-36" alt="Hayed Logo" />
            </div>
        </div>
    </div>

    <div id="service" class="w-full flex items-center px-40 py-16">
        <div class="flex flex-col w-full">
            <div class="flex flex-row">
                <x-ri-shake-hands-fill class="w-8 text-black" />
                <h2 class="text-3xl font-bold text-start ml-3 text-black">
                    OUR SERVICES
                </h2>
            </div>
            <div class="flex flex-row mt-8 justify-between">
                @foreach ($services as $service)
                    <a href="#"
                        class="p-6 bg-[#00213F] border border-gray-200 rounded-lg shadow w-72 flex flex-col items-center h-[420px] mr-4">
                        <img src="{{ asset($service['image']) }}" class="w-24 h-24 object-cover mb-6"
                            alt="{{ $service['title'] }}" />
                        <h5 class="text-2xl font-bold tracking-tight text-gray-100 text-center h-20">
                            {{ $service['title'] }}</h5>
                        <p class="font-normal text-gray-300 text-justify text-sm">{{ $service['description'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div id="information" class="flex w-full items-center py-16">
        <div class="flex flex-col w-full items-center">
            <h2 class="text-5xl font-bold text-black">Butuh Layanan Konsultasi?</h2>
            <p class="text-lg font-normal italic text-black">Informasi Lebih Lanjut</p>
            <div class="flex flex-row items-center mt-32">
                <div class="flex flex-col items-center mx-20">
                    <img src="{{ asset('assets/frontend-image/information-image/mission.png') }}"
                        class="w-32 h-32 object-cover mb-6" alt="mission" />
                    <h2 class="text-3xl font-bold text-[#AE7C34]">MISSION</h2>
                </div>
                <div class="flex flex-col items-center mx-20">
                    <img src="{{ asset('assets/frontend-image/information-image/vision.png') }}"
                        class="w-44 h-44 object-cover transform -translate-y-12" alt="vision" />
                    <h2 class="text-4xl font-bold text-[#214193] transform -translate-y-4">VISION</h2>
                </div>
                <div class="flex flex-col items-center mx-20">
                    <img src="{{ asset('assets/frontend-image/information-image/value.png') }}"
                        class="w-32 h-32 object-cover mb-6" alt="value" />
                    <h2 class="text-3xl font-bold text-[#8EC744]">VALUE</h2>
                </div>
            </div>
        </div>
    </div>

    <div id="article" class="w-full flex items-center px-40 py-16">
        <div class="flex flex-col w-full">
            <div class="flex flex-row">
                <x-bxs-news class="w-8 text-black" />
                <h2 class="text-3xl font-bold text-start ml-3 text-black">
                    ARTIKEL
                </h2>
            </div>
            <div class="flex flex-row mt-8 justify-between">
                @foreach ($news as $new)
                    <a href="#"
                        class="relative p-6 bg-[#00213F] border border-gray-200 rounded-lg shadow w-[600px] flex flex-col justify-end h-[420px] mr-4 bg-cover bg-center transition duration-300 ease-in-out group"
                        style="background-image: url('{{ asset($new['image']) }}');">
                        <div
                            class="absolute inset-0 bg-black opacity-50 rounded-lg transition-opacity duration-100 ease-in-out group-hover:opacity-70">
                        </div>
                        <h5
                            class="relative text-2xl font-bold tracking-tight text-gray-100 text-start mb-2 z-10 transition-colors duration-300 ease-in-out group-hover:text-white">
                            {{ $new['title'] }}</h5>
                        <p
                            class="relative font-normal text-gray-300 text-justify text-sm overflow-hidden max-h-10 z-10 transition-all duration-300 ease-in-out group-hover:max-h-20 group-hover:text-white">
                            {{ $new['description'] }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div id="client" class="flex w-full items-center py-16 overflow-hidden">
        <div class="flex flex-col w-full items-center">
            <h2 class="text-4xl font-bold text-black">OUR CLIENT</h2>
            <div class="flex mt-32 w-full">
                <div class="marquee flex items-center">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/mission.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="mission" />
                            <h2 class="text-3xl font-bold text-[#AE7C34]">MISSION</h2>
                        </div>
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/vision.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="vision" />
                            <h2 class="text-4xl font-bold text-[#214193]">VISION</h2>
                        </div>
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/value.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="value" />
                            <h2 class="text-3xl font-bold text-[#8EC744]">VALUE</h2>
                        </div>
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/value.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="value" />
                            <h2 class="text-3xl font-bold text-[#8EC744]">VALUE</h2>
                        </div>
                        <!-- Duplicate the items to create the loop effect -->
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/mission.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="mission" />
                            <h2 class="text-3xl font-bold text-[#AE7C34]">MISSION</h2>
                        </div>
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/vision.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="vision" />
                            <h2 class="text-4xl font-bold text-[#214193]">VISION</h2>
                        </div>
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/value.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="value" />
                            <h2 class="text-3xl font-bold text-[#8EC744]">VALUE</h2>
                        </div>
                        <div class="flex flex-col items-center mx-20">
                            <img src="{{ asset('assets/frontend-image/information-image/value.png') }}"
                                class="w-32 h-32 object-cover mb-6" alt="value" />
                            <h2 class="text-3xl font-bold text-[#8EC744]">VALUE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="testimoni" class="w-full flex items-center px-40 py-16">
        <div class="flex flex-col w-full items-center">
            <h2 class="text-3xl font-bold text-start ml-3 text-black">
                TESTIMONI CLIENT
            </h2>
            <div class="flex flex-row mt-32 items-center w-full">
                <div class="relative p-6 bg-[#0B436B] shadow w-[50%] flex flex-col items-center mr-4 rounded-[40px]">
                    <div
                        class="absolute top-[-60px] w-32 h-32 bg-gray-300 border-[10px] border-solid border-gray-50 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/frontend-image/service-image/accounting.png') }}"
                            class="w-16 h-16 object-cover rounded-full" alt="" />
                    </div>
                    <h5 class="mt-16 text-2xl font-bold tracking-tight text-gray-100 text-center">
                        Yahya Zacky Syahputra</h5>
                    <p class="font-normal text-gray-300 text-justify text-md mb-8">Frontend Developer</p>
                    <p class="font-normal text-gray-300 text-center text-md mb-12 w-[80%]">Hayed Consulting merupakan
                        sebuah
                        perusahaan
                        consulting yang bergerak dibidang jasa yang menurut saya sangat membantu, khususnya ketika kita
                        mengalami suatu kendala dibidang bisnis yang dapat dengan baik mereka selesaikan, terimakasih Hayed
                        Consulting.</p>
                </div>
                <div class="relative p-6 bg-[#0B436B] shadow w-[50%] flex flex-col items-center mr-4 rounded-[40px]">
                    <div
                        class="absolute top-[-60px] w-32 h-32 bg-gray-300 border-[10px] border-solid border-gray-50 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/frontend-image/service-image/accounting.png') }}"
                            class="w-16 h-16 object-cover rounded-full" alt="" />
                    </div>
                    <h5 class="mt-16 text-2xl font-bold tracking-tight text-gray-100 text-center">
                        Yahya Zacky Syahputra</h5>
                    <p class="font-normal text-gray-300 text-justify text-md mb-8">Frontend Developer</p>
                    <p class="font-normal text-gray-300 text-center text-md mb-12 w-[80%]">Hayed Consulting merupakan
                        sebuah
                        perusahaan
                        consulting yang bergerak dibidang jasa yang menurut saya sangat membantu, khususnya ketika kita
                        mengalami suatu kendala dibidang bisnis yang dapat dengan baik mereka selesaikan, terimakasih Hayed
                        Consulting.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="faq" class="w-full flex items-center px-40 pt-16 pb-40 bg-[#00213F] -mb-28">
        <div class="flex flex-col w-full items-center">
            <div class="flex flex-row items-center">
                <x-zondicon-question class="w-8 text-white" />
                <h2 class="text-3xl font-bold text-start ml-3 text-white">FAQ's</h2>
            </div>
            <p class="font-normal text-md mb-8 text-white items-center">View the frequently asked questions below</p>
            <div class="flex flex-wrap justify-center gap-x-8 mt-8 w-full">
                @foreach ($faqs as $faq)
                    <div class="collapse collapse-plus bg-transparent mb-4 lg:w-[45%]">
                        <input type="radio" name="accordion" id="accordion-radio-{{ $loop->index }}"
                            class="hidden" />
                        <label for="accordion-radio-{{ $loop->index }}"
                            class="collapse-title text-xl font-medium bg-transparent text-white cursor-pointer">
                            {{ $faq['question'] }}
                        </label>
                        <div
                            class="collapse-content bg-white overflow-hidden transition-max-h duration-500 ease-out max-h-0">
                            <p class="text-black p-4">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>


    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .marquee {
            display: flex;
            animation: marquee 10s linear infinite;
        }
    </style>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const radios = document.querySelectorAll('input[name="accordion"]');
            const labels = document.querySelectorAll('label[for^="accordion-radio-"]');
            const contents = document.querySelectorAll('.collapse-content');

            radios.forEach((radio, index) => {
                radio.addEventListener('change', function() {
                    if (radio.checked) {
                        labels.forEach(label => {
                            label.classList.remove('bg-white', 'text-black');
                            label.classList.add('bg-transparent', 'text-white');
                        });
                        labels[index].classList.remove('bg-transparent', 'text-white');
                        labels[index].classList.add('bg-white', 'text-black');

                        contents.forEach(content => {
                            content.classList.remove('max-h-screen');
                            content.classList.add('max-h-0');
                        });
                        contents[index].classList.remove('max-h-0');
                        contents[index].classList.add('max-h-screen');
                    }
                });
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
