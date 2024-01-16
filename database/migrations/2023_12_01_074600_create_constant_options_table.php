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
        Schema::create('constant_options', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('constant_id')->nullable();

            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->integer('order_by')->nullable();

            $table->foreign('constant_id')->references('id')->on('constants')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constan_options');
    }
};
