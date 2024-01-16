<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\CertificateTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certificate::Create([
            "icone" => "storage/img/certificates/certificate-1.webp" ,
            "order_by" => "1" ,
            "name" => "ISO 9001" ,
            "description_en" => 'BPC company obtained the ISO certificate in quality management.',
            "description_ar" => 'حصلت شركة BPC على شهادة الأيزو في إدارة الجودة.'
        ]);

        Certificate::Create([
            "icone" => "storage/img/certificates/certificate-2.svg" ,
            "order_by" => "2" ,
            "name" => "ISO 14001" ,
            "description_en" => 'BPC has obtained Environmental Management Certification.',
            "description_ar" => 'حصلت BPC على شهادة الإدارة البيئية.'
        ]);

        Certificate::Create([
            "icone" => "storage/img/certificates/certificate-3.svg" ,
            "order_by" => "3" ,
            "name" => "GMP" ,
            "description_en" => 'BPC has obtained the Palestinian GMP certificate.',
            "description_ar" => 'حصلت شركة BPC على شهادة GMP الفلسطينية.'
        ]);

    }
}
