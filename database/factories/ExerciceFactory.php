<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercice;
use Faker\Generator as Faker;

$factory->define(Exercice::class, function (Faker $faker) {
    return [
        'name'=>$faker->word(),
         'temps'=>$faker->numberBetween($min = 1, $max = 100),
        'partie_id'=>$faker->numberBetween($min = 1, $max = 100),
        'exercice_theme_id'=>$faker->numberBetween($min = 1, $max = 100),
        'difficulte'=>$faker->word(),
        'phase_jeu'=>$faker->numberBetween($min = 1, $max = 100),
        'procede_id'=>$faker->numberBetween($min = 1, $max = 100),
        'pedagogie_id'=>$faker->numberBetween($min = 1, $max = 100),
        'intensite_id'=>$faker->numberBetween($min = 1, $max = 100),
        'nb_series'=>$faker->numberBetween($min = 1, $max = 100),
        'repos_series'=>$faker->numberBetween($min = 1, $max = 100),
        'recuperation_id'=>$faker->numberBetween($min = 1, $max = 100),
        'objectif'=>$faker->word(),
        'consignes'=>$faker->word(),
        'realisation'=>$faker->word(),
        'schema_url'=>$faker->url(),
        'owner_id'=>$faker->numberBetween($min = 1, $max = 100),
        'section_id'=>$faker->numberBetween($min = 1, $max = 100),

    ];
});
