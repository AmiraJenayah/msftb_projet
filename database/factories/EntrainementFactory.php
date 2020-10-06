<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entrainement;
use Faker\Generator as Faker;

$factory->define(Entrainement::class, function (Faker $faker) {
    return [
            'Period'=> $faker->date($format = 'Y-m-d', $max = 'now') ,
        'Lieu'=> $faker->city() ,
        'Horaire' =>$faker->time(),
        'Nb_exercice'=> $faker->numberBetween($min = 1, $max = 99) ,
      

       

       
    ];
});
