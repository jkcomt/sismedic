<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionCognitiva extends Model
{
    protected  $table = "evaluacion_cognitivas";

    protected $fillable = [
        //bloque uno
        'en_ano',
        'en_estacion',
        'en_dia_semana',
        'en_mes',
        'en_fecha',

        //bloque dos
        'en_lugar_estamos',
        'en_servicio_estamos',
        'en_distrito_estamos',
        'en_provincia_estamos',
        'en_pais_estamos',

        //bloque tres
        'repite_arbol',
        'repite_mesa',
        'repite_avion',

        //bloque cuatro
        'tiene_30_monedas',
        'tiene_27_monedas',
        'tiene_24_monedas',
        'tiene_21_monedas',
        'tiene_18_monedas',

        //bloque cinco
        'toma_papel',
        'dobla_mitad',
        'puso_suelo',

        //bloque seis
        'repite_arbol_dos',
        'repite_mesa_dos',
        'repite_avion_dos',

        //bloque siete
        'reconoce_lapiz',
        'reconoce_reloj',

        //bloque ocho
        'repite_frase',

        //bloque nueve
        'escribe_lee_actua',

        //bloque diez
        'escribe_sujeto_predicado',

        //bloque once
        'copia_dibujo',

        //puntaje
        'puntaje',

        'fecha_registro',
        'lista_examen_id',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;

    public function cita(){
        return $this->belongsTo(Cita::class);
    }

    public function listaExamen(){
        return $this->belongsTo(ListaExamen::class);
    }
}
