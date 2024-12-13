@extends('layouts.landing')

@section('content')
<!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="/" class="breadcrumb-link text-capitalize text-decoration-none fw-500 my-0 py-0 mx-0 px-0">beranda</a>
                <i class="bi bi-chevron-right text-white my-0 py-0 mx-0 px-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 my-0 py-0 mx-0 px-0">ASN bappeda</p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    ASN bappeda provinsi kalimantan timur
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
                <h5 class="title text-uppercase fw-bold fs-6">asn bappeda provinsi kalimantan timur</h5>
                <hr class="hr-title-black flex-grow-1 ms-3">
            </div>
            <div class="row m-0 p-0">
                <!-- <div class="col-12 bappeda-leader position-relative m-0 p-0 px-3 px-lg-0 mb-5 pb-4 pb-lg-0">
                    <div class="row m-0 p-3 w-100">
                        <div class="col-8 col-lg-4 m-0 p-0 mx-auto mb-5 mb-lg-0 d-flex justify-content-center position-relative">
                            <div class="img-container m-0 p-0">
                                <img src="https://bappeda.kaltimprov.go.id/storage/pejabats/October2023/YTKAg58kx91PtW1lmiIG.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 m-0 p-0 ps-0 ps-lg-5 mb-3">
                            <h3 class="name text-center text-lg-start lh-sm">Yusliando, ST</h3>
                            <h5 class="position text-uppercase fs-6 mb-5 lh-sm text-center text-lg-start">kepala badan perencanaan pembangunan daerah</h5>
                            <div class="nip border-bottom d-flex flex-md-row flex-column align-items-center justify-content-between pb-3 mb-4">
                                <p class="text-capitalize lh-sm m-0 p-0 mb-3 mb-md-0">nip</p>
                                <p class="text-grey lh-sm m-0 p-0">1967</p>
                            </div>
                            <div class="rank-class border-bottom d-flex flex-md-row flex-column align-items-center justify-content-between m-0 p-0 pb-3">
                                <p class="text-capitalize lh-sm m-0 p-0 mb-3 mb-md-0">pangkat | golongan</p>
                                <p class="text-grey lh-sm m-0 p-0">pembina utama muda (IV/C)</p>
                            </div>
                        </div>
                    </div>
                </div> -->
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
                                    pangkat | golongan
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{ $kepala->golongan }}
                                </p>
                            </div>
                            <div class="asn-position d-flex flex-column align-items-center justify-content-center border-top m-0 p-0 pt-3 pb-2 gap-2">
                                <p class="fs-8 text-capitalize lh-sm m-0 p-0">
                                    jabatan
                                </p>
                                <p class="text-grey fs-8 lh-sm m-0 p-0">
                                    {{ $kepala->jabatan }} {{ $kepala->jabatan_lainnya ?? '' }}
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
                            <a href="{{ route('landing.asn.sekretariat') }}" class="list-card text-decoration-none position-relative px-0">
                                <div class="abbr-title d-flex align-items-center justify-content-center pe-5">
                                    <p class="text-white text-uppercase fw-bold py-2 my-5">Sekretariat</p>
                                </div>
                                <div class="icon-content d-flex align-items-center justify-content-start m-0 px-3 gap-4">
                                    <div class="d-flex align-items-center justify-content-center ps-3 ps-md-2">
                                        <i class="bi bi-person-lines-fill text-white fs-3"></i>
                                    </div>
                                    <div class="detail-btn d-flex align-items-center justify-content-center w-100">
                                        <p class="text-center text-white text-uppercase fw-bold m-0 p-0">klik untuk detail</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6>Tidak Ada Data Bidang</h6>
                                </div>
                            </div>
                        </div>
                        @endforelse
                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <a href="asn-p2epd.html" class="list-card text-decoration-none position-relative px-0">
                                <div class="abbr-title d-flex align-items-center justify-content-center pe-5">
                                    <p class="text-white text-uppercase fw-bold py-2 my-5">p2epd</p>
                                </div>
                                <div class="icon-content d-flex align-items-center justify-content-start m-0 px-3 gap-4">
                                    <div class="d-flex align-items-center justify-content-center ps-3 ps-md-2">
                                        <i class="bi bi-pin-map-fill text-white fs-3"></i>
                                    </div>
                                    <div class="detail-btn d-flex align-items-center justify-content-center w-100">
                                        <p class="text-center text-white text-uppercase fw-bold m-0 p-0">klik untuk detail</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <a href="asn-psda.html" class="list-card text-decoration-none position-relative px-0">
                                <div class="abbr-title d-flex align-items-center justify-content-center pe-5">
                                    <p class="text-white text-uppercase fw-bold py-2 my-5">psda</p>
                                </div>
                                <div class="icon-content d-flex align-items-center justify-content-start m-0 px-3 gap-4">
                                    <div class="d-flex align-items-center justify-content-center ps-3 ps-md-2">
                                        <i class="bi bi-currency-exchange text-white fs-3"></i>
                                    </div>
                                    <div class="detail-btn d-flex align-items-center justify-content-start w-100">
                                        <p class="text-center text-white text-uppercase fw-bold m-0 p-0">klik untuk detail</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <a href="asn-infraswil.html" class="list-card text-decoration-none position-relative px-0">
                                <div class="abbr-title d-flex align-items-center justify-content-center pe-5">
                                    <p class="text-white text-uppercase fw-bold py-2 my-5">infraswil</p>
                                </div>
                                <div class="icon-content d-flex align-items-center justify-content-start m-0 px-3 gap-4">
                                    <div class="d-flex align-items-center justify-content-center ps-3 ps-md-2">
                                        <i class="bi bi-building-fill-gear text-white fs-3"></i>
                                    </div>
                                    <div class="detail-btn d-flex align-items-center justify-content-start w-100">
                                        <p class="text-center text-white text-uppercase fw-bold m-0 p-0">klik untuk detail</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4 mb-3">
                            <a href="asn-ppm.html" class="list-card text-decoration-none position-relative px-0">
                                <div class="abbr-title d-flex align-items-center justify-content-center pe-5">
                                    <p class="text-white text-uppercase fw-bold py-2 my-5">ppm</p>
                                </div>
                                <div class="icon-content d-flex align-items-center justify-content-start m-0 px-3 gap-4">
                                    <div class="d-flex align-items-center justify-content-center ps-3 ps-md-2">
                                        <i class="bi bi-people-fill text-white fs-3"></i>
                                    </div>
                                    <div class="detail-btn d-flex align-items-center justify-content-start w-100">
                                        <p class="text-center text-white text-uppercase fw-bold m-0 p-0">klik untuk detail</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->
@endsection
