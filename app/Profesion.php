<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $table = "profesiones";

    protected $fillable = ['nombre','estado'];

    public function paciente(){
        return $this->hasOne(Paciente::class);
    }

    public $timestamps = false;
}
