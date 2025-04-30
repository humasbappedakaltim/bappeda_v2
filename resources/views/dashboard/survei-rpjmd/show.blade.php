@extends('layouts.dashboard')
@section('title','Detail Survei RPJMD')
@section('content')
<h1 class="h3 mb-3">
    <strong>Detail Survei RPJMD </strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row mb-3">
                                <!-- id -->
                                <div class="col-md-6">
                                    <label for="id" class="form-label">Nomor Responden</label>
                                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id', $surveirpjmd->id) }}" readonly>
                                    @error('id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- sex -->
                                <div class="col-md-6">
                                    <label for="sex" class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control @error('sex') is-invalid @enderror" id="sex" name="sex" value="{{ old('sex', $surveirpjmd->sex) }}" readonly>
                                    @error('sex')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- age -->
                                <div class="col-md-6">
                                    <label for="age" class="form-label">Usia</label>
                                    <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', $surveirpjmd->age) }}" readonly>
                                    @error('age')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- domicile -->
                                <div class="col-md-6">
                                    <label for="domicile" class="form-label">Asal Responden</label>
                                    <input type="text" class="form-control @error('domicile') is-invalid @enderror" id="domicile" name="domicile" value="{{ old('domicile', $surveirpjmd->domicile) }}" readonly>
                                    @error('domicile')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- main_job -->
                                <div class="col-md-6">
                                    <label for="main_job" class="form-label">Jenis Pekerjaan</label>
                                    <input type="text" class="form-control @error('main_job') is-invalid @enderror" id="main_job" name="main_job" value="{{ old('main_job', $surveirpjmd->main_job) }}" readonly>
                                    @error('main_job')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- last_education -->
                                <div class="col-md-6">
                                    <label for="last_education" class="form-label">Jenis Pendidikan</label>
                                    <input type="text" class="form-control @error('last_education') is-invalid @enderror" id="last_education" name="last_education" value="{{ old('last_education', $surveirpjmd->last_education) }}" readonly>
                                    @error('last_education')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- disability -->
                                <div class="col-md-6">
                                    <label for="disability" class="form-label">Penyandang Disabilitas</label>
                                    <input type="text" class="form-control @error('disability') is-invalid @enderror" id="disability" name="disability" value="{{ old('disability', $surveirpjmd->disability) }}" readonly>
                                    @error('disability')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- phone_number -->
                                <div class="col-md-6">
                                    <label for="phone_number" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $surveirpjmd->phone_number) }}" readonly>
                                    @error('phone_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Teks Penuh -->
                            <div class="row mb-3">
                                @foreach ($surveirpjmd->rpjmd_survey_issue_responses as $rsir)
                                    <div class="col-md-4">
                                        <label for="issue" class="form-label">Isu atau Permasalahan {{ $loop->index + 1 }}</label>
                                        <input type="text" class="form-control @error('issue') is-invalid @enderror" id="issue" name="issue" value="{{ $rsir->issue }}" readonly>
                                        @error('issue')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endforeach
                            </div>

                            <!-- Teks Penuh -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="hope_development" class="form-label">Harapan Pembangunan 5 Tahun</label>
                                    <textarea class="form-control" name="hope_development" id="hope_development" cols="30" rows="10" readonly>{{ $surveirpjmd->rpjmd_survey_hope_responses->hope_development }}</textarea>
                                    @error('hope_development')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="hope_program" class="form-label">Harapan Program Gratispol dan Jospol</label>
                                    <textarea class="form-control" name="hope_program" id="hope_program" cols="30" rows="10" readonly>{{ $surveirpjmd->rpjmd_survey_hope_responses->hope_program }}</textarea>
                                    @error('hope_program')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dashboard.survei-rpjmd.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   @endsection



