<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
      'matchName'=> $faker->word() ,
            'date'=> $faker->date($format = 'Y-m-d', $max = 'now') ,

        'adversaire'=> $faker->word() ,
        'tenue' =>$faker->word(),
        'stade'=> $faker->word() ,
        'arbitre'=> $faker->word() ,
     'equipe'=>$faker->word() ,
       

       
    ];
});


