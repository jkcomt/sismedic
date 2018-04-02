<?php

use Faker\Generator as Faker;

$factory->define(App\Distrito::class, function (Faker $faker) {
    return [
        'provincia_id'=>115,
        'nombre'=>'chepen',
        'estado'=>true
    ];
});
