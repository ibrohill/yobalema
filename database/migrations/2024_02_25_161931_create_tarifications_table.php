<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarificationsTable extends Migration
{
    public function up()
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('reservation_id');
            // $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
            // $table->decimal('montant', 8, 2);
            // $table->dateTime('date_paiement');
            // $table->string('moyen_paiement');
            // $table->string('facture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tarifications');
    }
}
