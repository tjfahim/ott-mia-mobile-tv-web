<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Production_member;
use Faker\Generator as Faker;




$factory->define(Production_member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl,  // Correct method for generating image URL
        'role' => $faker->randomElement(['artist', 'producer', 'director']),  // Correct usage of randomElement()
        'nationality' => $faker->country,
        'dof' => $faker->dateTimeBetween('-50 years', '-20 years')->format('Y-m-d')
    ];
});
