<header class="main-header position-fixed d-flex align-items-center justify-content-between px-xl-5 px-3 mx-0 w-100" id="main-header">
    <div class="container d-flex justify-content-between px-0">
        <nav class="navbar navbar-expand-xl py-0 d-flex justify-content-between w-100">
            <div class="logo d-flex align-items-center">
                <a class="navbar-brand py-0" href="{{ route('ppid.index') }}"><img src="{{ asset('assets/images/ppid/logo-ppid-bappeda.png') }}"alt=""></a>
            </div>
            <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none"  data-bs-toggle="offcanvas" href="#offcanvas-ppid-navbar" aria-controls="offcanvasExample">
                <i class="ti ti-menu-2 text-warning text-white"></i>
            </a>
            <div class="collapse navbar-collapse float-end mx-0 px-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item align-items-center mx-1">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset" href="{{ route('landing.index') }}">
                            {{ translate('Website Utama BAPPEDA') }}
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="tentang-ppid-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset" href="#tentang-ppid-dropdown"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate('Tentang PPID') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="standar-layanan-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset" href="#standar-layanan-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate('Standar Layanan') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="laporan-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset" href="#laporan-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate('Laporan') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="informasi-publik-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset" href="#informasi-publik-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample">
                            {{ translate('Informasi Publik') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1 {{ Route::is('ppid.pio') ? 'active' : '' }}">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset" href="{{ route('ppid.pio') }}">
                            {{ translate('Permohonan Informasi') }}
                        </a>
                    </li>
                    @include('layouts.language')
                </ul>
            </div>
        </nav>
    </div>
    <div class="offcanvas offcanvas-start m-0 p-0 px-2 custom-offcanvas align-items-center" tabindex="-1" id="offcanvas-ppid-navbar" aria-labelledby="offcanvasExampleLabel" >
        <div class="container m-0 p-0">
            <div class="offcanvas-header m-0 p-0 custom-offcanvas-header">
                <div class="logo d-flex align-items-center justify-content-center">
                    <a class="navbar-brand py-0" href="{{ route('ppid.index') }}"><img src="assets/images/ppid/logo-ppid-bappeda.png" alt=""></a>
                </div>
                <button type="button" class="custom-btn-close text-white d-inline-block d-lg-block d-xl-none d-xxl-none nav-toggler text-decoration-none mx-0 my-0 px-0 py-0"     data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ti ti-x text-white mx-0 my-0 px-0 py-0"></i>
                </button>
            </div>
            <div class="offcanvas-body px-2" id="accordionExample">
                <ul class="navbar-nav accordion">
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="{{ route('landing.index') }}">Website Utama BAPPEDA</a>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingTentangPpid">
                            <button class="nav-item-title accordion-button collapsed fs-6 px-0 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTentangPpid" aria-expanded="false" aria-controls="collapseTentangPpid">
                                {{ translate('Tentang PPID') }}
                            </button>
                        </h2>
                        <div id="collapseTentangPpid" class="accordion-collapse collapse mx-0 px-0" aria-labelledby="headingTentangPpid" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.profil') }}" class="text-decoration-none text-white">{{ translate('Profil') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.struktur') }}" class="text-decoration-none text-white">{{ translate('Struktur Organisasi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.tugas_fungsi') }}" class="text-decoration-none text-white">{{ translate('Tugas dan Fungsi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.visi_misi') }}" class="text-decoration-none text-white">{{ translate('Visi dan Misi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.dasar_hukum', 'Dasar Peraturan') }}" class="text-decoration-none text-white">{{ translate('Dasar Hukum') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.maklumat_pelayanan') }}" class="text-decoration-none text-white">{{ translate('Maklumat Pelayanan') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Standar Operasional Prosedur') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.tata_cara') }}" class="text-decoration-none text-white">{{ translate('Tata Cara') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingStandarLayanan">
                            <button class="nav-item-title accordion-button collapsed fs-6 px-0 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStandarLayanan" aria-expanded="false" aria-controls="collapseStandarLayanan">
                                {{ translate('Standar Layanan') }}
                            </button>
                        </h2>
                        <div id="collapseStandarLayanan" class="accordion-collapse collapse" aria-labelledby="headingStandarLayanan" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.maklumat_pelayanan') }}" class="text-decoration-none text-white">{{ translate('Maklumat Pelayanan') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'prosedur permohonan informasi') }}" class="text-decoration-none text-white">{{ translate('Prosedur Permohonan Informasi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'prosedur pengajuan keberatan') }}" class="text-decoration-none text-white">{{ translate('Prosedur Pengajuan Keberatan') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'prosedur sengketa informasi') }}" class="text-decoration-none text-white">{{ translate('Prosedur Sengketa Informasi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'jalur jalan dan biaya layanan') }}" class="text-decoration-none text-white">{{ translate('Jalur, Waktu dan Biaya Layanan') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingLaporan">
                            <button class="nav-item-title accordion-button collapsed fs-6 px-0 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
                                {{ translate('Laporan') }}
                            </button>
                        </h2>
                        <div id="collapseLaporan" class="accordion-collapse collapse" aria-labelledby="headingLaporan" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporan akses informasi publik') }}" class="text-decoration-none text-white">{{ translate('Laporan Akses Informasi Publik') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporan layanan informasi publik') }}" class="text-decoration-none text-white">{{ translate('Laporan Layanan Informasi Publik') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporan survei layanan informasi') }}" class="text-decoration-none text-white">{{ translate('Laporan Survei Layanan Informasi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporan realisasi anggaran') }}" class="text-decoration-none text-white">{{ translate('Laporan Realisasi Anggaran') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingInformasiPublik">
                            <button class="nav-item-title accordion-button collapsed fs-6 px-0 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInformasiPublik" aria-expanded="false" aria-controls="collapseInformasiPublik">
                                {{ translate('Informasi Publik') }}
                            </button>
                        </h2>
                        <div id="collapseInformasiPublik" class="accordion-collapse collapse" aria-labelledby="headingInformasiPublik" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Daftar Informasi Publik') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Info Berkala') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Info Serta Merta') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Info Tersedia Setiap Saat') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Berita BAPPEDA') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Berita Nasional') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
 <!-- TENTANG PPID DROPDOWN -->
 <div class="collapse position-fixed w-100 custom-dropdown" id="tentang-ppid-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Tentang PPID') }}</h3>
            <div class="row mt-1">
                <a href="{{ route('ppid.profil') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.profil') ? 'active' : '' }}">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Profil') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Profil PPID Kaltim: Wadah utama untuk pengelolaan dan penyebaran informasi publik.') }}</p>
                </a>
                <a href="{{ route('ppid.struktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.struktur') ? 'active' : '' }}">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Struktur Organisasi') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Lihat bagaimana struktur organisasi PPID Kaltim mendukung layanan informasi yang efisien.') }}</p>
                </a>
                <a href="{{ route('ppid.tugas_fungsi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.tugas_fungsi') ? 'active' : '' }}">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Tugas dan Fungsi') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Ketahui tugas dan fungsi utama PPID Kaltim dalam mendukung keterbukaan informasi') }}</p>
                </a>
                <a href="{{ route('ppid.visi_misi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.visi_misi') ? 'active' : '' }}">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Visi dan Misi') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Pelajari visi dan misi PPID Kaltim yang mendukung keterbukaan informasi publik.') }}</p>
                </a>
                <a href="{{ route('ppid.dasar_hukum', 'Dasar Peraturan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Dasar Hukum') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Baca lebih lanjut tentang dasar hukum yang memperkuat peran PPID di Provinsi Kaltim.') }}</p>
                </a>
                <a href="{{ route('ppid.maklumat_pelayanan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Maklumat Pelayanan') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Ketahui maklumat pelayanan PPID dalam memberikan akses informasi publik yang cepat dan transparan.') }}</p>
                </a>
                <a href="profil-asn-bappeda.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Standar Operasional Prosedur') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Klik untuk memahami standar operasional prosedur PPID dalam melaksanakan tugasnya dengan efektif.') }}</p>
                </a>
                <a href="{{ route('ppid.tata_cara') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.tata_cara') ? 'active' : '' }}">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Tata Cara') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Pahami langkah-langkah yang harus dilakukan saat mengajukan permohonan informasi ke PPID.') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- TENTANG PPID DROPDOWN END -->
