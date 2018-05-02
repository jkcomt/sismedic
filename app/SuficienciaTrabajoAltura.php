<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuficienciaTrabajoAltura extends Model
{
    protected $table = "suficiencia_trabajo_alturas";

    protected $fillable = [
        'primera_aptitud',
        'revalidacion',
        'anamnesis_item1',
        'anamnesis_item2',
        'anamnesis_item3',
        'anamnesis_item4',
        'anamnesis_item5',
        'anamnesis_item6',
        'anamnesis_item7',
        'anamnesis_item8',
        'anamnesis_item9',
        'anamnesis_item10',

        'exploracion_fisica_fc',
        'exploracion_fisica_fr',
        'exploracion_fisica_pa',
        'exploracion_fisica_talla',
        'exploracion_fisica_peso',
        'exploracion_fisica_imc',
        'exploracion_fisica_perimetro_cuello',
        'exploracion_fisica_perimetro_cintura',
        'exploracion_fisica_icc',
        'exploracion_fisica_perimetro_toracico_inspiracion',
        'exploracion_fisica_perimetro_toracico_espiracion',

        'exploracion_fisica_item_1',
        'exploracion_fisica_item_2',
        'exploracion_fisica_item_3',
        'exploracion_fisica_item_4',
        'exploracion_fisica_item_5',
        'exploracion_fisica_item_6',
        'exploracion_fisica_item_7',
        'exploracion_fisica_item_8',
        'exploracion_fisica_item_9',
        'exploracion_fisica_item_10',

        'exploracion_fisica_detalle',

        'prueba_auxiliar_item_1',
        'prueba_auxiliar_item_2',
        'prueba_auxiliar_item_3',
        'prueba_auxiliar_item_4',
        'prueba_auxiliar_item_5',
        'prueba_auxiliar_detalle_medicina',
        'prueba_auxiliar_otro',
        'conclusion_apto',
        'desde',
        'hasta',
        'recomendacion',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}
