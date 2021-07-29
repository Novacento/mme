<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Race;
use Faker\Generator as Faker;

$factory->define(Race::class, function (Faker $faker) {
    return [
        'place' => $faker->city,
        'distance' => $faker->randomDigit,
        'race_date' => $faker->dateTime,
        'fee' => $faker->randomDigit,
    ];
});
