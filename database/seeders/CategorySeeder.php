<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'product_type_id' => '1' ,
            "order_by" => '1',
        ]);
        Category::create([
            'product_type_id' => '1' ,
            "order_by" => '2',
        ]);
        Category::create([
            'product_type_id' => '2' ,
            "order_by" => '3',
        ]);
        Category::create([
            'product_type_id' => '2' ,
            "order_by" => '4',
        ]);


        CategoryTranslation::Create([
            "locale" => "en" ,
            "category_id" => "1" ,
            "name" => "Multivitamins & Minerals" ,
        ]);

        CategoryTranslation::Create([
            "locale" => "en" ,
            "category_id" => "2" ,
            "name" => "Supplements" ,
        ]);

        CategoryTranslation::Create([
            "locale" => "en" ,
            "category_id" => "3" ,
            "name" => "Skin / Topical Care" ,
        ]);
        CategoryTranslation::Create([
            "locale" => "en" ,
            "category_id" => "4" ,
            "name" => "Allergy & Cold" ,
        ]);


        CategoryTranslation::Create([
            "locale" => "ar" ,
            "category_id" => "1" ,
            "name" => " الفيتامينات والمعادن" ,
        ]);

        CategoryTranslation::Create([
            "locale" => "ar" ,
            "category_id" => "2" ,
            "name" => " الفيتامينات والمعادن" ,
        ]);

        CategoryTranslation::Create([
            "locale" => "ar" ,
            "category_id" => "3" ,
            "name" => "لجلد / العناية الموضعية" ,
        ]);
        CategoryTranslation::Create([
            "locale" => "ar" ,
            "category_id" => "4" ,
            "name" => "الحساسية والبرد" ,
        ]);
    }
}
