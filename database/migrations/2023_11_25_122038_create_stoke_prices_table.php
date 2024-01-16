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
        Schema::create('stoke_prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 8, 2);
            $table->decimal('percent', 8, 2);
            $table->string('link');
            $table->string('image');
            $table->timestamps();
        });
        Schema::create('stoke_price_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('stoke_price_id')->unsigned();

            $table->string('locale')->index();
            $table->string('subtitle');
            $table->string('info');
            $table->text('description');

            $table->unique(['stoke_price_id', 'locale']);
            $table->foreign('stoke_price_id')->references('id')->on('stoke_prices')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stoke__prices');
    }
};
