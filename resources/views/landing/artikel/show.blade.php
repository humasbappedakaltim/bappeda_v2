@extends('layouts.landing')

@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="/" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">beranda</a>
            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <a href="{{ route('artikel.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">artikel</a>
            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">detail artikel</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">
                detail artikel {{ $postNew->title }}
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section post-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container m-0 p-0">
        @include('landing.side.heade')
        <div class="row m-0 p-0">
            <div class="col-12 col-lg-7 order-1 m-0 mb-5 p-0">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <div class="detail-post-container position-relative m-0 p-0">
                            <div class="img-container position-relative mb-4">
                                <img src="{{ asset('storage/post/' .$postNew->image) }}" alt="post-img">
                            </div>
                            <div class="row about-content align-items-center d-flex m-0 mb-3 p-0">
                                <div class="col-6 mb-2 m-0 p-0">
                                    <div class="d-flex align-items-start justify-content-start gap-2">
                                        <i class="bi bi-calendar2-week"></i>
                                        <p class="fs-9 lh-sm m-0 p-0">
                                            {{ \Carbon\Carbon::parse($postNew->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 mb-2 m-0 p-0">
                                    <div class="d-flex align-items-start justify-content-end gap-2">
                                        <i class="bi bi-person"></i>
                                        <p class="fs-9 lh-sm m-0 p-0">{{ $postNew->user->name }}</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-2 m-0 p-0">
                                    <div class="d-flex align-items-start justify-content-start gap-2">
                                        <i class="bi bi-folder"></i>
                                        <p class="fs-9 lh-sm m-0 p-0">{{ $postNew->category->name }}</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-2 m-0 p-0">
                                    <div class="d-flex align-items-start justify-content-end gap-2">
                                        <i class="bi bi-eye"></i>
                                        <p class="fs-9 lh-sm m-0 p-0">{{ $postNew->views }} kali dilihat</p>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-4 lh-sm fw-500 mb-4">
                                {{ $postNew->title }}
                            </p>
                            <p class="text-justify fs-8 fw-light lh-sm mb-4">
                                {!! $postNew->description !!}
                            </p>


                        </div>
                    </div>
                </div>
            </div>
            @include('landing.side.index')
            <div class="col-12 m-0 mb-5 p-0 order-2 order-lg-3 detail-post-documentary">
                <div class="row g-3">
                    @if($postNew->extra_photo != null)
                    @php
                        $extra_photos = explode(',', $postNew->extra_photo);
                    @endphp
                    @foreach ($extra_photos as $key => $extra_photo)
                        <div class="col-3">
                            <div class="img-container">
                                <img src="{{ asset('storage/post/extra/'. $extra_photo) }}" alt="">
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

