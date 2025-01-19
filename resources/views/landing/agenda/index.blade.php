<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ translate('Agenda Keseluruhan') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconfont/tabler-icons.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- boostrap  icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
    <!------------------------------>
    <!------- Header Start --------->
    <!------------------------------>
    <header class="all-agenda-header position-fixed d-flex align-items-center justify-content-between px-xl-5 px-3 mx-0 w-100" id="agenda-header">
        <div class="container custom-container d-flex justify-content-between px-0">
            <nav class="navbar navbar-expand-xl py-0 d-flex justify-content-between w-100 mx-0 px-0">
                <div class="logo d-flex align-items-center">
                    <a class="navbar-brand py-0" href="{{ route('landing.index') }}"><img src="{{ asset('assets/images/logo-bappeda.png')}}" alt=""></a>
                </div>
                <div class="title-content">
                    <p class="text-title fw-500 m-0 p-0">{{ translate('Agenda') }}</p>
                </div>
            </nav>
        </div>
    </header>
    <!------------------------------>
    <!-------- Header End  --------->
    <!------------------------------>

    <!---------------------------------->
    <!--------- Main Section ----------->
    <!---------------------------------->
    <section class="all-agenda-section position-relative d-flex justify-content-center m-0 mt- p-0">
        <div class="container custom-container m-0 p-0">
                <div class="row m-0 p-0">
                    <div class="col-7">
                        <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                            <p class="text-title text-capitalize lh-sm my-0 py-0">{{ translate('Agenda') }} {{ $title }}</p>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                        <!-- Swiper Present Agenda -->
                        <div class="swiper swiper-all-agenda" id="swiper-all-agenda">
                            <div class="swiper-wrapper all-agenda-wrapper">
                                @forelse ($agendas as $agenda)
                                    <div class="swiper-slide all-agenda-slide">
                                        <div class="list-content text-white fw-500 mb-3 p-3">
                                            <p class="lh-sm m-0 p-0">{{ translate('Agenda') }} {{ $loop->iteration }}</p>
                                        </div>
                                        <div class="title-content fw-500 mb-4 px-3">
                                            <p class="lh-sm m-0 p-0">{{ translate($agenda->caption) }}</p>
                                        </div>
                                        <div class="d-flex mb-4 px-3">
                                            <div class="time-content">
                                                <p class="text-black fw-500 fs-8 lh-sm mb-2 m-0 p-0">
                                                    {{ translate('Pukul') }}
                                                </p>
                                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                                   {{ \Carbon\Carbon::parse($agenda->schedule)->locale(session('locale'))->translatedFormat('l, d F Y')}} {{ $agenda->times }}
                                                </p>
                                            </div>
                                            <div class="place-content ms-4">
                                                <p class="text-black fw-500 fs-8 lh-sm mb-2 m-0 p-0">
                                                    {{ translate('Tempat') }}
                                                </p>
                                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                                    {{ translate($agenda->locatio) }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="present-content mb-4 px-3">
                                            <p class="text-black fw-500 fs-8 lh-sm mb-2 m-0 p-0">
                                                {{ translate('Dihadiri Oleh') }}
                                            </p>
                                            <p class="text-grey fs-8 lh-sm m-0 p-0">{{ translate($agenda->dihadiri) }}</p>
                                        </div>
                                    </div>
                                @empty
                                    <div class="swiper-slide all-agenda-slide">
                                       <div class="card">
                                           <div class="card-body">
                                            <h2>{{ translate('Tidak Ada Agenda') }}</h2>
                                           </div>
                                       </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <!-- Swiper Present Agenda -->
                    </div>
                    <div class="col-5">
                        <!-- Swiper Present Agenda -->
                        <div class="swiper swiper-present-agenda" id="swiper-present-agenda">
                            <div class="swiper-wrapper present-agenda-wrapper">
                                @forelse($pejabats as $pejabat)
                                    <div class="swiper-slide present-agenda-slide d-flex gap-3 p-3">
                                        <div class="img-container">
                                            <img src="{{ asset('storage/pejabat/' . $pejabat->foto) }}" alt="">
                                        </div>
                                        <div class="about-container">
                                            <p class="name fw-500 lh-sm m-0 mb-2 p-0">
                                                {{ $pejabat->name  }}
                                            </p>
                                            <p class="position fw-light lh-sm m-0 mb-4 p-0">
                                                {{ $pejabat->jabatan }} / {{ $pejabat->jabatan_lainnya ?? '' }}
                                            </p>
                                            @if($pejabat->status_kehadiran == 'Hadir')
                                            <p class="status text-success lh-sm m-0 p-0">{{ translate('Hadir') }}</p>
                                            @elseif($pejabat->status_kehadiran == 'Tidak Hadir')
                                            <p class="status text-danger lh-sm m-0 p-0">{{ translate('Tidak Hadir') }}</p>
                                            @elseif($pejabat->status_kehadiran == 'Dinas Luar')
                                            <p class="status text-warning lh-sm m-0 p-0">{{ translate('Dinas Luar') }}</p>
                                            @elseif($pejabat->status_kehadiran == 'Tidak Ada Keterangan')
                                            <p class="status text-warning lh-sm m-0 p-0">{{ translate('Tidak Ada Keterangan') }}</p>
                                            @elseif($pejabat->status_kehadiran == 'Cuti')
                                            <p class="status text-danger lh-sm m-0 p-0">{{ translate('Cuti') }}</p>
                                            @elseif($pejabat->status_kehadiran == 'Tugas Luar Kantor')
                                            <p class="status text-warning lh-sm m-0 p-0">{{ translate('Tugas Luar Kantor') }}</p>
                                            @endif

                                        </div>
                                    </div>
                                @empty
                                    <div class="swiper-slide present-agenda-slide">
                                       <div class="card">
                                           <div class="card-body">
                                            <h2>{{ translate('Tidak Ada Pejabat') }}</h2>
                                           </div>
                                       </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <!-- Swiper Present Agenda -->
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/libs/OwlCarousel-2/dist/owl.carousel.min.js')}}"></script>

  <script>
      const swiperAllAgenda = new Swiper("#swiper-all-agenda", {
        spaceBetween: 15,
        slidesPerView: 'auto',
        direction: "vertical",
        mousewheel: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 800,
        effect: 'slide',
        transitionTimingFunction: 'ease-in-out',
    });

    setTimeout(() => {
        swiperAllAgenda.update();
    }, 100);
    var swiperPresentAgenda = new Swiper("#swiper-present-agenda", {
        spaceBetween: 15,
        slidesPerView: 'auto',
        direction: "vertical",
        mousewheel: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 800,
        effect: 'slide',
        transitionTimingFunction: 'ease-in-out',
    });

    setTimeout(() => {
        swiperPresentAgenda.update();
    }, 100);

</script

</body>
</html>
