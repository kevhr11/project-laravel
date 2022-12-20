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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idBussinesProfile')
                  ->constrained('bussines_profiles')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete()
            ;
            $table->foreignId('idTouristProfile')
                  ->constrained('tourist_profiles')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete()
            ;
            $table->string('name');
            $table->string('input');
            $table->string('output');
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
        Schema::dropIfExists('messages');
    }
};
