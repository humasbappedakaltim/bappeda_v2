@extends('layouts.dashboard')
@section('title','Detail Penghargaan')
@section('content')
<h1 class="h3 mb-3">
    <strong>Detail Penghargaan</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $penghargaan->title }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" readonly>{{ $penghargaan->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="foto" class="form-label">Gambar</label>
                                    <img src="{{ $penghargaan->foto ? url('storage/penghargaan/' . $penghargaan->foto) : '' }}" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ route('dashboard.penghargaan.index') }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
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

