<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('full_name')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('gender')->comment('0 male , 1 female');
            $table->string('passport_no')->nullable();
            $table->string('marital_status')->nullable();
            $table->tinyInteger('has_suffer')->comment('0 no , 1 yes');
            $table->text('desc_suffer')->nullable();
            $table->tinyInteger('has_allergy')->comment('0 no , 1 yes');
            $table->tinyInteger('smoke')->comment('0 no , 1 yes');
            $table->tinyInteger('is_agree')->comment('0 no , 1 yes');
            $table->timestamps();
        });

        Schema::create('career_Educational', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('career_id')->nullable();

            $table->string('degree')->nullable();
            $table->string('degree_specialization')->nullable();
            $table->string('degree_university')->nullable();
            $table->date('degree_date')->nullable();

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('career_Languages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('career_id')->nullable();

            $table->string('language')->nullable();
            $table->tinyInteger('reading')->comment('0 weak 1 good 2 Excellent');
            $table->tinyInteger('writing')->comment('0 weak 1 good 2 Excellent');
            $table->tinyInteger('speaking')->comment('0 weak 1 good 2 Excellent');

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');

            $table->timestamps();
        });
        Schema::create('career_computer_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('career_id')->nullable();

            $table->string('name')->nullable();
            $table->tinyInteger('Experience')->comment('0 weak 1 good 2 Excellent');

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');

            $table->timestamps();
        });
        Schema::create('career_training_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('career_id')->nullable();

            $table->string('name')->nullable();
            $table->string('training_institute');
            $table->string('Period');

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('career_work_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('career_id')->nullable();

            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_tel')->nullable();
            $table->string('salary_start')->nullable();
            $table->string('salary_end')->nullable();
            $table->date('period_from')->nullable();
            $table->date('period_to')->nullable();
            $table->text('reason_for_leaving')->nullable();

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
