<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Altura extends Model
{
    protected $table = "alturas";

    protected $fillable = ['descripcion','estado'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public $timestamps = false;
}
