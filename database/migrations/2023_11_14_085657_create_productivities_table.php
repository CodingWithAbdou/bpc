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
        Schema::create('productivities', function (Blueprint $table) {
            $table->id();
            $table->string("icone");
            $table->string('value')->nullable();
            $table->integer("order_by");
            $table->timestamps();
        });

        Schema::create('productivity_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('productivity_id')->unsigned();
            $table->string('locale')->index();

            $table->string('name');

            $table->unique(['productivity_id', 'locale']);
            $table->foreign('productivity_id')->references('id')->on('productivities')->onDelete('cascade');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productivities');
    }
};
