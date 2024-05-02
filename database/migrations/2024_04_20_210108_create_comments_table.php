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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('Note')->nullable();
            $table->unsignedBigInteger('Userid')->nullable();
            $table->unsignedBigInteger('Demandeid')->nullable();
            // Changement du type de colonne en date
            $table->timestamps();
            $table->foreign('Userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('Demandeid')->references('id')->on('demandes')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
