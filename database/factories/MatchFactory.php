<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
        'competitionId'=> $faker->numberBetween($min = 1, $max = 200),
        'adversaire'=> $faker->word() ,
        'joue_a'=> $faker->word() ,
        'journee' =>$faker->numberBetween($min = 1, $max = 7),
        'terrain'=> $faker->word() ,
        'arbitre'=> $faker->word() ,
     'equipe_id'=>$faker->numberBetween($min = 1, $max = 100),
        'score'=>$faker->numberBetween($min = 1, $max = 100),
         'extra_time'=> $faker->numberBetween($min = 1, $max = 100) ,
        'user_id'=> $faker->numberBetween($min = 1, $max = 100),
        'owner_id'=> $faker->numberBetween($min = 1, $max = 100),

    ];
});

