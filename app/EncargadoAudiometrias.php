<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncargadoAudiometrias extends Model
{
  protected $table = "encargado_audiometrias";

  protected $fillable = ['personal','dni','estado'];

  public $timestamps = false;
}
