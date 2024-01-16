<?php

namespace Database\Seeders;

use App\Models\ProductType;
use App\Models\ProductTypeTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductType::create([
            "icone" => "storage/img/product_type/Asset-1-1.svg" ,
            "title" => "therapeutic" ,
            "order_by" => "2"
        ]);
        ProductType::create([
            "icone" => "storage/img/product_type/Asset-2-1.svg" ,
            "title" => "otc" ,
            "order_by" => "1"

        ]);
        ProductType::create([
            "icone" => "storage/img/product_type/Asset-3.svg" ,
            'title' => "brand",
            "order_by" => "3"
        ]);

        ProductTypeTranslation::create([
            "locale" => "en" ,
            "product_type_id" => '1' ,
            "name" => "Products By Therapeutic"
        ]);

        ProductTypeTranslation::create([
            "locale" => "en" ,
            "product_type_id" => '2' ,
            "name" => "OTC Products"
        ]);

        ProductTypeTranslation::create([
            "locale" => "en" ,
            "product_type_id" => '3' ,
            "name" => "Products By Brand"
        ]);

        ProductTypeTranslation::create([
            "locale" => "ar" ,
            "product_type_id" => '1' ,
            "name" => "المنتجات العلاجية"
        ]);
        ProductTypeTranslation::create([
            "locale" => "ar" ,
            "product_type_id" => '2' ,
            "name" => "المنتجات خارج البورصة"
        ]);
        ProductTypeTranslation::create([
            "locale" => "ar" ,
            "product_type_id" => '3' ,
            "name" => "المنتجات حسب العلامة التجارية"
        ]);
    }
}
