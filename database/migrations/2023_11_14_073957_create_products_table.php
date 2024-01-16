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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('product_type_id')->nullable();
            // $table->unsignedBigInteger('category_id')->nullable();

            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->string('file_name')->nullable();
            $table->integer('order_by')->nullable();

            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('product_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('product_id')->unsigned();

            $table->string('locale')->index();

            $table->text('use')->nullable();
            $table->text('how_to_use')->nullable();
            $table->string('name')->nullable();

            $table->unique(['product_id', 'locale']);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
