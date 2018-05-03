<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hemograma extends Model
{
    protected $table = "hemogramas";

    protected $fillable = [
        'hemoglobina',
        'hematocrito',
        'leucocitos',
        'abastonados',
        'segmentados',
        'monocitos',
        'linfocitos',
        'eosinofilos',
        'basofilos',
        'conclusion_hemograma',
        'fecha_registro',
        'cita_id',
        'estado'
    ];

    public $timestamps = false;
}