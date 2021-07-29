<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RaceRegistration;
use Faker\Generator as Faker;

$factory->define(RaceRegistration::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'race_id' => factory(App\Race::class),
        'adomany' => $faker->randomDigit,
        'registration_date' => $faker->dateTime,
        'dog_name' => $faker->firstNameMale,
        'distance' => $faker->randomDigit,
    ];
});
