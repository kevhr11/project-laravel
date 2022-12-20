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
        Schema::create('get_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idService')
                  ->constrained('services')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('idBussineProfile')
                  ->constrained('bussines_profiles')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
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
        Schema::dropIfExists('get_services');
    }
};