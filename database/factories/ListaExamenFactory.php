<?php

use Faker\Generator as Faker;

$factory->define(App\ListaExamen::class, function (Faker $faker) {
    return [
        'descripcion'=>'TRANSAMINASA OXALACETICA (TGO)',
        'tipo'=>'CM',
        'valor'=>2.31,
        'dscto'=>2.31,
        'estado'=>true
    ];
});
