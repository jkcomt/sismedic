<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $fillable = ['title','start_date','end_date','color','cita_id','estado'];

    public $timestamps = false;

    public function cita(){
        return $this->belongsTo(Cita::class);
    }
}
