@extends('layouts.landing')
@section('content')

<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="index.html" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">beranda</a>
            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">Artikel</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">
                Artikel
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section post-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container m-0 p-0">
        <div class="post-category-container border-bottom mb-4 pb-3">
            <!-- Swiper -->
            <div class="swiper swiper-post-category" id="swiper-post-category">
                <div class="swiper-wrapper">
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0 active">
                        <a href="postingan-artikel.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Artikel
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-berita.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Berita Bappeda
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-informasi.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Informasi
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-kpk.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Kinerja Pembangunan Kaltim
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-berita-nasional.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Berita Nasional
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-social-media.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Social Media
                        </a>
                    </div>
                </div>
            </div>
            <!-- Swiper News Item End -->
        </div>
        <div class="row m-0 p-0">
            <div class="col-12 col-lg-7 m-0 mb-5 mb-lg-0 p-0">
                <div class="row m-0 p-0">
                    @forelse($artikels as $index => $artikel)
                    @if($index === 0)
                    <div class="col-12 m-0 p-0">
                        <div class="post-container position-relative m-0 p-0">
                            <div class="img-container position-relative">
                                <img src="{{ asset('storage/post/' . $artikel->image) }}" alt="post-img">
                            </div>
                            <div class="about-content p-3">
                                <p class="category text-white text-uppercase fs-8 fw-500 mb-2">
                                    {{ $artikels->first()->category->name }}
                                </p>
                                <p class="title text-white fw-bold text-capitalize mb-2">
                                    {{ $artikel->title }}
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <p class="date text-white text-capitalize m-0 p-0">
                                        {{ \Carbon\Carbon::parse($artikel->created_at)->locale('id')->translatedFormat('l, d F Y') }}

                                    </p>
                                    <p class="text-white mx-2 m-0 p-0">|</p>
                                    <p class="author text-white text-capitalize m-0 p-0">
                                        {{ $artikel->user->name }}
                                    </p>
                                </div>
                                <p class="description text-white">
                                    {!! Str::substr(strip_tags($artikel->description), 0, 300) !!} ....

                                </p>
                                <a href="{{ route('artikel.show', $artikel->slug . '.' . Str::slug($artikel->title)) }}" class="detail-post-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                    baca selengkapnya
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-12 m-0 p-0">
                        <a href="{{ route('artikel.show', $artikel->slug . '.' . Str::slug($artikel->title)) }}" class="row post-other-content text-decoration-none text-black mt-4 mx-0 p-0">
                            <div class="col-3 m-0 p-0">
                                <div class="img-container">
                                    <img src="{{ asset('storage/post/' . $artikel->image) }}" alt="post-img">
                                </div>
                            </div>
                            <div class="col-9 m-0 p-0 py-2 ps-3">
                                <div class="about-content d-flex flex-column justify-content-between m-0 p-0">
                                    <p class="category text-uppercase fs-8 fw-500 mb-2">
                                        {{ $artikel->category->name }}
                                    </p>
                                    <p class="title fw-bold text-capitalize mb-2">
                                        {{ $artikel->title }}
                                    </p>
                                    <div class="d-flex align-items-center mb-2">
                                        <p class="date text-capitalize m-0 p-0">
                                            {{ \Carbon\Carbon::parse($artikel->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                                        </p>
                                        <p class="mx-2 m-0 p-0">|</p>
                                        <p class="author text-capitalize m-0 p-0">
                                            {{ $artikel->user->name }}
                                        </p>
                                    </div>
                                    <p class="description m-0 p-0">
                                        {!! Str::substr(strip_tags($artikel->description), 0, 300) !!} ....
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @empty
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Tidak Ada Data Artikel</h5>
                        </div>
                    </div>
                    @endforelse

                </div>
            </div>
            @include('landing.side.index')
        </div>
    </div>
</section>
@endsection
