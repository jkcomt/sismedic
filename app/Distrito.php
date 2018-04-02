<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = "distritos";

    protected $fillable = ['provincia_id','nombre','estado'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public $timestamps = false;
}
