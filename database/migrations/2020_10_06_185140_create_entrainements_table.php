<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrainementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrainements', function (Blueprint $table) {
            $table->id();
                           $table->string('EntName'); 

               $table->string('Period'); 
               
               $table->string('Lieu'); 
                 $table->string('Horaire');
                                  $table->integer('Nb_exercice');

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
        Schema::dropIfExists('entrainements');
    }
}
