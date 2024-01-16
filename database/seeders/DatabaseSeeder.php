<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Monolog\Handler\Slack\SlackRecord;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call(SliderSeeder::class);
        $this->call(SliderTranslationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PageTranslationSeeder::class);
        $this->call(ProductTypeSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(productivitySeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(CertificateSeeder::class);
        $this->call(ProjectModelSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(ArticleTypeSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(PageListSeeder::class);
        $this->call(StokPriceSeeder::class);
        $this->call(FileReportSeeder::class);
        $this->call(GovernanceSeeder::class);
        $this->call(InvestorServicesInfoSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(ConstantSedder::class);
        $this->call(CareerSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
