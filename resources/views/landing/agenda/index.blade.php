
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Keseluruhan</title>
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
                    <a class="navbar-brand py-0" href="/"><img src="{{ asset('assets/images/logo-bappeda.png')}}" alt=""></a>
                </div>
                <div class="title-content">
                    <p class="text-title fw-500 m-0 p-0">Agenda</p>
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
                            <p class="text-title text-capitalize lh-sm my-0 py-0">Agenda {{ $title }}</p>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                        <!-- Swiper Present Agenda -->
                        <div class="swiper swiper-all-agenda" id="swiper-all-agenda">
                            <div class="swiper-wrapper all-agenda-wrapper">
                                @forelse ($agendas as $agenda)
                                    <div class="swiper-slide all-agenda-slide">
                                        <div class="list-content text-white fw-500 mb-3 p-3">
                                            <p class="lh-sm m-0 p-0">Agenda {{ $loop->iteration }}</p>
                                        </div>
                                        <div class="title-content fw-500 mb-4 px-3">
                                            <p class="lh-sm m-0 p-0">{{ $agenda->caption }}</p>
                                        </div>
                                        <div class="d-flex mb-4 px-3">
                                            <div class="time-content">
                                                <p class="text-black fw-500 fs-8 lh-sm mb-2 m-0 p-0">
                                                    Pukul
                                                </p>
                                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                                   {{ \Carbon\Carbon::parse($agenda->schedule)->locale('id')->translatedFormat('l, d F Y')}} {{ $agenda->times }}
                                                </p>
                                            </div>
                                            <div class="place-content ms-4">
                                                <p class="text-black fw-500 fs-8 lh-sm mb-2 m-0 p-0">
                                                    Tempat
                                                </p>
                                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                                    {{ $agenda->location }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="present-content mb-4 px-3">
                                            <p class="text-black fw-500 fs-8 lh-sm mb-2 m-0 p-0">
                                                Dihadiri Oleh
                                            </p>
                                            <p class="text-grey fs-8 lh-sm m-0 p-0">{{ $agenda->dihadiri }}</p>
                                        </div>
                                    </div>
                                @empty
                                    <div class="swiper-slide all-agenda-slide">
                                       <div class="card">
                                           <div class="card-body">
                                            <h2>Tidak Ada Agenda</h2>
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
                                            <p class="status text-success lh-sm m-0 p-0">Hadir</p>
                                            @elseif($pejabat->status_kehadiran == 'Tidak Hadir')
                                            <p class="status text-danger lh-sm m-0 p-0">Tidak Hadir</p>
                                            @elseif($pejabat->status_kehadiran == 'Dinas Luar')
                                            <p class="status text-warning lh-sm m-0 p-0">Dinas Luar</p>
                                            @elseif($pejabat->status_kehadiran == 'Tidak Ada Keterangan')
                                            <p class="status text-warning lh-sm m-0 p-0">Tidak Ada Keterangan</p>
                                            @elseif($pejabat->status_kehadiran == 'Cuti')
                                            <p class="status text-danger lh-sm m-0 p-0">Cuti</p>
                                            @elseif($pejabat->status_kehadiran == 'Tugas Luar Kantor')
                                            <p class="status text-warning lh-sm m-0 p-0">Tugas Luar Kantor</p>
                                            @endif

                                        </div>
                                    </div>
                                @empty
                                    <div class="swiper-slide present-agenda-slide">
                                       <div class="card">
                                           <div class="card-body">
                                            <h2>Tidak Ada Pejabat</h2>
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
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->

    <!------------------------------>
    <!------ Floating Socmed ------->
    <!------------------------------>
    <section class="floating-socmed position-fixed">
        <div class="floating-items d-flex flex-column mb-3">
            <a href="#" class="mx-1 my-1">
                <i class="bi bi-facebook text-white"></i>
            </a>
            <a href="#" class="mx-1 my-1">
                <i class="bi bi-instagram text-white"></i>
            </a>
            <a href="#" class="mx-1 my-1">
                <i class="bi bi-twitter-x text-white"></i>
            </a>
            <a href="#" class="mx-1 my-1">
                <i class="bi bi-youtube text-white"></i>
            </a>
            <a href="#" class="mx-1 my-1">
                <i class="bi bi-whatsapp text-white"></i>
            </a>
        </div>
        <!-- Swiper Floating Socmed -->
        <div class="swiper swiper-floating-socmed white-radius-hover" id="floating-socmed-toggle">
            <div class="swiper-wrapper swiper-floating-socmed-wrapper">
                <i class="swiper-slide bi bi-x-circle swiper-x-slide text-white"></i>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="bi bi-facebook text-white"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="bi bi-instagram text-white"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="bi bi-twitter-x text-white"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="bi bi-youtube text-white"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="bi bi-whatsapp text-white"></i>
                </div>
            </div>
        </div>
        <!-- Swiper Floating Socmed End -->
    </section>
    <!------------------------------>
    <!---- Floating Socmed End ----->
    <!------------------------------>

    <section class="to-top-btn white-radius-hover position-fixed">
        <i class="bi bi-arrow-up-circle text-white"></i>
    </section>

    <!---------------------------------->
    <!----------- Footer --------------->
    <!---------------------------------->
    <section class="footer-section position-relative d-none justify-content-center px-0 py-5">
        <div class="container footer-container m-0 p-0">
            <div class="container white-border-bottom d-flex align-items-center justify-content-center m-0 p-0 py-3">
                <div class="row m-0 p-0 w-100">
                    <div class="col-xl-5 col-12 m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-xl-12 col-sm-12 col-12 m-0 mb-4 p-0">
                                <div class="d-flex align-items-start justify-content-start gap-2 m-0 p-0">
                                    <i class="bi bi-geo-alt-fill text-white"></i>
                                    <div class="d-flex flex-column align-items-start justify-content-start">
                                        <p class="title-sm text-white fw-bold m-0 p-0 mb-2">Bappeda Kaltim</p>
                                        <p class="content text-white mb-0">Jl. Kesuma Bangsa No.2, Kel. Sungai Pinang Luar, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-sm-6 col-12 m-0 mb-4 p-0">
                                <div class="d-flex align-items-start justify-content-start gap-2">
                                    <i class="bi bi-envelope-open-fill text-white"></i>
                                    <div class="d-flex flex-column align-items-start justify-content-start">
                                        <p class="title-sm text-white fw-bold m-0 mb-3 p-0">Kontak</p>
                                        <div class="d-flex align-items-start justify-content-start gap-2">
                                            <i class="bi bi-telephone-fill text-white"></i>
                                            <p class="content text-white">0541 - 741044</p>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-start gap-2">
                                            <i class="bi bi-envelope-paper-fill text-white"></i>
                                            <p class="content text-white">0541 - 742283</p>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-start gap-2">
                                            <i class="bi bi-envelope-fill text-white"></i>
                                            <p class="content text-white mb-0">bappeda@kaltimprov.go.id</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-sm-6 col-12 m-0 mb-3 p-0">
                                <div class="socmed-container d-flex align-items-start justify-content-start gap-2 ms-auto">
                                    <i class="bi bi-dribbble text-white"></i>
                                    <div class="d-flex flex-column align-items-start justify-content-start">
                                        <p class="title-sm text-white fw-bold m-0 mb-3 p-0">Media Sosial</p>
                                        <div class="socmed d-flex align-items-start justify-content-start gap-2 w-100">
                                            <a href="#">
                                                <i class="bi bi-facebook text-white"></i>
                                            </a>
                                            <a href="#">
                                                <i class="bi bi-instagram text-white"></i>
                                            </a>
                                            <a href="#">
                                                <i class="bi bi-twitter-x text-white"></i>
                                            </a>
                                            <a href="#">
                                                <i class="bi bi-youtube text-white"></i>
                                            </a>
                                            <a href="#">
                                                <i class="bi bi-whatsapp text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 d-flex align-items-center">
                        <div class="row w-100 m-0">
                            <div class="col-6 border-left px-5 d-flex flex-column gap-1">
                                <p class="title-md text-white text-capitalize fw-bold mb-3">Pemerintah Daerah</p>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Pemprov Kaltim</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kota Samarinda</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kota Balikpapan</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kota Bontang</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kab. Paser</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kab. Kutai Kartanegara</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kab. Penajam</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kab. Berau</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kab. Kutai Timur</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappeda Kab. Kutai Barat</a>
                            </div>
                            <div class="col-6 border-left px-5 d-flex flex-column gap-1">
                                <p class="title-md text-white text-capitalize fw-bold mb-3">Instansi Terkait</p>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Presiden RI</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">DPR RI</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Kantor Staf Presiden RI</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Kemendagri RI</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Kemenkeu RI</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Kemenpan Pusat</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">Bappenas RI</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">BPS Pusat</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">BPS Kaltim</a>
                                <a href="#" class="content content-hover text-white text-decoration-none px-1 py-1">LKPP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container end-content m-0 p-0 mt-5">
                <div class="row m-0 p-0">
                    <div class="col-xl-3 col-md-6 m-0 p-0 d-flex align-items-start">
                        <a href="index.html" class="m-0 p-0 y-10">
                            <img src="{{ asset('assets/images/logo-bappeda.png')}}" class="m-0 p-0" alt="Logo Bappeda">
                        </a>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <p class="text-white text-center lh-sm">
                            Copyright © 2024 - All Rights Reserved Bappeda Prov. Kaltim
                        </p>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="visitors d-flex flex-column align-items-end">
                            <p class="text-white text-end lh-sm">Pengunjung tahun ini : 132508</p>
                            <p class="text-white text-end lh-sm">Pengunjung bulan ini : 14996</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!--------- Footer End ------------->
    <!---------------------------------->

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
