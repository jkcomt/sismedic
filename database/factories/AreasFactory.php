<?php

use Faker\Generator as Faker;

$factory->define(App\Area::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->company,
        'estado'=>true
    ];
});
