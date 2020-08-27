<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Joueur;
use Faker\Generator as Faker;

$factory->define(Joueur::class, function (Faker $faker) {
    return [
        'first_name'=> $faker->firstNameMale(),
        'last_name'=> $faker->lastName(),
        'date_naissance'=> $faker->date($format = 'Y-m-d', $max = 'now') ,
        'taille'=> $faker->randomFloat(2, 15, 100),
        'poids'=> $faker->randomFloat(2, 15, 100),
        'meilleur_pied'=>$faker->randomFloat(2, 15, 100),
        'mutation'=> $faker->word() ,
        'adresse_id' => $faker->numberBetween($min = 1, $max = 100),
        'contact_id'=> $faker->numberBetween($min = 1, $max = 100),
        'email'=> $faker->email(),
        'num_license'=> $faker->numberBetween($min = 1, $max = 9000),
        'photo'=> $faker->imageUrl($width = 640, $height = 480) ,
        'num_tenue'=>$faker->numberBetween($min = 1, $max = 99),
        'date_arrive'=> $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        'last_equipe'=>$faker->word(),

    ];
});