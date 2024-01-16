<?php

namespace Database\Seeders;

use App\Models\ArticleType;
use App\Models\ArticleTypeTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleType::create([
            'id' => '1'
        ]);
        ArticleType::create([
            'id' => '2'
        ]);
        ArticleType::create([
            'id' => '3'
        ]);
        ArticleType::create([
            'id' => '4'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '1' ,
            "locale" => 'en',
            'title' => 'Corporate Governance'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '2' ,
            "locale" => 'en',
            'title' => 'Factory'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '3' ,
            "locale" => 'en',
            'title' => 'Social Responsibility'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '4' ,
            "locale" => 'en',
            'title' => 'التحديثات'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '1' ,
            "locale" => 'ar',
            'title' => 'حوكمة الشركات'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '2' ,
            "locale" => 'ar',
            'title' => 'مصنع'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '3' ,
            "locale" => 'ar',
            'title' => 'مسؤولية اجتماعية'
        ]);
        ArticleTypeTranslation::create([
            "article_type_id" => '4' ,
            "locale" => 'ar',
            'title' => 'التحديثات'
        ]);

    }
}
