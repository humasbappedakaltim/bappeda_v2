@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>

            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">{{ translate('Tupoksi bappeda') }}</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">
                {{ translate('Tupoksi bappeda') }}
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section position-relative d-flex justify-content-center m-0 p-0">
    <div class="container over-top-container m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-12 px-0">
                <p class="title text-center text-uppercase fs-6 fw-bold">{{ translate('TUGAS DAN FUNGSI BADAN PERENCANAAN PEMBANGUNAN DAERAH PROVINSI KALIMANTAN TIMUR') }}</p>
                <p class="text-justify fs-8 fw-light lh-sm my-5">
                  {{ translate('Berdasarkan Peraturan Gubernur (PERGUB) Nomor 43 Tahun 2023 tentang Susunan Organisasi, Tugas, Fungsi, dan Tata Kerja dari Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur, yaitu :') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('BAB XXVIII') }}
                </p>
                <p class="text-center fw-bold mb-5">
                    {{ translate('BADAN PERENCANAAN PEMBANGUNAN DAERAH') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 755') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-5">
                    {{ translate('Badan Perencanaan Pembangunan Daerah dipimpin oleh seorang Kepala Badan yang dalam melaksanakan tugasnya berkedudukan dibawah dan bertanggung jawab kepada Gubernur melalui Sekda.') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 756') }}
                </p>
                <ol>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">
                        {{ translate('Susunan organisasi Badan Perencanaan Pembangunan Daerah terdiri atas Kepala Badan membawahkan:') }}
                        <ol>
                            <li class="fs-8 fw-light lh-sm mt-2">
                                {{ translate('Kepala Badan') }}
                            </li>
                            <li class="fs-8 fw-light lh-sm mb-1">
                                {{ translate('Sekretariat membawahkan:') }}
                                <ol>
                                    <li class="fs-8 fw-light lh-sm mt-2">{{ translate('Subbagian Perencanaan Program;') }}</li>
                                    <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Subbagian Umum; dan') }}</li>
                                    <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Kelompok Jabatan Fungsional.') }}</li>
                                </ol>
                            </li>
                            <li class="fs-8 fw-light lh-sm mt-2">{{ translate('Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah membawahkan Kelompok Jabatan Fungsional;') }}</li>
                            <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Bidang Pemerintahan dan Pembangunan Manusia membawahkan Kelompok Jabatan Fungsional;') }}</li>
                            <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Bidang Perekonomian dan Sumber Daya Alam membawahkan Kelompok Jabatan Fungsional; dan') }}</li>
                            <li class="fs-8 fw-light lh-sm mb-2">{{ translate('Bidang Infrastruktur dan Kewilayahan membawahkan Kelompok Jabatan Fungsional.') }}</li>
                        </ol>
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('Bagan Susunan Organisasi Badan Perencanaan Pembangunan Daerah sebagaimana dimaksud pada ayat (1) tercantum dalam Lampiran XXVII yang merupakan bagian tidak terpisahkan dari Peraturan Gubernur ini.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Paragraf 1') }}
                </p>
                <p class="text-center fw-bold mb-5">
                    {{ translate('Kepala Badan') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 757') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-5">
                    {{ translate('Kepala Badan mempunyai tugas membantu Gubernur melaksanakan Urusan Pemerintahan yang menjadi kewenangan daerah di bidang perencanaan dan pembangunan daerah.') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 758') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan tugas sebagaimana dimaksud diatas, Kepala Badan menyelenggarakan fungsi penunjang menjadi kewenangan Daerah meliputi:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('perumusan kebijakan teknis bidang perencanaan sesuai dengan rencana strategis yang ditetapkan pemerintah Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('perencanaan, pengoordinasian, pembinaan dan pengendalian kebijakan teknis bidang perencanaan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyelenggaraan urusan pemerintahan dan pelayanan umum bidang perencanaan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pengarahan pelaksanaan tugas bawahan sesuai dengan tugas, tanggung jawab, permasalahan dan hambatan serta ketentuan yang berlaku untuk ketepatan dan kelancaran pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('perumusan, perencanaan, pembinaan dan pengendalian kebijakan teknis bidang perencanaan, pengendalian dan evaluasi pembangunan Daerah') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('perumusan, perencanaan, pembinaan dan pengendalian kebijakan teknis bidang pemerintahan dan pembangunan manusia;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('perumusan, perencanaan, pembinaan dan pengendalian kebijakan teknis bidang perekonomian dan sumber daya alam;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('perumusan, perencanaan, pembinaan dan pengendalian kebijakan teknis bidang infrastruktur dan kewilayahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyelenggaraan urusan kesekretariatan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pelaksana Unit Pelaksana Teknis Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pembinaan Kelompok Jabatan Fungsional; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pelaksanaan fungsi dan tugas lain yang diberikan oleh Gubernur yang berkaitan dengan tugasnya.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 759') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan fungsi sebagaimana dimaksud dalam Pasal 758 Kepala Badan mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('merumuskan program kerja di lingkungan badan berdasarkan rencana strategis badan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengoordinasikan pelaksanaan tugas sesuai dengan program yang telah ditetapkan dan kebijakan pimpinan agar target kerja tercapai sesuai rencana;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('membina bawahan dengan cara mengadakan rapat/pertemuan dan bimbingan secara berkala agar diperoleh kinerja yg diharapkan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengarahkan pelaksanaan tugas bawahan sesuai dengan tugas, tanggung jawab, permasalahan dan hambatan serta ketentuan yang berlaku untuk ketepatan dan kelancaran pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('melaksanakan kebijakan teknis perencanaan, pengendalian dan evaluasi pembangunan Daerah') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('melaksanakan kebijakan teknis pemerintahan dan pembangunan manusia') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('melaksanakan kebijakan teknis perekonomian dan sumber daya alam') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('melaksanakan kebijakan teknis infrastruktur dan kewilayahan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas badan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Gubernur baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Paragraf 2') }}
                </p>
                <p class="text-center fw-bold mb-5">
                    {{ translate('Sekretariat') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 760') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Sekretariat dipimpin oleh seorang Sekretaris yang dalam melaksanakan tugasnya berada di bawah dan bertanggung jawab kepada Kepala Badan.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('Sekretariat sebagaimana dimaksud pada ayat (1) mempunyai tugas melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, perencanaan program dan pelaporan, urusan umum dan kehumasan, kepegawaian, ketatalaksanaan, perlengkapan, administrasi keuangan, pengelolaan aset, dan pengoordinasian pelaksanaan musyawarah rencana pembangunan.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 761') }}
                </p>
                <p class="text-justify fs-8 fw-light mb-2">
                    {{ translate('Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 760 ayat (2) Sekretaris menyelenggarakan fungsi: ') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan koordinasi penyusunan rencana program, monitoring, evaluasi dan pelaporan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan koordinasi administrasi umum dan kepegawaian, ketatalaksanan, perlengkapan dan pemeliharaan, hukum dan kehumasan serta pengaduan masyarakat;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan koordinasi penyusunan anggaran, perbendaharaan, verifikasi dan akuntansi keuangan serta pengelolaan barang milik negara/Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pendistribusian dan pemberian petunjuk pelaksanaan tugas kepada bawahannya; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('pelaksanaan fungsi dan tugas lain yang diberikan Kepala Badan yang berkaitan dengan tugasnya.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 762') }}
                </p>
                <p class="text-justify fs-8 fw-light mb-2">
                    {{ translate('Dalam melaksanakan fungsi sebagaimana dimaksud dalam Pasal 761 Sekretaris mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menghimpun perencanaan program kegiatan badan dan menyusun perencanaan program sekretariat pada badan sesuai petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mendistribusikan tugas kepada bawahan sesuai dengan tugas dan tanggung jawab yang ditetapkan agar tugas yang diberikan dapat berjalan efektif dan efisien;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mendistribusikan dan memberi petunjuk pelaksanaan tugas kepada bawahan di lingkungan Sekretariat sesuai dengan peraturan dan prosedur yang berlaku agar tidak terjadi kesalahan dalam pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyelenggarakan pengelolaan administrasi keuangan berdasarkan peraturan yang berlaku;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyelenggarakan pengelolaan aset dan barang persediaan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyelenggarakan pengelolaan administrasi umum dan perlengkapan/sarpras;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyelenggarakan pengelolaan kepegawaian;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyelenggarakan pengelolaan ketatalaksanaan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyelenggarakan pengelolaan humas dan protokoler;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja badan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Kepala Dinas baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold my-5">
                    {{ translate('Subbagian Perencanaan Program') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 763') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Subbagian Perencanaan Program dipimpin oleh seorang Kepala Subbagian yang dalam melaksanakan tugasnya berada di bawah dan bertanggung jawab kepada Sekretaris.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('Subbagian Perencanaan Program sebagaimana dimaksud pada ayat (1) mempunyai tugas melakukan pengumpulan dan penyiapan bahan koordinasi penyusunan rencana dan program, monitoring, evaluasi dan pelaporan.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 764') }}
                </p>
                <p class="text-justify fs-8 fw-light mb-2">
                    {{ translate('Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 763 ayat (2), Subbagian Perencanaan Program mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menghimpun perencanaan program kegiatan badan dan menyusun perencanaan program Subbagian Perencanaan Program pada badan sesuai petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('membagi tugas kepada bawahan sesuai dengan tugas dan tanggung jawab masing-masing untuk kelancaran pelaksanaan tugas agar kegiatan dapat berjalan dengan baik;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('membimbing pelaksanaan tugas bawahan sesuai dengan tugas dan tanggung jawab yang diberikan agar pekerjaan berjalan tertib dan lancar') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('memeriksa hasil kerja bawahan sesuai dengan prosedur dan peraturan yang berlaku agar terhindar dari kesalahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan penyusunan RKA berdasarkan peraturan yang berlaku untuk mendukung kelancaran tugas Badan Perencanaan Pembangunan Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan pengolahan DPA berdasarkan usulan bidang/bagian untuk mendukung kelancaran tugas Badan Perencanaan Pembangunan Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan Laporan Akuntabilitas Kinerja Instansi Pemerintah sesuai dengan peraturan yang berlaku untuk optimlisasi tugas') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja sekretariat;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Sekretaris baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold my-5">
                    {{ translate('Subbagian Umum')}}
                </p>
                <p class="text-center fw-bold mb-2">
                    {{ translate('Pasal 765')}}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Subbagian Umum dipimpin oleh seorang Kepala Subbagian yang dalam melaksanakan tugasnya berada di bawah dan bertanggung jawab kepada Sekretaris.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Subbagian Umum sebagaimana dimaksud pada ayat (1) mempunyai tugas melakukan pengumpulan dan penyiapan bahan administrasi umum dan kepegawaian, ketatalaksanaan, perlengkapan dan pemeliharaan, hukum dan kehumasan serta pengaduan masyarakat.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 766') }}
                </p>
                <p class="text-justify fs-8 fw-light mb-2">
                  {{ translate('Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 765 ayat (2), Subbagian Umum mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('merencanakan kegiatan Subbagian umum berdasarkan rencana operasional/program kerja sekretariat sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('membagi tugas kepada bawahan sesuai dengan tugas dan tanggung jawab masing-masing untuk kelancaran pelaksanaan agar kegiatan dapat berjalan dengan baik;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('membimbing pelaksanaan tugas bawahan sesuai dengan tugas dan tanggung jawab yang diberikan agar pekerjaan berjalan tertib dan lancar') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('memeriksa hasil kerja bawahan sesuai dengan prosedur dan peraturan yang berlaku agar terhindar dari kesalahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan petunjuk dan bimbingan teknis pembinaan, pengawasan dan pengendalian perencanaan kebutuhan Aparatur Sipil Negara;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan petunjuk dan bimbingan teknis pembinaan, pengawasan dan pengendalian administrasi kepegawaian;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan petunjuk dan pengawasan serta pengendalian sarana prasarana kantor;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan petunjuk dan pengawasan serta pengendalian administrasi perkantoran;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja sekretariat; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Sekretaris baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Paragraf 3') }}
                </p>
                <p class="text-center fw-bold mb-5">
                     {{ translate('Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Paragraf 3') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah Pembangunan Daerah dipimpin oleh seorang Kepala Bidang yang dalam melaksanakan tugasnya berada di bawah dan bertanggung jawab kepada Kepala Badan.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Sekretaris baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Paragraf 3') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 767 ayat (2) Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah menyelenggarakan fungsi:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan perumusan kebijakan teknis bidang perencanaan, pengendalian dan evaluasi pembangunan Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan koordinasi, penyusunan, perencanaan program bidang perencanaan, pengendalian dan evaluasi pembangunan Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis perencanaan dan pendanaan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis analisis data dan informasi;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis pengendalian, evaluasi dan pelaporan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pendistribusian dan pemberian petunjuk pelaksanaan tugas kepada bawahannya bidang perencanaan, pengendalian dan evaluasi pembangunan Daerah;') }}

                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan evaluasi dan pelaporan bidang perencanaan dan pendanaan, analisis data dan informasi serta pengendalian, evaluasi dan pelaporan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('pelaksanaan fungsi dan tugas lain yang diberikan Kepala Badan yang berkaitan dengan tugasnya') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 769') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan fungsi sebagaimana dimaksud dalam Pasal 768 Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun rencana operasional di lingkungan bidang perencanaan, pengendalian dan evaluasi pembangunan Daerah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mendistribusikan tugas kepada bawahan sesuai dengan tugas dan tanggung jawab yang ditetapkan agar tugas yang diberikan dapat berjalan efektif dan efisien;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('memberi petunjuk pelaksanaan tugas kepada bawahan sesuai dengan peraturan dan prosedur yang berlaku agar tidak terjadi kesalahan dalam pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan koordinasi perencanaan program perencanaan, pengendalian dan evaluasi pembangunan Daerah;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis sub bidang perencanaan dan pendanaan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang analisis data dan informasi') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang pengendalian, evaluasi dan pelaporan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja badan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Kepala Badan baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Paragraf 4') }}
                </p>
                <p class="text-center fw-bold mb-5">
                    {{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 770') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Bidang Pemerintahan dan Pembangunan Manusia dipimpin oleh seorang Kepala Bidang yang dalam melaksanakan tugasnya berada di bawah dan bertanggung jawab kepada Kepala Badan.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('Bidang Pemerintahan dan Pembangunan Manusia sebagaimana dimaksud pada ayat (1) mempunyai tugas melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, pembinaan, bimbingan, pengendalian serta pengembangan teknis bidang pemerintahan dan pembangunan manusia.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 771') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Bidang Pemerintahan dan Pembangunan Manusia sebagaimana dimaksud pada ayat (1) mempunyai tugas melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, pembinaan, bimbingan, pengendalian serta pengembangan teknis bidang pemerintahan dan pembangunan manusia.') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan perumusan kebijakan teknis bidang pemerintahan dan pembangunan manusia;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan koordinasi, penyusunan, perencanaan program bidang pemerintahan dan pembangunan manusia;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis pengembangan sumber daya manusia;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis kesejahteraan rakyat;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis pemerintahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pendistribusian dan pemberian petunjuk pelaksanaan tugas kepada bawahannya bidang pemerintahan dan pembangunan manusia;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan evaluasi dan pelaporan pengembangan sumber daya manusia, kesejahteraan rakyat dan pemerintahan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('pelaksanaan fungsi dan tugas lain yang diberikan Kepala Badan yang berkaitan dengan tugasnya.Selanjutnya Subbidang yang ada di dalam') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 772') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan fungsi sebagaimana dimaksud dalam Pasal 771 Bidang Pemerintahan dan Pembangunan Manusia mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun rencana operasional di lingkungan bidang pemerintahan dan pembangunan manusia berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mendistribusikan tugas kepada bawahan sesuai dengan tugas dan tanggung jawab yang ditetapkan agar tugas yang diberikan dapat berjalan efektif dan efisien;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('memberi petunjuk pelaksanaan tugas kepada bawahan sesuai dengan peraturan dan prosedur yang berlaku agar tidak terjadi kesalahan dalam pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan koordinasi perencanaan program bidang pemerintahan dan pembangunan manusia;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis sub bidang pengembangan sumber daya manusia;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang kesejahteraan rakyat') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang pemerintahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan melaksanakan evaluasi dan pelaporan bidang pengembangan sumber daya manusia, kesejahteraan rakyat, pemerintahan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja badan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Kepala Badan baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                   {{ translate('Paragraf 5')}}
                </p>
                <p class="text-center fw-bold mb-5">
                    {{ translate('Bidang Perekonomian dan Sumber Daya Alam') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 773') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Bidang Perekonomian dan Sumber Daya Alam dipimpin oleh seorang Kepala Bidang yang dalam melaksanakan tugasnya berada di bawah dan bertanggung jawab kepada Kepala Badan.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('Bidang Perekonomian dan Sumber Daya Alam sebagaimana dimaksud pada ayat (1) mempunyai tugas melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, pembinaan, bimbingan, pengendalian serta pengembangan teknis bidang perekonomian dan Sumber Daya Alam.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                   {{translate(' Pasal 774')}}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 773 ayat (2) Bidang Perekonomian dan Sumber Daya Alam menyelenggarakan fungsi:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan perumusan kebijakan teknis bidang perekonomian dan sumber daya alam;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan koordinasi, penyusunan, perencanaan program bidang perekonomian dan sumber daya alam;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis pertanian dan perikanan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis industri, perdagangan, koperasi, investasi dan pariwisata;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis sumber daya alam dan lingkungan hidup;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pendistribusian dan pemberian petunjuk pelaksanaan tugas kepada bawahannya bidang perekonomian dan sumber daya alam;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan evaluasi pelaporan bidang pertanian dan perikanan, industri, perdagangan, koperasi, investasi dan pariwisata serta sumber daya alam dan lingkungan hidup; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('pelaksanaan fungsi dan tugas lain yang diberikan Kepala Badan yang berkaitan dengan tugasnya.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 775') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan fungsi sebagaimana dimaksud dalam Pasal 774 Bidang Perekonomian dan Sumber Daya Alam mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun rencana operasional berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mendistribusikan tugas kepada bawahan sesuai dengan tugas dan tanggung jawab yang ditetapkan agar tugas yang diberikan dapat berjalan efektif dan efisien;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('memberi petunjuk pelaksanaan tugas kepada bawahan sesuai dengan peraturan dan prosedur yang berlaku agar tidak terjadi kesalahan dalam pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan koordinasi perencanaan program bidang perekonomian dan sumber daya alam') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis sub bidang pertanian dan perikanan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis sub bidang industri, perdagangan, koperasi, investasi dan pariwisata') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis sub bidang sumber daya alam dan lingkungan hidup') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan melaksanakan evaluasi dan pelaporan pertanian dan perikanan, industri, perdagangan, koperasi, investasi dan pariwisata, sumber daya alam dan lingkungan hidup') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja badan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Kepala Badan baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Paragraf 6') }}
                </p>
                <p class="text-center fw-bold mb-5">
                    {{ translate('Bidang Infrastruktur dan Kewilayahan') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 776') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Bidang Infrastruktur dan Kewilayahan dipimpin oleh seorang Kepala Bidang yang dalam melaksanakan tugasnya berada di bawah dan bertanggung jawab kepada Kepala Badan.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('Bidang Infrastruktur dan Kewilayahan sebagaimana dimaksud pada ayat (1) mempunyai tugas melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, pembinaan, bimbingan, pengendalian, pengembangan dan perencanaan teknis bidang prasarana wilayah.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 777') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-2">
                    {{ translate('Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 776 ayat (2) Bidang Infrastruktur dan Kewilayahan menyelenggarakan fungsi:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan perumusan kebijakan teknis bidang infrastruktur dan kewilayahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan koordinasi, penyusunan, perencanaan program bidang infrastruktur dan kewilayahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis infrastruktur kebinamargaan dan perhubungan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis infrastruktur sumber daya air dan kewilayahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis infrastruktur keciptakaryaan dan pemukiman;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('pendistribusian dan pemberian petunjuk pelaksanaan tugas kepada bawahannya bidang infrastruktur dan kewilayahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('penyiapan bahan dan pelaksanaan evaluasi dan pelaporan infrastruktur kebinamargaan dan perhubungan, infrastruktur sumber daya air dan kewilayahan serta infrastruktur keciptakaryaan dan pemukiman; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('pelaksanaan fungsi dan tugas lain yang diberikan Kepala Badan yang berkaitan dengan tugasnya.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 778') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-3">
                    {{ translate('Dalam melaksanakan fungsi sebagaimana dimaksud dalam Pasal 777 Bidang Infrastruktur dan Kewilayahan mempunyai uraian tugas:') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun rencana operasional di lingkungan bidang infrastruktur dan kewilayahan berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mendistribusikan tugas kepada bawahan sesuai dengan tugas dan tanggung jawab yang ditetapkan agar tugas yang diberikan dapat berjalan efektif dan efisien;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('memberi petunjuk pelaksanaan tugas kepada bawahan sesuai dengan peraturan dan prosedur yang berlaku agar tidak terjadi kesalahan dalam pelaksanaan tugas;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan koordinasi perencanaan program infrastruktur dan kewilayahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang kebinamargaan dan perhubungan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis subbidang infrastruktur sumber daya air dan kewilayahan;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan pelaksanaan koordinasi, pembinaan, bimbingan, pengendalian dan pengaturan teknis sub bidang infrastruktur keciptakaryaan dan pemukiman;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyiapkan bahan dan melaksanakan evaluasi dan pelaporan bidang infrastruktur kebinamargaan dan perhubungan, sumber daya air dan kewilayahan serta keciptakaryaan dan pemukiman;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('mengevaluasi pelaksanaan tugas bawahan dengan cara membandingkan rencana dengan kegiatan yang telah dilaksanakan sebagai bahan laporan kegiatan dan rencana yang akan datang;') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('menyusun laporan pelaksanaan tugas sesuai dengan kegiatan yang telah dilaksanakan sebagai akuntabilitas kinerja badan; dan') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('melaksanakan tugas kedinasan lain yang diberikan Kepala Badan baik lisan maupun tertulis.') }}
                    </li>
                </ol>
                <p class="text-center fw-bold mb-3">
                    {{ translate('BAB XXVIII') }}
                </p>
                <p class="text-center fw-bold mb-5">
                    {{ translate('KELOMPOK JABATAN FUNGSIONAL') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 968') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-5">
                    {{ translate('Pada masing-masing unit kerja di lingkungan Setda, Sekretariat DPRD, Inspektorat Daerah, Dinas dan Badan dapat dibentuk sejumlah kelompok jabatan fungsional sesuai dengan kebutuhan dan berdasarkan ketentuan peraturan perundang-undangan.') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 969') }}
                </p>
                <p class="text-justify fs-8 fw-light lh-sm mb-5">
                    {{ translate('Kelompok Jabatan Fungsional mempunyai tugas memberikan pelayanan fungsional yang berdasarkan pada keahlian dan keterampilan tertentu.') }}
                </p>
                <p class="text-center fw-bold mb-3">
                    {{ translate('Pasal 970') }}
                </p>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Kelompok Jabatan Fungsional terdiri atas sejumlah tenaga fungsional yang terbagi dalam kelompok jabatan fungsional sesuai dengan bidang keahlian dan keterampilan tertentu.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-5">
                        {{ translate('Jenis, jenjang dan jumlah jabatan fungsional ditetapkan berdasarkan kebutuhan, kemampuan, dan beban kerja sesuai dengan ketentuan peraturan perundangundangan.') }}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection
