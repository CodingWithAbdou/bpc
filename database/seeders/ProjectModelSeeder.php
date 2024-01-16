<?php

namespace Database\Seeders;

use App\Models\ProjectModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ProjectModel::create([
            'parent_id' => '3',
            'route_key' => 'users' ,
            'title_ar'=> 'المستخدمين' ,
            'title_en'=> 'Users' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-users' ,
            "order_by" => '1'
        ]);
        // ProjectModel::create([
        //     'parent_id' => '4',
        //     'route_key' => 'roles' ,
        //     'title_ar'=> 'الصلاحيات' ,
        //     'title_en'=> 'roles' ,
        //     "is_menu" => '1' ,
        //     "icon" =>  'fas fa-users-cog' ,
        //     "order_by" => '2'
        // ]);
        ProjectModel::create([
            'parent_id' => '3',
            'route_key' => 'settings' ,
            'title_ar'=> 'الإعدادات' ,
            'title_en'=> 'settings' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-cogs' ,
            "order_by" => '3'
        ]);
        ProjectModel::create([
            'parent_id' => '0',
            'title_ar'=> 'النظام' ,
            'title_en'=> 'System' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-users-cog' ,
            "order_by" => '1'
        ]);
        ProjectModel::create([
            'parent_id' => '0',
            'title_ar'=> 'الصفحات' ,
            'title_en'=> 'Pages' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-file-alt' ,
            "order_by" => '2'

        ]);
        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'pageHome' ,
            'title_ar'=> 'أقسام الرئيسية' ,
            'title_en'=> 'Home Sections' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-file-alt' ,
            "order_by" => '1',
            "multi_language" => '1',
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page'
        ]);
        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'pageAbout' ,
            'title_ar'=> 'أقسام من نحن' ,
            'title_en'=> 'About us Sections' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-file-alt' ,
            "order_by" => '2',
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'pageOther' ,
            'title_ar'=> 'صفحات أخرى' ,
            'title_en'=> 'Other Pages' ,
            "is_menu" => '0' ,
            "icon" =>  'fas fa-file-alt' ,
            "order_by" => '3',
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page'
        ]);

        ProjectModel::create([
            'parent_id' => '1',
            'route_key' => 'sliders' ,
            'title_ar'=> 'السلايدر' ,
            'title_en'=> 'Slider' ,
            "is_menu" => '0' ,
            "icon" =>  'fas fa-file-alt' ,
            "order_by" => '3',
            'model' => 'Slider' ,
            'model_name' => '\App\Models\Slider'
        ]);

        ProjectModel::create([
            'parent_id' => '1',
            'route_key' => 'articles' ,
            'title_ar'=> 'الاخبار' ,
            'title_en'=> 'News' ,
            "is_menu" => '0' ,
            "icon" =>  'fas fa-file-alt' ,
            "order_by" => '4',
            'model' => 'Article' ,
            'model_name' => '\App\Models\Article',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'products' ,
            'title_ar'=> 'صفحة الادوية' ,
            'title_en'=> 'Products Page' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-file-alt' ,
            "order_by" => '3',
            'model' => 'Product' ,
            'model_name' => '\App\Models\Product',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'products' ,
            'title_ar'=> 'الأدوية' ,
            'title_en'=> 'Products' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-medkit' ,
            "order_by" => '4',
            'model' => 'Product' ,
            'model_name' => '\App\Models\Product',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '11',
            'route_key' => 'product-types' ,
            'title_ar'=> 'انواع الادوية' ,
            'title_en'=> 'Type Product' ,
            "is_menu" => '1' ,
            "icon" =>  'fa-brands fa-product-hunt' ,
            "order_by" => '1',
            'model' => 'ProductType' ,
            'model_name' => '\App\Models\ProductType',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '11',
            'route_key' => 'categories' ,
            'title_ar'=> 'التصنيفات' ,
            'title_en'=> 'Categories' ,
            "is_menu" => '1' ,
            "icon" =>  'fa-brands fa-product-hunt' ,
            "order_by" => '2',
            'model' => 'Category' ,
            'model_name' => '\App\Models\Category',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'social-responsibility' ,
            'title_ar'=> 'المسؤولية الاجتماعية' ,
            'title_en'=> 'Social Responsibility' ,
            "is_menu" => '1' ,
            "icon" =>  'fa-brands fa-product-hunt' ,
            "order_by" => '4',
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'community' ,
            'title_ar'=> 'مجتمعنا' ,
            'title_en'=> 'Our community' ,
            "is_menu" => '0' ,
            "icon" =>  'fa-brands fa-product-hunt' ,
            "order_by" => '6',
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'environment' ,
            'title_ar'=> 'بيئتنا' ,
            'title_en'=> 'Our Environment' ,
            "is_menu" => '0' ,
            "icon" =>  'fa-brands fa-product-hunt' ,
            "order_by" => '5',
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page',
            "multi_language" => '1',
        ]);


        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'productivity' ,
            'title_ar'=> 'الإنتاجية' ,
            'title_en'=> 'Productivity' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-briefcase' ,
            "order_by" => '6',
            'model' => 'Productivity' ,
            'model_name' => '\App\Models\Productivity',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'members' ,
            'title_ar'=> 'الأعضاء' ,
            'title_en'=> 'Members' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-user-tie' ,
            "order_by" => '6',
            'model' => '' ,
            'model_name' => '',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '18',
            'route_key' => 'board-of-directors' ,
            'title_ar'=> 'مجلس الإدارة' ,
            'title_en'=> 'Members' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-user-tie' ,
            "order_by" => '0',
            'model' => 'Member' ,
            'model_name' => '\App\Models\Member',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '18',
            'route_key' => 'executive-management' ,
            'title_ar'=> 'الإدارة التنفيذية' ,
            'title_en'=> 'Executive Management' ,
            "is_menu" => '1' ,
            "icon" =>  'fas fa-user-tie' ,
            "order_by" => '0',
            'model' => 'Member' ,
            'model_name' => '\App\Models\Member',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'contacts' ,
            'title_ar'=> 'الإتصال' ,
            'title_en'=> 'Contacts' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-phone' ,
            "order_by" => '8',
            'model' => 'contact' ,
            'model_name' => '\App\Models\contact',
        ]);
        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'investor-relations' ,
            'title_ar'=> 'علاقات المستثمرين' ,
            'title_en'=> 'Investor Relations' ,
            "is_menu" => '1' ,
            "icon" =>  '' ,
            "order_by" => '5',
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '22',
            'route_key' => 'stock-price' ,
            'title_ar'=> 'سعر السهم' ,
            'title_en'=> 'Stock Price' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '1',
            'model' => 'StokePrice' ,
            'model_name' => '\App\Models\StokePrice',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '22',
            'route_key' => 'financial-reports' ,
            'title_ar'=> ' التقارير المالية' ,
            'title_en'=> 'Financial Reports' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '3',
            'model' => 'FileReport' ,
            'model_name' => '\App\Models\FileReport',
            "multi_language" => '0',
        ]);
        ProjectModel::create([
            'parent_id' => '24',
            'route_key' => 'financial-reports-annual' ,
            'title_ar'=> ' التقارير السنوية' ,
            'title_en'=> 'Annual  Reports' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '1',
            'model' => 'FileReport' ,
            'model_name' => '\App\Models\FileReport',
            "multi_language" => '0',
        ]);
        ProjectModel::create([
            'parent_id' => '24',
            'route_key' => 'financial-reports-quarter' ,
            'title_ar'=> ' التقارير ربع سنوي' ,
            'title_en'=> 'quarter Reports' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '2',
            'model' => 'FileReport' ,
            'model_name' => '\App\Models\FileReport',
            "multi_language" => '0',
        ]);

        ProjectModel::create([
            'parent_id' => '22',
            'route_key' => 'governance' ,
            'title_ar'=> 'الحكم' ,
            'title_en'=> 'Governance' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '2',
            'model' => '' ,
            'model_name' => '',
            "multi_language" => 1
        ]);

        ProjectModel::create([
            'parent_id' => '27',
            'route_key' => 'page-board-of-directors' ,
            'title_ar'=> 'صفحة مجلس الإدارة' ,
            'title_en'=> 'Board Of Directors' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '2',
            'model' => 'Governance' ,
            'model_name' => '\App\Models\Governance',
            "multi_language" => 1
        ]);

        ProjectModel::create([
            'parent_id' => '27',
            'route_key' => 'page-committees' ,
            'title_ar'=> 'اللجان' ,
            'title_en'=> 'Committees' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            'model' => 'Governance' ,
            'model_name' => '\App\Models\Governance',
            "multi_language" => 1
        ]);
        ProjectModel::create([
            'parent_id' => '27',
            'route_key' => 'page-code-of-conduct' ,
            'title_ar'=> 'مدونة لقواعد السلوك' ,
            'title_en'=> 'Code of conduct' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            'model' => 'Governance' ,
            'model_name' => '\App\Models\Governance',
            "multi_language" => 1
        ]);
        ProjectModel::create([
            'parent_id' => '27',
            'route_key' => 'page-general-assembly-meeting' ,
            'title_ar'=> 'إجتماع الجمعية العمومية' ,
            'title_en'=> 'General Assembly Meeting' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            'model' => 'Governance' ,
            'model_name' => '\App\Models\Governance',
            "multi_language" => 1
        ]);
        ProjectModel::create([
            'parent_id' => '27',
            'route_key' => 'page-general-assembly-meeting' ,
            'title_ar'=> 'إجتماع الجمعية العمومية' ,
            'title_en'=> 'General Assembly Meeting' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            'model' => 'Governance' ,
            'model_name' => '\App\Models\Governance',
            "multi_language" => '1'
        ]);

        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'page-contact' ,
            'title_ar'=> 'صفحة إتصل بنا' ,
            'title_en'=> 'Page Contact Us' ,
            "order_by" => '9' ,
            "is_menu" => '1' ,
            "icon" =>  '' ,
            'model' => '' ,
            'model_name' => '',
            "multi_language" => 1
        ]);

        ProjectModel::create([
            'parent_id' => '4',
            'route_key' => 'other-page' ,
            'title_ar'=> ' صقحات اخرى' ,
            'title_en'=> 'Other Pages' ,
            "order_by" => '10' ,
            "is_menu" => '1' ,
            "icon" =>  '' ,
            'model' => 'Page' ,
            'model_name' => '\App\Models\Page',
            "multi_language" => 1
        ]);

        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'certificates' ,
            'title_ar'=> ' الشهادات' ,
            'title_en'=> 'Certificates' ,
            "order_by" => '22' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-trophy' ,
            'model' => 'Certificate' ,
            'model_name' => '\App\Models\Certificate',
        ]);
        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'investor-services' ,
            'title_ar'=> ' خدمات المستثمرين' ,
            'title_en'=> 'Investor services' ,
            "order_by" => '7' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-cubes' ,
            'model' => 'InvestorService' ,
            'model_name' => '\App\Models\InvestorService',
        ]);

        ProjectModel::create([
            'parent_id' => '22',
            'route_key' => 'page-investor-services' ,
            'title_ar'=> 'صفحة خدمات المستثمرين' ,
            'title_en'=> 'Page Investor Relations' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '1',
            'model' => 'InvestorServicesInfo' ,
            'model_name' => '\App\Models\InvestorServicesInfo',
            "multi_language" => '0',
        ]);

        ProjectModel::create([
            'parent_id' => '33',
            'route_key' => 'page-contact' ,
            'title_ar'=> 'صفحة إتصل بنا' ,
            'title_en'=> 'Page Contact Us' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '1',
            'model' => '' ,
            'model_name' => '',
            "multi_language" => '0',
        ]);
        ProjectModel::create([
            'parent_id' => '38',
            'route_key' => 'branches' ,
            'title_ar'=> "الفروع" ,
            'title_en'=> 'Branches' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '1',
            'model' => 'Branch' ,
            'model_name' => '\App\Models\Branch',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'article-type' ,
            'title_ar'=> "أنواع الخبر" ,
            'title_en'=> 'Type Of News' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-hashtag' ,
            "order_by" => '5',
            'model' => 'ArticleType' ,
            'model_name' => '\App\Models\ArticleType',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'constants' ,
            'title_ar'=> "الثوابت" ,
            'title_en'=> 'Constants' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-code' ,
            "order_by" => '30',
            'model' => 'Constant' ,
            'model_name' => '\App\Models\Constant',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'constant-options' ,
            'title_ar'=> "خصائص الثوابت" ,
            'title_en'=> 'Constant Options' ,
            "is_menu" => '0' ,
            "icon" =>  '' ,
            "order_by" => '30',
            'model' => 'ConstantOption' ,
            'model_name' => '\App\Models\ConstantOption',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'careers' ,
            'title_ar'=> "الوضائف" ,
            'title_en'=> 'Careers' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-building' ,
            "order_by" => '99',
            'model' => '' ,
            'model_name' => '',
            "multi_language" => '0',
        ]);

        ProjectModel::create([
            'parent_id' => '43',
            'route_key' => 'career-information' ,
            'title_ar'=> "الوضائف" ,
            'title_en'=> 'Careers' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-building' ,
            "order_by" => '1',
            'model' => 'InfoCareer' ,
            'model_name' => '\App\Models\InfoCareer',
            "multi_language" => '1',
        ]);
        ProjectModel::create([
            'parent_id' => '43',
            'route_key' => 'career-form' ,
            'title_ar'=> "إستمارة الوضائف" ,
            'title_en'=> 'Form Of Careers' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-building' ,
            "order_by" => '1',
            'model' => 'Career' ,
            'model_name' => '\App\Models\Career',
            "multi_language" => '1',
        ]);

        ProjectModel::create([
            'parent_id' => '0',
            'route_key' => 'news-letter' ,
            'title_ar'=> "رسالة إخبارية" ,
            'title_en'=> 'News Letter ' ,
            "is_menu" => '1' ,
            "icon" =>  'fa fa-comment' ,
            "order_by" => '100',
            'model' => 'NewsLetter' ,
            'model_name' => '\App\Models\NewsLetter',
            "multi_language" => '0',
        ]);
    }
}
