@extends('layouts.ppid')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>

            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-white fw-500 m-0 p-0">{{ translate('PPID') }}</p>
        </div>
        <div class="title-content">
            <h4 class="title fw-bold mb-3">
                {{ translate('PPID') }}
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
<section class="over-top-section ppid-section position-relative d-flex justify-content-center m-0 p-0">
    <div class="container over-top-container m-0 p-0">
        <div class="welcome-content mb-5 m-0 p-0">
            <div class="title-content title-section d-flex align-items-center justify-content-between">
                <h3 class="fw-bold text-danger">{{ translate('Selamat Datang') }}</h3>
                <hr class="hr-title-black flex-grow-1 ms-3">
            </div>
            <p class="fs-6 text-danger m-0 p-0">{{ translate('di Website Pejabat Pengelola Informasi dan Dokumentasi Bappeda Provinsi Kalimantan Timur') }}</p>
        </div>
        <div class="row">
            <div class="col-12 m-0 p-0">
                <p class="text-center fs-8 fw-light lh-sm mb-3">
                    {{ translate('Visi dan Misi Provinsi Kalimantan Timur yang tertuang dalam RPJMD Kalimantan Timur Tahun 2019 - 2023') }}
                </p>
                <h3 class="title text-danger text-center fw-light mb-3">{{ translate('Visi') }}</h3>
                <p class="text-center fs-8 fw-light lh-sm mb-3">
                    {{ translate('Berani Untuk Kalimantan Timur Berdaulat') }}.
                </p>
                <h3 class="title text-danger text-center fw-light mb-3">{{ translate('Misi') }}</h3>
                <ol>
                    <li class="fs-8 fw-light lh-sm mb-1">
                        {{ translate('Berdaulat Dalam Pembangunan Sumber Daya Manusia Berahklak Mulia dan Berdaya Saing Terutama Perempuan, Pemuda dan Penyandang Disabilitas.') }}
                    </li>
                    <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Berdaulat Dalam Pemberdayaan Ekonomi Wilayah dan Ekonomi Kerakyatan Yang Berkeadilan.') }}</li>
                    <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Berdaulat Dalam Memenuhi Kebutuhan Infrastruktur Kewilayahan.') }}</li>
                    <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Berdaulat Dalam Pengelolaan Sumber Daya Alam Yang Berkelanjutan.') }}</li>
                    <li class="fs-8 fw-light lh-sm mb-1">{{ translate('Berdaulat Dalam Mewujudkan Birokrasi Pemerintahan Yang Bersih, Profesional dan Berorientasi Pelayanan Publik.') }}</li>
                </ol>
                <div class="pio-container position-relative d-flex justify-content-center my-5">
                    <div class="row g-5">
                        <div class="col-12 text-center">
                            <a href="{{ route('ppid.pio') }}" class="pio-card text-decoration-none d-flex flex-column p-3">
                                <div class="pio-card-icon w-100 d-flex justify-content-center mb-3">
                                    <i class="bi bi-postcard text-white text-center fs-2 m-0 p-0"></i>
                                </div>
                                <p class="text-uppercase text-center text-white fw-500 lh-sm m-0 p-0">{{ translate('FORM PENGAJUAN PERMOHONAN INFORMASI PUBLIK') }}</p>
                            </a>
                        </div>
                        {{-- <div class="col-4">
                            <a href="" class="pio-card text-decoration-none d-flex flex-column p-3">
                                <div class="pio-card-icon w-100 d-flex justify-content-center mb-3">
                                    <i class="bi bi-postcard text-white text-center fs-2 m-0 p-0"></i>
                                </div>
                                <p class="text-uppercase text-center text-white fw-500 lh-sm m-0 p-0">Form Pengajuan Keberatan Informasi Publik</p>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="ppid-carousel m-0 p-0">
                    <!-- Swiper PPID -->
                    <div class="swiper swiper-ppid" id="swiper-ppid">
                        <div class="swiper-wrapper swiper-ppid-wrapper">
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/B0PjjcakoCOfaSt2AvrB.png" />
                            </div>
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/YV8XVzihTN5zx0ai0QjQ.png" />
                            </div>
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/FkcESHhXzw6aIbFdpWBx.png" />
                            </div>
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/8HA6QPvJ8ssMUa43wcOf.png" />
                            </div>
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/5Z5Hlm0fMTsCrUvHzivf.png" />
                            </div>
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/3DRoxnZY7kntqasEh99L.png" />
                            </div>
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/vF2gfLnFh8P9EXj518sC.png" />
                            </div>
                            <div class="swiper-slide swiper-ppid-slide">
                                <img src="https://bappeda.kaltimprov.go.id/storage/slider/1q7lnJhHOlAsgp0lKluu.png" />
                            </div>
                        </div>
                        <div class="pagination-slide-content">
                            <div class="bottom-mid-pagination position-absolute d-flex align-items-center justify-content-between">
                                <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper PPID End -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
