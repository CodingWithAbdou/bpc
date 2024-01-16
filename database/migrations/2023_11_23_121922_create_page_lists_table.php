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
        Schema::create('page_lists', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('page_id')->nullable();
            $table->integer('order_by');
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('page_list_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('page_list_id')->unsigned();

            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->string('title_color')->nullable();
            $table->text('description')->nullable();

            $table->unique(['page_list_id', 'locale']);
            $table->foreign('page_list_id')->references('id')->on('page_lists')->onDelete('cascade');

            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_lists');
    }
};
