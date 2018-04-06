<?php

use Faker\Generator as Faker;

$factory->define(App\Paciente::class, function (Faker $faker) {
    return [
        'nro_historia'=>'H000001',
        'matricula'=>$faker->unique()->randomNumber(6,false),
        'apellido_paterno'=>$faker->lastName,
        'apellido_materno'=>$faker->lastName,
        'nombres'=>$faker->firstNameMale,
        'sexo'=>'masculino',
        'fecha_nacimiento'=>$faker->date(),
        'fecha_ingreso'=>$faker->date(),
        'fecha_ingreso_minera'=>$faker->date(),
        'jefe_inmediato'=>$faker->firstNameMale.' '.$faker->lastName,
        'pais_origen_id'=>13,
        'departamento_origen_id'=>13,
        'provincia_origen_id'=>115,
        'distrito_origen_id'=>1,
        'pais_domicilio_id'=>13,
        'departamento_domicilio_id'=>13,
        'provincia_domicilio_id'=>115,
        'distrito_domicilio_id'=>1,
        'direccion'=>'Cajamarca 440',
        'telf_fijo'=>'044561254',
        'celular'=>'956505497',
        'trabajo'=>'Limpiador',
        'tipo_dni'=>'DNI',
        'num_dni'=>$faker->unique()->randomNumber(8,false),
        'estado_civil'=>'soltero',
        'instruccion_id'=>1,
        'contrata_id'=>1,
        'ocupacion_id'=>1,
        'lugar_labores_id'=>1,

        'email'=>'jkcomt@gmail.com',
        'comentarios'=>'MANTENIMIENTO Y REPARACION DE EQUIPOS',
        'alergias'=>'ALERGIA CAMARONES',
        'en_caso_emergencia'=>'AMALIA FLOR 44561254',
        'nro_hijo_vivos'=>0,
        'nro_hijo_muertos'=>0,
        'profesion_id'=>1,
        'area_id'=>1,
        'seccion'=>'Limpieza',
        'altura_id'=>1,
        'gs_id'=>1,
        'regimen_id'=>1,
        'fecha_registro'=>\Carbon\Carbon::now(),
        'hora_registro'=>\Carbon\Carbon::now(),
        'estado'=>true
    ];
});
