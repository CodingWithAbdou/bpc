<?php

namespace Database\Seeders;

use App\Models\PageList;
use App\Models\PageListTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageList::create([
            'page_id' => '13' ,
            "order_by" => '1'
        ]);
        PageList::create([
            'page_id' => '13' ,
            "order_by" => '2'
        ]);
        PageList::create([
            'page_id' => '13' ,
            "order_by" => '3'
        ]);

        PageListTranslation::create([
            'page_list_id' => '1' ,
            'locale' => 'en' ,
            'title' => 'Water' ,
            'title_color' => 'Drainage' ,
            'description' => 'We assess the amounts of water we utilize monthly and have equipped an area for the reuse of about 1000litre /hour for reuse of treated water, in addition to the treatment and reuse of steaming water.'
        ]);
        PageListTranslation::create([
            'page_list_id' => '2' ,
            'locale' => 'en' ,
            'title' => 'Solid ' ,
            'title_color' => 'waste' ,
            'description' => 'Solid waste resulting from our operations is separated into contaminated waste; is disposed of under the supervision of the ministry of health. Clean waste is collected and separated. According to the nature of the waste, plastic, aluminum, glass, and wood are then recycled or reused.'
        ]);
        PageListTranslation::create([
            'page_list_id' => '3' ,
            'locale' => 'en' ,
            'title' => 'Proper gas usage and' ,
            'title_color' => 'air treatment system' ,
            'description' => "<p>At BPC we acknowledge the importance of protecting the ozone layer; we prohibit the usage of disastrous gases, such as exchanging halon fire extinguishers with co2 fire extinguishers, and also prohibit the use of Freon gas in water chillers.
            <br> We also control the dust resulting from the handling of raw materials and processing of certain products, by providing an air treatment system that enforces the circulation of 100%clean air in our production areas also, we use dust collection systems to extract all the dust and ensure a clean exhaust air. BPC seeks to create an effective administrative environmental system and production method, where we always prefer to buy our raw materials from environment-friendly providers, also all of our production waste is treated before disposal.</p>"
        ]);

        PageListTranslation::create([
            'page_list_id' => '1' ,
            'locale' => 'ar' ,
            'title' => 'المياه' ,
            'title_color' => 'تصريف ' ,
            'description' => 'نقوم بتقييم كميات المياه التي نستخدمها شهرياً وقمنا بتجهيز منطقة لإعادة الاستخدام تبلغ حوالي 1000 لتر/ساعة لإعادة استخدام المياه المعالجة، بالإضافة إلى معالجة وإعادة استخدام المياه البخارية.'
        ]);
        PageListTranslation::create([
            'page_list_id' => '2' ,
            'locale' => 'ar' ,
            'title' => 'الصلبة ' ,
            'title_color' => 'النفايات ' ,
            'description' => 'يتم فصل النفايات الصلبة الناتجة عن عملياتنا إلى نفايات ملوثة؛ ويتم التخلص منها تحت إشراف وزارة الصحة. يتم جمع النفايات النظيفة وفصلها. ووفقاً لطبيعة النفايات، يتم بعد ذلك إعادة تدوير البلاستيك والألومنيوم والزجاج والخشب أو إعادة استخدامها.'
        ]);
        PageListTranslation::create([
            'page_list_id' => '3' ,
            'locale' => 'ar' ,
            'title' => 'الاستخدام السليم للغاز ونظام' ,
            'title_color' => 'معالجة الهواء' ,
            'description' => "<p>نحن في BPC ندرك أهمية حماية طبقة الأوزون؛ نحظر استخدام الغازات الكارثية، مثل استبدال طفايات الحريق الهالون بطفايات الحريق بثاني أكسيد الكربون، كما نحظر استخدام غاز الفريون في مبردات المياه.
            <br> نقوم أيضًا بالتحكم في الغبار الناتج عن التعامل مع المواد الخام ومعالجة بعض المنتجات، من خلال توفير نظام معالجة الهواء الذي يفرض دوران الهواء النظيف بنسبة 100% في مناطق الإنتاج لدينا أيضًا، كما نستخدم أنظمة جمع الغبار لاستخراج جميع الغبار و ضمان هواء العادم النظيف. تسعى BPC إلى إنشاء نظام بيئي إداري فعال وطريقة إنتاج، حيث نفضل دائمًا شراء المواد الخام لدينا من مقدمي خدمات صديقين للبيئة، كما تتم معالجة جميع مخلفات الإنتاج لدينا قبل التخلص منها.            </p>"
        ]);
    }
}
