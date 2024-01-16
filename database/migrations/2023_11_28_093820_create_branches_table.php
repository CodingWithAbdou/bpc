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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('order_by')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
        Schema::create('branch_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('branch_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->string('title_color')->nullable();
            $table->text('address')->nullable();

            $table->unique(['branch_id', 'locale']);
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
