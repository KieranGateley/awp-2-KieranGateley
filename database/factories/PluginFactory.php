<?php

/** @var Factory $factory */

use App\Plugin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Plugin::class, function (Faker $faker) {
    $words = $faker->words($nbWords = 3);
    $title = "";
    foreach ($words as $word) {
        $title = $title . ucfirst($word);
    }
    return [
        'name' => $title,
        'description' => $faker->realText(600),
        'authors' => $faker->userName,
        'website' => 'http://' . $faker->domainName,
    ];
});
