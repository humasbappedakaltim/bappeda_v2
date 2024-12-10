<header class="main-header position-fixed d-flex align-items-center justify-content-between px-xl-5 px-3 mx-0 w-100" id="main-header">
    <div class="container d-flex justify-content-between px-0">
        <nav class="navbar navbar-expand-xl py-0 d-flex justify-content-between w-100">
            <div class="logo d-flex align-items-center">
                <a class="navbar-brand py-0" href="#"><img src="{{ asset('assets/images/logo-bappeda.png')}}"alt=""></a>
            </div>
            <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none"  data-bs-toggle="offcanvas" href="#offcanvas-navbar" aria-controls="offcanvasExample">
                <i class="ti ti-menu-2 text-warning text-white"></i>
            </a>
            <div class="collapse navbar-collapse float-end px-0 mx-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item align-items-center mx-1 {{ Route::is('landing.index') ? 'active' : '' }}">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-capitalize" aria-current="page" href="{{ route('landing.index') }}">beranda</a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="profil-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#profil-dropdown"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            profil
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="unit-kerja-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#unit-kerja-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            unit kerja
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="agenda-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#agenda-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            agenda
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="berita-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#berita-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            postingan
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1 {{ Route::is('data-center.index') ? 'active' : '' }}" id="data-center-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-capitalize" href="{{ route('data-center.index') }}">
                            Data center
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-capitalize" href="#">
                            ruang publik
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="survei-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#survei-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample">
                            survei
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-uppercase" href="{{ route('ppid.index') }}">ppid</a>
                    </li>
                    <li class="nav-item align-items-center mx-1">
                        <img src="{{ asset('assets/images/indonesia-round-icon.png')}}" alt="" class="nav-link px-2 py-2" style="width: 35px;">
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="offcanvas offcanvas-start m-0 p-0 custom-offcanvas align-items-center" tabindex="-1" id="offcanvas-navbar" aria-labelledby="offcanvasExampleLabel">
        <div class="container m-0 p-0">
            <div class="offcanvas-header m-0 p-0 custom-offcanvas-header">
                <div class="logo d-flex align-items-center justify-content-center">
                    <a class="navbar-brand py-0" href="#"><img src="{{ asset('assets/images/logo-bappeda.png')}}" alt=""></a>
                </div>
                <button type="button" class="custom-btn-close text-white d-inline-block d-lg-block d-xl-none d-xxl-none nav-toggler text-decoration-none m-0 p-0" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ti ti-x text-white m-0 p-0"></i>
                </button>
            </div>
            <div class="offcanvas-body px-2" id="accordionExample">
                <ul class="navbar-nav accordion">
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingProfil">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProfil" aria-expanded="false" aria-controls="collapseProfil">
                                Profil
                            </button>
                        </h2>
                        <div id="collapseProfil" class="accordion-collapse collapse " aria-labelledby="headingProfil" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="profil-bappeda.html" class="text-decoration-none text-white">Profil Bappeda</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="profil-tupoksi-bappeda.html" class="text-decoration-none text-white">Tupoksi Bappeda</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="profil-struktur-organisasi.html" class="text-decoration-none text-white">Struktur Organisasi</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="profil-asn-bappeda.html" class="text-decoration-none text-white">ASN Bappeda Prov. Kaltim</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingUnitKerja">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUnitKerja" aria-expanded="false" aria-controls="collapseUnitKerja">
                                Unit Kerja
                            </button>
                        </h2>
                        <div id="collapseUnitKerja" class="accordion-collapse collapse" aria-labelledby="headingUnitKerja" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="uk-kepala-bappeda.html" class="text-decoration-none text-white">Kepala BAPPEDA</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="uk-sekretariat.html" class="text-decoration-none text-white">Sekretariat</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="uk-p2epd.html" class="text-decoration-none text-white">Bidang perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="uk-ppm.html" class="text-decoration-none text-white">Bidang Pemerintahan dan Pembangunan Manusia</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="uk-psda.html" class="text-decoration-none text-white">Bidang Perekonomian dan Sumber Daya Alam</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="uk-infraswil.html" class="text-decoration-none text-white">Bidang Infrastruktur dan Kewilayahan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingAgenda">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAgenda" aria-expanded="false" aria-controls="collapseAgenda">
                                Agenda
                            </button>
                        </h2>
                        <div id="collapseAgenda" class="accordion-collapse collapse" aria-labelledby="headingAgenda" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="agenda-umum.html" class="text-decoration-none text-white">Umum</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="agenda-p2epd.html" class="text-decoration-none text-white">Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="agenda-ppm.html" class="text-decoration-none text-white">Bidang Pemerintahan dan Pembangunan Manusia</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="agenda-psda.html" class="text-decoration-none text-white">Bidang Perekonomian dan Sumber Daya Alam</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="agenda-infraswil.html" class="text-decoration-none text-white">Bidang Infrastruktur dan Kewilayahan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingPostingan">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePostingan" aria-expanded="false" aria-controls="collapsePostingan">
                                Postingan
                            </button>
                        </h2>
                        <div id="collapsePostingan" class="accordion-collapse collapse" aria-labelledby="headingPostingan" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="postingan-artikel.html" class="text-decoration-none text-white">Artikel</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="postingan-berita.html" class="text-decoration-none text-white">Berita Bappeda</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="postingan-informasi.html" class="text-decoration-none text-white">Informasi</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="postingan-kpk.html" class="text-decoration-none text-white">Kinerja Pembangunan Kaltim</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="postingan-berita-nasional.html" class="text-decoration-none text-white">Berita Nasional</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="postingan-social-media.html" class="text-decoration-none text-white">Social Media</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingDataCenter">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataCenter" aria-expanded="false" aria-controls="collapseDataCenter">
                                Data Center
                            </button>
                        </h2>
                        <div id="collapseDataCenter" class="accordion-collapse collapse" aria-labelledby="headingDataCenter" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="dc-perencanaan.html" class="text-decoration-none text-white">Perencanaan</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="dc-pengendalian-evaluasi.html" class="text-decoration-none text-white">Pengendalian dan Evaluasi</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="dc-kumpulan-paparan.html" class="text-decoration-none text-white">Kump ulan Paparan</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="dc-data-lainnya.html" class="text-decoration-none text-white">Data Lainnya</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="dc-peta.html" class="text-decoration-none text-white">Peta</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="dc-penghargaan.html" class="text-decoration-none text-white">Penghargaan</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="data-center.html">Data Center</a>
                    </li>
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="ruang-publik.html">Ruang Publik</a>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingSurvei">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSurvei" aria-expanded="false" aria-controls="collapseSurvei">
                                Survei
                            </button>
                        </h2>
                        <div id="collapseSurvei" class="accordion-collapse collapse" aria-labelledby="headingSurvei" data-bs-parent="#accordionExample">
                            <ul class="accordion-body">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="survei-skm.html" class="nav-item-list text-decoration-none text-white">Survei Kepuasan Masyarakat (SKM)</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="ppid.html">PPID</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
 <!-- PROFIL DROPDOWN -->
 <div class="collapse position-fixed w-100 custom-dropdown" id="profil-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">profil</h3>
            <div class="row mt-1">
                <a href="{{ route('landing.profile') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Profil Bappeda</p>
                    <p class="fs-9 py-0 my-0">Sejarah Singkat Bappeda Kaltim: Dari 1974 hingga Pembaruan 2020</p>
                </a>
                <a href="{{ route('landing.tupoksi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Tupoksi Bappeda</p>
                    <p class="fs-9 py-0 my-0">Temukan peran dan tanggung jawab Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur sesuai dengan Peraturan Gubernur Nomor 43 Tahun 2023</p>
                </a>
                <a href="{{ route('landing.struktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Struktur Organisasi</p>
                    <p class="fs-9 py-0 my-0">Lihat struktur organisasi Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur untuk memahami pembagian tugas dan fungsi setiap unit</p>
                </a>
                <a href="{{ route('landing.asn') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">ASN Bappeda Prov. Kaltim</p>
                    <p class="fs-9 py-0 my-0">Dapatkan informasi lengkap tentang ASN Bappeda Provinsi Kalimantan Timur</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- PROFIL DROPDOWN END -->
