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
        Schema::create('file_reports', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('file_name')->nullable();
            $table->tinyInteger('type')->default('0')->comment('zero to annual and number one for qurater');
            $table->tinyInteger('quarter')->default('0')->comment('1 firtt 2 second ... 4 fourth');
            $table->integer('order_by')->nullable();

            $table->timestamp('date')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_reports');
    }
};
