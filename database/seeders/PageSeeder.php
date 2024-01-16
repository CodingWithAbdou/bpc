<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'page_key' => 'home' ,
            'section_key' => 'sliders' ,
            // 'image_one' => 'uploads/Slider/general_16.jpeg' ,
            'order_by' => '1' ,
        ]);
        Page::create([
            'page_key' => 'home' ,
            'section_key' => 'experience' ,
            'image_one' => 'storage/img/home/section-1.webp' ,
            'image_two' => 'storage/img/home/services-02.webp' ,
            'order_by' => '2' ,
        ]);

        Page::create([
            'page_key' => 'home' ,
            'section_key' => 'products' ,
            'order_by' => '3' ,
        ]);

        Page::create([
            'page_key' => 'home' ,
            'section_key' => 'productivity' ,
            'order_by' => '4' ,
        ]);

        Page::create([
            'page_key' => 'home' ,
            'section_key' => 'news' ,
            'order_by' => '4' ,
        ]);

        Page::create([
            'page_key' => 'about' ,
            'section_key' => 'profile' ,
            'image_one' => 'storage/img/about/about-1.webp' ,
            'image_two' => 'storage/img/about/about-2.webp' ,
            'order_by' => '1' ,
        ]);

        Page::create([
            'page_key' => 'about' ,
            'section_key' => 'second_profile' ,
            'image_one' => 'storage/img/about/about-1.webp' ,
            'order_by' => '2' ,
        ]);

        Page::create([
            'page_key' => 'about' ,
            'section_key' => 'vision' ,
            'image_one' => 'storage/img/about/about-3.webp' ,
            'order_by' => '3' ,
        ]);

        Page::create([
            'page_key' => 'about' ,
            'section_key' => 'history' ,
            'image_one' => 'storage/img/about/about-4.webp' ,
            'image_two' => 'storage/img/about/about-5.webp' ,
            'order_by' => '4' ,
        ]);

        Page::create([
            'page_key' => 'other' ,
            'section_key' => 'privacy' ,
        ]);

        Page::create([
            'page_key' => 'other' ,
            'section_key' => 'terms' ,
        ]);

        Page::create([
            'page_key' => 'responsibility' ,
            'section_key' => 'social_responsibility' ,
        ]);

        Page::create([
            'page_key' => 'responsibility' ,
            'image_one' => 'storage/img/about/about-4.webp' ,
            'section_key' => 'environment' ,
        ]);

        Page::create([
            'page_key' => 'responsibility' ,
            'image_one' => 'storage/img/about/about-4.webp' ,
            'section_key' => 'community' ,
        ]);
        Page::create([
            'page_key' => 'investor-relations' ,
            'image_one' => 'storage/img/about/about-4.webp' ,
            'section_key' => 'stok-price' ,
        ]);
        Page::create([
            'page_key' => 'investor-relations' ,
            'section_key' => 'investor-services' ,
        ]);
        Page::create([
            'page_key' => 'investor-relations' ,
            'image_one' => 'assets/img/general/about-5.webp' ,
            'section_key' => 'financial-reports' ,
        ]);
        Page::create([
            'page_key' => 'investor-relations' ,
            'section_key' => 'governance' ,
        ]);
        Page::create([
            'page_key' => 'governance' ,
            'section_key' => 'board-of-directors' ,
            'image_one' => 'assets/img/board/Board-Of-Direcors-picture-1.webp' ,
        ]);
        Page::create([
            'page_key' => 'governance' ,
            'section_key' => 'committees' ,
            'image_one' => 'assets/img/general/about-1.webp' ,
        ]);
        Page::create([
            'page_key' => 'governance' ,
            'section_key' => 'executive-management' ,
        ]);
        Page::create([
            'page_key' => 'governance' ,
            'section_key' => 'code-of-conduct' ,
        ]);
        Page::create([
            'page_key' => 'governance' ,
            'section_key' => 'general-assembly-meeting' ,
            'image_one' => 'assets/img/general/about-1.webp' ,
        ]);
        Page::create([
            'page_key' => 'contact' ,
            'section_key' => 'branch' ,
            'image_one' => 'assets/img/general/branch-3.webp' ,
        ]);
        Page::create([
            'page_key' => 'contact' ,
            'section_key' => 'info' ,
            'image_one' => '' ,
        ]);
    }
}
