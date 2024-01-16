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
        Schema::create('governances', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->string('file_name')->nullable();
            $table->timestamps();
        });

        Schema::create('governance_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('governance_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->string('title_color')->nullable();
            $table->text('description_one')->nullable();
            $table->text('description_two')->nullable();

            $table->unique(['governance_id', 'locale']);
            $table->foreign('governance_id')->references('id')->on('governances')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board_of_directors');
    }
};
