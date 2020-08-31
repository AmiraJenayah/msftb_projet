<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->integer('competitionID');
            $table->string('adversaire');
       //     $table->string('tour');
            $table->string('joue_a');
           // $table->string('phase');
         //  $table->string('lieu');
           // $table->string('date_time');
            $table->integer('journee');
          //  $table->integer('schema_jeu');
            $table->string('terrain');
            $table->string('arbitre');
            $table->integer('equipe_id');
          //  $table->integer('capitaine_id');
            $table->string('score');
          //  $table->integer('but_in');
          //  $table->integer('but_out');
          //  $table->string('status');
          ///  $table->Tinyinteger('is_prolongation');
            $table->integer('extra_time');
            $table->integer('user_id');
            $table->integer('owner_id');
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
        Schema::dropIfExists('matches');
    }
}
