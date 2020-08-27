<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('temps');
            $table->integer('partie_id');
            $table->integer('exercice_theme_id');
            $table->string('difficulte');
            $table->integer('phase_jeu');
            $table->integer('procede_id');
            $table->integer('pedagogie_id');
            $table->integer('intensite_id');
            $table->integer('nb_series');
            $table->integer('repos_series');
            $table->integer('recuperation_id');
            $table->text('objectif');
            $table->text('consignes');
            $table->text('realisation');
            $table->string('schema_url');
            $table->integer('owner_id');
            $table->integer('section_id');

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
        Schema::dropIfExists('exercices');
    }
}
