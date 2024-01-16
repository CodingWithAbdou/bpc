<?php

namespace Database\Seeders;

use App\Models\Constant;
use App\Models\ConstantOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConstantSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Constant::create([
            'title_ar' => 'الدرجة العلمية',
            'title_en' => 'Degree'
        ]);
        Constant::create([
            'title_ar' => 'الجامعة',
            'title_en' => 'The University'
        ]);
        Constant::create([
            'title_ar' => 'اللغات',
            'title_en' => 'Languages'
        ]);
        Constant::create([
            'title_ar' => 'مكان الميلاد',
            'title_en' => 'Place Of Birth'
        ]);
        Constant::create([
            'title_ar' => 'الحالة الاجتماعية',
            'title_en' => 'marital status'
        ]);

        ConstantOption::create([
            'constant_id' => '1',
            'name_ar' => 'ليسانس',
            'name_en' => 'Bachelor\'s degree'
        ]);

        ConstantOption::create([
            'constant_id' => '1',
            'name_ar' => 'الماستر',
            'name_en' => 'Master'
        ]);
    }
}
