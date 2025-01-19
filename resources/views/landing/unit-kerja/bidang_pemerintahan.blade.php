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
                <p class="breadcrumb-active text-white fw-500 m-0 p-0">{{ translate('Unit Kerja - PPM') }}</p>
            </div>
            <div class="title-content">
                <h4 class="title fw-bold mb-3">
                    {{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}
                </h4>
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
                        {{ translate('
                        {{ translate('Kepala Bidang Pemerintahan dan Pembangunan Manusia') }}') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan tugas operasional program Pemerintahan dan Pembangunan Manusia  berdasarkan peraturan dan petunjuk teknis yang berlaku dalam lingkup perencanaan Bidang Pemerintahan dan Pengembangan Manusia sebagai bahan penyusunan Arah Kebijakan Umum, Prioritas dan Pagu Sementara Bidang Pemerintahan dan Pengembangan Manusia agar pelaksanaan program terlaksana secara efektif dan efisien.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, pembinaan, bimbingan, pengendalian serta pengembangan teknis Bidang Pemerintahan dan Pembangunan Manusia.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Pemerintahan dan Pembangunan Manusia berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mendistribusikan tugas kepada bawahan di lingkungan Bidang Pemerintahan dan Pembangunan Manusia sesuai dengan tugas pokok dan tanggung jawab yang ditetapkan agar tugas yang diberikan dapat berjalan efektif dan efisien.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Memberi petunjuk pelaksanaan tugas kepada bawahan di lingkungan Bidang Pemerintahan dan Pembangunan Manusia sesuai dengan peraturan dan prosedur yang berlaku agar tidak terjadi kesalahan dalam pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyelia pelaksanaan tugas bawahan di lingkungan Bidang Pemerintahan dan Pembangunan Manusia secara berkala sesuai dengan peraturan dan prosedur yang berlaku untuk mencapai target kinerja yang diharapkan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merencanakan operasional program kegiatan Bidang Pemerintahan dan Pembangunan Manusia berdasarkan perencanaan strategis (RENSTRA) untuk digunakan sebagai pedoman pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun petunjuk teknis dan pelaksanaan operasional serta pengembangan sistem Pemerintahan dan Pembangunan Manusia sesuai pedoman yang berlaku agar kegiatan Pemerintahan dan Pengembangan Manusia dapat terlaksana dengan baik.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengkoordinir penyelenggaraan perencanaan pembangunan di bidang Pemerintahan dan Pembangunan Manusia sesuai petunjuk dan pedoman yang berlaku untuk mengetahui sejauh mana hasil pembangunan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan tugas bawahan di lingkungan Bidang Pemerintahan dan Pembangunan Manusia dengan cara membandingkan antara rencana operasional dengan tugas-tugas yang telah dilaksanakan sebagai bahan laporan kegiatan dan perbaikan kinerja di masa yang akan datang.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun laporan pelaksanaan tugas Pemerintahan dan Pembangunan Manusia sesuai dengan tugas yang telah dilaksanakan secara berkala sebagai bentuk akuntabilitas kinerja.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan tugas kedinasan lain yang diberikan pimpinan baik lisan maupun tertulis.') }}
                        </li>
                    </ol>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Fungsi :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Penyiapan bahan perumusan kebijakan teknis bidang pemerintahan dan pembangunan manusia.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Penyiapan bahan koordinasi perencanaan program bidang pemerintahan dan pembangunan manusia.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang pengembangan sumber daya manusia.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang kesejahteraan rakyat.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbi dang pemerintahan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Penyiapan bahan dan pelaksanaan evaluasi dan pelaporan pengembangan sumber daya manusia, kesejahteraan rakyat dan pemerintahan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Pelaksanaan fungsi lain yang diberikan Kepala Bappeda yang berkaitan dengan tugasnya.') }}
                        </li>
                    </ol>
                    <p class="title text-uppercase fs-4 fw-bold">
                        {{ translate('
                        KEPALA SUB BIDANG PENGEMBANGAN SUMBER DAYA MANUSIA') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan : ') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan kegiatan Sub Bidang Pengembangan Sumber Daya Manusia pada lingkup Pengembangan Sumber Daya Manusia sesuai prosedur dan ketentuan yang berlaku dalam rangka mendukung kelancaran sebagian tugas badan sehingga semua pekerjaan dapat diselesaikan secara efektif dan efisien.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok : ') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melakukan pengumpulan dan penyiapan bahan koordinasi, pembinaan, pengaturan teknis dalam pengembangan sumber daya manusia.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merencanakan kegiatan Sub Bidang Pengembangan Sumber Daya Manusia rencana operasional Bidang Sosial Budaya sebagai pedoman pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Membagi tugas kepada bawahan sesuai dengan tugas dan tanggung jawab masing-masing untuk kelancaran pelaksanaan tugas Sub Bidang Pengembangan Sumber Daya Manusia.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Membimbing pelaksanaan tugas bawahan di lingkungan Sub Bidang Pengembangan Sumber Daya Manusia sesuai dengan tugas dan tanggung jawab yang diberikan agar pekerjaan berjalan tertib dan lancar.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Memeriksa hasil kerja bawahan di lingkungan Sub Bidang Pengembangan Sumber Daya Manusia dan Kebudayaansesuai dengan prosedur dan peraturan yang berlaku agar terhindar dari kesalahan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana penyusunan Rencana Pembangunan Daerah Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Daerah Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD) urusan yang menjadi kewenangannya sesuai prosedur dan ketentuan untuk dijadikan bahan oleh pimpinan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Daerah Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD) urusan yang menjadi kewenangnannya berdasarkan ketentuan yang berlaku agar kegiatan musrenbang berjalan dengan aman dan lancar.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana pelaksanaan kesepakatan dengan DPRD terkait APBD urusan yang menjadi kewenangannya berdasarkan peraturan yang berlaku agar proses penganggaran berjalan dengan lancar.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana konsep pengendalian/monitoring pelaksanaan perencanaan pembangunan daerah urusan yang menjadi kewenangannya sesuai peraturan dan ketentuan yang berlaku untuk dijadikan bahan pertanggung-jawaban.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan kegiatan bawahan di lingkungan Sub Bagian Pengembangan Sumber Daya Manusia dengan cara mengidentifikasi hambatan yang ada dalam rangka perbaikan kinerja di masa mendatang.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaporkan pelaksanaan kinerja di lingkungan Sub Bagian Pengembangan Sumber Daya Manusia sesuai dengan prosedur dan peraturan yang berlaku sebagai akuntabilitas kinerja dan rencana kegiatan mendatang.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan tugas kedinasan lain yang diberikan pimpinan baik lisan maupun tertulis.') }}
                        </li>
                    </ol>
                    <p class="title text-uppercase fs-4 fw-bold">
                        {{ translate('
                        KEPALA SUB BIDANG KESEJAHTERAAN RAKYAT') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan kegiatan bidang Kesejahteraan Rakyat sesuai prosedur dan ketentuan yang berlaku dalam rangka mendukung kelancaran sebagian tugas Bidang Pemerintahan dan Pembangunan Manusia.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melakukan pengumpulan dan penyiapan bahan penyusunan rencana dan program kesejahteraan rakyat.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merencanakan kegiatan Sub Bidang Kesejahteraan Rakyat berdasarkan rencana operasional Bidang Pemerintahan dan Pembangunan Manusia sebagai pedoman pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Membagi tugas kepada bawahan sesuai dengan tugas dan tanggung jawab masing-masing untuk kelancaran pelaksanaan tugas Sub Bidang Kesejahteraan Rakyat.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Membimbing pelaksanaan tugas bawahan di lingkungan Sub Bidang Kesejahteraan Rakyat sesuai dengan tugas dan tanggung jawab yang diberikan agar pekerjaan berjalan tertib dan lancar.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Memeriksa hasil kerja bawahan di lingkungan Sub Bidang Kesejahteraan Rakyat sesuai dengan prosedur dan peraturan yang berlaku agar terhindar dari kesalahan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana penyusunan Rencana Pembangunan Daerah Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Daerah Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD) urusan Kependudukan dan Pencatatan Sipil, Tenaga Kerja dan Transmigrasi, Pemuda dan Olah Raga sesuai ketentuan yang berlaku demi kelancaran pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana pelaksanaan Musrenbang Rencana Pembangunan Daerah Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Daerah Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD) urusan Kependudukan dan Pencatatan Sipil, Tenaga Kerja dan Transmigrasi, Pemuda dan OlahRaga.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana kegiatan pengendalian/monitoring pelaksanaan perencanaan pembangunan daerah dilingkungan Kesejahteraan Sosial sesuai dengan peraturan yang berlaku sebagai bahan pertanggung-jawaban.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana pelaksanaan kesepakatan dengan DPRD terkait APBDsesuai dengan peraturan yang berlaku untuk kelancaran pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan kegiatan di lingkungan Sub Bidang Kesejahteraan Rakyat dengan cara mengidentifikasi hambatan yang ada dalam rangka perbaikan kinerja di masa mendatang.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaporkan pelaksanaan kinerja di lingkungan Sub Bidang Kesejahteraan Rakyat sesuai dengan prosedur dan peraturan yang berlaku sebagai akuntabilitas kinerja dan rencana kegiatan mendatang.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan tugas kedinasan lain yang diberikan pimpinan baik lisan maupun tertulis.') }}
                        </li>
                    </ol>
                    <p class="title text-uppercase fs-4 fw-bold">
                        {{ translate('
                        KEPALA SUB BIDANG PEMERINTAHAN') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan : ') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan sebagian tugas Bidang Pemerintahan dan Pembangunan Manusia pada lingkup melakukan pengumpulan, penyiapan bahan penyusunan rencana dan program pemerintahan sesuai prosedur dan ketentuan yang berlaku dalam rangka mendukung kelancaran tugas Badan Perencanaan Pembangunan Daerah.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melakukan pengumpulan dan penyiapan bahan penyusunan rencana dan program pemerintahan.') }}'
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :')}}</p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merencanakan kegiatan Sub Bidang Pemerintahan berdasarkan rencana operasional Bidang Pemerintahan dan Pembangunan Manusia sebagai pedoman pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Membagi tugas kepada bawahan sesuai dengan tugas dan tanggung jawab masing-masing untuk kelancaran pelaksanaan tugas Sub Bidang Pemerintahan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Membimbing pelaksanaan tugas bawahan di lingkungan Sub Bidang Pemerintahan sesuai dengan tugas dan tanggung jawab yang diberikan agar pekerjaan berjalan tertib dan lancar.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Memeriksa hasil kerja bawahan di lingkungan Sub Bidang Pemerintahan sesuai dengan prosedur dan peraturan yang berlaku agar terhindar dari kesalahan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana penyusunan Rencana Pembangunan Daerah Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Daerah Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD) di lingkup urusan Pemerintahan sesuai prosedur yang berlaku untuk kelancaran pelaksanaan tugas.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana pelaksanaan Musrenbang Rencana Pembangunan Daerah Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Daerah Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD) di lingkup urusan Pemerintahan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana pengendalian/monitoring pelaksanaan perencanaan pembangunan daerah di lingkup urusan Pemerintahan sesuai ketentuan yang berlaku untuk dijadikan bahan pertanggung-jawaban.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep rencana pelaksanaan kesepakatan dengan DPRD terkait APBD urusan Pemerintahan sesuai peraturan dan ketentuan yang berlaku agar proses penganggaran berjalan dengan lancar.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan kegiatan di lingkungan Sub Bidang Pemerintahan dengan cara mengidentifikasi hambatan yang ada dalam rangka perbaikan kinerja di masa mendatang.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaporkan pelaksanaan kinerja di lingkungan Sub Bidang Pemerintahan sesuai dengan prosedur dan peraturan yang berlaku sebagai akuntabilitas kinerja dan rencana kegiatan mendatang.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan tugas kedinasan lain yang diberikan pimpinan baik lisan maupun tertulis.') }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->
@endsection
