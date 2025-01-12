@extends('layouts.landing')

@section('content')
@push('front_css')
    <style>
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card-title h5 {
            font-size: 18px;
            font-weight: 600;
            margin-top: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #555;
        }
    </style>
@endpush

<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="/beranda" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">beranda</a>
            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">Arsip Postingan {{ $tahun }}</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">Arsip Postingan {{ $tahun }}</h4>
        </div>
    </div>
</section>

<section class="over-top-section post-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-md-6 align-self-center">
                <h4 class="fw-bold">Postingan {{ $tahun }}</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end gap-2">
                <label for="filter" class="align-self-center" style="font-size: 20px;">Filter Berdasarkan</label>
                <select name="filter" id="filter" class="form-control w-50">
                    <option value="oldest">Terlama</option>
                    <option value="newest">Terbaru</option>
                </select>
            </div>

            @forelse ($postArsip as $post)
            {{-- check category from post --}}
            @php
                $categoryName = $post->category->name;
                $routeName = $routeMap[$categoryName] ?? 'berita.show';
                $url = route($routeName, ['slug' => $post->slug]);
            @endphp
            <div class="col-md-4 m-1">
                <a href="{{ $url }}" class="text-decoration-none text-black">
                    <div class="card border-0 shadow-sm mb-3 card-hover">
                        <div class="card-body">
                            @php
                                $imageFilename = basename(str_replace('\\', '/', $post->image)); // Normalize slashes
                            @endphp
                            <img src="{{ asset('storage/post/' . $imageFilename) }}" alt="post-img" class="img-fluid w-100 mb-4" style="border-radius: 10px;">
                            <div class="card-title mt-4 mb-2">
                                <h6>{{ $post->title }}</h5>
                            </div>
                            <p class="card-text">
                                {!! Str::substr(strip_tags($post->description), 0, 100) !!}...
                            </p>
                            <div class="col-md-12 mt-4 d-flex align-items-center">
                                <a href="{{ $url }}" class="btn btn-primary btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-md-12 m-2 p-0">
                <div class="card border-0 shadow-sm mb-3 card-hover">
                    <div class="card-body text-center">
                        <h5 class="card-title">Oops</h5>
                        <p class="card-text">Tidak Ada Arsip Postingan Pada Tahun Yang Dipilih.</p>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection


