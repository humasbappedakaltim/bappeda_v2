@extends('layouts.dashboard')
@section('title','Permohonan Informasi Online')
@section('content')
<h1 class="mb-3 h3">
    <strong>Edit Permohonan Informasi Online</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.pio.update', $pio->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Nama -->
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $pio->name) }}" readonly>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- NIK -->
                                    <div class="col-md-6">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik', $pio->nik) }}" readonly>
                                        @error('nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $pio->email) }}" readonly>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Jenis -->
                                        <label for="jenis" class="form-label">Jenis</label>
                                        <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ old('jenis', $pio->jenis) }}" readonly>
                                        @error('jenis')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Telepon -->
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <label for="telp" class="form-label">Telepon</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" value="{{ old('telp', $pio->telp) }}" readonly>
                                            @error('telp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div class="input-group-append">
                                                @if (substr($pio->telp, 0, 2) == '62')
                                                <a href="https://wa.me/{{ $pio->telp }}" class="btn btn-success" target="_blank">
                                                    <i class='bx bxl-whatsapp size-lg'></i> Chat
                                                </a>
                                                @elseif (substr($pio->telp, 0, 1) == '0')
                                                    @php
                                                        $formattedNumber = '62' . substr($pio->telp, 1);
                                                    @endphp
                                                    <a href="https://wa.me/{{ $formattedNumber }}" class="btn btn-success" target="_blank">
                                                        <i class='bx bxl-whatsapp size-lg'></i> Chat
                                                    </a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="faksimili" class="form-label">Faksimili</label>
                                        <input type="text" class="form-control @error('faksimili') is-invalid @enderror" id="faksimili" name="faksimili" value="{{ old('faksimili', $pio->faksimili) }}" readonly>
                                        @error('faksimili')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="ktp" class="form-label">KTP</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('ktp') is-invalid @enderror" id="ktp" name="ktp" value="{{ old('ktp', $pio->ktp) }}" readonly>
                                        @error('ktp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="input-group-append">
                                            <a href="" class="btn btn-primary" target="_blank"><i class="bx bx-download"></i> Download</a>
                                        </div>
                                    </div>

                                    <div class="mt-2 col-md-12">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src="{{ $pio->file ? url('storage/docs-pio/ktp' . $pio->file) : '' }}" id="output" class="mb-3 img-preview img-fluid" style="border-radius: 10px;">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="akta_kelahiran" class="form-label">Akta Kelahiran</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('akta_kelahiran') is-invalid @enderror" id="akta_kelahiran" name="akta_kelahiran" value="{{ old('akta_kelahiran', $pio->akta_kelahiran) }}" readonly>
                                        @error('akta_kelahiran')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="input-group-append">
                                            <a href="" class="btn btn-primary" target="_blank"><i class="bx bx-download"></i> Download</a>
                                        </div>
                                    </div>

                                    <div class="mt-2 col-md-12">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src="{{ $pio->file ? url('storage/docs-pio/akta' . $pio->file) : '' }}" id="output" class="mb-3 img-preview img-fluid" style="border-radius: 10px;">
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" readonly>{{ old('alamat', $pio->alamat) }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Rincian -->
                                <div class="mb-3">
                                    <label for="rincian" class="form-label">Rincian</label>
                                    <textarea class="form-control @error('rincian') is-invalid @enderror" id="rincian" name="rincian" rows="3" readonly>{{ old('rincian', $pio->rincian) }}</textarea>
                                    @error('rincian')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tujuan Penggunaan -->
                                <div class="mb-3">
                                    <label for="tujuan_penggunaan" class="form-label">Tujuan Penggunaan</label>
                                    <textarea class="form-control @error('tujuan_penggunaan') is-invalid @enderror" id="tujuan_penggunaan" name="tujuan_penggunaan" rows="3" readonly>{{ old('tujuan_penggunaan', $pio->tujuan_penggunaan) }}</textarea>
                                    @error('tujuan_penggunaan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                        <option value="0" {{ old('status', $pio->status) == 0 ? 'selected' : '' }}>Belum Di Proses</optionc>
                                        <option value="1" {{ old('status', $pio->status) == 1 ? 'selected' : '' }}>Sudah Di Proses</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit -->
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('dashboard.pio.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- You can add any custom JS here if needed -->
@endpush
@endsection

