<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercice;
use Faker\Generator as Faker;

$factory->define(Exercice::class, function (Faker $faker) {
    return [
        'ExName'=>$faker->word(),
         'Duree'=>$faker->time(),
        'type'=>$faker->word(),
       'activite'=>$faker->sentence(),
  

      
    ];
});
