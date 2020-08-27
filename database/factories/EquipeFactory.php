<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipe;
use Faker\Generator as Faker;

$factory->define(Equipe::class, function (Faker $faker) {
    return [
           'name'=> $faker->firstNameMale(),
            'slug' => $faker->firstNameMale(),
            'section_id'=> $faker->numberBetween($min = 1, $max = 100),
            'categorie_id'=> $faker->numberBetween($min = 1, $max = 100),
    ];
});
