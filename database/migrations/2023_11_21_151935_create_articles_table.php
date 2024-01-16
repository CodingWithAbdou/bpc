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
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('member_id')->nullable();
            $table->unsignedBigInteger('article_type_id')->nullable();


            $table->string("image");
            $table->string("file_one")->nullable();
            $table->string("file_one_name")->nullable();
            $table->string("file_two")->nullable();
            $table->string("file_two_name")->nullable();
            $table->integer("order_by")->nullable();

            $table->foreign('article_type_id')->references('id')->on('article_types')->onDelete('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('article_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title');
            $table->text('description')->nullable();

            $table->unique(['article_id', 'locale']);
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
