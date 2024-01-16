<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slider1 = Slider::create([
            'image' => "storage/img/general/general_22.jpeg",
            'file_one' => "path/file",
            'file_two' => "path/file",
            'file_one_name' => "file_one_name",
            'file_two_name' => 'file_two_name',

            "order_by" => "1"
        ]);

        $slider2 = Slider::create([
            'image' => "storage/img/sliders/general_16.jpeg",
            'file_one' => "path/file",
            'file_two' => "path/file",
            'file_one_name' => "file_one_name",
            'file_two_name' => 'file_two_name',
            "order_by" => "1"
        ]);

    }
}
