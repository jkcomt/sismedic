<?php

use Faker\Generator as Faker;

$factory->define(App\Ocupacion::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->company,
        'estado'=>true
    ];
});
