<header class="px-3 mx-0 main-header position-fixed d-flex align-items-center justify-content-between px-xl-5 w-100" id="main-header">
    <div class="container px-0 d-flex justify-content-between">
        <nav class="py-0 navbar navbar-expand-xl d-flex justify-content-between w-100">
            <div class="logo d-flex align-items-center">
                <a class="py-0 navbar-brand" href="{{ route('ppid.index') }}"><img src="{{ asset('assets/images/ppid/logo-ppid-bappeda.png') }}"alt=""></a>
            </div>
            <a class="d-inline-block d-lg-block d-xl-none d-xxl-none nav-toggler text-decoration-none"  data-bs-toggle="offcanvas" href="#offcanvas-ppid-navbar" aria-controls="offcanvasExample">
                <i class="text-white ti ti-menu-2 text-warning"></i>
            </a>
            <div class="px-0 mx-0 collapse navbar-collapse float-end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="mx-1 nav-item align-items-center">
                        <a class="px-2 py-2 text-center nav-link custom-nav-link text-reset" href="{{ route('landing.index') }}">
                            {{ translate('Website Utama BAPPEDA') }}
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="tentang-ppid-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset" href="#tentang-ppid-dropdown"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate('Tentang PPID') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="standar-layanan-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset" href="#standar-layanan-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate('Standar Layanan') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="laporan-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset" href="#laporan-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate('Laporan') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="informasi-publik-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset" href="#informasi-publik-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample">
                            {{ translate('Informasi Publik') }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1 {{ Route::is('ppid.pio') ? 'active' : '' }}">
                        <a class="px-2 py-2 text-center nav-link custom-nav-link text-reset" href="{{ route('ppid.pio') }}">
                            {{ translate('Permohonan Informasi') }}
                        </a>
                    </li>
                    @include('layouts.language')
                </ul>
            </div>
        </nav>
    </div>
    <div class="p-0 px-2 m-0 offcanvas offcanvas-start custom-offcanvas align-items-center" tabindex="-1" id="offcanvas-ppid-navbar" aria-labelledby="offcanvasExampleLabel" >
        <div class="container p-0 m-0">
            <div class="p-0 m-0 offcanvas-header custom-offcanvas-header">
                <div class="logo d-flex align-items-center justify-content-center">
                    <a class="py-0 navbar-brand" href="{{ route('ppid.index') }}"><img src="assets/images/ppid/logo-ppid-bappeda.png" alt=""></a>
                </div>
                <button type="button" class="px-0 py-0 mx-0 my-0 text-white custom-btn-close d-inline-block d-lg-block d-xl-none d-xxl-none nav-toggler text-decoration-none"     data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="px-0 py-0 mx-0 my-0 text-white ti ti-x"></i>
                </button>
            </div>
            <div class="px-2 offcanvas-body" id="accordionExample">
                <ul class="navbar-nav accordion">
                    <li class="py-2 my-1 nav-item">
                        <a class="text-white nav-item-title text-decoration-none fs-6 text-capitalize" href="{{ route('landing.index') }}">Website Utama BAPPEDA</a>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingTentangPpid">
                            <button class="px-0 py-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTentangPpid" aria-expanded="false" aria-controls="collapseTentangPpid">
                                {{ translate('Tentang PPID') }}
                            </button>
                        </h2>
                        <div id="collapseTentangPpid" class="px-0 mx-0 accordion-collapse collapse" aria-labelledby="headingTentangPpid" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.profil') }}" class="text-white text-decoration-none">{{ translate('Profil') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.struktur') }}" class="text-white text-decoration-none">{{ translate('Struktur Organisasi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.tugas_fungsi') }}" class="text-white text-decoration-none">{{ translate('Tugas dan Fungsi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.visi_misi') }}" class="text-white text-decoration-none">{{ translate('Visi dan Misi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.dasar_hukum', 'Dasar Peraturan') }}" class="text-white text-decoration-none">{{ translate('Dasar Hukum') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.maklumat_pelayanan') }}" class="text-white text-decoration-none">{{ translate('Maklumat Pelayanan') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none">{{ translate('Standar Operasional Prosedur') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.tata_cara') }}" class="text-white text-decoration-none">{{ translate('Tata Cara') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingStandarLayanan">
                            <button class="px-0 py-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStandarLayanan" aria-expanded="false" aria-controls="collapseStandarLayanan">
                                {{ translate('Standar Layanan') }}
                            </button>
                        </h2>
                        <div id="collapseStandarLayanan" class="accordion-collapse collapse" aria-labelledby="headingStandarLayanan" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.maklumat_pelayanan') }}" class="text-white text-decoration-none">{{ translate('Maklumat Pelayanan') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'prosedurpermohonaninformasi') }}" class="text-white text-decoration-none">{{ translate('Prosedur Permohonan Informasi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'prosedurpengajuankeberatan') }}" class="text-white text-decoration-none">{{ translate('Prosedur Pengajuan Keberatan') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'prosedursengketainformasi') }}" class="text-white text-decoration-none">{{ translate('Prosedur Sengketa Informasi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'jalurwaktudanbiayalayanan') }}" class="text-white text-decoration-none">{{ translate('Jalur, Waktu dan Biaya Layanan') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingLaporan">
                            <button class="px-0 py-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
                                {{ translate('Laporan') }}
                            </button>
                        </h2>
                        <div id="collapseLaporan" class="accordion-collapse collapse" aria-labelledby="headingLaporan" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporanaksesinformasipublik') }}" class="text-white text-decoration-none">{{ translate('Laporan Akses Informasi Publik') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporanlayananinformasipublik') }}" class="text-white text-decoration-none">{{ translate('Laporan Layanan Informasi Publik') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporansurveilayananinformasi') }}" class="text-white text-decoration-none">{{ translate('Laporan Survei Layanan Informasi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('ppid.category.show', 'laporanrealisasianggaran') }}" class="text-white text-decoration-none">{{ translate('Laporan Realisasi Anggaran') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingInformasiPublik">
                            <button class="px-0 py-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInformasiPublik" aria-expanded="false" aria-controls="collapseInformasiPublik">
                                {{ translate('Informasi Publik') }}
                            </button>
                        </h2>
                        <div id="collapseInformasiPublik" class="accordion-collapse collapse" aria-labelledby="headingInformasiPublik" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none">{{ translate('Daftar Informasi Publik') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none">{{ translate('Info Berkala') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none">{{ translate('Info Serta Merta') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none">{{ translate('Info Tersedia Setiap Saat') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none">{{ translate('Berita BAPPEDA') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none">{{ translate('Berita Nasional') }}</a>
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
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Tentang PPID') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('ppid.profil') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.profil') ? 'active' : '' }}">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Profil') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Profil PPID Kaltim: Wadah utama untuk pengelolaan dan penyebaran informasi publik.') }}</p>
                </a>
                <a href="{{ route('ppid.struktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.struktur') ? 'active' : '' }}">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Struktur Organisasi') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Lihat bagaimana struktur organisasi PPID Kaltim mendukung layanan informasi yang efisien.') }}</p>
                </a>
                <a href="{{ route('ppid.tugas_fungsi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.tugas_fungsi') ? 'active' : '' }}">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Tugas dan Fungsi') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Ketahui tugas dan fungsi utama PPID Kaltim dalam mendukung keterbukaan informasi') }}</p>
                </a>
                <a href="{{ route('ppid.visi_misi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.visi_misi') ? 'active' : '' }}">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Visi dan Misi') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Pelajari visi dan misi PPID Kaltim yang mendukung keterbukaan informasi publik.') }}</p>
                </a>
                <a href="{{ route('ppid.dasar_hukum', 'Dasar Peraturan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Dasar Hukum') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Baca lebih lanjut tentang dasar hukum yang memperkuat peran PPID di Provinsi Kaltim.') }}</p>
                </a>
                <a href="{{ route('ppid.maklumat_pelayanan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Maklumat Pelayanan') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Ketahui maklumat pelayanan PPID dalam memberikan akses informasi publik yang cepat dan transparan.') }}</p>
                </a>
                <a href="profil-asn-bappeda.html" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Standar Operasional Prosedur') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Klik untuk memahami standar operasional prosedur PPID dalam melaksanakan tugasnya dengan efektif.') }}</p>
                </a>
                <a href="{{ route('ppid.tata_cara') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.tata_cara') ? 'active' : '' }}">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Tata Cara') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Pahami langkah-langkah yang harus dilakukan saat mengajukan permohonan informasi ke PPID.') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- TENTANG PPID DROPDOWN END -->
