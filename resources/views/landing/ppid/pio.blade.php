@extends('layouts.ppid')

@push('front_css')
    <style>
        .fl-wrapper {
            z-index: 9999 !important;
        }
    </style>
@endpush

@section('content')

<!---------------------------------->
<!------- Breadcrumb Section ------->
<!---------------------------------->
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="/" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">beranda</a>
            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-white fw-500 m-0 p-0">Permohonan Informasi Online</p>
        </div>
        <div class="title-content">
            <h4 class="title fw-bold mb-3">
                Permohonan Informasi Online
            </h4>
        </div>
    </div>
</section>
<!---------------------------------->
<!----- End Breadcrumb Section ----->
<!---------------------------------->

<!---------------------------------->
<!--------- Main Section ----------->
<!---------------------------------->
<section class="over-top-section pio-section position-relative d-flex justify-content-center m-0 p-0">
    <div class="container over-top-container m-0 p-0">
        <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
            <p class="text-title text-capitalize m-0 p-0">permohonan informasi online</p>
            <hr class="hr-title-black flex-grow-1 ms-3 m-0 p-0">
        </div>
        <div class="row gx-4 m-0 p-0">
            <div class="col-12 col-lg-6">
                <div class="form-description m-0 p-0">
                    <p class="text-justify fs-8 lh-sm m-0 mb-3 p-0">
                        Form/Formulir Permohonan Informasi Online adalah pengganti Formulir Permohonan Informasi
                        (konvensional) yang menjadi salah satu syarat yang harus dilengkapi oleh pemohon informasi,
                        ketika informasi yang diinginkan merupakan informasi yang tidak tersedia di dalam Informasi
                        Berkala. Pemohon harus mengisi dan melengkapi semua data yang diminta dalam formulir, yang
                        terdiri dari :
                    </p>
                    <ol class="m-2 p-1">
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Nama :
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Masukkan nama lengkap pemohon sesuai dengan nama yang tercantum di dalam KTP
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">NIK :</p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">Masukan Nomor Induk Kependudukan (NIK) sesuai
                                dengan data di dalam KTP</p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Upload KTP :
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Unggah file KTP Pemohon dalam format JPG (gambar)
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                e-Mail :
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Masukkan alamat email yang aktif, karena nomor tiket akan dikirim ke alamat email
                                tersebut
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Jenis Permohonan :
                            </p>
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Silahkan pilih jenis Permohonan yang terdiri dari :
                            </p>
                            <ol type="a">
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Perorangan, jika pemohon berasal dari inisiasi pribadi (diri sendiri) tidak
                                    melibatkan organisasi. (pemohon tidak perlu mengunggah file akta)
                                </li>
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Organisasi, jika pemohon mengatasnamakan organisasi tertentu seperti LSM, Ormas,
                                    Partai, dll... (pemohon wajib mengunggah file akta organisasi yang masih berlaku)
                                </li>
                            </ol>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Upload Akta
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Sesuai dengan penjelasan poin ‘5’ huruf ‘b’ di atas, menu ini tidak akan aktif jika
                                jenis permohonan yang dipilih Perorangan
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Telepon
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Masukkan nomor telepon pemohon yang dapat dihubungi sehingga PPID dapat menghubungi
                                pemohon sewaktu-waktu dalam rangka memenuhi permohonan
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Faksimili
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Jika pemohon memilih cara mendapatkan informasi menggunakan faksimili, isikan nomor
                                faksimili di sini, jika tidak from ini boleh dikosongkan
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Alamat
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Masukkan alamat lengkap sesuai dengan data di dalam KTP, alamat ini akan digunakan
                                sebagai alamat pengiriman jika pemohon memilih cara mendapatkan salinan informasi
                                melalui Kurir atau Pos.
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Rincian Informasi yang dibutuhkan
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Rincikan informasi yang diminta pemohon dengan jelas, agar PPID dapat memberikan
                                informasi yang
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Tujuan Penggunaan Informasi
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Jelaskan tujuan penggunaan informasi yang diminta untuk keperluan/kepentingan apa,
                                karena alasan penggunaan informasi akan sangat mempengaruhi diterima atau ditolaknya
                                permohonan informasi tersebut
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Cara memperoleh Informasi
                            </p>
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Silahkan pilih cara memperoleh informasi yang terdiri dari :
                            </p>
                            <ol type="a">
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Melihat/Membaca/Mendengarkan/Mencatat, jika pemohon ingin mendapatkan informasi
                                    dengan salah satu cara tersebut, atau
                                </li>
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Mendapatkan Salinan Informasi (Hardcopy/Softcopy), jika pemohon ingin mendapatkan
                                    salinan informasi yang dibutuhkan baik dalam bentuk hardcopy maupun softcopy. Untuk
                                    pilihan menu ini, pemohon wajib memilih menu selanjutnya.
                                </li>
                            </ol>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Cara mendapatkan salinan infromasi
                            </p>
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Silahkan pilih cara mendapatkan salinan informasi (jika pemohon memilih poin ‘10’ huruf
                                ‘b’) yang terdiri dari :
                            </p>
                            <ol type="a">
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Mengambil Langsung, jika pemohon ingin mengambil secara langsung salinan informasi
                                    di kantor Badan Publik
                                </li>
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    e-Mail, jika pemohon ingin salinan informasi dikirimkan ke alamat email yang diisi
                                    pada form PIO
                                </li>
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Kurir, jika pemohon ingin salinan informasi dikirim melalui jasa kurir ke alamat
                                    yang diisi pada form PIO
                                </li>
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Pos, jika pemohon ingin salinan informasi dikirim melalui jasa Pos ke alamat yang
                                    diisi pada form PIO, atau
                                </li>
                                <li class="fs-8 lh-sm mb-1 m-0 p-0">
                                    Faksimili, jika pemohon ingin salinan informasi dikirim melalui faksimili yang diisi
                                    pada form PIO.
                                </li>
                            </ol>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Autentifikasi/menu pemeriksaan bahwa “saya bukan robot” harus dicoteng, sebagai langkah
                                terakhir proses pengisian formulir PIO. Jika pada halaman browser pemohon diminta untuk
                                mencocokkan gambar, selesaikan proses pencocokan sampai proses pemeriksaan berhasil yang
                                ditandai dengan tercontengnya menu reCAPTCHA.
                            </p>
                        </li>
                        <li class="fs-8 lh-sm mb-3 m-0 p-0">
                            <p class="text-justify fs-8 lh-sm mb-1 m-0 p-0">
                                Tombol “Kirim”
                            </p>
                            <p class="text-justify fs-8 lh-sm m-0 p-0">
                                Silahkan klik tombol “Kirim” jika semua data sudah lengkap dan jelas. Setelah permohonan
                                berhasil, maka akan ditampilkan “Nomor Tiket” dari formulir PIO. Nomor tiket ini secara
                                otomatis juga akan dikirimkan ke alamat email yang masukkan pemohon pada formulir PIO.
                                Nomor tiket digunakan sebagai kunci untuk melakukan pemantauan/ tracking proses
                                pemohonan yang diajukan.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-12 col-lg-6 overflow-hidden">
                <form action="{{ route('ppid.pio.store') }}" method="post" enctype="multipart/form-data">
                    @include('layouts.flashmessage')
                    <div class="row gx-3 m-0 p-0">
                        @csrf
                        <!-- Input Nama -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">NAMA</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Nama" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input NIK -->
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                    name="nik" placeholder="NIK" value="{{ old('nik') }}">
                                @error('nik')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Upload KTP -->
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="ktp" class="form-label">UPLOAD KTP</label>
                                <input type="file" class="form-control @error('ktp') is-invalid @enderror" id="ktp" name="ktp"
                                accept="image/*">
                                @error('ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Email -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">EMAIL</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Jenis Permohonan -->
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="jenis" class="form-label">JENIS PERMOHONAN</label>
                                <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                    id="jenis" name="jenis" placeholder="Jenis Permohonan"
                                    value="{{ old('jenis') }}">
                                @error('jenis')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Upload Akta -->
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="akta_kelahiran" class="form-label">UPLOAD AKTA</label>
                                <input type="file" class="form-control @error('akta_kelahiran') is-invalid @enderror" id="akta_kelahiran"
                                    name="akta_kelahiran">
                                @error('akta_kelahiran')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Telepon -->
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="telp" class="form-label">TELPON</label>
                                <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                    id="telp" name="telp" placeholder="telp" value="{{ old('telp') }}">
                                @error('telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Faksimili -->
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="faksimili" class="form-label">FAKSIMILI</label>
                                <input type="text" class="form-control @error('faksimili') is-invalid @enderror"
                                    id="faksimili" name="faksimili" placeholder="Faksimili"
                                    value="{{ old('faksimili') }}">
                                @error('faksimili')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Alamat -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">ALAMAT</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                    name="alamat" rows="3" placeholder="Alamat">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Rincian -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="rincian" class="form-label">RINCIAN INFORMASI YANG DIBUTUHKAN</label>
                                <textarea class="form-control @error('rincian') is-invalid @enderror" id="rincian"
                                    name="rincian" rows="3"
                                    placeholder="Rincian Informasi Yang Dibutuhkan">{{ old('rincian') }}</textarea>
                                @error('rincian')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Tujuan Penggunaan Informasi -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="tujuan_penggunaan" class="form-label">TUJUAN PENGGUNAAN INFORMASI</label>
                                <textarea class="form-control @error('tujuan_penggunaan') is-invalid @enderror" id="tujuan_penggunaan"
                                    name="tujuan_penggunaan" rows="3"
                                    placeholder="Tujuan Penggunaan Informasi">{{ old('tujuan') }}</textarea>
                                @error('tujuan_penggunaan')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="col-12">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-pio-custom text-white w-100">KIRIM</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!---------------------------------->
<!------- Main Section End --------->
<!---------------------------------->

@endsection
