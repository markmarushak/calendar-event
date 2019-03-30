<?php

use App\Entity\NewEvent;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(NewEvent::class, function (Faker $faker) {
    $month = $faker->month();
    $year = $faker->year();
    $day = $faker->dayOfMonth();
    return [
        'name'       => Str::random(10),
        'start_year' => $year,
        'start_month' => $month,
        'start_day' => $day,
        'start_hour' => $faker->numberBetween(00,24),
        'start_minute' => $faker->numberBetween(0,60),
        'end_year' => $year,
        'end_month' => $month,
        'end_day' => ((int)$day + $faker->numberBetween(0,7)),
        'end_hour' => $faker->numberBetween(00,24),
        'end_minute' => $faker->numberBetween(0,60)
    ];
});
