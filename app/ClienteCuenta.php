<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteCuenta extends Model
{
    protected $table = "cliente_cuentas";

    protected $fillable = [
        'descripcion',
        'estado'
    ];
    public function citas(){
      return $this->hasMany(Cita::class);//hasmany  o has one
    }

    public $timestamps = false;
}
