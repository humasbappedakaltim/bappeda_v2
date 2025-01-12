@extends('layouts.landing')


@section('content')
@push('front_css')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .card-title h6 {
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
        <div class="row mb-4">
            <div class="col-md-6">
                <h4 class="fw-bold">Postingan {{ $tahun }}</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end gap-1">
                <label for="filter" class="align-self-center" style="font-size: 20px;">Filter Berdasarkan</label>
                <select id="filter" class="form-control w-50">
                    <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Terlama</option>
                    <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Terbaru</option>
                </select>
            </div>
        </div>

        <div class="row">
            @forelse ($postArsip as $post)
                @php
                    $categoryName = $post->category->name;
                    $routeName = $routeMap[$categoryName] ?? 'berita.show';
                    $url = route($routeName, ['slug' => $post->slug]);
                @endphp
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                    <a href="{{ $url }}" class="text-decoration-none text-black">
                        <div class="card border-0 shadow-sm card-hover p-3">
                            <img src="{{ asset('storage/post/' . basename($post->image)) }}" alt="post-img" class="img-fluid w-100" style="border-radius: 10px;">
                            <div class="mx-2 mt-4">
                                <h6 class="card-title">{{ $post->title }}</h6>
                                <p class="card-text"><i class="bi bi-calendar2-event"></i> {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('l, d F Y') }}</p>
                                <p><i class="bi bi-person"></i> {{ $post->user->name ?? 'Admin' }}</p>
                                <p><i class="bi bi-tag"></i> {{ $post->category->name }}</p>
                                <p class="card-text">{!! Str::limit(strip_tags($post->description), 100) !!}</p>

                                <div class="d-flex justify-content-center">
                                    <a href="{{ $url }}" class="btn btn-primary btn-sm mt-3"><i class="bi bi-eye"></i> Lihat</a>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5>Oops</h5>
                            <p>Tidak Ada Arsip Postingan Pada Tahun Yang Dipilih.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="col-12 mt-4">
            {{ $postArsip->appends(['order' => request('order')])->links() }}
        </div>
    </div>
</section>

@push('front_js')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script type="text/javascript">
        AOS.init();
        document.getElementById('filter').addEventListener('change', function () {
            const order = this.value;
            const url = new URL(window.location.href);
            url.searchParams.set('order', order);
            window.location.href = url.toString();
        });
    </script>
@endpush

@endsection
