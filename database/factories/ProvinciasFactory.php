<?php

use Faker\Generator as Faker;

$factory->define(App\Provincia::class, function (Faker $faker) {
    return [
        'departamento_id'=>1,
        'nombre'=>$faker->state,
        'estado'=>true
    ];
});
