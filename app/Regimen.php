<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    protected $table = "regimenes";

    protected $fillable = ['descripcion','estado'];

    public function paciente(){
        return $this->hasOne(Paciente::class);
    }

    public $timestamps = false;
}
