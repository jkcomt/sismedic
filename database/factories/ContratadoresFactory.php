<?php

use Faker\Generator as Faker;

$factory->define(App\Contratador::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->company,
        'estado'=>true
    ];
});
