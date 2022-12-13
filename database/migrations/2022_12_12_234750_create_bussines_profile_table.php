<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussines_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('idUser');
            $table->string('description');
            $table->string('location');
            $table->integer('idGetServices');
            $table->integer('idBussinesType');
            $table->string('certificate');
            $table->string('message');
            $table->string('reviews');
            $table->integer('idTourisPlace');
            $table->integer('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bussines_profile');
    }
};