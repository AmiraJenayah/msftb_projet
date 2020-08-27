<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familles', function (Blueprint $table) {
            $table->id();
            $table->string('situation_parent');
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('travail_pere');
            $table->string('travail_mere');
            $table->integer('tel_pere');
            $table->integer('tel_mere');
            $table->integer('fix_pere');
            $table->integer('fix_mere');
            $table->string('email_pere');
            $table->string('email_mere');
            $table->integer('joueur_id')->references('id')->on('joueurs')->onDelete('cascade');

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
        Schema::dropIfExists('familles');
    }
}
