@extends('layouts.ppid')

@section('content')
 <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center m-0 p-0">
        <div class="container custom-container m-0 p-0">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>
                <i class="bi bi-chevron-right text-white m-0 p-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">{{ translate('profil ppid bappeda') }}</p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    {{ translate('profil ppid bappeda') }}
                </h4>
                <p class="fs-8 text-white lh-sm">{{ translate('Profil PPID Bappeda Provinsi Kalimantan Timur') }}</p>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!----- End Breadcrumb Section ----->
    <!---------------------------------->

    <!---------------------------------->
    <!--------- Main Section ----------->
    <!---------------------------------->
    <section class="over-top-section profil-ppid position-relative d-flex justify-content-center my-0">
        <div class="container over-top-container px-0">
            <div class="row mx-0">
                <div class="col-12">
                    <div class="title-content title-section d-flex align-items-center justify-content-between mb-4 mb-md-5">
                <h4 class="text-title text-uppercase my-0 py-0">profil ppid</h4>
                <hr class="hr-title-black flex-grow-1 ms-3">
            </div>
                    <div class="img-container mb-3">
                        <img src="{{ asset('assets/images/ppid/struktur-ppid.jpg') }}" alt="">
                    </div>
                    <p class="fw-bold mb-3">
                        {{ translate('profil ppid') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Transisi demokrasi di Indonesia yang terjadi sejak tahun 1998, telah mengubah paradigma penyelenggaraan negara yang semula tertutup menjadi lebih terbuka serta memberikan ruang yang lebih luas bagi partisipasi publik. Salah satu produk regulasi dari paradigma baru tersebut adalah Undang-undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik (UU KIP). UU KIP secara tegas memberikan kewajiban kepada badan publik untuk membuka informasi yang berkaitan dengan institusinya, kebijakan yang dihasilkan, serta kegiatan-kegiatan yang dilakukan, termasuk kondisi keuangan dan penggunaan anggaran. Dengan kata lain, publik memiliki hak atas informasi dari badan publik.') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Undang-undang Republik Indonesia No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik (UU KIP).') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Seluruh kegiatan penyusunan, pelaksanaan, monitoring dan evaluasi rencana strategis Open Government Indonesia (OGI) berada di bawah koordinasi Unit Kerja Presiden Bidang Pengawasan dan Pengendalian Pembangunan (UKP4). Salah satu rencana aksi yang telah disusun di tingkat OGI adalah mengoptimalisasikan implementasi UU KIP yaitu mendorong percepatan pembentukan operasional layanan informasi lingkup Pemda melalui pembentukan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Pemerintah Daerah (Pemda) dan perangkatnya.') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Implementasi rencana aksi terkait PPID ini berada di bawah tanggung jawab Kementerian Negeri (Kemendagri). Dalam konteks pemerintahan daerah, PPID adalah pejabat yang ditetapkan melalui SK Gubernur/Bupati/ Walikota, yang bertanggungjawab dalam bidang penyimpanan, pendokumentasian, penyediaan dan pelayanan informasi yang bertanggungjawab langsung kepada Sekretaris Daerah selaku atasan PPID. Untuk memberikan panduan kepada Pemerintah Daerah Provinsi dan Kabupaten/Kota dalam membentuk dan mengoperasionalkan PPID Pemda perlu disusun buku Panduan Pembentukan dan Operasional PPID Pemerintah Provinsi dan Kabupaten/Kota.') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Pejabat Pengelola Informasi dan Dokumentasi dibentuk berdasarkan amanat Undang-undang Republik Indonesia No. 14 Tahun 2008 tentang Keterbukan Informasi Publik. Pejabat Pengelola Informasi dan Dokumentasi yang selanjutnya disingkat PPID adalah pejabat yang bertanggung jawab dalam pengumpulan,pendokumentasian, penyimpanan, pemeliharaan, penyediaan, distribusi, dan pelayanan informasi dan dokumentasi di Lingkungan Pemerintahan Provinsi, yang terdiri dari PPID Utama dan PPID Pembantu.') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('PPID Utama Pemerintah Provinsi Kalimantan Timur sudah terbentuk sejak 8 September 2011 ditandai dengan terbitnya Surat Keputusan Gubernur Kaltim Nomor 491/K.555/ 2011 dan kemudian diperbaharui dengan Surat Keputusan Gubernur Nomor 0480.15/K.68.2018 tentang Pembentukkan Pejabat Pengelola Pelayanan Informasi dan Dokumentasi (PLID) Pemerintah Provinsi Kalimantan Timur.') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('PLID di Lingkungan Pemerintah Provinsi Kalimantan Timur terdiri atas Gubernur sebagai Pembina, Sekretaris Daerah sebagai Atasan PPID dan PPID Utama serta Tim Pertimbangan dimana anggotanya merupakan Pejabat Eselon II dilingkup Pemerintah Provinsi Kalimantan Timur. PPID Utama diketuai oleh Kepala Dinas Komunikasi dan Informatika Provinsi Kalimantan Timur. Sedangkan untuk PPID pembantu Pemerintah Provinsi Kalimantan Timur ditetapkan melalui Surat Keputusan Kepala Badan/Dinas (OPD) di lingkungan Pemprov Kaltim') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Hak memperoleh informasi merupakan Hak Asasi Manusia (human rights) yang tentu menjadi kewajiban aparatur pemerintah memenuhinya. Tujuan UU KIP ini untuk mengajak masyarakat untuk terlibat aktif dalam pembangunan, khususnya dalam hal pengawasan, sehingga pembangunan yang dilakukan pemerintah semakin berkualitas. Selain itu pelaksanaan UU KIP merupakan salah satu upaya mewujudkan pemerintahan yang bersifat terbuka (open government) dan transparansi tata kelola pemerintahan menuju pemerintahan yang bersih dan berwibawa (clean and good governance).') }}
                    </p>
                    <p class="fw-bold mb-3">
                        {{ translate('A. Pejabat Pengelola Informasi dan Dokumentasi (PPID)') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Berdasarkan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, untuk mewujudkan pelayanan cepat, tepat, dan sederhana, setiap Badan Publik membentuk Pejabat Pengelola Informasi dan Dokumentasi. Selanjutnya dalam Peraturan Pemerintah Nomor 61 Tahun 2010 tentang Pelaksanaan Undang-Undang Nomor 14 tahun 2008 tentang keterbukaan Informasi Publik, PPID harus sudah ditunjuk paling lama 1 (satu) tahun sejak Peraturan Pemerintah ini diundangkan.') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Tugas PPID :') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('menyusun dan melaksanakan kebijakan informasi dan menyusun laporan pelaksanaan kebijakan informasi dan dokumentasi;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('mengkoordinasikan dan mengkonsolidasikan pengumpulan bahan informasi dan dokumentasi dari PPID Pembantu;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('menyimpan, mendokumentasikan, menyediakan dan memberi pelayanan informasi kepada publik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('melakukan verifikasi bahan informasi publik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('melakukan uji konsekuensi atas informasi yang dikecualikan;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('melakukan pemutakhiran informasi dan dokumentasi;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('menyediakan informasi dan dokumentasi untuk diakses oleh masyarakat;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('melakukan pembinaan, pengawasan, evaluasi dan monitoring atas pelaksanaan kebijakan informasi dan dokumentasi yang dilakukan PPID Pembantu;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('melaksanakan rapat koordinasi dan rapat kerja secara berkala dan atau sesuai kebutuhan;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('menugaskan PPID Pembantu dan/atau Pejabat Fungsional untuk mengumpulkan, mengelola dan memelihara informasi dan dokumentasi;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('membentuk Tim Fasilitasi penanganan sengketa informasi yang ditetapkan dengan SK Gubernur.') }}
                        </li>
                    </ol>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Tugas PPID :') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('membantu PPID melaksanakan tanggung jawab, tugas dan kewenangannya;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('menyampaikan informasi dan dokumentasi kepada PPID Utama dilakukan paling sedikit 6 (enam) bulan sekali atau sesuai kebutuhan;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('melaksanakan kebijakan teknis informasi dan dokumentasi sesuai dengan tugas pokok dan fungsinya;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('menjamin ketersediaan dan akselerasi layanan informasi dan dokumentasi bagi pemohon informasi secara cepat, tepat, berkualitas dengan mengedepankan prinsip-prinsip pelayanan prima;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('mengumpulkan, mengolah, dan mengompilasi bahan dan data lingkup komponen di lingkungan Pemerintahan Provinsi Kalimantan Timur menjadi bahan informasi publik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('menyampaikan laporan pelaksanaan kebijakan teknis dan pelayanan informasi dan dokumentasi kepada PPID Utama secara berkala dan sesuai kebutuhan.') }}
                        </li>
                    </ol>
                    <p class="fw-bold mb-3">
                        {{ translate('B. Standar Operasional Prosedur (SOP) PPID') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('SOP PPID merupakan salah kelengkapan yang diperlukan untuk mempermudah PPID dalam mengelola dan pemberian layanan informasi kepada masyarakat. Penyusunan satu SOP PPID Pemda berdasarkan pada:') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('PP 61 Tahun 2010 Tentang Pelaksanaan Undang-undang Nomor 14 tahun 2008 Tentang Keterbukaan Informasi Publik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Peraturan Menteri Dalam Negeri Nomor 35 Tahun 2010 Tentang Pedoman Pengelolaan Pelayanan Informasi Dan Dokumentasi di Lingkungan Kemendagri dan Pemerintahan Daerah;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Peraturan Menteri Dalam Negeri Nomor 52 Tahun 2011 Tentang Standar Operasional Prosedur di Lingkungan Pemerintah Provinsi Dan Kabupaten/Kota;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Peraturan Komisi Informasi Nomor 1 Tahun 2010 Tentang Standar Layanan Informasi Publik.') }}
                        </li>
                    </ol>
                    <p class="fw-bold mb-3">
                        {{ translate('C. Daftar Informasi Publik (DIP)') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Daftar Informasi Publik adalah catatan yang berisi keterangan secara sistematis tentang seluruh informasi publik yang berada di bawah penguasaan Badan Publik. Daftar Informasi Publik dapat digunakan untuk membantu penyusunan database informasi dan mengetahui informasi apa saja yang dikuasai serta keberadaan informasi tersebut di unit/satuan kerja. Daftar Informasi Publik juga memudahkan masyarakat saat mencari informasi dan menginformasikan kepada publik mengenai informasi apa saja yang berada di Badan Publik.') }}
                    </p>
                    <p class="fw-bold mb-3">
                        {{ translate('D. Ruang Pelayanan Informasi') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Ruang pelayanan informasi merupakan tempat pelayanan informasi publik dan berbagai informasi lainnya yang bertujuan untuk memfasilitasi penyampaian informasi publik. Layanan informasi tidak harus dipahami secara sempit sebagai bentuk fisik meja, tapi juga berfungsi sebagai media informasi lainnya. Dalam hal ini perlu disiapkan sarana dan prasarana pendukung dan petugas pelayanan informasinya.') }}
                    </p>
                    <p class="fw-bold mb-3">
                        {{ translate('E. Aplikasi PPID Pemda pada Website Pemerintah Daerah') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Aplikasi PPID Pemda pada Website Pemerintah Daerah merupakan sistem yang mengintegrasikan proses kerja pelayanan dengan pengelolaan informasi oleh PPID Pemda baik oleh PPID maupun PPID Pembantu dan digunakan untuk membantu PPID Pemda dalam melaksanakan tugas dan kewenangan secara efektif, efisien dan akuntabel. Sedangkan Website yang ditanamkan aplikasi PPID Pemda berfungsi untuk menyebarkan informasi dan menjembatani Pemerintah Daerah dengan masyarakat.') }}
                    </p>
                    <p class="fw-bold mb-3">
                        {{ translate('F. Laporan Pelayanan Informasi') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('UU KIP mengatur kewajiban Badan Publik untuk membuat dan mengumumkan laporan pelayanan informasinya sebagai proses evaluasi terhadap pelaksanaan kinerja PPID Pemda. Selain diumumkan kepada publik, laporan juga disampaikan kepada Atasan PPID yaitu Sekretaris Daerah kepada Kepala Daerah (Gubernur/Bupati/Walikota). Kepala Daerah akan melaporkan pelaksanaan kinerja PPID sebagai bagian di dalam Laporan Penyelenggaraan Pemerintahan Daerah (LPPD). Laporan pelaksanaan kinerja PPID di dalam LPPD tersebut, selanjutnya oleh PPID Pemda diteruskan menjadi laporan kepada PPID Kemendagri.') }}
                    </p>
                    <p class="fw-bold mb-3">
                        {{ translate('G. Pendanaan') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Pendanaan PPID diperlukan untuk mendukung pelaksanaan pengelolaan pelayanan informasi publik kepada masyarakat. Sumber pendanaan PPID sebagaimana diatur dalam Pasal 15 Permendagri No 35 Tahun 2010 tentang Pedoman Pengelolaan Pelayanan Informasi dan Dokumentasi di Lingkungan Kementerian Dalam Negeri dan Pemerintahan Daerah, adalah sebagai berikut:') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Ayat (2): Segala biaya yang diperlukan untuk pengelolaan pelayanan informasi dan dokumentasi di lingkungan Pemerintahan Provinsi dibebankan pada Anggaran Pendapatan dan Belanja Daerah Provinsi;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Ayat (3): Segala biaya yang diperlukan untuk pengelolaan pelayanan informasi dan dokumentasi di lingkungan Pemerintahan Kabupaten/Kota dibebankan pada Anggaran Pendapatan dan Belanja Daerah Kabupaten/Kota.') }}
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
