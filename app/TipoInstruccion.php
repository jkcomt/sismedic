<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInstruccion extends Model
{
    protected $table = "tipo_instrucciones";

    protected $fillable = ['nombre','estado'];

    public function paciente(){
        return $this->hasOne(Paciente::class);
    }

    public $timestamps = false;
}
