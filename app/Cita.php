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

    public function cita(){
        return $this->hasOne(FuncionVital::class);
    }

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

    public function funcionVital(){
        return $this->hasOne(FuncionVital::class);
    }

    public function antecedentePersonal()
    {
      return $this->hasOne(AntecedentePersonal::class);
    }

    public function antecedenteDosPersonal()
    {
      return $this->hasOne(AntecedenteDosPersonal::class);
    }


    public function colesterolHdl(){
        return $this->hasOne(ColesterolHdl::class);
    }

    public function creatinina(){
        return $this->hasOne(Creatinina::class);
    }

    public function glucosa(){
        return $this->hasOne(Glucosa::class);
    }

    public function velocidadSedimentacion(){
        return $this->hasOne(VelocidadSedimentacion::class);
    }

    public function acidoUrico(){
        return $this->hasOne(AcidoUrico::class);
    }

    public function colesterolTotal(){
        return $this->hasOne(ColesterolTotal::class);
    }

    public function colesterolLdl(){
        return $this->hasOne(ColesterolLdl::class);
    }

    public function triglicerido(){
        return $this->hasOne(Triglicerido::class);
    }

    public function gamma(){
        return $this->hasOne(Gamma::class);
    }

    public function sifilis(){
        return $this->hasOne(Sifilis::class);
    }
    public function anexo7d(){
        return $this->hasOne(Anexo7ds::class);
    }

    public function electrocardiograma(){
        return $this->hasOne(Electrocardiograma::class);
    }

    public function hemograma(){
        return $this->hasOne(Hemograma::class);
    }
    public function vision(){
        return $this->hasOne(Vision::class);
    }
    public function orinas(){
        return $this->hasOne(Orina::class);
    }

    public function sudicienciatrabajoaltura()
    {
      return $this->hasOne(SuficienciaTrabajoAltura::class);
    }


    public function conductoroperador()
    {
      return $this->hasOne(EvaluacionConductorOperador::class);
    }

    public function conduccionvehiculo()
    {
      return $this->hasOne(EvaluacionConduccionVehiculos::class);
    }

    public function custionarionordico()
    {
      return $this->hasOne(CuestionarioNordico::class);
    }



}
