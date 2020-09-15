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
            $table->string('ExName');
            $table->integer('temps');
            $table->string('exercice_theme');
            $table->string('difficulte');
            $table->integer('phase_jeu');
            $table->integer('nb_series');
            $table->integer('repos_series');
            $table->text('objectif');
            $table->text('consignes');
            $table->text('realisation');
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
