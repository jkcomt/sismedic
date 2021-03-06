<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
    protected $table = "ocupaciones";

    protected $fillable = ['nombre','estado'];

    public function paciente(){
        return $this->hasOne(Paciente::class);
    }

    public $timestamps = false;
}
