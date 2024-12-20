<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survei Kepuasan Masyarakat (SKM) | Bappeda Provinsi Kalimantan Timur</title>
    <script src="{{ asset('jquery-3.7.1/jquery-3.7.1.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('storage/settings/September2020/akBHm4gYEq4pgdfOLIHQ.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css5/css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/community_satisfaction_survey/style.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
        }

        .card-header-color {
            background-color: #0084db;
        }

        .btn-primary {
            background-color: #0084db;
            border-color: #0084db;
        }

        .btn-primary:hover {
            background-color: #016fb9;
            border-color: #016fb9;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-family: "Roboto", sans-serif;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 mb-3">
                <div class="card shadow rounded">
                    <div class="card-header rounded p-0">
                        <img src="{{ asset('assets/images/survei_kepuasan_masyarakat.png') }}" class="img-fluid rounded shadow" alt="">
                    </div>
                    <div class="card-body">
                        <p class="text-center fw-semibold">Hai, Sobat Perencana!👋</br>Yuk, ikut berpartisipasi dalam Survei Kepuasan Masyarakat Bappeda Provinsi Kalimantan Timur dengan menjawab 10 pertanyaan untuk meningkatkan kualitas pelayanan dari kami kepada Masyarakat Provinsi Kalimantan Timur.</p>
                    </div>
                    <div class="card-footer card-header-color">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <span class="text-light fw-semibold">
                                    Identitas Responden Dirahasiakan
                                </span>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <span class="text-light float-end">* Wajib Diisi</span>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                {{-- @if (session('errorsString'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Pesan Error :</br>
                        {!! session('errorsString') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
            </div>
            <form action="{{ route('landing.survei.store') }}" method="POST">
            @csrf
            <div class="col-12 mb-3">
                <div class="card shadow rounded">
                    <div class="card-header card-header-color text-light fw-bold">
                      Identitas Responden <span class="text-light fw-bold">*</span>
                    </div>
                    <div class="card-body">
                        <div class="row px-2">
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label fw-bold">Nama</label>
                                    <input type="text" class="form-control border border-secondary @error('name') border-danger is-invalid @else border-secondary @enderror" name="name" id="name" placeholder="Isikan Nama Anda" value="{{ old("name") }}"/>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control border border-secondary @error('email') border-danger is-invalid @else border-secondary @enderror" name="email" id="email" placeholder="Isikan Email Anda" value="{{ old("email") }}"/>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="sex" class="form-label fw-bold">Jenis Kelamin</label>
                                    <div class="form-check ">
                                        <input class="form-check-input border border-secondary @error('sex') border-danger is-invalid @else border-secondary @enderror" type="radio" name="sex" id="sex-1" value="Laki-laki" {{ old("sex") == 'Laki-laki' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="sex-1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('sex') border-danger is-invalid @else border-secondary @enderror" type="radio" name="sex" id="sex-2" value="Perempuan" {{ old("sex") == 'Perempuan' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="sex-2">
                                            Perempuan
                                        </label>
                                    </div>
                                    @error('sex')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="age" class="form-label fw-bold">Usia</label>
                                    @foreach ($ageRangeData as $ard)
                                        <div class="form-check ">
                                            <input class="form-check-input border border-secondary @error('age') border-danger is-invalid @else border-secondary @enderror" type="radio" name="age" id="age-{{ $loop->index }}" value="{{ $ard }}" {{ old("age") == $ard ? 'checked' : '' }}>
                                            <label class="form-check-label" for="age-{{ $loop->index }}">{{ $ard }}</label>
                                        </div>
                                    @endforeach
                                    @error('age')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="phoneNumber" class="form-label fw-bold">Nomor Handphone</label>
                                    <input type="text" class="form-control border border-secondary @error('phoneNumber') border-danger is-invalid @else border-secondary @enderror" name="phoneNumber" id="phoneNumber" placeholder="Isikan Nomor Handphone Anda" value="{{ old("phoneNumber") }}" />
                                    @error('phoneNumber')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="address" class="form-label fw-bold">Alamat</label>
                                    <textarea class="form-control border border-secondary @error('address') border-danger is-invalid @else border-secondary @enderror" name="address" id="address" rows="3" placeholder="Isikan Alamat Anda">{{ old("address") }}</textarea>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="mainJobs" class="form-label fw-bold">Pekerjaan Utama</label>
                                @foreach ($mainJobData as $mjd)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('mainJob') border-danger is-invalid @else border-secondary @enderror" type="radio" name="mainJob" id="mainJob-{{ $loop->index }}" value="{{ $mjd }}" {{ old("mainJob") == $mjd ? 'checked' : '' }}>
                                        <label class="form-check-label" for="mainJob-{{ $loop->index }}">
                                            {{ $mjd }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                                    <input
                                      type="text"
                                      class="form-control border border-secondary d-none @error('anotherMainJob') border-danger is-invalid @else border-secondary @enderror"
                                      name="anotherMainJob"
                                      id="anotherMainJob"
                                      placeholder="Isikan Pekerjaan Lainnya"
                                      value="{{ old('anotherMainJob') }}"
                                    />
                                </div>
                                @error('mainJob')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('anotherMainJob')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            1
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($requirementAnswerData as $rad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('requirement') border-danger is-invalid @else border-secondary @enderror" type="radio" name="requirement" id="requirement-{{ $loop->index }}" value="{{ $rad }}" {{ old("requirement") == $rad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="requirement-{{ $loop->index }}">
                                            {{ $rad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('requirement')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda tentang kompetensi/kemampuan petugas dalam memberikan pelayanan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            2
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($competencyAnswerData as $cad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('competency') border-danger is-invalid @else border-secondary @enderror" type="radio" name="competency" id="competency-{{ $loop->index }}" value="{{ $cad }}" {{ old("competency") == $cad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="competency-{{ $loop->index }}">
                                            {{ $cad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('competency')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pemahaman Anda tentang kemudahan prosedur pelayanan di unit pelayanan ini? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            3
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($convenienceAnswerData as $cad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('convenience') border-danger is-invalid @else border-secondary @enderror" type="radio" name="convenience" id="convenience-{{ $loop->index }}" value="{{ $cad }}" {{ old("convenience") == $cad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="convenience-{{ $loop->index }}">
                                            {{ $cad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('convenience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda terhadap perilaku terkait kesopanan dan keramahan petugas dalam memberikan pelayanan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            4
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($politenessAnswerData as $pad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('politeness') border-danger is-invalid @else border-secondary @enderror" type="radio" name="politeness" id="politeness-{{ $loop->index }}" value="{{ $pad }}" {{ old("politeness") == $pad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="politeness-{{ $loop->index }}">
                                            {{ $pad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('politeness')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda tentang kecepatan waktu dalam memberikan pelayanan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            5
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($velocityAnswerData as $vad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('velocity') border-danger is-invalid @else border-secondary @enderror" type="radio" name="velocity" id="velocity-{{ $loop->index }}" value="{{ $vad }}" {{ old("velocity") == $vad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="velocity-{{ $loop->index }}">
                                            {{ $vad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('velocity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda tentang kualitas sarana dan prasarana? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            6
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($qualityAnswerData as $qad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('quality') border-danger is-invalid @else border-secondary @enderror" type="radio" name="quality" id="quality-{{ $loop->index }}" value="{{ $qad }}" {{ old("quality") == $qad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="quality-{{ $loop->index }}">
                                            {{ $qad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('quality')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda tentang kewajaran biaya/tarif dalam pelayanan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            7
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($reasonablenessAnswerData as $rad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('reasonableness') border-danger is-invalid @else border-secondary @enderror" type="radio" name="reasonableness" id="reasonableness-{{ $loop->index }}" value="{{ $rad }}" {{ old("reasonableness") == $rad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="reasonableness-{{ $loop->index }}">
                                            {{ $rad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('reasonableness')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda tentang penanganan pengaduan, saran, dan masukan pengguna layanan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            8
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($managementAnswerData as $mad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('management') border-danger is-invalid @else border-secondary @enderror" type="radio" name="management" id="management-{{ $loop->index }}" value="{{ $mad }}" {{ old("management") == $mad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="management-{{ $loop->index }}">
                                            {{ $mad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('management')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-11">
                            Bagaimana pendapat Anda tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan yang diberikan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-1 bg-light rounded text-center fs-3 text-dark">
                            9
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($suitabilityAnswerData as $sad)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('suitability') border-danger is-invalid @else border-secondary @enderror" type="radio" name="suitability" id="suitability-{{ $loop->index }}" value="{{ $sad }}" {{ old("suitability") == $sad ? 'checked' : '' }}>
                                        <label class="form-check-label" for="suitability-{{ $loop->index }}">
                                            {{ $sad }}
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @error('suitability')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow rounded">
                <div class="card-header card-header-color text-light fw-bold">
                    <div class="row px-2 align-items-center">
                        <div class="col-10">
                            Saran perbaikan, masukan, dan harapan <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-2 bg-light rounded text-center fs-3 text-dark">
                            10
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control border border-secondary @error('advice') border-danger is-invalid @else border-secondary @enderror" name="advice" id="advice" rows="3" placeholder="Isikan Saran Anda" >{{ old("advice") }}</textarea>
                                @error('advice')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-12 mb-3">
            <button type="submit" class="btn btn-primary text-white text-center fw-semibold">Kirim Survei</button>
        </div>
    </form>
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="text-center text-secondary">
                &copy; Bappeda Provinsi Kalimantan Timur
              </div>
              <div class="text-center text-secondary">
                Dibuat oleh Humas Bappeda
              </div>
            </div>
          </div>
    </div>
    {{-- <script src="{{ asset('css5/js/bootstrap.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(function () {
          var mainJob = $('input[type="radio"][name="mainJob"]');
          var checkedAnotherMainJob = $('input[type="radio"][name="mainJob"][value="Lainnya"]:checked');
          var anotherMainJob = $('input[type="text"][name="anotherMainJob"]');
          var lastMainJob = mainJob.length - 1;

          $(document).ready(function(){
            checkedAnotherMainJob.length > 0 ? anotherMainJob.removeClass('d-none') : anotherMainJob.addClass('d-none');
          });

          mainJob.on("change", function () {
            if (mainJob.eq(lastMainJob).is(":checked")) {
                anotherMainJob.removeClass('d-none');
            } else {
                anotherMainJob.addClass('d-none');
                anotherMainJob.val('');
            }
          });
      });
      </script>
</body>
</html>
