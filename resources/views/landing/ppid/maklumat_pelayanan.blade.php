@extends('layouts.ppid')

@section('content')

    <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center m-0 p-0">
        <div class="container custom-container m-0 p-0">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="/" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">beranda</a>
                <i class="bi bi-chevron-right text-white m-0 p-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">maklumat pelayanan ppid</p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    maklumat pelayanan ppid bappeda
                </h4>
                <p class="fs-8 text-white lh-sm">Maklumat Pelayanan PPID Bappeda Provinsi Kalimantan Timur</p>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!----- End Breadcrumb Section ----->
    <!---------------------------------->

    <!---------------------------------->
    <!--------- Main Section ----------->
    <!---------------------------------->
    <section class="over-top-section maklumat-pelayanan-ppid position-relative d-flex justify-content-center my-0">
        <div class="container over-top-container px-0">
            <div class="row mx-0">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="title text-uppercase fw-bold fs-6">Maklumat Pelayanan PPID</h5>
                        <hr class="hr-title-black flex-grow-1 ms-3">
                    </div>
                    <div class="img-container text-center mb-3">
                        <img src="{{ asset('assets/images/ppid/maklumat-pelayanan-ppid.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->



@endsection