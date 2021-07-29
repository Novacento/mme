<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Walk;
use Faker\Generator as Faker;

$factory->define(Walk::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'dog_id' => factory(App\Dog::class),
        'walk_date' => $faker->dateTime
    ];
});
