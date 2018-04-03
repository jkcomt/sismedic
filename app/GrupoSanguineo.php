<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoSanguineo extends Model
{
    protected $table = "grupo_sanguineos";

    protected $fillable = ['descripcion','estado'];

    public function paciente(){
        return $this->hasOne(Paciente::class);
    }

    public $timestamps = false;
}
