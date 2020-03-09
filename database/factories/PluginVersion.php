<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PluginVersion;
use Faker\Generator as Faker;

$factory->define(PluginVersion::class, function (Faker $faker) {
    return [
        'version' => 'v' . $faker->randomDigit . '.' . $faker->randomNumber($nbDigits = 2),
        'description' => implode(' ', $faker->sentences(3)),
    ];
});
