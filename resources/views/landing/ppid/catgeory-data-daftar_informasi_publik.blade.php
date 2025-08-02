@extends('layouts.landing')
@push('front_css')
 <style>
        /* Perkecil padding kolom agar tidak memakan tempat */
        table.table td, table.table th {
            padding: 4px 6px !important;
            vertical-align: middle;
            text-align: center;
            /* border all */
            border: 2px solid #000;
            font-size: 12px;
        }

        .table .btn {
            font-size: 10px;
            height: 30px;
            padding: 5px !important;
        }
    </style>
@endpush
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="gap-2 mb-3 breadcrumb-container d-flex align-items-center fs-8">
            <a href="{{ route('landing.index') }}" class="px-0 py-0 mx-0 my-0 breadcrumb-link text-capitalize text-decoration-none fw-500">{{ translate('beranda') }}</a>
            <i class="px-0 py-0 mx-0 my-0 text-white bi bi-chevron-right"></i>
            <a href="{{ route('data-center.index') }}" class="px-0 py-0 mx-0 my-0 breadcrumb-link text-capitalize text-decoration-none fw-500">{{ translate('Data Center') }}</a>
            <i class="px-0 py-0 mx-0 my-0 text-white bi bi-chevron-right"></i>
            <p class="px-0 py-0 mx-0 my-0 text-white breadcrumb-active fw-500">{{ $slugText }}</p>
        </div>
        <div class="title-content">
            <h4 class="mb-3 title fw-bold">
                {{ translate('Data Center') }} - {{ $slugText }}
            </h4>
        </div>
    </div>
</section>

<section class="my-0 over-top-section dc-detail-section position-relative d-flex justify-content-center">
    <div class="container p-0 m-0 over-top-container">
        <div class="mb-3 title-content d-flex align-items-center justify-content-between">
            <p class="py-0 tagline text-uppercase fw-bold fs-4">{{ $slugText }}</p>
            <hr class="hr-title-black flex-grow-1 ms-3">
        </div>

        @if($datas->isNotEmpty())
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center">Cover</th>
                        <th rowspan="2" class="text-center">Jenis Informasi</th>
                        <th rowspan="2" class="text-center">Penanggung Jawab</th>
                        <th rowspan="2" class="text-center">Waktu & Tempat Pembuatan</th>
                        <th rowspan="2" class="text-center">Bentuk Informasi</th>
                        <th colspan="4" class="text-center">Kategori Informasi</th>
                        <th rowspan="2" class="text-center">Jangka Waktu Retensi Arsip</th>
                        <th rowspan="2" class="text-center">Unduh</th>
                    </tr>
                    <tr>
                        <th class="text-center">Wajib Berkala</th>
                        <th class="text-center">Wajib Serta Merta</th>
                        <th class="text-center">Wajib Disediakan</th>
                        <th class="text-center">Dikecualikan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td class="text-center">
                            <a href="{{ $data->cover ? asset('storage/data-center/cover/' . $data->cover) : '#' }}" target="_blank">
                                <img src="{{ $data->cover ? asset('storage/data-center/cover/' . $data->cover) : asset('assets/images/pdf-file-format.png') }}"
                                    onerror="this.onerror=null; this.src='{{ asset('assets/images/pdf-file-format.png') }}';"
                                    alt="cover" width="60">
                            </a>
                        </td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->penanggung_jawab ?? '-' }}</td>
                        <td>{{ $data->waktu_tempat_pembuatan ?? '-' }}</td>
                        <td>{{ $data->bentuk_informasi ?? '-' }}</td>
                        <td class="text-center">{{ $data->wajib_berkala ? '✔' : '-' }}</td>
                        <td class="text-center">{{ $data->wajib_serta_merta ? '✔' : '-' }}</td>
                        <td class="text-center">{{ $data->wajib_disediakan ? '✔' : '-' }}</td>
                        <td class="text-center">{{ $data->di_kecualikan ? '✔' : '-' }}</td>
                        <td>{{ $data->jangka_waktu ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('data-center.category.download', $data->slug) }}"
                               class="btn btn-primary" download>
                                <i class="bi bi-cloud-arrow-down"></i> Unduh
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="py-4 text-center">
            <p>{{ translate('Tidak Ada Data') }}</p>
            <a href="{{ route('data-center.index') }}" class="btn btn-primary">{{ translate('Kembali') }}</a>
        </div>
        @endif
    </div>
</section>
@endsection
