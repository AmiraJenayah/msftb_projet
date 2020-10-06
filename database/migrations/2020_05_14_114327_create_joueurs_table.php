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
            $table->date('birthday');
            $table->string('email');
            $table->integer('numero_tenue');
             $table->string('hauteur');
              $table->string('poids');
             $table->string('etatdeSante');
               $table->integer('salaire');
         $table->integer('primes');
             
                     //      $table->date('date_arrive');

       //       $table->string('last_equipe');
       //       $table->string('meilleur_pied');     
      //     $table->string('num_license');
        //      $table->integer('number_anneJoue');
         //  //     $table->string('post_player');
         //      $table->string('num_mobile');
         //     $table->string('num_fixe');
          //     $table->text('adresse');
            //  $table->string('code_postal');
             // $table->string('ville');
            //  $table->string('pays');
         //   $table->integer('speed');
         //    $table->integer('endurance');
         //      $table->integer('tactical');
             //$table->integer('technical');
            //$table->integer('attack');
            //$table->integer('defense');
          
         //  $table->string('contrat');


            
        //     $table->integer('adresse_id')->default(1)->constrained('adresses')->onDelete('cascade');
        // $table->integer('contact_id')->default(1)->constrained('contacts')->onDelete('cascade');
         
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
       /*  $table->dropForeign('joueurs_adresse_id_foreign');
                $table->dropForeign('joueurs_contact_id_foreign');
 */
    }
}
