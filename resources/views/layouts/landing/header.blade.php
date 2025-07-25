
@push('front_css')
    <style type="text/css">
        /* Smaller button with padding adjustments */
        .dropdown-toggle {
            padding: 5px !important;
            font-size: 12px;
        }

        /* Ensure the dropdown image is smaller */
        .dropdown-item img {
            width: 25px;
            height: auto;
            margin-right: 10px;
        }

        /* Adjust the size of the dropdown menu */
        .dropdown-menu {
            padding: 0;
            font-size: 12px;
            left: 0 !important;   /* Force the menu to be aligned to the left */
            right: auto !important; /* Remove any right-alignment */
            text-align: left; /* Ensure text inside the menu is left-aligned */
        }

        /* Add a bit of space between text and image */
        .dropdown-item {
            padding: 5px 10px;
        }

    </style>
@endpush
<header class="px-3 mx-0 main-header position-fixed d-flex align-items-center justify-content-between px-xl-5 w-100" id="main-header">
    <div class="container px-0 d-flex justify-content-between">
        <nav class="py-0 navbar navbar-expand-xl d-flex justify-content-between w-100">
            <div class="logo d-flex align-items-center">
                <a class="py-0 navbar-brand" href="{{ route('landing.index') }}"><img src="{{ asset('assets/images/logo-bappeda.png')}}"alt=""></a>
            </div>
            <a class="d-inline-block d-lg-block d-xl-none d-xxl-none nav-toggler text-decoration-none"  data-bs-toggle="offcanvas" href="#offcanvas-navbar" aria-controls="offcanvasExample">
                <i class="text-white ti ti-menu-2 text-warning"></i>
            </a>
            <div class="px-0 mx-0 collapse navbar-collapse float-end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item align-items-center mx-1 {{ Route::is('landing.index') ? 'active' : '' }}">
                        <a class="px-2 py-2 text-center nav-link custom-nav-link text-reset text-capitalize" aria-current="page" href="{{ route('landing.index') }}">{{ translate("Beranda") }}</a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="profil-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset text-capitalize" href="#profil-dropdown"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Profil") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="unit-kerja-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset text-capitalize" href="#unit-kerja-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Unit Kerja") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="agenda-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset text-capitalize" href="#agenda-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Agenda") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="berita-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset text-capitalize" href="#berita-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Postingan") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="data-center-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset text-capitalize" href="#data-center-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Data Center") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1 {{ Route::is('landing.ruang_publik') ? 'active' : '' }}">
                        <a class="px-2 py-2 text-center nav-link custom-nav-link text-reset text-capitalize" href="{{ route('landing.ruang_publik') }}">
                            {{ translate("Ruang Publik") }}
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center" id="survei-dropdown-toggle">
                        <a class="gap-1 px-2 py-2 text-center nav-link custom-nav-link d-flex align-items-center justify-content-center text-reset text-capitalize" href="#survei-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample">
                            {{ translate("Survei") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="mx-1 nav-item align-items-center">
                        <a class="px-2 py-2 text-center nav-link custom-nav-link text-reset text-uppercase" href="{{ route('ppid.index') }}">{{ translate("PPID") }}</a>
                    </li>

                    @include('layouts.language')

                </ul>
            </div>
        </nav>
    </div>
    <div class="p-0 m-0 offcanvas offcanvas-start custom-offcanvas align-items-center" tabindex="-1" id="offcanvas-navbar" aria-labelledby="offcanvasExampleLabel">
        <div class="container p-0 m-0">
            <div class="p-0 m-0 offcanvas-header custom-offcanvas-header">
                <div class="logo d-flex align-items-center justify-content-center">
                    <a class="py-0 navbar-brand" href="{{ route('landing.index') }}"><img src="{{ asset('assets/images/logo-bappeda.png')}}" alt=""></a>
                </div>
                <button type="button" class="p-0 m-0 text-white custom-btn-close d-inline-block d-lg-block d-xl-none d-xxl-none nav-toggler text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="p-0 m-0 text-white ti ti-x"></i>
                </button>
            </div>
            <div class="px-2 offcanvas-body" id="accordionExample">
                <ul class="navbar-nav accordion">
                    <li class="py-2 my-1 nav-item">
                        <a class="text-white nav-item-title text-decoration-none fs-6 text-capitalize" href="{{ route('landing.index') }}">{{ translate('Beranda') }}</a>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingProfil">
                            <button class="p-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProfil" aria-expanded="false" aria-controls="collapseProfil">
                                {{ translate('Profil') }}
                            </button>
                        </h2>
                        <div id="collapseProfil" class="accordion-collapse collapse " aria-labelledby="headingProfil" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.profile') }}" class="text-white text-decoration-none">{{ translate('Profil Bappeda') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.tupoksi') }}" class="text-white text-decoration-none">{{ translate('Tupoksi Bappeda') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.struktur') }}" class="text-white text-decoration-none">{{ translate('Struktur Organisasi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.asn') }}" class="text-white text-decoration-none">{{ translate('ASN Bappeda Prov. Kaltim') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingUnitKerja">
                            <button class="p-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUnitKerja" aria-expanded="false" aria-controls="collapseUnitKerja">
                                {{ translate('Unit Kerja') }}
                            </button>
                        </h2>
                        <div id="collapseUnitKerja" class="accordion-collapse collapse" aria-labelledby="headingUnitKerja" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.kepala_bappeda') }}" class="text-white text-decoration-none"> {{ translate('Kepala BAPPEDA') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.sekretaris') }}" class="text-white text-decoration-none"> {{ translate('Sekretariat') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.bidang_perencanaan') }}" class="text-white text-decoration-none"> {{ translate('Bidang perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.bidang_pemerintahan') }}" class="text-white text-decoration-none"> {{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.bidang_perekonomian') }}" class="text-white text-decoration-none"> {{ translate('Bidang Perekonomian dan Sumber Daya Alam') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.bidang_infrastruktur') }}" class="text-white text-decoration-none"> {{ translate('Bidang Infrastruktur dan Kewilayahan') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingAgenda">
                            <button class="p-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAgenda" aria-expanded="false" aria-controls="collapseAgenda">
                                {{ translate('Agenda') }}
                            </button>
                        </h2>
                        <div id="collapseAgenda" class="accordion-collapse collapse" aria-labelledby="headingAgenda" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('agenda.umum') }}" class="text-white text-decoration-none"> {{ translate('Umum')}}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('agenda.perencanaan') }}" class="text-white text-decoration-none"> {{ translate('Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah')}}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('agenda.pemerintahan') }}" class="text-white text-decoration-none"> {{ translate('Bidang Pemerintahan dan Pembangunan Manusia')}}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('agenda.perekonomian') }}" class="text-white text-decoration-none"> {{ translate('Bidang Perekonomian dan Sumber Daya Alam')}}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('agenda.infrastruktur') }}" class="text-white text-decoration-none"> {{ translate('Bidang Infrastruktur dan Kewilayahan')}}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingPostingan">
                            <button class="p-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePostingan" aria-expanded="false" aria-controls="collapsePostingan">
                                 {{ translate('Postingan') }}
                            </button>
                        </h2>
                        <div id="collapsePostingan" class="accordion-collapse collapse" aria-labelledby="headingPostingan" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('artikel.index') }}" class="text-white text-decoration-none"> {{ translate('Artikel') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('berita.index') }}" class="text-white text-decoration-none"> {{ translate('Berita Bappeda') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('informasi.index') }}" class="text-white text-decoration-none"> {{ translate('Informasi') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('pembangunan_kaltim.index') }}" class="text-white text-decoration-none"> {{ translate('Kinerja Pembangunan Kaltim') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('berita_nasional.index') }}" class="text-white text-decoration-none"> {{ translate('Berita Nasional') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="#" class="text-white text-decoration-none"> {{ translate('Social Media') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingDataCenter">
                            <button class="p-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataCenter" aria-expanded="false" aria-controls="collapseDataCenter">
                                 {{ translate('Data Center') }}
                            </button>
                        </h2>
                        <div id="collapseDataCenter" class="accordion-collapse collapse" aria-labelledby="headingDataCenter" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('data-center.index') }}" class="text-white text-decoration-none"> {{ translate('Data Center') }}</a>
                                </li>
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('materi_paparan.index') }}" class="text-white text-decoration-none"> {{ translate('Materi Paparan') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item">
                        <a class="text-white nav-item-title text-decoration-none fs-6 text-capitalize" href="{{ route('landing.ruang_publik') }}"> {{ translate('Ruang Publik') }}</a>
                    </li>
                    <li class="py-2 my-1 nav-item accordion">
                        <h2 class="accordion-header" id="headingSurvei">
                            <button class="p-0 nav-item-title accordion-button collapsed fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSurvei" aria-expanded="false" aria-controls="collapseSurvei">
                                {{ translate('Survei') }}
                            </button>
                        </h2>
                        <div id="collapseSurvei" class="accordion-collapse collapse" aria-labelledby="headingSurvei" data-bs-parent="#accordionExample">
                            <ul class="accordion-body">
                                <li class="py-3 list-unstyled fs-7">
                                    <a href="{{ route('landing.survei') }}" class="text-white nav-item-list text-decoration-none">{{ translate('Survei Kepuasan Masyarakat (SKM)') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 my-1 nav-item">
                        <a class="text-white nav-item-title text-decoration-none fs-6 text-capitalize" href="{{ route('ppid.index') }}">{{ translate('PPID') }}</a>
                    </li>
                    {{-- @include('layouts.language') --}}
                </ul>
            </div>
        </div>
    </div>
</header>
 <!-- PROFIL DROPDOWN -->
 <div class="collapse position-fixed w-100 custom-dropdown" id="profil-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('profil') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('landing.profile') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Profil Bappeda')}}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Sejarah Singkat Bappeda Kaltim: Dari 1974 hingga Pembaruan 2020') }}</p>
                </a>
                <a href="{{ route('landing.tupoksi') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Tupoksi Bappeda')}}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Temukan peran dan tanggung jawab Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur sesuai dengan Peraturan Gubernur Nomor 43 Tahun 2023') }}</p>
                </a>
                <a href="{{ route('landing.struktur') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Struktur Organisasi')}}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Lihat struktur organisasi Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur untuk memahami pembagian tugas dan fungsi setiap unit') }}</p>
                </a>
                <a href="{{ route('landing.asn') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('ASN Bappeda Prov. Kaltim')}}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Dapatkan informasi lengkap tentang ASN Bappeda Provinsi Kalimantan Timur') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- PROFIL DROPDOWN END -->
<!-- UNIT KERJA DROPDOWN -->
<div class="collapse position-fixed w-100 custom-dropdown" id="unit-kerja-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('unit kerja') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('landing.kepala_bappeda') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Kepala Bappeda') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Kenali sosok Kepala Bappeda Provinsi Kalimantan Timur dan visinya') }}</p>
                </a>
                <a href="{{ route('landing.sekretaris') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Sekretariat') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Ketahui lebih lanjut bagaimana Sekretariat Bappeda Provinsi Kaltim menjalankan peran pentingnya dalam koordinasi administrasi, keuangan, dan operasional untuk mendukung kelancaran tugas seluruh unit') }}</p>
                </a>
                <a href="{{ route('landing.bidang_perencanaan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Lihat struktur organisasi Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur untuk memahami pembagian tugas dan fungsi setiap unit') }}</p>
                </a>
                <a href="{{ route('landing.bidang_pemerintahan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Temukan peran Bidang Pemerintahan dan Pembangunan Manusia dalam merumuskan kebijakan dan mengembangkan sumber daya manusia serta kesejahteraan rakyat di Bappeda Kaltim') }}</p>
                </a>
                <a href="{{ route('landing.bidang_perekonomian') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang Perekonomian dan Sumber Daya Alam') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Simak bagaimana Bidang Perekonomian dan Sumber Daya Alam memainkan peran penting dalam pengembangan kebijakan dan program untuk memaksimalkan potensi sumber daya') }}</p>
                </a>
                <a href="{{ route('landing.bidang_infrastruktur') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang Infrastruktur dan Kewilayahan') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Dapatkan wawasan tentang koordinasi antar sub bidang dalam penyusunan rencana dan program pembangunan infrastruktur yang efektif dan efisien') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- UNIT KERJA DROPDOWN END -->
<!-- Data Center DROPDOWN  -->
<div class="collapse position-fixed w-100 custom-dropdown" id="data-center-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Data Center') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('data-center.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Data Center') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Temukan data-data yang berkaitan dengan Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur.') }}</p>
                </a>
                <a href="{{ route('materi_paparan.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Materi Paparan') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Temukan materi paparan yang berkaitan dengan Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur.') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- AGENDA DROPDOWN  -->
<div class="collapse position-fixed w-100 custom-dropdown" id="agenda-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('agenda') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('agenda.umum') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Umum') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Telusuri agenda terkini yang mendukung pelaksanaan berbagai program strategis untuk pembangunan dan pelayanan publik.') }}</p>
                </a>
                <a href="{{ route('agenda.perencanaan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Telusuri agenda prioritas Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah yang dirancang untuk meningkatkan efektivitas perencanaan pembangunan daerah.') }}</p>
                </a>
                <a href="{{ route('agenda.pemerintahan') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Telusuri jadwal agenda Bidang Pemerintahan dan Pembangunan Manusia yang berfokus pada pengawasan dan evaluasi berkelanjutan terhadap pelaksanaan pembangunan.') }}</p>
                </a>
                <a href="{{ route('agenda.perekonomian') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang Perekonomian dan Sumber Daya Alam') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Telusuri informasi terkini mengenai agenda Bidang Perekonomian dan Sumber Daya Alam yang berfokus pada pemanfaatan sumber daya alam untuk kesejahteraan bersama.') }}</p>
                </a>
                <a href="{{ route('agenda.infrastruktur') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Bidang Infrastruktur dan Kewilayahan') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Telusuri agenda strategis Bidang Infrastruktur dan Kewilayahan yang mendukung pengembangan infrastruktur demi memperkuat konektivitas wilayah.') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- AGENDA DROPDOWN END -->
<!-- POSTINGAN DROPDOWN-->
<div class="collapse position-fixed w-100 custom-dropdown" id="berita-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('Postingan') }}</h3>
            <div class="mt-1 row">
                <a href="{{ route('artikel.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Artikel') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Temukan informasi penting tentang inovasi pembangunan yang mendukung kemajuan daerah.') }}</p>
                </a>
                <a href="{{ route('berita.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Berita Bappeda') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Ulasan lengkap tentang program unggulan Bappeda yang berkontribusi pada kemajuan wilayah.') }}</p>
                </a>
                <a href="{{ route('informasi.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Informasi') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Dapatkan informasi terbaru tentang program pembangunan daerah yang inovatif dan berdampak') }}</p>
                </a>
                <a href="{{ route('pembangunan_kaltim.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Kinerja Pembangunan Kaltim') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Ketahui perkembangan signifikan dalam kinerja pembangunan Kaltim yang mendorong kemajuan ekonomi daerah') }}</p>
                </a>
                <a href="{{ route('berita_nasional.index') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Berita Nasional') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Temukan berita terkini tentang perkembangan yang menyentuh berbagai aspek kehidupan bangsa.') }}</p>
                </a>
                {{-- <a href="postingan-social-media.html" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Social Media') }}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Jangan lewatkan informasi penting yang sedang menjadi sorotan di media sosial. Klik untuk selengkapnya.') }}</p>
                </a> --}}
            </div>
        </div>
    </div>
</div>
<!-- SURVEI DROPDOWN -->
<div class="collapse position-fixed w-100 custom-dropdown" id="survei-dropdown">
    <div class="py-4 card card-body custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">survei</h3>
            <div class="mt-1 row">
                <a href="{{ route('landing.survei') }}" class="py-1 mt-2 custom-content-dropdown lh-sm col-3 text-start text-reset text-decoration-none">
                    <p class="py-0 my-2 fw-bold fs-7">{{ translate('Survei Kepuasan Masyarakat (SKM)')}}</p>
                    <p class="py-0 my-0 fs-9">{{ translate('Ikuti survei kami untuk memberikan masukan berharga tentang kepuasan masyarakat terhadap layanan') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- SURVEI DROPDOWN END -->
<!------------------------------>
<!-------- Header End  --------->
<!------------------------------>
