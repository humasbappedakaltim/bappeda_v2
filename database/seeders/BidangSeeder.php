<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('bidangs')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Sekretariat',
                    'created_at' => '2022-08-30 08:15:26',
                    'updated_at' => '2022-08-30 08:15:26',
                    'slug' => 'Sekretariat',
                ],
                [
                    'id' => 2,
                    'name' => 'Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah (P2EPD)',
                    'created_at' => '2022-08-30 08:17:00',
                    'updated_at' => '2022-08-30 08:23:50',
                    'slug' => 'Bidang P2EPD',
                ],
                [
                    'id' => 3,
                    'name' => 'Bidang Pemerintahan dan Pembangunan Manusia (PPM)',
                    'created_at' => '2022-08-30 08:18:00',
                    'updated_at' => '2022-08-30 08:27:23',
                    'slug' => 'Bidang PPM',
                ],
                [
                    'id' => 4,
                    'name' => 'Bidang Perekonomian dan Sumber Daya Alam (Ekonomi)',
                    'created_at' => '2022-08-30 08:18:00',
                    'updated_at' => '2022-08-30 08:27:37',
                    'slug' => 'Bidang Ekonomi',
                ],
                [
                    'id' => 5,
                    'name' => 'Bidang Infrastruktur dan Kewilayahan (Infraswil)',
                    'created_at' => '2022-08-30 08:19:00',
                    'updated_at' => '2022-08-30 08:27:31',
                    'slug' => 'Bidang Infraswil',
                ],
                [
                    'id' => 6,
                    'name' => 'Kepala',
                    'created_at' => '2022-10-10 01:47:22',
                    'updated_at' => '2022-10-10 01:47:22',
                    'slug' => 'Kepala',
                ],

            ]);
    }
}
