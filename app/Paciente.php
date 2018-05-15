<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "pacientes";

    protected $fillable = [
        'nro_historia',
        'matricula',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'sexo',
        'fecha_nacimiento',
        'fecha_ingreso',
        'fecha_ingreso_minera',
        'jefe_inmediato',
        'pais_origen_id',
        'departamento_origen_id',
        'provincia_origen_id',
        'distrito_origen_id',
        'pais_domicilio_id',
        'departamento_domicilio_id',
        'provincia_domicilio_id',
        'distrito_domicilio_id',
        'direccion',
        'telf_fijo',
        'celular',
        'trabajo',
        'tipo_dni',
        'num_dni',
        'estado_civil',
        'instruccion_id',
        'contrata_id',
        'ocupacion_id',
        'lugar_labores_id',
        'email',
        'comentarios',
        'alergias',
        'en_caso_emergencia',
        'nro_hijo_vivos',
        'nro_hijo_muertos',
        'profesion_id',
        'area_id',
        'seccion',
        'altura_id',
        'gs_id',
        'regimen_id',
        'fecha_registro',
        'hora_registro',
        'estado'
    ];

    public $timestamps = false;

    public function paisOrigen(){
        return $this->belongsTo(Pais::class);
    }

    public function departamentoOrigen(){
        return $this->belongsTo(Departamento::class);
    }

    public function provinciaOrigen(){
        return $this->belongsTo(Provincia::class);
    }

    public function distritoOrigen(){
        return $this->belongsTo(Distrito::class);
    }

    public function paisDomicilio(){
        return $this->belongsTo(Pais::class);
    }

    public function departamentoDomicilio(){
        return $this->belongsTo(Departamento::class);
    }

    public function provinciaDomicilio(){
        return $this->belongsTo(Provincia::class);
    }

    public function distritoDomicilio(){
        return $this->belongsTo(Distrito::class);
    }

    public function instruccion(){
        return $this->belongsTo(TipoInstruccion::class);
    }

    public function contrata(){
        return $this->belongsTo(Contratador::class);
    }

    public function ocupacion(){
        return $this->belongsTo(Ocupacion::class);
    }

    public function lugarLabores(){
        return $this->belongsTo(LugarLabor::class);
    }

    public function profesion(){
        return $this->belongsTo(Profesion::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function altura(){
        return $this->belongsTo(Altura::class);
    }

    public function grupoSanguineo(){
        return $this->belongsTo(GrupoSanguineo::class,'gs_id');
    }

    public function regimen(){
        return $this->belongsTo(Regimen::class);
    }

    public function generarSerieGuia()
    {
        $ultimaserie = str_after($this->nro_historia,'H');
        $valor = $ultimaserie+1;
        $longitud = strlen($valor);

        $nuevaserie = "";
        switch ($longitud) {
            case 1:
                $nuevaserie = "H00000" . $valor;
                break;
            case 2:
                $nuevaserie = "H0000" . $valor;
                break;
            case 3:
                $nuevaserie = "H000" . $valor;
                break;
            case 4:
                $nuevaserie = "H00" . $valor;
                break;
            case 5:
                $nuevaserie = "H0" . $valor;
                break;
            case 6:
                $nuevaserie = "H" . $valor;
                break;
        }

        return $nuevaserie;
    }

    public function citas(){
      return $this->hasMany(Cita::class);
    }

    public function antecedentePersonal()
    {
      return $this->hasOne(AntecedentePersonal::class);
    }

    public function antecendeDosPersonal()
    {
      return $this->hasOne(AntecendeDosPersonal::class);
    }
    public function antecedentesOculares()
    {
        return $this->hasOne(AntecedentesOculares::class);
    }
    public function antecedentesOrl()
    {
        return $this->hasOne(AntecedentesORL::class);
    }
    public function antecedentesNeumologicos()
    {
        return $this->hasOne(AntecedentesNeumologicos::class);
    }
    public function antecedentesGinecologicos()
    {
        return $this->hasOne(AntecedentesGinecologicos::class);
    }

    public function antecedentesQuirurgicos()
    {
        return $this->hasOne(AntecedentesQuirurgicos::class);
    }

    public function antecedentesFamiliares()
    {
        return $this->hasOne(AntecedentesFamiliares::class);
    }
    public function antecedenteHospitalizaciones()
    {
        return $this->hasOne(Antper_Hozpitalizaciones::class);
    }
    /****AQUI MODIFIQUE***/
    public function accidente_laboral()
    {
        return $this->hasOne(AntperAccidenteLaborales::class);
    }

}
