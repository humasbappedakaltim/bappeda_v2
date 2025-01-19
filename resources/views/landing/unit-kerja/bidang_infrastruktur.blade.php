@extends('layouts.landing')

@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="{{ route('landing.index') }}" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">{{ translate('beranda') }}</a>

            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-white fw-500 m-0 p-0">{{ translate('Unit Kerja - Infraswil') }}</p>
        </div>
        <div class="title-content">
            <h4 class="title fw-bold mb-3">
                {{ translate('Bidang Infrastruktur dan Kewilayahan') }}
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
<section class="over-top-section position-relative d-flex justify-content-center m-0 p-0">
    <div class="container over-top-container m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-12 px-0">
                <p class="title text-uppercase fs-4 fw-bold">
                    {{ translate('Kepala Bidang Infrastruktur dan Kewilayahan') }}
                </p>
                <hr class="hr-title-black flex-grow-1 mb-5">
                <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melaksanakan kegiatan di Bappeda dalam lingkup perencanaan bidang fisik sarana dan prasarana yang meliputi aspek bina marga, perhubungan, telekomunikasi, informatika, persandian, pengairan, pengelolaan sumberdaya air, cipta karya, pengelolaan sumber daya alam, tata ruang wilayah, lingkungan hidup, dan pertanahan guna mencapai kesinergitasan mulai dari tingkat daerah sampai nasional sesuai dengan peraturan dan ketentuan perundangan yang berlaku untuk mendukung kelancaran pelaksanaan tugas.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melaksanakan penyiapan bahan perumusan kebijakan, koordinasi, pembinaan, bimbingan, pengendalian, pengembangan dan perencanaanteknis bidang infrastruktur dan kewilayahan.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                <ol class="mb-5">
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                </ol>
                <p class="fs-8 fw-bold mb-2">{{ translate('Fungsi :')}}</p>
                <ol class="mb-5">
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                </ol>
                <p class="title text-uppercase fs-4 fw-bold">
                    {{ translate('Kepala Sub Bidang Infrastruktur Kebinamargaan dan Perhubungan') }}
                </p>
                <hr class="hr-title-black flex-grow-1 mb-5">
                <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :')}}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melakukan pengumpulan dan penyiapan bahan koordinasi, pembinaan, pengaturan teknis dan pengendalian dalam penyusunan rencana dan program pembangunan infrastruktur kebinamargaan dan perhubungan sesuai dengan dokumen-dokumen perencanaan dan ketentuan yang berlaku guna mencapai kesinergitasan dari tingkat daerah sampai nasional dalam rangka mendukung kelancaran sebagian tugas bidang infrastruktur dan kewilayahan.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :')}}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melakukan pengumpulan dan penyiapan bahan koordinasi, pembinaan, pengaturan teknis dan pengendalian dalam penyusunan rencana dan program pembangunan infrastruktur kebinamargaan dan perhubungan.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :')}}</p>
                <ol class="mb-5">
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                </ol>
                <p class="title text-uppercase fs-4 fw-bold">
                    {{ translate('Kepala Sub Bidang Infrastruktur Sumber Daya Air dan Kewilayahan') }}
                </p>
                <hr class="hr-title-black flex-grow-1 mb-5">
                <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melakukan pengumpulan dan penyiapan bahan koordinasi, pembinaan, pengaturan teknis dan pengendalian dalam penyusunan rencana dan program pembangunan infrastruktur sumber daya air dan kewilayahan sesuai dengan dokumen-dokumen perencanaan dan prosedur yang berlaku guna mencapai kesinergitasan mulai dari tingkat daerah sampai nasional dalam rangka mendukung kelancaran sebagian tugas bidang infrastruktur dan kewilayahan.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Tugas Pokok :') }}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Melakukan pengumpulan dan penyiapan bahan koordinasi, pembinaan, pengaturan teknis dan pengendalian dalam penyusunan rencana dan program pembangunan infrastruktur sumber daya air dan kewilayahan.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Uraian Tugas :') }}</p>
                <ol class="mb-5">
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                </ol>
                <p class="title text-uppercase fs-4 fw-bold">
                    {{ translate('Kepala Sub Bidang Infrastruktur Keciptakaryaan dan Permukiman') }}
                </p>
                <hr class="hr-title-black flex-grow-1 mb-5">
                <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melakukan pengumpulan dan penyiapan bahan koordinasi, pembinaan, pengaturan teknis dalam penyusunan rencana dan program pembangunan infrastruktur keciptakaryaan dan pemukiman.sesuai dengan dokumen-dokumen perencanaan dan prosedur yang berlaku guna mencapai kesinergitasan mulai dari tingkat daerah sampai nasional dalam rangka mendukung kelancaran sebagian tugas bidang infrastruktur dan kewilayahan.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                <p class="text-justify fs-8 fw-light lh-sm mb-4">{{ translate('Memimpin dan melakukan pengumpulan dan penyiapan bahan koordinasi, pembinaan, pengaturan teknis dalam penyusunan rencana dan program pembangunan infrastruktur keciptakaryaan dan pemukiman.sesuai dengan dokumen-dokumen perencanaan dan prosedur yang berlaku guna mencapai kesinergitasan mulai dari tingkat daerah sampai nasional dalam rangka mendukung kelancaran sebagian tugas bidang infrastruktur dan kewilayahan.') }}
                </p>
                <p class="fs-8 fw-bold mb-2">{{ translate('Ikhtisar Jabatan :') }}</p>
                <ol>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                    <li class="text-justify fs-8 fw-light lh-sm mb-1">{{ translate('Menyusun rencana operasional di lingkungan Bidang Perencanaan Wilayah berdasarkan program kerja badan serta petunjuk pimpinan sebagai pedoman pelaksanaan tugas;') }}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!------- Main Section End --------->
<!---------------------------------->
@endsection
