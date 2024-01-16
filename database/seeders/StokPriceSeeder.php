<?php

namespace Database\Seeders;

use App\Models\StokePrice;
use App\Models\StokePriceTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StokePrice::create([
            "price" => '4.14' ,
            "percent" => '-0.05 ' ,
            "link" => 'https://www.barrons.com/market-data/stocks/bpc?countrycode=ps' ,
            "image" => 'assets/img/general/about-1.webp' ,
        ]);

        StokePriceTranslation::create([
            "stoke_price_id" => '1' ,
            "locale" => 'en' ,
            "subtitle" => 'Pricing delayed by 30 minutes' ,
            "info" => '4.15K (46.10% of Avg)' ,
            "description" => 'The stock information provided is for informational purposes only and is not intended for trading purposes. The stock information and charts are provided by Barrons & PEX, a third-party service, and BPC does not provide information on this service.' ,
        ]);

        StokePriceTranslation::create([
            "stoke_price_id" => '1' ,
            "locale" => 'ar' ,
            "subtitle" => 'تأخر التسعير لمدة 30 دقيقة' ,
            "info" => '4.15 ألف (46.10% من المتوسط)' ,
            "description" => 'معلومات الأسهم المقدمة هي لأغراض إعلامية فقط وليست مخصصة لأغراض التداول. يتم توفير معلومات الأسهم والرسوم البيانية من قبل Barrons & PEX، وهي خدمة تابعة لجهة خارجية، ولا توفر BPC معلومات حول هذه الخدمة.' ,
        ]);
    }
}
