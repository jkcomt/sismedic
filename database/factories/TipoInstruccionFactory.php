<?php

use Faker\Generator as Faker;

$factory->define(App\TipoInstruccion::class, function (Faker $faker) {
    return [
        'nombre'=>"tecnica",
        'estado'=>true
    ];
});
