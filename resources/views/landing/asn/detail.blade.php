@extends('layouts.landing')

@section('content')
    <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>

                <i class="bi bi-chevron-right text-white my-0 py-0 m-0 p-0"></i>
            <a href="{{ route('landing.asn') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 my-0 py-0 m-0 p-0">{{ translate('ASN Bappeda') }}</a>
                <i class="bi bi-chevron-right text-white my-0 py-0 m-0 p-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 my-0 py-0 m-0 p-0">{{ $bidang->name }}</p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    {{ translate('Bidang') }} {{ $bidang->name }}
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
    <section class="over-top-section secretary position-relative d-flex justify-content-center my-0">
        <div class="container over-top-container px-0">
            <h4 class="text-title text-uppercase my-0 py-0">{{ $subBidang->name }}</h4>
            <hr class="hr-title-black flex-grow-1 mb-5">
            <div class="row">

                @forelse ($pejabat as $pejab)
                <div class="col-12 col-md-5 col-xl-4 mb-5">
                    <div class="asn-card-item position-relative d-flex align-items-end justify-content-center">
                        <div class="item-body position-relative text-center m-0 p-1 w-100">
                            <div class="img-container">
                                <img src="{{ asset('storage/pejabat/' . $pejab->foto) ?? '' }}" alt="img-asn">
                            </div>
                            <p class="asn-name fs-7 fw-bold lh-sm m-0 mb-3 p-0">
                                {{ $pejab->name }}

                            </p>
                            <div class="asn-rank-class d-flex flex-column align-items-center justify-content-center m-0 p-0 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('pangkat | golongan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{ $pejab->golongan }}
                                </p>
                            </div>
                            <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('jabatan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{ translate($pejab->jabatan)  }} / {{ translate($pejab->jabatan_lainnya ?? '-') }}
                                </p>
                            </div>
                            <div class="asn-team-leader d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('ketua tim') }}
                                </p>
                                @if($pejab->ketua_tim != null)

                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        {{ translate($pejab->ketua_tim) }}
                                </p>
                                @else
                                    -
                                @endif
                            </div>
                            <hr class="hr-title-black flex-grow-1 mx-5">
                        </div>
                    </div>
                </div>
                @empty

                @endforelse

            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->

@endsection


