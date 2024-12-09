<?php

namespace Database\Seeders;

use App\Models\Pio;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => Str::uuid(),
                'name' => 'Pio 1',
                'nik' => '1234567890',
                'email' => 'pio1@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567890',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 1',
                'rincian' => 'Pio 1',
                'tujuan_penggunaan' => 'Pio 1',
                'status' => 0,
                'slug' => Str::slug('pio 1')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 2',
                'nik' => '1234567891',
                'email' => 'pio2@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567891',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 2',
                'rincian' => 'Pio 2',
                'tujuan_penggunaan' => 'Pio 2',
                'status' => 0,
                'slug' => Str::slug('pio 2')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 3',
                'nik' => '1234567892',
                'email' => 'pio3@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567892',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 3',
                'rincian' => 'Pio 3',
                'tujuan_penggunaan' => 'Pio 3',
                'status' => 0,
                'slug' => Str::slug('pio 3')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 4',
                'nik' => '1234567893',
                'email' => 'pio4@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567893',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 4',
                'rincian' => 'Pio 4',
                'tujuan_penggunaan' => 'Pio 4',
                'status' => 0,
                'slug' => Str::slug('pio 4')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 5',
                'nik' => '1234567894',
                'email' => 'pio5@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567894',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 5',
                'rincian' => 'Pio 5',
                'tujuan_penggunaan' => 'Pio 5',
                'status' => 0,
                'slug' => Str::slug('pio 5')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 6',
                'nik' => '1234567895',
                'email' => 'pio6@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567895',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 6',
                'rincian' => 'Pio 6',
                'tujuan_penggunaan' => 'Pio 6',
                'status' => 0,
                'slug' => Str::slug('pio 6')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 7',
                'nik' => '1234567896',
                'email' => 'pio7@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567896',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 7',
                'rincian' => 'Pio 7',
                'tujuan_penggunaan' => 'Pio 7',
                'status' => 0,
                'slug' => Str::slug('pio 7')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 8',
                'nik' => '1234567897',
                'email' => 'pio8@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567897',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 8',
                'rincian' => 'Pio 8',
                'tujuan_penggunaan' => 'Pio 8',
                'status' => 0,
                'slug' => Str::slug('pio 8')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 9',
                'nik' => '1234567898',
                'email' => 'pio9@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567898',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 9',
                'rincian' => 'Pio 9',
                'tujuan_penggunaan' => 'Pio 9',
                'status' => 0,
                'slug' => Str::slug('pio 9')
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Pio 10',
                'nik' => '1234567899',
                'email' => 'pio10@gmail.com',
                'jenis' => 'PNS',
                'akta_kelahiran' => '1234567899',
                'telp' => '08123456789',
                'faksimili' => '08123456789',
                'alamat' => 'Jl. Pio 10',
                'rincian' => 'Pio 10',
                'tujuan_penggunaan' => 'Pio 10',
                'status' => 0,
                'slug' => Str::slug('pio 10')
            ],
        ];

        foreach ($datas as $data) {
            Pio::create($data);
        }
    }
}
