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

                @isset($cita->evaluacionCognitiva->id)
                    <input type="hidden" name="registrarUsoRespiradores_id" value="{{$cita->usoRespirador->id}}">
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
                                                                            <input type="number" value="" min="0" name="promedio_horas_dia" class="form-control input-sm ">
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
                                                                                <input type="text" name="cond_especiales_otros_descripcion" class="form-control input-sm">
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
                                                                                   @isset($cita->usoRespirador->frecuencia_uso)
                                                                                   @if($cita->usoRespirador->frecuencia_uso == 0)
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
                                                                            <div class="form-group form-inline">
                                                                                l. Otros: <input type="text" class="form-control input-sm" name="prob_otros_descripcion">
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
                                                                            f.	Tos que lo despierta temprano por la mañana
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
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="box box-solid box-body">
                                                    <strong>6. Hace un momento le leí una serie de 3 palabras y Ud. repitió las
                                                        que recordo. Dígame ahora cuáles recuerda:</strong>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="checkbox small">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="repite_arbol_dos" value="1" @isset($cita->evaluacionCognitiva->repite_arbol_dos) checked @endisset> ¿Árbol?
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="repite_mesa_dos" value="1" @isset($cita->evaluacionCognitiva->repite_mesa_dos) checked @endisset> ¿Mesa?
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="repite_avion_dos" value="1" @isset($cita->evaluacionCognitiva->repite_avion_dos) checked @endisset> ¿Avión?
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <br>
                                                            <p>
                                                                <small>
                                                                    Anote un punto por cada objeto recordado
                                                                </small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="box box-solid box-body">
                                                    <strong>7. Mostrarle un lápiz o un bolígrafo y preguntar ¿qué es esto? Hacer
                                                        lo mismo con un reloj de pulsera</strong>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="checkbox small">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="reconoce_lapiz" value="1" @isset($cita->evaluacionCognitiva->reconoce_lapiz) checked @endisset> Lápiz
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="reconoce_reloj" value="1" @isset($cita->evaluacionCognitiva->reconoce_reloj) checked @endisset> Reloj
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <br>
                                                            <p>
                                                                <small>
                                                                    Anote un punto por cada objeto recordado
                                                                </small>
                                                            </p>

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
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="box box-solid box-body">
                                                        <strong>8. Pedirle que repita la frase: "tres tristes tigres comen trigo
                                                            en un trigal"</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="repite_frase" value="1" @isset($cita->evaluacionCognitiva->repite_frase) checked @endisset> Correcto
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="box box-solid box-body">
                                                        <strong>9. Escriba legiblemente en un papel "Cierre los ojos". Pida que
                                                            lo lea y haga lo que le dice la frase</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="escribe_lee_actua" value="1" @isset($cita->evaluacionCognitiva->escribe_lee_actua) checked @endisset> Correcto
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="box box-solid box-body">
                                                        <strong>10. Pídale que escriba una frase con sujeto y predicado</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="escribe_sujeto_predicado" value="1" @isset($cita->evaluacionCognitiva->escribe_sujeto_predicado) checked @endisset> Correcto
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box box-solid box-body">
                                                    <strong>11. Por favor copie este dibujo:</strong> <br>
                                                    <strong>
                                                        Muestre al entrevistado el dibujo con dos pentágonos cuya interseccion es un cuadrilátero.
                                                        El dibujo es correcto si los pentágonos se cruzan y forman el cuadrilatero</strong>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <br>
                                                            <img src="{{asset('img/cuadrilateros.jpg')}}" alt="" height="80px" width="150px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <br>
                                                            <p>
                                                                <small>Para otorgar un punto deben estar presentes los 10 ángulos y la intersacción.</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small">
                                                                <label>
                                                                    <input type="checkbox" name="copia_dibujo" value="1"  @isset($cita->evaluacionCognitiva->copia_dibujo) checked @endisset> Correcto
                                                                </label>
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
                            @isset($cita->evaluacionCognitiva->id)
                                <button class="btn btn-sm btn-primary  registrarEvaluacionCognitiva" tipo="evaluacionCognitiva_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                @else
                                    <button class="btn btn-sm btn-success registrarEvaluacionCognitiva"  tipo="evaluacionCognitiva_guardar" type="button">GUARDAR</button>
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
