<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercice;
use Faker\Generator as Faker;

$factory->define(Exercice::class, function (Faker $faker) {
    return [
        'name'=>$faker->word(),
         'temps'=>$faker->word(),
        'partie_id'=>$faker->numberBetween($min = 1, $max = 100),
        'exercice_theme_id'=>$faker->numberBetween($min = 1, $max = 100),
        'difficulte'=>$faker->word(),
        'phase_jeu'=>$faker->word(),
        'procede_id'=>$faker->numberBetween($min = 1, $max = 100),
        'pedagogie_id'=>$faker->numberBetween($min = 1, $max = 100),
        'intensite_id'=>$faker->numberBetween($min = 1, $max = 100),
        'nb_series'=>$faker->numberBetween($min = 1, $max = 100),
        'repos_series'=>$faker->word(),
        'recuperation_id'=>$faker->numberBetween($min = 1, $max = 100),
        'objectif'=>$faker->word(),
        'consignes'=>$faker->word(),
        'realisation'=>$faker->word(),
        'schema_url'=>$faker->url(),
        'owner_id'=>$faker->numberBetween($min = 1, $max = 100),
        'section_id'=>$faker->numberBetween($min = 1, $max = 100),

    ];
});
