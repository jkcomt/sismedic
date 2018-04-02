<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "departamentos";

    protected $fillable = ['pais_id','nombre','estado'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public $timestamps = false;
}
