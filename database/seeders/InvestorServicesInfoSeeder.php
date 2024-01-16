<?php

namespace Database\Seeders;

use App\Models\InvestorServicesInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestorServicesInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InvestorServicesInfo::create([
            'whatsapp' => '+972 2 2967206' ,
            'email' => 'shareholders@bpc.ps' ,
            "description_en" => '<p>With our best wishes to all, we wish to inform you that we will be adopting bank transfers to your below-indicated accounts for disbursing the cash dividends due on your shareholding in Birzeit Pharmaceutical Company. Please ensure to fill out the form accurately, verify your bank account is active, and attach the required documents as specified below.<br><br>Priding ourselves on our shareholders, we continuously strive to maintain a clear and rapid communication mechanism with our shareholders and investors.<br><br> Kindly send the following form and its attachments to the email <a href="mailto:shareholders@bpc.ps">shareholders@bpc.ps</a>. Should you have any inquiries or encounter any issues, please contact us at <a href="https://wa.me/972594203043">+972594203043</a> on WhatsApp.<br> Please note, if you are unable to send the form via email, it can be sent to the fax number: <a href="javscript:void(0);">+972 2 2967206</a></p>',
            "description_ar" => '<p>مع تمنياتنا للجميع بالتوفيق، نود إعلامكم أننا سنعتمد التحويل البنكي إلى حساباتكم المبينة أدناه لتوزيع الأرباح النقدية المستحقة على مساهمتكم في شركة بيرزيت للأدوية. يرجى التأكد من ملء النموذج بدقة، والتحقق من أن حسابك البنكي نشط، وإرفاق المستندات المطلوبة كما هو محدد أدناه.<br><br>ولأننا نفخر بمساهمينا، فإننا نسعى باستمرار للحفاظ على آلية اتصال واضحة وسريعة مع عملائنا المساهمين والمستثمرين.<br><br> يرجى إرسال النموذج التالي ومرفقاته إلى البريد الإلكتروني <a href="mailto:shareholders@bpc.ps">shareholders@bpc.ps</a>. إذا كانت لديك أي استفسارات أو واجهت أي مشكلات، فيرجى الاتصال بنا على <a href="https://wa.me/972594203043">+972594203043</a> على WhatsApp.<br> يرجى ملاحظة أنه إذا لم تتمكن من ذلك أرسل النموذج عبر البريد الإلكتروني، ويمكن إرساله إلى رقم الفاكس: <a href="javscript:void(0);">+972 2 2967206</a></p>',
            ]);
    }
}
