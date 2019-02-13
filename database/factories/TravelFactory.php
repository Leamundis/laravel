<?php

use Faker\Generator as Faker;

$factory->define(App\Travel::class, function (Faker $faker) {
    return [
        'label' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'localisation' => $faker->country,
        'start_date' => $faker->dateTimeInInterval($startDate = '-5 days', $interval = '+ 20 days', $timezone = null),
        'end_date' => $faker->dateTimeInInterval($startDate = '+21 days', $interval = '+ 25 days', $timezone = null),
        'cost' => $faker->numberBetween($min = 200, $max = 9000),
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->text,
        'disponibility' => $faker->boolean
    ];
});
