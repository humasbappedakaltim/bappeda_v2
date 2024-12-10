<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('maps')->insert(
            [
                'id' => 3,
                'name' => 'Peta Kawasan Lindung Geologi',
                'description' => 'Peta Kawasan Lindung Geologi',
                'slug' => 'peta-kawasan-lindung-geologi',
                'created_at' => '2021-02-02 22:13:23',
                'updated_at' => '2021-02-02 22:13:23',
                'file' => 'February2021/wKPq6mBGl5J4Na3EOmii.jpg',
                'views' => 49984,
            ],
            [
                'id' => 4,
                'name' => 'Peta Kawasan Outline',
                'description' => 'Peta Kawasan Outline',
                'slug' => 'peta-kawasan-outline',
                'created_at' => '2021-02-02 22:15:56',
                'updated_at' => '2021-02-02 22:15:56',
                'file' => 'February2021/xt6m7IiUfDgLmBV4UF7i.jpg',
                'views' => 49984,
            ],
            [
                'id' => 5,
                'name' => 'Peta Kawasan Strategis Provinsi',
                'description' => 'Peta Kawasan Strategis Provinsi',
                'slug' => 'peta-kawasan-strategis-provinsi',
                'created_at' => '2021-02-02 22:52:54',
                'updated_at' => '2021-02-02 22:52:54',
                'file' => 'February2021/svwqEYJ8c7RRTzZVNx1H.jpg',
                'views' => 49984,
            ],
            [
                'id' => 6,
                'name' => 'Peta Kesatuan Pengelolaan Hutan',
                'description' => 'Peta Kesatuan Pengelolaan Hutan',
                'slug' => 'peta-kesatuan-pengelolaan-hutan',
                'created_at' => '2021-02-02 22:53:12',
                'updated_at' => '2021-02-02 22:53:12',
                'file' => 'February2021/jpdazloYc5pB7Az6yEMa.jpg',
                'views' => 49984,
            ],
            [
                'id' => 7,
                'name' => 'Peta Rawan Bencana Alam',
                'description' => 'Peta Rawan Bencana Alam',
                'slug' => 'peta-rawan-bencana-alam',
                'created_at' => '2021-02-02 22:53:27',
                'updated_at' => '2021-02-02 22:53:27',
                'file' => 'February2021/FdaC24dQBrtB8ALCjHoT.jpg',
                'views' => 49984,
            ],
            [
                'id' => 8,
                'name' => 'Peta Rencana Jaringan Prasarana Wilayah',
                'description' => 'Peta Rencana Jaringan Prasarana Wilayah',
                'slug' => 'peta-rencana-jaringan-prasarana-wilayah',
                'created_at' => '2021-02-02 22:53:47',
                'updated_at' => '2021-02-02 22:53:47',
                'file' => 'February2021/gSPWDaVXqIIxFs0xVtcx.jpg',
                'views' => 49984,
            ],
            [
                'id' => 9,
                'name' => 'Peta Rencana Kawasan Peruntukan Pertambangan',
                'description' => 'Peta Rencana Kawasan Peruntukan Pertambangan',
                'slug' => 'peta-rencana-kawasan-peruntukan-pertambangan',
                'created_at' => '2021-02-02 22:54:06',
                'updated_at' => '2021-02-02 22:54:06',
                'file' => 'February2021/3k6hMuD63vtqrSrhC3sW.jpg',
                'views' => 49984,
            ],
            [
                'id' => 10,
                'name' => 'Peta Rencana Pola Ruang',
                'description' => 'Peta Rencana Pola Ruang',
                'slug' => 'peta-rencana-pola-ruang',
                'created_at' => '2021-02-02 22:54:23',
                'updated_at' => '2021-02-02 22:54:23',
                'file' => 'February2021/OKxdOw9ijhBlDhbz8r7c.jpg',
                'views' => 49984,
            ],
            [
                'id' => 11,
                'name' => 'Peta Rencana Struktur Ruang',
                'description' => 'Peta Rencana Struktur Ruang',
                'slug' => 'peta-rencana-struktur-ruang',
                'created_at' => '2021-02-02 22:54:47',
                'updated_at' => '2021-02-02 22:54:47',
                'file' => 'February2021/1L5k2hTIgRjYlN9xbJQw.jpg',
                'views' => 49984,
            ],

        );
    }
}
