@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="gap-2 mb-3 breadcrumb-container d-flex align-items-center fs-8">
            <a href="{{ route('landing.index') }}" class="px-0 py-0 mx-0 my-0 breadcrumb-link text-capitalize text-decoration-none fw-500">{{ translate('beranda') }}</a>
            <i class="px-0 py-0 mx-0 my-0 text-white bi bi-chevron-right"></i>
            <a href="{{ route('data-center.index') }}" class="px-0 py-0 mx-0 my-0 breadcrumb-link text-capitalize text-decoration-none fw-500">{{ translate('Data Center') }}</a>
            <i class="px-0 py-0 mx-0 my-0 text-white bi bi-chevron-right"></i>
            <p class="px-0 py-0 mx-0 my-0 text-white breadcrumb-active fw-500">{{ translate($category->name) }}</p>
        </div>
        <div class="title-content">
            <h4 class="mb-3 title fw-bold">
                {{ translate('Data Center') }} {{ translate($category->name) }}
            </h4>
        </div>
    </div>
</section>
<section class="my-0 over-top-section dc-detail-section position-relative d-flex justify-content-center">
    <div class="container p-0 m-0 over-top-container">
        <div class="mb-3 title-content d-flex align-items-center justify-content-between">
            <p class="py-0 tagline text-uppercase fw-bold fs-4">{{ translate($category->name ?? '') }}</p>
            <hr class="hr-title-black flex-grow-1 ms-3">
        </div>
        <div class="p-0 m-0 row g-4 dc-document-list">
            @forelse($datas as $data)
            <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="gap-2 p-3 pb-3 document-list-card position-relative text-decoration-none">
                    <div class="py-2 mb-3 img-container position-relative d-flex align-items-center justify-content-center w-100">
                        @if($data->cover != null)
                        {{-- <img src="{{ asset('storage/data-center/cover/' . $data->cover) ?? asset('storage/data-center/' . $data->cover) }}" alt="" class="img-fluid"> --}}
                        <img id="coverImage" src="{{ asset('storage/data-center/cover/' . $data->cover) }}" alt="" class="img-fluid w-100">
                        @else
                        <img src="{{ asset('assets/images/pdf-file-format.png') }}" alt="">
                        @endif
                    </div>
                    <p class="p-0 m-0 mb-2 list-category text-grey text-start fs-8 lh-sm w-100">{{ translate($data->category->name ?? '-') }}</p>
                    <p class="p-0 m-0 mb-3 list-title text-start fs-8 lh-sm w-100">{{ translate($data->name) }}</p>
                    <div class="gap-2 px-2 py-1 m-0 mb-3 download-btn bappeda-primary-bg d-flex align-items-center float-end fs-7">
                        <i class="text-white bi bi-cloud-arrow-down"></i>
                        <a href="{{ route('data-center.category.download', $data->slug) }}" download="{{ $data->file }}" target="__blank" class="text-white text-decoration-none fw-500 lh-sm">{{ translate('Unduh') }}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="mb-3 text-center col-md-12">
                <div class="gap-2 p-3 pb-3 document-list-card position-relative text-decoration-none">
                    <div class="py-2 mb-3 img-container position-relative d-flex align-items-center justify-content-center w-100">
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
    {{-- <script type="text/javascript">
         window.onload = function() {
            var img = document.getElementById('coverImage');
            img.onerror = function() {
                // If the image fails to load, switch to the fallback path
                img.src = "{{ asset('storage/data-center/' . $data->cover) }}";
            };
        }
    </script> --}}
@endpush
@endsection


