@extends('layouts.dashboard')
@section('title','Tambah Data Center')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
@endpush
@section('content')
<h1 class="mb-3 h3">
    <strong>Tambah Data Center</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.data.center.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Kategori Data Center</label>
                                        <select name="category_data_center_id" id="category_data_center_id" class="form-control select2">
                                            <option value="">Pilih Kategori Data Center</option>
                                            @foreach ($categorys as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="file" class="form-label">File</label>
                                        <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ old('file') }}" >
                                        @error('file')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="category_information" class="form-label">Kategori Informasi</label>
                                        <select name="category_information" id="category_information" class="form-control select2">
                                            <option selected disabled>Pilih Kategori Informasi</option>
                                            <option value="infoberkala" {{ old('category_information') == 'infoberkala' ? 'selected' : '' }}>Info Berkala</option>
                                            <option value="infosertamerta" {{ old('category_information') == 'infosertamerta' ? 'selected' : '' }}>Info Serta Merta</option>
                                            <option value="infotersediasetiapsaat" {{ old('category_information') == 'infotersediasetiapsaat' ? 'selected' : '' }}>Info Tersedia Setiap Saat</option>
                                            <option value="maklumat" {{ old('category_information') == 'maklumat' ? 'selected' : '' }}>Maklumat</option>
                                            <option value="prosedurpermohonaninformasi" {{ old('category_information') == 'prosedurpermohonaninformasi' ? 'selected' : '' }}>Prosedur Permohonan Informasi</option>
                                            <option value="prosedurpengajuankeberatan" {{ old('category_information') == 'prosedurpengajuankeberatan' ? 'selected' : '' }}>Prosedur Pengajuan Keberatan</option>
                                            <option value="prosedursengketainformasi" {{ old('category_information') == 'prosedursengketainformasi' ? 'selected' : '' }}>Prosedur Sengketa Informasi</option>
                                            <option value="jalurwaktudanbiayalayanan" {{ old('category_information') == 'jalurwaktudanbiayalayanan' ? 'selected' : '' }}>Jalur, Waktu dan Biaya Layanan</option>
                                            <option value="laporanaksesinformasipublik" {{ old('category_information') == 'laporanaksesinformasipublik' ? 'selected' : '' }}>Laporan Akses Informasi Publik</option>
                                            <option value="laporanlayananinformasipublik" {{ old('category_information') == 'laporanlayananinformasipublik' ? 'selected' : '' }}>Laporan Layanan Informasi Publik</option>
                                            <option value="laporansurveilayananinformasi" {{ old('category_information') == 'laporansurveilayananinformasi' ? 'selected' : '' }}>Laporan Survei Layanan Informasi</option>
                                            <option value="laporanrealisasianggaran" {{ old('category_information') == 'laporanrealisasianggaran' ? 'selected' : '' }}>Laporan Realisasi Anggaran</option>
                                        </select>
                                        @error('category_information')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="file_cover" class="form-label">Cover</label>
                                        <input type="file"
                                                class="form-control @error('file_cover') is-invalid @enderror"
                                                id="image"
                                                name="file_cover"
                                                accept="image/*"
                                                onchange="previewImage(event)">
                                        @error('file_cover')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="mt-2 text-center col-md-12">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src=""
                                             id="output"
                                             class="mb-3 img-preview img-fluid"
                                             style="border-radius: 10px; max-width: 100%; height: auto; display: none;">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="order" class="form-label">Posisi</label>
                                        <input type="text" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order') }}">
                                        @error('order')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.data.center.index') }}" class="btn btn-danger">Kembali</a>
                                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@endpush
@endsection