<!-- STANDAR LAYANAN DROPDOWN  -->
<div class="collapse position-fixed w-100 custom-dropdown" id="standar-layanan-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Standar Layanan') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('ppid.category.show', 'maklumat') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.maklumat_pelayanan') ? 'active' : '' }}">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Maklumat Pelayanan') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'prosedurpermohonaninformasi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2 {{ Route::is('ppid.prosedur_permohonan_informasi') ? 'active' : '' }}">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Prosedur Permohonan Informasi') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'prosedurpengajuankeberatan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Prosedur Pengajuan Keberatan') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'prosedursengketainformasi') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Prosedur Sengketa Informasi') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'jalurjalandanbiayalayanan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Jalur, Waktu, dan Biaya Layanan') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- STANDAR LAYANAN DROPDOWN END -->
<!-- LAPORAN DROPDOWN-->
<div class="collapse position-fixed w-100 custom-dropdown" id="laporan-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Laporan') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('ppid.category.show', 'laporanaksesinformasipublik') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Laporan Akses Informasi Publik') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'laporanpelayananinformasi publik') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Laporan Layanan Informasi Publik') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'laporansurveilayananinformasi') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Laporan Survei Layanan Informasi') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'laporanrealisasianggaran') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Laporan Realisasi Anggaran') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- LAPORAN DROPDOWN END -->
<!-- INFORMASI PUBLIK DROPDOWN-->
<div class="collapse position-fixed w-100 custom-dropdown" id="informasi-publik-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Informasi Publik') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('ppid.category.show', 'daftar_informasi_publik') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Daftar Informasi Publik') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'infoberkala') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Info Berkala') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'infosertamerta') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Info Serta Merta') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('ppid.category.show', 'infotersediasaatini') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Info Tersedia Setiap Saat') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('berita.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Berita Bappeda') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
                <a href="{{ route('berita_nasional.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Berita Nasional') }}</p>
                    <p class="py-0 my-0 fs-9"></p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- INFORMASI PUBLIK DROPDOWN END -->
<!------------------------------>
<!-------- Header End  --------->
<!------------------------------>
