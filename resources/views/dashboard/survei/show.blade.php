@extends('layouts.dashboard')
@section('title','Detail Survei')
@section('content')
<h1 class="h3 mb-3">
    <strong>Detail Survei </strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Nama -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $survei->name) }}" readonly>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- phone_number -->
                                <div class="col-md-6">
                                    <label for="phone_number" class="form-label">Nomor Hp</label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $survei->phone_number) }}" readonly>
                                    @error('phone_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $survei->email) }}" readonly>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <!-- age -->
                                    <label for="age" class="form-label">Usia</label>
                                    <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', $survei->age) }}" readonly>
                                    @error('age')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $survei->address) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="main_job" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control @error('main_job') is-invalid @enderror" id="main_job" name="main_job" value="{{ old('main_job', $survei->main_job) }}" readonly>
                                    @error('main_job')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <!-- Alamat -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $survei->address) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="main_job" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control @error('main_job') is-invalid @enderror" id="main_job" name="main_job" value="{{ old('main_job', $survei->main_job) }}" readonly>
                                    @error('main_job')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Teks Penuh -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="requirement" class="form-label">Requirement</label>
                                    <input type="text" class="form-control @error('requirement') is-invalid @enderror" id="requirement" name="requirement" value="{{ old('requirement', $survei->community_satisfaction_survey_responses->first()->requirement) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="competency" class="form-label">Competency</label>
                                    <input type="text" class="form-control @error('competency') is-invalid @enderror" id="competency" name="competency" value="{{ old('competency', $survei->community_satisfaction_survey_responses->first()->competency) }}" readonly>
                                    @error('competency')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Teks Penuh -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="convenience" class="form-label">Convenience</label>
                                    <input type="text" class="form-control @error('convenience') is-invalid @enderror" id="convenience" name="convenience" value="{{ old('convenience', $survei->community_satisfaction_survey_responses->first()->convenience) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="politeness" class="form-label">Politeness</label>
                                    <input type="text" class="form-control @error('politeness') is-invalid @enderror" id="politeness" name="politeness" value="{{ old('politeness', $survei->community_satisfaction_survey_responses->first()->politeness) }}" readonly>
                                    @error('politeness')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Teks Penuh -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="velocity" class="form-label">Velocity</label>
                                    <input type="text" class="form-control @error('velocity') is-invalid @enderror" id="velocity" name="velocity" value="{{ old('velocity', $survei->community_satisfaction_survey_responses->first()->velocity) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="quality" class="form-label">Quality</label>
                                    <input type="text" class="form-control @error('quality') is-invalid @enderror" id="quality" name="quality" value="{{ old('quality', $survei->community_satisfaction_survey_responses->first()->quality) }}" readonly>
                                    @error('quality')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Teks Penuh -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="reasonableness" class="form-label">Reasonableness</label>
                                    <input type="text" class="form-control @error('reasonableness') is-invalid @enderror" id="reasonableness" name="reasonableness" value="{{ old('reasonableness', $survei->community_satisfaction_survey_responses->first()->reasonableness) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="management" class="form-label">Management</label>
                                    <input type="text" class="form-control @error('management') is-invalid @enderror" id="management" name="management" value="{{ old('management', $survei->community_satisfaction_survey_responses->first()->management) }}" readonly>
                                    @error('management')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Teks Penuh -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="suitability" class="form-label">Suitability</label>
                                    <input type="text" class="form-control @error('suitability') is-invalid @enderror" id="suitability" name="suitability" value="{{ old('suitability', $survei->community_satisfaction_survey_responses->first()->suitability) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="advice" class="form-label">Advice</label>
                                    <input type="text" class="form-control @error('advice') is-invalid @enderror" id="advice" name="advice" value="{{ old('advice', $survei->community_satisfaction_survey_responses->first()->advice) }}" readonly>
                                    @error('advice')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                            <!-- Submit -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dashboard.survei.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   @endsection



