<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'member_id' => '1' ,
            'article_type_id' => '1' ,
            'image' => 'uploads/Article/general_16.jpeg'
        ]);
        Article::create([
            'member_id' => '2' ,
            'article_type_id' => '2' ,
            'image' => 'uploads/Article/general_22.jpeg'
        ]);
        Article::create([
            'member_id' => '1' ,
            'article_type_id' => '3' ,
            'image' => 'uploads/Article/general_23.jpeg'
        ]);
        Article::create([
            'member_id' => '3' ,
            'article_type_id' => '4' ,
            'image' => 'uploads/Article/general_22.jpeg'
        ]);

        ArticleTranslation::create([
            'article_id' => "1" ,
            'locale' => 'en' ,
            'title' => 'Exciting News: Introducing BPC Reports For First Quarter 2023!' ,
            'description' => 'NFTS Music is a long established fact that a reader will be distrac by the readable content of a page when looking at its layout. The point of using Lorem Ipm i has a more-ornormal distribution of letters,as opposed It is a long established fact that a reader will be distrac by the readable content of a page when looking at itslayout. The point of using Lorem Ipm i has a NFTs'
        ]);
        ArticleTranslation::create([
            'article_id' => "2" ,
            'locale' => 'en' ,
            'title' => 'Relying 100% on solar energy to meet our energy needs' ,
            'description' => 'The companys shareholders are distributed according to the classes of shares they own as follows'
        ]);
        ArticleTranslation::create([
            'article_id' => "3" ,
            'locale' => 'en' ,
            'title' => 'Production lines' ,
            'description' => 'Birzeit Pharmaceutical Company Is Thrilled To Announce The Launch Of BPC Reports For The First Quarter Of 2023.
Our Innovative Reporting Solution Is Designed To Elevate Data Analysis And Empower Decision-Making Within Our Organization.
With Its Seamless Integration And Advanced Features, BPC Reports Will Revolutionize How We Harness Insights And Drive Success.'
        ]);
        ArticleTranslation::create([
            'article_id' => "4" ,
            'locale' => 'en' ,
            'title' => 'Ownership Structure' ,
            'description' => 'The companys shareholders are distributed according to the classes of shares they own as followsThe companys shareholders are distributed according to the classes of shares they own as followsThe companys shareholders are distributed according to the classes of shares they own as followsThe companys shareholders are distributed according to the classes of shares they own as follows'
        ]);
    }
}
