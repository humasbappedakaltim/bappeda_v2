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
                <p class="breadcrumb-active text-white fw-500 m-0 p-0">{{ translate('Unit Kerja - Sekretariat') }}</p>
            </div>
            <div class="title-content">
                <h4 class="title fw-bold mb-3">
                    {{ translate('Sekretariat') }}
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
                        {{ translate('Sekretaris') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan kegiatan pelayanan teknis dan administratif kepada seluruh unit yang meliputi urusan perencanaan, pelaporan, umum, kepegawaian, keuangan dan aset sesuai prosedur dan ketentuan yang berlaku dalam rangka mendukung kelancaran pelaksanaan tugas dan tertib administrasi dilingkungan Badan Perencanaan Pembangunan Daerah.') }}</p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, perencanaan program dan pelaporan, urusan umum dan kehumasan, kepegawaian, ketatalaksanaan, perlengkapan, administrasi keuangan, pengelolaan aset, dan pengoordinasian pelaksanaan Musyawarah Rencana Pembangunan.') }}
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Sekretariat berdasarkan program kerja Badan Perencanaan Pembangunan Daerah serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mendistribusikan tugas kepada bawahan di lingkungan sekretariat sesuai dengan tugas pokok dan tanggung jawab yang ditetapkan agar tugas yang diberikan dapat berjalan efektif dan efisien;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Memberi petunjuk pelaksanaan tugas kepada bawahan di lingkungan sekretariat sesuai dengan peraturan dan prosedur yang berlaku agar tidak terjadi kesalahan dalam pelaksanaan tugas;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyelia pelaksanaan tugas bawahan di lingkungan sekretariat secara berkala sesuai dengan peraturan dan prosedur yang berlaku untuk mencapai target kinerja yang diharapkan;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep pengelolaan program Badan Perencanaan Pembangunan Daerah dengan cara menganalisis usulan kegiatan bidang, mengusulkan program sesuai prioritas serta mereview rencana anggaran sesuai dengan prosedur dan ketentuan yang berlaku untuk mendukung kelancaran pelaksanaan program;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengendalikan urusan perencanaan dan pelaporan sesuai prosedur dan ketentuan yang berlaku demi tertibnya administrasi dan bahan pertanggung-jawaban;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengendalikan urusan umum yang meliputi persuratan, kepegawaian serta kehumasan sesuai prosedur dan ketentuan yang berlaku untuk mendukung kelancaran pelakasanaan tugas di lingkungan Badan Perencanaan Pembangunan;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengendalikan administrasi keuangan dan aset yang meliputi kegiatan pengelolaan anggaran, perbendaharaan, pembukuan dan verifikasi serta laporan pertanggung-jawaban keuangan dan aset sesuai dengan prosedur dan ketentuan yang berlaku untuk menjamin ketertiban penggunaan anggaran;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan tugas bawahan di lingkungan sekretariat dengan cara membandingkan rencana operasional dengan tugas-tugas yang telah dilaksanakan sebagai bahan laporan kegiatan dan perbaikan kinerja di masa yang akan datang;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun laporan pelaksanaan tugas sekretariat sesuai dengan tugas yang telah dilaksanakan secara berkala sebagai bentuk akuntabilitas kinerja;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan tugas kedinasan lain yang diberikan pimpinan baik lisan maupun tertulis.') }}
                        </li>
                    </ol>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Fungsi :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">
                            {{ translate('Penyiapan bahan koordinasi penyusunan rencana program, monitoring, evaluasi dan pelaporan;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">
                            {{ translate('Penyiapan bahan koordinasi administrasi umum dan kepegawaian, ketatalaksanan, perlengkapan dan pemeliharaan, hukum dan kehumasan serta pengaduan masyarakat;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">
                            {{ translate('Penyiapan bahan koordinasi penyusunan anggaran, perbendaharaan, verifikasi dan akuntansi keuangan serta pengelolaan barang milik negara/daerah; dan') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">
                            {{ translate('Pelaksanaan fungsi lain yang diberikan Kepala Bappeda yang berkaitan dengan tugasnya.') }}
                        </li>
                    </ol>
                    <p class="title text-uppercase fs-4 fw-bold">
                        {{ translate('Kepala Sub Bagian Perencanaan Program') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">
                        {{ translate('Memimpin dan melaksanakan kegiatan penyusunan konsep dan pelaksanaan kegiatan teknis perencanaan dan pelaporan sesuai prosedur dan ketentuan yang berlaku dalam rangka mendukung kelancaran tugas Sekretariat Badan Perencanaan dan Pembangunan Daerah.') }}
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">
                        {{ translate('Melakukan penyiapan bahan, pengoordinasian, penyusunan rencana dan program, monitoring, evaluasi serta pelaporan kegiatan.') }}
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan penyusunan rencana program Sub Bagian Perencanaan Program berdasarkan peraturan yang berlaku sebagai bahan acuan;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan penyusunan pelaksanaan kegiatan berdasarkan program agar kegiatan dapat terlaksana tepat waktu;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mendistribusikan tugas kepada pegawai sesuai dengan jabatannya agar semua pekerjaan dapat diselesaikan dengan baik;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengawasi dan mengendalikan kegiatan Sub Bagian Perencanaan Program berdasarkan peraturan untuk optimalisasi tugas;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan penyusunan RKA, DPA, DIPA, LAKIP sesuai peraturan yang berlaku sebagai acuan kegiatan;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan koordinasi penetapan standar pelayanan minimal sesuai peraturan perundang-undangan yang berlaku untuk acuan dalam melaksanakan tugas;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melakukan pembinaan dan penilaian pegawai sesuai peraturan dengan cara memberikan pengarahan sesuai peraturan dan pedoman yang ada dalam rangka untuk meningkatkan kinerja pegawai;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan koordinasi kegiatan perencanaan program dengan instansi terkait berdasarkan peraturan perundang-undangan yang berlaku untuk optimalisasi tugas;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi dan menyiapkan bahan laporan realisasi anggaran secara periodik berdasarkan rencana dan realisasinya untuk mengetahui tingkat pencapaian program dan permasalahan yang dihadapi serta upaya penyelesaian masalahnya;') }}</li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan tugas kedinasan lain yang diberikan pimpinan baik lisan maupun tertulis.') }}</li>
                    </ol>
                    <p class="title text-uppercase fs-4 fw-bold">
                        {{ translate('Kepala Sub Bagian Keuangan') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan kegiatan penatausahaan keuangan badan dalam lingkup penyelenggaraan urusan perbendaharaan, akuntansi, verifikasi, tindak lanjut LHP dan perlengkapan serta menyusun konsep program dan kegiatan termasuk mengendalikan pemanfaatan dan pengadministrasian aset daerah sesuai prosedur dan ketentuan yang berlaku dalam rangka tertib administrasi keuangan dan mendukung kelancaran tugas Sekretariat Badan Perencanaan dan Pembangunan Daerah.') }}
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melakukan pengumpulan dan penyiapan bahan penyusunan anggaran, perbendaharaan, verifikasi dan akuntansi keuangan serta pengelolaan aset.') }}
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                    <ol class="mb-5">
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merencanakan kegiatan Sub Bagian Keuangan dan Aset dan Aset berdasarkan rencana operasional Sekretariat bappeda sebagai pedoman pelaksanaan tugas;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan pengelolaan administrasi keuangan sesuai pedoman dan peraturan perundang-undangan yang berlaku agar pelaksanaan program kerja dapat berjalan secara efisien dan efektif;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep pelaporan keuangan yang meliputi laporan keuangan, neraca serta catatan atas laporan keuangan sesuai dengan peraturan perundang-undangan sebagai pertanggungjawaban pelaksanaan tugas;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Merumuskan petunjuk teknis pengelolaan aset sesuai prosedur dan ketentuan yang berlaku sebagai acuan dalam pelaksanaan dan pengelolaan anggaran bagi satuan kerja perangkat daerah;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun konsep bahan koordinasi kegiatan internal lintas bidang dengan instansi terkait, pembinaan rencana program/kegiatan, pelaporan satuan kerja, tindak lanjut Laporan Hasil Pemeriksaan (LHP) sesuai dengan pedoman dan peraturan perundang-undangan yang berlaku sebagai bahan pertanggung-jawaban pelaksanaan tugas;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan kegiatan di lingkungan Sub Bagian Keuangan dengan cara mengidentifikasi hambatan yang ada dalam rangka perbaikan kinerja di masa mendatang;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaporkan pelaksanaan kinerja di lingkungan Sub Bagian Keuangan dan Aset sesuai dengan prosedur dan peraturan yang berlaku sebagai akuntabilitas kinerja dan rencana kegiatan mendatang;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melaksanakan tugas kedinasan lain yang diberikan pimpinan baik lisan maupun tertulis;') }}
                        </li>
                    </ol>
                    <p class="title text-uppercase fs-4 fw-bold">
                        {{ translate('Kepala Sub Bagian Umum') }}
                    </p>
                    <hr class="hr-title-black flex-grow-1 mb-5">
                    <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan kegiatan administrasi umum dan kepegawaian, ketatalaksanaan, perlengkapan dan pemeliharaan, hukum dan kehumasan serta pengaduan masyarakat sesuai prosedur dan ketentuan yang berlaku dalam rangka mendukung kelancaran tugas Kesekretariatan.') }}
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                    <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melakukan pengumpulan dan penyiapan bahan administrasi umum dankepegawaian, ketatalaksanaan, perlengkapan dan pemeliharaan, hukum dan kehumasan serta pengaduan masyarakat.') }}
                    </p>
                    <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan penyusunan rencana program Sub Bagian Umum berdasarkan peraturan yang berlaku sebagai bahan acuan;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan penyusunan pelaksanaan kegiatan berdasarkan program agar kegiatan dapat terlaksana tepat waktu;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mendistribusikan tugas kepada pegawai sesuai dengan jabatannya agar semua pekerjaan dapat diselesaikan dengan baik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengawasi dan mengendalikan kegiatan Sub Bagian Umum berdasarkan peraturan untuk optimalisasi tugas;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan kegiatan administrasi umum, kepegawaian, perlengkapan, pemeliharaan, hukum dan kehumasan serta pengaduan masyarakat sesuai dengan peraturan agar tertib administrasi;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengawasi dan mengarahkan pelaksanaan pengadaan, penerimaan, penyimpanan dan pengeluaran barang berdasarkan peraturan yang berlaku agar tertib administrasi;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Melakukan pembinaan dan penilaian pegawai sesuai peraturan dengan cara memberikan pengarahan sesuai peraturan dan pedoman yang ada dalam rangka untuk meningkatkan kinerja pegawai;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyiapkan bahan koordinasi kegiatan administrasi umum, kepegawaian, perlengkapan, pemeliharaan, hukum dan kehumasan dengan instansi terkait berdasarkan peraturan untuk optimalisasi tugas;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun dan membuat laporan inventaris barang/asset secara periodik berdasarkan peraturan perundang-undangan yang berlaku untuk tertib administrasi;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Mengevaluasi pelaksanaan tugas berdasarkan rencana dan realisasinya untuk mengetahui tingkat pencapaian program dan permasalahan yang dihadapi serta upaya penyelesaian masalahnya;') }}
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
