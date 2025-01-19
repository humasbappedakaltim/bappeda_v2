@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>

            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">{{ translate('informasi prioritas') }}</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">
                {{ translate('informasi prioritas provinsi kalimantan timur tahun 2024') }}
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container px-0">
        <div class="row mx-0" style="height: max-content !important;">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="title text-uppercase fw-bold fs-6">{{ translate('informasi prioritas provinsi kalimantan timur tahun 2024') }}</h5>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>
                <div id="Iframe-Master-CC-and-Rs2" class="set-margin set-padding2 set-border set-box-shadow2 center-block-horiz2">
                    <div class="responsive-wrapper2 responsive-wrapper-wxh-572x6122" style="-webkit-overflow-scrolling: touch; overflow: auto;">
                      <iframe src="{{ asset('assets/pdf/informasiprioritas.pdf') }}#toolbar=0" style="width: 100%; height: 800px; border-radius: 10px;">
                            <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                            An &#105;frame should be displayed here but your browser version does not support &#105;frames. </em>Please update your browser to its most recent version and try again.</p>
                      </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

