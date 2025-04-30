<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survei Publik RPJMD 2025-2029 | Bappeda Provinsi Kalimantan Timur</title>
    {{-- <script src="{{ asset('jquery-3.7.1/jquery-3.7.1.min.js') }}"></script> --}}
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
            background-color: #ffb536;
        }
        .card-footer-color {
            background-color: #00ab86;
        }

        .btn-primary {
            background-color: #00ab86;
            border-color: #00ab86;
        }
        .btn-primary:hover {
            background-color: #026b5e;
            border-color: #026b5e;
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
                        <img src="{{ asset('assets/images/survei_rpjmd.png') }}" class="img-fluid rounded shadow" alt="">
                    </div>
                    <div class="card-body">
                        <p class="text-center fw-semibold">Halo, Warga Kalimantan Timur!</p>
                        <p class="text-justify">Dalam rangka penyusunan <b>RPJMD Provinsi Kalimantan Timur Tahun 2025–2029</b>, Pemerintah Provinsi Kalimantan Timur melalui Bappeda mengundang Bapak/Ibu dan seluruh masyarakat Kaltim untuk berpartisipasi dalam pengisian survei ini. Pelaksanaan survei ini bertujuan untuk menjaring aspirasi publik sebagai bagian dari penerapan perencanaan pembangunan partisipatif dalam mewujudkan Kaltim Sukses Menuju Generasi Emas</p>
                        <p class="text-justify">Visi <b>“Kaltim Sukses Menuju Generasi Emas”</b> bermakna bahwa cita-cita pembangunan tidak hanya berfokus pada kemajuan daerah, tetapi juga membawa kesejahteraan pada masyarakat Kalimantan Timur secara menyeluruh. Pemerintah Provinsi Kalimantan Timur berkomitmen untuk merealisasikan pembangunan daerah yang inklusif dan berkelanjutan tersebut melalui <b>6 misi pembangunan</b>:</p>
                        <ol class="list-group-numbered">
                            <li class="list-group-item fw-semibold">Mewujudkan Sumber Daya Manusia yang Unggul dan Sejahtera</li>
                            <li class="list-group-item fw-semibold">Mewujudkan Kalimantan Timur sebagai Pusat Ekonomi Baru yang Inklusif Berbasis Industrialisasi Komoditas Unggulan Daerah</li>
                            <li class="list-group-item fw-semibold">Meningkatkan Pembangunan Infrastruktur Guna Menunjang Kegiatan Perekonomian, Pelayanan Publik dan Kesehatan</li>
                            <li class="list-group-item fw-semibold">Mewujudkan Tata Kelola Pemerintahan yang Baik, Profesional, dan Berintegritas Berbasis Teknologi InformasiMewujudkan Tata Kelola Pemerintahan yang Baik, Profesional, dan Berintegritas Berbasis Teknologi Informasi</li>
                            <li class="list-group-item fw-semibold">Meningkatkan Kualitas Kehidupan Beragama serta Penguatan Budaya dan Kearifan Lokal</li>
                            <li class="list-group-item fw-semibold">Mewujudkan Pembangunan Berwawasan Lingkungan yang Berkelanjutan</li>
                        </ol>
                        <p class="text-justify">Komitmen tersebut turut didukung oleh <b>program unggulan Gubernur dan Wakil Gubernur Kalimantan Timur, yaitu Gratispol dan Jospol</b>, sebagai upaya percepatan pembangunan pada sektor sumber daya manusia, ekonomi, dan infrastruktur. Program unggulan tersebut menjadi bagian dari strategi Trisula Pembangunan Daerah yang diharapkan dapat menjadi langkah untuk mengurangi kemiskinan, meningkatkan kualitas hidup SDM, dan mendorong pertumbuhan ekonomi yang berkelanjutan di Kalimantan Timur selama 5 tahun ke depan.</p>
                        <p class="text-justify fw-semibold">Mari sampaikan pendapat dan harapan Bapak/Ibu melalui survei ini untuk masa depan Kalimantan Timur yang lebih baik!</p>
                        {{-- <p class="text-center fw-semibold">Jumlah Responden Saat Ini:</p>
                        <h5 class="text-center fw-semibold">{{ $respondents }}</h5> --}}
                    </div>
                    <div class="card-footer card-footer-color">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <p class="text-light fw-semibold">Jumlah Responden Saat Ini:</p>
                                <h4 class="text-light fw-semibold">{{ $respondents }}</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <span class="text-light float-end">Tanda * Berarti Wajib Diisi</span>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if (session('errorsString'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Pesan Error :</br>
                        {!! session('errorsString') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <form action="{{ route('landing.survei-publik-rpjmd.store') }}" method="POST">
            @csrf
            <div class="col-12 mb-3">
                <div class="card shadow rounded">
                    <div class="card-header card-header-color text-light fw-bold">
                      Identitas Responden <span class="text-light fw-bold">*</span>
                    </div>
                    <div class="card-body">
                        <div class="row px-2">
                            {{-- <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
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
                            </div> --}}
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="sex" class="form-label fw-bold">Jenis Kelamin</label>
                                    <select class="form-select border border-secondary @error('sex') border-danger is-invalid @else border-secondary @enderror" name="sex">
                                        <option selected disabled>Pilih Jenis Kelamin Anda</option>
                                        <option value="Laki-laki" {{ old('sex') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ old('sex') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('sex')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
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
                            </div> --}}
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="age" class="form-label fw-bold">Usia</label>
                                    <select class="form-select border border-secondary @error('age') border-danger is-invalid @else border-secondary @enderror" name="age">
                                        <option selected disabled>Pilih Rentang Usia Anda</option>
                                        @foreach ($ageRangeData as $ard)
                                            <option value="{{ $ard }}" {{ old('age') == $ard ? 'selected' : '' }}>{{ $ard }}</option>
                                        @endforeach
                                    </select>
                                    @error('age')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="domicile" class="form-label fw-bold">Asal Responden</label>
                                    <select class="form-select border border-secondary @error('domicile') border-danger is-invalid @else border-secondary @enderror" name="domicile">
                                        <option selected disabled>Pilih Asal Daerah Anda</option>
                                        @foreach ($domicileData as $dd)
                                            <option value="{{ $dd }}" {{ old('domicile') == $dd ? 'selected' : '' }}>{{ $dd }}</option>
                                        @endforeach
                                    </select>
                                    <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <input
                                          type="text"
                                          class="form-control border border-secondary d-none @error('anotherDomicile') border-danger is-invalid @else border-secondary @enderror"
                                          name="anotherDomicile"
                                          id="anotherDomicile"
                                          placeholder="Isikan Asal Lainnya"
                                          autocomplete="off"
                                          value="{{ old('anotherDomicile') }}"
                                        />
                                    </div>
                                    @error('domicile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('anotherDomicile')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-sm-12 col-md-12 col-lg-12">
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
                              </div> --}}
                              <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="mainJob" class="form-label fw-bold">Jenis Pekerjaan</label>
                                    <select class="form-select border border-secondary @error('mainJob') border-danger is-invalid @else border-secondary @enderror" name="mainJob">
                                        <option selected disabled>Pilih Jenis Pekerjaan Anda</option>
                                        @foreach ($mainJobData as $dd)
                                            <option value="{{ $dd }}" {{ old('mainJob') == $dd ? 'selected' : '' }}>{{ $dd }}</option>
                                        @endforeach
                                    </select>
                                    <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <input
                                          type="text"
                                          class="form-control border border-secondary d-none @error('anotherMainJob') border-danger is-invalid @else border-secondary @enderror"
                                          name="anotherMainJob"
                                          id="anotherMainJob"
                                          placeholder="Isikan Jenis Pekerjaan Lainnya"
                                          autocomplete="off"
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
                            {{-- <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="disability" class="form-label fw-bold">Penyandang Disabilitas</label>
                                    <div class="form-check ">
                                        <input class="form-check-input border border-secondary @error('disability') border-danger is-invalid @else border-secondary @enderror" type="radio" name="disability" id="disability-1" value="1" {{ old("disability") == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="disability-1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('disability') border-danger is-invalid @else border-secondary @enderror" type="radio" name="disability" id="disability-2" value="0" {{ old("disability") == '0' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="disability-2">
                                            Tidak
                                        </label>
                                    </div>
                                    @error('disability')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="disability" class="form-label fw-bold">Penyandang Disabilitas</label>
                                    <select class="form-select border border-secondary @error('disability') border-danger is-invalid @else border-secondary @enderror" name="disability">
                                        <option selected disabled>Pilih Apakah Anda Penyandang Disabilitas</option>
                                        <option value="Ya" {{ old('disability') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                        <option value="Tidak" {{ old('disability') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                    @error('disability')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="lastEducation" class="form-label fw-bold">Pendidikan Terakhir</label>
                                    <select class="form-select border border-secondary @error('lastEducation') border-danger is-invalid @else border-secondary @enderror" name="lastEducation">
                                        <option selected disabled>Pilih Pendidikan Terakhir Anda</option>
                                        @foreach ($lastEducationData as $eld)
                                            <option value="{{ $eld }}" {{ old('lastEducation') == $eld ? 'selected' : '' }}>{{ $eld }}</option>
                                        @endforeach
                                    </select>
                                    @error('lastEducation')
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

                    </div>
                </div>
                <div class="card-footer card-footer-color">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <span class="text-light">1) Jika Memilih "Lainnya", Isian Wajib Diisi</span><br>
                            <span class="text-light">2) Isian Maksimal 64 Karakter</span>
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
                            Apa saja isu atau permasalahan pembangunan Kalimantan Timur yang menurut Anda paling mendesak dan perlu menjadi prioritas utama dalam 5 tahun ke depan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-2 bg-light rounded text-center fs-3 text-dark">
                            1
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                @foreach ($issueData as $isd)
                                    <div class="form-check">
                                        <input class="form-check-input border border-secondary @error('issues') border-danger is-invalid @else border-secondary @enderror" type="checkbox" value="{{ $isd }}" id="issues-{{ $loop->index }}" name="issues[]" {{ is_array(old('issues')) && in_array($isd, old('issues')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="issues-{{ $loop->index }}">{{ $isd }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <input
                              type="text"
                              class="form-control d-none border border-secondary @error('another_issue') border-danger is-invalid @enderror"
                              name="another_issue"
                              id="another_issue"
                              placeholder="Isikan Hanya Satu Isu atau Permasalahan"
                              autocomplete="off"
                              value="{{ old('another_issue') }}"
                            />
                          </div>
                            @error('issues')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @error('another_issue')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="card-footer card-footer-color">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <span class="text-light">1) Pilih Maksimal Tiga (3) Isu atau Permasalahan</span><br>
                            <span class="text-light">2) Jika Memilih "Lainnya", Isian Wajib Diisi</span><br>
                            <span class="text-light">3) Isian Maksimal 64 Karakter</span>
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
                            Bagaimana harapan Anda terhadap pembangunan Kalimantan Timur dalam 5 Tahun ke depan? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-2 bg-light rounded text-center fs-3 text-dark">
                            2
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control border border-secondary @error('hope_development') border-danger is-invalid @else border-secondary @enderror" name="hope_development" id="hope_development" rows="3" placeholder="Isikan Jawaban Anda (Maksimal 1024 Karakter)" >{{ old("hope_development") }}</textarea>
                                @error('hope_development')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer card-footer-color">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <span class="text-light">Maksimal 1024 Karakter</span><br>
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
                            Bagaimana harapan Anda terhadap Program Unggulan Gubernur dan Wakil Gubernur Kalimantan Timur: Gratispol dan Jospol? <span class="text-light fw-bold">*</span>
                        </div>
                        <div class="col-2 bg-light rounded text-center fs-3 text-dark">
                            3
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control border border-secondary @error('hope_program') border-danger is-invalid @else border-secondary @enderror" name="hope_program" id="hope_program" rows="3" placeholder="Isikan Jawaban Anda (Maksimal 1024 Karakter)" >{{ old("hope_program") }}</textarea>
                                @error('hope_program')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer card-footer-color">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <span class="text-light">Maksimal 1024 Karakter</span><br>
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
                2025 &copy; Bappeda Provinsi Kalimantan Timur
              </div>
              <div class="text-center text-secondary">
                Dibuat oleh Humas Bappeda
              </div>
            </div>
          </div>
    </div>
    {{-- <script src="{{ asset('css5/js/bootstrap.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" type="text/javascript" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script>
        $(function () {
            var domicile = $('select[name="domicile"]');
            var anotherDomicile = $('input[type="text"][name="anotherDomicile"]');

            var mainJob = $('select[name="mainJob"]');
            var anotherMainJob = $('input[type="text"][name="anotherMainJob"]');
            // var checkedAnotherMainJob = $('select[name="mainJob"][value="Lainnya"]:selected');

            // var mainJob = $('input[type="radio"][name="mainJob"]');
            // var checkedAnotherMainJob = $('input[type="radio"][name="mainJob"][value="Lainnya"]:checked');
            // var anotherMainJob = $('input[type="text"][name="anotherMainJob"]');
            // var lastMainJob = mainJob.length - 1;

            var max = 3;
            var issues = $('input[type="checkbox"][name="issues[]"]');
            var checkedAnotherIssue = $('input[type="checkbox"][name="issues[]"][value="Lainnya"]:checked');
            var anotherIssue = $('input[type="text"][name="another_issue"]');
            var lastIssue = issues.length - 1;

            issues.on("click", checkedIssuesFunction);

            $(document).ready(function(){
                // checkedAnotherMainJob.length > 0 ? anotherMainJob.removeClass('d-none') : anotherMainJob.addClass('d-none');
                toggleAnotherDomicile();
                toggleAnotherMainJob();
                checkedAnotherIssue.length > 0 ? anotherIssue.removeClass('d-none') : anotherIssue.addClass('d-none');
            });

            // domicile.on("change", function () {
            //     if (domicile.val() === 'Lainnya' || checkedAnotherDomicile) {
            //         anotherDomicile.removeClass('d-none');
            //     } else {
            //         anotherDomicile.addClass('d-none').val('');
            //         anotherDomicile.val('');
            //     }
            // });

            function toggleAnotherDomicile() {
                if (domicile.val() === 'Lainnya') {
                    anotherDomicile.removeClass('d-none');
                } else {
                    anotherDomicile.addClass('d-none').val('');
                }
            }

            function toggleAnotherMainJob() {
                if (mainJob.val() === 'Lainnya') {
                    anotherMainJob.removeClass('d-none');
                } else {
                    anotherMainJob.addClass('d-none').val('');
                }
            }

            domicile.on("change", toggleAnotherDomicile);

            mainJob.on("change", toggleAnotherMainJob);

            // mainJob.on("change", function () {
            //     if (mainJob.val() === 'Lainnya' || checkedAnotherMainJob) {
            //         anotherMainJob.removeClass('d-none');
            //     } else {
            //         anotherMainJob.addClass('d-none').val('');
            //         anotherMainJob.val('');
            //     }
            // });

            // mainJob.on("change", function () {
            //     if (mainJob.eq(lastMainJob).is(":checked")) {
            //         anotherMainJob.removeClass('d-none');
            //     } else {
            //         anotherMainJob.addClass('d-none');
            //         anotherMainJob.val('');
            //     }
            // });

            function checkedIssuesFunction(event) {
                var checkedIssues = $('input[type="checkbox"][name="issues[]"]:checked');
                if (checkedIssues.length >= max + 1) return false;
            }

            issues.eq(lastIssue).on("change", function () {
                if (issues.eq(lastIssue).is(":checked")) {
                    anotherIssue.removeClass('d-none');
                } else {
                    anotherIssue.addClass('d-none');
                }
            });
      });
      </script>
</body>
</html>
