<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthday');
            $table->string('birthplace');
            $table->string('email');
            $table->integer('num_tenue');
            $table->string('taille');
            $table->string('date_arrive');
            $table->string('poids');
            $table->string('mutation');
            $table->string('last_equipe');
            $table->string('meilleur_pied');
            $table->integer('adresse_id')->references('id')->on('adresses')->onDelete('cascade');
            $table->integer('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->string('num_license');
            $table->string('photo');
            $table->integer('number_anneJoué');
//$table->boolean('malade_connu');
           // $table->text('malade');
         //   $table->text('tratiement_suivre');
         //  $table->integer('scolaire_id')->references('id')->on('scolaires')->onDelete('cascade');



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
        Schema::dropIfExists('joueurs');
    }
}
