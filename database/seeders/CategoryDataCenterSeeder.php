<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryDataCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            \DB::table('category_data_centers')->insert([
                ['id' => 7, 'name' => 'Data Dukung My SAPK-PDM', 'created_at' => '2021-08-15 19:46:00', 'updated_at' => '2022-12-06 06:37:38', 'order' => 1, 'slug' => Str::slug(Str::random(5))],
                ['id' => 8, 'name' => 'Ibu Kota Negara', 'created_at' => '2021-09-29 20:41:00', 'updated_at' => '2022-12-06 06:40:05', 'order' => 6, 'slug' => Str::slug(Str::random(5))],
                ['id' => 9, 'name' => 'Dasar Peraturan', 'created_at' => '2021-10-26 00:49:00', 'updated_at' => '2022-12-06 06:40:39', 'order' => 4, 'slug' => Str::slug(Str::random(5))],
                ['id' => 11, 'name' => 'Standar Operasional Prosedur (SOP)', 'created_at' => '2021-10-27 22:33:00', 'updated_at' => '2022-03-27 10:49:19', 'order' => 10, 'slug' => Str::slug(Str::random(5))],
                ['id' => 12, 'name' => 'Maklumat Pelayanan', 'created_at' => '2021-10-28 08:16:00', 'updated_at' => '2022-12-06 06:39:04', 'order' => 12, 'slug' => Str::slug(Str::random(5))],
                ['id' => 13, 'name' => 'Laporan', 'created_at' => '2021-10-28 08:28:00', 'updated_at' => '2022-12-06 06:40:01', 'order' => 7, 'slug' => Str::slug(Str::random(5))],
                ['id' => 14, 'name' => 'Prosedur', 'created_at' => '2021-10-28 08:28:00', 'updated_at' => '2022-12-06 06:40:07', 'order' => 5, 'slug' => Str::slug(Str::random(5))],
                ['id' => 15, 'name' => 'Survey Kepuasan Masyarakat (SKM)', 'created_at' => '2021-10-29 07:31:00', 'updated_at' => '2022-12-06 06:39:07', 'order' => 11, 'slug' => Str::slug(Str::random(5))],
                ['id' => 16, 'name' => 'PPID Bappeda Provinsi Kalimantan Timur', 'created_at' => '2021-10-30 13:13:00', 'updated_at' => '2022-12-06 06:39:39', 'order' => 8, 'slug' => Str::slug(Str::random(5))],
                ['id' => 17, 'name' => 'Formulir Permohonan Informasi dan Keberatan Informasi', 'created_at' => '2021-10-30 15:36:00', 'updated_at' => '2023-02-27 01:45:58', 'order' => 14, 'slug' => Str::slug(Str::random(5))],
                ['id' => 18, 'name' => 'Daftar Informasi Yang Dikecualikan', 'created_at' => '2021-10-30 17:33:00', 'updated_at' => '2022-12-06 06:38:36', 'order' => 13, 'slug' => Str::slug(Str::random(5))],
                ['id' => 19, 'name' => 'Kaltim Dalam Angka (Data BPS)', 'created_at' => '2021-10-31 01:57:00', 'updated_at' => '2022-12-06 06:37:55', 'order' => 16, 'slug' => Str::slug(Str::random(5))],
                ['id' => 20, 'name' => 'Laporan Perekonomian Provinsi Kalimantan Timur', 'created_at' => '2021-10-31 03:14:00', 'updated_at' => '2023-01-10 08:56:13', 'order' => 17, 'slug' => Str::slug(Str::random(5))],
                ['id' => 21, 'name' => 'TPB/SDGs Kalimantan Timur', 'created_at' => '2021-12-17 12:18:00', 'updated_at' => '2023-02-06 12:45:05', 'order' => 3, 'slug' => Str::slug(Str::random(5))],
                ['id' => 23, 'name' => 'Laporan Resume Pengadaan Barang Jasa', 'created_at' => '2022-03-17 04:54:00', 'updated_at' => '2022-12-06 06:39:36', 'order' => 9, 'slug' => Str::slug(Str::random(5))],
                ['id' => 24, 'name' => 'Standar Pelayanan', 'created_at' => '2022-03-27 10:43:00', 'updated_at' => '2022-12-06 06:37:46', 'order' => 15, 'slug' => Str::slug(Str::random(5))],
                ['id' => 25, 'name' => 'Buku Panduan Sistem Analisis Data Perencanaan Pembangunan (SADAP)', 'created_at' => '2022-12-02 04:17:00', 'updated_at' => '2023-01-10 08:56:29', 'order' => 19, 'slug' => Str::slug(Str::random(5))],
                ['id' => 26, 'name' => 'Analisis Jabatan (ANJAB) dan Analisis Beban Kerja (ABK)', 'created_at' => '2022-12-06 06:50:00', 'updated_at' => '2023-01-10 08:56:17', 'order' => 2, 'slug' => Str::slug(Str::random(5))],
                ['id' => 27, 'name' => 'Laporan Analisis Ketimpangan Wilayah', 'created_at' => '2023-01-10 08:57:10', 'updated_at' => '2023-01-10 08:57:10', 'order' => 18, 'slug' => Str::slug(Str::random(5))],
            ]);
    }
}
