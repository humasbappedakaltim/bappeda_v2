@extends('layouts.dashboard')
@section('title','Tambah Agenda')
@section('content')
<h1 class="h3 mb-3">
    <strong>Tambah Agenda</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.agenda.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="schedule" class="form-label">Schedule</label>
                                        <input type="datetime-local" class="form-control @error('schedule') is-invalid @enderror" id="schedule" name="schedule" value="{{ old('schedule') }}" required>
                                        @error('schedule')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="location" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" maxlength="255" value="{{ old('location') }}" required>
                                        @error('location')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="caption" class="form-label">Caption</label>
                                        <input type="text" class="form-control @error('caption') is-invalid @enderror" id="caption" name="caption" maxlength="512" value="{{ old('caption') }}" required>
                                        @error('caption')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="times" class="form-label">Waktu</label>
                                        <input type="text" class="form-control @error('times') is-invalid @enderror" id="times" name="times" maxlength="191" value="{{ old('times') }}">
                                        @error('times')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="dihadiri" class="form-label">Dihadiri</label>
                                        <textarea class="form-control @error('dihadiri') is-invalid @enderror" id="dihadiri" name="dihadiri" rows="3">{{ old('dihadiri') }}</textarea>
                                        @error('dihadiri')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src="" id="output" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                    </div>

                                </div>                         
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.agenda.index') }}" class="btn btn-danger">Kembali</a>
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
<!-- You can add any custom JS here if needed -->
@endpush
@endsection

