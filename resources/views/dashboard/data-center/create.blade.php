@extends('layouts.dashboard')
@section('title','Tambah Data Center')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
     <style>
        /* Perkecil padding kolom agar tidak memakan tempat */
        table.table td, table.table th {
            padding: 4px 6px !important;
            vertical-align: middle;
            text-align: center;
        }

        /* Perbesar checkbox tanpa memperlebar kolom */
        .custom-checkbox {
            transform: scale(1.5);
            cursor: pointer;
        }
    </style>
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
                                            <option value="daftar_informasi_publik" {{ old('category_information') == 'daftar_informasi_publik' ? 'selected' : '' }}>Daftar Informasi Publik</option>
                                            <option value="laporanaksesinformasipublik" {{ old('category_information') == 'laporanaksesinformasipublik' ? 'selected' : '' }}>Laporan Akses Informasi Publik</option>
                                            <option value="laporanlayananinformasipublik" {{ old('category_information') == 'laporanlayananinformasipublik' ? 'selected' : '' }}>Laporan Layanan Informasi Publik</option>
                                            <option value="laporansurveilayananinformasi" {{ old('category_information') == 'laporansurveilayananinformasi' ? 'selected' : '' }}>Laporan Survei Layanan Informasi</option>
                                            <option value="laporanrealisasianggaran" {{ old('category_information') == 'laporanrealisasianggaran' ? 'selected' : '' }}>Laporan Realisasi Anggaran</option>
                                        </select>
                                        @error('category_information')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-2 col-md-12 d-none" id="daftar_informasi_field">
                                            <div class="table-responsive" style="font-size: 10px;">
                                                <table class="table align-middle table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Penanggung Jawab</th>
                                                            <th rowspan="2">Waktu Dan Tempat Pembuatan Informasi</th>
                                                            <th rowspan="2">Bentuk Informasi Yang Tersedia</th>
                                                            <th colspan="4" class="text-center">Kategori Informasi</th>
                                                            <th rowspan="2">Jangka Waktu Penyimpanan Retensi Arsip</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Wajib Disediakan dan Diumumkan Berkala</th>
                                                            <th>Wajib Diumumkan Serta Merta</th>
                                                            <th>Wajib Disediakan Setiap Saat</th>
                                                            <th>Informasi yang Dikecualikan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" name="penanggung_jawab" value="{{ old('penanggung_jawab') }}" class="form-control"></td>
                                                            <td><input type="text" name="waktu_tempat_pembuatan" value="{{ old('waktu_tempat_pembuatan') }}" class="form-control"></td>
                                                            <td><input type="text" name="bentuk_informasi" value="{{ old('bentuk_informasi') }}" class="form-control"></td>
                                                            <!-- checkbox -->
                                                            <td class="text-center"><input type="checkbox" name="wajib_berkala" value="1" {{ old('wajib_berkala') == '1' ? 'checked' : '' }} class="form-check-input custom-checkbox"></td>
                                                            <td class="text-center"><input type="checkbox" name="wajib_serta_merta" value="1" {{ old('wajib_serta_merta') == '1' ? 'checked' : '' }} class="form-check-input custom-checkbox"></td>
                                                            <td class="text-center"><input type="checkbox" name="wajib_disediakan" value="1" {{ old('wajib_disediakan') == '1' ? 'checked' : '' }} class="form-check-input custom-checkbox"></td>
                                                            <td class="text-center"><input type="checkbox" name="di_kecualikan" value="1" {{ old('di_kecualikan') == '1' ? 'checked' : '' }} class="form-check-input custom-checkbox"></td>
                                                            <!-- checkbox -->
                                                            <td><input type="text" name="jangka_waktu" value="{{ old('jangka_waktu') }}" class="form-control"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
        $('#category_information').on('change', function (){
            const category_information = $(this).val();

            if(category_information === 'daftar_informasi_publik') {
                $('#daftar_informasi_field').removeClass('d-none');
            } else {
                $('#daftar_informasi_field').addClass('d-none');
            }
        });
    });
</script>
@endpush
@endsection

