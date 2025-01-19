@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>
            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">{{ translate('profil bappeda') }}</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">
                {{ translate('profil bappeda') }}
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container px-0">
        <div class="row mx-0">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="title text-uppercase fw-bold fs-6">{{ translate('sejarah bappeda provinsi kalimantan timur') }}</h5>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>
                <p class="text-indent fs-8 lh-sm fw-light text-justify">
                   {{ translate('Dalam rangka usaha peningkatan keserasian pembangunan daerah diperlukan adanya peningkatan keselarasan antara pembangunan sektoral dan pembangunan daerah serta untuk menjamin laju perkembangan, keseimbangan dan kesinambungan pembangunan di daerah diperlukan perencanaan yang lebih menyeluruh, terarah dan terpadu. Berdasarkan pertimbangan tersebut maka dibentuklah Badan Perencanaan Pembangunan Daerah sebagaimana ditetapkan dalam keputusan Presiden Nomor 15 Tahun 1974 tanggal 18 Maret 1974 yang diperbaharui melalui Keputusan Presiden Republik Indonesia Nomor 27 Tahun 1980 tentang Pembentukan Badan Perencanaan Pembangunan Daerah dan Surat Keputusan Mendagri tanggal 7 Juli 1974 tentang susunan organisasi dan tata kerja badan perencanaan pembangunan daerah yang lebih lanjut oleh Menteri Dalam Negeri diatur dalam Surat Keputusan Nomor 185 Tahun 1980 tentang Pedoman Organisasi dan Tata Kerja Badan Perencanaan Pembangunan Daerah Tingkat I dan Badan Perencanaan Pembangunan Daerah Tingkat II.')}}
                </p>
                <p class="text-indent fs-8 lh-sm fw-light text-justify">
                    {{ translate('Pemerintah Provinsi Daerah Tingkat I Kalimantan Timur sebelum ditetapkannya kedua ketentuan tersebut telah memiliki Badan Perencanaan Pembangunan Daerah Tingkat I yang dibentuk dengan Surat Keputusan Gubernur Kepala Daerah Tingkat I Kalimantan Timur Nomor 161 Tahun 1974. Sesuai dengan maksud daripada pasal 107 ayat (1) Keputusan Menteri Dalam Negeri Nomor 185 Tahun 1980 maka ditetapkanlah Peraturan Daerah Provinsi Daerah Tingkat I Kalimantan Timur Nomor 3 Tahun 1981 tentang Pembentukan, Susunan Organisasi dan Tata Kerja Badan Perencanaan Pembangunan Daerah Tingkat I Kalimantan Timur yang merupakan pengganti dari Surat Keputusan Nomor 161 Tahun 1974.') }}
                </p>
                <p class="text-indent fs-8 lh-sm fw-light text-justify">
                    {{ translate('Keberadaan Bappeda Provinsi Kalimantan Timur sebagai unsur perencana penyelenggaraan pemerintah daerah, termuat dalam Peraturan Gubernur Kalimantan Timur Nomor 46 Tahun 2008 dan Peraturan Daerah Nomor 9 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Provinsi Kalimantan Timur, sedangkan dalam melaksanakan tugas dan fungsinya Bappeda Provinsi Kalimantan Timur mengacu Peraturan Gubernur Nomor 76 Tahun 2016 tentang Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Bappeda Provinsi Kalimantan Timur.') }}
                </p>
                <p class="text-indent fs-8 lh-sm fw-light text-justify">
                   {{ translate(' Kemudian Sesuai amanat Permendagri Nomor 5 Tahun 2017 tentang Pedoman Nomenklatur Perangkat Daerah Provinsi dan Daerah Kabupaten/Kota yang Melaksanakan Fungsi Penunjang Penyelenggaraan Urusan Pemerintahan dan Surat dari Kepala Bappeda Prov. Kaltim Nomor 060/95/B.Um-Bapp/2019 Tanggal 8 Januari 2019 tentang Perubahan SOTK Bappeda Prov. Kaltim, maka Peraturan Gubernur Kalimantan Timur Nomor 76 Tahun 2016 tentang Pembentukan dan Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur sudah tidak sesuai dengan perkembangan keadaan sehingga perlu diganti. Pada tanggal 30 Maret 2020 ditetapkan Peraturan Gubernur Kalimantan Timur Nomor 11 Tahun 2020 tentang Pembentukan dan Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur yang baru.')}}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
