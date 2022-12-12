<?php

use App\Models\Users;
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
        Schema::create('_tourist_profile', function (Blueprint $table) {
            $table->foreignId('idUser')
                    ->constrained('_Users')
                    ->nullable()
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete()
            ;

            $table->string('description');
            $table->string('location');
            $table->string('message');
            $table->string('reviews');
            $table->integer('idTouristPlaces');
            $table->integer('idGallery');
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
        Schema::dropIfExists('_tourist_profile');
    }
};
