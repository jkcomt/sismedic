<?php

use Faker\Generator as Faker;

$factory->define(App\Regimen::class, function (Faker $faker) {
    return [
        'descripcion'=>$faker->country,
        'estado'=>true
    ];
});
