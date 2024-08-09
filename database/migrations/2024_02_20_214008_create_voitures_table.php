<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->date('date_achat');
            $table->integer('kilometrage');
            $table->string('matricule');
            $table->string('couleur');
            $table->integer('prix');
            $table->string('image')->default('noimage.jpg');
            $table->string('statut')->default('en marche');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};