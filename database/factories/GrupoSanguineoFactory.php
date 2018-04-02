<?php

use Faker\Generator as Faker;

$factory->define(App\GrupoSanguineo::class, function (Faker $faker) {
    return [
        'descripcion'=>$faker->state,
        'estado'=>true
    ];
});
