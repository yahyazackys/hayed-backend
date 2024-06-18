@extends('frontend.template')

@section('content')
    <div id="intro" class="w-full flex items-center pl-40 h-screen">
        <div class="flex flex-col md:flex-row md:justify-between w-full items-center">
            <div class="flex flex-col md:justify-center">
                <h2 class="md:max-w-[557px] text-4xl mb-3 font-bold text-center md:text-start text-black">
                    Program dan Aktivitas Hayed Consulting
                </h2>
                <p class="max-w-xl md:text-justify text-black font-light">
                    Hayed Consulting memiliki beberapa program dan aktivitas yang dilakukan untuk membantu dalam proses
                    pengembangan dan maintanance perusahaan agar dapat berjalan sesuai dengan prosedur dan ketentuan
                    yang berlaku.
                </p>
            </div>
            <div class="flex flex-col items-center w-1/2">
                <img src="{{ asset('assets/frontend-image/logo4.png') }}" class="w-1/2 hidden md:block" alt="Hayed Logo" />
            </div>
        </div>
    </div>
    <div id="faq" class="w-full flex items-center px-40 pt-16 pb-40 bg-[#00213F] -mb-28 rounded-t-[100px]">
        <div class="flex flex-col w-full items-center">
            <h2 class="text-3xl font-bold text-start text-white">Program dan Aktivitas</h2>
            <p class="font-normal text-md mb-8 text-white items-center">Program dan Aktivitas yang ada di Hayed Consulting
            </p>
            <div class="flex w-full justify-between">
                <div class="flex flex-col justify-center mt-8 w-[45%]">
                    <h2 class="text-2xl font-bold text-center text-white mb-5">Program</h2>
                    @foreach ($faqs as $faq)
                        <div class="collapse collapse-plus bg-transparent mb-2 w-full transition-all duration-500 ease">
                            <input type="checkbox" id="program-checkbox-{{ $loop->index }}" class="hidden" />
                            <label for="program-checkbox-{{ $loop->index }}"
                                class="collapse-title text-xl font-medium bg-transparent text-white cursor-pointer">
                                {{ $faq['question'] }}
                            </label>
                            <div
                                class="collapse-content collapse-content-program overflow-hidden bg-transparent max-h-0 transition-all duration-500 ease">
                                <p class="text-black p-4">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col justify-center gap-x-8 mt-8 w-[45%]">
                    <h2 class="text-2xl font-bold text-center text-white mb-5">Aktivitas</h2>
                    @foreach ($faqs as $faq)
                        <div class="collapse collapse-plus bg-transparent mb-2 w-full transition-all duration-300 ease">
                            <input type="checkbox" id="aktivitas-checkbox-{{ $loop->index }}" class="hidden" />
                            <label for="aktivitas-checkbox-{{ $loop->index }}"
                                class="collapse-title text-xl font-medium bg-transparent text-white cursor-pointer">
                                {{ $faq['question'] }}
                            </label>
                            <div class="collapse-content collapse-content-aktivitas overflow-hidden bg-transparent max-h-0">
                                <p class="text-black p-4">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>




        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function setupAccordion(namespace) {
                const checkboxes = document.querySelectorAll(`input[id^="${namespace}-checkbox-"]`);
                const labels = document.querySelectorAll(`label[for^="${namespace}-checkbox-"]`);
                const contents = document.querySelectorAll(`.collapse-content-${namespace}`);

                checkboxes.forEach((checkbox, index) => {
                    checkbox.addEventListener('change', function() {
                        if (checkbox.checked) {
                            checkboxes.forEach((cb, i) => {
                                if (i !== index) {
                                    cb.checked = false;
                                }
                            });
                            labels.forEach((label, i) => {
                                if (i !== index) {
                                    label.classList.remove('bg-white', 'text-black');
                                    label.classList.add('bg-transparent', 'text-white');
                                }
                            });
                            contents.forEach((content, i) => {
                                if (i !== index) {
                                    content.classList.remove('max-h-0', 'bg-transparent');
                                    content.classList.add('max-h-[1000px]', 'bg-white');
                                }
                            });
                            labels[index].classList.remove('bg-transparent', 'text-white');
                            labels[index].classList.add('bg-white', 'text-black');
                            contents[index].classList.remove('max-h-0', 'bg-transparent');
                            contents[index].classList.add('max-h-[1000px]', 'bg-white');
                        } else {
                            labels[index].classList.remove('bg-white', 'text-black');
                            labels[index].classList.add('bg-transparent', 'text-white');
                            contents[index].classList.remove('max-h-0', 'bg-transparent');
                            contents[index].classList.add('max-h-[1000px]', 'bg-white');
                        }
                    });
                });
            }

            // Setup both accordions
            setupAccordion('program');
            setupAccordion('aktivitas');
        });
    </script>
@endsection
