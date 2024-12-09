<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::create([
            "id" => Str::uuid(),
            "name"=> "superadmin",
            "email"=> "superadmin@gmail.com",
            "password" => bcrypt('12345678')
        ]);

        $superadmin->assignRole('superadmin');

        $admin = User::create([
            "id" => Str::uuid(),
            "name"=> "Admin",
            "email"=> "admin@gmail.com",
            "password" => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');
    }
}
