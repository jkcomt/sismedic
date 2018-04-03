@extends('layout')

{{-----------------------------------------------------------------}}
{{--@section('modal-title')--}}
    {{--<h4 class="modal-title">Aviso</h4>--}}
{{--@endsection--}}
{{--@section('modal-body')--}}
    {{--<h3 class="text-success text-center">Registro Exitoso</h3>--}}
{{--@endsection--}}
{{--@section('modal-footer')--}}
    {{--<button class="btn btn-sm btn-primary" id="create-paciente">Insertar otro registro</button>--}}
    {{--<a class="btn btn-sm btn-warning" href="{{route('pacientes.index')}}">Volver</a>--}}
{{--@endsection--}}
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
            <form action="{{route('pacientes.store')}}" id="registrarPaciente">
                {{csrf_field()}}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="nro_historia" class="control-label">Historia:</label>
                                <input type="text" readonly="true" value="{{$paciente->nro_historia}}" class="form-control" name="nro_historia">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="matricula" class="control-label">Matrícula:</label>
                                <input type="text"  value="{{$paciente->matricula}}" class="form-control" name="matricula" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="apellido_paterno" class="control-label">Ape. Paterno:</label>
                                <input type="text" value="{{$paciente->apellido_paterno}}" class="form-control" name="apellido_paterno" readonly>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="apellido_materno" class="control-label">Ape. Materno:</label>
                                <input type="text"  value="{{$paciente->apellido_materno}}" class="form-control" name="apellido_materno" readonly>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nombres" class="control-label">Nombres:</label>
                                <input type="text"  value="{{$paciente->nombres}}" class="form-control" name="nombres" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="">Sexo:</label><br>
                                <input type="text" value="{{ucfirst($paciente->sexo)}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="fecha_nacimiento" class="control-label">Fecha Nacimiento:</label>
                                <input type="date" value="{{($paciente->fecha_nacimiento)}}" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" readonly>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="" class="control-label">Edad Actual:</label>
                                <input type="text" readonly="true" value="{{\Carbon\Carbon::now()->diffInYears($paciente->fecha_nacimiento)}} años" class="form-control" name="edad" id="edad" >
                            </div>

                            <div class="col-md-2 form-group">
                                <label for="fecha_ingreso" class="control-label">Fecha Ingreso:</label>
                                <input type="date" value="{{($paciente->fecha_ingreso)}}" class="form-control" name="fecha_ingreso" id="fecha_ingreso" readonly>
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="" class="control-label">Edad al ingresar:</label>
                                <input type="text" readonly="true" value="{{(\Carbon\Carbon::parse($paciente->fecha_ingreso)->diffInYears($paciente->fecha_nacimiento))}} años" class="form-control" name="edad_ingreso" id="edad_ingreso">
                            </div>

                            <div class="col-md-2 form-group">
                                <label for="fecha_ingreso_minera" class="control-label">Fecha Ingreso a minera:</label>
                                <input type="date" value="{{($paciente->fecha_ingreso_minera)}}" class="form-control" name="fecha_ingreso_minera" readonly>
                            </div>

                            <div class="col-md-10 form-group">
                                <label for="jefe_inmediato" class="control-label">Jefe Inmediato:</label>
                                <input type="text" value="{{$paciente->jefe_inmediato}}" class="form-control" name="jefe_inmediato" readonly>
                            </div>

                        </div>
                    </div>
                </div>
                <hr>

                <div class="panel panel-default">
                    <div class="panel-heading">Lugar de Nacimiento</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="control-label">País:</label>
                                <div class="form-group" id="paisGroup">
                                    <input type="text" value="{{$paisOrigen->nombre}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-3" >
                                <label for="control-label">Departamento:</label>
                                <div id="departamentoGroup">
                                    <input type="text" value="{{$departamentosOrigen->nombre}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="control-label">Provincia:</label>
                                <div id="provinciaGroup">
                                    <input type="text" value="{{$provinciasOrigen->nombre}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="control-label">Distrito:</label>
                                <div class="form-group" id="provinciaGroup">
                                    <input type="text" class="form-control" name="personal" value="{{$distritosOrigen->nombre}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Domicilio</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">País:</label>
                                <div class="form-group" id="paisGroupDom">
                                    <input type="text" value="{{$paisDomicilio->nombre}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="control-label">Departamento:</label>
                                <div id="departamentoDomGroup">
                                    <input type="text" value="{{$departamentosDomicilio->nombre}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="control-label">Provincia:</label>
                                <div id="provinciaDomGroup">
                                    <input type="text" value="{{$provinciasDomicilio->nombre}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="control-label">Distrito:</label>
                                <div class="form-group" id="distritoGroup">
                                    <input type="text" value="{{$distritosDomicilio->nombre}}" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="control-label">Dirección:</label>
                                <div class="form-group" id="direccion">
                                    <input type="text" name="direccion" id="direccion" class="form-control" value="{{$paciente->direccion}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="panel panel-default">
                    {{--<div class="panel-heading">Información</div>--}}
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="telf_fijo" class="control-label">Teléfono Fijo:</label>
                                <input type="text" value="{{$paciente->telf_fijo}}" class="form-control" name="telf_fijo" readonly>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="celular" class="control-label">Móvil:</label>
                                <input type="number"  value="{{$paciente->celular}}" class="form-control" name="celular" readonly>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="trabajo" class="control-label">Trabajo:</label>
                                <input type="text"  value="{{ucfirst($paciente->trabajo)}}" class="form-control" name="trabajo" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">Tipo Doc. Identidad:</label>
                                <div class="form-group" id="departamentoGroup">
                                    <input type="text" class="form-control" readonly value="{{strtoupper($paciente->tipo_dni)}}">
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="num_dni" class="control-label">Número Doc. Identidad:</label>
                                <input type="number"  value="{{$paciente->num_dni}}" class="form-control" name="num_dni" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">Estado Civil:</label>
                                <div class="form-group" id="estadoCivilGroup">
                                    <input type="text" class="form-control" value="{{ucfirst($paciente->estado_civil)}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nr_hijo_vivos" class="control-label">Cant. Hijos Vivos:</label>
                                <input type="number"  value="{{$paciente->nro_hijo_vivos}}" class="form-control" name="nr_hijo_vivos" readonly>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nr_hijo_muertos" class="control-label">Cant. Hijos Muertos:</label>
                                <input type="number"  value="{{$paciente->nro_hijo_muertos}}" class="form-control" name="nr_hijo_muertos" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    {{--<div class="panel-heading">Información</div>--}}
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label class="control-label">Instrucción:</label>
                                <div class="form-group" id="tipoIntruccionGroup">
                                    <input type="text" class="form-control" value="{{ucfirst($paciente->instruccion->nombre)}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">Profesión:</label>
                                <div class="form-group" id="profesionGroup">
                                    <input type="text" class="form-control" value="{{ucfirst($paciente->profesion->nombre)}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">Contrata:</label>
                                <div class="form-group" id="contrataGroup">
                                    <input type="text" class="form-control" value="{{ucfirst($paciente->contrata->nombre)}}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label class="control-label">Área:</label>
                                <div class="form-group" id="areaGroup">
                                    <input type="text" class="form-control" value="{{ucfirst($paciente->area->nombre)}}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label class="control-label">Ocupación:</label>
                                <div class="form-group" id="ocupacionGroup">
                                    <input type="text" class="form-control" value="{{ucfirst($paciente->ocupacion->nombre)}}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label class="control-label">Sección:</label>
                                <input type="text" class="form-control" name="seccion" value="{{ucfirst($paciente->seccion)}}" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">Labora en:</label>
                                <div class="form-group" id="laboraGroup">
                                    <input type="text" class="form-control" name="seccion" value="{{ucfirst($paciente->lugarLabores->nombre)}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="tiempodesempeno" class="control-label">Tiempo Desempeño:</label>
                                {{--Tiempo desempeño es un calculo?--}}
                                <input type="text"  value="" class="form-control" name="tiempodesempeno" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="email" class="control-label">Email:</label>
                                <input type="email"  value="{{$paciente->email}}" class="form-control" name="email" readonly>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">Altura:</label>
                                <div class="form-group" id="alturaGroup">
                                    <input type="text" class="form-control" readonly value="{{$paciente->altura->descripcion}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="comentarios" class="control-label">Comentarios:</label>
                                <input type="text"  value="{{$paciente->comentarios}}" class="form-control" name="comentarios" readonly>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">Gs/Rh:</label>
                                <div class="form-group" id="grupoSanguineoGroup">
                                    <input type="text" class="form-control" value="{{$paciente->grupoSanguineo->descripcion}}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="alergias" class="control-label">Alergias:</label>
                                <input type="alergias"  value="{{$paciente->alergias}}" class="form-control" name="alergias" readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="control-label">Regimen:</label>
                                <div class="form-inline">
                                    <div class="form-group ">
                                        <input type="text"  value="" class="form-control" name="regimenInput" readonly>
                                    </div>
                                    <div class="form-group">

                                        <input type="text"  value="{{$paciente->regimen->descripcion}}" class="form-control" name="regimenInput" readonly>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="emergencia" class="control-label">En caso de emergencia:</label>
                                <input type="text"  value="{{strtoupper($paciente->en_caso_emergencia)}}" class="form-control" name="emergencia" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                {{--<button class="btn btn-success">Registrar</button>--}}
                                <a href="{{route('pacientes.index')}}" class="btn btn-warning">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>


            </form>

        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/pacientes.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection