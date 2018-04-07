<?php

use Faker\Generator as Faker;

$factory->define(App\ClienteCuenta::class, function (Faker $faker) {
    return [
        'descripcion'=>'BARRICK LAGUNAS NORTE',
        'estado'=>true
    ];
});
