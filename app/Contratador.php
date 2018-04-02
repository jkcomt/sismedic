<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratador extends Model
{
    protected $table = "contratadores";

    protected $fillable = ['nombre','estado'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public $timestamps = false;
}
