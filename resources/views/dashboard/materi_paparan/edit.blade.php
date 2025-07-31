@extends('layouts.dashboard')
@section('title','Edit Data Paparan')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
@endpush
@section('content')
<h1 class="mb-3 h3">
    <strong>Edit Data Paparan</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.data.materi_paparan.update', $data->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $data->name) }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-2 col-md-12">
                                        <label for="name" class="form-label">Kategori Bidang</label>
                                        <select name="category_bidang_id[]" id="category_bidang_id" class="form-control select2" multiple>
                                            @foreach ($bidangs as $category)
                                                <option value="{{ $category->id }}" {{ in_array($category->id, $data->bidangs->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-2 col-md-12">
                                    <label for="name" class="form-label">Kategori Data Center</label>
                                        <select name="category_data_center_id" id="category_data_center_id" class="form-control select2 @error('category_data_center_id') is-invalid @enderror">
                                            <option value="">Pilih Kategori Data Center</option>
                                            @foreach ($categoryDataCenter as $categoryData)
                                                <option value="{{ $categoryData->id }}" {{ $categoryData->id == $data->category_data_center_id ? 'selected' : '' }}>{{ $categoryData->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_data_center_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <label for="file" class="form-label">File</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ old('file') }}" >
                                            <a href="{{ asset('storage/file/materi-paparan/' . $data->file) }}" target="_blank" class="btn btn-outline-success btn-sm">
                                               Lihat File
                                            </a>
                                        </div>
                                        @error('file')
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
                                        <img src="{{ asset('storage/materi-paparan/cover/' . $data->cover) }}"
                                             id="output"
                                             class="mb-3 img-preview img-fluid"
                                             style="border-radius: 10px; max-width: 100%; height: auto; display: block;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.data.materi_paparan.index') }}" class="btn btn-danger">Kembali</a>
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

