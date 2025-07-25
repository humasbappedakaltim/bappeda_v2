@extends('layouts.landing')
@section('content')
 <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container">
            <div class="gap-2 mb-3 breadcrumb-container d-flex align-items-center fs-8">
                <a href="{{ route('landing.index') }}" class="p-0 m-0 breadcrumb-link text-capitalize text-decoration-none fw-500">{{ translate('beranda') }}</a>

                <i class="p-0 m-0 text-white bi bi-chevron-right"></i>
                <p class="p-0 m-0 text-white breadcrumb-active text-capitalize fw-500">{{ translate('data Paparan') }}</p>
            </div>
            <div class="title-content">
                <h4 class="mb-3 title text-capitalize fw-bold">
                    {{ translate('data Paparan') }}
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
    <section class="my-0 over-top-section dc-section position-relative d-flex justify-content-center">
        <div class="container p-0 m-0 over-top-container">
            <div class="title-content d-flex align-items-center justify-content-between">
                <p class="py-0 tagline text-uppercase fw-bold fs-4">{{ translate('Data Paparan') }}</p>
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
               <div class="p-0 m-0 row g-4 dc-document-list" id="bidang-list">
                    @include('landing.data-center.materi-paparan.list-item', ['bidangs' => $bidangs])
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->
   @push('front_js')
    <script>
        $(document).ready(function () {
            $('#buttonSearch').on('click', function () {
                let search = $('#search').val();
                $.ajax({
                    url: "{{ route('materi_paparan.index') }}",
                    type: "GET",
                    data: {
                        search: search
                    },
                    success: function (data) {
                        if (search.length > 0) {
                            $('#bidang-list').html(data);
                        } else {
                            location.reload();
                        }
                    }
                });
            });

            $('#search').on('keyup', function () {
                let search = $(this).val();
                $.ajax({
                    url: "{{ route('materi_paparan.index') }}",
                    type: "GET",
                    data: {
                        search: search
                    },
                    success: function (data) {
                        if (search.length > 0) {
                            $('#bidang-list').html(data);
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


