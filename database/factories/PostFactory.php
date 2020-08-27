<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post' => $faker->sentence(),
        'type_de_sport' => $faker->word(),
        'description' => $faker->text()
    ];
});
