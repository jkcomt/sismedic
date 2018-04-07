<?php

use Faker\Generator as Faker;

$factory->define(App\Cita::class, function (Faker $faker) {
    return [
        'cliente_cuenta'=>'BARRICK LAGUNAS NORTE',
        'estado'=>true
    ];
});
