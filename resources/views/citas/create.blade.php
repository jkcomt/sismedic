@extends('layout')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

@section('header')
    <div class="row">
        <div class="col-md-6">
            NUEVA CITA
        </div>
        <div class="col-md-6 text-right">
            @if(str_replace(url('/'), '', url()->previous()) == '/citas/catalogo')
                {{-- esto rediriga al catalogo de citas --}}
                <a class="btn btn-sm btn-warning" href="{{route('citas.catalogo')}}"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> VOLVER CATÁLOGO DE CITAS</a>
            @elseif(str_replace(url('/'), '', url()->previous()) == '/citas')
                {{-- esto redirige a calendario --}}
                <a class="btn btn-sm btn-warning" href="{{route('calendario.index')}}"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> VOLVER A CALENDARIO</a>
            @else
                <a class="btn btn-sm btn-warning" href="{{route('citas.catalogo')}}"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> IR A CATÁLOGO DE CITAS</a>
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
    {{--<button class="btn btn-sm btn-primary" id="create-paciente">Insertar otro registro</button>--}}
@isset($cita)@php $var=$cita->generarNroCita() @endphp @else @php $var="#000001" @endphp @endisset
    {{-- <a href="{{route('citas.examenescliente',substr($var,1))}}" target="_blank" class="btn btn-xs btn-info" name="imprimirCita"><span class="glyphicon glyphicon-print"></span></a> --}}
    <div class="row">
      <div class="col-md-6">
        {{-- <a class="btn btn-sm btn-warning btn-block" href="{{route('citas.catalogo')}}">Volver a Citas</a> --}}
        @if(str_replace(url('/'), '', url()->previous()) == '/citas/catalogo')
          {{-- esto rediriga al catalogo de citas --}}
            <a class="btn btn-sm btn-warning" href="{{route('citas.catalogo')}}">Volver a catálogo de citas</a>
        @elseif(str_replace(url('/'), '', url()->previous()) == '/citas')
          {{-- esto redirige a calendario --}}
            <a class="btn btn-sm btn-warning" href="{{route('calendario.index')}}">Volver a calendario</a>
        @else
            <a class="btn btn-sm btn-warning" href="{{route('citas.catalogo')}}">Ir a catálgo de citas</a>
        @endif
      </div>
      <div class="col-md-6">
        <a class="btn btn-sm btn-primary btn-block" href="{{route('citas.nuevacita')}}">Registrar Nueva Cita</a>
      </div>
    </div>
@endsection
{{-----------------------------------------------------------------}}
@section('modal-confirmacion-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-confirmacion-body')
    <h3 class="text-warning text-center">¿Desea eliminar el registro?</h3>
@endsection
@section('modal-confirmacion-footer')
    <button class="btn btn-danger confirmar" id="">Confirmar</button>
    <a href="" class="btn btn-warning " data-dismiss="modal" id="index">Volver</a>
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
            <form action="{{route('citas.registrar')}}" id="registrarCita">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="paciente" class="control-label">Paciente : </label>
                                    <div class="form-group" id="pacienteGroup">
                                        <select name="paciente" id="paciente" class="form-control selectPersonal">
                                            <option value=""></option>
                                            {{-- @isset($pacientes) --}}
                                              @foreach($pacientes as $key => $paciente)
                                                  <option value="{{$key}}">{{$paciente}}</option>
                                              @endforeach
                                            {{-- @endisset --}}

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label for="">DNI : </label>
                                <div class="form-group">
                                    <strong id="DNI"> </strong>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Nro Historia : </label>
                                <div class="form-group">
                                    <strong id="nroHistoria"> </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{csrf_field()}}
                <input type="hidden" name="pacienteId" value="">
                <div class="box box-default">
                    <div class="box-header with-border">Información de Cita Ocupacional
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="nro_serie_cita" class="control-label">Nro. Cita : </label>
                                <input type="text" readonly="true"
                                       value="@isset($cita){{$cita->generarNroCita()}}@else {{"#000001"}}@endisset"
                                       class="form-control" name="nro_serie_cita">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="fecha_examen" class="control-label">Fecha Examen : </label>
                                <input type="date" value="{{\Carbon\Carbon::now()->toDateString()}}"
                                       class="form-control" name="fecha_examen">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="hora_examen" class="control-label">Hora : </label>
                                <input type="time" value="{{\Carbon\Carbon::now()->toTimeString()}}"
                                       class="form-control" name="hora_examen">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label for="clienteCuenta" class="control-label">Cliente o Cuenta : </label>
                                <div class="form-group" id="clienteCuentaGroup">
                                    <select name="clienteCuenta" id="clienteCuenta" class="form-control">
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        {{-- @isset($clienteCuentas) --}}
                                          @foreach($clienteCuentas as $key => $clientecuenta)
                                              <option value="{{$key}}">{{$clientecuenta}}</option>
                                          @endforeach
                                        {{-- @endisset --}}

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 form-group">

                                <label for="clienteCuenta" class="control-label">Examen : </label>
                                <div class="form-group" id="clienteCuentaGroup">
                                    <select name="examenes_id" id="tipo_examen_uno" class="form-control">
                                            <option value="1">OCUPACIONAL</option>
                                            <option value="2">INDIVIDUAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="tipoExamen" class="control-label">Tipo Examen : </label>
                                <div class="" id="tipoExamenGroup">
                                    @include('citas.examen')
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="perfil" class="control-label" id="perfil_id">Perfil : </label>
                                <div class="form-group" id="perfilGroup">
                                    {{-- <select name="perfil" id="perfil" class="form-control">
                                          @foreach($perfiles as $key => $perfil)
                                              <option value="{{$key}}">{{$perfil}}</option>
                                          @endforeach
                                    </select> --}}
                                      @include('citas.perfil')
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-8 bg-primary">EXAMEN</div>
                                <div class="col-md-1 text-center bg-primary">TIPO</div>
                                <div class="col-md-1 text-center bg-primary">VALOR</div>
                                <div class="col-md-1 text-center bg-primary">DSCTO</div>
                                <div class="col-md-1 text-center bg-primary">MARCAR</div>
                            </div>
                            <div id="tabla">
                                @include('pacientes.citas.perfilexamen')
                            </div>
                        </div>
                    </div>
                </div>

      </form>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a class="btn  btn-warning" href="{{route('citas.catalogo')}}"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver</a>
                                <button class="btn btn-success conformidad"  tipo="registrar"><span class="glyphicon glyphicon-floppy-disk" aria-hideen="true"></span>  Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{asset('js/citas.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection
