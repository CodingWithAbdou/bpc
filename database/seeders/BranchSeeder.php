<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\BranchTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'image' => 'assets/img/general/branch-3.webp',
            'order_by' => '1',
            'phone' => '+970 (2) 281-03-74',
        ]);

        BranchTranslation::create([
            'branch_id' => '1',
            'locale' => 'en' ,
            'title' => 'Department',
            'title_color' => 'Marketing ',
            'address' => 'Ramallah/ Betunia Industrial Area 20 Shatella Street/ Palestine',
        ]);
        BranchTranslation::create([
            'branch_id' => '1',
            'locale' => 'ar' ,
            'title' => 'قسم ',
            'title_color' => 'التسويق ',
            'address' => 'رام الله/ بيتونيا الصناعية 20 شارع شاتيلا/ فلسطين',
        ]);
        Branch::create([
            'image' => 'assets/img/general/branch-2.webp',
            'order_by' => '2',
            'phone' => '+970 (2) 281-03-74',
        ]);

        BranchTranslation::create([
            'branch_id' => '2',
            'locale' => 'en' ,
            'title' => 'Branch',
            'title_color' => 'Beitunia  ',
            'address' => 'Ramallah/ Betunia Industrial Area 20 Shatella Street/ Palestine',
        ]);
        BranchTranslation::create([
            'branch_id' => '2',
            'locale' => 'ar' ,
            'title' => 'فرع ',
            'title_color' => 'بيتونيا  ',
            'address' => 'رام الله/ بيتونيا الصناعية 20 شارع شاتيلا/ فلسطين',
        ]);
        Branch::create([
            'image' => 'assets/img/general/branch-1.webp',
            'order_by' => '3',
            'phone' => '+970 (2) 281-03-74',
        ]);

        BranchTranslation::create([
            'branch_id' => '3',
            'locale' => 'en' ,
            'title' => 'Branch',
            'title_color' => 'Birzeit ',
            'address' => 'Ramallah, Birzeit city, Near Birzeit Girls Elementary School',
        ]);
        BranchTranslation::create([
            'branch_id' => '3',
            'locale' => 'ar' ,
            'title' => 'فرع ',
            'title_color' => 'بيرزيت ',
            'address' => 'رام الله، مدينة بيرزيت، قرب مدرسة بنات بيرزيت الأساسية',
        ]);
    }
}
