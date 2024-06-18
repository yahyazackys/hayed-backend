@extends('frontend.template')

@section('content')
    <div class="relative w-full h-screen">
        <img src="{{ asset('assets/frontend-image/service-image/accounting-bg.png') }}" class="absolute h-full -z-0"
            alt="">
        <div class="relative flex flex-col h-screen justify-center px-40 text-white w-2/3 gap-y-3">
            <h2 class="text-5xl font-bold">Bingung cara membuat laporan keuangan?</h2>
            <p class="text-xl font-normal">Kami Selalu Siap Membantumu</p>
        </div>
    </div>
    <div class="flex w-full justify-between py-10 px-40">
        <div class="flex flex-col w-1/2 items-start">
            <img src="{{ asset('assets/frontend-image/service-image/accounting-icon.png') }}" class="w-1/2 object-cover"
                alt="" />
        </div>
        <div class="flex flex-col items-start text-black w-1/2 gap-y-4 justify-center">
            <h2 class="text-3xl font-bold">APA ITU JASA AKUNTANSI?</h2>
            <p class="text-lg font-normal text-justify">Layanan ini memastikan bahwa keuangan perusahaan terkelola dengan
                baik,
                akurat, dan sesuai dengan standar akuntansi yang berlaku. Selain itu, layanan ini mencakup berbagai
                aktivitas, termasuk pencatatan transaksi keuangan, pelaporan keuangan, perencanaan pajak, analisis
                kinerja keuangan, serta konsultasi keuangan.</p>
        </div>
    </div>
    <div class="flex w-full justify-between px-40 py-20">
        <div class="flex flex-col w-1/2 text-black gap-y-2 pr-24">
            <h2 class="text-3xl font-bold">
                KAMI MELAYANI :
            </h2>
            <P>
            <ul class="list-disc text-justify gap-y-4 flex flex-col">
                <li>
                    <b>Review Struktur Pengendalian Internal dan Sistem Informasi Keuangan<br /></b>
                    Mengidentifikasi potensi risiko dan kelemahan dalam sistem agar perusahaan dapat meningkatkan efisiensi
                    profesional dan keandalan laporan keuangan.
                </li>
                <li>
                    <b>Saran Akuntansi dan Peraturan tentang GAAP dan IFRS Indonesia<br /></b>
                    Panduan dan penjelasan tentang penerapan Standar Akuntansi Keuangan Indonesia (SAK) atau International
                    Financial Reporting Standards (IFRS) di Indonesia.
                </li>
                <li>
                    <b>Pelaporan Kinerja, Prakiraan dan Proyeksi<br /></b>
                    Penyusunan laporan kinerja perusahaan, termasuk analisis data historis, peramalan masa depan, dan
                    proyeksi keuangan. Bertujuan untuk membantu menajemen dalam pengambilan keputusan strategis dan
                    merencanakan pertumbuhan bisnis.
                </li>
                <li>
                    <b>Reviu Laporan Keuangan<br /></b>
                    Pemeriksaan independen atas laporan keuangan perusahaan untuk memastikan kepatuhan terhadap standar
                    akuntansi yang berlaku dan keakuratan informasi yang disajikan. Review ini memberikan keyakinan kepada
                    pemangku kepentingan bahwa laporan keuangan telah diperiksa secara cermat.
                </li>
                <li>
                    <b>Kompilasi Laporan Keuangan Bulanan dan Tahunan<br /></b>
                    Penyusunan laporan keuangan bulanan dan tahunan perusahaan. Tim konsultan akan membantu dalam menutup
                    periode akuntansi, neraca saldo, rekonsiliasi, serta mengumpulkan dan menganalisis data keuangan agar
                    laporan akhir mencerminkan kinerja dan posisi keuangan perusahaan secara akurat.
                </li>
            </ul>
            </P>
        </div>
        <div class="flex flex-col w-1/2">
            <img src="{{ asset('assets/frontend-image/service-image/accounting-serve.png') }}" class="w-full object-cover"
                alt="" />
        </div>
    </div>
@endsection