<!-- UNIT KERJA DROPDOWN -->
<div class="collapse position-fixed w-100 custom-dropdown" id="unit-kerja-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">unit kerja</h3>
            <div class="row mt-1">
                <a href="{{ route('landing.kepala_bappeda') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Kepala Bappeda</p>
                    <p class="fs-9 py-0 my-0">Kenali sosok Kepala Bappeda Provinsi Kalimantan Timur dan visinya</p>
                </a>
                <a href="{{ route('landing.sekretaris') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Sekretariat</p>
                    <p class="fs-9 py-0 my-0">Ketahui lebih lanjut bagaimana Sekretariat Bappeda Provinsi Kaltim menjalankan peran pentingnya dalam koordinasi administrasi, keuangan, dan operasional untuk mendukung kelancaran tugas seluruh unit</p>
                </a>
                <a href="{{ route('landing.bidang_perencanaan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah</p>
                    <p class="fs-9 py-0 my-0">Lihat struktur organisasi Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur untuk memahami pembagian tugas dan fungsi setiap unit</p>
                </a>
                <a href="{{ route('landing.bidang_pemerintahan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang Pemerintahan dan Pembangunan Manusia</p>
                    <p class="fs-9 py-0 my-0">Temukan peran Bidang Pemerintahan dan Pembangunan Manusia dalam merumuskan kebijakan dan mengembangkan sumber daya manusia serta kesejahteraan rakyat di Bappeda Kaltim</p>
                </a>
                <a href="{{ route('landing.bidang_perekonomian') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang Perekonomian dan Sumber Daya Alam</p>
                    <p class="fs-9 py-0 my-0">Simak bagaimana Bidang Perekonomian dan Sumber Daya Alam memainkan peran penting dalam pengembangan kebijakan dan program untuk memaksimalkan potensi sumber daya</p>
                </a>
                <a href="{{ route('landing.bidang_infrastruktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang Infrastruktur dan Kewilayahan</p>
                    <p class="fs-9 py-0 my-0">Dapatkan wawasan tentang koordinasi antar sub bidang dalam penyusunan rencana dan program pembangunan infrastruktur yang efektif dan efisien</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- UNIT KERJA DROPDOWN END -->
