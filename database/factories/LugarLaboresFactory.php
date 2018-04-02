<?php

use Faker\Generator as Faker;

$factory->define(App\LugarLabor::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->state,
        'estado'=>true
    ];
});
