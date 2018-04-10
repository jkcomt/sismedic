<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CitaExamen extends Model
{
    protected $table = "cita_examenes";

    protected $fillable = [
        'cita_id',
        'item_examen_id',
        'estado'
    ];

    public $timestamps = false;

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }

    public function perfilExamen(){
        return $this->belongsTo(PerfilExamen::class,'item_examen_id','id');
    }
}
