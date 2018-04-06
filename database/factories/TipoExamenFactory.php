<?php

use Faker\Generator as Faker;

$factory->define(App\TipoExamen::class, function (Faker $faker) {
    return [
        'descripcion'=>'OCUPACIONAL PERIODICO',
        'estado'=>true
    ];
});
