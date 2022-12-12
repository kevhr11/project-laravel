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
        Schema::create('_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('DUI');
            $table->integer('phoneNumber');
            $table->string('email');
            $table->string('password');
            $table->integer('idRoll');
            $table->string('imgProfile');
            $table->integer('idGender');
            $table->date('dateOfBirth');
            $table->integer('idToken');
            $table->integer('idSelectProfile');
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
        Schema::dropIfExists('_users');
    }
};
