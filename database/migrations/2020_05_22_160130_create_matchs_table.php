<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchs', function (Blueprint $table) {
        $table->id();
            $table->integer('competitionId');
            $table->string('adversaire');
            $table->string('joue_a');
            $table->integer('journee');
            $table->string('terrain');
            $table->string('arbitre');
            $table->integer('equipe_id');
            $table->string('score');
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
        Schema::dropIfExists('matchs');
    }
}
