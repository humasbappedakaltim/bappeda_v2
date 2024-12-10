<?php

namespace Database\Seeders;

use App\Models\Penghargaan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenghargaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [

            [
                "id" => 1,
                "title" => 'Bappeda Kaltim terima Sertifikat ISO 9001 2008',
                "description" => '-',
                "foto" => '6qRCFsDR.JPG',
                "created_at" => '2017-05-08 15:53:12',
                "updated_at" => '2017-05-08 15:53:12',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 2,
                "title" => 'Terbaik IIi Wilayah Tengah dlm Kelengkapan Pelaporan RAD-PG Tahun 2013',
                "description" => 'Penghargaan BAPPENAS Kepada Provinsi Kaltim Terbaik IIi Wilayah Tengah dlm Kelengkapan Pelaporan RAD-PG Tahun 2013',
                "foto" => 'RxaJCTbw.jpg',
                "created_at" => '2017-05-08 17:18:30',
                "updated_at" => '2017-05-10 05:17:05',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 3,
                "title" => 'Terbaik II Wilayah Tengah dlm Kelengkapan Pelaporan RAD-PG Tahun 2014',
                "description" => 'Penghargaan BAPPENAS Kepada Provinsi Kaltim Terbaik II Wilayah Tengah dlm Kelengkapan Pelaporan RAD-PG Tahun 2014',
                "foto" => 'iN2TUA7F.jpg',
                "created_at" => '2017-05-08 17:22:12',
                "updated_at" => '2017-05-10 05:16:43',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 4,
                "title" => 'Penghargaan Badan Informasi Geospasial kpd Pemprov Kaltim sbg Favorit Pemb. Jaringan Informasi Geospasial Provinsi Tahun 2014',
                "description" => 'Penghargaan Badan Informasi Geospasial kpd Pemprov Kaltim sbg Favorit Pemb. Jaringan Informasi Geospasial Provinsi Tahun 2014',
                "foto" => 'RG1K5P9A.jpg',
                "created_at" => '2017-05-08 17:23:22',
                "updated_at" => '2017-05-08 17:23:22',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 5,
                "title" => 'Terbaik II  Tingkat Provinsi se Indonesia Anugerah Pangripta Nusantara 2015',
                "description" => 'Penghargaan BAPPENAS Anugerah Pangripta Nusantara 2015 Kepada Provinsi Kaltim Terbaik II  Tingkat Provinsi se Indonesia',
                "foto" => '5BL6JLgD.jpg',
                "created_at" => '2017-05-08 17:23:49',
                "updated_at" => '2017-05-10 05:15:42',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 6,
                "title" => 'Terbaik II Pengelolaan Media Center Tingkat  SKPD Kaltim 2015',
                "description" => 'Penghargaan Gub kpd BAPPEDA Kaltim Terbaik II Pengelolaan Media Center Tingkat  SKPD Kaltim 2015',
                "foto" => 'RYoibug4.jpg',
                "created_at" => '2017-05-08 17:33:12',
                "updated_at" => '2017-05-10 05:14:40',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 7,
                "title" => 'Terbaik II Pengelolaan Website Tingkat  SKPD Kaltim 2015',
                "description" => 'Penghargaan Gub kpd BAPPEDA Kaltim Terbaik II Pengelolaan Website Tingkat  SKPD Kaltim 2015',
                "foto" => 'vtp5uU87.jpg',
                "created_at" => '2017-05-08 17:37:22',
                "updated_at" => '2017-05-10 05:14:12',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 8,
                "title" => 'Terbaik III Penerapan SAKIP dlm rangka HUT Kaltim ke 60 th 2017',
                "description" => 'Penghargaan Gub kpd BAPPEDA Kaltim Terbaik III Penerapan SAKIP dlm rangka HUT Kaltim ke 60 th 2017',
                "foto" => 'oMwAjnIy.JPG',
                "created_at" => '2017-05-08 17:39:04',
                "updated_at" => '2017-05-10 05:13:52',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 9,
                "title" => 'Terbaik I Pelaksana Urusan Pemerintahan dlm rangka HUT Kaltim ke 60 th 2017',
                "description" => 'Penghargaan Gub kpd BAPPEDA Kaltim Terbaik I Pelaksana Urusan Pemerintahan dlm rangka HUT Kaltim ke 60 th 2017',
                "foto" => 'XZsWj6vP.JPG',
                "created_at" => '2017-05-08 17:40:21',
                "updated_at" => '2017-05-10 05:13:32',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 10,
                "title" => 'Terbaik II Kaltim Fair 2017 Kategori Stand Desain Terbaik Unsur Organisasi Perangkat Daerah 2017 dlm rangka HUT Kaltim ke 60 th 2017',
                "description" => 'Penghargaan Gub kpd BAPPEDA Kaltim Terbaik II Kaltim Fair 2017 Kategori Stand Desain Terbaik Unsur Organisasi Perangkat Daerah 2017 dlm rangka HUT Kaltim ke 60 th 2017',
                "foto" => 'bu09Gg7v.JPG',
                "created_at" => '2017-05-08 17:40:48',
                "updated_at" => '2017-05-10 05:13:17',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 11,
                "title" => 'Terbaik III Pengelolaan Layanan Informasi Publik Tahun 2018',
                "description" => 'Penghargaan Gub Kaltim kepada BAPPEDA Kaltim Terbaik III dalam Pengelolaan Layanan Informasi Publik 2018',
                "foto" => '3GvUVdZ1.JPG',
                "created_at" => '2018-05-10 12:15:22',
                "updated_at" => '2018-05-10 12:15:22',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 12,
                "title" => 'Terbaik II Kaltim dalam Laporan Keuangan Tingkat Provinsi Tahun 2018',
                "description" => 'Penghargaan dari Kementerian Keuangan kepada Pemprov Kaltim Terbaik II dalam Laporan Keuangan 2018',
                "foto" => '6V3cWpzJ.jpg',
                "created_at" => '2018-05-15 14:22:30',
                "updated_at" => '2018-05-15 14:22:30',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 13,
                "title" => 'Terbaik I Layanan Administrasi dan Pemenuhan Data Tahun 2019',
                "description" => 'Penghargaan dari berbagai lembaga kepada Pemprov Kaltim Terbaik I dalam Layanan Administrasi dan Pemenuhan Data Tahun 2019',
                "foto" => 'Kw8xF5VG.jpg',
                "created_at" => '2019-06-22 10:31:10',
                "updated_at" => '2019-06-22 10:31:10',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 14,
                "title" => 'Penghargaan Sertifikasi Sistem Manajemen ISO 27001 Tahun 2019',
                "description" => 'Sertifikasi ISO 27001 diberikan untuk sistem keamanan informasi di Pemprov Kaltim',
                "foto" => 'ISO27001-Kaltim.jpg',
                "created_at" => '2019-12-03 08:11:40',
                "updated_at" => '2019-12-03 08:11:40',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 15,
                "title" => 'Terbaik II dalam Inovasi Pemenuhan Target dan Penyaluran Anggaran Tahun 2020',
                "description" => 'Penghargaan untuk Pemprov Kaltim dalam inisiatif pemenuhan target anggaran tahun 2020',
                "foto" => 'Anggaran2020.jpg',
                "created_at" => '2020-01-15 10:10:10',
                "updated_at" => '2020-01-15 10:10:10',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 16,
                "title" => 'Terbaik III dalam Implementasi Teknologi Informasi dan Sistem Data Tahun 2020',
                "description" => 'Penghargaan untuk Pemprov Kaltim dalam penerapan TI dan pemantauan sistem data berbasis teknologi',
                "foto" => 'TechInfo2020.jpg',
                "created_at" => '2020-08-10 09:30:00',
                "updated_at" => '2020-08-10 09:30:00',
                "deleted_at" => NULL,
                "slug" => Str::slug(Str::random(10)),
            ],
            [
                "id" => 17,
                "title" => 'Terbaik I dalam Pemenuhan Target Pendanaan Berbasis Inovasi 2021',
                "description" => 'Penghargaan dari berbagai lembaga kepada Pemprov Kaltim dalam pemenuhan target pendanaan inovatif 2021',
                "foto" => 'pendanaan2021.jpg',
                "created_at" => '2021-02-12 11:12:22',
                "updated_at" => '2021-02-12 11:12:22',
            ]
        ];

        foreach ($datas as $key => $value) {
            Penghargaan::create($value);
        }

        
    }
}
