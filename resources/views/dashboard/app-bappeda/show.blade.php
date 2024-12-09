@extends('layouts.dashboard')

@section('title', 'Detail Aplikasi BAPPEDA')
@section('content')
<h1 class="h3 mb-3">
    <strong>Detail Aplikasi BAPPEDA</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @include('layouts.flashmessage')
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $appBappeda->name }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="url" class="form-control" id="link" name="link" value="{{ $appBappeda->link }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="status_label" class="form-label">Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inactive" value="0" {{ $appBappeda->status == 0 ? 'checked' : '' }} readonly>
                                        <label class="form-check-label" for="inactive">Tidak Aktif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="active" value="1" {{ $appBappeda->status == 1 ? 'checked' : '' }} readonly>
                                        <label class="form-check-label" for="active">Aktif</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" readonly>{{ $appBappeda->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3 text-center">
                                <label for="foto" class="form-label">Gambar</label>
                                <div class="col-md-12">
                                    <img src="{{ asset('storage/img/app-bappeda/' . $appBappeda->foto) }}" id="output" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="orders" class="form-label">Posisi</label>
                                    <input type="number" class="form-control" id="orders" name="orders" value="{{ $appBappeda->orders }}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ route('dashboard.app-bappeda.index') }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

