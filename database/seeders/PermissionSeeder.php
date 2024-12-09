<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'user-view',
            'user-manage',
            'role-view',
            'role-manage',
            'slider-view',
            'slider-manage',
            'agenda-view',
            'agenda-manage',
            'penghargaan-view',
            'penghargaan-manage',
            'category-data-center-view',
            'category-data-center-manage',
            'data-center-view',
            'data-center-manage',
            'maps-view',
            'maps-manage',
            'app-bappeda-view',
            'app-bappeda-manage',
            'bidang-view',
            'bidang-manage',
            'sub-bidang-view',
            'sub-bidang-manage',
            'pejabat-view',
            'pejabat-manage',
            'post-category-view',
            'post-category-manage',
            'post-news-view',
            'post-news-manage',
        ];
    }
}
