@extends('layouts.landing')

@section('content')
<!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0"> {{ translate('beranda') }} </a>

                <i class="bi bi-chevron-right text-white my-0 py-0 mx-0 px-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 my-0 py-0 mx-0 px-0"> {{ translate('asn bappeda') }} </p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    {{ translate('asn bappeda provinsi kalimantan timur') }}
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
    <section class="over-top-section asn-bappeda-section position-relative d-flex justify-content-center m-0 p-0">
        <div class="container over-top-container m-0 p-0">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="title text-uppercase fw-bold fs-6"> {{ translate('asn bappeda') }} </h5>
                <hr class="hr-title-black flex-grow-1 ms-3">
            </div>
            <div class="row m-0 p-0">

                <div class="col-10 col-md-8 col-lg-6 col-xl-4 mx-auto">
                    <div class="asn-card-item position-relative d-flex align-items-end justify-content-center">
                        <div class="item-body position-relative text-center m-0 p-1 w-100">
                            <div class="img-container">
                                <img src="{{ asset('storage/pejabat/' . $kepala->foto) }}" alt="img-asn">
                            </div>
                            <p class="asn-name fs-7 fw-bold lh-sm m-0 mb-3 p-0">
                                {{ $kepala->name }}
                            </p>
                            <div class="asn-rank-class d-flex flex-column align-items-center justify-content-center m-0 p-0 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('pangkat') }} | {{ translate('golongan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{ $kepala->golongan }}
                                </p>
                            </div>
                            <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('jabatan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{-- {{ translate($kepala->jabatan) }} {{ translate($kepala->jabatan_lainnya) ??  '-' }} --}}
                                </p>
                            </div>
                            <div class="asn-team-leader d-flex flex-column align-items-center justify-content-center border-top m-0 mb-2 p-0 pt-2 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0"></p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0"></p>
                            </div>
                            <hr class="hr-title-black flex-grow-1 mx-5">
                        </div>
                    </div>
                </div>
                <div class="col-12 asn-list-position mt-5">
                    <div class="row g-3 d-flex align-items-center justify-content-center">
                        @forelse ($bidangs as $bidang)

                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <a href="{{ route('landing.asn.bidang', $bidang->name) }}" class="list-card text-decoration-none position-relative px-0">
                                <div class="abbr-title d-flex align-items-center justify-content-center pe-5">
                                    @php
                                        $name = explode(' ', $bidang->name)[count(explode(' ', $bidang->name)) - 1];
                                    @endphp
                                    {{-- remove () form name --}}
                                    <p class="text-white text-uppercase fw-bold py-2 my-5">{{ $name }}</p>
                                </div>
                                <div class="icon-content d-flex align-items-center justify-content-start m-0 px-3 gap-4">
                                    <div class="d-flex align-items-center justify-content-center ps-3 ps-md-2">
                                        <i class="bi bi-person-lines-fill text-white fs-3"></i>
                                    </div>
                                    <div class="detail-btn d-flex align-items-center justify-content-center w-100">
                                        <p class="text-center text-white text-uppercase fw-bold m-0 p-0">{{ translate('klik untuk detail') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6> {{ translate('tidak ada data bidang') }} </h6>
                                </div>
                            </div>
                        </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->
@endsection


