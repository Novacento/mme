<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dog;
use Faker\Generator as Faker;

$factory->define(Dog::class, function (Faker $faker) {
    return [
        'dog_priority_id' => factory(App\Priority::class),
        'dog_name' => $faker->firstNameMale,
        'image_path' => $faker->firstNameMale,
        'dog_gender' => $faker->boolean,
        'dog_age' => $faker->randomDigit,
        'dog_breed' => $faker->firstNameMale,
        'dog_color' => $faker->firstNameMale,
    ];
});
