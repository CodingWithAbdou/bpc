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
        Schema::create('info_careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file')->nullable();
            $table->string('file_name')->nullable();
            $table->integer('order_by')->nullable();
            $table->timestamps();
        });

        Schema::create('info_career_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('info_career_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->unique(['info_career_id', 'locale']);
            $table->foreign('info_career_id')->references('id')->on('info_careers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_careers');
    }
};
