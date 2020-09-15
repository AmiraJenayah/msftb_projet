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
           
             $table->string('matchName');
            $table->string('adversaire');
            $table->string('joue_a');
           $table->string('journee');
            $table->string('terrain');
         $table->string('arbitre');
            $table->integer('equipe_id');
          //  $table->string('score');
            $table->integer('extra_time');
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
