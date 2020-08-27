<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->integer('event_type_id');
            $table->integer('club_id');
            $table->string('date_time');
            $table->string('lieu');
            $table->string('title');
            $table->integer('theme_id');
            $table->integer('seance_id');
            $table->integer('section_id');
            $table->integer('categorie_id');
            $table->integer('equipe_id');
            $table->text('commentaires');
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
        Schema::dropIfExists('evenements');
    }
}
