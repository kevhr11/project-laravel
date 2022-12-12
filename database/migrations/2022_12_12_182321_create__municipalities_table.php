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
        Schema::create('_municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignId('idDepartaments')
                  ->constrained('_departaments')
                  ->nullable()
                  ->cascadeOnUpdate()
                  ->nullOnDelete()
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
        Schema::dropIfExists('_municipalities');
    }
};
