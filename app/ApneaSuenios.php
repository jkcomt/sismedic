<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApneaSuenios extends Model
{

 protected $table="apnea_suenios";
 protected $fillable=[
 'licencia',
 'trabajo_noche',
 'num_dias_trabajados',
 'num_dias_descanso',
 'anios_trabaja_horario',
 'apnea_suenio',
 'ctrl_apnea',
 'hta',
 'medicacion',
 'psg',
 'ctrl_psg',
 'en_mina',
 'fuera_mina',
 'criterio_uno_valor',
 'criterio_dos_valor1',
 'criterio_dos_valor2',
 'criterio_dos_valor3',
 'criterio_dos_valor4',
 'criterio_dos_valor5',
 'criterio_dos_valor6',
 'criterio_dos_valor7',
 'criterio_dos_valor8',
 'criterio_dos_valor9',
 'clasificacion_valor1',
 'clasificacion_valor2',
 'clasificacion_valor3',
 'clasificacion_valor4',
 'clasificacion_valor5',
 'antecedente_faminiliar_apnea',
 'antecedente_faminiliar_apnea_descripcion',
 'entrevista_valor1',
 'entrevista_valor2',
 'entrevista_valor3',
 'entrevista_valor4',
 'peso',
 'talla',
 'imc',
 'circunferencia',
 'genero_paciente',
 'psistolica',
 'pdiastolica',
 'hta_nueva',
 'grado',
 'criterio_a',
 'criterio_b',
 'criterio_c',
 'criterio_d',
 'criterio_e',
 'riesgo_bajo',
 'observaciones_recomendaciones',
 'fecha_registro',
 'lista_examen_id',
 'cita_id',
 'estado',
 'user_id'
 ];

 public function cita(){
     return $this->belongsTo(Cita::class);
 }

 public function listaExamen(){
     return $this->belongsTo(ListaExamen::class);
 }

 public $timestamps = false;
}
