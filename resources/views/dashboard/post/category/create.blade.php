@extends('layouts.dashboard')
@section('title','Tambah Kategori Postingan')
@section('content')
<h1 class="h3 mb-3">
    <strong>Tambah Kategori Postingan</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.post.category.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Judul</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="status_label" class="form-label">Status</label>
                                        {{-- input radio with active and inactive --}}
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="inactive" value="0" {{ old('status') == '0' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inactive">Tidak Aktif</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('status') is-invalid @enderror" checked type="radio" name="status" id="active" value="1" {{ old('status') == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="active">Aktif</label>
                                        </div>

                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.post.category.index') }}" class="btn btn-danger">Kembali</a>
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

