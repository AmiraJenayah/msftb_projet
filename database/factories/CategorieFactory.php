<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Categorie::class, function (Faker $faker) {
    return [
        'title' =>$faker ->word(),
        'description'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'type_sport'=>$faker ->word(),
        'number_joueurs'=>$faker->numberBetween($min = 1, $max = 100),

    ];
});
