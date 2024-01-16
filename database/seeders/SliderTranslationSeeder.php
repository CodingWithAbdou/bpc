<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\SliderTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         SliderTranslation::create([
            'title' => "BPC<br>For A Better Life",
            'description' => "Birzeit Pharmaceutical Company is a Palestinian leading company thriving to provide all pharmaceutical products for a better life locally, and regionally.",
            "locale" => 'en' ,
            "slider_id" => "1"
        ]);

        SliderTranslation::create([
            'title' => "BPC<br>For A Better Life",
            'description' => "Birzeit Pharmaceutical Company is a Palestinian leading company thriving to provide all pharmaceutical products for a better life locally, and regionally.2",
            "locale" => 'en',
            "slider_id" => "2"
        ]);

        SliderTranslation::create([
            'title' => "نص عربي",
            'description' => "تعليق عربي",
            "locale" => 'ar' ,
            "slider_id" => "1"
        ]);

         SliderTranslation::create([
            'title' => "نص عربي2",
            'description' => "وصف عربي2",
            "locale" => 'ar',
            "slider_id" => "2"
        ]);

    }
}
