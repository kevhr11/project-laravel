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
        Schema::create('_tourist_places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->integer('idMunicipalities');
            $table->string('description');
            $table->foreignId('idTouristAttractive')
                  ->constrained('_tourist_att')
                  ->nullable()
                  ->cascadeOnUpdate()
                  ->nullOnDelete()
            ;

            $table->string('gallery');
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
        Schema::dropIfExists('_tourist_places');
    }
};