<!-- AGENDA DROPDOWN  -->
<div class="collapse position-fixed w-100 custom-dropdown" id="agenda-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">agenda</h3>
            <div class="row mt-1">
                <a href="{{ route('agenda.umum') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Umum</p>
                    <p class="fs-9 py-0 my-0">Telusuri agenda terkini yang mendukung pelaksanaan berbagai program strategis untuk pembangunan dan pelayanan publik.</p>
                </a>
                <a href="{{ route('agenda.perencanaan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah</p>
                    <p class="fs-9 py-0 my-0">Telusuri agenda prioritas Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah yang dirancang untuk meningkatkan efektivitas perencanaan pembangunan daerah.</p>
                </a>
                <a href="{{ route('agenda.pemerintahan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang Pemerintahan dan Pembangunan Manusia</p>
                    <p class="fs-9 py-0 my-0">Telusuri jadwal agenda Bidang Pemerintahan dan Pembangunan Manusia yang berfokus pada pengawasan dan evaluasi berkelanjutan terhadap pelaksanaan pembangunan.</p>
                </a>
                <a href="{{ route('agenda.perekonomian') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang Perekonomian dan Sumber Daya Alam</p>
                    <p class="fs-9 py-0 my-0">Telusuri informasi terkini mengenai agenda Bidang Perekonomian dan Sumber Daya Alam yang berfokus pada pemanfaatan sumber daya alam untuk kesejahteraan bersama.</p>
                </a>
                <a href="{{ route('agenda.infrastruktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Bidang Infrastruktur dan Kewilayahan</p>
                    <p class="fs-9 py-0 my-0">Telusuri agenda strategis Bidang Infrastruktur dan Kewilayahan yang mendukung pengembangan infrastruktur demi memperkuat konektivitas wilayah.</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- AGENDA DROPDOWN END -->
