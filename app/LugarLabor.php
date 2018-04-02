<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarLabor extends Model
{
    protected $table = "lugar_labores";

    protected $fillable = ['nombre','estado'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public $timestamps = false;
}
