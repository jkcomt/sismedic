<?php

use Faker\Generator as Faker;

$factory->define(App\Perfil::class, function (Faker $faker) {
    return [
        'descripcion'=>'EMA BARRICK',
        'estado'=>true
    ];
});
