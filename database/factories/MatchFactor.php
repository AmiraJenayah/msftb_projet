<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
        
        'competitionID'=> $faker->numberBetween($min = 1, $max = 200),
        'adversaire'=> $faker->word() ,
       // 'tour'=> $faker->word() ,
        'joue_a'=> $faker->word() ,
      //  'lieu'=> $faker->word() ,
       // 'date_time'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'journee' =>$faker->numberBetween($min = 1, $max = 7),
        // 'schema_jeu'=> $faker->numberBetween($min = 1, $max = 200),
        'terrain'=> $faker->word() ,
        'arbitre'=> $faker->word() ,
     'equipe_id'=>$faker->numberBetween($min = 1, $max = 100),
       //  'capitaine_id'=>$faker->numberBetween($min = 1, $max = 100),
        'score'=>$faker->numberBetween($min = 1, $max = 100),
        // 'but_in'=>$faker->numberBetween($min = 1, $max = 10),
        // 'but_out'=>$faker->numberBetween($min = 1, $max = 10),
        // 'status'=> $faker->word() ,
        // 'is_prolongation'=> $faker->numberBetween($min = 0, $max = 1),,
         'extra_time'=> $faker->numberBetween($min = 1, $max = 100) ,
        'user_id'=> $faker->numberBetween($min = 1, $max = 100),
        'owner_id'=> $faker->numberBetween($min = 1, $max = 100),

    ];
});


