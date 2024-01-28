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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('hotel');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('phone');
            $table->string('email');
            $table->integer('number_people');
            $table->integer('rome');
            $table->tinyInteger('delivery')->comment('0 => no thanks , 1 => yes');
            $table->string('flight_no');
            $table->string('arrival_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
