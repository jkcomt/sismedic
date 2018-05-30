<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoExamen extends Model
{
    protected $table = "tipo_examenes";

    protected $fillable = [
      'descripcion',
      'estado'
    ];

    public function citas(){
      return $this->hasMany(Cita::class);//hasmany  o has one
    }


    public $timestamps = false;
}
