@extends('layouts.dashboard')
@section('title','Edit Data Center')
@section('content')
<h1 class="h3 mb-3">
    <strong>Edit Data Center</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.data.center.update', $dataCenter->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $dataCenter->name) }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Kategori Data Center</label>
                                        <select name="category_data_center_id" id="category_data_center_id" class="form-control">
                                            <option value="">Pilih Kategori Data Center</option>
                                            @foreach ($categorys as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $dataCenter->category_data_center_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="file" class="form-label">File</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ old('file') }}">
                                            <a href="{{ asset('storage/file/data-center/' . $dataCenter->file) }}" target="_blank" class="btn btn-warning btn-sm">Lihat</a>
                                        </div>
                                        @error('file')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="file_cover" class="form-label">Cover</label>
                                        <input type="file" class="form-control @error('file_cover') is-invalid @enderror" id="file_cover" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" name="file_cover" value="{{ old('file_cover') }}" >
                                        @error('file_cover')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-2 text-center">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src="{{ asset('storage/file/data-center/cover/' . $dataCenter->cover) }}" id="output" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="order" class="form-label">Posisi</label>
                                        <input type="text" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $dataCenter->order) }}">
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
<!-- You can add any custom JS here if needed -->
@endpush
@endsection


