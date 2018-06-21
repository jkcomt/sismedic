<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{

    protected $table="examen_fisicos";
    protected $fillable=[
      'cabeza',
      'pies_faneras',
      'reflejos_pupilares_derecha',
      'reflejos_pupilares_izquierda',
      'enfermedades_oculares',
      'nariz',
      'otoscopia_oido_derecho',
      'otoscopia_oido_izquierdo',
      'boca_amigdalas_faringe_laringe',
      'piezas_malestado',
      'piezas_faltan',
      'ultimo_ctrl_dental',
      'cuello_perimetro',
      'torax',
      'corazon',
      'pulmon_derecho',
      'pulmon_izquierdo',
      'columna_vertebral',
      'abdomen',
      'anillos_inguinales',
      'hernias',
      'organos_genitales',
      'ganglios',
      'miembro_superior_derecho',
      'mienbro_superior_izquierdo',
      'miembro_inferior_derecho',
      'mienbro_inferior_izquierdo',
      'varices',
      'tacto_rectal',
      'lenguaje_atencion_memoria_orientacion_inteligencia',
      'fuerza_muscular',
      'relojes_osteotendinosos',
      'marcha',
      'evaluacion_cardiovascular',
      'fecha_registro',
      'paciente_id',
      'user_id'
    ];

    public function paciente()
    {
      return $this->belongsTo(Paciente::class);
    }

  public $timestamps = false;


}
