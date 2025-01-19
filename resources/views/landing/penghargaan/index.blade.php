@extends('layouts.landing')

@push('front_css')
<link href="https://cdn.jsdelivr.net/npm/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">

@endpush

@section('content')
    <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>

                <i class="bi bi-chevron-right text-white m-0 p-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">{{ translate('Penghargaan') }}</p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    {{ translate('Penghargaan') }}
                </h4>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!----- End Breadcrumb Section ----->
    <!---------------------------------->

    <!---------------------------------->
    <!--------- Main Section ----------->
    <!---------------------------------->
    <section class="over-top-section dc-section position-relative d-flex justify-content-center my-0">
        <div class="container over-top-container m-0 p-0">
            <div class="title-content d-flex align-items-center justify-content-between">
                <p class="tagline text-uppercase fw-bold fs-4 py-0">{{ translate('Penghargaan') }}</p>
                <hr class="hr-title-black flex-grow-1 ms-3">
            </div>
            <div class="row g-4 m-0 p-0 dc-document-list">
                @forelse ($penghargaan as $peng)
                <div class="col-3 mb-3">
                    <a href="{{ asset('storage/penghargaan/' . $peng->foto) }}" class="document-list-card text-decoration-none d-flex flex-column align-items-center gap-2 p-2"  data-lightbox="penghargaan" data-title="{{ $peng->title }}">
                        <div class="img-container position-relative d-flex align-items-center justify-content-center w-100">
                            <img src="{{ asset('storage/penghargaan/' . $peng->foto) }}" alt="">
                        </div>
                        <p class="list-title text-black text-start fs-8 lh-sm m-0 p-0">{{ translate($peng->title) }}</p>
                    </a>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->

    @push('front_js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js"></script>
    @endpush
@endsection

