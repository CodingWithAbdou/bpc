<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::create([
            "name" => "Admin" ,
            "guard_name" => "admin" ,
        ]);

        User::create([
            "name" => 'admin' ,
            "email" => 'admin@admin.com' ,
            "image" => 'uploads/User/241171699870858.jpg' ,
            "password" => bcrypt('123456'),
            "role_id" => "1"
        ]);
    }
}
