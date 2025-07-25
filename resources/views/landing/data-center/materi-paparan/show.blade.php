@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="gap-2 mb-3 breadcrumb-container d-flex align-items-center fs-8">
            <a href="{{ route('landing.index') }}" class="px-0 py-0 mx-0 my-0 breadcrumb-link text-capitalize text-decoration-none fw-500">{{ translate('beranda') }}</a>
            <i class="px-0 py-0 mx-0 my-0 text-white bi bi-chevron-right"></i>
            <a href="{{ route('data-center.index') }}" class="px-0 py-0 mx-0 my-0 breadcrumb-link text-capitalize text-decoration-none fw-500">{{ translate('Data Center') }}</a>
            <i class="px-0 py-0 mx-0 my-0 text-white bi bi-chevron-right"></i>
            <p class="px-0 py-0 mx-0 my-0 text-white breadcrumb-active fw-500">{{ translate($slug ?? '') }}</p>
        </div>
        <div class="title-content">
            <h4 class="mb-3 title fw-bold">
                {{ translate('Data Paparan') }} {{ translate($slug ?? '') }}
            </h4>
        </div>
    </div>
</section>
<section class="my-0 over-top-section dc-detail-section position-relative d-flex justify-content-center">
    <div class="container p-0 m-0 over-top-container">
        <div class="mb-3 title-content d-flex align-items-center justify-content-between">
            <p class="py-0 tagline text-uppercase fw-bold fs-4">{{ translate($slug ?? '') }}</p>
            <hr class="hr-title-black flex-grow-1 ms-3">
        </div>
        <div class="p-0 m-0 row g-4 dc-document-list">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gap-2 input-group">
                                <input type="text" class="form-control" id="search" placeholder="Cari...." name="search" value="{{ request()->query('search') }}" style="border-radius: 10px; ">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="buttonSearch" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="p-0 m-0 row g-4 dc-document-list" id="materi-list">
                @include('landing.data-center.materi-paparan.show-item', ['materiPaparan' => $materiPaparan])
            </div>

        </div>
    </div>
</section>

 @push('front_js')
    <script>
        $(document).ready(function () {
            $('#buttonSearch').on('click', function () {
                let search = $('#search').val();
                $.ajax({
                    url: "{{ route('materi_paparan.show', $slug ?? '') }}",
                    type: "GET",
                    data: {
                        search: search
                    },
                    success: function (data) {
                        if (search.length > 0) {
                            $('#materi-list').html(data);
                        } else {
                            location.reload();
                        }
                    }
                });
            });

            $('#search').on('keyup', function () {
                let search = $(this).val();
                $.ajax({
                    url: "{{ route('materi_paparan.show', $slug ?? '') }}",
                    type: "GET",
                    data: {
                        search: search
                    },
                    success: function (data) {
                        if (search.length > 0) {
                            $('#materi-list').html(data);
                        } else {
                            location.reload();
                        }
                    }
                });
            });
        });
    </script>
    @endpush
@endsection


