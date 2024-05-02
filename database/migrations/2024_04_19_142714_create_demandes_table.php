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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idclient')->constrained('users')->onDelete('cascade');
            $table->foreignId('partenaireid')->constrained('users')->onDelete('cascade');
            $table->foreignId('idservice')->constrained('services')->onDelete('cascade');
            $table->integer('duree')->nullable();
            $table->date('date')->nullable();
            $table->enum('statut', ['Accepter', 'Refuser', 'EnAttente'])->default('EnAttente');
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
        Schema::dropIfExists('demandes');
    }
};
