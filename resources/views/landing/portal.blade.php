
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bappeda Kaltim</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="shortcut icon" href="{{ asset('asset_dashboard/img/photos/logo_head.png') }}" />


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/iconfont/tabler-icons.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- boostrap  icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">


</head>
<body>
    <section class="container-fluid portal-section position-relative m-0 p-0">
        <div class="container portal-container position-relative p-4">
            <div class="title-section position-relative mx-auto mb-lg-5 mb-3">
                <div class="row m-0 p-0">
                    <div class="col-12">
                        <img src="assets/images/kaltim-logo.png" alt="">
                    </div>
                    <div class="col-12">
                        <p class="greeting text-white text-center fw-500 lh-sm mb-2 m-0 p-0">
                            Selamat Datang
                        </p>
                        <p class="bappeda text-center fw-500 lh-sm mb-1 m-0 p-0">
                            Badan Perencanaan Pembangunan Daerah
                        </p>
                        <p class="province text-center lh-sm m-0 p-0">
                            Pemerintah Provinsi Kalimantan Timur
                        </p>

                    </div>
                </div>
            </div>
            <div class="menu-section position-relative m-0 p-0">
                <div class="row g-4 m-0 p-0">
                    <a href="{{ route('ppid.index') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="d-flex align-items-center justify-content-center text-uppercase text-white text-center lh-sm fw-500">
                            ppid
                        </p>
                    </a>
                    <a href="{{ route('landing.index') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="d-flex align-items-center justify-content-center text-uppercase text-white text-center lh-sm fw-500">
                            website
                        </p>
                    </a>
                    <a href="{{ url('https://sidilan.bappedakaltim.com') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="d-flex align-items-center justify-content-center text-uppercase text-white text-center lh-sm fw-500">
                            smart-spj
                        </p>
                    </a>
                    <a href="{{ url('https://evdoren.kaltimprov.go.id') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="d-flex align-items-center justify-content-center text-uppercase text-white text-center lh-sm fw-500">
                            evdoren
                        </p>
                    </a>
                    <a href="{{ url('https://www.lapor.go.id') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="d-flex align-items-center justify-content-center text-uppercase text-white text-center lh-sm fw-500">
                            sp4n lapor
                        </p>
                    </a>
                    <a href="{{ route('landing.survei') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="d-flex align-items-center justify-content-center text-uppercase text-white text-center lh-sm fw-500">
                            survei kepuasan masyarakat
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>



</body>
</html>
