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
            "setting_value" => "بيبسي" ,
            "title_ar" => "اسم الموقع" ,
            "title_en" => "Website name" ,
            "type_id" => "1" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "website_name_en" ,
            "setting_value" => "bpc" ,
            "title_ar" => "اسم الموقع" ,
            "title_en" => "Website name" ,
            "type_id" => "1" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "Headquarters_one" ,
            "setting_value" => " +970 (2) 298-75-72\3" ,
            "title_ar" => "المقر" ,
            "title_en" => "Headquarters" ,
            "type_id" => "1" ,
            "category" => "2" ,
            "order_by" => "2" ,
        ]);

        Setting::create([
            "setting_key" => "Headquarters_two" ,
            "setting_value" => " +970 (2) 296-72-06" ,
            "title_ar" => "المقر" ,
            "title_en" => "Headquarters" ,
            "type_id" => "1" ,
            "category" => "2" ,
            "order_by" => "2" ,
        ]);

        Setting::create([
            "setting_key" => "branch_one" ,
            "setting_value" => " +970 (2) 281-03-74\5" ,
            "title_ar" => "فرع بيرزيت " ,
            "title_en" => "Birzeit Branch" ,
            "type_id" => "1" ,
            "category" => "2" ,
            "order_by" => "2" ,
        ]);

        Setting::create([
            "setting_key" => "branch_two" ,
            "setting_value" => " +970 (2) 281-08-55" ,
            "title_ar" => "فرع بيرزيت " ,
            "title_en" => "Birzeit Branch" ,
            "type_id" => "1" ,
            "category" => "2" ,
            "order_by" => "2" ,
        ]);


        Setting::create([
            "setting_key" => "address_ar" ,
            "setting_value" => ".ب 79، رام الله، فلسطين" ,
            "title_ar" => "صندوق البريد" ,
            "title_en" => "Post Office Box" ,
            "type_id" => "1" ,
            "category" => "2" ,
            "order_by" => "3" ,
        ]);
        Setting::create([
            "setting_key" => "address_en" ,
            "setting_value" => "P.O Box 79, Ramallah, Palestine" ,
            "title_ar" => "صندوق البريد",
            "title_en" => "Post Office Box" ,
            "type_id" => "1" ,
            "category" => "2" ,
            "order_by" => "3" ,
        ]);

        Setting::create([
            "setting_key" => "email" ,
            "setting_value" => "info@bpc.com" ,
            "title_ar" => "الإيميل" ,
            "title_en" => "Email" ,
            "type_id" => "1" ,
            "category" => "2" ,
            "order_by" => "4" ,
        ]);



        Setting::create([
            "setting_key" => "description_ar" ,
            "setting_value" => "11" ,
            "title_ar" => " وصف الموقع ",
            "title_en" => "Website Description " ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "description_en" ,
            "setting_value" => "11" ,
            "title_ar" => " وصف الموقع ",
            "title_en" => "Website Description " ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "keywords" ,
            "setting_value" => "11" ,
            "title_ar" => "الكلمات الدلالية",
            "title_en" => "Keywords " ,
            "type_id" => "3" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "footer_description_ar" ,
            "setting_value" => "11" ,
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
            "setting_value" => "assets/img/ps-logo.png" ,
            "title_ar" => "الأيقونة المفظلة",
            "title_en" => "favicon" ,
            "type_id" => "2" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);
        Setting::create([
            "setting_key" => "logo" ,
            "setting_value" => "assets/img/logo-white.webp" ,
            "title_ar" => "شعار الموقع",
            "title_en" => "logo" ,
            "type_id" => "2" ,
            "category" => "1" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "facebook" ,
            "setting_value" => "11" ,
            "title_ar" => "فيس بوك",
            "title_en" => "Facebook" ,
            "type_id" => "1" ,
            "category" => "3" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "twitter" ,
            "setting_value" => "11" ,
            "title_ar" => "تويتر",
            "title_en" => "Twitter " ,
            "type_id" => "1" ,
            "category" => "3" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "instagram" ,
            "setting_value" => "11" ,
            "title_ar" => "تويتر",
            "title_en" => "Instagram  " ,
            "type_id" => "1" ,
            "category" => "3" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "linkedin" ,
            "setting_value" => "11" ,
            "title_ar" => "لنكد ان",
            "title_en" => "Linkedin" ,
            "type_id" => "1" ,
            "category" => "3" ,
            "order_by" => "1" ,
        ]);

        Setting::create([
            "setting_key" => "youtube" ,
            "setting_value" => "11" ,
            "title_ar" => "يوتيوب",
            "title_en" => "Youtube" ,
            "type_id" => "1" ,
            "category" => "3" ,
            "order_by" => "1" ,
        ]);
    }
}
