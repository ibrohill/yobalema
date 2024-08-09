<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('numPermis');
            $table->string('experience');
            $table->date('dateEmission');
            $table->string('categorie');
            $table->string('image')->default('noimage.jpg');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('chauffeurs');
    }
};
