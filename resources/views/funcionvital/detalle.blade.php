@extends('layout')
@section('header')
    @if(str_replace(url('/'), '', url()->previous()) == '/funcion_vital')
        <a href="{{route('funcion_vital.index')}}" class="btn btn-warning">Volver</a>
    @elseif(str_replace(url('/'), '', url()->previous()) == '/citas')
        <a href="{{route('calendario.index')}}" class="btn btn-warning">Volver</a>
    @endif
     FUNCIONES VITALES
@endsection
{{-----------------------------------------------------------------}}
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
    {{--<button class="btn btn-sm btn-primary" id="create-">Insertafunr otro registro</button>--}}
    {{--<a class="btn btn-sm btn-warning" href="{{route('calendario.index')}}">Volver a Citas</a>--}}
@endsection
{{-----------------------------------------------------------------}}
@section('modal-confirmacion-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-confirmacion-body')
    <h3 class="text-warning text-center">¿Desea eliminar el registro?</h3>
@endsection
@section('modal-confirmacion-footer')
    <button class="btn btn-danger confirmar" id="" estado="">Confirmar</button>
    <a href="" class="btn btn-warning " data-dismiss="modal" id="index" >Volver</a>
@endsection
{{-----------------------------------------------------------------}}

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="msg-error" class="alert alert-danger" style="display:none;">
                <strong>Corriga los campos indicados por favor.</strong>
                <ul>
                    <div id="listaerrores">
                    </div>
                </ul>
            </div>
            <form action="{{route('funcion_vital.store')}}" id="registrarFuncionVital">
                {{csrf_field()}}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="cita" class="control-label">Cita:</label>
                                <input type="text" readonly="true" value="{{$funcionVital->cita->nro_serie_cita}}" class="form-control" name="cita">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="nro_historia" class="control-label">Historia:</label>
                                <input type="text" readonly="true" value="{{$funcionVital->cita->paciente->nro_historia}}" class="form-control" name="nro_historia">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="paciente" class="control-label">Paciente:</label>
                                <input type="text" readonly="true" value="{{$funcionVital->cita->paciente->apellido_paterno.' '.$funcionVital->cita->paciente->apellido_materno.' '.$funcionVital->cita->paciente->nombres}}" class="form-control" name="paciente">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="fecha_funcion_vital" class="control-label">Fecha:</label>
                                <input type="date" value="{{$funcionVital->fecha}}" class="form-control" name="fecha_funcion_vital" id="fecha_funcion_vital" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="alergias" class="control-label">Alergias:</label>
                                <input type="text" value="{{$funcionVital->cita->paciente->alergias}}" class="form-control" name="alergias" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="talla" class="control-label">Talla:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->talla}}" class="form-control" name="talla" min="0" step="any" readonly>
                                    <div class="input-group-addon">mts</div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="peso" class="control-label">Peso:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->peso}}" class="form-control" name="peso" min="0" step="any" readonly>
                                    <div class="input-group-addon">kg</div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="imc" class="control-label">IMC:</label>
                                <input type="number" value="{{$funcionVital->imc}}" class="form-control" name="imc" min="0" step="any" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="temperatura" class="control-label">Temperatura:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->temperatura}}" class="form-control" name="temperatura" min="0" step="any" readonly>
                                    <div class="input-group-addon">°C</div>
                                </div>
                            </div>

                            <div class="col-md-2  col-md-offset-2 form-group">
                                <label for="fc" class="control-label">F.C. :</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->fc}}" class="form-control" name="fc" min="0" step="any" readonly>
                                    <div class="input-group-addon">x min</div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="fr" class="control-label">F.R. :</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->fr}}" class="form-control" name="fr" min="0" step="any" readonly>
                                    <div class="input-group-addon">x min</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">PS/PD:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="ps" min="0" step="any" value="{{$funcionVital->ps}}" readonly>
                                    <div class="input-group-addon">/</div>
                                    <input type="number" class="form-control" name="pd" min="0" step="any" value="{{$funcionVital->pd}}" readonly>
                                    <div class="input-group-addon">mmHG</div>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="sat02" class="control-label">SAT. 02:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->sat_02}}" class="form-control" name="sat02" min="0" step="any" readonly>
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="en_reposo" class="control-label">En Reposo:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="en_reposo" min="0" step="any" readonly>
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="perimetro_abdominal" class="control-label">Perímetro Abdominal:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->perimetro_abdominal}}" class="form-control" name="perimetro_abdominal" min="0" step="any" readonly>
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="maxima_inspiracion" class="control-label">Máxima Inspiración:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->maxima_inspiracion}}" class="form-control" name="maxima_inspiracion" min="0" step="any" readonly>
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="perimetro_cadera" class="control-label">Perímetro Cadera:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->perimetro_cadera}}" class="form-control" name="perimetro_cadera" min="0" step="any" readonly>
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="expiracion_forzada" class="control-label">Expiración Forzada:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->expiracion_forzada}}" class="form-control" name="expiracion_forzada" min="0" step="any" readonly>
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="indice_cintura" class="control-label">Índice Cintura/Cadera:</label>
                                <input type="number" value="{{$funcionVital->indice_cintura}}" class="form-control" name="indice_cintura" min="0" step="any" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="circunferencia_cuello" class="control-label">Circunferencia Cuello:</label>
                                <div class="input-group">
                                    <input type="number" value="{{$funcionVital->circunferencia_cuello}}" class="form-control" name="circunferencia_cuello" min="0" step="any" readonly>
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-body">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12 text-right">--}}
                                {{--<button class="btn btn-success conformidad" tipo="registrar">Registrar</button>--}}
                                {{--<a href="" class="btn btn-warning">Volver</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/funcionvital.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection