<?php

use Faker\Generator as Faker;

$factory->define(App\CitaExamen::class, function (Faker $faker) {
    return [
       'cita_id'=>1,
        'item_examen_id'=>1,
        'estado'=>true
    ];
});
