<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adresses;
use Faker\Generator as Faker;

$factory->define(Adresses::class, function (Faker $faker) {
    return [
        'adresse' => $faker->address(),
        'code_postal' => $faker->postcode(),
        'ville'=> $faker->city(),
        'pays'=> $faker->country(),
        'longitude' =>$faker->latitude($min = -90, $max = 90) ,
        'latitude' => $faker ->longitude($min = -180, $max = 180)
    ];
});
