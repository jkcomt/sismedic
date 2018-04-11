<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $filas = "Citas";

    protected $fillable = [
        'nro_serie_cita',
        'paciente_id',
        'cliente_cuenta_id',
        'tipo_examen_id',
        'perfil_id',
        'fecha_examen',
        'hora_examen',
        'fecha_registro',
        'hora_registro',
        'estado_cita',
        'estado'
    ];

    public $timestamps = false;

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public function clienteCuenta(){
        return $this->belongsTo(ClienteCuenta::class);
    }

    public function tipoExamen(){
        return $this->belongsTo(TipoExamen::class);
    }

    public function perfil(){
        return $this->belongsTo(Perfil::class);
    }

    public function citaExamen(){
        return $this->hasMany(CitaExamen::class);
    }

    public function perfilExamen(){
        return $this->belongsToMany(PerfilExamen::class,'cita_examenes','cita_id','item_examen_id');
    }

    public function generarNroCita()
    {
        $ultimaserie = str_after($this->nro_serie_cita,'#');
        $valor = $ultimaserie+1;
        $longitud = strlen($valor);

        $nuevaserie = "";
        switch ($longitud) {
            case 1:
                $nuevaserie = "#00000" . $valor;
                break;
            case 2:
                $nuevaserie = "#0000" . $valor;
                break;
            case 3:
                $nuevaserie = "#000" . $valor;
                break;
            case 4:
                $nuevaserie = "#00" . $valor;
                break;
            case 5:
                $nuevaserie = "#0" . $valor;
                break;
            case 6:
                $nuevaserie = "#" . $valor;
                break;
        }

        return $nuevaserie;
    }

    public function event(){
        return $this->hasOne(Event::class);
    }
}
