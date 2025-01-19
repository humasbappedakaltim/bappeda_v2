@extends('layouts.landing')

@section('content')
 <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>
                <i class="bi bi-chevron-right text-white m-0 p-0"></i>
                <p class="breadcrumb-active text-white fw-500 m-0 p-0">{{ translate('Kepala BAPPEDA') }}</p>
                <div class="title-content">
                    <h4 class="title fw-bold mb-3">
                        {{ translate('Kepala BAPPEDA') }}
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!----- End Breadcrumb Section ----->
    <!---------------------------------->

    <!---------------------------------->
    <!--------- Main Section ----------->
    <!---------------------------------->
    <section class="over-top-section position-relative d-flex justify-content-center m-0 p-0">
        <div class="container over-top-container m-0 p-0">
            <div class="row m-0 p-0">
                <div class="col-12 px-0">
                    <p class="title text-uppercase fs-4 fw-bold">
                        {{ translate('kepala bappeda') }}

                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan') }} :</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan penyelenggaraan urusan pemerintahan dan pelayanan Organisasi Perangkat Daerah yang menjadi kewenangan Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur terkait pelaksanaan tugas bidang perencanaan pembangunan daerah yang menjadi kewenangannya sesuai dengan peraturan dan ketentuan yang berlaku agar pelaksanaan tugas berjalan lancar, efektif dan efisien.') }}</p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok') }} :</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Membantu Gubernur melaksanakan Urusan Pemerintahan yang menjadi kewenangan daerah di bidang perencanaan.') }}</p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas') }} :</p>

                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merumuskan program kerja di lingkungan Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur berdasarkan rencana Strategis Bappeda Provinsi Kalimantan Timur sebagai pedoman pelaksanaan tugas.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengkoordinasikan pelaksanaan tugas di lingkungan Badan Perencanaan Pembanguan Daerah Provinsi Kalimantan Timur sesuai dengan program yang telah ditetapkan dan sesuai dengan kebijakan pimpinan agar target kerja tercapai sesuai rencana.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Membina bawahan di lingkungan Badan Perencanaan Pembanguan Daerah Provinsi Kalimantan Timur dengan cara mengadakan rapat/ pertemuan dan bimbingan secara berkala agar diperoleh kinerja yang diharapkan. ') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengarahkan pelaksanaan tugas bawahan di lingkungan Badan Perencanaan dan Pembangunan Daerah sesuai dengan tugas, tanggung jawab, permasalahan dan hambatan serta ketentuan yang berlaku untuk ketepatan dan kelancaran pelaksanaan tugas.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merumuskan kebijakan teknis bidang Perencanaan dan Pembangunan Daerah sesuai prosedur dan ketentuan yang berlaku dalam rangka tercapainya perencanaan daerah yang menyeluruh, terarah dan terpadu.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan koordinasi program dan kegiatan dengan keseluruhan OPD Kabupaten Kota serta lembaga/ instansi terkait dalam penyelenggaraan kegiatan perencanaan bedasarkan peraturan dan ketentuan yang yang berlaku untuk meningkatkan keselarasan pembangunan sektoral dan pembangunan daerah.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengendalikan pelaksanaan program kerja tahunan berdasarkan rencana program dan kegiatan tahun berjalan untuk memastikan pelaksanaan program dan kegiatan badan berjalan dengan lancar.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan tugas bawahan di lingkungan Badan Perencanaan dan Pembangunan Daerah dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Menyusun laporan pelaksanaan tugas di lingkungan Badan Perencanaan dan Pembangunan Daerah sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja Badan.') }}</li>
                    </ol>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Fungsi') }} :</p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Perumusan kebijakan teknis perencanaan pembangunan daerah sesuai dengan rencana strategis yang ditetapkan pemerintah daerah.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Perencanaan, pembinaan dan pengendalian kebijakan teknis bidang perencanaan, pengendalian dan evaluasi pembangunan daerah, pemerintahan dan pembangunan manusia, perekonomian dan sumber daya alam serta infrastruktur dan kewilayahan.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan kebijakan teknis perencanaan, pengendalian dan evaluasi pembangunan daerah.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan kebijakan teknis pemerintahan dan pembangunan manusia.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan kebijakan teknis perekonomian dan sumber daya alam.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan kebijakan teknis infrastruktur dan kewilayahan') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan evaluasi dan pelaporan bidang perencanaan, pengendalian dan evaluasi pembangunan daerah, pemerintahan dan pembangunan manusia, perekonomian dan sumber daya alam serta infrastruktur dan kewilayahan.') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan administrasi badan sesuai dengan lingkup tugasnya; dan') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan fungsi lain diberikan oleh gubernur yang berkaitan dengan tugasnya.') }}</li>

                    </ol>
                </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->


    @endsection
