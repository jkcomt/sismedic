<?php

use Faker\Generator as Faker;

$factory->define(App\PerfilExamen::class, function (Faker $faker) {
    return [
        'perfil_id'=>1,
        'lista_examen_id'=>1,
        'estado'=>true
    ];
});
