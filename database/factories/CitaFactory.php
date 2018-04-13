<?php

use Faker\Generator as Faker;

$factory->define(App\Cita::class, function (Faker $faker) {
    return [
        'nro_serie_cita'=>'#000001',
        'paciente_id'=>1,
        'cliente_cuenta_id'=>1,
        'tipo_examen_id'=>1,
        'perfil_id'=>2,
        'fecha_examen'=>\Carbon\Carbon::now()->toDateString(),
        'hora_examen'=>$faker->time,
        'fecha_registro'=>\Carbon\Carbon::now()->toDateString(),
        'hora_registro'=>\Carbon\Carbon::now()->toTimeString(),
        'estado_cita'=>'agendado',
        'estado'=>true
    ];
});
