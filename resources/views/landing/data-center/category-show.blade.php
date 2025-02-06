@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 my-0 py-0 mx-0 px-0">{{ translate('beranda') }}</a>
            <i class="bi bi-chevron-right text-white my-0 py-0 mx-0 px-0"></i>
            <a href="{{ route('data-center.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 my-0 py-0 mx-0 px-0">{{ translate('Data Center') }}</a>
            <i class="bi bi-chevron-right text-white my-0 py-0 mx-0 px-0"></i>
            <p class="breadcrumb-active text-white fw-500 my-0 py-0 mx-0 px-0">{{ translate($category->name) }}</p>
        </div>
        <div class="title-content">
            <h4 class="title fw-bold mb-3">
                {{ translate('Data Center') }} {{ translate($category->name) }}
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section dc-detail-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container m-0 p-0">
        <div class="title-content d-flex align-items-center justify-content-between mb-3">
            <p class="tagline text-uppercase fw-bold fs-4 py-0">{{ translate($category->name ?? '') }}</p>
            <hr class="hr-title-black flex-grow-1 ms-3">
        </div>
        <div class="row g-4 m-0 p-0 dc-document-list">
            @forelse($datas as $data)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="document-list-card position-relative text-decoration-none gap-2 p-3 pb-3">
                    <div class="img-container position-relative d-flex align-items-center justify-content-center w-100 mb-3 py-2">
                        @if($data->cover != null)
                        {{-- <img src="{{ asset('storage/data-center/cover/' . $data->cover) ?? asset('storage/data-center/' . $data->cover) }}" alt="" class="img-fluid"> --}}
                        <img id="coverImage" src="{{ asset('storage/data-center/cover/' . $data->cover) }}" alt="" class="img-fluid w-100">
                        @else
                        <img src="{{ asset('assets/images/pdf-file-format.png') }}" alt="">
                        @endif
                    </div>
                    <p class="list-category text-grey text-start fs-8 lh-sm m-0 mb-2 p-0 w-100">{{ translate($data->category->name ?? '-') }}</p>
                    <p class="list-title text-start fs-8 lh-sm m-0 mb-3 p-0 w-100">{{ translate($data->name) }}</p>
                    <div class="download-btn bappeda-primary-bg d-flex align-items-center float-end fs-7 m-0 mb-3 px-2 py-1 gap-2">
                        <i class="bi bi-cloud-arrow-down text-white"></i>
                        <a href="{{ route('data-center.category.download', $data->slug) }}" download="{{ $data->file }}" target="__blank" class="text-white text-decoration-none fw-500 lh-sm">{{ translate('Unduh') }}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12 mb-3 text-center">
                <div class="document-list-card position-relative text-decoration-none gap-2 p-3 pb-3">
                    <div class="img-container position-relative d-flex align-items-center justify-content-center w-100 mb-3 py-2">
                        <p>{{ translate('Tidak Ada Data') }}</p>
                    </div>
                    <a href="{{ route('data-center.index') }}" class="btn btn-primary">{{ translate('Kembali') }}</a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

@push('front_js')
    <script type="text/javascript">
         window.onload = function() {
            var img = document.getElementById('coverImage');
            img.onerror = function() {
                // If the image fails to load, switch to the fallback path
                img.src = "{{ asset('storage/data-center/' . $data->cover) }}";
            };
        }
    </script>
@endpush
@endsection


