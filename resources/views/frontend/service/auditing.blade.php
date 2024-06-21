@extends('frontend.template')

@section('content')
    <div class="relative w-full h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('assets/frontend-image/service-image/accounting-bg.png') }}');">
        <div
            class="absolute inset-0 bg-black opacity-50 rounded-lg transition-opacity duration-100 ease-in-out group-hover:opacity-70">
        </div>
        <div class="relative flex flex-col h-screen justify-center px-40 text-white w-2/3 gap-y-3">
            <h2 class="text-5xl font-bold">Bingung cara membuat laporan keuangan?</h2>
            <p class="text-xl font-normal">Kami Selalu Siap Membantumu</p>
        </div>
    </div>
    <div class="flex w-full justify-between py-10 px-40">
        <div class="flex flex-col w-1/2 items-start">
            <img src="{{ asset('assets/frontend-image/service-image/auditing-icon.png') }}" class="w-1/2 object-cover"
                alt="" />
        </div>
        <div class="flex flex-col items-start text-black w-1/2 gap-y-4 justify-center">
            <h2 class="text-3xl font-bold">APA ITU AUDIT DAN JAMINAN?</h2>
            <p class="text-lg font-normal text-justify">Layanan ini memastikan bahwa laporan keuangan dan informasi lainnya
                akurat, andal, dan sesuai dengan standar akuntansi yang berlaku. Layanan audit penting untuk menjaga
                transparansi, akuntabilitas, dan kepercayaan dalam bisnis dan organisasi.</p>
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
                    <b>Laporan Keuangan Keuangan<br /></b>
                    Penyusunan laporan keuangan yang akurat, lengkap, sesuai dengan standar akuntansi yang berlaku, serta
                    memberikan gambaran menyeluruh tentang kinerja keuangan suatu perusahaan dalam periode tertentu.
                </li>
                <li>
                    <b>Prosedur yang Disetujui (AUP)<br /></b>
                    Pemeriksaan independen terhadap informasi atau aspek tertentu dalam suatu perusahaan sesuai dengan
                    prosedur yang telah disetujui sebelumnya. Hasil dari pemeriksaan disajikan dalam bentul laporan yang
                    berisi temuan berdasarkan fakta dan bukti yang ditemukan selama proses AUP.
                </li>
                <li>
                    <b>Pemeriksaan Pada Pro-forma Informasi keuangan<br /></b>
                    Pemeriksaan independen atas informasi keuangan yang disajikan dalam bentuk laporan keuangan yang
                    mencerminkan dampak potensial dan transaksi atau peristiwa tertentu di masa depan.
                </li>
                <li>
                    <b>Audit Kinerja/Pengendalian Internal<br /></b>
                    Pemeriksaan independen yang bertujuan untuk mengevaluasi efisiensi dan efektivitas operasional suatu
                    perusahaan, termasuk pengendalian internal yang diterapkan dalam proses bisnis. Hasil audit akan
                    memberikan rekomendasi untuk perbaikan dan peningkatan dalam manajemen risiko dan tata kelola
                    perusahaan.
                </li>
                <li>
                    <b>Comfort Letter tentang Pengungkapan Prospektus<br /></b>
                    Penerbitan surat jaminan oleh konsultan atau auditor yang memberikan keyakninan kepada pihak lain
                    tentang kelayakan dan kepatuhan informasi keuangan yang terdapat dalam prospectus penawaran saham atau
                    surat berharga.
                </li>
                <li>
                    <b>Tinjauan Independen secara Eksternal Informasi yang Dilaporkan<br /></b>
                    Tinjauan independen atas informasi yang dilaporkan oleh suatu perusahaan, seperti tinjauan atas
                    pembahasan dan analisis manajemen dalam laporan tahunan untuk memberikan keyakninan atas kualitas dan
                    keandalan informasi yang disajikan.
                </li>
            </ul>
            </P>
        </div>
        <div class="flex flex-col w-1/2">
            <img src="{{ asset('assets/frontend-image/service-image/auditing-serve.png') }}" class="w-full object-cover"
                alt="" />
        </div>
    </div>
@endsection
