<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = "cargos";

    protected $fillable = [
        'descripcion',
        'estado'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public $timestamps = false;
}
