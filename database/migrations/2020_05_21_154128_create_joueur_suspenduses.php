<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueurSuspenduses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueur_suspenduses', function (Blueprint $table) {
            $table->id();
            $table->integer('joueur_id')->references('id')->on('joueurs')->onDelete('cascade');
            $table->integer('suspension_id')->references('id')->on('suspenduses')->onDelete('cascade');
            $table->string('date_debut');
            $table->string('date_fin');

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
        Schema::dropIfExists('joueur_suspenduses');
    }
}
