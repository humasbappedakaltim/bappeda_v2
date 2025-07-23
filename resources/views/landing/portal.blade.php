
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
    <section class="p-0 m-0 container-fluid portal-section position-relative">
        <div class="container p-4 portal-container position-relative">
            <div class="mx-auto mb-3 title-section position-relative mb-lg-5">
                <div class="p-0 m-0 row">
                    <div class="col-12">
                        <img src="assets/images/kaltim-logo.png" alt="">
                    </div>
                    <div class="col-12">
                        <p class="p-0 m-0 mb-2 text-center text-white greeting fw-500 lh-sm">
                            Selamat Datang
                        </p>
                        <p class="p-0 m-0 mb-1 text-center bappeda fw-500 lh-sm">
                            Badan Perencanaan Pembangunan Daerah
                        </p>
                        <p class="p-0 m-0 text-center province lh-sm">
                            Pemerintah Provinsi Kalimantan Timur
                        </p>

                    </div>
                </div>
            </div>
            <div class="p-0 m-0 menu-section position-relative">
                <div class="p-0 m-0 row g-4">
                    <a href="{{ route('ppid.index') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="text-center text-white d-flex align-items-center justify-content-center text-uppercase lh-sm fw-500">
                            ppid
                        </p>
                    </a>
                    <a href="{{ route('landing.index') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="text-center text-white d-flex align-items-center justify-content-center text-uppercase lh-sm fw-500">
                            website
                        </p>
                    </a>
                    <a href="{{ url('https://bappeda.kaltimprov.go.id/smart-spj') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="text-center text-white d-flex align-items-center justify-content-center text-uppercase lh-sm fw-500">
                            smart-spj
                        </p>
                    </a>
                    <a href="{{ url('https://evdoren.kaltimprov.go.id') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="text-center text-white d-flex align-items-center justify-content-center text-uppercase lh-sm fw-500">
                            evdoren
                        </p>
                    </a>
                    <a href="{{ url('https://www.lapor.go.id') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="text-center text-white d-flex align-items-center justify-content-center text-uppercase lh-sm fw-500">
                            sp4n lapor
                        </p>
                    </a>
                    <a href="{{ route('landing.survei') }}" class="col-6 col-md-4 list-menu text-decoration-none">
                        <p class="text-center text-white d-flex align-items-center justify-content-center text-uppercase lh-sm fw-500">
                            survei kepuasan masyarakat
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>



</body>
</html>
