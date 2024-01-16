<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول :attribute',
    'accepted_if' => ':attribute مقبول في حال ما إذا كان :other يساوي :value.',
    'active_url' => ':attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي :attribute على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون :attribute ًمصفوفة',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between' => [
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'current_password' => 'كلمة المرور غير صحيحة',
    'date' => ':attribute ليس تاريخًا صحيحًا',
    'date_equals' => 'لا يساوي :attribute مع :date.',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'declined' => 'يجب رفض :attribute',
    'declined_if' => ':attribute مرفوض في حال ما إذا كان :other يساوي :value.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقم/أرقام',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقم/أرقام',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'ends_with' => 'الـ :attribute يجب ان ينتهي بأحد القيم التالية :value.',
    'enum' => ':attribute غير صحيح',
    'exists' => ':attribute لاغٍ',
    'file' => 'الـ :attribute يجب أن يكون من ملفا.',
    'filled' => ':attribute إجباري',
    'gt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من :value كيلوبايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من :value حروفٍ/حرفًا.',
    ],
    'gte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي :value عناصر/عنصر او اكثر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value كيلوبايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value حروفٍ/حرفًا.',
    ],
    'image' => 'يجب أن يكون :attribute صورةً',
    'in' => ':attribute لاغٍ',
    'in_array' => ':attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون :attribute عنوان IP ذا بُنية صحيحة',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 ذا بنية صحيحة.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 ذا بنية صحيحة.',
    'json' => 'يجب أن يكون :attribute نصا من نوع JSON.',
    'lt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اقل من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من :value كيلوبايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من :value حروفٍ/حرفًا.',
    ],
    'lte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value كيلوبايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value حروفٍ/حرفًا.',
    ],
    'mac_address' => 'يجب أن يكون :attribute عنوان MAC ذا بنية صحيحة.',
    'max' => [
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر لـ :max.',
        'string' => 'يجب أن لا يتجاوز طول نص :attribute :max حروفٍ/حرفًا',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر لـ :min.',
        'string' => 'يجب أن يكون طول نص :attribute على الأقل :min حروفٍ/حرفًا',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => ':attribute لاغٍ',
    'not_regex' => ':attribute نوعه لاغٍ',
    'numeric' => 'يجب على :attribute أن يكون رقمًا',
    'password' => [
        'letters' => 'يجب ان يشمل حقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب ان يشمل حقل :attribute على حرف واحد بصيغة كبيرة على الأقل وحرف اخر بصيغة صغيرة.',
        'numbers' => 'يجب ان يشمل حقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب ان يشمل حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'حقل :attribute تبدو غير آمنة. الرجاء اختيار قيمة أخرى.',
    ],
    'present' => 'يجب تقديم :attribute',
    'prohibited' => ':attribute محظور',
    'prohibited_if' => ':attribute محظور في حال ما إذا كان :other يساوي :value.',
    'prohibited_unless' => ':attribute محظور في حال ما لم يكون :other يساوي :value.',
    'prohibits' => ':attribute يحظر :other من اي يكون موجود',
    'regex' => 'صيغة :attribute .غير صحيحة',
    'required' => ':attribute مطلوب.',
    'required_array_keys' => ':attribute يجب ان يحتوي علي مدخلات للقيم التالية :values.',
    'required_if' => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute إذا توفّر :values.',
    'required_with_all' => ':attribute إذا توفّر :values.',
    'required_without' => ':attribute إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق :attribute مع :other',
    'size' => [
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط',
    ],
    'starts_with' => ':attribute يجب ان يبدأ بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'قيمة :attribute مُستخدمة من قبل',
    'uploaded' => 'فشل في تحميل الـ :attribute',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'uuid' => ':attribute يجب ان يكون رقم UUID صحيح.',
    'captcha'              => 'رمز التحقق خاطئ',
    'degree.required_with' => 'حقل الدرجة مطلوب عند وجود أحد الحقول المتعلقة.',
    'specialization.required_with' => 'حقل التخصص مطلوب عند وجود أحد الحقول المتعلقة.',
    'university.required_with' => 'حقل الجامعة مطلوب عند وجود أحد الحقول المتعلقة.',
    'dob.required_with' => 'حقل تاريخ الميلاد مطلوب عند وجود أحد الحقول المتعلقة.',
    'language.required_with' => 'حقل اللغة مطلوب عند وجود أحد الحقول المتعلقة.',
    'reading.required_with' => 'حقل القراءة مطلوب عند وجود أحد الحقول المتعلقة.',
    'writing.required_with' => 'حقل الكتابة مطلوب عند وجود أحد الحقول المتعلقة.',
    'speaking.required_with' => 'حقل التحدث مطلوب عند وجود أحد الحقول المتعلقة.',
    'programs.required_with' => 'حقل البرامج مطلوب عند وجود أحد الحقول المتعلقة.',
    'experience.required_with' => 'حقل الخبرة مطلوب عند وجود أحد الحقول المتعلقة.',
    'course_names.required_with' => 'حقل أسماء الدورات مطلوب عند وجود أحد الحقول المتعلقة.',
    'institute.required_with' => 'حقل المعهد مطلوب عند وجود أحد الحقول المتعلقة.',
    'period.required_with' => 'حقل الفترة مطلوب عند وجود أحد الحقول المتعلقة.',
    'company_name.required_with' => 'حقل اسم الشركة مطلوب عند وجود أحد الحقول المتعلقة.',
    'company_address.required_with' => 'حقل عنوان الشركة مطلوب عند وجود أحد الحقول المتعلقة.',
    'company_number.required_with' => 'حقل رقم الشركة مطلوب عند وجود أحد الحقول المتعلقة.',
    'salary_starting.required_with' => 'حقل الراتب الابتدائي مطلوب عند وجود أحد الحقول المتعلقة.',
    'salary_ending.required_with' => 'حقل الراتب النهائي مطلوب عند وجود أحد الحقول المتعلقة.',
    'period_from.required_with' => 'حقل الفترة من مطلوب عند وجود أحد الحقول المتعلقة.',
    'period_to.required_with' => 'حقل الفترة إلى مطلوب عند وجود أحد الحقول المتعلقة.',
    'reason_for_leave.required_with' => 'حقل سبب الانصراف مطلوب عند وجود أحد الحقول المتعلقة.',
    'you shoud agree' => 'يجب أن توافق على الشرط',
    'You must fill out this field' => 'يجب أن تملئ هذا الحقل ',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'الاسم',
        'email' => 'البريد الإلكتروني',
        'phone' => 'رقم الهاتف',
        'mobile' => 'رقم الهاتف المتنقل',
        'role_id' => 'الصلاحية',
        'password' => 'كلمة المرور',
        'current_password' => 'كلمة المرور الحالية',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'new_password' => 'كلمة المرور الجديدة',
        'title' => 'العنوان',
        'date' => 'التاريخ',
        'time' => 'الوقت',
        'description' => 'الوصف',
        'image' => 'الصورة',
        'message' => 'الرسالة',
        'attachments' => 'المرفقات',
        'text' => 'النص',
        'file' => 'الملف',
        'avatar' => 'الصورة الشخصية',
        'info' => 'عدد السنوات',
        'summary' => 'وصف مختصر',
        'icon' => 'الأيقونة',
        'captcha' => 'رمز التحقق',
        'location' => 'الموقع',
        'speciality' => 'التخصص',
        'question' => 'السؤال',
        'answer' => 'الإجابة',
        'url' => 'الرابط',
        'subtitle' => 'العنوان الفرعي',
        'website_name_ar' => 'اسم الموقع "AR"',
        'website_name_en' => 'اسم الموقع "EN"',
        'description_ar' => 'وصف الموقع "AR"',
        'description_en' => 'وصف الموقع "EN"',
        'keywords' => 'الكلمات الدلالية',
        'dark_logo' => 'الشعار الغامق',
        'light_logo' => 'الشعار الأبيض',
        'favicon' => 'أيقونة المفضلة',
        'address_ar' => 'العنوان "AR"',
        'address_en' => 'العنوان "EN"',
        'direct_phone' => 'رقم الاتصال المباشر',
        'aboard_phone' => 'رقم الاتصال من الخارج',
        'whatsapp' => 'رقم الواتساب',
        'fax' => 'الفاكس',
        'website' => 'رابط الموقع الالكتروني',
        'po_box' => 'رقم صندوق البريد',
        'insurance_type_id' => 'نوع الطلب',
        'governorate_id' => 'المحافظة',
        'address' => 'العنوان',
        'contact_time' => 'وقت التواصل',
        'branch' => 'فرع',
        'fullname' => 'الاسم رباعي',
        'company_name' => 'اسم المؤسسة',
        'job_title' => 'المسمى الوظيفي',
        'experiences' => 'الخبرات',
        'represent' => 'ممثلا عن',
        'news_type_id' => 'نوع الخبر',
        'job_title_id' => 'المسمى الوظيفي',
        'place_of_birth' => 'مكان الميلاد',
        'date_of_birth' => 'وقت الميلاد',
        'passport_no' => 'رقم البطاقة',
        'is_agree' => 'يجب الموافقة على شروط ',
        'marital_status' => 'الحالة الاجتماعية',
        'full_name' => ' الإسم الكامل ',
        'Degree.*' => 'ّ المستوى مطلوب ',


        'specialization.*' => 'ّ  التخصص مطلوب مطلوب ',
        'university.*' => 'ّ الجامعة مطلوب ',
        'dob.*' => 'ّ سنة التخرج مطلوب ',

        'language.*' => 'ّ اللغة مطلوب ',
        'reading.*' => 'ّ مستوى القراءة مطلوب ',
        'writing.*' => 'ّ مستوي الكاتابة مطلوب ',
        'speaking.*' => 'ّ مستوى التكلم مطلوب ',

        'programs.*' => 'ّ البرنامج مطلوب ',
        'experience.*' => 'ّ الخبرة مطلوب ',

        'course_names.*' => 'ّ اسم الكورس مطلوب ',
        'institute.*' => 'ّ المعهد مطلوب ',
        'period.*' => 'ّ المدة مطلوب ',

        'company_name.*' => 'ّ إسم الشركة مطلوب ',
        'company_address.*' => 'ّ عنوان الشركة مطلوب ',
        'company_number.*' => 'ّ رقم الشركة مطلوب ',
        'salary_starting.*' => 'ّ مرتب البداية مطلوب ',
        'salary_ending.*' => 'ّ مرتب النهاية مطلوب ',
        'period_from.*' => 'ّ الفترة من  مطلوب ',
        'period_to.*' => 'ّ الفترة الي مطلوب ',
        'reason_for_leave.*' => 'ّ سبب الرحيل مطلوب ',

        'desc_suffer' => 'ّ وصف المرض مطلوب'   ,
        'has_suffer' => 'ّ المرض مطلوب ',
    ],

];
