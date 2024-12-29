@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="/beranda" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">beranda</a>

            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">struktur organisasi</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">
                Struktur organisasi
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section struktur-organisasi position-relative d-flex justify-content-center m-0 p-0">
    <div class="container over-top-container m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-12 img-container position-relative m-0 p-0">
                <img src="{{ asset('assets/images/Struktur Bappeda 1 Agustus 2024 Website.png') }}" alt="Image Struktur Organisasi">
            </div>
        </div>
    </div>
</section>
@endsection
