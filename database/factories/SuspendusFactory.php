<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Suspendus;
use Faker\Generator as Faker;

$factory->define(Suspendus::class, function (Faker $faker) {
    return [
        'type_susp'=> $faker->word(),
        'duree' => $faker->numberBetween($min = 1, $max = 100),
      //  'date_debut' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
       // 'date_fin' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        'description' => $faker-> text($maxNbChars = 10)

    ];
});
