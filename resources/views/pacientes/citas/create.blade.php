@extends('layout')
@section('header','Nueva Cita')
{{-----------------------------------------------------------------}}
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
    {{--<button class="btn btn-sm btn-primary" id="create-paciente">Insertar otro registro</button>--}}
    <a class="btn btn-sm btn-warning" href="{{route('pacientes.citas',[$paciente->id])}}">Volver</a>
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

                <div class="panel panel-default">
                    <div class="panel-heading">Información de Paciente</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Paciente : </label>
                                <strong> {{$paciente->apellido_paterno.' '.$paciente->apellido_materno.', '.$paciente->nombres}}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">DNI : </label>
                                <strong> {{$paciente->num_dni}}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Nro Historia : </label>
                                <strong> {{$paciente->nro_historia}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            <form action="{{route('pacientes.citas.store')}}" id="registrarCita">
                {{csrf_field()}}
                <input type="hidden" name="pacienteId" value="{{$paciente->id}}">
                <div class="panel panel-default">
                    <div class="panel-heading">Información de Cita Ocupacional</div>
                    <div class="panel-body">
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
                            <div class="col-md-4 form-group">
                                <label for="clienteCuenta" class="control-label">Cliente o Cuenta : </label>
                                <div class="form-group" id="clienteCuentaGroup">
                                    <select name="clienteCuenta" id="clienteCuenta" class="form-control">
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        @foreach($clienteCuentas as $key => $clientecuenta)
                                            <option value="{{$key}}">{{$clientecuenta}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="tipoExamen" class="control-label">Tipo de Examen : </label>
                                <div class="form-group" id="tipoExamenGroup">
                                    <select name="tipoExamen" id="tipoExamen" class="form-control">
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        @foreach($tipoExamenes as $key => $tipoexamen)
                                            <option value="{{$key}}">{{$tipoexamen}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="perfil" class="control-label">Perfil : </label>
                                <div class="form-group" id="perfilGroup">
                                    <select name="perfil" id="perfil" class="form-control">
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        @foreach($perfiles as $key => $perfil)
                                            <option value="{{$key}}">{{$perfil}}</option>
                                        @endforeach
                                    </select>
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
                                <button class="btn btn-success conformidad" tipo="registrar">Registrar</button>
                                <a href="{{route('pacientes.citas',[$paciente->id])}}" class="btn btn-warning">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/pacientes/citas.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection