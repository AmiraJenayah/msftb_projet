<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blesseur;
use Faker\Generator as Faker;

$factory->define(Blesseur::class, function (Faker $faker) {
    return [
        'type_blesse' => $faker->word(),
        'duree' => $faker->word(),
        'description' => $faker-> text($maxNbChars = 10),
    ];
});
