<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaExamen extends Model
{
    protected $table = "lista_examenes";

    protected $fillable = [
        'descripcion',
        'tipo',
        'valor',
        'dscto',
        'estado'
    ];

    public $timestamps = false;

    public function perfiles(){
    	return $this->belongsToMany(Perfil::class,'perfil_examenes','lista_examen_id','perfil_id');
    }

    public function velocidadSedimentacion(){
        return $this->hasOne(VelocidadSedimentacion::class);
    }
    public function vision(){
        return $this->hasOne(Vision::class);
    }

}
