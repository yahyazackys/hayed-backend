@extends('frontend.template')

@section('content')
    <div id="intro" class="w-full flex items-center px-40 h-screen">
        <div class="flex flex-col md:flex-row md:justify-between w-full items-center">
            <div class="flex items-center">
                <img src="{{ asset('assets/frontend-image/consultant-image/consultant.png') }}" class="w-[600px]"
                    alt="Hayed Logo" />
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
    <div id="member" class="w-full flex items-center px-40 pb-32">
        <div class="flex flex-col w-full items-center gap-y-8">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/frontend-image/consultant-image/icon.png') }}" class="w-24 mb-4"
                    alt="Hayed Logo" />
                <h2 class="text-3xl font-bold text-start ml-3 text-black">
                    TEAM CONSULTANT
                </h2>
                <h2 class="text-xl font-semibold text-start ml-3 text-black">
                    HAYED CONSULTING
                </h2>
            </div>
            <div class="flex flex-wrap justify-center gap-x-8 mt-8 w-full">
                @foreach ($consultants as $consultant)
                    <a href="#" class="py-6 flex flex-col items-center md:w-[19%] ">
                        <div
                            class="w-52 object-cover h-52 flex items-center justify-center rounded-tl-[200px] rounded-tr-[400px] rounded-bl-[300px] rounded-br-[300px] bg-gray-200 overflow-hidden">
                            <img src="{{ asset($consultant['image']) }}" class="w-full object-cover"
                                alt="{{ $consultant['name'] }}" />
                        </div>
                        <h5 class="text-md font-bold tracking-tight text-black text-center mt-4">{{ $consultant['name'] }}
                        </h5>
                        <p class="font-normal text-black text-center text-sm">{{ $consultant['job'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