<!-- STANDAR LAYANAN DROPDOWN  -->
<div class="collapse position-fixed w-100 custom-dropdown" id="standar-layanan-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Standar Layanan') }}</h3>
            <div class="row mt-1">
                <a href="{{ route('ppid.category.show', 'maklumat') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.maklumat_pelayanan') ? 'active' : '' }}">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Maklumat Pelayanan') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'prosedur permohonan informasi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.prosedur_permohonan_informasi') ? 'active' : '' }}">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Prosedur Permohonan Informasi') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'prosedur pengajuan keberatan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Prosedur Pengajuan Keberatan') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'prosedur sengketa informasi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Prosedur Sengketa Informasi') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'jalur jalan dan biaya layanan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Jalur, Waktu, dan Biaya Layanan') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- STANDAR LAYANAN DROPDOWN END -->
<!-- LAPORAN DROPDOWN-->
<div class="collapse position-fixed w-100 custom-dropdown" id="laporan-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Laporan') }}</h3>
            <div class="row mt-1">
                <a href="{{ route('ppid.category.show', 'laporan akses informasi publik') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Laporan Akses Informasi Publik') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'laporan pelayanan informasi publik') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Laporan Layanan Informasi Publik') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'laporan survei layanan informasi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Laporan Survei Layanan Informasi') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'laporan realisasi anggaran') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Laporan Realisasi Anggaran') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- LAPORAN DROPDOWN END -->
<!-- INFORMASI PUBLIK DROPDOWN-->
<div class="collapse position-fixed w-100 custom-dropdown" id="informasi-publik-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Informasi Publik') }}</h3>
            <div class="row mt-1">
                <a href="#" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Daftar Informasi Publik') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'info berkala') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Info Berkala') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'info serta merta') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Info Serta Merta') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'info tersedia saat ini') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Info Tersedia Setiap Saat') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('berita.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Berita Bappeda') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
                <a href="{{ route('berita_nasional.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Berita Nasional') }}</p>
                    <p class="fs-9 py-0 my-0"></p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- INFORMASI PUBLIK DROPDOWN END -->
<!------------------------------>
<!-------- Header End  --------->
<!------------------------------>
