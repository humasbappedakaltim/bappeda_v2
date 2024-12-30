<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppBappedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('app_bappedas')->insert([
            [
                'id' => 1,
                'name' => 'Elib',
                'active' => 1,
                'foto' => 'W0zC53jahELL985Mzk7I.png',
                'created_at' => '2020-09-18 05:35:47',
                'updated_at' => '2021-08-08 20:43:01',
                'link' => 'https://pustaka.bappedakaltim.com/',
                'orders' => 5,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 2,
                'name' => 'SIPD Kemendagri',
                'active' => 1,
                'foto' => 'K3XLmu9YLSoic9Wmb92w.png',
                'created_at' => '2020-09-18 05:36:50',
                'updated_at' => '2024-07-31 04:08:58',
                'link' => 'https://sipd.kemendagri.go.id/',
                'orders' => 1,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 3,
                'name' => 'Evaluasi',
                'active' => 1,
                'foto' => 'HdLntT3qHn8YCTe10wxC.png',
                'created_at' => '2020-09-18 05:39:06',
                'updated_at' => '2023-01-14 12:19:34',
                'link' => 'https://evdoren.kaltimprov.go.id/login',
                'orders' => 7,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 4,
                'name' => 'SIDIK Bappeda',
                'active' => 1,
                'foto' => '5LlyhmYqvBNQMFhmxEJP.png',
                'created_at' => '2021-02-03 23:32:43',
                'updated_at' => '2021-10-21 10:43:28',
                'link' => 'https://ppid.kaltimprov.go.id/data-sidik?penerbit_dip_id=35&tahun=',
                'orders' => 8,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 5,
                'name' => 'Portal Pantau Kegiatan Bappeda Kaltim',
                'active' => 1,
                'foto' => 'L9g7YOoKAnmY1mIvPzy0.png',
                'created_at' => '2021-08-08 20:39:12',
                'updated_at' => '2023-02-27 00:27:28',
                'link' => 'https://portal-pantau-kegiatan.deka.dev/portal',
                'orders' => 6,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 6,
                'name' => 'SP4N LAPOR',
                'active' => 1,
                'foto' => 'PO9GF63Jj3Zo7Amgs2Xq.png',
                'created_at' => '2021-10-29 01:18:56',
                'updated_at' => '2021-10-29 01:18:56',
                'link' => 'https://www.lapor.go.id/',
                'orders' => 9,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 7,
                'name' => 'PION',
                'active' => 1,
                'foto' => '3QI6UFhIci6n7WtGN2zV.jpeg',
                'created_at' => '2023-02-27 00:26:07',
                'updated_at' => '2023-02-27 00:26:07',
                'link' => 'https://pion.kaltimprov.go.id/',
                'orders' => 10,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 8,
                'name' => 'Cloud Storage Kegiatan Bappeda',
                'active' => 1,
                'foto' => 'mRTkxeveNF0Xte93Rlzc.png',
                'created_at' => '2023-06-09 12:24:37',
                'updated_at' => '2023-06-09 12:33:32',
                'link' => 'https://onedrive.live.com/about/id-id/signin/',
                'orders' => 11,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 9,
                'name' => 'Whistleblower\'s System (WBS)',
                'active' => 1,
                'foto' => 'TgN82DbCcUnYo6O6fRxj.png',
                'created_at' => '2024-09-17 00:42:02',
                'updated_at' => '2024-09-17 00:42:19',
                'link' => 'https://inspektorat.kaltimprov.go.id/wbs/',
                'orders' => 12,
                'slug' => Str::slug(Str::random(10)),
            ],
            [
                'id' => 10,
                'name' => 'Ruang Pengaduan Inspektorat Daerah',
                'active' => 1,
                'foto' => 'RZ6lkET8XoHiMnTxE4T1.png',
                'created_at' => '2024-09-17 00:49:01',
                'updated_at' => '2024-09-17 00:49:01',
                'link' => 'https://inspektorat.kaltimprov.go.id/pengaduananonim',
                'orders' => 13,
                'slug' => Str::slug(Str::random(10)),
            ],
        ]);
    }
}
