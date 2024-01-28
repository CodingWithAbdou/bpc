<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'password' => bcrypt('111'),
            'role' => '1' ,
        ]);
        User::create([
            'name' => 'client',
            'password' => bcrypt('111') ,
            'role' => '2' ,

        ]);
    }
}
