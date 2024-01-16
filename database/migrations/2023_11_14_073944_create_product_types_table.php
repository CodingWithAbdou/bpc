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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();

            $table->string('icone');
            $table->string('title')->nullable();
            $table->integer('order_by');

            $table->timestamps();
        });

        Schema::create('product_type_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('product_type_id')->unsigned();
            $table->string('locale')->index();

            $table->string('name');
            $table->text('description')->nullable();

            $table->unique(['product_type_id', 'locale']);
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
