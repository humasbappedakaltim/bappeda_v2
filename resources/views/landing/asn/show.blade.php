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
            <h4 class="text-title text-uppercase my-0 py-0">{{ translate('bidang') }} {{ translate($bidang->name) }}</h4>
            <hr class="hr-title-black flex-grow-1 mb-5">
            <div class="row">
                @if($bidang->name == 'Sekretariat')
                <div class="col-4 mx-auto mb-5">
                    <div class="asn-card-item position-relative d-flex align-items-end justify-content-center">
                        <div class="item-body position-relative text-center m-0 p-1">
                            <div class="img-container">
                                <img src="{{ asset('storage/pejabat/' . $pejabat->first()->foto) }}" alt="img-asn">
                            </div>
                            <p class="asn-name fs-7 fw-bold lh-sm m-0 mb-3 p-0">
                                {{ $pejabat->first()->name }}
                            </p>
                            <div class="asn-rank-class d-flex flex-column align-items-center justify-content-center m-0 p-0 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('pangkat | golongan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{ $pejabat->first()->golongan }}
                                </p>
                            </div>
                            <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('jabatan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        @foreach ($pejabat->first()->bidangs as $bidang)
                                            @if($pejabat->first()->bidangs->count() > 1)
                                                {{ translate($bidang->name) }} /
                                            @else
                                                {{ translate($bidang->name) }}
                                            @endif
                                        @endforeach
                                        {{ translate($pejabat->first()->jabatan_lainnya ??  '-' ) }}
                                    </p>
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
                        @forelse ($subBidangs as $sub)
                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <a href="{{ route('landing.asn.bidang.subBidang', [$bidang->first()->name, $sub->name]) }}" class="list-card text-decoration-none position-relative px-0">
                                <div class="abbr-title d-flex align-items-center justify-content-center pe-5">
                                    @php
                                        $name = explode(' ', $sub->name)[count(explode(' ', $sub->name)) - 1];
                                    @endphp
                                    <p class="text-white text-uppercase fw-bold py-2 my-5">{{ translate($name) }}</p>
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

                        @endforelse
                    </div>
                </div>
                @else

                @if($ketuaTim != null)
                <div class="col-12 col-md-5 col-xl-4 mb-5">
                    <div class="asn-card-item position-relative d-flex align-items-end justify-content-center">
                        <div class="item-body position-relative text-center m-0 p-1 w-100">
                            <div class="img-container">
                                <img src="{{ asset('storage/pejabat/' . $ketuaTim->foto) ?? '' }}" alt="img-asn">
                            </div>
                            <p class="asn-name fs-7 fw-bold lh-sm m-0 mb-3 p-0">
                                {{ $ketuaTim->name }}

                            </p>
                            <div class="asn-rank-class d-flex flex-column align-items-center justify-content-center m-0 p-0 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('pangkat | golongan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{ $ketuaTim->golongan }}
                                </p>
                            </div>
                            <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('jabatan') }}
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    @foreach ($ketuaTim->first()->bidangs as $bidang)
                                    @if($ketuaTim->first()->bidangs->count() > 1)
                                        {{ translate($bidang->name) }} /
                                    @else
                                        {{ translate($bidang->name) }}
                                    @endif
                                @endforeach
                                {{ translate($ketuaTim->first()->jabatan_lainnya ??  '-' ) }}
                                </p>
                            </div>
                            <div class="asn-team-leader d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    {{ translate('ketua tim') }}
                                </p>
                                @if($ketuaTim->ketua_tim != null)

                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        {{ translate($ketuaTim->ketua_tim) }}
                                </p>
                                @else
                                    -
                                @endif
                            </div>
                            <hr class="hr-title-black flex-grow-1 mx-5">
                        </div>
                    </div>
                </div>
                @endif
                {{-- @empty

                @endforelse --}}

                @if($struktural->count() > 0)
                    <div class="col-12 m-0 p-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="title text-uppercase fw-bold fs-5">Struktural
                            </h5>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                    </div>
                    @forelse($struktural as $pejab)
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
                                        @foreach ($pejab->bidangs as $item)
                                        @if($pejab->bidangs->count() > 1)
                                            {{ translate($item->name) }} /
                                        @else
                                            {{ translate($item->name) }}
                                        @endif
                                    @endforeach
                                    {{ translate($pejab->first()->jabatan_lainnya ??  '-' ) }}
                                    </p>
                                </div>
                                @if($pejab->sub_bidangs->count() > 0)
                                <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                    <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                        {{ translate('sub bidang') }}
                                    </p>
                                    <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        @foreach ($pejab->sub_bidangs as $item)
                                            @if($pejab->sub_bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                                @endif
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
                @endif

                @if($fungsional->count() > 0)
                    <div class="col-12 m-0 p-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="title text-uppercase fw-bold fs-5">Fungsional
                            </h5>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                    </div>
                    @forelse($fungsional as $pejab)
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
                                        @foreach ($pejab->bidangs as $item)
                                            @if($pejab->bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    {{ translate($pejab->first()->jabatan_lainnya ??  '-' ) }}
                                    </p>
                                </div>
                                @if($pejab->sub_bidangs->count() > 0)
                                <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                    <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                        {{ translate('sub bidang') }}
                                    </p>
                                    <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        @foreach ($pejab->sub_bidangs as $item)
                                            @if($pejab->sub_bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                                @endif
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
                @endif
                @if($pelaksana->count() > 0)
                    <div class="col-12 m-0 p-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="title text-uppercase fw-bold fs-5">Pelaksana
                            </h5>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                    </div>
                    @forelse($pelaksana as $pejab)
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
                                        @foreach ($pejab->bidangs as $item)
                                            @if($pejab->bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    {{ translate($pejab->first()->jabatan_lainnya ??  '-' ) }}
                                    </p>
                                </div>
                                @if($pejab->sub_bidangs->count() > 0)
                                <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                    <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                        {{ translate('sub bidang') }}
                                    </p>
                                    <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        @foreach ($pejab->sub_bidangs as $item)
                                            @if($pejab->sub_bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                                @endif
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
                @endif
                @if($pppk->count() > 0)
                    @forelse($pppk as $pejab)
                    <div class="col-12 m-0 p-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="title text-uppercase fw-bold fs-5">PPPK
                            </h5>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                    </div>
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
                                        @foreach ($pejab->bidangs as $item)
                                            @if($pejab->bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    {{ translate($pejab->first()->jabatan_lainnya ??  '-' ) }}
                                    </p>
                                </div>
                                @if($pejab->sub_bidangs->count() > 0)
                                <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                    <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                        {{ translate('sub bidang') }}
                                    </p>
                                    <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        @foreach ($pejab->sub_bidangs as $item)
                                            @if($pejab->sub_bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                                @endif
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
                @endif
                @if($nonAsn->count() > 0)
                    <div class="col-12 m-0 p-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="title text-uppercase fw-bold fs-5">Non ASN
                            </h5>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                    </div>
                    @forelse($nonAsn as $pejab)
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
                                        @foreach ($pejab->bidangs as $item)
                                            @if($pejab->bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    {{ translate($pejab->first()->jabatan_lainnya ??  '-' ) }}
                                    </p>
                                </div>
                                @if($pejab->sub_bidangs->count() > 0)
                                <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                    <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                        {{ translate('sub bidang') }}
                                    </p>
                                    <p class="text-grey fs-8 lh-sm m-0 p-0">
                                        @foreach ($pejab->sub_bidangs as $item)
                                            @if($pejab->sub_bidangs->count() > 1)
                                                {{ translate($item->name) }} /
                                            @else
                                                {{ translate($item->name) }}
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                                @endif
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
                @endif

                @endif
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->
@endsection

