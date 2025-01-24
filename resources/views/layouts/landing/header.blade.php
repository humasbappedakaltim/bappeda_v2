
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
<header class="main-header position-fixed d-flex align-items-center justify-content-between px-xl-5 px-3 mx-0 w-100" id="main-header">
    <div class="container d-flex justify-content-between px-0">
        <nav class="navbar navbar-expand-xl py-0 d-flex justify-content-between w-100">
            <div class="logo d-flex align-items-center">
                <a class="navbar-brand py-0" href="{{ route('landing.index') }}"><img src="{{ asset('assets/images/logo-bappeda.png')}}"alt=""></a>
            </div>
            <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none"  data-bs-toggle="offcanvas" href="#offcanvas-navbar" aria-controls="offcanvasExample">
                <i class="ti ti-menu-2 text-warning text-white"></i>
            </a>
            <div class="collapse navbar-collapse float-end px-0 mx-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item align-items-center mx-1 {{ Route::is('landing.index') ? 'active' : '' }}">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-capitalize" aria-current="page" href="{{ route('landing.index') }}">{{ translate("Beranda") }}</a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="profil-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#profil-dropdown"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Profil") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="unit-kerja-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#unit-kerja-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Unit Kerja") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="agenda-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#agenda-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Agenda") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="berita-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#berita-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ translate("Postingan") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1 {{ Route::is('data-center.index') ? 'active' : '' }}" id="data-center-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-capitalize" href="{{ route('data-center.index') }}">
                            {{ translate("Data Center") }}
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1 {{ Route::is('landing.ruang_publik') ? 'active' : '' }}">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-capitalize" href="{{ route('landing.ruang_publik') }}">
                            {{ translate("Ruang Publik") }}
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1" id="survei-dropdown-toggle">
                        <a class="nav-link custom-nav-link text-center d-flex align-items-center justify-content-center gap-1 px-2 py-2 text-reset text-capitalize" href="#survei-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample">
                            {{ translate("Survei") }}
                            <i class="bi bi-chevron-down icon-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item align-items-center mx-1">
                        <a class="nav-link custom-nav-link text-center px-2 py-2 text-reset text-uppercase" href="{{ route('ppid.index') }}">{{ translate("PPID") }}</a>
                    </li>

                    {{-- <li class="nav-item align-items-center mx-1">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="localeDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 5px;">
                                @if(app()->getLocale() == 'id')
                                    <img src="{{ asset('assets/images/indonesia-round-icon.png') }}" alt="Selected Language" style="width: 20px;">
                                @else
                                    <img src="{{ asset('assets/images/english.png') }}" alt="Selected Language" style="width: 20px;">
                                @endif
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="localeDropdown" style="left: -80px !important; padding: 10px;">
                                <li>
                                    <a class="dropdown-item" href="{{ url()->current() }}?lang=id">
                                        <img src="{{ asset('assets/images/indonesia-round-icon.png') }}" alt="Indonesia" style="width: 25px;"> Indonesia
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url()->current() }}?lang=en">
                                        <img src="{{ asset('assets/images/english.png') }}" style="width: 25px;"> English
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    @include('layouts.language')

                </ul>
            </div>
        </nav>
    </div>
    <div class="offcanvas offcanvas-start m-0 p-0 custom-offcanvas align-items-center" tabindex="-1" id="offcanvas-navbar" aria-labelledby="offcanvasExampleLabel">
        <div class="container m-0 p-0">
            <div class="offcanvas-header m-0 p-0 custom-offcanvas-header">
                <div class="logo d-flex align-items-center justify-content-center">
                    <a class="navbar-brand py-0" href="{{ route('landing.index') }}"><img src="{{ asset('assets/images/logo-bappeda.png')}}" alt=""></a>
                </div>
                <button type="button" class="custom-btn-close text-white d-inline-block d-lg-block d-xl-none d-xxl-none nav-toggler text-decoration-none m-0 p-0" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ti ti-x text-white m-0 p-0"></i>
                </button>
            </div>
            <div class="offcanvas-body px-2" id="accordionExample">
                <ul class="navbar-nav accordion">
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="{{ route('landing.index') }}">{{ translate('Beranda') }}</a>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingProfil">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProfil" aria-expanded="false" aria-controls="collapseProfil">
                                {{ translate('Profil') }}
                            </button>
                        </h2>
                        <div id="collapseProfil" class="accordion-collapse collapse " aria-labelledby="headingProfil" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.profile') }}" class="text-decoration-none text-white">{{ translate('Profil Bappeda') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.tupoksi') }}" class="text-decoration-none text-white">{{ translate('Tupoksi Bappeda') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.struktur') }}" class="text-decoration-none text-white">{{ translate('Struktur Organisasi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.asn') }}" class="text-decoration-none text-white">{{ translate('ASN Bappeda Prov. Kaltim') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingUnitKerja">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUnitKerja" aria-expanded="false" aria-controls="collapseUnitKerja">
                                {{ translate('Unit Kerja') }}
                            </button>
                        </h2>
                        <div id="collapseUnitKerja" class="accordion-collapse collapse" aria-labelledby="headingUnitKerja" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.kepala_bappeda') }}" class="text-decoration-none text-white"> {{ translate('Kepala BAPPEDA') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.sekretaris') }}" class="text-decoration-none text-white"> {{ translate('Sekretariat') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.bidang_perencanaan') }}" class="text-decoration-none text-white"> {{ translate('Bidang perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.bidang_pemerintahan') }}" class="text-decoration-none text-white"> {{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.bidang_perekonomian') }}" class="text-decoration-none text-white"> {{ translate('Bidang Perekonomian dan Sumber Daya Alam') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.bidang_infrastruktur') }}" class="text-decoration-none text-white"> {{ translate('Bidang Infrastruktur dan Kewilayahan') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingAgenda">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAgenda" aria-expanded="false" aria-controls="collapseAgenda">
                                {{ translate('Agenda') }}
                            </button>
                        </h2>
                        <div id="collapseAgenda" class="accordion-collapse collapse" aria-labelledby="headingAgenda" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('agenda.umum') }}" class="text-decoration-none text-white"> {{ translate('Umum')}}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('agenda.perencanaan') }}" class="text-decoration-none text-white"> {{ translate('Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah')}}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('agenda.pemerintahan') }}" class="text-decoration-none text-white"> {{ translate('Bidang Pemerintahan dan Pembangunan Manusia')}}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('agenda.perekonomian') }}" class="text-decoration-none text-white"> {{ translate('Bidang Perekonomian dan Sumber Daya Alam')}}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('agenda.infrastruktur') }}" class="text-decoration-none text-white"> {{ translate('Bidang Infrastruktur dan Kewilayahan')}}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingPostingan">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePostingan" aria-expanded="false" aria-controls="collapsePostingan">
                                 {{ translate('Postingan') }}
                            </button>
                        </h2>
                        <div id="collapsePostingan" class="accordion-collapse collapse" aria-labelledby="headingPostingan" data-bs-parent="#accordionExample">
                            <ul class="accordion-body nav-item-list">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('artikel.index') }}" class="text-decoration-none text-white"> {{ translate('Artikel') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('berita.index') }}" class="text-decoration-none text-white"> {{ translate('Berita Bappeda') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('informasi.index') }}" class="text-decoration-none text-white"> {{ translate('Informasi') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('pembangunan_kaltim.index') }}" class="text-decoration-none text-white"> {{ translate('Kinerja Pembangunan Kaltim') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('berita_nasional.index') }}" class="text-decoration-none text-white"> {{ translate('Berita Nasional') }}</a>
                                </li>
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="#" class="text-decoration-none text-white"> {{ translate('Social Media') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="{{ route('data-center.index') }}"> {{ translate('Data Center') }}</a>
                    </li>
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="{{ route('landing.ruang_publik') }}"> {{ translate('Ruang Publik') }}</a>
                    </li>
                    <li class="nav-item accordion my-1 py-2">
                        <h2 class="accordion-header" id="headingSurvei">
                            <button class="nav-item-title accordion-button collapsed fs-6 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSurvei" aria-expanded="false" aria-controls="collapseSurvei">
                                {{ translate('Survei') }}
                            </button>
                        </h2>
                        <div id="collapseSurvei" class="accordion-collapse collapse" aria-labelledby="headingSurvei" data-bs-parent="#accordionExample">
                            <ul class="accordion-body">
                                <li class="list-unstyled py-3 fs-7">
                                    <a href="{{ route('landing.survei') }}" class="nav-item-list text-decoration-none text-white">{{ translate('Survei Kepuasan Masyarakat (SKM)') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item my-1 py-2">
                        <a class="nav-item-title text-decoration-none text-white fs-6 text-capitalize" href="{{ route('ppid.index') }}">{{ translate('PPID') }}</a>
                    </li>
                    {{-- @include('layouts.language') --}}
                </ul>
            </div>
        </div>
    </div>
</header>
 <!-- PROFIL DROPDOWN -->
 <div class="collapse position-fixed w-100 custom-dropdown" id="profil-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">{{ translate('profil') }}</h3>
            <div class="row mt-1">
                <a href="{{ route('landing.profile') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Profil Bappeda')}}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Sejarah Singkat Bappeda Kaltim: Dari 1974 hingga Pembaruan 2020') }}</p>
                </a>
                <a href="{{ route('landing.tupoksi') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Tupoksi Bappeda')}}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Temukan peran dan tanggung jawab Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur sesuai dengan Peraturan Gubernur Nomor 43 Tahun 2023') }}</p>
                </a>
                <a href="{{ route('landing.struktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Struktur Organisasi')}}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Lihat struktur organisasi Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur untuk memahami pembagian tugas dan fungsi setiap unit') }}</p>
                </a>
                <a href="{{ route('landing.asn') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('ASN Bappeda Prov. Kaltim')}}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Dapatkan informasi lengkap tentang ASN Bappeda Provinsi Kalimantan Timur') }}</p>
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
            <h3 class="text-capitalize">{{ translate('unit kerja') }}</h3>
            <div class="row mt-1">
                <a href="{{ route('landing.kepala_bappeda') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Kepala Bappeda') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Kenali sosok Kepala Bappeda Provinsi Kalimantan Timur dan visinya') }}</p>
                </a>
                <a href="{{ route('landing.sekretaris') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Sekretariat') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Ketahui lebih lanjut bagaimana Sekretariat Bappeda Provinsi Kaltim menjalankan peran pentingnya dalam koordinasi administrasi, keuangan, dan operasional untuk mendukung kelancaran tugas seluruh unit') }}</p>
                </a>
                <a href="{{ route('landing.bidang_perencanaan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Lihat struktur organisasi Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur untuk memahami pembagian tugas dan fungsi setiap unit') }}</p>
                </a>
                <a href="{{ route('landing.bidang_pemerintahan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Temukan peran Bidang Pemerintahan dan Pembangunan Manusia dalam merumuskan kebijakan dan mengembangkan sumber daya manusia serta kesejahteraan rakyat di Bappeda Kaltim') }}</p>
                </a>
                <a href="{{ route('landing.bidang_perekonomian') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang Perekonomian dan Sumber Daya Alam') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Simak bagaimana Bidang Perekonomian dan Sumber Daya Alam memainkan peran penting dalam pengembangan kebijakan dan program untuk memaksimalkan potensi sumber daya') }}</p>
                </a>
                <a href="{{ route('landing.bidang_infrastruktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang Infrastruktur dan Kewilayahan') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Dapatkan wawasan tentang koordinasi antar sub bidang dalam penyusunan rencana dan program pembangunan infrastruktur yang efektif dan efisien') }}</p>
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
            <h3 class="text-capitalize">{{ translate('agenda') }}</h3>
            <div class="row mt-1">
                <a href="{{ route('agenda.umum') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Umum') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Telusuri agenda terkini yang mendukung pelaksanaan berbagai program strategis untuk pembangunan dan pelayanan publik.') }}</p>
                </a>
                <a href="{{ route('agenda.perencanaan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Telusuri agenda prioritas Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah yang dirancang untuk meningkatkan efektivitas perencanaan pembangunan daerah.') }}</p>
                </a>
                <a href="{{ route('agenda.pemerintahan') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang Pemerintahan dan Pembangunan Manusia') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Telusuri jadwal agenda Bidang Pemerintahan dan Pembangunan Manusia yang berfokus pada pengawasan dan evaluasi berkelanjutan terhadap pelaksanaan pembangunan.') }}</p>
                </a>
                <a href="{{ route('agenda.perekonomian') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang Perekonomian dan Sumber Daya Alam') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Telusuri informasi terkini mengenai agenda Bidang Perekonomian dan Sumber Daya Alam yang berfokus pada pemanfaatan sumber daya alam untuk kesejahteraan bersama.') }}</p>
                </a>
                <a href="{{ route('agenda.infrastruktur') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Bidang Infrastruktur dan Kewilayahan') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Telusuri agenda strategis Bidang Infrastruktur dan Kewilayahan yang mendukung pengembangan infrastruktur demi memperkuat konektivitas wilayah.') }}</p>
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
            <h3 class="text-capitalize">{{ translate('Postingan') }}</h3>
            <div class="row mt-1">
                <a href="{{ route('artikel.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Artikel') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Temukan informasi penting tentang inovasi pembangunan yang mendukung kemajuan daerah.') }}</p>
                </a>
                <a href="{{ route('berita.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Berita Bappeda') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Ulasan lengkap tentang program unggulan Bappeda yang berkontribusi pada kemajuan wilayah.') }}</p>
                </a>
                <a href="{{ route('informasi.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Informasi') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Dapatkan informasi terbaru tentang program pembangunan daerah yang inovatif dan berdampak') }}</p>
                </a>
                <a href="{{ route('pembangunan_kaltim.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Kinerja Pembangunan Kaltim') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Ketahui perkembangan signifikan dalam kinerja pembangunan Kaltim yang mendorong kemajuan ekonomi daerah') }}</p>
                </a>
                <a href="{{ route('berita_nasional.index') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Berita Nasional') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Temukan berita terkini tentang perkembangan yang menyentuh berbagai aspek kehidupan bangsa.') }}</p>
                </a>
                {{-- <a href="postingan-social-media.html" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Social Media') }}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Jangan lewatkan informasi penting yang sedang menjadi sorotan di media sosial. Klik untuk selengkapnya.') }}</p>
                </a> --}}
            </div>
        </div>
    </div>
</div>
<!-- SURVEI DROPDOWN -->
<div class="collapse position-fixed w-100 custom-dropdown" id="survei-dropdown">
    <div class="card card-body py-4 custom-body-dropdown">
        <div class="container col-12">
            <h3 class="text-capitalize">survei</h3>
            <div class="row mt-1">
                <a href="{{ route('landing.survei') }}" class="custom-content-dropdown lh-sm py-1 col-3 text-start text-reset text-decoration-none mt-2">
                    <p class="fw-bold py-0 my-2 fs-7">{{ translate('Survei Kepuasan Masyarakat (SKM)')}}</p>
                    <p class="fs-9 py-0 my-0">{{ translate('Ikuti survei kami untuk memberikan masukan berharga tentang kepuasan masyarakat terhadap layanan') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- SURVEI DROPDOWN END -->
<!------------------------------>
<!-------- Header End  --------->
<!------------------------------>
