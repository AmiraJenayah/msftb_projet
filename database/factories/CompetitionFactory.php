<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Competition;
use Faker\Generator as Faker;

$factory->define(Competition::class, function (Faker $faker) {
    return [
        'Compname'=> $faker->word() ,
        'Saison'=> $faker->word() ,
        'Prix' =>$faker->numberBetween($min = 1000, $max = 500000),
        'Number_equipe'=> $faker->numberBetween($min = 1, $max = 99) ,
     
    ];
});
