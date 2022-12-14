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
        Schema::create('tourist_places', function (Blueprint $table) {
            $table->id();
            $table->string('namePlace');
            $table->string('location');
            $table->foreignId('idMunicipalities')
                  ->constrained('municipalities')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete ()
            ;
            $table->string('description');

            $table->string('gallery');
            $table->integer('score');
            $table->timestamps();
            $table->foreignId('idTouristAttractive')
            ->constrained('tourist_atts')
            ->cascadeOnUpdate()
            ->cascadeOnDelete()
      ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourist_places');
    }
};
