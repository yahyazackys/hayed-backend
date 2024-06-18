<?php $__env->startSection('content'); ?>
    <div class="relative w-full h-screen">
        <img src="<?php echo e(asset('assets/frontend-image/service-image/accounting-bg.png')); ?>" class="absolute h-full -z-0"
            alt="">
        <div class="relative flex flex-col h-screen justify-center px-40 text-white w-2/3 gap-y-3">
            <h2 class="text-5xl font-bold">Bingung cara membuat laporan keuangan?</h2>
            <p class="text-xl font-normal">Kami Selalu Siap Membantumu</p>
        </div>
    </div>
    <div class="flex w-full justify-between py-10 px-40">
        <div class="flex flex-col w-1/2 items-start">
            <img src="<?php echo e(asset('assets/frontend-image/service-image/business-icon.png')); ?>" class="w-1/2 object-cover"
                alt="" />
        </div>
        <div class="flex flex-col items-start text-black w-1/2 gap-y-4 justify-center">
            <h2 class="text-3xl font-bold">APA ITU BISNIS PELATIHAN?</h2>
            <p class="text-lg font-normal text-justify">Layanan ini berisi serangkaian kegiatan yang bertujuan untuk
                mengembangkan pengetahuan, keterampilan, dan kompetensi seseorang atau kelompok dalam suatu bidang tertentu.
                Pelatihan dapat diselenggarakan oleh berbagai jenis organisasi, termasuk perusahaan, institusi pendidikan,
                lembaga pemerintah, dan penyedia layanan pelatihan independen. Tujuan utama dari layanan pelatihan adalah
                meningkatkan kemampuan individu atau kelompok sehingga mereka dapat bekerja lebih efektif dan produktif.</p>
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
                    <b>
                        Seminar dan Pelatihan Akuntansi
                        <br />
                    </b>
                    Mencakup upaya untuk berbagi pengetahuan dan pengalaman di bidang akuntansi melalui penyelenggaraan
                    seminar,
                    workshop, atau pelatihan. Tujuan dari jasa ini adalah untuk memberikan informasi terbaru tentang
                    peraturan,
                    praktik, dan tren akuntansi kepada peserta sehingga mereka dapat meningkatkan keterampilan dan pemahaman
                    mereka.
                </li>

                <li>
                    <b>
                        Seminar dan Pelatihan Perpajakan
                        <br />
                    </b>
                    Seminar dan pelatihan khusus tentang isu-isu perpajakan, termasuk Pajak Pertambahan Nilai (PPN). Peserta
                    akan diberikan informasi mengenai peraturan dan praktik perpajakan terkini agar mereka dapat mengelola
                    pajak
                    secara efisien dan sesuai dengan peraturan yang berlaku.
                </li>

                <li>
                    <b>
                        Pelatihan VAT
                        <br />
                    </b>
                    Membekali peserta dengan pengetahuan mendalam tentang peraturan perpajakan PPN, metode perhitungan,
                    prosedur
                    pengajuan, dan kepatuhan pajak yang relevan. Konsep dasar PPN, klasifikasi transaksi yang kena pajak,
                    tarif
                    PPN yang berlaku, serta persyaratan administrasi dan pelaporan yang harus dipenuhi.
                </li>

                <li>
                    <b>
                        Brevet A,B, & C
                        <br />
                    </b>
                    Program pelatihan dan persiapan ujian untuk sertifikasi Brevet A, B, dan C, yang merupakan sertifikasi
                    profesi di bidang perpajakan. Program ini membekali peserta dengan pengetahuan dan keterampilan yang
                    diperlukan untuk berhasil dalam ujian sertifikasi dan menjadi profesional pajak yang berkualifikasi.
                </li>
            </ul>
            </P>
        </div>
        <div class="flex flex-col w-1/2">
            <img src="<?php echo e(asset('assets/frontend-image/service-image/business-serve.png')); ?>" class="w-full object-cover"
                alt="" />
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahyazackys/Dev/backend/hayed-backend/resources/views/frontend/service/business.blade.php ENDPATH**/ ?>