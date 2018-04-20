@extends('layout')
@section('header')
<div class="row">
    <div class="col-md-6">
        EDITAR PACIENTE : {{$paciente->apellido_paterno." ".$paciente->apellido_materno." ".$paciente->nombres}}
    </div>
    <div class="col-md-6 text-right">
        <a href="{{route('pacientes.index')}}" class="btn btn-sm btn-warning">Volver</a>
    </div>
</div>


@endsection
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Actualización Exitosa</h3>
@endsection
@section('modal-footer')
    {{--<button class="btn btn-sm btn-primary" id="create-paciente">Insertar otro registro</button>--}}
    <a class="btn btn-sm btn-warning" href="{{route('pacientes.index')}}">Volver</a>
@endsection

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
            <form action="{{route('pacientes.update')}}" id="actualizarPaciente">
                {{csrf_field()}}
                <input type="hidden" value="{{$paciente->id}}" name="id">
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
                                <label for="nro_historia" class="control-label">Historia:</label>
                                <input type="text" readonly="true" value="{{$paciente->nro_historia}}" class="form-control" name="nro_historia">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="matricula" class="control-label">Matrícula:</label>
                                <input type="text"  value="{{$paciente->matricula}}" class="form-control" name="matricula">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="apellido_paterno" class="control-label">Ape. Paterno:</label>
                                <input type="text" value="{{$paciente->apellido_paterno}}" class="form-control" name="apellido_paterno">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="apellido_materno" class="control-label">Ape. Materno:</label>
                                <input type="text"  value="{{$paciente->apellido_materno}}" class="form-control" name="apellido_materno">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nombres" class="control-label">Nombres:</label>
                                <input type="text"  value="{{$paciente->nombres}}" class="form-control" name="nombres">
                            </div>
                            <div class="col-md-4">
                                <label for="">Sexo:</label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="sexo" id="sexoMasculino" @if($paciente->sexo == 'masculino') checked @endif value="masculino">
                                    <label for="sexoMasculino">Masculino</label>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sexo" id="sexoFemenino" @if($paciente->sexo == 'femenino') checked @endif value="femenino">
                                    <label for="sexoFemenino">Femenino</label>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="fecha_nacimiento" class="control-label">Fecha Nacimiento:</label>
                                <input type="date" value="{{$paciente->fecha_nacimiento}}" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="" class="control-label">Edad Actual:</label>
                                <input type="text" readonly="true" value="{{\Carbon\Carbon::now()->diffInYears($paciente->fecha_nacimiento)}} años" class="form-control" name="edad" id="edad">
                            </div>

                            <div class="col-md-2 form-group">
                                <label for="fecha_ingreso" class="control-label">Fecha Ingreso:</label>
                                <input type="date" value="{{$paciente->fecha_ingreso}}" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="" class="control-label">Edad al ingresar:</label>
                                <input type="text" readonly="true" value="{{\Carbon\Carbon::now()->diffInYears($paciente->fecha_ingreso)}} años" class="form-control" name="edad_ingreso" id="edad_ingreso">
                            </div>

                            <div class="col-md-2 form-group">
                                <label for="fecha_ingreso_minera" class="control-label">Fecha Ingreso a minera:</label>
                                <input type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" class="form-control" name="fecha_ingreso_minera">
                            </div>

                            <div class="col-md-10 form-group">
                                <label for="jefe_inmediato" class="control-label">Jefe Inmediato:</label>
                                <input type="text" value="{{$paciente->jefe_inmediato}}" class="form-control" name="jefe_inmediato">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box box-default">
                    <div class="box-header with-border">Lugar de Nacimiento
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="control-label">País:</label>
                                <div class="form-group" id="paisGroup">
                                    <input type="hidden" value="{{route('departamento.filtro')}}" id="departamentoUrlFiltro">
                                    <select name="paisOrigen" id="paisOrigen" class="form-control" >
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        @foreach($paises as $key => $pais)
                                            <option value="{{$key}}" @if($paciente->paisOrigen->id == $key) selected="selected" @endif>
                                                {{$pais}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3" >
                                <label for="control-label">Departamento:</label>
                                <input type="hidden" value="{{route('provincia.filtro')}}" id="provinciaUrlFiltro">
                                <div id="departamentoGroup">
                                    @include('pacientes.departamento',$paciente)
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="control-label">Provincia:</label>
                                <div id="provinciaGroup">
                                    @include('pacientes.provincia',$paciente)
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="control-label">Distrito:</label>
                                <div class="form-group" id="provinciaGroup">
                                    <select name="distritoOrigen" id="distritoOrigen" class="form-control" >
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        {{--<option value="1">Chepen</option>--}}
                                        @if($distritos)
                                            @foreach($distritos as $key => $distrito)
                                                <option value="{{$key}}">{{$distrito}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="box box-default">
                    <div class="box-header with-border">Domicilio
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">País:</label>
                                <input type="hidden" value="{{route('departamento.filtrodomicilio')}}" id="departamentoDomUrlFiltro">
                                <div class="form-group" id="paisGroupDom">
                                    <select name="paisOrigenDom" id="paisOrigenDom" class="form-control paisOrigenDom" >
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        @foreach($paises as $key => $pais)
                                            <option value="{{$key}}" @if($paciente->paisOrigen->id == $key) selected="selected" @endif>
                                                {{$pais}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="control-label">Departamento:</label>
                                <input type="hidden" value="{{route('provincia.filtrodomicilio')}}" id="provinciaDomUrlFiltro">
                                <div id="departamentoDomGroup">
                                    @include('pacientes.departamento_dom',$paciente)
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="control-label">Provincia:</label>
                                <div id="provinciaDomGroup">
                                    @include('pacientes.provincia_dom',$paciente)
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="control-label">Distrito:</label>
                                <div class="form-group" id="distritoGroup">
                                    <select name="distritoDom" id="distritoDom" class="form-control" >
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        {{--<option>Chepen</option>--}}
                                        @if($distritos)
                                            @foreach($distritos as $key => $distrito)
                                                <option value="{{$key}}">{{$distrito}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="control-label">Dirección:</label>
                                <div class="form-group" id="direccion">
                                    <input type="text" name="direccion" id="direccion" class="form-control" value="{{ucfirst($paciente->direccion)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-default">
                    <div class="box-header with-border">
                        Información Personal
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="telf_fijo" class="control-label">Teléfono Fijo:</label>
                                <input type="text" value="{{$paciente->telf_fijo}}" class="form-control" name="telf_fijo">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="celular" class="control-label">Móvil:</label>
                                <input type="number"  value="{{$paciente->celular}}" class="form-control" name="celular">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="trabajo" class="control-label">Trabajo:</label>
                                <input type="text"  value="{{$paciente->trabajo}}" class="form-control" name="trabajo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">Tipo Doc. Identidad:</label>
                                <div class="form-group" id="departamentoGroup">
                                    <select name="tipo_dni" id="tipo_dni" class="form-control" >
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        <option value="dni">DNI</option>
                                        {{--@foreach($agricultores as $key => $agricultor)--}}
                                        {{--<option value="{{$key}}">{{$agricultor}}</option>--}}
                                        {{--@endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="num_dni" class="control-label">Número Doc. Identidad:</label>
                                <input type="number"  value="{{$paciente->num_dni}}" class="form-control" name="num_dni">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">Estado Civil:</label>
                                <div class="form-group" id="estadoCivilGroup">
                                    <select name="estadoCivil" id="estadoCivil" class="form-control" >
                                        {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                        <option>Soltero</option>
                                        <option>Casado</option>
                                        {{--@foreach($agricultores as $key => $agricultor)--}}
                                        {{--<option value="{{$key}}">{{$agricultor}}</option>--}}
                                        {{--@endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nr_hijo_vivos" class="control-label">Cant. Hijos Vivos:</label>
                                <input type="number"  value="{{$paciente->nro_hijo_vivos}}" class="form-control" name="nr_hijo_vivos">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nr_hijo_muertos" class="control-label">Cant. Hijos Muertos:</label>
                                <input type="number"  value="{{$paciente->nro_hijo_muertos}}" class="form-control" name="nr_hijo_muertos">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Instrucción:</label>
                                        <div class="form-group" id="tipoIntruccionGroup">
                                            <select name="tipoIntruccion" id="tipoIntruccion" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                @foreach($tipoInstrucciones as $key => $tipoInstruccion)
                                                    <option value="{{$key}}" @if($paciente->instruccion->id == $key) selected="selected" @endif>{{ucfirst($tipoInstruccion)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Área:</label>
                                        <div class="form-group" id="areaGroup">
                                            <select name="area" id="area" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                {{--<option>Seleccione área</option>--}}
                                                @foreach($areas as $key => $area)
                                                    <option value="{{$key}}" @if($paciente->area->id == $key) selected="selected" @endif>{{ucfirst($area)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Labora en:</label>
                                        <div class="form-group" id="laboraGroup">
                                            <select name="lugarLabores" id="lugarLabores" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                @foreach($lugarLabores as $key => $lugarLabor)
                                                    <option value="{{$key}}" @if($paciente->lugarLabores->id == $key) selected="selected" @endif>{{ucfirst($lugarLabor)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="email" class="control-label">Email:</label>
                                        <div class="form-group">
                                            <input type="email"  value="{{$paciente->email}}" class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="comentarios" class="control-label">Comentarios:</label>
                                        <div class="form-group">
                                            <input type="text"  value="{{$paciente->comentarios}}" class="form-control" name="comentarios">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="alergias" class="control-label">Alergias:</label>
                                        <div class="form-group">
                                            <input type="alergias"  value="{{$paciente->alergias}}" class="form-control" name="alergias">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Profesión:</label>
                                        <div class="form-group" id="profesionGroup">
                                            <select name="profesion" id="profesion" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                @foreach($profesiones as $key => $profesion)
                                                    <option value="{{$key}}"  @if($paciente->profesion->id == $key) selected="selected" @endif>{{ucfirst($profesion)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Ocupación:</label>
                                        <div class="form-group" id="ocupacionGroup">
                                            <select name="ocupacion" id="ocupacion" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                {{--<option>Seleccione ocupación</option>--}}
                                                @foreach($ocupaciones as $key => $ocupacion)
                                                    <option value="{{$key}}" @if($paciente->ocupacion->id == $key) selected="selected" @endif>{{ucfirst($ocupacion)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="tiempodesempeno" class="control-label">Tiempo Desempeño:</label>
                                        <div class="form-group">
                                            <input type="text"  value="" class="form-control" name="tiempodesempeno">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Altura:</label>
                                        <div class="form-group" id="alturaGroup">
                                            <select name="altura" id="altura" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                {{--<option>Seleccione altura</option>--}}
                                                @foreach($alturas as $key => $altura)
                                                    <option value="{{$key}}" @if($paciente->altura->id == $key) selected="selected" @endif>{{$altura}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Gs/Rh:</label>
                                        <div class="form-group" id="grupoSanguineoGroup">
                                            <select name="grupoSanguineo" id="grupoSanguineo" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                {{--<option>Seleccione grupo sanguineo</option>--}}
                                                @foreach($grupoSanguineos as $key => $grupoSanguineo)
                                                    <option value="{{$key}}" @if($paciente->grupoSanguineo->id == $key) selected="selected" @endif>{{ucfirst($grupoSanguineo)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Regimen:</label>
                                        <div class="form-inline">
                                            <div class="form-group ">
                                                <input type="text"  value="" class="form-control" name="regimenInput">
                                            </div>
                                            <div class="form-group">
                                                <select name="regimen" id="regimen" class="form-control" >
                                                    {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                    {{--<option>Seleccione regimen</option>--}}
                                                    @foreach($regimenes as $key => $regimen)
                                                        <option value="{{$key}}" @if($paciente->regimen->id == $key) selected="selected" @endif>{{ucfirst($regimen)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Contrata:</label>
                                        <div class="form-group" id="contrataGroup">
                                            <select name="contrata" id="contrata" class="form-control" >
                                                {{--<input type="text" class=" form-control" name="personal" value="{{old('personal')}}">--}}
                                                {{--<option>Seleccione contratador</option>--}}
                                                @foreach($contratadores as $key => $contratador)
                                                    <option value="{{$key}}" @if($paciente->contrata->id == $key) selected="selected" @endif>{{ucfirst($contratador)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Sección:</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="seccion" value="{{$paciente->seccion}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="emergencia" class="control-label">En caso de emergencia:</label>
                                <input type="text"  value="{{$paciente->en_caso_emergencia}}" class="form-control" name="emergencia">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    {{--<div class="panel-heading">Información</div>--}}
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success">Actualizar</button>
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
    <script src="{{asset('js/pacientes/pacientes.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection
