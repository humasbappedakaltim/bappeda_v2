@extends('layouts.dashboard')

@section('title', 'Edit Aplikasi BAPPEDA')
@section('content')
<h1 class="h3 mb-3">
    <strong>Edit Aplikasi BAPPEDA</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @include('layouts.flashmessage')
                            <form action="{{ route('dashboard.app-bappeda.update', $appBappeda->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Judul <code>*</code></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $appBappeda->name) }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="link" class="form-label">Link</label>
                                        <input type="url" class="form-control @error('name') is-invalid @enderror" id="link" name="link" value="{{ old('link', $appBappeda->link) }}">
                                        @error('link')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="status_label" class="form-label">Status</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="inactive" value="0" {{ old('status', $appBappeda->status) == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inactive">Tidak Aktif</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="active" value="1" {{ old('status', $appBappeda->status) == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="active">Aktif</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $appBappeda->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="foto" class="form-label">Gambar</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                        @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-2 text-center">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src="{{ asset('storage/img/app-bappeda/' . $appBappeda->foto) }}" id="output" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="orders" class="form-label">Posisi</label>
                                        <input type="number" class="form-control @error('name') is-invalid @enderror" id="orders" name="orders" value="{{ old('orders', $appBappeda->orders) }}">
                                        @error('orders')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="orders" class="form-label">Status</label>
                                        <select class="form-select @error('active') is-invalid @enderror" id="active" name="active">
                                            <option value="0" {{ old('active', $appBappeda->active) == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                                            <option value="1" {{ old('active', $appBappeda->active) == 1 ? 'selected' : '' }}>Aktif</option>
                                        </select>
                                        @error('active')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.app-bappeda.index') }}" class="btn btn-danger">Kembali</a>
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


@endsection
