@extends('layouts.landing')
@section('content')



<!------------------------------>
<!----- Hero Banner Start ------>
<!------------------------------>
<section class="hero-banner position-relative overflow-hidden">
    <div class="container searching-container d-flex justify-content-center">
    <div class="row d-flex justify-content-center w-100">
        <div class="col-12 text-center text-white px-0">
            <h4 class="text-capitalize lh-sm">{{ translate('badan perencanaan pembangunan daerah') }}</h4>
            <h4 class="text-capitalize lh-sm mb-5">{{ translate('pemerintah provinsi kalimantan timur') }}</h4>
            <h5 class="text-capitalize lh-sm mb-3">{{ translate('Dapatkan Berita Dan Informasi Dari Bappeda Kaltim') }}</h5>
            <form action="{{ route('berita.index') }}" method="GET" class="input-search p-0">
                <input type="search" class="custom-form-control mx-0  my-0 py-0" name="search" placeholder="{{ translate('Ketik untuk mencari..') }}">
                <i class="bi bi-search icon-search  my-0 py-0"></i>
                <button class="btn custom-btn  py-0 my-0" type="submit">{{ translate('Cari') }}</button>
            </form>
        </div>
    </div>
    </div>
    <h1 class="text-province text-uppercase">{{ translate('kalimantan timur') }}</h1>
    <!-- Swiper Banner -->
    <div class="swiper swiper-banner">
        <div class="swiper-wrapper swiper-banner-wrapper">
            <div class="swiper-slide swiper-banner-slide">
                <img src="{{ asset('assets/images/selayang-pandang-1.jpg') }}"/>
            </div>
            <div class="swiper-slide swiper-banner-slide">
                <img src="{{ asset('assets/images/selayang-pandang-1.jpg') }}"/>
            </div>
            <div class="swiper-slide swiper-banner-slide">
                <img src="{{ asset('assets/images/selayang-pandang-1.jpg') }}"/>
            </div>
        </div>
    </div>
    <!-- Swiper Banner End -->
</section>
<!----------------------------->
<!------ Hero Banner End ------>
<!----------------------------->

