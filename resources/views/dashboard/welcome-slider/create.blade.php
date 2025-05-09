@extends('layouts.dashboard')
@section('title','Tambah Agenda')
@section('content')
<h1 class="h3 mb-3">
    <strong>Tambah Slider</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @include('layouts.flashmessage')
                            <form action="{{ route('dashboard.sliders.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expired_date" class="form-label">Tanggal Expired</label>
                                        <input type="date" class="form-control @error('expired_date') is-invalid @enderror" id="expired_date" name="expired_date" value="{{ old('expired_date') }}">
                                        @error('expired_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="active" class="form-label">Status</label>
                                        <select class="form-select @error('active') is-invalid @enderror" id="active" name="active">
                                            <option value="0" {{ old('active') == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                                            <option value="1" {{ old('active') == 1 ? 'selected' : '' }}>Aktif</option>
                                        </select>
                                        @error('active')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="orders" class="form-label">Posisi Slider</label>
                                        <input type="number" class="form-control @error('orders') is-invalid @enderror" id="orders" name="orders" maxlength="191" value="{{ old('orders') }}">
                                        @error('orders')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="link" class="form-label">Link</label>
                                        <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link') }}">
                                        @error('link')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file"
                                                class="form-control @error('image') is-invalid @enderror"
                                                id="image"
                                                name="image"
                                                accept="image/*"
                                                onchange="previewImage(event)">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src=""
                                                id="output"
                                                class="img-preview img-fluid mb-3"
                                                style="border-radius: 10px; max-width: 100%; height: auto; display: none;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.sliders.index') }}" class="btn btn-danger">Kembali</a>
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
<script type="text/javascript">

    function previewImage(event) {
        const output = document.getElementById('output');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                output.src = e.target.result; // Set the Base64 encoded image data
                output.style.display = 'block'; // Display the image
            };

            reader.readAsDataURL(file); // Read the file as a Data URL
        } else {
            output.src = ''; // Clear src if no file
            output.style.display = 'none'; // Hide the image
        }
    }

</script>
@endpush
@endsection
