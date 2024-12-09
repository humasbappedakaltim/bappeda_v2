@extends('layouts.dashboard')
@section('title','Detail Slider')
@section('content')
<h1 class="h3 mb-3">
    <strong>Detail Slider</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $slider->title }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="expired_date" class="form-label">Tanggal Expired</label>
                                    <input type="date" class="form-control" id="expired_date" name="expired_date" value="{{ $slider->expired_date }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="caption" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="caption" name="caption" value="{{ $slider->caption }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="orders" class="form-label">Posisi Slider</label>
                                    <input type="number" class="form-control" id="orders" name="orders" value="{{ $slider->orders }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="url" class="form-control" id="link" name="link" value="{{ $slider->link }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h6 class="text-center">Preview Gambar</h6>
                                    <img src="{{ asset('storage/slider/' . $slider->image) }}" class="img-preview img-fluid mb-3" style="border-radius: 10px;">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ route('dashboard.sliders.index') }}" class="btn btn-danger">Kembali</a>
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

@endpush
@endsection

