<?php

/** @var Factory $factory */

use App\Plugin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Plugin::class, function (Faker $faker) {
    return [
        'name' => implode('', $faker->words($nbWords = 3)),
        'description' => $faker->realText(600),
        'authors' => $faker->userName,
        'website' => $faker->domainName,
    ];
});
