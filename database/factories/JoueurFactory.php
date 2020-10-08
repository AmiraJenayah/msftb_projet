<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Joueur;
use Faker\Generator as Faker;

$factory->define(Joueur::class, function (Faker $faker) {
    return [
             
        'first_name'=> $faker->firstNameMale(),
        'last_name'=> $faker->lastName(),
        'birthday'=> $faker->date($format = 'Y-m-d', $max = 'now') ,
        'email'=> $faker->email(),
        'numero_tenue'=>$faker->numberBetween($min = 1, $max = 99),
        'hauteur'=> $faker->randomFloat(1, 165, 198),
        'poids'=> $faker->randomFloat(1, 60,100),
        //'meilleur_pied'=>$faker->randomFloat(2, 15, 100),
        //'post_player'=>$faker->word(),
        'etatdeSante'=> $faker->word() ,
        'salaire' => $faker->numberBetween($min = 1000, $max = 50000),
        'primes' => $faker->numberBetween($min = 100, $max = 10000)
       // 'photo'=> $faker->imageUrl($width = 640, $height = 480) ,
        
        //'number_anneJoue' => $faker->numberBetween($min = 1, $max = 20),
        //'last_equipe'=>$faker->word(),
          //      'num_license'=> $faker->numberBetween($min = 1, $max = 9000),
 //'num_mobile'=>$faker->e164PhoneNumber            ,
   //     'num_fixe'=>$faker->e164PhoneNumber            
,
       
        /*    'adresse' => $faker->address(),
        'code_postal' => $faker->postcode(),
        'ville'=> $faker->city(),
        'pays'=> $faker->country(),

           'speed'  => $faker->numberBetween($min = 1, $max = 100),
           'endurance'  => $faker->numberBetween($min = 1, $max = 100),
             'tactical'  => $faker->numberBetween($min = 1, $max = 100),
            'technical'  => $faker->numberBetween($min = 1, $max = 100),
               'attack'  => $faker->numberBetween($min = 1, $max = 100),
            'defense'  => $faker->numberBetween($min = 1, $max = 100), */

    ];
});
