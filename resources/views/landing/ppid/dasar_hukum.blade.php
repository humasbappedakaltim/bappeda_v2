@extends('layouts.ppid')
@section('content')

 <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container m-0 px-4 py-0">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="index.html" class="breadcrumb-link text-decoration-none fw-500 m-0 p-0">Beranda</a>
                <i class="bi bi-chevron-right text-white m-0 p-0"></i>
                <p class="breadcrumb-active text-white fw-500 m-0 p-0">Dasar Hukum PPID BAPPEDA</p>
            </div>
            <div class="title-content">
                <h4 class="title fw-bold mb-3">
                    Dasar Hukum PPID BAPPEDA
                </h4>
                <p class="fs-8 text-white lh-sm">Dasar Hukum PPID BAPPEDA Provinsi Kalimantan Timur</p>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!----- End Breadcrumb Section ----->
    <!---------------------------------->

    <!---------------------------------->
    <!--------- Main Section ----------->
    <!---------------------------------->
    <section class="over-top-section ppid-dasar-hukum-section position-relative d-flex justify-content-center">
        <div class="container over-top-container m-0 p-4">
            <div class="row m-0 p-0">
                <div class="col-12 m-0 p-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="title text-uppercase fw-bold fs-5 lh-sm">Dasar Hukum PPID</h5>
                        <hr class="hr-title-black flex-grow-1 ms-3">
                    </div>
                </div>


                <div class="col-12">
                    @forelse ($dataCenter as $data)
                    <a href="{{ route('ppid.dasar_hukum_show', $data->slug) }}" target="__blank" class="row dasar-hukum-content text-decoration-none text-black mt-4 p-4">
                        <div class="about-content d-flex flex-column justify-content-between m-0 p-0">
                            <p class="category text-uppercase fs-8 fw-500 mb-2">
                                Dasar Hukum
                            </p>
                            <p class="title fw-bold text-capitalize lh-sm mb-2">
                                {{ $data->name }}
                            </p>
                            <div class="d-flex align-items-center mb-2">
                                <p class="date text-capitalize m-0 p-0">
                                    {{ \Carbon\Carbon::parse($data->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                                </p>
                                <p class="mx-2 m-0 p-0">|</p>
                                <p class="author text-capitalize m-0 p-0">
                                    {{ $data->user->name ?? 'Admin' }}
                                </p>
                            </div>
                        </div>
                    </a>
                    @empty
                    <a href="{{ route('ppid.index') }}" class="row dasar-hukum-content text-decoration-none text-black mt-4 p-4">
                        <div class="about-content d-flex flex-column justify-content-between m-0 p-0">
                            <p class="category text-uppercase fs-8 fw-500 mb-2 text-center">
                                Tidak Ada Data
                            </p>
                            <i class="bxs bx-close"></i>
                        </div>
                    </a>

                    @endforelse
                </div>
                <div class="col-md-12 mt-4" style="justify-content: center; display: flex;">
                    <ul class="pagination text-center">
                        {{ $dataCenter->links() }}
                    </ul>
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
@endsection
