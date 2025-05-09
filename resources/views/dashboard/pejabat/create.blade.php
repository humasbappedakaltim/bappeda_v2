@extends('layouts.dashboard')
@section('title', 'Tambah Pegawai')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<h1 class="h3 mb-3">
    <strong>Tambah Pegawai</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.pejabat.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Name Input -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}">
                                        @error('nip')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="golongan" class="form-label">Golongan</label>
                                        <input type="text" class="form-control @error('golongan') is-invalid @enderror" id="golongan" name="golongan" value="{{ old('golongan') }}">
                                        @error('golongan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="kelas_jabatan" class="form-label">Kelas Jabatan</label>
                                        <input type="text" class="form-control @error('kelas_jabatan') is-invalid @enderror" id="kelas_jabatan" name="kelas_jabatan" value="{{ old('kelas_jabatan') }}">
                                        @error('kelas_jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
                                        @error('jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="jabatan_lainnya" class="form-label">Jabatan Lainnya</label>
                                        <input type="text" class="form-control @error('jabatan_lainnya') is-invalid @enderror" id="jabatan_lainnya" name="jabatan_lainnya" value="{{ old('jabatan_lainnya') }}">
                                        @error('jabatan_lainnya')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <!-- Bidang ID Input -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="bidang_id" class="form-label">Bidang</label>
                                        <select class="form-control @error('bidang_id') is-invalid @enderror select2" multiple id="bidang_id" name="bidang_id[]">
                                            <option selected >Pilih Bidang</option>
                                            @foreach ($bidangs as $bidang)
                                                <option value="{{ $bidang->id }}" {{ old('bidang_id') == $bidang->id ? 'selected' : '' }}>{{ $bidang->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('bidang_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Sub Bidang ID Input -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="sub_bidang_id" class="form-label">Sub Bidang</label>
                                        <select class="form-control @error('sub_bidang_id') is-invalid @enderror select_sub_bidang" multiple id="sub_bidang_id" name="sub_bidang_id[]">
                                            @foreach ($sub_bidangs as $sub)
                                                <option value="{{ $sub->id }}" {{ old('sub_bidang_id') == $sub->id ? 'selected' : '' }}>{{ $sub->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('sub_bidang_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status Jabatan Input -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="status_jabatan" class="form-label">Status Jabatan</label>
                                        <select name="status_jabatan" id="status_jabatan" class="form-control @error('status_jabatan') is-invalid @enderror">
                                            <option selected disabled>Pilih Status Jabatan</option>
                                            <option value="non-pajabat">Non Pejabat</option>
                                            <option value="pajabat">Pejabat</option>
                                        </select>
                                        @error('status_jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status Jabatan Penjabat Input -->
                                {{-- select pejabat structural fungsional --}}
                                {{-- select non-pejabat pelaksana pppk non-asn --}}
                                <div class="row mb-3 d-none" id="div_status_jabatan_penjabat">
                                    <div class="col-md-12">
                                        <label for="status_jabatan_penjabat" class="form-label">Status Jabatan Penjabat</label>
                                        <select name="status_jabatan_penjabat" id="status_jabatan_penjabat" class="form-control @error('status_jabatan_penjabat') is-invalid @enderror">
                                            <option selected disabled>Pilih Status Jabatan Penjabat</option>

                                        </select>
                                        @error('status_jabatan_penjabat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Ketua Tim Input -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="ketua_tim" class="form-label">Ketua Tim</label>
                                        <input type="text" class="form-control @error('ketua_tim') is-invalid @enderror" id="ketua_tim" name="ketua_tim" value="{{ old('ketua_tim') }}">
                                        @error('ketua_tim')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Urutan Jabatan Input -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="urutan_jabatan" class="form-label">Urutan Jabatan</label>
                                        <input type="text" class="form-control @error('urutan_jabatan') is-invalid @enderror" id="urutan_jabatan" name="urutan_jabatan" value="{{ old('urutan_jabatan') }}">
                                        @error('urutan_jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status Kehadiran Input -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="status_kehadiran" class="form-label">Status Kehadiran</label>
                                        <select name="status_kehadiran" id="status_kehadiran" class="form-control @error('status_kehadiran') is-invalid @enderror">
                                            <option selected disabled>Pilih Status Kehadiran</option>
                                            <option value="Hadir" {{ old('status_kehadiran') == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                            <option value="Tidak Hadir" {{ old('status_kehadiran') == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
                                            <option value="TidakPjeba Ada Keterangan" {{ old('status_kehadiran') == 'Tidak Ada Keterangan' ? 'selected' : '' }}>Tidak Ada Keterangan</option>
                                            <option value="Dinas Luar" {{ old('status_kehadiran') == 'Dinas Luar' ? 'selected' : '' }}>Dinas Luar</option>
                                            <option value="Tugas Luar Kantor" {{ old('status_kehadiran') == 'Tugas Luar Kantor' ? 'selected' : '' }}>Tugas Luar Kantor</option>
                                            <option value="Cuti" {{ old('status_kehadiran') == 'Cuti' ? 'selected' : '' }}>Cuti</option>
                                        </select>
                                        @error('status_kehadiran')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status Aktif Input -->
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="status_aktif" class="form-label">Status Aktif</label>
                                        <select class="form-control @error('status_aktif') is-invalid @enderror" id="status_aktif" name="status_aktif">
                                            <option value="0" {{ old('status_aktif') == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                                            <option value="1" {{ old('status_aktif') == 1 ? 'selected' : '' }}>Aktif</option>
                                        </select>
                                        @error('status_aktif')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <div class="col-md-12">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file"
                                               class="form-control @error('foto') is-invalid @enderror"
                                               id="image"
                                               name="foto"
                                               accept="image/*"
                                               onchange="previewImage(event)">
                                        @error('file')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src=""
                                             id="output"
                                             class="img-preview img-fluid mb-3"
                                             style="border-radius: 10px; max-width: 100%; height: auto;">
                                    </div>
                                </div>
                                 <!-- Foto Input -->


                                <!-- Form Actions -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.pejabat.index') }}" class="btn btn-danger">Kembali</a>
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
<script>
    $(document).ready(function () {
        $('.select2').select2({
            placeholder: 'Pilih Jabatan',
            allowClear: true
        });

        $('.select_sub_bidang').select2({
            placeholder: 'Pilih Sub Bidang',
            allowClear: true
        });

        $('#status_jabatan').on('change', function () {
            var status_jabatan = $(this).val();
            if(status_jabatan == 'pajabat') {
                // append pejabat structural fungsional
                $('#div_status_jabatan_penjabat').removeClass('d-none');
                $('#status_jabatan_penjabat').html(
                    '<option value="non-pajabat">Struktural</option><option value="pajabat">Fungsional</option>');
            } else {
                // remove pejabat structural fungsional
                $('#div_status_jabatan_penjabat').removeClass('d-none');
                $('#status_jabatan_penjabat').html('<option value="pelaksana">Pelaksana</option><option value="pppk">PPPK</option><option value="non-asn">Non ASN</option>');
            }
        })
    });
</script>
@endpush
@endsection
