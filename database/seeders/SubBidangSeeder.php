<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubBidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('sub_bidangs')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Sub Bagian Umum',
                    'bidang_id' => 1,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bagian Umum'),
                    'created_at' => '2022-08-30 08:22:00',
                    'updated_at' => '2022-08-30 08:23:39',
                ],
                [
                    'id' => 2,
                    'name' => 'Sub Bagian Perencanaan Program',
                    'bidang_id' => 1,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bagian Perencanaan Program'),
                    'created_at' => '2022-08-30 08:22:00',
                    'updated_at' => '2022-08-30 08:24:40',
                ],
                [
                    'id' => 3,
                    'name' => 'Sub Bagian Keuangan',
                    'bidang_id' => 1,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bagian Keuangan'),
                    'created_at' => '2022-08-30 08:24:00',
                    'updated_at' => '2022-08-30 08:24:30',
                ],
                [
                    'id' => 4,
                    'name' => 'Sub Bidang Perencanaan dan Pendanaan',
                    'bidang_id' => 2,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Perencanaan dan Pendanaan'),
                    'created_at' => '2022-08-30 08:25:02',
                    'updated_at' => '2022-08-30 08:25:02',
                ],
                [
                    'id' => 5,
                    'name' => 'Sub Bidang Analisis Data dan Informasi',
                    'bidang_id' => 2,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Analisis Data dan Informasi'),
                    'created_at' => '2022-08-30 08:25:00',
                    'updated_at' => '2022-08-30 08:25:23',
                ],
                [
                    'id' => 6,
                    'name' => 'Sub Bidang Pengendalian, Evaluasi dan Pelaporan',
                    'bidang_id' => 2,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Pengendalian, Evaluasi dan Pelaporan'),
                    'created_at' => '2022-08-30 08:25:00',
                    'updated_at' => '2022-08-30 08:26:55',
                ],
                [
                    'id' => 7,
                    'name' => 'Sub Bidang Pengembangan Sumber Daya Manusia',
                    'bidang_id' => 3,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Pengembangan Sumber Daya Manusia'),
                    'created_at' => '2022-08-30 08:25:00',
                    'updated_at' => '2022-08-30 08:26:17',
                ],
                [
                    'id' => 8,
                    'name' => 'Sub Bidang Kesejahteraan Rakyat',
                    'bidang_id' => 3,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Kesejahteraan Rakyat'),
                    'created_at' => '2022-08-30 08:26:38',
                    'updated_at' => '2022-08-30 08:26:38',
                ],
                [
                    'id' => 9,
                    'name' => 'Sub Bidang Pemerintahan',
                    'bidang_id' => 3,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Pemerintahan'),
                    'created_at' => '2022-08-30 08:27:17',
                    'updated_at' => '2022-08-30 08:27:17',
                ],
                [
                    'id' => 10,
                    'name' => 'Sub Bidang Pertanian dan Perikanan',
                    'bidang_id' => 4,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Pertanian dan Perikanan'),
                    'created_at' => '2022-08-30 08:28:02',
                    'updated_at' => '2022-08-30 08:28:02',
                ],
                [
                    'id' => 11,
                    'name' => 'Sub Bidang Industri, Perdagangan, Koperasi, Investasi dan Pariwisata',
                    'bidang_id' => 4,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Industri, Perdagangan, Koperasi, Investasi dan Pariwisata'),
                    'created_at' => '2022-08-30 08:28:12',
                    'updated_at' => '2022-08-30 08:28:12',
                ],
                [
                    'id' => 12,
                    'name' => 'Sub Bidang Sumber Daya Alam dan Lingkungan Hidup',
                    'bidang_id' => 4,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Sumber Daya Alam dan Lingkungan Hidup'),
                    'created_at' => '2022-08-30 08:28:38',
                    'updated_at' => '2022-08-30 08:28:38',
                ],
                [
                    'id' => 13,
                    'name' => 'Sub Bidang Infrastruktur Kebinamargaan dan Perhubungan',
                    'bidang_id' => 5,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Infrastruktur Kebinamargaan dan Perhubungan'),
                    'created_at' => '2022-08-30 08:29:04',
                    'updated_at' => '2022-08-30 08:29:04',
                ],
                [
                    'id' => 14,
                    'name' => 'Sub Bidang Infrastruktur Sumber Daya Air dan Kewilayahan',
                    'bidang_id' => 5,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Infrastruktur Sumber Daya Air dan Kewilayahan'),
                    'created_at' => '2022-08-30 08:29:11',
                    'updated_at' => '2022-08-30 08:29:11',
                ],
                [
                    'id' => 15,
                    'name' => 'Sub Bidang Infrastruktur Keciptakaryaan dan Permukiman',
                    'bidang_id' => 5,
                    'slug' => Str::slug(Str::random(4) . ' ' . 'Sub Bidang Infrastruktur Keciptakaryaan dan Permukiman'),
                    'created_at' => '2022-08-30 08:29:18',
                    'updated_at' => '2022-08-30 08:29:18',
                ],
            ]
        );
    }
}
