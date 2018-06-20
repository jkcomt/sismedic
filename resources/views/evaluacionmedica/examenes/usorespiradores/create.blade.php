<style media="screen">
    #mdrespirador{
        width: 90% !important;
    }

    .horizontal li{
        display: inline;
        padding-left: 5px;
    }

    .radio ul{
        margin-bottom:0px;
    }
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-uso-respiradores">
    <div class="modal-dialog modal-lg" id="mdrespirador" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="registrarUsoRespiradores" method="post">
                <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                <input type="hidden" name="cita_id" value="{{$cita->id}}">

                @isset($cita->usoRespirador->id)
                    <input type="hidden" name="usoRespirador_id" value="{{$cita->usoRespirador->id}}">
                @endisset

                <div class="modal-body" style="padding-bottom: 0px;">
                    {{csrf_field()}}
                    <style>
                        li {
                            list-style-type: none;
                        }
                    </style>
                    <div class="row form-horizontal">


                        <div class="col-md-12 nav-tabs-custom" style="margin-bottom:0px;">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">7.1 Ficha: Evaluación del Lugar de Trabajo </a></li>
                                <li><a data-toggle="tab" href="#menu1">7.2 Ficha: Evaluación Personal del Empleado</a></li>
                                <li><a data-toggle="tab" href="#menu2">7.3 Ficha: Autorización para el uso de Respiradores</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box box-solid box-body">
                                                        <strong>Marcar el tipo de respirador(es) a utilizar:</strong>
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_mascara_polvo" value="1" @isset($cita->usoRespirador->tipo_respirador_mascara_polvo) checked @endisset> Máscara de polvo
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_media_cara" value="1" @isset($cita->usoRespirador->tipo_respirador_media_cara) checked @endisset> 1/2 cara
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_cara_completa" value="1" @isset($cita->usoRespirador->tipo_respirador_cara_completa) checked @endisset> Cara completa
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_puri_aire_sin_energia" value="1" @isset($cita->usoRespirador->tipo_respirador_puri_aire_sin_energia) checked @endisset> Purificador de aire (sin energía)
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_puri_aire_con_energia" value="1"  @isset($cita->usoRespirador->tipo_respirador_puri_aire_con_energia) checked @endisset> Purificador de aire (con energía)
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_respirador_atmosfera" value="1"  @isset($cita->usoRespirador->tipo_respirador_respirador_atmosfera) checked @endisset> Respirador suministrador de atmósfera
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_combinacion_linea_aire_scba" value="1"  @isset($cita->usoRespirador->tipo_respirador_combinacion_linea_aire_scba) checked @endisset> Combinación línea de aire SCBA
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_respirador_flujo_continuo" value="1"  @isset($cita->usoRespirador->tipo_respirador_respirador_flujo_continuo) checked @endisset> Respirador de Flujo Contínuo
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_respirador_suministro_aire" value="1"  @isset($cita->usoRespirador->tipo_respirador_respirador_suministro_aire) checked @endisset> Respirador suministrador de aire
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_scba_circuito_abierto" value="1"  @isset($cita->usoRespirador->tipo_respirador_scba_circuito_abierto) checked @endisset> SCBA de circuito abierto
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_scba_circuito_cerrado" value="1"  @isset($cita->usoRespirador->tipo_respirador_scba_circuito_cerrado) checked @endisset> SCBA de circuito cerrado
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <strong>Tipo de Protección:</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_filtro_hepa" value="1" @isset($cita->usoRespirador->tipo_respirador_filtro_hepa) checked @endisset> Filtro HEPA (párticulas)
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_cartucho_gas_acido" value="1" @isset($cita->usoRespirador->tipo_respirador_cartucho_gas_acido) checked @endisset> Cartuchos (Gas ácido)
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_cartucho_vapor_organico" value="1" @isset($cita->usoRespirador->tipo_respirador_cartucho_vapor_organico) checked @endisset> Cartuchos (Vapor Orgánico)
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_cartucho_amoniaco" value="1" @isset($cita->usoRespirador->tipo_respirador_cartucho_amoniaco) checked @endisset> Cartuchos (amoniaco)
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="tipo_respirador_cartucho_mercurio" value="1"  @isset($cita->usoRespirador->tipo_respirador_cartucho_mercurio) checked @endisset> Cartuchos (mercurio)
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>Esfuerzo Físico Esperado Requerido:</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small horizontal">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="esfuerzo_fisico_esperado" value="1"
                                                                                       @isset($cita->usoRespirador->esfuerzo_fisico_esperado)
                                                                                            @if($cita->usoRespirador->esfuerzo_fisico_esperado == 1)
                                                                                                checked
                                                                                            @endif
                                                                                       @endisset> Lígero
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="esfuerzo_fisico_esperado" value="2"
                                                                                       @isset($cita->usoRespirador->esfuerzo_fisico_esperado)
                                                                                           @if($cita->usoRespirador->esfuerzo_fisico_esperado == 2)
                                                                                                checked
                                                                                           @endif
                                                                                        @endisset> Moderado
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="esfuerzo_fisico_esperado" value="3"
                                                                                       @isset($cita->usoRespirador->esfuerzo_fisico_esperado)
                                                                                           @if($cita->usoRespirador->esfuerzo_fisico_esperado == 3)
                                                                                                checked
                                                                                           @endif
                                                                                        @endisset> Pesado
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="small">
                                                                    <ul style="padding-left: 10px;">
                                                                        <li>Ligero: Sentado mientras escribe, tipea, manejo, manual de cargas ligero (<3 mets)</li>
                                                                        <li>Moderado: Manejo manual de cargas menos de 15 Kg, operando equipos (<5 mets)</li>
                                                                        <li>Pesado: manejo de cargas encima de 25 Kg, subiendo escaleras con carga, palaneando (>5 mets)</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="box box-solid box-body">
                                                        <strong>Frecuencia de uso:</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="frecuencia_uso" value="1"
                                                                                       @isset($cita->usoRespirador->frecuencia_uso)
                                                                                       @if($cita->usoRespirador->frecuencia_uso == 1)
                                                                                       checked
                                                                                        @endif
                                                                                        @endisset> De manera diaria
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="frecuencia_uso" value="2"
                                                                                       @isset($cita->usoRespirador->frecuencia_uso)
                                                                                       @if($cita->usoRespirador->frecuencia_uso == 2)
                                                                                       checked
                                                                                        @endif
                                                                                        @endisset> Ocasional – pero no más de dos veces por semana: hrs
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="frecuencia_uso" value="3"
                                                                                       @isset($cita->usoRespirador->frecuencia_uso)
                                                                                       @if($cita->usoRespirador->frecuencia_uso == 3)
                                                                                       checked
                                                                                        @endif
                                                                                        @endisset> Rara vez – uso de emergencia solamente.
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="form-inline form-group">
                                                                        <label for="promedio_horas_dia" class="control-label">Promedio de horas de uso por Día:</label>
                                                                        <div class="input-group col-md-3">
                                                                            @isset($cita->usoRespirador->promedio_horas_dia)
                                                                                <input type="number" value="{{$cita->usoRespirador->promedio_horas_dia}}" min="0" name="promedio_horas_dia" class="form-control input-sm ">
                                                                                @else
                                                                                <input type="number" value="" min="0" name="promedio_horas_dia" class="form-control input-sm ">
                                                                                @endisset
                                                                            <div class="input-group-addon">Hrs.</div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>Exposición de Materiales Peligros</strong>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_humo_metal" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_humo_metal) checked @endisset> Humo de Metal
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_arsenico" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_arsenico) checked @endisset> Arsénico
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_plomo" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_plomo) checked @endisset> Plomo
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_asbesto" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_asbesto) checked @endisset> Asbesto
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_dpm" value="1"  @isset($cita->usoRespirador->expo_materiales_peligrosos_dpm) checked @endisset> DPM
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_monoxido_carbono" value="1"  @isset($cita->usoRespirador->expo_materiales_peligrosos_monoxido_carbono) checked @endisset> Monóxido de Carbono
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_dioxido_carbono" value="1"  @isset($cita->usoRespirador->expo_materiales_peligrosos_dioxido_carbono) checked @endisset> Vapor Orgánico
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_amoniaco" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_amoniaco) checked @endisset> Amoniaco
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_polvo_respirable" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_polvo_respirable) checked @endisset> Polvo Respirable
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_silice" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_silice) checked @endisset> Sílice
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_mercurio" value="1" @isset($cita->usoRespirador->expo_materiales_peligrosos_mercurio) checked @endisset> Mercurio
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="expo_materiales_peligrosos_otros" value="1"  @isset($cita->usoRespirador->expo_materiales_peligrosos_otros) checked @endisset> Otros
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>Condiciones Especiales de Trabajo</strong>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="cond_especiales_elevaciones_altas_2500" value="1" @isset($cita->usoRespirador->cond_especiales_elevaciones_altas_2500) checked @endisset> Elevaciones Altas (> 2500 msnm)
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="cond_especiales_temperaturas_extremas" value="1" @isset($cita->usoRespirador->cond_especiales_temperaturas_extremas) checked @endisset> Temperaturas Extremas
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="cond_especiales_atmosferas_humedas" value="1" @isset($cita->usoRespirador->cond_especiales_atmosferas_humedas) checked @endisset> Atmosferas Húmedas
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="cond_especiales_espacios_confirmados" value="1" @isset($cita->usoRespirador->cond_especiales_espacios_confirmados) checked @endisset> Espacios confirmados
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="cond_especiales_atmosferas_idlh" value="1"  @isset($cita->usoRespirador->cond_especiales_atmosferas_idlh) checked @endisset> Atmosferas IDLH
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="cond_especiales_hazmat_fuego_rescate_mina" value="1"  @isset($cita->usoRespirador->cond_especiales_hazmat_fuego_rescate_mina) checked @endisset> Hazmat / Fuego / Rescate Mina
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="cond_especiales_epp_adicional_utilizado" value="1"  @isset($cita->usoRespirador->cond_especiales_epp_adicional_utilizado) checked @endisset> EPP adicional utilizado
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <div class="form-inline form-group">
                                                                                <label>
                                                                                <input type="checkbox" name="cond_especiales_otros" value="1"  @isset($cita->usoRespirador->cond_especiales_otros) checked @endisset> Otros:
                                                                                </label>
                                                                                @isset($cita->usoRespirador->cond_especiales_otros_descripcion)
                                                                                    <input type="text" name="cond_especiales_otros_descripcion" value="{{$cita->usoRespirador->cond_especiales_otros_descripcion}}" class="form-control input-sm">
                                                                                    @else
                                                                                        <input type="text" name="cond_especiales_otros_descripcion" value="" class="form-control input-sm">
                                                                                @endisset

                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-10 col-md-offset-1">--}}
                                                                {{--<label for="">Puntuacion:</label> <input type="number">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Seccion 1</h4>
                                                <p>
                                                    Las Preguntas de la 1 a 8 deben ser respondidas por los empleados que usarán cualquier respirador.

                                                    Por favor colocar “Sí” o “No”

                                                </p>
                                            </div>
                                            <div class="col-md-6" style="height: 100%;">
                                                <div class="box box-solid box-body">
                                                    <strong>1. ¿Fuma o fumó en el último mes?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="fuma" value="1"
                                                                                   @isset($cita->usoRespirador->fuma)
                                                                                   @if($cita->usoRespirador->fuma == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="fuma" value="0"
                                                                                   @isset($cita->usoRespirador->fuma)
                                                                                   @if($cita->usoRespirador->fuma == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>2. ¿Ha tenido alguna vez cualquiera de las siguientes condiciones?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_palpitaciones" value="1"
                                                                                   @isset($cita->usoRespirador->cond_palpitaciones)
                                                                                   @if($cita->usoRespirador->cond_palpitaciones == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_palpitaciones" value="0"
                                                                                   @isset($cita->usoRespirador->cond_palpitaciones)
                                                                                   @if($cita->usoRespirador->cond_palpitaciones == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Palpitaciones
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_convulsiones" value="1"
                                                                                   @isset($cita->usoRespirador->cond_convulsiones)
                                                                                   @if($cita->usoRespirador->cond_convulsiones == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_convulsiones" value="0"
                                                                                   @isset($cita->usoRespirador->cond_convulsiones)
                                                                                   @if($cita->usoRespirador->cond_convulsiones == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Convulsiones
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_diabetes" value="1"
                                                                                   @isset($cita->usoRespirador->cond_convulsiones)
                                                                                   @if($cita->usoRespirador->cond_convulsiones == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_diabetes" value="0"
                                                                                   @isset($cita->usoRespirador->cond_convulsiones)
                                                                                   @if($cita->usoRespirador->cond_convulsiones == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Diabetes
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_reacciones_alergicas" value="1"
                                                                                   @isset($cita->usoRespirador->cond_diabetes)
                                                                                   @if($cita->usoRespirador->cond_diabetes == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_reacciones_alergicas" value="0"
                                                                                   @isset($cita->usoRespirador->cond_reacciones_alergicas)
                                                                                   @if($cita->usoRespirador->cond_reacciones_alergicas == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Reacciones alérgicas que dificultan su respiración
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_claustrofia" value="1"
                                                                                   @isset($cita->usoRespirador->frecuencia_uso)
                                                                                   @if($cita->usoRespirador->frecuencia_uso == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_claustrofia" value="0"
                                                                                   @isset($cita->usoRespirador->cond_claustrofia)
                                                                                   @if($cita->usoRespirador->cond_claustrofia == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Claustrofobia
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>3. ¿Ha tenido alguna vez cualquiera de las siguientes condiciones?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="prob_pulmonar_asbestosis" value="1"
                                                                               @isset($cita->usoRespirador->prob_pulmonar_asbestosis)
                                                                               @if($cita->usoRespirador->prob_pulmonar_asbestosis == 1)
                                                                               checked
                                                                                @endif
                                                                                @endisset> Sí
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="prob_pulmonar_asbestosis" value="0"
                                                                               @isset($cita->usoRespirador->prob_pulmonar_asbestosis)
                                                                               @if($cita->usoRespirador->prob_pulmonar_asbestosis == 0)
                                                                               checked
                                                                                @endif
                                                                                @endisset> No
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="">
                                                                        a.	Asbestosis
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="prob_pulmonar_asma" value="1"
                                                                               @isset($cita->usoRespirador->prob_pulmonar_asma)
                                                                               @if($cita->usoRespirador->prob_pulmonar_asma == 1)
                                                                               checked
                                                                                @endif
                                                                                @endisset> Sí
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="prob_pulmonar_asma" value="0"
                                                                               @isset($cita->usoRespirador->prob_pulmonar_asma)
                                                                               @if($cita->usoRespirador->prob_pulmonar_asma == 0)
                                                                               checked
                                                                                @endif
                                                                                @endisset> No
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="">
                                                                        b.	Asma
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="prob_bronquitis_cronica" value="1"
                                                                               @isset($cita->usoRespirador->prob_bronquitis_cronica)
                                                                               @if($cita->usoRespirador->prob_bronquitis_cronica == 1)
                                                                               checked
                                                                                @endif
                                                                                @endisset> Sí
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio" name="prob_bronquitis_cronica" value="0"
                                                                               @isset($cita->usoRespirador->prob_bronquitis_cronica)
                                                                               @if($cita->usoRespirador->prob_bronquitis_cronica == 0)
                                                                               checked
                                                                                @endif
                                                                                @endisset> No
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="">
                                                                        c.	Bronquitis Crónica
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_enfisema" value="1"
                                                                                   @isset($cita->usoRespirador->prob_enfisema)
                                                                                   @if($cita->usoRespirador->prob_enfisema == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_enfisema" value="0"
                                                                                   @isset($cita->usoRespirador->prob_enfisema)
                                                                                   @if($cita->usoRespirador->prob_enfisema == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            d.	Enfisema
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_neumonia" value="1"
                                                                                   @isset($cita->usoRespirador->prob_neumonia)
                                                                                   @if($cita->usoRespirador->prob_neumonia == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_neumonia" value="0"
                                                                                   @isset($cita->usoRespirador->prob_neumonia)
                                                                                   @if($cita->usoRespirador->prob_neumonia == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            e.	Neumonía
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_tuberculosis" value="1"
                                                                                   @isset($cita->usoRespirador->prob_tuberculosis)
                                                                                   @if($cita->usoRespirador->prob_tuberculosis == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_tuberculosis" value="0"
                                                                                   @isset($cita->usoRespirador->prob_tuberculosis)
                                                                                   @if($cita->usoRespirador->prob_tuberculosis == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            f.	Tuberculosis
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_silicosis" value="1"
                                                                                   @isset($cita->usoRespirador->prob_tuberculosis)
                                                                                   @if($cita->usoRespirador->prob_silicosis == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_silicosis" value="0"
                                                                                   @isset($cita->usoRespirador->prob_tuberculosis)
                                                                                   @if($cita->usoRespirador->prob_silicosis == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            g. Silicosis
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_neumotorax" value="1"
                                                                                   @isset($cita->usoRespirador->prob_neumotorax)
                                                                                   @if($cita->usoRespirador->prob_neumotorax == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_neumotorax" value="0"
                                                                                   @isset($cita->usoRespirador->prob_neumotorax)
                                                                                   @if($cita->usoRespirador->prob_neumotorax == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            h. Neumotórax (pulmón colpasado)
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_cancer_pulmon" value="1"
                                                                                   @isset($cita->usoRespirador->prob_cancer_pulmon)
                                                                                   @if($cita->usoRespirador->prob_cancer_pulmon == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_cancer_pulmon" value="0"
                                                                                   @isset($cita->usoRespirador->prob_cancer_pulmon)
                                                                                   @if($cita->usoRespirador->prob_cancer_pulmon == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            i. Cáncer al pulmón.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_costillas_fracturadas" value="1"
                                                                                   @isset($cita->usoRespirador->prob_costillas_fracturadas)
                                                                                   @if($cita->usoRespirador->prob_costillas_fracturadas == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_costillas_fracturadas" value="0"
                                                                                   @isset($cita->usoRespirador->prob_costillas_fracturadas)
                                                                                   @if($cita->usoRespirador->prob_costillas_fracturadas == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            j. Costillas Fracturadas.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_cualquier_lesion_pulmon" value="1"
                                                                                   @isset($cita->usoRespirador->prob_cualquier_lesion_pulmon)
                                                                                   @if($cita->usoRespirador->prob_cualquier_lesion_pulmon == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_cualquier_lesion_pulmon" value="0"
                                                                                   @isset($cita->usoRespirador->prob_cualquier_lesion_pulmon)
                                                                                   @if($cita->usoRespirador->prob_cualquier_lesion_pulmon == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            k. Cualquier lesión al pulmón o cirugías.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_otros" value="1"
                                                                                   @isset($cita->usoRespirador->prob_otros)
                                                                                   @if($cita->usoRespirador->prob_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_otros" value="0"
                                                                                   @isset($cita->usoRespirador->prob_otros)
                                                                                   @if($cita->usoRespirador->prob_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->prob_otros_descripcion)
                                                                                    l. Otros: <input type="text" value="{{$cita->usoRespirador->prob_otros_descripcion}}" class="form-control input-sm" name="prob_otros_descripcion">
                                                                                    @else
                                                                                    l. Otros: <input type="text" class="form-control input-sm" name="prob_otros_descripcion">
                                                                                @endisset

                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>4. ¿Tiene algunos de los siguientes síntomas pulmonares o de enfermedades al pulmón?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_respirar_reposo" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_reposo)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_reposo == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="cond_palpitaciones" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_reposo)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_reposo == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Dificultad para respirar en reposos
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_respirar_camina_nivel_suelo" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_respirar_camina_nivel_suelo" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Dificultad para respirar cuando camina a nivel del suelo
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_respirar_camina_inclinado" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_respirar_camina_inclinado" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Dificultad para respirar cuando camina en un inclinado.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_respirar_realiza_tarea" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_respirar_realiza_tarea" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            d.	Dificultad para respirar cuando realiza alguna tarea
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_expectoracion" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_expectoracion)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_expectoracion == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_expectoracion" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_expectoracion)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_expectoracion == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            e.	Tos que le produce expectoración
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_despierta_temprano" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_despierta_temprano)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_despierta_temprano == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_despierta_temprano" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_despierta_temprano)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_despierta_temprano == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            f.	Tos que lo despierta temprano por la mañana.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_echado" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_echado)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_echado == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_echado" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_echado)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_echado == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            g.	Tos que ocurre cuando se encuentra echado
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_sangre" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_sangre)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_sangre == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_tos_sangre" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_tos_sangre)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_tos_sangre == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            h.	Tos con sangre.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_silbidos_pecho_respira" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_silbidos_pecho_respira" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            i.	Silbidos del pecho cuando respira
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_dolor_pecho_respira_profundo" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_dolor_pecho_respira_profundo" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            j.	Dolor en el pecho cuando respira profundamente
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_otros" value="1"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_otros)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="enf_pulmonar_dif_otros" value="0"
                                                                                   @isset($cita->usoRespirador->enf_pulmonar_dif_otros)
                                                                                   @if($cita->usoRespirador->enf_pulmonar_dif_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->enf_pulmonar_dif_otros_descripcion)
                                                                                    l. Otros: <input type="text" value="{{$cita->usoRespirador->enf_pulmonar_dif_otros_descripcion}}" class="form-control input-sm" name="enf_pulmonar_dif_otros_descripcion">
                                                                                    @else
                                                                                    l. Otros: <input type="text" value="" class="form-control input-sm" name="enf_pulmonar_dif_otros_descripcion">
                                                                                @endisset

                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box box-solid box-body">
                                                    <strong>5. ¿Ha tenido alguna vez cualquiera de los siguientes problemas cardiovasculares?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_infarto" value="1"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_infarto)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_infarto == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_infarto" value="0"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_infarto)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_infarto == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Infarto.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_angina" value="1"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_angina)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_angina == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_angina" value="0"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_angina)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_angina == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Angina.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_insuficiencia_cardiaca" value="1"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_insuficiencia_cardiaca)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_insuficiencia_cardiaca == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_insuficiencia_cardiaca" value="0"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_insuficiencia_cardiaca)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_insuficiencia_cardiaca == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Insuficiencia cardiaca.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_hinchazon_piernas" value="1"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_hinchazon_piernas)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_hinchazon_piernas == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_hinchazon_piernas" value="0"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_hinchazon_piernas)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_hinchazon_piernas == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            d.	Hinchazón en las piernas/pies (no causado por caminar)
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_arritmia_corazon" value="1"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_arritmia_corazon)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_arritmia_corazon == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_arritmia_corazon" value="0"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_arritmia_corazon)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_arritmia_corazon == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            e.	Arritmia al corazón.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_reflujo_gastroesofagico" value="1"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_reflujo_gastroesofagico)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_reflujo_gastroesofagico == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_reflujo_gastroesofagico" value="0"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_reflujo_gastroesofagico)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_reflujo_gastroesofagico == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            f.	Reflujo gastroesofágico (no relacionado con la comida).
                                                                        </label>
                                                                    </li>
                                                                </ul>



                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_otros" value="1"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_otros)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="pro_cardiovascular_otros" value="0"
                                                                                   @isset($cita->usoRespirador->pro_cardiovascular_otros)
                                                                                   @if($cita->usoRespirador->pro_cardiovascular_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->pro_cardiovascular_otros_descripcion)
                                                                                    g. Otros: <input type="text" value="{{$cita->usoRespirador->pro_cardiovascular_otros_descripcion}}" class="form-control input-sm" name="pro_cardiovascular_otros_descripcion">
                                                                                    @else
                                                                                    g. Otros: <input type="text" value="" class="form-control input-sm" name="pro_cardiovascular_otros_descripcion">
                                                                                @endisset

                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>6 ¿Ha tenido alguna vez cualquiera de los siguientes síntomas cardiovasculares?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_dolor_pecho" value="1"
                                                                                   @isset($cita->usoRespirador->sint_dolor_pecho)
                                                                                   @if($cita->usoRespirador->sint_dolor_pecho == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_dolor_pecho" value="0"
                                                                                   @isset($cita->usoRespirador->sint_dolor_pecho)
                                                                                   @if($cita->usoRespirador->sint_dolor_pecho == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Dolor o presión en su pecho.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_dolor_pecho_actividad_fisica" value="1"
                                                                                   @isset($cita->usoRespirador->sint_dolor_pecho_actividad_fisica)
                                                                                   @if($cita->usoRespirador->sint_dolor_pecho_actividad_fisica == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_dolor_pecho_actividad_fisica" value="0"
                                                                                   @isset($cita->usoRespirador->sint_dolor_pecho_actividad_fisica)
                                                                                   @if($cita->usoRespirador->sint_dolor_pecho_actividad_fisica == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Dolor/presión en su pecho durante actividad física.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_dolor_pecho_actividad_trabajo" value="1"
                                                                                   @isset($cita->usoRespirador->sint_dolor_pecho_actividad_trabajo)
                                                                                   @if($cita->usoRespirador->sint_dolor_pecho_actividad_trabajo == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_dolor_pecho_actividad_trabajo" value="0"
                                                                                   @isset($cita->usoRespirador->sint_dolor_pecho_actividad_trabajo)
                                                                                   @if($cita->usoRespirador->sint_dolor_pecho_actividad_trabajo == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Dolor/presión en su pecho durante su actividad de trabajo.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_palpitaciones" value="1"
                                                                                   @isset($cita->usoRespirador->sint_palpitaciones)
                                                                                   @if($cita->usoRespirador->sint_palpitaciones == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_palpitaciones" value="0"
                                                                                   @isset($cita->usoRespirador->sint_palpitaciones)
                                                                                   @if($cita->usoRespirador->sint_palpitaciones == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            d.	Palpitaciones
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_acidez_estomacal_indigestion" value="1"
                                                                                   @isset($cita->usoRespirador->sint_acidez_estomacal_indigestion)
                                                                                   @if($cita->usoRespirador->sint_acidez_estomacal_indigestion == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_acidez_estomacal_indigestion" value="0"
                                                                                   @isset($cita->usoRespirador->sint_acidez_estomacal_indigestion)
                                                                                   @if($cita->usoRespirador->sint_acidez_estomacal_indigestion == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            e.	Acidez estomacal o indigestión (no relacionado con la comida)
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_otros" value="1"
                                                                                   @isset($cita->usoRespirador->sint_otros)
                                                                                   @if($cita->usoRespirador->sint_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sint_otros" value="0"
                                                                                   @isset($cita->usoRespirador->sint_otros)
                                                                                   @if($cita->usoRespirador->sint_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->sint_otros_descripcion)
                                                                                    f. Otros: <input type="text" value="{{$cita->usoRespirador->sint_otros_descripcion}}" class="form-control input-sm" name="sint_otros_descripcion">
                                                                                @else
                                                                                    f. Otros: <input type="text" value="" class="form-control input-sm" name="sint_otros_descripcion">
                                                                                @endisset

                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>7 ¿Toma actualmente medicinas para cualquiera de las siguientes condiciones?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_problema_respiratorio" value="1"
                                                                                   @isset($cita->usoRespirador->usa_medicina_problema_respiratorio)
                                                                                   @if($cita->usoRespirador->usa_medicina_problema_respiratorio == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_problema_respiratorio" value="0"
                                                                                   @isset($cita->usoRespirador->usa_medicina_problema_respiratorio)
                                                                                   @if($cita->usoRespirador->usa_medicina_problema_respiratorio == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            g.	Problema respiratorio.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_problema_corazon" value="1"
                                                                                   @isset($cita->usoRespirador->usa_medicina_problema_corazon)
                                                                                   @if($cita->usoRespirador->usa_medicina_problema_corazon == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_problema_corazon" value="0"
                                                                                   @isset($cita->usoRespirador->usa_medicina_problema_corazon)
                                                                                   @if($cita->usoRespirador->usa_medicina_problema_corazon == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            h.	Problemas al corazón.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_presion_sanguinea" value="1"
                                                                                   @isset($cita->usoRespirador->usa_medicina_presion_sanguinea)
                                                                                   @if($cita->usoRespirador->usa_medicina_presion_sanguinea == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_presion_sanguinea" value="0"
                                                                                   @isset($cita->usoRespirador->usa_medicina_presion_sanguinea)
                                                                                   @if($cita->usoRespirador->usa_medicina_presion_sanguinea == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            i.	Presión Sanguínea.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_convulsion" value="1"
                                                                                   @isset($cita->usoRespirador->usa_medicina_convulsion)
                                                                                   @if($cita->usoRespirador->usa_medicina_convulsion == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_medicina_convulsion" value="0"
                                                                                   @isset($cita->usoRespirador->usa_medicina_convulsion)
                                                                                   @if($cita->usoRespirador->usa_medicina_convulsion == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            j.	Convulsiones
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>8 ¿Si ha utilizado un respirador, ha tenido usted alguno de los siguientes problemas?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_irritacion_ojos" value="1"
                                                                                   @isset($cita->usoRespirador->usa_respirador_irritacion_ojos)
                                                                                   @if($cita->usoRespirador->usa_respirador_irritacion_ojos == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_irritacion_ojos" value="0"
                                                                                   @isset($cita->usoRespirador->usa_respirador_irritacion_ojos)
                                                                                   @if($cita->usoRespirador->usa_respirador_irritacion_ojos == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Irritación a los ojos.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_alergias" value="1"
                                                                                   @isset($cita->usoRespirador->usa_respirador_alergias)
                                                                                   @if($cita->usoRespirador->usa_respirador_alergias == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_alergias" value="0"
                                                                                   @isset($cita->usoRespirador->usa_respirador_alergias)
                                                                                   @if($cita->usoRespirador->usa_respirador_alergias == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Alergias a la piel o erupciones.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_ansiedad" value="1"
                                                                                   @isset($cita->usoRespirador->usa_respirador_ansiedad)
                                                                                   @if($cita->usoRespirador->usa_respirador_ansiedad == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_ansiedad" value="0"
                                                                                   @isset($cita->usoRespirador->usa_respirador_ansiedad)
                                                                                   @if($cita->usoRespirador->usa_respirador_ansiedad == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Ansiedad.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_fatiga" value="1"
                                                                                   @isset($cita->usoRespirador->usa_respirador_fatiga)
                                                                                   @if($cita->usoRespirador->usa_respirador_fatiga == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_fatiga" value="0"
                                                                                   @isset($cita->usoRespirador->usa_respirador_fatiga)
                                                                                   @if($cita->usoRespirador->usa_respirador_fatiga == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            d.	Fatiga o debilidad.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_otros" value="1"
                                                                                   @isset($cita->usoRespirador->usa_respirador_otros)
                                                                                   @if($cita->usoRespirador->usa_respirador_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="usa_respirador_otros" value="0"
                                                                                   @isset($cita->usoRespirador->usa_respirador_otros)
                                                                                   @if($cita->usoRespirador->usa_respirador_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->usa_respirador_otros_descripcion)
                                                                                    e. Otros: <input type="text" value="{{$cita->usoRespirador->usa_respirador_otros_descripcion}}" class="form-control input-sm" name="usa_respirador_otros_descripcion">
                                                                                @else
                                                                                    e. Otros: <input type="text" value="" class="form-control input-sm" name="usa_respirador_otros_descripcion">
                                                                                @endisset

                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Sección 2:
                                                    (Discrecional)
                                                </h4>
                                                <p>
                                                    Las preguntas de la 9 a la 14 deben ser contestadas por empleados que han sido seleccionados para usar un respirador de casa completa o un aparato de respiración autónomo. (SCBA)
                                                    Para los empleados que han sido seleccionados para utilizar otros tipos de respiradores contestar a estas preguntas de manera voluntaria.
                                                    Por favor, marque “SI” o “NO”.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box box-solid box-body">
                                                    <strong>9 ¿Ha perdido la visión en cualquier ojo(temporal o permanente)?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_cualquier_ojo_temporal_permanente" value="1"
                                                                                   @isset($cita->usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente)
                                                                                   @if($cita->usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_cualquier_ojo_temporal_permanente" value="0"
                                                                                   @isset($cita->usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente)
                                                                                   @if($cita->usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>10 ¿Ha perdido la visión en cualquier ojo(temporal o permanente)?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_cualquier_usa_lentes_contacto" value="1"
                                                                                   @isset($cita->usoRespirador->perdida_vision_cualquier_usa_lentes_contacto)
                                                                                   @if($cita->usoRespirador->perdida_vision_cualquier_usa_lentes_contacto == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_cualquier_usa_lentes_contacto" value="0"
                                                                                   @isset($cita->usoRespirador->perdida_vision_cualquier_usa_lentes_contacto)
                                                                                   @if($cita->usoRespirador->perdida_vision_cualquier_usa_lentes_contacto == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Usa lentes de contacto.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_usa_lentes" value="1"
                                                                                   @isset($cita->usoRespirador->perdida_vision_usa_lentes)
                                                                                   @if($cita->usoRespirador->perdida_vision_usa_lentes == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_usa_lentes" value="0"
                                                                                   @isset($cita->usoRespirador->perdida_vision_usa_lentes)
                                                                                   @if($cita->usoRespirador->perdida_vision_usa_lentes == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Usa lentes.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_daltonismo" value="1"
                                                                                   @isset($cita->usoRespirador->perdida_vision_daltonismo)
                                                                                   @if($cita->usoRespirador->perdida_vision_daltonismo == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_daltonismo" value="0"
                                                                                   @isset($cita->usoRespirador->perdida_vision_daltonismo)
                                                                                   @if($cita->usoRespirador->perdida_vision_daltonismo == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Daltonismo
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_otros" value="1"
                                                                                   @isset($cita->usoRespirador->perdida_vision_otros)
                                                                                   @if($cita->usoRespirador->perdida_vision_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="perdida_vision_otros" value="0"
                                                                                   @isset($cita->usoRespirador->perdida_vision_otros)
                                                                                   @if($cita->usoRespirador->perdida_vision_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->perdida_vision_otros_descripcion)
                                                                                    d. Otros: <input type="text" value="{{$cita->usoRespirador->perdida_vision_otros_descripcion}}" class="form-control input-sm" name="perdida_vision_otros_descripcion">
                                                                                 @else
                                                                                    d. Otros: <input type="text" class="form-control input-sm" name="perdida_vision_otros_descripcion">
                                                                                 @endisset
                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>11 ¿Ha tenido alguna lesión a sus oídos, incluyendo un tímpano roto?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="lesion_oido" value="1"
                                                                                   @isset($cita->usoRespirador->lesion_oido)
                                                                                   @if($cita->usoRespirador->lesion_oido == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="lesion_oido" value="0"
                                                                                   @isset($cita->usoRespirador->lesion_oido)
                                                                                   @if($cita->usoRespirador->lesion_oido == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>12 ¿Tiene actualmente algunos de los siguientes problemas de audición)?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_audicion_dificultad_escucha" value="1"
                                                                                   @isset($cita->usoRespirador->prob_audicion_dificultad_escucha)
                                                                                   @if($cita->usoRespirador->prob_audicion_dificultad_escucha == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_audicion_dificultad_escucha" value="0"
                                                                                   @isset($cita->usoRespirador->prob_audicion_dificultad_escucha)
                                                                                   @if($cita->usoRespirador->prob_audicion_dificultad_escucha == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Dificultad para escuchar.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_audicion_usa_audifono" value="1"
                                                                                   @isset($cita->usoRespirador->prob_audicion_usa_audifono)
                                                                                   @if($cita->usoRespirador->prob_audicion_usa_audifono == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_audicion_usa_audifono" value="0"
                                                                                   @isset($cita->usoRespirador->prob_audicion_usa_audifono)
                                                                                   @if($cita->usoRespirador->prob_audicion_usa_audifono == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Usa un audífono.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_audicion_otros" value="1"
                                                                                   @isset($cita->usoRespirador->prob_audicion_otros)
                                                                                   @if($cita->usoRespirador->prob_audicion_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_audicion_otros" value="0"
                                                                                   @isset($cita->usoRespirador->prob_audicion_otros)
                                                                                   @if($cita->usoRespirador->prob_audicion_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->prob_audicion_otros_descripcion)
                                                                                    c. Otros: <input type="text" value="{{$cita->usoRespirador->prob_audicion_otros_descripcion}}" class="form-control input-sm" name="prob_audicion_otros_descripcion">
                                                                                    @else
                                                                                        c. Otros: <input type="text" class="form-control input-sm" name="prob_audicion_otros_descripcion">
                                                                                    @endisset
                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box box-solid box-body">
                                                    <strong>13 ¿Ha tenido alguna lesión a la espalda?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small radio horizontal">

                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="lesion_espalda"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->lesion_espalda)
                                                                                   @if($cita->usoRespirador->lesion_espalda == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="lesion_espalda"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->lesion_espalda)
                                                                                   @if($cita->usoRespirador->lesion_espalda == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>14 ¿Tiene actualmente algunos de los siguientes problemas musculoesqueléticos?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small radio horizontal">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_debilidad_extremidades"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_debilidad_extremidades)
                                                                                   @if($cita->usoRespirador->prob_muscular_debilidad_extremidades == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_debilidad_extremidades"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_debilidad_extremidades)
                                                                                   @if($cita->usoRespirador->prob_muscular_debilidad_extremidades == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Debilidad en los brazos, manos, piernas o pies.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_debilidad_dolor_espalda"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_debilidad_dolor_espalda)
                                                                                   @if($cita->usoRespirador->prob_muscular_debilidad_dolor_espalda == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_debilidad_dolor_espalda"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_debilidad_dolor_espalda)
                                                                                   @if($cita->usoRespirador->prob_muscular_debilidad_dolor_espalda == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Dolor de espalda.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dificultad_mover_brazos_piernas"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dificultad_mover_brazos_piernas)
                                                                                   @if($cita->usoRespirador->prob_muscular_dificultad_mover_brazos_piernas == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dificultad_mover_brazos_piernas"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dificultad_mover_brazos_piernas)
                                                                                   @if($cita->usoRespirador->prob_muscular_dificultad_mover_brazos_piernas == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Dificultad para mover sus brazos y piernas.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dolor_inclina_adelanta_atras_cintura"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura)
                                                                                   @if($cita->usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dolor_inclina_adelanta_atras_cintura"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura)
                                                                                   @if($cita->usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Dolor o rigidez cuando se inclina hacia adelante o atrás en la cintura
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dificultad_mover_cabeza_arriba_abajo"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo)
                                                                                   @if($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dificultad_mover_cabeza_arriba_abajo"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo)
                                                                                   @if($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Dificultad para mover su cabeza de arriba o abajo.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dificultad_mover_cabeza_lado"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_lado)
                                                                                   @if($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_lado == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_dificultad_mover_cabeza_lado"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_lado)
                                                                                   @if($cita->usoRespirador->prob_muscular_dificultad_mover_cabeza_lado == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Dificultad para mover su cabeza de lado a lado.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_doblar_rodillas"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_doblar_rodillas)
                                                                                   @if($cita->usoRespirador->prob_muscular_doblar_rodillas == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_doblar_rodillas"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_doblar_rodillas)
                                                                                   @if($cita->usoRespirador->prob_muscular_doblar_rodillas == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            d.	Dificultad al doblar las rodillas
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_ponerse_cuclillas"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_ponerse_cuclillas)
                                                                                   @if($cita->usoRespirador->prob_muscular_ponerse_cuclillas == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_ponerse_cuclillas"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_ponerse_cuclillas)
                                                                                   @if($cita->usoRespirador->prob_muscular_ponerse_cuclillas == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            e.	Dificultad en ponerse en cuclillas.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_subir_escaleras"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_subir_escaleras)
                                                                                   @if($cita->usoRespirador->prob_muscular_subir_escaleras == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_subir_escaleras"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_subir_escaleras)
                                                                                   @if($cita->usoRespirador->prob_muscular_subir_escaleras == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            f.	Subir las escaleras o una escalera.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_otros"
                                                                                   value="1"
                                                                                   @isset($cita->usoRespirador->prob_muscular_otros)
                                                                                   @if($cita->usoRespirador->prob_muscular_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="prob_muscular_otros"
                                                                                   value="0"
                                                                                   @isset($cita->usoRespirador->prob_muscular_otros)
                                                                                   @if($cita->usoRespirador->prob_muscular_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->prob_muscular_otros_descripcion)
                                                                                    g. Otros: <input type="text" value="{{$cita->usoRespirador->prob_muscular_otros_descripcion}}" class="form-control input-sm" name="prob_muscular_otros_descripcion">
                                                                                    @else
                                                                                    g. Otros: <input type="text" class="form-control input-sm" name="prob_muscular_otros_descripcion">
                                                                                    @endisset

                                                                            </div>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Sección 3:
                                                    (Confidencial)

                                                </h4>
                                                <p>
                                                    El profesional de la salud que va a revisar este cuestionario determinara si esta parte debe ser completada por el empleado.

                                                    Por favor, marque “SI” o “NO”

                                                </p>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="box box-solid box-body">
                                                    <strong>1 Cuando trabaja en alturas por encima de 2500 msnm en una atmosfera que tenga cantidades de oxigeno menor a la cantidad normal, tiene las siguientes sensaciones de:</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_mareos" value="1"
                                                                                   @isset($cita->usoRespirador->sensacion_mareos)
                                                                                   @if($cita->usoRespirador->sensacion_mareos == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_mareos" value="0"
                                                                                   @isset($cita->usoRespirador->sensacion_mareos)
                                                                                   @if($cita->usoRespirador->sensacion_mareos == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Mareos.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_dificultad_respirar" value="1"
                                                                                   @isset($cita->usoRespirador->sensacion_dificultad_respirar)
                                                                                   @if($cita->usoRespirador->sensacion_dificultad_respirar == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_dificultad_respirar" value="0"
                                                                                   @isset($cita->usoRespirador->sensacion_dificultad_respirar)
                                                                                   @if($cita->usoRespirador->sensacion_dificultad_respirar == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Dificultad para respirar.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_palpitaciones" value="1"
                                                                                   @isset($cita->usoRespirador->sensacion_palpitaciones)
                                                                                   @if($cita->usoRespirador->sensacion_palpitaciones == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_palpitaciones" value="0"
                                                                                   @isset($cita->usoRespirador->sensacion_palpitaciones)
                                                                                   @if($cita->usoRespirador->sensacion_palpitaciones == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Palpitaciones.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_otros" value="1"
                                                                                   @isset($cita->usoRespirador->sensacion_otros)
                                                                                   @if($cita->usoRespirador->sensacion_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="sensacion_otros" value="0"
                                                                                   @isset($cita->usoRespirador->sensacion_otros)
                                                                                   @if($cita->usoRespirador->sensacion_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->sensacion_otros_descripcion)
                                                                                    d. Otros: <input type="text" value="{{$cita->usoRespirador->sensacion_otros_descripcion}}" class="form-control input-sm" name="sensacion_otros_descripcion">
                                                                                    @else
                                                                                    d. Otros: <input type="text" class="form-control input-sm" name="sensacion_otros_descripcion">
                                                                                    @endisset
                                                                            </div>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>2. Ha trabajado con alguno de los siguientes materiales listados a continuación:</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_asbestos" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_asbestos)
                                                                                   @if($cita->usoRespirador->trabaja_material_asbestos == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_asbestos" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_asbestos)
                                                                                   @if($cita->usoRespirador->trabaja_material_asbestos == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            a.	Asbestos.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_silice" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_silice)
                                                                                   @if($cita->usoRespirador->trabaja_material_silice == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_silice" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_silice)
                                                                                   @if($cita->usoRespirador->trabaja_material_silice == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            b.	Sílice.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_tungsteno_cobalto" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_tungsteno_cobalto)
                                                                                   @if($cita->usoRespirador->trabaja_material_tungsteno_cobalto == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_tungsteno_cobalto" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_tungsteno_cobalto)
                                                                                   @if($cita->usoRespirador->trabaja_material_tungsteno_cobalto == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            c.	Tungsteno / Cobalto (Ej.: Esmerilado o soldadura)
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_berilio" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_berilio)
                                                                                   @if($cita->usoRespirador->trabaja_material_berilio == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_berilio" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_berilio)
                                                                                   @if($cita->usoRespirador->trabaja_material_berilio == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            d.	Berilio
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_aluminio" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_aluminio)
                                                                                   @if($cita->usoRespirador->trabaja_material_aluminio == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_aluminio" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_aluminio)
                                                                                   @if($cita->usoRespirador->trabaja_material_aluminio == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            e.	Aluminio.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_carbon" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_carbon)
                                                                                   @if($cita->usoRespirador->trabaja_material_carbon == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_carbon" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_carbon)
                                                                                   @if($cita->usoRespirador->trabaja_material_carbon == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            f.	Carbón.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_hierro" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_hierro)
                                                                                   @if($cita->usoRespirador->trabaja_material_hierro == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_hierro" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_hierro)
                                                                                   @if($cita->usoRespirador->trabaja_material_hierro == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            g.	Hierro.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_laton" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_laton)
                                                                                   @if($cita->usoRespirador->trabaja_material_laton == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_laton" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_laton)
                                                                                   @if($cita->usoRespirador->trabaja_material_laton == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            h.	Latón.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_ambientes_polvo" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_material_ambientes_polvo)
                                                                                   @if($cita->usoRespirador->trabaja_material_ambientes_polvo == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_material_ambientes_polvo" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_material_ambientes_polvo)
                                                                                   @if($cita->usoRespirador->trabaja_material_ambientes_polvo == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            i.	Ambientes con exceso de polvo.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_otros" value="1"
                                                                                   @isset($cita->usoRespirador->trabaja_otros)
                                                                                   @if($cita->usoRespirador->trabaja_otros == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="trabaja_otros" value="0"
                                                                                   @isset($cita->usoRespirador->trabaja_otros)
                                                                                   @if($cita->usoRespirador->trabaja_otros == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="">
                                                                            <div class="form-group form-inline">
                                                                                @isset($cita->usoRespirador->trabaja_otros_descripcion)
                                                                                d. Otros: <input type="text" value="{{$cita->usoRespirador->trabaja_otros_descripcion}}" class="form-control input-sm" name="trabaja_otros_descripcion">
                                                                                @else
                                                                                d. Otros: <input type="text" class="form-control input-sm" name="trabaja_otros_descripcion">
                                                                                @endisset
                                                                            </div>

                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>3. Liste cualquier trabajo previo/pasatiempo en los que haya sido expuestos a peligros 	respiratorios:</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <div class="form-group form-inline">
                                                                            <input type="text" class="form-control input-sm" name="trabajo_previo_pasatiempo_riesgo"
                                                                                   @isset($cita->usoRespirador->trabajo_previo_pasatiempo_riesgo)
                                                                                   value = "{{$cita->usoRespirador->trabajo_previo_pasatiempo_riesgo}}"
                                                                                    @endisset>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>4 ¿Has hecho alguna vez Servicio Militar?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="servicio_militar" value="1"
                                                                                   @isset($cita->usoRespirador->servicio_militar)
                                                                                   @if($cita->usoRespirador->servicio_militar == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="servicio_militar" value="0"
                                                                                   @isset($cita->usoRespirador->servicio_militar)
                                                                                   @if($cita->usoRespirador->servicio_militar == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <strong>5 ¿Has estado alguna vez en un equipo de MATPEL o Respuesta de emergencias?</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small horizontal radio">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="equipo_matpel_respuesta_emergencia" value="1"
                                                                                   @isset($cita->usoRespirador->equipo_matpel_respuesta_emergencia)
                                                                                   @if($cita->usoRespirador->equipo_matpel_respuesta_emergencia == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Sí
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="equipo_matpel_respuesta_emergencia" value="0"
                                                                                   @isset($cita->usoRespirador->equipo_matpel_respuesta_emergencia)
                                                                                   @if($cita->usoRespirador->equipo_matpel_respuesta_emergencia == 0)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> No
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="menu2" class="tab-pane fade">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="box box-solid box-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="table table-bordered">
                                                                    <tr></tr>
                                                                    <tr>
                                                                        <td>
                                                                            <label for="paciente_id">ID Empleado</label>

                                                                            <input type="text" class="form-control" id="paciente_id" name="paciend_id" value="{{$cita->paciente->num_dni}}">
                                                                        </td>
                                                                        <td><label for="perfil">Perfil</label>

                                                                            <input type="text" class="form-control" id="perfil" value="{{$cita->perfil->descripcion}}">
                                                                          </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <label for="trabajador">Trabajador</label>
                                                                            <input type="text" class="form-control" id="trabajador" name="trabajador" value="{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}">
                                                                        </td>
                                                                        <td>
                                                                            <label for="area">Área</label>
                                                                            <input type="text" class="form-control" id="area" name="area" value="{{$cita->paciente->area->nombre}}">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label for="trabajador">Cargo</label>
                                                                            <input type="text" class="form-control" id="cargo" name="cargo" value="{{$cita->paciente->trabajo}}"></td>
                                                                        <td>
                                                                            <label for="supervisor">Supervisor</label>
                                                                            <input type="text" class="form-control" id="supervisor" name="supervisor" value="{{$cita->paciente->jefe_inmediato}}">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p>El trabajador mencionado ha sido examinado en el ajuste del respirador de conformidad con el Estándar de Barrick de Protección Respiratoria. Esta evaluación limitada es especificada para el uso del respirador solamente.
                                                                    Basado en mis hallazgos he determinado que la persona:
                                                                </p>

                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="autorizacion_clase" value="1"
                                                                                   @isset($cita->usoRespirador->autorizacion_clase)
                                                                                   @if($cita->usoRespirador->autorizacion_clase == 1)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Clase I
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="autorizacion_clase" value="2"
                                                                                   @isset($cita->usoRespirador->autorizacion_clase)
                                                                                   @if($cita->usoRespirador->autorizacion_clase == 2)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Clase II

                                                                        </label>
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="uso_emergencia_solamente" value="1"
                                                                                        @isset($cita->usoRespirador->uso_emergencia_solamente)
                                                                                        @if($cita->usoRespirador->uso_emergencia_solamente == 1)
                                                                                        checked
                                                                                        @endif
                                                                                        @endisset
                                                                                > A ser utilizados en respuestas a emergencia o para escape solamente
                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox" name="solo_papr" value="1"
                                                                                        @isset($cita->usoRespirador->solo_papr)
                                                                                        @if($cita->usoRespirador->solo_papr == 1)
                                                                                        checked
                                                                                        @endif
                                                                                        @endisset
                                                                                > Solo PAPR
                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox" name="no_sbca" value="1"
                                                                                        @isset($cita->usoRespirador->no_sbca)
                                                                                        @if($cita->usoRespirador->no_sbca == 1)
                                                                                        checked
                                                                                        @endif
                                                                                        @endisset
                                                                                > No SBCA
                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox" name="autorizacion_otros" value="1"
                                                                                        @isset($cita->usoRespirador->autorizacion_otros)
                                                                                        @if($cita->usoRespirador->autorizacion_otros == 1)
                                                                                        checked
                                                                                        @endif
                                                                                        @endisset
                                                                                > Otros
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="autorizacion_clase" value="3"
                                                                                   @isset($cita->usoRespirador->autorizacion_clase)
                                                                                   @if($cita->usoRespirador->autorizacion_clase == 3)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Clase III
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="autorizacion_clase" value="4"
                                                                                   @isset($cita->usoRespirador->autorizacion_clase)
                                                                                   @if($cita->usoRespirador->autorizacion_clase == 4)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Clase IV
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="radio" name="autorizacion_clase" value="5"
                                                                                   @isset($cita->usoRespirador->autorizacion_clase)
                                                                                   @if($cita->usoRespirador->autorizacion_clase == 5)
                                                                                   checked
                                                                                    @endif
                                                                                    @endisset> Clase V
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="">Firma:</label>
                                                                <input type="text" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="">Nombre médico</label>
                                                                @isset($cita->usoRespirador->nombre_medico)
                                                                    <input type="text" value="{{$cita->usoRespirador->nombre_medico}}" name="nombre_medico" class="form-control">
                                                                    @else
                                                                        <input type="text" value="" name="nombre_medico" class="form-control">
                                                                 @endisset
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">CMP</label>
                                                                @isset($cita->usoRespirador->cmp)
                                                                    <input type="text" value="{{$cita->usoRespirador->cmp}}" name="cmp" class="form-control">
                                                                @else
                                                                        <input type="text" value="" name="cmp" class="form-control">
                                                                @endisset
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Fecha del Examen</label>
                                                                @isset($cita->usoRespirador->fecha_registro)
                                                                    <input type="date" value="{{$cita->usoRespirador->fecha_registro}}" name="fecha_registro" class="form-control">
                                                                    @else
                                                                        <input type="date" value="{{\Carbon\Carbon::now()}}" name="fecha_registro" class="form-control">
                                                                 @endisset
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Expira En</label>
                                                                @isset($cita->usoRespirador->fecha_expiracion)
                                                                    <input type="date" value="{{$cita->usoRespirador->fecha_expiracion}}" name="fecha_expiracion" class="form-control">
                                                                    @else
                                                                    <input type="date" value="{{\Carbon\Carbon::now()}}" name="fecha_expiracion" class="form-control">
                                                                @endisset
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            @isset($cita->usoRespirador->id)
                                <button class="btn btn-sm btn-primary  registrarUsoRespiradores" tipo="usoRespiradores_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                @else
                                <button class="btn btn-sm btn-success registrarUsoRespiradores"  tipo="usoRespiradores_guardar" type="button">GUARDAR</button>
                            @endisset
                                    <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>
                                    <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
