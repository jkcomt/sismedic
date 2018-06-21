@extends('layout')
    <style>
        input.mayusculas{text-transform:uppercase;}
    </style>
@section('header')
  <div class="row">
    <div class="col-md-6">
      EVALUACIÓN MÉDICA
    </div>
    <div class="col-md-6 text-right">
      <a href="{{route('historia_ocupacional.reporte',[$paciente->id])}}" target="_blank"  class="btn btn-success">ANTECEDENTES OCUPACIONAL</a>
      <a href="{{route('evaluacion_medica.index')}}" class="btn btn-warning">VOLVER A CATÁLOGO</a>
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
    <button class="btn btn-sm btn-warning volver-evaluacion-examen">Volver</button>
@endsection
{{-----------------------------------------------------------------}}
@section('modal-confirmacion-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-confirmacion-body')
    <h3 class="text-warning text-center">¿Desea registrar el examen?</h3>
@endsection
@section('modal-confirmacion-footer')
    <button class="btn btn-success confirmar" id="">Confirmar</button>
    <a href="#" class="btn btn-warning volver-form-examen" id="index">Volver</a>
@endsection
{{-----------------------------------------------------------------}}
@section('content')
    <div id="examen">

    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h5>
                                <strong>{{'Paciente: '.$paciente->apellido_paterno ." ".$paciente->apellido_materno." ".$paciente->nombres}}</strong>
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <h5>
                                <strong>{{'Cita: '.$cita->nro_serie_cita}}</strong>
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <h5><strong>{{' Perfil: '.$cita->perfil->descripcion}}</strong></h5>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h5>
                                <strong>{{'Cliente Cuenta: '.$cita->clienteCuenta->descripcion}}</strong>
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <h5>
                                <strong>{{'Examen: '}}@if($cita->examenes_id=='1') {{'OCUPACIONAL'}} @else {{'INDIVIDUAL'}} @endif</strong>
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <h5><strong>{{'Tipo Examen: '.$cita->tipoExamen->descripcion}}</strong></h5>
                        </div>
                    </div>
{{-- fecha_examen
hora_examen --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="msg-error" class="alert alert-danger" style="display:none;">
                <strong>Corriga los campos indicados por favor.</strong>
                <ul>
                    <div id="listaerrores">
                    </div>
                </ul>
            </div>
            <for id="registrarEvaluacionMedica">
                {{csrf_field()}}
                <input type="hidden" value="{{$cita->id}}" id="CitaId">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menuFichaMedica">Ficha Médica</a></li>
                            <li><a data-toggle="tab" href="#menuFuncionVital">Funciones Vitales</a></li>
                            <li><a data-toggle="tab" href="#menuExamenFisico">Examen Físico</a></li>
                            <li><a data-toggle="tab" href="#menuListaExamen">Lista de Examenes</a></li>
                            <li><a data-toggle="tab" href="#menuConclusiones">Conclusiones</a></li>
                            {{-- <li><a data-toggle="tab" href="#menuResultadosAnteriores">Resultados Anteriores</a></li> --}}
                        </ul>

                        <div class="tab-content">
                            <div id="menuFichaMedica" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
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

                                                    <div class="col-md-4 form-group">
                                                        <label for="fecha_ingreso_minera" class="control-label">Fecha Ingreso a minera:</label>
                                                        <input type="date" value="{{($paciente->fecha_ingreso_minera)}}" class="form-control" name="fecha_ingreso_minera" readonly>
                                                    </div>

                                                    <div class="col-md-12 form-group">
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

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">Instrucción:</label>
                                                                <div class="form-group" id="tipoIntruccionGroup">
                                                                    <input type="text" class="form-control" value="{{ucfirst($paciente->instruccion->nombre)}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">Área:</label>
                                                                <div class="form-group" id="areaGroup">
                                                                    <input type="text" class="form-control" value="{{ucfirst($paciente->area->nombre)}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">Labora en:</label>
                                                                <div class="form-group" id="laboraGroup">
                                                                    <input type="text" class="form-control" name="seccion" value="{{ucfirst($paciente->lugarLabores->nombre)}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label for="email" class="control-label">Email:</label>
                                                                <div class="form-group">
                                                                    <input type="email"  value="{{$paciente->email}}" class="form-control" name="email" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label for="comentarios" class="control-label">Comentarios:</label>
                                                                <div class="form-group">
                                                                    <input type="text"  value="{{$paciente->comentarios}}" class="form-control" name="comentarios" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="alergias" class="control-label">Alergias:</label>
                                                                <div class="form-group">
                                                                    <input type="alergias"  value="{{$paciente->alergias}}" class="form-control" name="alergias" readonly>
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
                                                                    <input type="text" class="form-control" value="{{ucfirst($paciente->profesion->nombre)}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">Ocupación:</label>
                                                                <div class="form-group" id="ocupacionGroup">
                                                                    <input type="text" class="form-control" value="{{ucfirst($paciente->ocupacion->nombre)}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label for="tiempodesempeno" class="control-label">Tiempo Desempeño:</label>
                                                                {{--Tiempo desempeño es un calculo?--}}
                                                                <div class="form-group">
                                                                    <input type="text"  value="" class="form-control" name="tiempodesempeno" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">Altura:</label>
                                                                <div class="form-group" id="alturaGroup">
                                                                    <input type="text" class="form-control" readonly value="{{$paciente->altura->descripcion}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">Gs/Rh:</label>
                                                                <div class="form-group" id="grupoSanguineoGroup">
                                                                    <input type="text" class="form-control" value="{{$paciente->grupoSanguineo->descripcion}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="">
                                                                <div class="col-md-12 ">
                                                                    <label class="control-label">Regimen:</label>
                                                                    <div class="row">
                                                                        <div class="col-md-6 form-group ">
                                                                            <input type="text"  value="" class="form-control" name="regimenInput" readonly>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">

                                                                            <input type="text"  value="{{$paciente->regimen->descripcion}}" class="form-control" name="regimenInput" readonly>
                                                                        </div>
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
                                                                    <input type="text" class="form-control" value="{{ucfirst($paciente->contrata->nombre)}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="control-label">Sección:</label>
                                                                <input type="text" class="form-control" name="seccion" value="{{ucfirst($paciente->seccion)}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    {{--<div class="panel-heading">Información</div>--}}
                                                    <div class="panel-body">

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="emergencia" class="control-label">En caso de emergencia:</label>
                                                                <input type="text"  value="{{strtoupper($paciente->en_caso_emergencia)}}" class="form-control" name="emergencia" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menuFuncionVital" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                            @isset($cita->funcionVital)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-2 form-group">
                                                            <label for="talla" class="control-label">Talla:</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->talla}}" class="form-control" name="talla" min="0" step="any" readonly>
                                                                <div class="input-group-addon">mts</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <label for="temperatura" class="control-label">Temperatura:</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->temperatura}}" class="form-control" name="temperatura" min="0" step="any" readonly>
                                                                <div class="input-group-addon">°C</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <label for="fr" class="control-label">F.R. :</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->fr}}" class="form-control" name="fr" min="0" step="any" readonly>
                                                                <div class="input-group-addon">x min</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <label for="imc" class="control-label">IMC:</label>
                                                            <input type="number" value="{{$cita->funcionVital->imc}}" class="form-control" name="imc" min="0" step="any" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-2 form-group">
                                                            <label for="peso" class="control-label">Peso:</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->peso}}" class="form-control" name="peso" min="0" step="any" readonly>
                                                                <div class="input-group-addon">kg</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <label for="fc" class="control-label">F.C. :</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->fc}}" class="form-control" name="fc" min="0" step="any" readonly>
                                                                <div class="input-group-addon">x min</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <label class="control-label">PA:</label>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" name="ps" min="0" step="any" value="{{$cita->funcionVital->ps}}" readonly>
                                                                <div class="input-group-addon">/</div>
                                                                <input type="number" class="form-control" name="pd" min="0" step="any" value="{{$cita->funcionVital->pd}}" readonly>
                                                                <div class="input-group-addon">mmHG</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <label for="sat02" class="control-label">SAT. 02:</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->sat_02}}" class="form-control" name="sat02" min="0" step="any" readonly>
                                                                <div class="input-group-addon">%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="row">
                                                    <div class="col-md-12" style="height: 50vh;background-color: grey;">

                                                    </div>
                                                </div> --}}

                                                <div class="row">

                                                        <div class="col-md-4 form-group">
                                                            <label for="perimetro_abdominal" class="control-label">Perímetro Toraxico:</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->perimetro_abdominal}}" class="form-control" name="perimetro_abdominal" min="0" step="any" readonly>
                                                                <div class="input-group-addon">cm</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <label for="perimetro_abdominal" class="control-label">Perímetro Abdominal:</label>
                                                            <div class="input-group">
                                                                <input type="number" value="{{$cita->funcionVital->perimetro_abdominal}}" class="form-control" name="perimetro_abdominal" min="0" step="any" readonly>
                                                                <div class="input-group-addon">cm</div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                        <label for="maxima_inspiracion" class="control-label">Máxima Inspiración:</label>
                                                        <div class="input-group">
                                                            <input type="number" value="{{$cita->funcionVital->maxima_inspiracion}}" class="form-control" name="maxima_inspiracion" min="0" step="any" readonly>
                                                            <div class="input-group-addon">cm</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label for="perimetro_cadera" class="control-label">Perímetro Cadera:</label>
                                                        <div class="input-group">
                                                            <input type="number" value="{{$cita->funcionVital->perimetro_cadera}}" class="form-control" name="perimetro_cadera" min="0" step="any" readonly>
                                                            <div class="input-group-addon">cm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                        <label for="expiracion_forzada" class="control-label">Expiración Forzada:</label>
                                                        <div class="input-group">
                                                            <input type="number" value="{{$cita->funcionVital->expiracion_forzada}}" class="form-control" name="expiracion_forzada" min="0" step="any" readonly>
                                                            <div class="input-group-addon">cm</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label for="indice_cintura" class="control-label">Índice Cintura/Cadera:</label>
                                                        <input type="number" value="{{$cita->funcionVital->indice_cintura}}" class="form-control" name="indice_cintura" min="0" step="any" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                        <label for="circunferencia_cuello" class="control-label">Circunferencia Cuello:</label>
                                                        <div class="input-group">
                                                            <input type="number" value="{{$cita->funcionVital->circunferencia_cuello}}" class="form-control" name="circunferencia_cuello" min="0" step="any" readonly>
                                                            <div class="input-group-addon">cm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="text-center">
                                                    <a href="{{route('funcion_vital.create',$cita->id)}}" class="btn btn-info"  id=""><span class="glyphicon glyphicon-info-sign"></span> REGISTRAR FUNCIONES VITALES</a>
                                                </div>
                                            @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menuExamenFisico" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row">
                                                {{-- <div class="row container-fluid">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Descripción</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Resultado</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class=""><button type="button" class="btn btn-sm btn-block btn-app" style="background-color:#00a65a !important; color:white;"><i class="glyphicon glyphicon-plus"></i>AÑADIR</button></div>
                                                    </div>
                                                </div> --}}
                                                <div class="box box-default">
                                                    <div class="box-header with-border">Listado de Examenes Físicos
                                                        <div class="box-tools pull-right">
                                                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                      <form id="form_examen_fisico_paciente">
                                                        @csrf
                                                        <input type="hidden" name="paciente_id" @isset($paciente->id) value="{{$paciente->id}}" @endisset>
                                                        <input type="hidden" name="examen_fisico_id" @isset($paciente->examenfisicopaciente->id) value="{{$paciente->examenfisicopaciente->id}}" @endisset>
                                                        <table class="table table-hover table-bordered table-condensed">
                                                            <thead>
                                                            <th>Descripción</th>
                                                            <th>Resultado</th>
                                                            </thead>
                                                            <tbody>
                                                            {{-- @foreach($examenes_fisicos as $key=>$value)
                                                                <tr>
                                                                    <td><input type="text" class="form-control mayusculas" value="{{$key}}" ></td>
                                                                    <td><input type="text" class="form-control mayusculas" value="{{$value}}"></td>
                                                                </tr>
                                                            @endforeach --}}
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="CABEZA" style="background:white;" readonly></td>
                                                                <td><input type="text" name="cabeza" @isset($paciente->examenfisicopaciente->cabeza) value="{{$paciente->examenfisicopaciente->cabeza}}" @endisset  class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="PIEL Y FANERAS" style="background:white;" readonly></td>
                                                                <td><input type="text" name="pies_faneras"  @isset($paciente->examenfisicopaciente->pies_faneras) value="{{$paciente->examenfisicopaciente->pies_faneras}}" @endisset  class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="REFLEJOS PUPILARES VISTA DERECHA" style="background:white;" readonly></td>
                                                                <td><input type="text" name="reflejos_pupilares_derecha"  @isset($paciente->examenfisicopaciente->reflejos_pupilares_derecha) value="{{$paciente->examenfisicopaciente->reflejos_pupilares_derecha}}" @endisset  class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="REFLEJOS PUPILARES VISTA IZQUIERDA" style="background:white;" readonly></td>
                                                                <td><input type="text" name="reflejos_pupilares_izquierda"  @isset($paciente->examenfisicopaciente->reflejos_pupilares_izquierda) value="{{$paciente->examenfisicopaciente->reflejos_pupilares_izquierda}}" @endisset  class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="ENFERMEDADES OCULARES" style="background:white;" readonly></td>
                                                                <td><input type="text" name="enfermedades_oculares" @isset($paciente->examenfisicopaciente->enfermedades_oculares) value="{{$paciente->examenfisicopaciente->enfermedades_oculares}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="NARIZ" style="background:white;" readonly></td>
                                                                <td><input type="text" name="nariz" @isset($paciente->examenfisicopaciente->nariz) value="{{$paciente->examenfisicopaciente->nariz}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="OTOSCOPIA OIDO DERECHO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="otoscopia_oido_derecho" @isset($paciente->examenfisicopaciente->otoscopia_oido_derecho) value="{{$paciente->examenfisicopaciente->otoscopia_oido_derecho}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="OTOSCOPIA OIDO IZQUIERDO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="otoscopia_oido_izquierdo" @isset($paciente->examenfisicopaciente->otoscopia_oido_izquierdo) value="{{$paciente->examenfisicopaciente->otoscopia_oido_izquierdo}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="BOCA, AMIGDALAS, FARINGE, LARINGE" style="background:white;" readonly></td>
                                                                <td><input type="text" name="boca_amigdalas_faringe_laringe" @isset($paciente->examenfisicopaciente->boca_amigdalas_faringe_laringe) value="{{$paciente->examenfisicopaciente->boca_amigdalas_faringe_laringe}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="PIEZAS MAL ESTADO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="piezas_malestado" @isset($paciente->examenfisicopaciente->piezas_malestado) value="{{$paciente->examenfisicopaciente->piezas_malestado}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="PIEZAS QUE FALTAN" style="background:white;" readonly></td>
                                                                <td><input type="text" name="piezas_faltan" @isset($paciente->examenfisicopaciente->piezas_faltan) value="{{$paciente->examenfisicopaciente->piezas_faltan}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="ULTIMO CONTROL DENTAL" style="background:white;" readonly></td>
                                                                <td><input type="text" name="ultimo_ctrl_dental" @isset($paciente->examenfisicopaciente->ultimo_ctrl_dental) value="{{$paciente->examenfisicopaciente->ultimo_ctrl_dental}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="CUELLO Y PERIMETRO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="cuello_perimetro" @isset($paciente->examenfisicopaciente->cuello_perimetro) value="{{$paciente->examenfisicopaciente->cuello_perimetro}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="TORAX" style="background:white;" readonly></td>
                                                                <td><input type="text" name="torax" @isset($paciente->examenfisicopaciente->torax) value="{{$paciente->examenfisicopaciente->torax}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="CORAZON" style="background:white;" readonly></td>
                                                                <td><input type="text" name="corazon" @isset($paciente->examenfisicopaciente->corazon) value="{{$paciente->examenfisicopaciente->corazon}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="PULMON DERECHO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="pulmon_derecho" @isset($paciente->examenfisicopaciente->pulmon_derecho) value="{{$paciente->examenfisicopaciente->pulmon_derecho}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="PULMON IZQUIERDO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="pulmon_izquierdo" @isset($paciente->examenfisicopaciente->pulmon_izquierdo) value="{{$paciente->examenfisicopaciente->pulmon_izquierdo}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="COLUMNA VERTEBRAL" style="background:white;" readonly></td>
                                                                <td><input type="text" name="columna_vertebral" @isset($paciente->examenfisicopaciente->columna_vertebral) value="{{$paciente->examenfisicopaciente->columna_vertebral}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="ABDOMEN" style="background:white;" readonly></td>
                                                                <td><input type="text" name="abdomen" @isset($paciente->examenfisicopaciente->abdomen) value="{{$paciente->examenfisicopaciente->abdomen}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="ANILLOS INGUINALES" style="background:white;" readonly></td>
                                                                <td><input type="text" name="anillos_inguinales" @isset($paciente->examenfisicopaciente->anillos_inguinales) value="{{$paciente->examenfisicopaciente->anillos_inguinales}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="HERNIAS" style="background:white;" readonly></td>
                                                                <td><input type="text" name="hernias" @isset($paciente->examenfisicopaciente->hernias) value="{{$paciente->examenfisicopaciente->hernias}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="ORGANOS GENITALES" style="background:white;" readonly></td>
                                                                <td><input type="text" name="organos_genitales" @isset($paciente->examenfisicopaciente->organos_genitales) value="{{$paciente->examenfisicopaciente->organos_genitales}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="GANGLIOS" style="background:white;" readonly></td>
                                                                <td><input type="text" name="ganglios"@isset($paciente->examenfisicopaciente->ganglios) value="{{$paciente->examenfisicopaciente->ganglios}}" @endisset  class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="MIEMBRO SUPERIOR DERECHO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="miembro_superior_derecho" @isset($paciente->examenfisicopaciente->miembro_superior_derecho) value="{{$paciente->examenfisicopaciente->miembro_superior_derecho}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="MIEMBRO SUPERIOR IZQUIERDO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="mienbro_superior_izquierdo" @isset($paciente->examenfisicopaciente->mienbro_superior_izquierdo) value="{{$paciente->examenfisicopaciente->mienbro_superior_izquierdo}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="MIEMBRO INFERIOR DERECHO" style="background:white;" readonly></td>
                                                                <td><input type="text"name="miembro_inferior_derecho" @isset($paciente->examenfisicopaciente->miembro_inferior_derecho) value="{{$paciente->examenfisicopaciente->miembro_inferior_derecho}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="MIEMBRO INFERIOR IZQUIERDO" style="background:white;" readonly></td>
                                                                <td><input type="text" name="mienbro_inferior_izquierdo" @isset($paciente->examenfisicopaciente->mienbro_inferior_izquierdo) value="{{$paciente->examenfisicopaciente->mienbro_inferior_izquierdo}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="VARICES" style="background:white;" readonly></td>
                                                                <td><input type="text" name="varices" @isset($paciente->examenfisicopaciente->varices) value="{{$paciente->examenfisicopaciente->varices}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="TACTO RECTAL" style="background:white;" readonly></td>
                                                                <td><input type="text" name="tacto_rectal" @isset($paciente->examenfisicopaciente->tacto_rectal) value="{{$paciente->examenfisicopaciente->tacto_rectal}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="LENGUAJE, ATENCION, MEMORIA,ORIENTACION, INTELIGENCIA" style="background:white;" readonly></td>
                                                                <td><input type="text" name="lenguaje_atencion_memoria_orientacion_inteligencia" @isset($paciente->examenfisicopaciente->lenguaje_atencion_memoria_orientacion_inteligencia) value="{{$paciente->examenfisicopaciente->lenguaje_atencion_memoria_orientacion_inteligencia}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="FUERZA MUSCULAR" style="background:white;" readonly></td>
                                                                <td><input type="text" name="fuerza_muscular" @isset($paciente->examenfisicopaciente->fuerza_muscular) value="{{$paciente->examenfisicopaciente->fuerza_muscular}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="REFLEJOS OSTEOTENDINOSOS" style="background:white;" readonly></td>
                                                                <td><input type="text" name="relojes_osteotendinosos" @isset($paciente->examenfisicopaciente->relojes_osteotendinosos) value="{{$paciente->examenfisicopaciente->relojes_osteotendinosos}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="MARCHA" style="background:white;" readonly></td>
                                                                <td><input type="text" name="marcha" @isset($paciente->examenfisicopaciente->marcha) value="{{$paciente->examenfisicopaciente->marcha}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" class="form-control mayusculas" value="EVALUACION CARDIOVASCULAR" style="background:white;" readonly></td>
                                                                <td><input type="text" name="evaluacion_cardiovascular" @isset($paciente->examenfisicopaciente->evaluacion_cardiovascular) value="{{$paciente->examenfisicopaciente->evaluacion_cardiovascular}}" @endisset class="form-control mayusculas"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        @isset($paciente->examenfisicopaciente->id)
                                                          <button class="btn btn-sm btn-primary examen_fisico_paciente" tipo="examen_fisico_paciente_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                                         @else
                                                          <button class="btn btn-sm btn-success examen_fisico_paciente" tipo="examen_fisico_paciente_guardar" type="button">GUARDAR</button>
                                                        @endisset
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menuListaExamen" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row" id="tablaexamenes">
                                                 @include('evaluacionmedica.tablaexamenes')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menuConclusiones" class="tab-pane fade">
                              <form id="form_conclusiones">
                                @csrf
                                          <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
                                          <input type="hidden" name="conclusiones_id" @isset($paciente->conclucionpaciente->id) value="{{$paciente->conclucionpaciente->id}}" @endisset>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4" >
                                                        <label for="">DIAGNOSTICOS MÉDICOS</label>
                                                        <div class="form-group">
                                                            <textarea name="diagnosticos_medicos"  class="form-control" style="resize:none;" rows="11">@isset($paciente->conclucionpaciente->diagnosticos_medicos){{$paciente->conclucionpaciente->diagnosticos_medicos}}@endisset</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">DIAGNOSTICOS EXAMEN MEDICOS</label>
                                                                <div class="form-group">
                                                                    <textarea name="diagnosticos_examenes_medicos" style="resize:none;"  class="form-control" rows="4">@isset($paciente->conclucionpaciente->diagnosticos_examenes_medicos){{$paciente->conclucionpaciente->diagnosticos_examenes_medicos}}@endisset</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">RECOMENDACIONES</label>
                                                                <div class="form-group">
                                                                    <textarea name="recomendaciones" class="form-control" style="resize:none;" rows="4">@isset($paciente->conclucionpaciente->recomendaciones){{$paciente->conclucionpaciente->recomendaciones}}@endisset</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="">OBSERVACIONES / INTERCONSULTAS </label>
                                                        <div class="form-group">
                                                            <textarea name="observacion_interconsulta" style="resize:none;"  class="form-control" rows="4">@isset($paciente->conclucionpaciente->observacion_interconsulta){{$paciente->conclucionpaciente->observacion_interconsulta}}@endisset</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-inline">
                                                        <div class="form-group ">
                                                            <label for="">RC 10 años: </label>
                                                            <input type="text" name="rc10_anios" @isset($paciente->conclucionpaciente->rc10_anios) value="{{$paciente->conclucionpaciente->rc10_anios}}" @endisset class="form-control input-sm" >
                                                            <button class="btn btn-sm btn-default">RC</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <p>
                                                                Se calculará automáticamente cuando se tenga los resultados de Sexo, Edad, P_Sistolica, Fumador, Diabetes, Colesterol HDL, Colesterol Total
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 form-horizontal">

                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-4 control-label">APTITUD LABORAL</label>
                                                            <div class="col-sm-8">
                                                                <select name="aptitud_larabal" id="" class="form-control">
                                                                    <option value="">Apto</option>
                                                                    <option value="">Apto con Resttriccion</option>
                                                                    <option value="">No Apto</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-4 control-label">VENCIMIENTO LABORAL</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" @isset($paciente->conclucionpaciente->rc10_anios) value="{{$paciente->conclucionpaciente->rc10_anios}}" @else value="{{\Carbon\Carbon::now()->toDateString()}}" @endisset    class="form-control" name="vencimiento_laboral">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="inputPassword3" class="col-sm-4 control-label">&nbsp;</label>
                                                          <div class="col-sm-8">

                                                              {{-- <button type="button" class="btn btn-success" name="button">Guardar</button> --}}
                                                              @isset($paciente->conclucionpaciente->id)
                                                                <button class="btn btn-sm btn-primary conclusiones" tipo="conclusiones_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                                                      {{-- <input type="submit" class="btn btn-sm btn-primary  conclusiones" tipo="conclusiones_modificar" name="" value="Editar"> --}}
                                                               @else
                                                                <button class="btn btn-sm btn-success conclusiones" tipo="conclusiones_guardar"  type="button">GUARDAR</button>
                                                                {{-- <input type="submit" class="btn btn-sm btn-success conclusiones" tipo="conclusiones_guardar" name="" value="Guardar"> --}}
                                                              @endisset
                                                          </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                {{-- <button class="btn btn-default btn-sm btn-block"></button> --}}
                                                                {{--WORD <a href="{{route('word.reporte',[$cita->id])}}" class="btn btn-default btn-sm btn-block">Interconsulta Formato WORD</a> --}}
                                                                <a href="{{route('interconsultapdf.reporte',[$cita->id])}}" target="_blank" class="btn btn-default btn-sm btn-block">Interconsulta Formato PDF</a>
                                                            </div>
                                                        </div><br>
                                                        {{-- <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-default btn-sm btn-block">Seguimiento</button>
                                                            </div>
                                                        </div>
                                                        <br> --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <a href="{{route('evaluacionmedica.certificadoocupacional',[$cita->id])}}"   target="_blank"  class="btn btn-default btn-sm btn-block">Certificado Aptitud Medico Ocupacional</a>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                  <a href="{{route('evaluacionmedica.informemedicoocupacional',[$cita->id])}}"   target="_blank"  class="btn btn-default btn-sm btn-block">Informe Ocupacional</a>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                  <a href="{{route('evaluacionmedica.anexo16',[$cita->id])}}"   target="_blank"  class="btn btn-default btn-sm btn-block">Terminar Atención</a>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <a href="{{route('evaluacionmedica.informelaboratorio',[$cita->id])}}"   target="_blank"  class="btn btn-default btn-sm btn-block">Imprimir Laboratorio</a>
                                                            </div>
                                                        </div><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </form>
                            </div>
                            <div id="menuResultadosAnteriores" class="tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Some content in menu 2.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </for>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('body').on('hidden.bs.modal', function () {
            if($('.modal.in').length > 0)
            {
                $('body').addClass('modal-open');
            }
        });
    </script>
    <script src="{{asset('js/evaluacionmedica/evaluacion.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/colesterolhdl.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/creatinina.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/glucosa.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/sedimentacion.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/acidourico.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/colesterol_total.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/colesterolldl.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/triglicerido.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/gamma.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/sifilis.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/anexo7ds.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/electrocardiograma.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/hemograma.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/vision.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/orina.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/trabajoaltura.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/conductoroperador.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/conduccionvehicular.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/cuestionarionordico.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/evaluacioncognitiva.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/usorespiradores.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/apneasuenio.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/audiometria.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/torax.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/psa.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/thevenon.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/perfilhepatico.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/espirometria.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/evaluacionfisica.js')}}"></script>
    <script src="{{asset('js/evaluacionmedica/examen/conclucion.js')}}"></script>

    <script src="{{asset('js/diagnosticos/audiometria.js')}}"></script>
    <script src="{{asset('js/diagnosticos/electrocardiograma.js')}}"></script>
    <script src="{{asset('js/diagnosticos/espirometria.js')}}"></script>
    <script src="{{asset('js/diagnosticos/vision.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}
@endsection
