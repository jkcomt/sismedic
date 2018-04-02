<?php

use Faker\Generator as Faker;

$factory->define(App\Profesion::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->country,
        'estado'=>true
    ];
});
