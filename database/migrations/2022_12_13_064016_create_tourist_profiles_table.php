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
        Schema::create('tourist_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUser')
            ->constrained('users')
            ->cascadeOnUpdate()
            ->cascadeOnDelete()
    ;

    $table->string('description');
    $table->string('location');
    $table->string('message');
    $table->string('reviews');
    $table->foreignId('idTouristPlaces')
            ->constrained('tourist_places')
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
        Schema::dropIfExists('tourist_profiles');
    }
};