<?php

use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
    return [
        'pais_id'=>13,
        'nombre'=>$faker->state,
        'estado'=>true
    ];
});