<!----------------------------->
<!----- Content Hub Start ----->
<!----------------------------->
<section class="over-top-section content-hub-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container">
        <div class="row m-0 p-0">
            <div class="col-12 overview-container d-flex justify-content-center w-100 position-relative text-white mb-5 py-3 py-lg-4">
                <div class="row m-0 p-0">
                    <div class="col-6 col-lg-3 left-content position-relative d-flex align-items-center justify-content-center p-0 m-0 mb-4 mb-lg-0">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/kepala-bappeda.jpg')}}" alt="Kepala Bappeda">
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 flex-column justify-content-center align-items-center right-content mx-0 px-3 my-0 py-0">
                        <div class="title-content d-flex align-items-center justify-content-between mb-3">
                            <p class="tagline text-uppercase fw-bold py-0">{{ translate('selayang pandang') }}</p>
                            <hr class="hr-title-white flex-grow-1 ms-3">
                        </div>
                        <div class="description d-flex flex-column justify-content-between my-0">
                            <h4 class="title text-capitalize py-0">{{ translate('badan perencanaan pembangunan daerah') }}</h4>
                            <p class="about lh-sm my-0">{{ translate('Selamat datang di Website Resmi Bappeda Provinsi Kalimantan Timur. Website ini merupakan platform informasi yang menyediakan berbagai data dan gambaran tentang Bappeda dalam melaksanakan tugas perencanaan dan pengembangan daerah. Kami berkomitmen untuk memberikan pelayanan yang transparan dan akuntabel kepada masyarakat, serta mendukung upaya pembangunan yang berkelanjutan di Provinsi Kalimantan Timur.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 news-container position-relative m-0 mb-5 p-0">
                <div class="row">
                    <div class="col-12 col-lg-9 mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                                    <p class="text-title text-capitalize lh-sm my-0 py-0">{{ translate('berita terkini') }}</p>
                                    <hr class="hr-title-black flex-grow-1 mx-3">
                                    <a href="{{ route('berita.index') }}" class="all-news-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none lh-sm gap-3 fw-500">
                                        {{ translate('lihat semua berita') }}
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 order-3 oder-md-2 mb-4 mb-md-0">
                                <div id="gpr-kominfo-widget-container"></div>
                            </div>
                            <div class="col-12 col-md-8 order-2 order-md-3 mb-4 mb-md-0">
                                <!-- swiper-news -->
                                <div class="swiper swiper-news swiper-primary swiper-primary-hover" id="swiper-news">
                                    <div class="swiper-wrapper swiper-primary-wrapper">
                                        @forelse ($news as $item)
                                        <div class="swiper-slide swiper-primary-slide">
                                            @php
                                                $imageFilename = basename(str_replace('\\', '/', $item->image));
                                            @endphp
                                            <img src="{{ asset('storage/post/'. $imageFilename )}}"/>
                                            <div class="primary-slide-content pb-4">
                                                <p class="title text-white fw-bold text-capitalize mb-2">
                                                    {{ translate("$item->title") }}
                                                </p>
                                                <p class="date text-white text-capitalize mb-2">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->translatedFormat('d F Y') }}
                                                </p>
                                                <p class="description text-white">
                                                    {!! Str::substr(strip_tags(translate("$item->description")), 0, 300) !!}
                                                </p>
                                                <a href="{{ route('berita.show', $item->slug . '.' . Str::slug($item->title)) }}" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                    {{ translate('baca selengkapnya') }}
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="primary-slide-content pb-4">
                                            <p class="title text-white fw-bold text-capitalize mb-2">
                                                {{ translate('Rapat Asistensi Rencana Kerja Tahunan Program Forest Carbon Partnership Facility-Carbon Fund (PFCP-CF)') }}
                                            </p>
                                            <p class="date text-white text-capitalize mb-2">
                                                {{ translate('Rabu, 30 Oktober 2024') }}
                                            </p>
                                            <p class="description text-white">
                                                {{ translate('Dalam upaya mengoptimalkan implementasi program penurunan emisi Gas Rumah Kaca (GRK) di Kalimantan Timur, Bappeda Kaltim menggelar rapat asistensi Rencana Kerja Tahunan (Annual Work Plan/AWP) untuk Program Forest Carbon Partnership Facility-Carbon Fund (FCPF-CF) pada hari ini. Acara ini berlangsung di Ruang Rapat Poldas, Kantor Bappeda Provinsi Kalimantan Timur.') }}
                                            </p>
                                            <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                {{ translate('baca selengkapnya') }}
                                                <i class="bi bi-box-arrow-up-right"></i>
                                            </a>
                                        </div>
                                        @endforelse
                                    </div>
                                    <div class="swiper-primary-pagination position-absolute d-flex align-items-center justify-content-between">
                                        <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                        <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                        <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                    </div>
                                </div>
                                <!-- Swiper News End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="row m-0 p-0">
                            <div class="news-category-btn d-flex align-items-center justify-content-between mb-3 m-0 p-0">
                                <p class="text-center fs-8 text-uppercase m-0 p-0 py-2 w-100 active">
                                    {{ translate('terbaru') }}
                                </p>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="news-item-content m-0 p-0">
                                    @forelse ($news as $item)
                                    @if(in_array($item->category->name, ['Berita', 'Artikel']))
                                        <a href="{{ route('berita.show', $item->slug . '.' . Str::slug($item->title)) }}" class="text-decoration-none text-black">
                                            <div class="list-content mb-2 m-0 p-2">
                                                <p class="title">
                                                    {{ translate("$item->title") }}
                                                </p>
                                                <p class="date">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->locale(session('locale'))->translatedFormat('l, j F Y') }}
                                                </p>
                                            </div>
                                        </a>
                                    @elseif($item->category->name == 'Infromasi')
                                        <a href="{{ route('informasi.show', $item->slug . '.' . Str::slug($item->title)) }}" class="text-decoration-none text-black">
                                            <div class="list-content mb-2 m-0 p-2">
                                                <p class="title">
                                                    {{ translate("$item->title") }}
                                                </p>
                                                <p class="date">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->locale(session('locale'))->translatedFormat('l, j F Y') }}
                                                </p>
                                            </div>
                                        </a>
                                    @elseif($item->category->name == 'Berita Nasional')
                                        <a href="{{ route('berita_nasional.show', $item->slug . '.' . Str::slug($item->title)) }}" class="text-decoration-none text-black">
                                            <div class="list-content mb-2 m-0 p-2">
                                                <p class="title">
                                                    {{ translate("$item->title") }}
                                                </p>
                                                <p class="date">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->locale(session('locale'))->translatedFormat('l, j F Y') }}
                                                </p>
                                            </div>
                                        </a>
                                    @elseif($item->category->name == 'Kinerja Pembangunan Kaltim')
                                        <a href="{{ route('pembangunan_kaltim.show', $item->slug . '.' . Str::slug($item->title)) }}" class="text-decoration-none text-black">
                                            <div class="list-content mb-2 m-0 p-2">
                                                <p class="title">
                                                    {{ translate("$item->title") }}
                                                </p>
                                                <p class="date">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->locale(session('locale'))->translatedFormat('l, j F Y') }}
                                                </p>
                                            </div>
                                        </a>
                                    @endif
                                    @empty
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-center text-white fs-8 m-0 p-0 py-2 w-100">
                                                        {{ translate('tidak ada data') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 info-container position-relative m-0 mb-5 p-0">
                <div class="row">
                    <div class="col-lg-8 col-md-12 left-content position-relative mb-5 mb-lg-0">
                        <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                            <p class="text-title text-capitalize lh-sm my-0 py-0">{{ translate('informasi terkini') }}</p>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                        <!-- Swiper Information -->
                        <div class="swiper swiper-information">
                            <div class="swiper-wrapper swiper-information-wrapper">
                                @forelse($sliders as $slider)
                                <div class="swiper-slide swiper-information-slide">
                                    <img src="{{ asset('storage/slider/'. $slider->image)}}" />
                                </div>
                                @empty
                                <div class="swiper-slide swiper-information-slide">
                                    <img src="{{ asset('assets/images/informasi-2.png')}}" />
                                </div>
                                @endforelse
                            </div>
                            <div class="pagination-slide-content">
                                <div class="bottom-mid-pagination position-absolute d-flex align-items-center justify-content-between">
                                    <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                    <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                    <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper Information End -->
                    </div>
                    <div class="col-lg-4 col-md-12 right-content d-flex align-items-start justify-content-start position-relative  ps-0 ps-lg-3">
                        <div class="right-content-container position-relative">
                            <div class="top-content position-relative">
                                <p class="title text-uppercase fw-bold px-0 mx-0">{{ translate('agenda bappeda kaltim') }}</p>
                                <p class="text-ajakan px-0 mx-0">{{ translate('Ikuti agenda terkini dari Bappeda Kaltim') }}</p>
                            </div>
                            <div class="main-content">
                                <p class="text-month text-capitalize mb-4 py-0">{{ translate('november 2024') }}</p>
                                <!-- <p class="text-week mb-4 py-0">Minggu ke 1</p> -->
                                <!-- Swiper Date-->
                                <div class="swiper swiper-date d-flex justify-content-center mb-4" id="swiper-date">
                                    <div class="swiper-date-prev d-flex align-items-center justify-content-start">
                                        <i class="bi bi-chevron-left icon-chevron-left text-black"></i>
                                    </div>
                                    <div class="swiper-wrapper swiper-date-wrapper">

                                    </div>
                                    <div class="swiper-date-next d-flex align-items-center justify-content-end">
                                        <i class="bi bi-chevron-right icon-chevron-right text-black"></i>
                                    </div>
                                </div>
                                <!-- Swiper Date End -->
                                <div class="detail-agenda-container" id="detail-agenda">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 award-maps-container position-relative m-0 mb-3 mb-lg-5 p-0">
                <div class="row g-3">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 ps-0">
                        <div class="m-0 p-0">
                            <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                                <p class="text-title text-capitalize lh-sm my-0 py-0">{{ translate('Penghargaan') }}</p>
                                <hr class="hr-title-black flex-grow-1 mx-3">
                                <a href="{{ route('landing.penghargaan') }}" class="all-news-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none gap-3 fw-500">
                                    {{ translate('lihat semua Penghargaan') }}
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- Swiper Award -->
                            <div class="swiper swiper-award swiper-award-maps swiper-primary-hover">
                                <div class="swiper-wrapper swiper-primary-wrapper">
                                    @forelse($awards as $award)
                                    <div class="swiper-slide swiper-primary-slide">
                                        <img src="{{ asset('storage/penghargaan/' . $award->foto) }}" alt="award"/>
                                        <div class="primary-slide-content pb-4">
                                            <p class="title text-white fw-bold text-capitalize mb-2">
                                                {{ translate("$award->title") }}
                                            </p>
                                            <p class="description text-white">
                                                {{ translate("$award->description") }}
                                            </p>
                                            <a href="{{ route('landing.penghargaan') }}" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                {{ translate('baca selengkapnya') }}
                                                <i class="bi bi-box-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                                <div class="swiper-primary-pagination position-absolute d-flex align-items-center justify-content-between">
                                    <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                    <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                    <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                </div>
                            </div>
                            <!-- Swiper Award End -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pe-0">
                        <div class="m-0 p-0">
                            <div class="row">
                                <div class="col-12 order-2 order-lg-1">
                                    <div class="col-12 order-1 order-lg-2">
                                        <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                                            <p class="text-title text-capitalize my-0 py-0">{{ translate('peta') }}</p>
                                            <hr class="hr-title-black flex-grow-1 mx-3">
                                            <a href="{{ route('landing.peta') }}" class="all-news-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none gap-3 fw-500">
                                                {{ translate('lihat semua peta') }}
                                                <i class="bi bi-box-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Swiper Maps -->
                                    <div class="swiper swiper-maps swiper-award-maps swiper-primary-hover mb-3">
                                        <div class="swiper-wrapper swiper-primary-wrapper">
                                            @forelse ($maps as $map)
                                            <div class="swiper-slide swiper-primary-slide">
                                                <img src="{{ asset('storage/maps/' .$map->file) }}"/>
                                                <div class="primary-slide-content pb-4">
                                                    <p class="title text-white fw-bold text-capitalize mb-2">
                                                        {{ translate("$map->name") }}
                                                    </p>
                                                    {{-- <p class="description text-white">
                                                        {{ translate("$map->description") }}
                                                    </p> --}}
                                                    <a href="{{ route('landing.peta') }}" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                        {{ translate('baca selengkapnya') }}
                                                        <i class="bi bi-box-arrow-up-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            @empty
                                            @endforelse

                                        </div>
                                        <div class="swiper-primary-pagination position-absolute d-flex align-items-center justify-content-between">
                                            <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                            <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                            <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                        </div>
                                    </div>
                                    <!-- Swiper News End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!---------------------------------->
<!------- Content Hub End ---------->
<!---------------------------------->

<!---------------------------------->
<!------ Banner Data Center -------->
<!---------------------------------->
<section class="banner-dc-section position-relative d-flex justify-content-center m-0 mb-5 p-0 pt-3">
    <div class="container custom-container position-relative d-flex justify-content-center m-0 p-0">
        <div class="banner-container">
            <div class="text-content d-flex flex-column m-0 p-0">
                <p class="text-white fs-6 lh-sm m-0 mb-4 p-0">
                    {{ translate('Mau Tau Informasi Program Prioritas Pembangunan Daerah di Kalimantan Timur pada Tahun 2024?') }}
                </p>
                <h2 class="text-white text-uppercase fw-light lh-sm mb-4">
                    {{ translate('Informasi Prioritas Daerah Provinsi Kalimantan Timur') }}
                </h2>
                <div class="detail-btn d-flex">
                    <a href="{{ route('landing.informasi_prioritas') }}">{{ translate('Klik Disini') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!---- Banner Data Center End ------>
<!---------------------------------->

<!---------------------------------->
<!--------- Bappeda Apps ----------->
<!---------------------------------->
<section class="app-bappeda-section position-relative d-flex justify-content-center m-0 mb-5 p-0">
    <div class="container custom-container position-relative m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-12 app-bappeda-container position-relative m-0 p-0">
                <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                    <p class="text-title text-capitalize lh-sm my-0 py-0">{{ translate('Aplikasi Bappeda Provinsi Kalimantan Timur') }}</p>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>
                <div class="swiper swiper-app-bappeda" id="swiper-app-bappeda">
                    <div class="swiper-wrapper swiper-app-bappeda-wrapper">
                        @forelse ($apps as $app)
                        <a href="{{ $app->link }}" target="__blank" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-contain mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    {{ translate("$app->name") }}
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="{{ asset('storage/img/app-bappeda/' . $app->foto) }}" alt="{{ translate("$app->name") }}">
                            </div>
                        </a>
                        @empty
                        <div class="swiper-slide app-bappeda-slide d-flex justify-content-center align-items-center p-3">
                            <p class="text-muted">{{ translate('Tidak ada aplikasi yang tersedia.') }}</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!------- Bappeda Apps End ------>
<!---------------------------------->

<!---------------------------------->
<!------------ Maps ---------------->
<!---------------------------------->
<section class="maps-section position-relative d-flex justify-content-center m-0 mb-5 p-0">
    <div class="container custom-container position-relative d-flex justify-content-center m-0 p-0">
        <div class="row d-flex align-items-center justify-content-center m-0 p-0 w-100">
            <div class="col-12 m-0 p-0 w-100">
                <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                    <p class="text-title text-capitalize lh-sm my-0 py-0">{{ translate("Lokasi BAPPEDA Provinsi Kalimantan Timur") }}</p>
                    <hr class="hr-title-black flex-grow-1 mx-3">
                </div>
                <div class="maps-content ">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d484.5116310768901!2d117.15023381229987!3d-0.4917341374364053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f9e3a5b4857%3A0x1095dd7216e92f7e!2sBappeda%20Kaltim!5e0!3m2!1sen!2sid!4v1699926426178!5m2!1sen!2sid"
                    width="1240"
                    height="450"
                    allowfullscreen=""
                    loading="lazy"
                    class="location"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!---------- Maps End -------------->
<!---------------------------------->


<!---------------------------------->
<!---------- Instagram ------------->
<!---------------------------------->
<div class="container custom-container mb-5">
    <iframe src='https://widgets.sociablekit.com/instagram-feed/iframe/25510593' frameborder='0' width='100%' height='700'></iframe>
</div>
{{-- <script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="container custom-container">
    <div class="elfsight-app-217a6d6a-9059-4d8e-8ffa-d566a5d0bdbd" data-elfsight-app-lazy></div>
</div> --}}
<!---------------------------------->
<!-------- Instagram End ----------->
<!---------------------------------->

<!---------------------------------->
<!----------- Youtube -------------->
<!---------------------------------->
<section class="youtube-section position-relative d-flex justify-content-center py-5">
    <div class="container custom-container ">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12">
                <div class="video-container mx-0 p-3">
                    <!-- Video iframe will dynamically load here -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 d-flex flex-column align-items-start">
                <div class="subscriber-container d-flex align-items-center">
                    <img src="https://yt3.ggpht.com/QGy7EQetWM80rBfAZKnggapwsYhp_DO5v74_VfzYn_ayBAWWVXKa7YBV1jfvSJHsSsjRZ7yNlYo=s176-c-k-c0x00ffffff-no-rj-mo" alt="youtube image">
                    <div class="subscriber-content d-flex flex-column align-items-start mx-3">
                        <p class="name text-white">Bappeda Kaltim</p>
                        <p class="subscribers text-white">@bappedakaltim1650 • 29 Subscribers</p>
                    </div>
                </div>
                <h4 class="text-connect-youtube text-white fw-bold mx-0 mt-3 p-0">{{ translate('Terhubung dengan Bappeda Provinsi Kalimantan Timur') }}</h4>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- Swiper Youtube Carousel -->
                <div class="swiper swiper-youtube" id="swiper-youtube">
                    <div class="swiper-wrapper swiper-youtube-wrapper" id="swiper-youtube-wrapper">
                    </div>
                    <!-- Swiper navigation buttons -->
                </div>
            </div>
        </div>
    </div>
</section>

@push('front_js')
<script src="https://cdn.jsdelivr.net/npm/date-fns@3.6.0/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/date-fns@3.6.0/locale/es/cdn.min.js"></script>

<script type="text/javascript">
   document.addEventListener('DOMContentLoaded', () => {
    const { format, addDays, startOfMonth, endOfMonth } = dateFns;

    // Fungsi untuk memperbarui teks bulan
    const updateMonth = (currentDate) => {
        const monthElement = document.querySelector(".text-month");
        if (!monthElement) return;

        const formattedMonth = format(new Date(currentDate), 'MMMM yyyy');
        monthElement.textContent = formattedMonth;
    };

    // Membuat array tanggal dari awal hingga akhir bulan
    const createDatesArrayToEndOfThisMonth = () => {
        const dates = [];
        const today = new Date();
        const startOfThisMonth = startOfMonth(today);
        const endOfThisMonth = endOfMonth(today);

        let currentDate = new Date(startOfThisMonth);

        while (currentDate <= endOfThisMonth) {
            dates.push(new Date(currentDate));
            currentDate = addDays(currentDate, 1);
        }

        return dates;
    };

    // Merender tanggal ke dalam Swiper
    const renderDates = (dates) => {
        const swiperWrapper = document.querySelector(".swiper-date-wrapper");

        if (!swiperWrapper) {
            console.error("Swiper wrapper tidak ditemukan di DOM.");
            return;
        }

        swiperWrapper.innerHTML = '';

        const today = format(new Date(), 'yyyy-MM-dd');
        let activeIndex = 0;

        dates.forEach((date, index) => {
            // make to indonesia
            const formattedDay = format(date, 'EEE').toLowerCase();
            const formattedDate = format(date, 'dd');
            const formattedFullDate = format(date, 'yyyy-MM-dd');

            const slideEl = document.createElement('div');
            slideEl.classList.add('swiper-slide', 'swiper-date-slide', 'py-2');
            slideEl.setAttribute('data-date', formattedFullDate);

            // Konten slide
            const content = `
                <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                    <p class="text-day text-uppercase mb-1 py-0">${formattedDay}</p>
                    <p class="text-date my-0 py-0">${formattedDate}</p>
                </div>
            `;
            slideEl.innerHTML = content;

            // Tandai slide aktif jika tanggal cocok dengan hari ini
            if (formattedFullDate === today) {
                slideEl.classList.add('active');
                fetchAgendaByDate(today);
                activeIndex = index;
            }

            // Event listener untuk klik
            slideEl.addEventListener('click', (e) => {
                const activeSlide = swiperWrapper.querySelector('.swiper-date-slide.active');
                if (activeSlide) activeSlide.classList.remove('active');

                slideEl.classList.add('active');

                const clickedDate = e.currentTarget.getAttribute('data-date');
                fetchAgendaByDate(clickedDate);

                updateMonth(clickedDate);
            });

            swiperWrapper.appendChild(slideEl);
        });

        return activeIndex; // Kembalikan index aktif
    };

    // Fungsi untuk mengambil data agenda berdasarkan tanggal
    const fetchAgendaByDate = (date) => {
        fetch(`/beranda/agendas/data?date=${date}`)
            .then((response) => response.json())
            .then((data) => {
                const agendaContainer = document.getElementById('detail-agenda');

                if (!agendaContainer) {
                    console.error('Agenda container tidak ditemukan di DOM.');
                    return;
                }

                agendaContainer.innerHTML = '';

                if (data.status === 'success') {
                    data.data.forEach((agenda) => {
                        const agendaEl = document.createElement('div');
                        agendaEl.classList.add('agenda-content');
                        agendaEl.innerHTML = `
                            <p class="title">${agenda.caption}</p>
                            <p class="location">${agenda.location}</p>
                            <div class="bottom-content d-flex align-items-center text-start gap-3 ">
                                <p class="time">${agenda.times}</p>
                                <p class="status text-capitalize">${agenda.dihadiri}</p>
                            </div>
                        `;
                        agendaContainer.appendChild(agendaEl);
                    });
                } else {
                    agendaContainer.innerHTML = `
                        <div class="card text-center card-sm">
                            <div class="card-body">
                                <p>${data.message}</p>
                            </div>
                        </div>
                    `;
                }
            })
            .catch((error) => {
                console.error(`Gagal memuat agenda untuk ${date}:`, error);

                const agendaContainer = document.getElementById('detail-agenda');
                if (agendaContainer) {
                    agendaContainer.innerHTML = `
                        <p class="no-agenda-message">Gagal memuat agenda untuk tanggal ini.</p>
                    `;
                }
            });
    };

    // Inisialisasi
    const dates = createDatesArrayToEndOfThisMonth();
    const activeIndex = renderDates(dates);

    const swiperDate = new Swiper(".swiper-date", {
        spaceBetween: 10,
        slidesPerView: 4,
        navigation: {
            nextEl: '.swiper-date-next',
            prevEl: '.swiper-date-prev',
        },
        loop: false,
        breakpoints: {
            640: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 6 },
        },
        on: {
            slideChange: () => {
                const activeSlide = document.querySelector(".swiper-date-slide.active");
                if (activeSlide) {
                    const currentDate = activeSlide.getAttribute("data-date");
                    updateMonth(currentDate);
                }
            },
        },
    });

    if (activeIndex !== undefined) {
        swiperDate.slideTo(activeIndex);
    }
});

</script>
<script type="text/javascript">
    // Use jQuery directly to avoid conflicts
    jQuery(document).ready(function () {
        const youtubeToken = "{{ env('YOUTUBE_API_KEY') }}";
        const youtubeChannelId = "UC5LF3CO4omiNMSrKOJUuXzQ";
        let isVideoPlaying = false;

        function fetchYouTubeData() {
            // Fetch and initialize data
            fetchChannelVideos();
        }

        function fetchChannelVideos() {
            jQuery.ajax({
                url: `https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=${youtubeChannelId}&maxResults=5&order=date&key=${youtubeToken}`,
                type: 'GET'
            })
            .done(function (data) {
                if (data.items) {
                    appendVideosToCarousel(data.items);
                    initializeSwiper();
                }
            })
            .fail(function (error) {
                console.error("Error fetching YouTube videos:", error);
            });
        }

        function appendVideosToCarousel(videos) {
            const carouselWrapper = document.getElementById('swiper-youtube-wrapper');
            carouselWrapper.innerHTML = ''; // Clear carousel slides before appending

            videos.forEach(video => {
                const slide = document.createElement('div');
                slide.classList.add('swiper-slide', 'swiper-youtube-slide', 'd-flex', 'flex-column', 'align-items-center', 'justify-content-center');
                slide.innerHTML = `
                    <a href="https://www.youtube.com/watch?v=${video.id.videoId}" target="_blank" style="text-decoration: none; list-style: none;">
                        <img src="${video.snippet.thumbnails.medium.url}" alt="${video.snippet.title}" class="video-thumbnail">
                        <p class="title-content text-white text-justify">${video.snippet.title}</p>
                    </a>
                `;
                carouselWrapper.appendChild(slide);
            });
        }

        let swiperInstance;

        function initializeSwiper() {
            const swiperWrapper = document.querySelector('#swiper-youtube .swiper-wrapper');
            const slides = swiperWrapper.querySelectorAll('.swiper-slide');

            // Check if the number of slides is insufficient for looping
            if (slides.length < 4) {
                // Duplicate slides to enable loop
                const duplicatesNeeded = 4 - slides.length;
                for (let i = 0; i < duplicatesNeeded; i++) {
                    const duplicateSlide = slides[i % slides.length].cloneNode(true);
                    swiperWrapper.appendChild(duplicateSlide);
                }
            }

            swiperInstance = new Swiper('#swiper-youtube', {
                spaceBetween: 10,
                slidesPerView: 4,
                mousewheel: {
                    forceToAxis: false,
                    releaseOnEdges: true,
                    sensitivity: 1,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                on: {
                    slideChange: function () {
                        if (isVideoPlaying) {
                            swiperInstance.autoplay.stop();
                        }
                        const activeSlide = swiperInstance.slides[swiperInstance.activeIndex];
                        // console.log(active);
                        const activeVideoLink = jQuery(activeSlide).find('a').attr('href');
                        const videoId = activeVideoLink.split('v=')[1];
                        updateVideoContainer(videoId);
                    },
                    touchStart: function () {
                        if (isVideoPlaying) {
                            swiperInstance.autoplay.stop(); // Stop autoplay on swipe start
                        }
                    },
                    touchEnd: function () {
                        if (!isVideoPlaying) {
                            swiperInstance.autoplay.start(); // Restart autoplay after swipe
                        }
                    }
                },
                // loop: true,
            });

            // Trigger video loading for the first slide on initialization
            const firstSlide = swiperInstance.slides[swiperInstance.activeIndex];
            const firstVideoLink = jQuery(firstSlide).find('a').attr('href');
            const firstVideoId = firstVideoLink.split('v=')[1];
            updateVideoContainer(firstVideoId);
        }

        function updateVideoContainer(videoId) {
            const videoContainer = jQuery('.video-container');
            videoContainer.html(`
                <iframe
                    id="youtube-video"
                    width="100%"
                    height="500"
                    src="https://www.youtube.com/embed/${videoId}?autoplay=1"
                    frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen >
                </iframe>
            `);

            // Mark the video as playing
            isVideoPlaying = true;

            // Add event listener to detect when the video is finished or paused
            const iframe = document.getElementById('youtube-video');
            iframe.addEventListener('pause', function() {
                isVideoPlaying = false;
                swiperInstance.autoplay.start(); // Resume autoplay when the video is paused
            });

            iframe.addEventListener('ended', function() {
                isVideoPlaying = false;
                swiperInstance.autoplay.start(); // Resume autoplay when the video ends
            });
        }

        fetchYouTubeData();
    });
</script>

@endpush
@endsection
