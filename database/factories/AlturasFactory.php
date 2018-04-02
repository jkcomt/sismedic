<?php

use Faker\Generator as Faker;

$factory->define(App\Altura::class, function (Faker $faker) {
    return [
        'descripcion'=>$faker->company,
        'estado'=>true
    ];
});
