@extends('layout')
@section('header')
  <div class="row">
    <div class="col-md-6">
      FUNCIONES VITALES
    </div>
    <div class="col-md-6 text-right">
      @if(str_replace(url('/'), '', url()->previous()) == '/funcion_vital')
          <a href="{{route('funcion_vital.index')}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> VOLVER A CATALOGO</a>
      @elseif(str_replace(url('/'), '', url()->previous()) == '/citas')
          <a href="{{route('calendario.index')}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> VOLVER A CALENDARIO</a>
      @elseif(str_replace(url('/'), '', url()->previous()) == '/citas/catalogo')
            <a href="{{route('citas.catalogo')}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> VOLVER A CATÁLOGO DE CITAS</a>
      @elseif(str_replace(url('/'), '', url()->previous()) == '/evaluacion_medica/create/'.$cita->id)
           <a href="{{route('evaluacion_medica.create',$cita->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> VOLVER A EVALUACIÓN MÉDICA</a>
      @endif
    </div>
  </div>
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
    @if(str_replace(url('/'), '', url()->previous()) == '/funcion_vital')
        <a href="{{route('funcion_vital.index')}}" class="btn btn-sm btn-warning">VOLVER A CATALOGO</a>
    @elseif(str_replace(url('/'), '', url()->previous()) == '/citas')
        <a href="{{route('calendario.index')}}" class="btn btn-sm btn-warning">VOLVER A CALENDARIO</a>
    @elseif(str_replace(url('/'), '', url()->previous()) == '/citas/catalogo')
        <a href="{{route('citas.catalogo')}}" class="btn btn-sm btn-warning">VOLVER A CATÁLOGO DE CITAS</a>
    @elseif(str_replace(url('/'), '', url()->previous()) == '/evaluacion_medica/create/'.$cita->id)
        <a href="{{route('evaluacion_medica.create',$cita->id)}}" class="btn btn-sm btn-warning">VOLVER A EVALUACIÓN MÉDICA</a>
    @endif
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
                {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}
                {{--</ul>--}}
            </div>
            <form action="{{route('funcion_vital.store')}}" id="registrarFuncionVital">
                {{csrf_field()}}
                <div class="box box-default">
                    <div class="box-header with-border">Información de Paciente
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="cita" class="control-label">Cita:</label>
                                <input type="text" readonly="true" value="{{$cita->nro_serie_cita}}" class="form-control" name="cita">
                                <input type="hidden" value="{{$cita->id}}" name="cita_id">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="nro_historia" class="control-label">Historia:</label>
                                <input type="text" readonly="true" value="{{$cita->paciente->nro_historia}}" class="form-control" name="nro_historia">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="paciente" class="control-label">Paciente:</label>
                                <input type="text" readonly="true" value="{{$cita->paciente->apellido_paterno.' '.$cita->paciente->apellido_materno.' '.$cita->paciente->nombres}}" class="form-control" name="paciente">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="fecha_funcion_vital" class="control-label">Fecha:</label>
                                <input type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" class="form-control" name="fecha_funcion_vital" id="fecha_funcion_vital">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="alergias" class="control-label">Alergias:</label>
                                <input type="text" value="{{$cita->paciente->alergias}}" class="form-control" name="alergias">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-default">
                    <div class="box-header with-border">Información de Función Vital
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="talla" class="control-label">Talla:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="talla" min="0" step="any">
                                    <div class="input-group-addon">mts</div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="peso" class="control-label">Peso:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="peso" min="0" step="any">
                                    <div class="input-group-addon">kg</div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="imc" class="control-label">IMC:</label>
                                <input type="number" value="0" class="form-control" name="imc" min="0" step="any">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="temperatura" class="control-label">Temperatura:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="temperatura" min="0" step="any">
                                    <div class="input-group-addon">°C</div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="fc" class="control-label">F.C. :</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="fc" min="0" step="any">
                                    <div class="input-group-addon">x min</div>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="fr" class="control-label">F.R. :</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="fr" min="0" step="any">
                                    <div class="input-group-addon">x min</div>
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">PS/PD:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="ps" min="0" step="any" value="0">
                                    <div class="input-group-addon">/</div>
                                    <input type="number" class="form-control" name="pd" min="0" step="any" value="0">
                                    <div class="input-group-addon">mmHG</div>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="sat02" class="control-label">SAT. 02:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="sat02" min="0" step="any">
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-default">
                    <div class="box-header with-border">Medidas Antropométricas
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="en_reposo" class="control-label">En Reposo:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="en_reposo" min="0" step="any">
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="perimetro_abdominal" class="control-label">Perímetro Abdominal:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="perimetro_abdominal" min="0" step="any">
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="maxima_inspiracion" class="control-label">Máxima Inspiricación:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="maxima_inspiracion" min="0" step="any">
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label for="perimetro_cadera" class="control-label">Perímetro Cadera:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="perimetro_cadera" min="0" step="any">
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="expiracion_forzada" class="control-label">Expiración Forzada:</label>
                                <div class="input-group">
                                    <input type="number" value="0" class="form-control" name="expiracion_forzada" min="0" step="any">
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="indice_cintura" class="control-label">Índice Cintura/Cadera:</label>
                                <input type="number" value="0" class="form-control" name="indice_cintura" min="0" step="any">
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 form-group">
                              <label for="circunferencia_cuello" class="control-label">Circunferencia Cuello:</label>
                              <div class="input-group">
                                  <input type="number" value="0" class="form-control" name="circunferencia_cuello" min="0" step="any">
                                  <div class="input-group-addon">cm</div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>



                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>  Volver</a>
                                <button class="btn btn-success conformidad" tipo="registrar"><span class="glyphicon glyphicon-floppy-disk" aria-hideen="true"></span> Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/funcionvital.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection
