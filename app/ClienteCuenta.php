<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteCuenta extends Model
{
    protected $table = "cliente_cuentas";

    protected $fillable = [
        'cliente_cuenta',
        'estado'
    ];

    public $timestamps = false;
}
