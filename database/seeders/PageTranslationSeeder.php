<?php

namespace Database\Seeders;

use App\Models\PageTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageTranslation::create([
            'locale' => 'en' ,
            'page_id' => '1' ,
            'title' => 'slider' ,
            // 'subtitle' => 'experience' ,
            // 'description' => 'Birzeit Pharmaceutical Company is a leading Palestinian company in the field of pharmaceutical manufacturing. The company produces approximately 300 preparations distributed on ten production lines covering various therapeutic fields. The company targets all types of customers in the local Palestinian market, including the Ministry of Health and local and international health care organizations and programs' ,

        ]);
        PageTranslation::create([
            'locale' => 'en' ,
            'page_id' => '2' ,
            'title' => '50 Years of Experience in The Pharmaceutical Industry' ,
            'subtitle' => 'experience' ,
            'description' => 'Birzeit Pharmaceutical Company is a leading Palestinian company in the field of pharmaceutical manufacturing. The company produces approximately 300 preparations distributed on ten production lines covering various therapeutic fields. The company targets all types of customers in the local Palestinian market, including the Ministry of Health and local and international health care organizations and programs' ,
        ]);
        PageTranslation::create([
            'page_id' => '2' ,
            'locale' => 'ar' ,
            'title' => '50 سنة خبرة' ,
            'subtitle' => 'experience' ,
            'description' => 'السينما أحدث الفنون جميعا ، فعمرها يكاد لا يتجاوز السبعين عاما في حين أن الأدب من أقدم الفنون ، إن لم يكن أقدمها جميعا ، فلدينا نصوص أدبية يزيد عمرها على الأربعين قرنا ، فضلا عن المحاولات الشفاهية التي سبقتها ولم تصل إلينا . لذلك كانت للأدب تقاليده الفنية الراسخة ، ومقاييسه الجمالية المصطلح عليها ، في حين أن السينما ما زالت تفتقر إلى مثل هذه التقاليد والمقاييس .ولعل غلبة العنصر الصناعي على السينما وما يترتب عليه من قيم تجارية سوقية هو السبب الرئيسي لتخلفها الفني والفكري ، ونفور عدد غير قليل من كبار الأدباء والمفكرين عنها ، فالمنتج الذي يملك وسائل الإنتاج السينمائي ويقوم بتمويله ، لا يستهدف عادة غير الربح ، ومن ثم يضع في اعتباره أولا وقبل كل شيء متطلبات السوق ، ورغبات الجماهير الضخمة ومستوى فهمها ، الذي اصطلح على أنه لا يزيد على مستوى صبي مراهق في الرابعة عشرة من عمره !' ,
        ]);
        PageTranslation::create([
            'page_id' => '3' ,
            'locale' => 'en' ,
            'title' => 'Our Products' ,
            'description' => 'BPC manufactures and markets generic products in almost all therapeutic fields including a variety of dosage forms, the company manufactures. We continuously focus on maintaining the highest standards of quality, to ensure that our products deliver the maximum benefit to patients, our commitment to quality is the key factor to our success.' ,
        ]);
        PageTranslation::create([
            'page_id' => '3' ,
            'locale' => 'ar' ,
            'title' => 'منتجاتنا' ,
            'description' => 'السينما أحدث الفنون جميعا ، فعمرها يكاد لا يتجاوز السبعين عاما في حين أن الأدب من أقدم الفنون ، إن لم يكن أقدمها جميعا ، فلدينا نصوص أدبية يزيد عمرها على الأربعين قرنا ، فضلا عن المحاولات الشفاهية التي سبقتها ولم تصل إلينا . لذلك كانت للأدب تقاليده الفنية الراسخة ، ومقاييسه الجمالية المصطلح عليها ، في حين أن السينما ما زالت تفتقر إلى مثل هذه التقاليد والمقاييس .ولعل غلبة العنصر الصناعي على السينما وما يترتب عليه من قيم تجارية سوقية هو السبب الرئيسي لتخلفها الفني والفكري ، ونفور عدد غير قليل من كبار الأدباء والمفكرين عنها ، فالمنتج اللى مستوى صبي مراهق في الرابعة عشرة من عمره !' ,
        ]);

        PageTranslation::create([
            'page_id' => '4' ,
            'locale' => 'en' ,
            'title' => 'Our professional team works to increase productivity on the market' ,
        ]);


        PageTranslation::create([
            'page_id' => '5' ,
            'locale' => 'en' ,
            'title' => 'Latest ' ,
        ]);
        PageTranslation::create([
            'page_id' => '5' ,
            'locale' => 'ar' ,
            'title' => ' الاخبار' ,
        ]);
        PageTranslation::create([
            'page_id' => '6' ,
            'locale' => 'en' ,
            'title' => 'Company' ,
            'subtitle' => 'Profile' ,
            'description' => 'Birzeit Pharmaceutical Company is a leading Palestinian company in the field of pharmaceutical manufacturing. The company produces approximately 300 preparations distributed on ten production lines covering various therapeutic fields. The company targets all types of clients in the local Palestinian market, including the Ministry of Health, local and international healthcare organizations and programs, in addition to consumers (through pharmacies and doctors).' ,
        ]);
        PageTranslation::create([
            'page_id' => '7' ,
            'locale' => 'en' ,
            'title' => 'Sedonde Profile' ,
            'description' => 'Since 2004, BPC has invested in eliminating the environmental damage associated with pharmaceutical manufacturing. The Company’s first environment-friendly building was completed in 2012, whereby solar energy had been utilized as an alternative to fuel. BPC aims to replicate this environment-friendly example in its other facilities and is still investing in applying new green energy resources.' ,
// enters, out of its strong interest in the healthcare field. The company also supports several societies on an annual basis.' ,
        ]);
        PageTranslation::create([
            'page_id' => '7' ,
            'locale' => 'ar' ,
            'title' => 'البروفايل الثاني' ,
            'description' => 'تعليق عغن البروفايل الثاني' ,
// enters, out of its strong interest in the healthcare field. The company also supports several societies on an annual basis.' ,
        ]);
        PageTranslation::create([
            'page_id' => '8' ,
            'locale' => 'en' ,
            'title' => 'Company ' ,
            'subtitle' => 'Vision & Mission' ,
            'description' => 'The vision of Birzeit Pharma is to be the leading locally and regionally in providing pharmaceutical products for a better life. The values are trust, professionalism, efficiency, effectiveness, belonging, and cooperation. We have always been keen to be innovative in the targeted markets through providing high-quality products coping with the ongoing progress the world is witnessing, through hiring a distinguished and a qualified staff, to fulfil our responsibilities towards our employees, our community and our society. We are committed to maintain a clean environment for our society and people.' ,
        ]);

        PageTranslation::create([
            'page_id' => '9' ,
            'locale' => 'en' ,
            'title' => 'Company' ,
            'subtitle' => 'History' ,
            'description' => 'Birzeit Pharmaceuticals Company was established in 1974 in Birzeit, which is 10 km from Ramallah, as a private joint stock company with an investment of 150,000 US dollars in total capital. In 1979, Birzeit Pharmaceutical Company became a public joint stock company with a capital of US$0.5 million.
            In 1992, the company merged with the Palestine Pharmaceutical Manufacturing Company, which is the third largest pharmaceutical company in Palestine at the time. It also established the MEDIX skincare company, which represents a number of international companies such as Maybelline, Vichy, and Andola.
            Birzeit Pharmaceuticals Company obtained the ISO 9001 certificate in 2001. In 2000, the company purchased 73% of the shares of the Eastern Chemical Company and obtained the remaining 27% of them in 2004, and in the same year, it obtained the ISO 14001 certificate.
            In 2005, Birzeit Company owned 51% of Petrofam Company in Algeria, where Birzeit Company exports semi-finished products to it, which Petropharm packages and sells in the Algerian market. Also in 2005, Birzeit Pharmaceutical Company became listed on the Palestine Stock Exchange. The continuous investment in quality led Birzeit Pharmaceuticals to obtain GMP certification according to the standards of the World Health Organization in 2008. In 2010, Birzeit Pharmaceuticals doubled its export market share, which was reflected in its revenues 2010.
            Birzeit Pharmaceuticals Company is constantly re-evaluating its business with the aim of being the most distinguished company in the pharmaceutical industry in Palestine, being able to provide people with the needs that ensure their health.' ,
        ]);

        PageTranslation::create([
            'page_id' => '10' ,
            'locale' => 'en' ,
            'title' => 'Privacy Policy' ,
            'description' => '<h4>Welcome to the Privacy Policy for Birzeit Pharmaceutical Company’s website at bpc.ps. This Privacy Policy explains how we collect, use, and protect the personal information that you provide to us when you use our website.</h4>
            <ol><li>Information we collect: We collect personal information that you voluntarily provide to us when you use our website, such as your name, email address, phone number, and any other information that you choose to provide.</li><li>Use of information: We use your personal information to provide you with the products and services that you request, to communicate with you about our products and services, and to improve our website and customer service.</li><li>Sharing of information: We do not sell or rent your personal information to third parties. We may share your personal information with our affiliates, service providers, or business partners to the extent necessary to provide you with the products and services that you request.</li><li>Cookies and tracking technologies: We may use cookies, web beacons, and other tracking technologies to collect information about your use of our website, such as your IP address, browser type, and operating system. This information helps us to improve our website and to provide you with a better user experience.</li><li>Data security: We take reasonable measures to protect your personal information from unauthorized access, use, or disclosure. However, no data transmission over the internet can be guaranteed to be completely secure, so we cannot guarantee the security of your information.</li><li>Children’s privacy: Our website is not directed to children under the age of 13, and we do not knowingly collect personal information from children under the age of 13. If you are under the age of 13, please do not provide us with any personal information.</li><li>Changes to Privacy Policy: We reserve the right to update or modify this Privacy Policy at any time without prior notice. Your continued use of our website following any changes to this Privacy Policy constitutes your acceptance of those changes.</li><li>Contact us: If you have any questions or concerns about this Privacy Policy or our website, please contact us at <strong>info@bpc.ps</strong> or by calling our office at <strong>+970-2-2987573.</strong></li></ol>
            <p>Thank you for visiting our website.</p>' ,
        ]);

        PageTranslation::create([
            'page_id' => '11' ,
            'locale' => 'en' ,
            'title' => 'Terms and Condition' ,
            'description' => '<h4>Welcome to the Terms and Conditions for Birzeit Pharmaceutical Company’s website at bpc.ps. By accessing and using our website, you agree to be bound by the following terms and conditions:</h4>
            <ol><li>Ownership of content: All content on the website, including but not limited to text, graphics, logos, images, and software, is the property of Birzeit Pharmaceutical Company and is protected by copyright laws.</li><li>Use of website: You may use our website for personal, non-commercial purposes only. You may not copy, modify, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer or sell any information or content obtained from the website without our prior written consent.</li><li>Accuracy of information: We strive to ensure that all information on our website is accurate, but we cannot guarantee the accuracy, completeness, or timeliness of the information. We reserve the right to update or modify the information on our website at any time without prior notice.</li><li>Product information: Any information or content provided on our website about our products is for informational purposes only and should not be used as a substitute for professional medical advice or treatment. Please consult your healthcare provider before using any of our products.</li><li>Links to third-party websites: Our website may contain links to third-party websites that are not under our control. We are not responsible for the content or availability of these websites and we do not endorse any products or services offered on them.</li><li>Limitation of liability: Birzeit Pharmaceutical Company shall not be liable for any damages, including but not limited to direct, indirect, incidental, consequential, or punitive damages, arising out of or in connection with the use or inability to use our website or the information or content provided on our website.</li><li>Indemnification: You agree to indemnify and hold Birzeit Pharmaceutical Company and its affiliates, officers, agents, employees, and licensors harmless from any claim or demand, including reasonable attorneys’ fees, made by any third party due to or arising out of your use of our website or your violation of these terms and conditions.</li><li>Governing law: These terms and conditions shall be governed by and construed in accordance with the laws of the State of Palestine, without giving effect to any principles of conflicts of law.</li><li>Jurisdiction: Any legal action arising out of or in connection with these terms and conditions or the use of our website shall be brought in the courts of the State of Palestine.</li><li>Changes to terms and conditions: We reserve the right to update or modify these terms and conditions at any time without prior notice. Your continued use of our website following any changes to these terms and conditions constitutes your acceptance of those changes.</li><li>Contact us: If you have any questions or concerns about these terms and conditions or our website, please contact us at <strong>info@bpc.ps</strong> or by calling our office at <strong>+970-2-2987573.</strong></li></ol>
            <p>Thank you for visiting our website.</p>' ,
        ]);

        PageTranslation::create([
            'page_id' => '12' ,
            'locale' => 'en' ,
            'title' => 'Social Responsibility' ,
            'description' => '<p>BPC considers its commitment to its social responsibility a core priority. The company focuses on sustainable investments in several important fields such as environment, education, health, social & cultural development, athletic development, and most importantly BPC’s internal community and its employees.</p> ' ,
        ]);

        PageTranslation::create([
            'page_id' => '13' ,
            'locale' => 'en' ,
            'title' => 'Our Environment' ,
            'description' => 'Since 2004, BPC has invested in eliminating the environmental damage associated with pharmaceutical manufacturing. The Company’s first environment-friendly building was completed in 2012, whereby solar energy had been utilized as an alternative to fuel. BPC aims to replicate this environment-friendly example in its other facilities and is still investing in applying new green energy resources.' ,
// enters, out of its strong interest in the healthcare field. The company also supports several societies on an annual basis.' ,
        ]);
        PageTranslation::create([
            'page_id' => '14' ,
            'locale' => 'en' ,
            'title' => 'community' ,
            'description' => '<p>Birzeit Pharmaceutical Company considers its social responsibility a principle and a priority. Since many years, the company has been investing in supporting and developing our community, through different campaigns related to environment, health, and education, in addition to implementing several programs based on sustainable projects. Birzeit Pharmaceutical Company focuses its interest on supporting school and university students, in addition to campaigns targeting hospitals and medical centers, out of its strong interest in the healthcare field. The company also supports several societies on an annual basis.</p> ' ,
        ]);
        PageTranslation::create([
            'page_id' => '12' ,
            'locale' => 'ar' ,
            'title' => 'المسؤولية الاجتماعية ' ,
            'description' => '<p>تعتبر BPC التزامها بمسؤوليتها الاجتماعية أولوية أساسية. تركز الشركة على الاستثمارات المستدامة في عدة مجالات مهمة مثل البيئة والتعليم والصحة والتنمية الاجتماعية والثقافية والتطوير الرياضي، والأهم من ذلك المجتمع الداخلي لشركة BPC وموظفيها..</p> ' ,
        ]);

        PageTranslation::create([
            'page_id' => '13' ,
            'locale' => 'ar' ,
            'title' => 'بيئتنا' ,
            'description' => '<p>منذ عام 2004، استثمرت شركة BPC في القضاء على الأضرار البيئية المرتبطة بتصنيع الأدوية. تم الانتهاء من أول مبنى صديق للبيئة للشركة في عام 2012، حيث تم استخدام الطاقة الشمسية كبديل للوقود. وتهدف شركة BPC إلى تكرار هذا المثال الصديق للبيئة في منشآتها الأخرى، ولا تزال تستثمر في تطبيق موارد الطاقة الخضراء الجديدة</p>' ,
// enters, out of its strong interest in the healthcare field. The company also supports several societies on an annual basis.' ,
        ]);
        PageTranslation::create([
            'page_id' => '14' ,
            'locale' => 'ar' ,
            'title' => 'مجتمعنا' ,
            'description' => '<p>تعتبر شركة بيرزيت للأدوية مسؤوليتها الاجتماعية مبدأ وأولوية. منذ سنوات عديدة، تستثمر الشركة في دعم وتطوير مجتمعنا، من خلال الحملات المختلفة المتعلقة بالبيئة والصحة والتعليم، بالإضافة إلى تنفيذ العديد من البرامج القائمة على المشاريع المستدامة. تركز شركة بيرزيت للأدوية اهتمامها على دعم طلاب المدارس والجامعات، بالإضافة إلى الحملات التي تستهدف المستشفيات والمراكز الطبية، انطلاقاً من اهتمامها الكبير بمجال الرعاية الصحية. كما تدعم الشركة العديد من الجمعيات على أساس سنوي.</p> ' ,
        ]);

        PageTranslation::create([
            'page_id' => '15' ,
            'locale' => 'en' ,
            'title' => 'Stock Price' ,
        ]);
        PageTranslation::create([
            'page_id' => '16' ,
            'locale' => 'en' ,
            'title' => 'Investor services' ,
            'description' => 'With our best wishes to all, we wish to inform you that we will be adopting bank transfers to your below-indicated accounts for disbursing the cash dividends due on your shareholding in Birzeit Pharmaceutical Company. Please ensure to fill out the form accurately, verify your bank account is active, and attach the required documents as specified below.

            Priding ourselves on our shareholders, we continuously strive to maintain a clear and rapid communication mechanism with our shareholders and investors.

            Kindly send the following form and its attachments to the email shareholders@bpc.ps. Should you have any inquiries or encounter any issues, please contact us at +972594203043 on WhatsApp.
            Please note, if you are unable to send the form via email, it can be sent to the fax number: +972 2 2967206'
        ]);
        PageTranslation::create([
            'page_id' => '17' ,
            'locale' => 'en' ,
            'title' => 'Financial Reports' ,
        ]);
        PageTranslation::create([
            'page_id' => '18' ,
            'locale' => 'en' ,
            'title' => 'Governance' ,
        ]);
        PageTranslation::create([
            'page_id' => '15' ,
            'locale' => 'ar' ,
            'title' => 'سعر السهم' ,
        ]);
        PageTranslation::create([
            'page_id' => '16' ,
            'locale' => 'ar' ,
            'title' => 'خدمات المستثمرين' ,
            'description' => 'مع أطيب تمنياتنا للجميع، نود إعلامكم أننا سنعتمد التحويل البنكي إلى حساباتكم المبينة أدناه لتوزيع الأرباح النقدية المستحقة على مساهمتكم في شركة بيرزيت للأدوية. يرجى التأكد من ملء النموذج بدقة، والتحقق من أن حسابك البنكي نشط، وإرفاق المستندات المطلوبة كما هو محدد أدناه.

            ومن منطلق فخرنا بمساهمينا، فإننا نسعى باستمرار للحفاظ على آلية اتصال واضحة وسريعة مع المساهمين والمستثمرين.

            يرجى إرسال النموذج التالي ومرفقاته إلى البريد الإلكتروني المساهمين@bpc.ps. إذا كان لديك أي استفسار أو واجهت أي مشكلة، يرجى الاتصال بنا على الرقم +972594203043 عبر الواتساب.
            يرجى ملاحظة أنه إذا لم تتمكن من إرسال النموذج عبر البريد الإلكتروني، فيمكن إرساله إلى رقم الفاكس: +972 2 2967206'
        ]);
        PageTranslation::create([
            'page_id' => '17' ,
            'locale' => 'ar' ,
            'title' => 'تقارير مالية' ,
        ]);
        PageTranslation::create([
            'page_id' => '18' ,
            'locale' => 'ar' ,
            'title' => 'الحكم' ,
        ]);

        PageTranslation::create([
            'page_id' => '19' ,
            'locale' => 'en' ,
            'title' => 'Board of Directors' ,
            'description' => 'A seven to nine-member Board, elected by shareholders through a secret ballot, manages the Company. Board terms are limited to two years, ending with new elections.'
        ]);
        PageTranslation::create([
            'page_id' => '20' ,
            'locale' => 'en' ,
            'title' => 'Committees' ,
            'description' => "Dr. Abukhaizaran's committee strategizes on investments, Dr. Abu Al-Lail's team conducts financial audits, and Mr. Nasereddin's panel shapes wage frameworks."
        ]);
        PageTranslation::create([
            'page_id' => '21' ,
            'locale' => 'en' ,
            'title' => 'Executive Management' ,
            'description' => "The management includes seasoned leaders like Talal and Firas Nasereddin, with expertise across finance, chemistry, engineering, pharmacy, and more, driving company operations."
        ]);
        PageTranslation::create([
            'page_id' => '22' ,
            'locale' => 'en' ,
            'title' => 'Code of conduct' ,
            'description' => "Birzeit Pharmaceuticals emphasizes transparency and integrity, mandating adherence to a Code of Ethics for all management and staff, ensuring ethical conduct in all operations."

        ]);
        PageTranslation::create([
            'page_id' => '23' ,
            'locale' => 'en' ,
            'title' => 'General Assembly Meeting' ,
            'description' => "The Company's Board of Directors convenes for at least six sessions each year. Shareholders are personally invited to the Ordinary General Assembly, with details announced in the press two weeks prior."
        ]);
        PageTranslation::create([
            'page_id' => '19' ,
            'locale' => 'ar' ,
            'title' => 'مجلس إدارة' ,
            'description' => 'ويتولى إدارة الشركة مجلس إدارة يتكون من سبعة إلى تسعة أعضاء، ينتخبهم المساهمون بالاقتراع السري. وتقتصر فترة ولاية مجلس الإدارة على عامين، وتنتهي بإجراء انتخابات جديدة.'
        ]);
        PageTranslation::create([
            'page_id' => '20' ,
            'locale' => 'ar' ,
            'title' => 'اللجان' ,
            'description' => "تضع لجنة الدكتور أبوخيزران استراتيجيات الاستثمار، ويقوم فريق الدكتور أبو الليل بإجراء عمليات التدقيق المالي، وتقوم لجنة السيد نصر الدين بوضع أطر الأجور."
        ]);
        PageTranslation::create([
            'page_id' => '21' ,
            'locale' => 'ar' ,
            'title' => 'الادارة التنفيذية' ,
            'description' => "تضم الإدارة قادة متمرسين مثل طلال وفراس ناصر الدين، يتمتعون بخبرة في مجالات التمويل والكيمياء والهندسة والصيدلة والمزيد، مما يؤدي إلى قيادة عمليات الشركة."
        ]);
        PageTranslation::create([
            'page_id' => '22' ,
            'locale' => 'ar' ,
            'title' => 'مدونة لقواعد السلوك' ,
            'description' => "تؤكد شركة بيرزيت للأدوية على الشفافية والنزاهة، وتفرض الالتزام بقواعد الأخلاقيات لجميع الإدارة والموظفين، مما يضمن السلوك الأخلاقي في جميع العمليات."

        ]);
        PageTranslation::create([
            'page_id' => '23' ,
            'locale' => 'ar' ,
            'title' => 'اجتماع الجمعية العمومية' ,
            'description' => "يجتمع مجلس إدارة الشركة لمدة ست جلسات على الأقل كل سنة. تتم دعوة المساهمين شخصياً لحضور الجمعية العامة العادية، وسيتم الإعلان عن التفاصيل في الصحافة قبل أسبوعين."
        ]);

        PageTranslation::create([
            'page_id' => '10' ,
            'locale' => 'ar' ,
            'title' => 'سياسة الحصوصية' ,
            'description' => ' <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">مرحبا بكم في سياسة الخصوصية لموقع شركة بيرزيت للأدوية bpc.ps. </font><font style="vertical-align: inherit;">تشرح سياسة الخصوصية هذه كيف نقوم بجمع واستخدام وحماية المعلومات الشخصية التي تقدمها لنا عند استخدام موقعنا.</font></font></h4>
            <ol><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">المعلومات التي نجمعها: نقوم بجمع المعلومات الشخصية التي تقدمها لنا طوعًا عند استخدام موقعنا، مثل اسمك وعنوان بريدك الإلكتروني ورقم هاتفك وأي معلومات أخرى تختار تقديمها.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">استخدام المعلومات: نستخدم معلوماتك الشخصية لتزويدك بالمنتجات والخدمات التي تطلبها، وللتواصل معك بشأن منتجاتنا وخدماتنا، ولتحسين موقعنا الإلكتروني وخدمة العملاء.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">مشاركة المعلومات: نحن لا نبيع أو نؤجر معلوماتك الشخصية لأطراف ثالثة. </font><font style="vertical-align: inherit;">يجوز لنا مشاركة معلوماتك الشخصية مع الشركات التابعة لنا، أو مقدمي الخدمات، أو شركاء العمل بالقدر اللازم لتزويدك بالمنتجات والخدمات التي تطلبها.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ملفات تعريف الارتباط وتقنيات التتبع: قد نستخدم ملفات تعريف الارتباط وإشارات الويب وتقنيات التتبع الأخرى لجمع معلومات حول استخدامك لموقعنا الإلكتروني، مثل عنوان IP الخاص بك ونوع المتصفح ونظام التشغيل. </font><font style="vertical-align: inherit;">تساعدنا هذه المعلومات على تحسين موقعنا الإلكتروني وتزويدك بتجربة مستخدم أفضل.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">أمن البيانات: نحن نتخذ تدابير معقولة لحماية معلوماتك الشخصية من الوصول أو الاستخدام أو الكشف غير المصرح به. </font><font style="vertical-align: inherit;">ومع ذلك، لا يمكن ضمان أن يكون نقل البيانات عبر الإنترنت آمنًا تمامًا، لذلك لا يمكننا ضمان أمان معلوماتك.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">خصوصية الأطفال: موقعنا غير موجه للأطفال دون سن 13 عامًا، ولا نقوم عمدًا بجمع معلومات شخصية من الأطفال دون سن 13 عامًا. إذا كان عمرك أقل من 13 عامًا، فيرجى عدم تزويدنا بأي معلومات شخصية .</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">التغييرات في سياسة الخصوصية: نحتفظ بالحق في تحديث أو تعديل سياسة الخصوصية هذه في أي وقت دون إشعار مسبق. </font><font style="vertical-align: inherit;">إن استمرارك في استخدام موقعنا الإلكتروني بعد أي تغييرات على سياسة الخصوصية هذه يشكل موافقتك على هذه التغييرات.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">اتصل بنا: إذا كان لديك أي أسئلة أو استفسارات بشأن سياسة الخصوصية هذه أو موقعنا الإلكتروني، يرجى الاتصال بنا على </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">info@bpc.ps</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> أو عن طريق الاتصال بمكتبنا على الرقم </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+970-2-2987573.</font></font></strong></li></ol>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">شكرا لكم لزيارة موقعنا.</font>'
        ]);

        PageTranslation::create([
            'page_id' => '11' ,
            'locale' => 'ar' ,
            'title' => 'أحكام وشروط' ,
            'description' => ' <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">أهلاً بكم في الشروط والأحكام الخاصة بالموقع الإلكتروني لشركة بيرزيت للأدوية bpc.ps. </font><font style="vertical-align: inherit;">من خلال الدخول إلى موقعنا واستخدامه، فإنك توافق على الالتزام بالشروط والأحكام التالية:</font></font></h4>
            <ol><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ملكية المحتوى: جميع محتويات الموقع، بما في ذلك على سبيل المثال لا الحصر، النصوص والرسومات والشعارات والصور والبرامج، هي ملك لشركة بيرزيت للأدوية ومحمية بموجب قوانين حقوق النشر.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">استخدام الموقع: يجوز لك استخدام موقعنا لأغراض شخصية وغير تجارية فقط. </font><font style="vertical-align: inherit;">لا يجوز لك نسخ أو تعديل أو توزيع أو نقل أو عرض أو تنفيذ أو إعادة إنتاج أو نشر أو ترخيص أو إنشاء أعمال مشتقة من أو نقل أو بيع أي معلومات أو محتوى تم الحصول عليه من الموقع دون موافقة كتابية مسبقة منا.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">دقة المعلومات: نحن نسعى جاهدين للتأكد من أن جميع المعلومات الموجودة على موقعنا دقيقة، ولكن لا يمكننا ضمان دقة المعلومات أو اكتمالها أو توقيتها. </font><font style="vertical-align: inherit;">نحن نحتفظ بالحق في تحديث أو تعديل المعلومات الموجودة على موقعنا في أي وقت دون إشعار مسبق.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">معلومات المنتج: أي معلومات أو محتوى مقدم على موقعنا الإلكتروني حول منتجاتنا هو لأغراض إعلامية فقط ولا ينبغي استخدامه كبديل عن المشورة الطبية المتخصصة أو العلاج. </font><font style="vertical-align: inherit;">يرجى استشارة مقدم الرعاية الصحية الخاص بك قبل استخدام أي من منتجاتنا.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">روابط لمواقع طرف ثالث: قد يحتوي موقعنا على روابط لمواقع طرف ثالث لا تخضع لسيطرتنا. </font><font style="vertical-align: inherit;">نحن لسنا مسؤولين عن محتوى هذه المواقع أو توفرها ولا نؤيد أي منتجات أو خدمات مقدمة عليها.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">حدود المسؤولية: لن تكون شركة بيرزيت للأدوية مسؤولة عن أي أضرار، بما في ذلك على سبيل المثال لا الحصر، الأضرار المباشرة أو غير المباشرة أو العرضية أو التبعية أو التأديبية، التي تنشأ عن أو فيما يتعلق باستخدام أو عدم القدرة على استخدام موقعنا أو المعلومات. أو المحتوى المقدم على موقعنا.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">التعويض: أنت توافق على تعويض شركة بيرزيت للأدوية والشركات التابعة لها ومسؤوليها ووكلائها وموظفيها ومرخصيها وحمايتهم من أي مطالبة أو طلب، بما في ذلك أتعاب المحاماة المعقولة، التي يقدمها أي طرف ثالث بسبب أو ناشئ عن استخدامك للموقع. موقعنا أو مخالفتك لهذه الشروط والأحكام.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">القانون الحاكم: تخضع هذه الشروط والأحكام وتفسر وفقًا لقوانين دولة فلسطين، دون تفعيل أي مبادئ تتعلق بتعارض القوانين.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">الاختصاص القضائي: أي إجراء قانوني ينشأ عن أو فيما يتعلق بهذه الشروط والأحكام أو استخدام موقعنا يجب رفعه أمام محاكم دولة فلسطين.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">التغييرات على الشروط والأحكام: نحتفظ بالحق في تحديث أو تعديل هذه الشروط والأحكام في أي وقت دون إشعار مسبق. </font><font style="vertical-align: inherit;">إن استمرارك في استخدام موقعنا الإلكتروني بعد أي تغييرات على هذه الشروط والأحكام يشكل موافقتك على هذه التغييرات.</font></font></li><li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">اتصل بنا: إذا كان لديك أي أسئلة أو استفسارات بشأن هذه الشروط والأحكام أو موقعنا الإلكتروني، يرجى الاتصال بنا على </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">info@bpc.ps</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> أو عن طريق الاتصال بمكتبنا على الرقم </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+970-2-2987573.</font></font></strong></li></ol>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">شكرا لكم لزيارة موقعنا.</font></font></p>'
        ]);
        PageTranslation::create([
            'page_id' => '24' ,
            'locale' => 'en' ,
            'title' => 'Branches' ,
        ]);
        PageTranslation::create([
            'page_id' => '24' ,
            'locale' => 'ar' ,
            'title' => 'الفروع' ,
        ]);
        PageTranslation::create([
            'page_id' => '25' ,
            'locale' => 'en' ,
            'title' => 'Information Contact ' ,
        ]);
        PageTranslation::create([
            'page_id' => '25' ,
            'locale' => 'ar' ,
            'title' => 'معولمات الإتصال' ,
        ]);
    }
}
