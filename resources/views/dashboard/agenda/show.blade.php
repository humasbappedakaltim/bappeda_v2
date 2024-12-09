@extends('layouts.dashboard')
@section('title','Detail Agenda')
@section('content')
<h1 class="h3 mb-3">
    <strong>Detail Agenda</strong>
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
                                    <label for="schedule" class="form-label">Schedule</label>
                                    <input type="datetime-local" class="form-control" id="schedule" name="schedule" value="{{ $agenda->schedule }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="location" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="location" name="location" maxlength="255" value="{{ $agenda->location }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="caption" class="form-label">Caption</label>
                                    <input type="text" class="form-control" id="caption" name="caption" maxlength="512" value="{{ $agenda->caption }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" disabled>{{ $agenda->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="times" class="form-label">Waktu</label>
                                    <input type="text" class="form-control" id="times" name="times" maxlength="191" value="{{ $agenda->times }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="dihadiri" class="form-label">Dihadiri</label>
                                    <textarea class="form-control" id="dihadiri" name="dihadiri" rows="3" disabled>{{ $agenda->dihadiri }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <img src="{{ $agenda->image ?? asset('storage/agenda'. $agenda->image) }}" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ route('dashboard.agenda.index') }}" class="btn btn-danger">Kembali</a>
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

