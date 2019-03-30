<?php

use App\Entity\Event;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Event::class, function (Faker $faker) {
    $tS = $faker->time('H:i:s');
    $tE = $faker->time('H:i:s');
    $dS = $faker->date('Y-m-d '.$tS, 'now');
    return [
        'name'       => Str::random(10),
        'dateStart'  => $dS,
        'dateEnd'    => $faker->dateTimeBetween($dS, '2019-04-30'),
        'timeStart'  => $tS,
        'timeLength' => $tE
    ];
});
