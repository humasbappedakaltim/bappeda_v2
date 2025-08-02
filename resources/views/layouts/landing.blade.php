<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.landing.head')
</head>
<body>
    <!------------------------------>
    <!------- Header Start --------->
    <!------------------------------>
    @include('layouts.landing.header')


    <!------------------------------>
    <!------ Floating Socmed ------->
    <!------------------------------>
    <section class="floating-socmed position-fixed">
        <div class="mb-3 floating-items d-flex flex-column">
            <a href="https://www.facebook.com/mediapublikasi.bappeda.1?mibextid=ZbWKwL" target="_blank" class="mx-1 my-1">
                <i class="text-white bi bi-facebook"></i>
            </a>
            <a href="https://instagram.com/bappeda_kaltim" target="_blank" class="mx-1 my-1">
                <i class="text-white bi bi-instagram"></i>
            </a>
            <a href="https://x.com/bappedakaltim?s=21" target="_blank" class="mx-1 my-1">
                <i class="text-white bi bi-twitter-x"></i>
            </a>
            <a href="https://youtube.com/@bappedakaltim1650?si=UZ6Ey7dY5fiLsZei" target="_blank" class="mx-1 my-1">
                <i class="text-white bi bi-youtube"></i>
            </a>
            <a href="#" class="mx-1 my-1">
                <i class="text-white bi bi-whatsapp"></i>
            </a>
        </div>
        <!-- Swiper Floating Socmed -->
        <div class="swiper swiper-floating-socmed white-radius-hover" id="floating-socmed-toggle">
            <div class="swiper-wrapper swiper-floating-socmed-wrapper">
                <i class="text-white swiper-slide bi bi-x-circle swiper-x-slide"></i>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="text-white bi bi-facebook"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="text-white bi bi-instagram"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="text-white bi bi-twitter-x"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="text-white bi bi-youtube"></i>
                </div>
                <div class="swiper-slide swiper-floating-socmed-slide">
                    <i class="text-white bi bi-whatsapp"></i>
                </div>
            </div>
        </div>
        <!-- Swiper Floating Socmed End -->
    </section>
    <!------------------------------>
    <!---- Floating Socmed End ----->
    <!------------------------------>
    @yield('content')

    <section class="to-top-btn white-radius-hover position-fixed" id="to-top-btn">
        <i class="text-white bi bi-arrow-up-circle"></i>
    </section>


    @include('layouts.landing.footer')
    @include('layouts.landing.script')
</body>
</html>
