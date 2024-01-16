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
        Schema::create('member_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('member_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('job_title')->nullable();
            $table->text('description')->nullable();

            $table->unique(['member_id', 'locale']);
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_translations');
    }
};
