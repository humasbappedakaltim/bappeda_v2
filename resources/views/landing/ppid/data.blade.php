@extends('layouts.ppid')
@section('content')
 <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center">
        <div class="container custom-container">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>

                <i class="bi bi-chevron-right text-white m-0 p-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">{{ translate('Data Standar Pelayanan') }}</p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    {{ translate('Data Standar Pelayanan') }}
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
    <section class="over-top-section dc-section position-relative d-flex justify-content-center my-0">
        <div class="container over-top-container m-0 p-0">
            <div class="title-content d-flex align-items-center justify-content-between">
                <p class="tagline text-uppercase fw-bold fs-4 py-0">{{ translate('Data Standar Pelayanan') }}</p>
                <hr class="hr-title-black flex-grow-1 ms-3">
            </div>
            <div class="row g-4 m-0 p-0 dc-document-list">
                @forelse ($categorys as $category)
                    <div class="col-3 mb-3">
                        <a href="{{ route('ppid.category.show', $category->slug) }}" class="document-list-card text-decoration-none d-flex align-items-center gap-2 p-2">
                            <i class="bi bi-journal-bookmark bappeda-primary-color fs-3"></i>
                            <p class="bappeda-primary-color fs-7 lh-sm m-0 p-0">{{ translate($category->name ?? '-') }}</p>
                        </a>
                    </div>
                @empty
                    <div class="col-md-12 mb-3 text-center">
                        <div class="document-list-card position-relative text-decoration-none gap-2 p-3 pb-3">
                            <div class="img-container position-relative d-flex align-items-center justify-content-center w-100 mb-3 py-2">
                                <p>{{ translate('Tidak Ada Data') }}</p>
                            </div>
                            <a href="{{ route('ppid.index') }}" class="btn btn-primary">{{ translate('Kembali') }}</a>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="col-md-12 mt-4" style="justify-content: center; display: flex;">
                <ul class="pagination text-center">
                    {{ $categorys->links() }}
                </ul>
            </div>

        </div>
    </section>
    <!---------------------------------->
    <!------- Main Section End --------->
    <!---------------------------------->

@endsection

