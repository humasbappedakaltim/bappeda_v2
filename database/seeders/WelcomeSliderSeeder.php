<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WelcomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("welcome_sliders")->insert([
            [
                'id' => 25,
                'title' => 'PPID Bappeda Prov Kaltim',
                'active' => 1,
                'created_at' => '2021-10-28 03:12:31',
                'updated_at' => '2022-04-18 02:05:33',
                'image' => 'PHBX1Jk8ZewXMzQXUr0F.jpg',
                'orders' => 9,
                'slug' => 'ppid-bappeda-prov-kaltim',
            ],
            [
                'id' => 26,
                'title' => 'Bappeda Pedia',
                'active' => 1,
                'created_at' => '2021-10-28 03:12:54',
                'updated_at' => '2022-04-18 02:05:20',
                'image' => 'fZEA78B6B2nexHjp3UQQ.jpg',
                'orders' => 8,
                'slug' => 'bappeda-pedia',
            ],
            [
                'id' => 27,
                'title' => 'Maklumat Pelayanan',
                'active' => 1,
                'created_at' => '2021-10-28 03:51:39',
                'updated_at' => '2022-04-18 02:03:47',
                'image' => 'HR8Gp4Bw8nHWzNbwPBSA.jpg',
                'orders' => 3,
                'slug' => 'maklumat-pelayanan',
            ],
            [
                'id' => 28,
                'title' => 'Janji Pelayanan',
                'active' => 1,
                'created_at' => '2021-10-28 03:52:05',
                'updated_at' => '2022-04-18 02:04:35',
                'image' => 'SPuGeJAueUIIUlJ3OVk3.jpg',
                'orders' => 4,
                'slug' => 'janji-pelayanan',
            ],
            [
                'id' => 29,
                'title' => 'Motto Pelayanan',
                'active' => 1,
                'created_at' => '2021-10-28 03:52:25',
                'updated_at' => '2022-04-18 02:04:48',
                'image' => '2QmRI2CNmd0WW6PsBYB6.jpg',
                'orders' => 5,
                'slug' => 'motto-pelayanan',
            ],
            [
                'id' => 30,
                'title' => 'Pustaka Bappeda Kaltim',
                'active' => 1,
                'created_at' => '2021-10-28 04:22:45',
                'updated_at' => '2022-04-18 02:05:42',
                'image' => '3JXjYsrPrmVrMrTHvBA9.jpg',
                'orders' => 10,
                'slug' => 'pustaka-bappeda-kaltim',
            ],
            [
                'id' => 31,
                'title' => 'Hubungi Kami',
                'active' => 1,
                'created_at' => '2021-10-28 08:14:19',
                'updated_at' => '2022-04-18 02:03:34',
                'image' => 'ri5fqhI5pW5xffsrge68.jpg',
                'orders' => 2,
                'slug' => 'hubungi-kami',
            ],
            [
                'id' => 32,
                'title' => 'Survey Kepuasan Masyarakat (SKM)',
                'active' => 1,
                'created_at' => '2021-10-28 08:40:47',
                'updated_at' => '2023-03-01 12:35:56',
                'image' => 'fMdwTd8XB6qAQwyR3BrD.png',
                'orders' => 7,
                'slug' => 'survey-kepuasan-masyarakat-skm',
            ],
            [
                'id' => 33,
                'title' => 'Biaya Tarif Layanan',
                'active' => 0,
                'created_at' => '2021-10-29 04:28:53',
                'updated_at' => '2022-04-18 02:05:03',
                'image' => 'LYCWR8JoDvsqzPHl7eeG.jpg',
                'orders' => 6,
                'slug' => 'biaya-tarif-layanan',
            ],
            [
                'id' => 34,
                'title' => 'Spanduk Bersama Melawan Korupsi',
                'active' => 1,
                'created_at' => '2022-03-22 09:47:54',
                'updated_at' => '2023-03-01 13:10:16',
                'image' => 'Ju0W5CwVB9G102ZL7mCm.png',
                'orders' => 1,
                'slug' => 'spanduk-bersama-melawan-korupsi',
            ],
            [
                'id' => 35,
                'title' => 'Informasi Pelayanan',
                'active' => 1,
                'created_at' => '2024-10-14 01:09:47',
                'updated_at' => '2024-10-14 01:12:44',
                'image' => 'QRzzRvHS7QiPS5vtjnO0.png',
                'orders' => 1,
                'slug' => 'informasi-pelayanan',
            ],
        ]);
    }
}
