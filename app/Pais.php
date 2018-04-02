<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "paises";

    protected $fillable = ['nombre','estado'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public $timestamps = false;
}
