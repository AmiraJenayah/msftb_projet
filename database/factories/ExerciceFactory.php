<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercice;
use Faker\Generator as Faker;

$factory->define(Exercice::class, function (Faker $faker) {
    return [
        'ExName'=>$faker->word(),
         'temps'=>$faker->numberBetween($min = 1, $max = 100),
        'exercice_theme'=>$faker->word(),
        'difficulte'=>$faker->word(),
        'phase_jeu'=>$faker->numberBetween($min = 1, $max = 100),
        'nb_series'=>$faker->numberBetween($min = 1, $max = 100),
        'repos_series'=>$faker->numberBetween($min = 1, $max = 100),
        'objectif'=>$faker->sentence(),
        'consignes'=>$faker->sentence(),
        'realisation'=>$faker->word(),

      
    ];
});
