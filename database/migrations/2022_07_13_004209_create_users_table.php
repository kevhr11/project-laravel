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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('DUI');
            $table->integer('phoneNumber');
            $table->string('email');
            $table->string('password');
            $table->string('imgProfile');
            $table->string('gender');
            $table->string('dateOfBirth');

            $table->foreignId('idToken')
                  ->constrained('tokens')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->foreignId('idSelectProfile')
                    ->constrained('select_profiles')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete()
            ;
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
        Schema::dropIfExists('users');
    }
};