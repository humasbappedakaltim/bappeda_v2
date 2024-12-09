<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.landing.head')
</head>
<body>
    <!------------------------------>
    <!------- Header Start --------->
    <!------------------------------>
    @include('layouts.landing.ppid.header')


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
    @yield('content')


    @include('layouts.landing.footer')
    <script src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/libs/OwlCarousel-2/dist/owl.carousel.min.js')}}"></script>
        {{--     <script src="https://code.responsivevoice.org/responsivevoice.js?key=tPYP8BZ0"></script> --}}
    <script src="https://cdn.userway.org/widget.js')}}" data-account="mjiPcHFp7V"></script>
    {{-- <script src="{{ asset('assets/js/custom.js')}}"></script> --}}
    <script src="{{ asset('assets/js/main-header-ppid.js') }}"></script>
    @stack('front_js')
</body>
</html>
