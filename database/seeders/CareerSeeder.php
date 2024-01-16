<?php

namespace Database\Seeders;

use App\Models\InfoCareer;
use App\Models\InfoCareerTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InfoCareer::create([
            'file' => '/',
            'file_name' => '/'
        ]);
        InfoCareerTranslation::create([
            "locale" => 'en' ,
            "info_career_id" => '1' ,
            'title' => 'UI/UX Designer' ,
            'description' => 'Birzeit Pharmaceuticals emphasizes transparency and integrity, mandating adherence to a Code of Ethics for all management and staff, ensuring ethical conduct in all operations.'
        ]);
        InfoCareerTranslation::create([
            "locale" => 'ar' ,
            "info_career_id" => '1' ,
            'title' => 'مصمم واجهة المستحدم' ,
            'description' => 'تؤكد شركة بيرزيت للأدوية على الشفافية والنزاهة، وتفرض الالتزام بقواعد الأخلاقيات لجميع الإدارة والموظفين، مما يضمن السلوك الأخلاقي في جميع العمليات.'
        ]);
    }
}
