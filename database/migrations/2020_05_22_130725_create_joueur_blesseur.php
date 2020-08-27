<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueurBlesseur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueur_blesseur', function (Blueprint $table) {
            $table->id();
            $table->integer('joueur_id')->references('id')->on('joueurs')->onDelete('cascade');
            $table->integer('blesseur_id')->references('id')->on('blesseurs')->onDelete('cascade');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('commentaire');
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
        Schema::dropIfExists('joueur_blesseur');
    }
}
