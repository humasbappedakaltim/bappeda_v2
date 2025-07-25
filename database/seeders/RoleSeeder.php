<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'superadmin',
            'admin',
            'staff',
            'user'
        ];

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
            'pio-view',
            'pio-manage',
            'data-paparan-view',
            'data-paparan-manage',
        ];

        //


        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }

        foreach ($permissions as $permission) {
            Permission::create([
                'id' => Str::uuid(),
                'name' => $permission,
                'guard_name' => 'web'
            ]);
            $role = Role::where('name', 'superadmin')->first();
            $role->givePermissionTo($permission);
        }
    }
}
