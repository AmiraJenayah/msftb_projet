<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
         'num_mobile'=>$faker->e164PhoneNumber,
        'num_fixe'=>$faker->numberBetween($min = 000000000, $max =99999999),
        'fax'=>$faker->numberBetween($min = 000000000, $max =99999999),
     ];
});
