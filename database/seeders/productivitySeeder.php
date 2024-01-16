<?php

namespace Database\Seeders;

use App\Models\Productivity;
use App\Models\ProductivityTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productivity::create([
            "icone" => 'storage/img/productivities/count.svg',
            "value" => "1974" ,
            "order_by" => "1"
        ]);

        Productivity::create([
            "icone" => 'storage/img/productivities/count.svg',
            "value" => "4" ,
            "order_by" => "2"
        ]);

        Productivity::create([
            "icone" => 'storage/img/productivities/count.svg',
            "value" => "370" ,
            "order_by" => "3"
        ]);
        Productivity::create([
            "icone" => 'storage/img/productivities/count.svg',
            "value" => "6" ,
            "order_by" => "4"
        ]);

        ProductivityTranslation::create([
            "locale" => 'en' ,
            "productivity_id" => "1" ,
            "name" => "Established",
        ]);
        ProductivityTranslation::create([
            "locale" => 'en' ,
            "productivity_id" => "2" ,
            "name" => "Countries",

        ]);
        ProductivityTranslation::create([
            "locale" => 'en' ,
            "productivity_id" => "3" ,
            "name" => "Workers",

        ]);
        ProductivityTranslation::create([
            "locale" => 'en' ,
            "productivity_id" => "4" ,
            "name" => "Sites",
        ]);

        ProductivityTranslation::create([
            "locale" => 'ar' ,
            "productivity_id" => "1" ,
            "name" => "المنشأت",
        ]);
        ProductivityTranslation::create([
            "locale" => 'ar' ,
            "productivity_id" => "2" ,
            "name" => "الدول",

        ]);
        ProductivityTranslation::create([
            "locale" => 'ar' ,
            "productivity_id" => "3" ,
            "name" => "العمال",
        ]);
        ProductivityTranslation::create([
            "locale" => 'ar' ,
            "productivity_id" => "4" ,
            "name" => "المواقع",
        ]);
    }
}
