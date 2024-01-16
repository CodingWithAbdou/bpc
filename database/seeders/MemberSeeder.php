<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\MemberTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'image' => 'uploads/Member/b-1.webp',
            'type' => '1',
            "order_by" => '1'
        ]);
        Member::create([
            'image' => 'uploads/Member/b-2.webp',
            'type' => '2',
            "order_by" => '2'
        ]);
        Member::create([
            'image' => 'uploads/Member/b-3.webp',
            'type' => '2',
            "order_by" => '3'
        ]);
        Member::create([
            'image' => 'uploads/Member/b-4.webp',
            'type' => '1',
            "order_by" => '4'
        ]);
        Member::create([
            'image' => 'uploads/Member/b-5.webp',
            'type' => '2',
            "order_by" => '5'
        ]);

        MemberTranslation::create([
            'member_id' => '1',
            'locale' => 'en' ,
            'name' => 'Talal Nasereddin' ,
            'job_title' => 'General Director' ,
            'description' =>  ' In his position as General Manager since 1/4/1984 and as Chairman of the Board since 1990, he holds a Master’s degree in Industrial Chemistry from the American University of Beirut in 1974. <br>He holds the position of Vice Chairman of the Board of Directors of the Palestine Islamic Bank.<br>Vital positions, including: Chairman of the Board of Directors of Abraaj Real Estate Investments Company, Petropal Mineral Oils Company, and Lotus Financial Investments Company, in addition to being a board member in the Palestinian Telecommunications Group and the Palestinian Electricity Company, in addition to being a member of the Board of Trustees of Saint Joseph Hospital in Jerusalem 2016 -2021 and Chairman of the Board of Directors of SOS Children’s Villages since 2019.' ,
        ]);
        MemberTranslation::create([
            'member_id' => '2',
            'locale' => 'en' ,
            'name' => 'Firas Nasereddin' ,
            'job_title' => 'Deputy General Manager' ,
            'description' =>  ' In his position as General Manager since 1/4/1984 and as Chairman of the Board since 1990, he holds a Master’s degree in Industrial Chemistry from the American University of Beirut in 1974. <br>He holds the position of Vice Chairman of the Board of Directors of the Palestine Islamic Bank.<br>Vital positions, including: Chairman of the Board of Directors of Abraaj Real Estate Investments Company, Petropal Mineral Oils Company, and Lotus Financial Investments Company, in addition to being a board member in the Palestinian Telecommunications Group and the Palestinian Electricity Company, in addition to being a member of the Board of Trustees of Saint Joseph Hospital in Jerusalem 2016 -2021 and Chairman of the Board of Directors of SOS Children’s Villages since 2019.' ,
        ]);
        MemberTranslation::create([
            'member_id' => '3',
            'locale' => 'en' ,
            'name' => 'Abdul Qader Badawi' ,
            'job_title' => 'Deputy General Manager' ,
            'description' =>  ' In his position as General Manager since 1/4/1984 and as Chairman of the Board since 1990, he holds a Master’s degree in Industrial Chemistry from the American University of Beirut in 1974. <br>He holds the position of Vice Chairman of the Board of Directors of the Palestine Islamic Bank.<br>Vital positions, including: Chairman of the Board of Directors of Abraaj Real Estate Investments Company, Petropal Mineral Oils Company, and Lotus Financial Investments Company, in addition to being a board member in the Palestinian Telecommunications Group and the Palestinian Electricity Company, in addition to being a member of the Board of Trustees of Saint Joseph Hospital in Jerusalem 2016 -2021 and Chairman of the Board of Directors of SOS Children’s Villages since 2019.' ,
        ]);
        MemberTranslation::create([
            'member_id' => '4',
            'locale' => 'en' ,
            'name' => 'Fahim Al-Zubaidi' ,
            'job_title' => 'Deputy General Manager' ,
            'description' =>  ' In his position as General Manager since 1/4/1984 and as Chairman of the Board since 1990, he holds a Master’s degree in Industrial Chemistry from the American University of Beirut in 1974. <br>He holds the position of Vice Chairman of the Board of Directors of the Palestine Islamic Bank.<br>Vital positions, including: Chairman of the Board of Directors of Abraaj Real Estate Investments Company, Petropal Mineral Oils Company, and Lotus Financial Investments Company, in addition to being a board member in the Palestinian Telecommunications Group and the Palestinian Electricity Company, in addition to being a member of the Board of Trustees of Saint Joseph Hospital in Jerusalem 2016 -2021 and Chairman of the Board of Directors of SOS Children’s Villages since 2019.' ,
        ]);
        MemberTranslation::create([
            'member_id' => '5',
            'locale' => 'en' ,
            'name' => 'Tayseer Elayyan' ,
            'job_title' => 'Deputy General Manager' ,
            'description' =>  ' In his position as General Manager since 1/4/1984 and as Chairman of the Board since 1990, he holds a Master’s degree in Industrial Chemistry from the American University of Beirut in 1974. <br>He holds the position of Vice Chairman of the Board of Directors of the Palestine Islamic Bank.<br>Vital positions, including: Chairman of the Board of Directors of Abraaj Real Estate Investments Company, Petropal Mineral Oils Company, and Lotus Financial Investments Company, in addition to being a board member in the Palestinian Telecommunications Group and the Palestinian Electricity Company, in addition to being a member of the Board of Trustees of Saint Joseph Hospital in Jerusalem 2016 -2021 and Chairman of the Board of Directors of SOS Children’s Villages since 2019.' ,
        ]);

        MemberTranslation::create([
            'member_id' => '1',
            'locale' => 'ar' ,
            'name' => 'طلال نصر الدين' ,
            'job_title' => 'مدير عام' ,
            'description' =>  ' ويرون أن الرجل المتوسط لم يعد يجد متسعا من الوقت ، ولا مالا كافيا بل ولا عزما مثابرا ليرضي حاجاته الروحية ، فقدرته على الانتباه والاستطلاع والفراغ تستغرقها اليوم آلات قوية الأثر هي التلفاز والمذياع والسينما ، حيث تختلط الأخبار بالمعارف والتسلية بالعلم ، فتسهم في تكوين شخصية الإنسان المعاصر في نفس الوقت الذي تسليه فيه . وعندهم أن هذه الآلات لا يمكن أن تقدم ثقافة خصبة لسببين :' ,
        ]);
        MemberTranslation::create([
            'member_id' => '2',
            'locale' => 'ar' ,
            'name' => 'فراس نصر الدين' ,
            'job_title' => ' نائب مدير عام' ,
            'description' =>  ' ويرون أن الرجل المتوسط لم يعد يجد متسعا من الوقت ، ولا مالا كافيا بل ولا عزما مثابرا ليرضي حاجاته الروحية ، فقدرته على الانتباه والاستطلاع والفراغ تستغرقها اليوم آلات قوية الأثر هي التلفاز والمذياع والسينما ، حيث تختلط الأخبار بالمعارف والتسلية بالعلم ، فتسهم في تكوين شخصية الإنسان المعاصر في نفس الوقت الذي تسليه فيه . وعندهم أن هذه الآلات لا يمكن أن تقدم ثقافة خصبة لسببين :' ,
        ]);
        MemberTranslation::create([
            'member_id' => '3',
            'locale' => 'ar' ,
            'name' => 'عبد القادر بدوي' ,
            'job_title' => ' نائب مدير عام' ,
            'description' =>  ' ويرون أن الرجل المتوسط لم يعد يجد متسعا من الوقت ، ولا مالا كافيا بل ولا عزما مثابرا ليرضي حاجاته الروحية ، فقدرته على الانتباه والاستطلاع والفراغ تستغرقها اليوم آلات قوية الأثر هي التلفاز والمذياع والسينما ، حيث تختلط الأخبار بالمعارف والتسلية بالعلم ، فتسهم في تكوين شخصية الإنسان المعاصر في نفس الوقت الذي تسليه فيه . وعندهم أن هذه الآلات لا يمكن أن تقدم ثقافة خصبة لسببين :' ,
        ]);

        MemberTranslation::create([
            'member_id' => '4',
            'locale' => 'ar' ,
            'name' => 'فهيم الزبيدي' ,
            'job_title' => ' نائب مدير عام' ,
            'description' =>  ' ويرون أن الرجل المتوسط لم يعد يجد متسعا من الوقت ، ولا مالا كافيا بل ولا عزما مثابرا ليرضي حاجاته الروحية ، فقدرته على الانتباه والاستطلاع والفراغ تستغرقها اليوم آلات قوية الأثر هي التلفاز والمذياع والسينما ، حيث تختلط الأخبار بالمعارف والتسلية بالعلم ، فتسهم في تكوين شخصية الإنسان المعاصر في نفس الوقت الذي تسليه فيه . وعندهم أن هذه الآلات لا يمكن أن تقدم ثقافة خصبة لسببين :' ,
        ]);
        MemberTranslation::create([
            'member_id' => '5',
            'locale' => 'ar' ,
            'name' => 'محمد ناصر' ,
            'job_title' => ' نائب مدير عام' ,
            'description' =>  ' ويرون أن الرجل المتوسط لم يعد يجد متسعا من الوقت ، ولا مالا كافيا بل ولا عزما مثابرا ليرضي حاجاته الروحية ، فقدرته على الانتباه والاستطلاع والفراغ تستغرقها اليوم آلات قوية الأثر هي التلفاز والمذياع والسينما ، حيث تختلط الأخبار بالمعارف والتسلية بالعلم ، فتسهم في تكوين شخصية الإنسان المعاصر في نفس الوقت الذي تسليه فيه . وعندهم أن هذه الآلات لا يمكن أن تقدم ثقافة خصبة لسببين :' ,
        ]);
    }
}