<!-- POSTINGAN DROPDOWN-->
<div class="collapse position-fixed w-100 custom-dropdown" id="berita-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">Postingan</h3>
            <div class="row mt-1">
                <a href="{{ route('artikel.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Artikel</p>
                    <p class="fs-9 py-0 my-0">Temukan informasi penting tentang inovasi pembangunan yang mendukung kemajuan daerah.</p>
                </a>
                <a href="{{ route('berita.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Berita Bappeda</p>
                    <p class="fs-9 py-0 my-0">Ulasan lengkap tentang program unggulan Bappeda yang berkontribusi pada kemajuan wilayah.</p>
                </a>
                <a href="{{ route('informasi.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Informasi</p>
                    <p class="fs-9 py-0 my-0">Dapatkan informasi terbaru tentang program pembangunan daerah yang inovatif dan berdampak</p>
                </a>
                <a href="{{ route('pembangunan_kaltim.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Kinerja Pembangunan Kaltim</p>
                    <p class="fs-9 py-0 my-0">Ketahui perkembangan signifikan dalam kinerja pembangunan Kaltim yang mendorong kemajuan ekonomi daerah</p>
                </a>
                <a href="{{ route('berita_nasional.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Berita Nasional</p>
                    <p class="fs-9 py-0 my-0">Temukan berita terkini tentang perkembangan yang menyentuh berbagai aspek kehidupan bangsa.</p>
                </a>
                <a href="postingan-social-media.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Social Media</p>
                    <p class="fs-9 py-0 my-0">Jangan lewatkan informasi penting yang sedang menjadi sorotan di media sosial. Klik untuk selengkapnya.</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- POSTINGAN DROPDOWN END -->
<!-- DATA CENTER DROPDOWN -->
<!-- <div class="collapse position-fixed w-100 custom-dropdown" id="data-center-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">data center</h3>
            <div class="row mt-1">
                <a href="dc-perencanaan.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Perencanaan</p>
                    <p class="fs-9 py-0 my-0">Jelajahi data perencanaan Bappeda untuk mendukung pengembangan daerah yang lebih baik</p>
                </a>
                <a href="dc-pengendalian-evaluasi.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Pengendalian dan Evaluasi</p>
                    <p class="fs-9 py-0 my-0">Akses informasi terkini tentang pengendalian dan evaluasi untuk mendukung keputusan strategis</p>
                </a>
                <a href="dc-kumpulan-paparan.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Kumpulan Paparan</p>
                    <p class="fs-9 py-0 my-0">Temukan kumpulan data dan paparan untuk memperdalam pemahaman Anda tentang isu-isu terkini</p>
                </a>
                <a href="dc-data-lainnya.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Data Lainnya</p>
                    <p class="fs-9 py-0 my-0">Dapatkan insight mendalam dari kumpulan data Bappeda yang bermanfaat dan informatif</p>
                </a>
                <a href="dc-peta.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Peta</p>
                    <p class="fs-9 py-0 my-0">Akses peta yang detail untuk membantu Anda dalam perencanaan dan evaluasi program</p>
                </a>
                <a href="dc-penghargaan.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Penghargaan</p>
                    <p class="fs-9 py-0 my-0">Lihat daftar penghargaan Bappeda untuk merayakan keberhasilan dalam pengembangan wilayah Kaltim</p>
                </a>
            </div>
        </div>
    </div>
</div> -->
<!-- DATA CENTER DROPDOWN END -->
<!-- SURVEI DROPDOWN -->
<div class="collapse position-fixed w-100 custom-dropdown" id="survei-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">survei</h3>
            <div class="row mt-1">
                <a href="survei-skm.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">Survei Kepuasan Masyarakat (SKM)</p>
                    <p class="fs-9 py-0 my-0">Ikuti survei kami untuk memberikan masukan berharga tentang kepuasan masyarakat terhadap layanan</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- SURVEI DROPDOWN END -->
<!------------------------------>
<!-------- Header End  --------->
<!------------------------------>

