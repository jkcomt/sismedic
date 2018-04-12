<?php

use Faker\Generator as Faker;
use App\Event;
$factory->define(Event::class, function (Faker $faker) {
    $date = $faker->dateTimeThisMonth();
    return [
        'title'=>$faker->title,
        'start_date'=>$date,
        'end_date'=>$date,
        'color'=>$faker->hexColor
    ];
});
