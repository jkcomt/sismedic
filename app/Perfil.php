<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "perfiles";

    protected $fillable = [
        'descripcion',
        'estado'
    ];

    public function perfilExamen(){
        return $this->hasMany(PerfilExamen::class);
    }

    public function listaExamen(){
    	return $this->belongsToMany(ListaExamen::class,'perfil_examenes','perfil_id','lista_examen_id');
    }
    public function paciente(){
      return $this->hasOne(Paciente::class);
    }

    public $timestamps = false;
}
