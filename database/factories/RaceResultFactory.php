<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RaceResult;
use Faker\Generator as Faker;

$factory->define(RaceResult::class, function (Faker $faker) {
    return [
        'race_reg_id' => factory(App\RaceRegistration::class),
        'place' => $faker->randomDigit,
        'race_image_path' => $faker->city,
        'was_checked' => $faker->boolean,
    ];
});
