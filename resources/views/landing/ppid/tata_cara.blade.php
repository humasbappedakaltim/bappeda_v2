@extends('layouts.ppid')

@section('content')
  <!---------------------------------->
    <!------- Breadcrumb Section ------->
    <!---------------------------------->
    <section class="breadcrumb-section position-relative d-flex justify-content-center m-0 p-0">
        <div class="container custom-container m-0 p-0">
            <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
                <a href="/" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">
                    {{ translate('beranda') }}
                </a>
                <i class="bi bi-chevron-right text-white m-0 p-0"></i>
                <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">
                    {{ translate('tata cara') }}
                </p>
            </div>
            <div class="title-content">
                <h4 class="title text-capitalize fw-bold mb-3">
                    {{ translate('tata cara') }}
                </h4>
                <p class="fs-8 text-white lh-sm">
                    {{ translate('Tata Cara') }}
                </p>
            </div>
        </div>
    </section>
    <!---------------------------------->
    <!----- End Breadcrumb Section ----->
    <!---------------------------------->

    <!---------------------------------->
    <!--------- Main Section ----------->
    <!---------------------------------->
    <section class="over-top-section position-relative d-flex justify-content-center my-0">
        <div class="container over-top-container px-0">
            <div class="row mx-0">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="title text-uppercase fw-bold fs-6">
                            {{ translate('Tata Cara') }}
                        </h5>
                        <hr class="hr-title-black flex-grow-1 ms-3">
                    </div>
                    <p class="fw-bold mb-3">
                        {{ translate('Tata Cara Permohonan Informasi') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Pemohon informasi publik mengajukan permintaan informasi publik ke badan publik baik dengan cara datang langsung ke kantor badan publik maupun melalui surat elektronik (email), telepon, dan pendaftaran permohonan via website badan publik yang menyediakan layanan e-PPID (layanan pengajuan permohonan informasi publik secara online).') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Pemohon informasi publik harus menyerahkan dokumen identitas diri yang masih berlaku (KTP) dan menyebutkan subjek atau jenis informasi publik yang diminta dan cara penyampaian informasi publik yang diinginkan. Bila permohonan tidak lengkap, Pejabat Pengelola Informasi dan Dokumentasi (PPID) badan publik berhak meminta pemohon informasi publik untuk melengkapi permohonan.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('PPID pada badan publik mencatat semua yang disebutkan oleh pemohon informasi publik dalam formulir permohonan yang disediakan oleh PPID badan publik.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Pemohon informasi publik harus meminta tanda bukti/tanda terima kepada PPID badan publik sebagai bukti bahwa pemohon informasi publik telah melakukan permintaan informasi publik ke badan publik tersebut.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Permohonan informasi publik wajib direspon secara tertulis atau dipenuhi oleh badan publik dalam jangka waktu 10 hari kerja sejak permintaan informasi publik dari pemohon informasi publik diterima oleh PPID badan publik.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Badan publik bisa meminta tambahan waktu 7 hari kerja lagi apabila badan publik memerlukan tambahan waktu lebih dari 10 hari kerja untuk merespon secara tertulis atau memenuhi permintaan informasi publik dari pemohon informasi publik.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Apabila dalam waktu 17 hari kerja sejak permintaan informasi publik dari pemohon informasi publik diterima oleh PPID badan publik, badan publik belum merespon secara tertulis ataupun belum memenuhi permintaan informasi publik, ataupun badan publik sudah merespon secara tertulis dan memenuhi permintaan informasi publik namun dianggap atau dinilai pemohon informasi publik belum sesuai permintaan informasi publik yang diajukan ataupun belum memuaskan pemohon informasi publik, maka pemohon informasi publik berhak mengajukan surat keberatan kepada atasan PPID badan publik.') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Apabila dalam jangka waktu 30 hari kerja sejak diterimanya surat keberatan pemohon informasi publik pada atasan PPID badan publik, surat keberatan pemohon informasi publik tersebut tidak direspon secara tertulis ataupun permintaan informasi publik tidak dipenuhi sesuai permintaan yang diajukan pemohon informasi publik, ataupun surat keberatan dari pemohon informasi publik pada atasan PPID sudah direspon secara tertulis dan permintaan informasi publik dianggap sudah dipenuhi oleh badan publik namun pemohon informasi publik menganggap dan menilai respon dan tanggapan tidak sesuai dengan permintaan informasi publik yang diajukan oleh pemohon informasi publik pada badan publik, maka pemohon informasi publik berhak mengajukan permohonan sengketa informasi publik kepada komisi informasi sesuai tingkatan dan kewenangannya.') }}
                        </li>
                    </ol>
                    <p class="fw-bold mb-3">
                        {{ translate('Tata Cara Pengajuan Keberatan') }}
                    </p>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Pemohon informasi publik dapat mengajukan keberatan secara tertulis kepada Atasan PPID paling lambat 30 (tiga puluh) hari kerja setelah ditemukannya alasan sebagai berikut:') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Penolakan atas permohonan informasi publik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Tidak disediakannya informasi berkala;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Tidak ditanggapinya permohonan informasi publik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Permohonan informasi publik ditanggapi tidak sebagaimana yang diminta;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Tidak dipenuhinya permohonan informasi publik;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Pengenaan biaya yang tidak wajar;') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Dan/atau penyampaian informasi publik yang melebihi waktu yang diatur dalam peraturan perundang-undangan.') }}
                        </li>
                    </ol>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Dalam hal pengajuan keberatan disampaikan secara tidak tertulis, Tim Sekretariat PPID mengarahkan Pemohon Informasi Publik yang mengajukan keberatan atau pihak penerima kuasa untuk mengisi formulir keberatan sesuai format. Dalam mengajukan keberatan, pemohon wajib menyertakan identitas pemohon yang sah sebagaimana syarat dalam permohonan informasi.') }}

                        {{ translate('Pemohon Keberatan harus menyertakan dokumen sebagai berikut:') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Surat tanggapan/jawaban permohonan informasi dari PPID') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Formulir tanda terima permohonan informasi') }}
                        </li>
                    </ol>
                    <p class="text-indent fs-8 lh-sm fw-light text-justify">
                        {{ translate('Pemohon Keberatan harus menyertakan dokumen sebagai berikut:') }}
                        {{ translate('Tim Sekretariat PPID wajib memberikan salinan formulir keberatan disertai nomor registrasi keberatan kepada Pemohon Informasi Publik yang mengajukan keberatan atau kuasanya sebagai tanda terima pengajuan keberatan.') }}
                    </p>
                    <ol>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Surat tanggapan/jawaban permohonan informasi dari PPID') }}
                        </li>
                        <li class="text-justify fs-8 fw-light lh-sm">
                            {{ translate('Formulir tanda terima permohonan informasi') }}
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

