<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            "setting_key" => "website_name_ar" ,
            "setting_value" => "كان تورك للسياحة" ,
            "title_ar" => "اسم الموقع" ,
            "title_en" => "Website Name" ,
            "type_id" => "1" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "website_name_en" ,
            "setting_value" => "CanTurck  Tourism" ,
            "title_ar" => "اسم الموقع" ,
            "title_en" => "Website Name" ,
            "type_id" => "1" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);


        Setting::create([
            "setting_key" => "description_ar" ,
            "setting_value" => "11" ,
            "title_ar" => " وصف الموقع ",
            "title_en" => "WebSite description" ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "description_en" ,
            "setting_value" => "11" ,
            "title_ar" => " وصف الموقع ",
            "title_en" =>"WebSite description"  ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "keywords" ,
            "setting_value" => "11" ,
            "title_ar" =>"Keywords",
            "title_en" => "S" ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "footer_description_ar" ,
            "setting_value" => "جميع الحقوق " ,
            "title_ar" => "وصف الفوتر ",
            "title_en" => "Footer Description" ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "footer_description_en" ,
            "setting_value" => "11" ,
            "title_ar" => "وصف الفوتر ",
            "title_en" => "Footer Description" ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "favicon" ,
            "setting_value" => "front_assets/images/logo.svg" ,
            "title_ar" => "الأيقونة المفظلة",
            "title_en" => "Favorite icon" ,
            "type_id" => "2" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "logo" ,
            "setting_value" => "front_assets/images/logo.svg" ,
            "title_ar" => "شعار الموقع",
            "title_en" => "logo" ,
            "type_id" => "2" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);

    }
}
