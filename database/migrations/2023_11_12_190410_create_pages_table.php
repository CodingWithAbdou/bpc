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
        Schema::create('pages', function (Blueprint $table) {
            $table->id('id');
            $table->string('page_key');
            $table->string('section_key');
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            // $table->boolean('has_seconde_u')->default(1)
            $table->string('info')->nullable();
            $table->integer('order_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
