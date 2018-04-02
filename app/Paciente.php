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
        'estado'
    ];

    public $timestamps = false;

    public function paisOrigen(){
        return $this->hasOne(Pais::class);
    }

    public function departamentoOrigen(){
        return $this->hasOne(Departamento::class);
    }

    public function provinciaOrigen(){
        return $this->hasOne(Provincia::class);
    }

    public function distritoOrigen(){
        return $this->hasOne(Distrito::class);
    }

    public function paisDomicilio(){
        return $this->hasOne(Pais::class);
    }

    public function departamentoDomicilio(){
        return $this->hasOne(Departamento::class);
    }

    public function provinciaDomicilio(){
        return $this->hasOne(Provincia::class);
    }

    public function distritoDomicilio(){
        return $this->hasOne(Distrito::class);
    }

    public function instruccion(){
        return $this->hasOne(TipoInstruccion::class);
    }

    public function contrata(){
        return $this->hasOne(Contratador::class);
    }

    public function ocupacion(){
        return $this->hasOne(Ocupacion::class);
    }

    public function lugarLabores(){
        return $this->hasOne(LugarLabor::class);
    }

    public function profesion(){
        return $this->hasOne(Profesion::class);
    }

    public function area(){
        return $this->hasOne(Area::class);
    }

    public function altura(){
        return $this->hasOne(Altura::class);
    }

    public function grupoSanguineo(){
        return $this->hasOne(GrupoSanguineo::class);
    }

    public function regimen(){
        return $this->hasOne(Regimen::class);
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
                $nuevaserie = "h0" . $valor;
                break;
            case 6:
                $nuevaserie = "H" . $valor;
                break;
        }

        return $nuevaserie;
    }


}
