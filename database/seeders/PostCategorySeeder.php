<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            'Artikel',
            'Berita',
            'Informasi',
            'Kinerja Pembangunan Kaltim',
            'Berita Nasional',
        ];

        foreach ($datas as $data) {
            PostCategory::create([
                'name' => $data,
                'slug' => Str::slug($data),
            ]);
        }
    }
}
