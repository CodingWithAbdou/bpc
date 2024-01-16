<?php

namespace Database\Seeders;

use App\Models\FileReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FileReport::create([
            'file' =>  'path/path',
            'file_name' => 'filename' ,
            'type' => '0' ,
        ]);
        FileReport::create([
            'file' =>  'path/path2',
            'file_name' => 'filename2' ,
            'type' => '0' ,
        ]);
        FileReport::create([
            'file' =>  'path/path2',
            'file_name' => 'filename2' ,
            'type' => '1' ,
            'quarter' => '1' ,
        ]);
        FileReport::create([
            'file' =>  'path/path3',
            'file_name' => 'filename3' ,
            'type' => '1' ,
            'quarter' => '2' ,
        ]);
    }
}
