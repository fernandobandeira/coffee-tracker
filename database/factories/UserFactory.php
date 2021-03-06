<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'fullname' => $faker->name,
    ];
});

$factory->define(App\Coffee::class, function (Faker $faker) {
    return [
        'schedule' => $faker->unixTime,
    ];
});
