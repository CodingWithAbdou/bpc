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
        Schema::create('article_types', function (Blueprint $table) {
            $table->id();

            $table->integer('order_by')->nullable();

            $table->timestamps();
        });

        Schema::create('article_type_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('article_type_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title');

            $table->unique(['article_type_id', 'locale']);
            $table->foreign('article_type_id')->references('id')->on('article_types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_types');
    }
};
