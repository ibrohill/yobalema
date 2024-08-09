<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('drop_off_location');
            $table->date('pick_up_date');
            $table->date('drop_off_date');
            $table->time('pick_up_time');
            $table->unsignedBigInteger('chauffeur_id');
            $table->unsignedBigInteger('voiture_id');
            $table->timestamps();

            // $table->foreign('chauffeur_id')->references('id')->on('chauffeurs');
            // // Remplacer 'voitures' par le nom de votre table de voitures
            // $table->foreign('voiture_id')->references('id')->on('voitures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
