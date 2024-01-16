<?php

namespace Database\Seeders;

use App\Models\Governance;
use App\Models\GovernanceTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GovernanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Governance::create([
            'image' => 'assets/img/general/about-1.webp',
        ]);
        Governance::create([
            'image' => 'assets/img/general/about-1.webp',
        ]);
        Governance::create([
            'image' => 'assets/img/general/about-1.webp',
        ]);
        Governance::create([
            'image' => 'assets/img/general/about-1.webp',
        ]);
        Governance::create([
            'image' => 'assets/img/general/about-1.webp',
        ]);
        Governance::create([
            'file' => 'uploads/Governance/Code-of-Conduct.pdf',
            'file_name' => 'file_name',
        ]);
        Governance::create([
            'image' => 'assets/img/general/about-1.webp',
            'file' => 'file/path',
            'file_name' => 'file_name',
        ]);
        GovernanceTranslation::create([
            'governance_id' => '1',
            'locale' => 'en' ,
            'title' => 'Board ' ,
            'title_color' => 'Membership' ,
            'description_one' => 'The Company is managed by a Board of Directors consisting of seven to nine members elected by the General Assembly through secret vote, to represent the shareholders. The term of the Council shall not exceed two years, which is by default exterminated through the election of a new Council.' ,
            'description_two' => "<p>The company's articles of association require a series of provisions on the issues of membership in the board of directors, and the provisions are summarized in the following:</p> <ul>
            <li class='wow  animate__ animate__fadeInUp animated' style='visibility: visible; animation-name: fadeInUp;'>The candidate holds at least one thousand shares of the company's shares throughout the term of membership</li>
            <li class='wow  animate__ animate__fadeInUp animated' style='visibility: visible; animation-name: fadeInUp;'>Must be older than twenty-one years of age.</li>
            </ul>"
        ]);
        GovernanceTranslation::create([
            'governance_id' => '2',
            'locale' => 'en' ,
            'title' => 'Tasks of the ' ,
            'title_color' => ' Board of Directors' ,
            'description_one' => "The Board of Directors is the first organizing authority in the company, as it is the one that sets the company’s policy and strategies, approves the regulations the company follows, and follows it in its internal relations, and it supervises the implementations of this policy and strategies and the application of these regulations.  <br><br>
            Duties and Committees of the Board of Directors:<br>
            The Chairman and members of the Board of Directors carry out their duties through periodic sessions to follow up and discuss the progress of the company's businesses and develop the necessary tactics to improve its performance." ,
        ]);
        GovernanceTranslation::create([
            'governance_id' => '1',
            'locale' => 'ar' ,
            'title' => 'مجلس الإدارة ' ,
            'title_color' => 'عضوية ' ,
            'description_one' => 'يتولى إدارة الشركة مجلس إدارة يتكون من سبعة إلى تسعة أعضاء تنتخبهم الجمعية العامة بالتصويت السري لتمثيل المساهمين. ولا تزيد مدة المجلس على سنتين، وتنتهي افتراضياً بانتخاب مجلس جديد.' ,
            'description_two' => "<p>يتطلب النظام الأساسي للشركة مجموعة من الأحكام المتعلقة بمسائل العضوية في مجلس الإدارة، وتتلخص الأحكام في ما يلي:            </p> <ul>
            <li class='wow  animate__ animate__fadeInUp animated' style='visibility: visible; animation-name: fadeInUp;'>أن يحمل المرشح ما لا يقل عن ألف سهم من أسهم الشركة طوال مدة العضوية
            </li>
            <li class='wow  animate__ animate__fadeInUp animated' style='visibility: visible; animation-name: fadeInUp;'>أن يكون عمره أكبر من إحدى وعشرين سنة.
            </li>
            </ul>"
        ]);
        GovernanceTranslation::create([
            'governance_id' => '2',
            'locale' => 'ar' ,
            'title' => 'مهام مجلس' ,
            'title_color' => 'الإدارة' ,
            'description_one' => "واجبات ولجان مجلس الإدارة:
            يقوم رئيس وأعضاء مجلس الإدارة بواجباتهم من خلال جلسات دورية لمتابعة ومناقشة سير أعمال الشركة ووضع الأساليب اللازمة لتحسين أدائها.

            <br><br>
            واجبات ولجان مجلس الإدارة:<br>
            يقوم رئيس وأعضاء مجلس الإدارة بواجباتهم من خلال جلسات دورية لمتابعة ومناقشة سير أعمال الشركة ووضع الأساليب اللازمة لتحسين أدائها." ,
        ]);
        GovernanceTranslation::create([
            'governance_id' => '3',
            'locale' => 'en' ,
            'title' => ' Development and' ,
            'title_color' => 'Investment Committee' ,
            'description_one' => "This Committee is chaired by Dr. Salem Abukhaizaran and includes in its membership Mr. Talal Nasereddin and Mr. Firas Nasereddin. This committee aims to review and analyze the company's investments and provide recommendations on them.
            Delegated Authorities: The Committee submits recommendations to the Board of Directors for approval." ,
        ]);
        GovernanceTranslation::create([
            'governance_id' => '4',
            'locale' => 'en' ,
            'title' => ' Internal ' ,
            'title_color' => 'Audit Committee' ,
            'description_one' => "This Committee is chaired by Dr. Farhan Abu Al-Lail and includes in its membership Dr. Yahya Shawar and Mrs. Rasha Nasereddin. The objective of this committee is to audit financial and technical operations and research the risks that the company may face and offer advice on how to avoid them.
            Delegated Authorities: The Committee submits recommendations to the Board of Directors for approval." ,
        ]);

        GovernanceTranslation::create([
            'governance_id' => '5',
            'locale' => 'en' ,
            'title' => ' Designations and ' ,
            'title_color' => 'Promotions Committee' ,
            'description_one' => "This Committee is chaired by Mr. Talal Nasereddin and includes Mr. Firas Nasereddin and Mr. Azzam Shawwa, a representative of the Palestine Investment Fund. The committee’s objective is to set the minimum wage, review incentives and bonuses, and approve annual increments and salary adjustments.
            Delegated Authorities: The Committee submits recommendations to the Board of Directors for approval." ,
        ]);
        GovernanceTranslation::create([
            'governance_id' => '3',
            'locale' => 'ar' ,
            'title' => ' التنمية والاستثمار ' ,
            'title_color' => 'لجنة ' ,
            'description_one' => "ويرأس هذه اللجنة الدكتور سالم أبوخيزران وعضوية السيد طلال ناصر الدين والسيد فراس ناصر الدين. تهدف هذه اللجنة إلى مراجعة وتحليل استثمارات الشركة وتقديم التوصيات بشأنها.
            الصلاحيات المفوضة: تقوم اللجنة برفع توصياتها إلى مجلس الإدارة للاعتماد" ,
        ]);
        GovernanceTranslation::create([
            'governance_id' => '4',
            'locale' => 'ar' ,
            'title' => ' الداخلي ' ,
            'title_color' => 'لجنة التدقيق' ,
            'description_one' => "ويرأس هذه اللجنة الدكتور فرحان أبو الليل وعضوية الدكتور يحيى شاور والسيدة رشا ناصر الدين. هدف هذه اللجنة هو تدقيق العمليات المالية والفنية وبحث المخاطر التي قد تواجه الشركة وتقديم المشورة بشأن كيفية تجنبها.
            الصلاحيات المفوضة: تقوم اللجنة برفع توصياتها إلى مجلس الإدارة للاعتماد." ,
        ]);

        GovernanceTranslation::create([
            'governance_id' => '5',
            'locale' => 'ar' ,
            'title' => ' التعيينات والترقيات' ,
            'title_color' => 'لجنة ' ,
            'description_one' => "ويرأس هذه اللجنة السيد طلال ناصر الدين وتضم في عضويتها السيد فراس ناصر الدين والسيد عزام الشوا ممثلاً عن صندوق الاستثمار الفلسطيني. هدف اللجنة هو تحديد الحد الأدنى للأجور، ومراجعة الحوافز والمكافآت، والموافقة على الزيادات السنوية وتعديلات الرواتب.
            الصلاحيات المفوضة: تقوم اللجنة برفع توصياتها إلى مجلس الإدارة للاعتماد." ,
        ]);

        GovernanceTranslation::create([
            'governance_id' => '7',
            'locale' => 'en' ,
            'description_one' => "Board meetings: The Company’s Board of Directors hold several meetings every year, not less than 6 meetings annually. The Ordinary General Assembly Meeting: A personal invitation shall be sent to all shareholders to attend the ordinary general assembly meeting. The invitation includes the schedule of the meeting. The date of the general assembly is announced in the official newspapers at least two weeks before the date of the meeting."
        ]);
        GovernanceTranslation::create([
            'governance_id' => '7',
            'locale' => 'ar' ,
            'description_one' => "اجتماعات مجلس الإدارة: يعقد مجلس إدارة الشركة عدة اجتماعات سنوياً، بما لا يقل عن 6 اجتماعات سنوياً. اجتماع الجمعية العامة العادية: يتم إرسال دعوة شخصية لجميع المساهمين لحضور اجتماع الجمعية العامة العادية. تتضمن الدعوة جدول الاجتماع. يتم الإعلان عن موعد انعقاد الجمعية العمومية في الصحف الرسمية قبل أسبوعين على الأقل من موعد انعقاد الجمعية." ,
        ]);

    }
}
