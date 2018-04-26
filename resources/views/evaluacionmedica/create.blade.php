@extends('layout')
@section('api')
    <style>
        input.mayusculas{text-transform:uppercase;}
    </style>
@endsection
@section('header')
  <div class="row">
    <div class="col-md-6">
      EVALUACIÓN MÉDICA - Evaluación de Resultados
    </div>
    <div class="col-md-6 text-right">
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
    <button class="btn btn-sm btn-primary" id="create-paciente">Insertar otro registro</button>
    <a class="btn btn-sm btn-warning" href="{{route('pacientes.index')}}">Volver</a>
@endsection

{{-----------------------------------------------------------------}}
@section('content')
    <div id="examen">

    </div>
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
            <form action="" id="registrarEvaluacionMedica">
                {{csrf_field()}}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menuFichaMedica">Ficha Médica</a></li>
                            <li><a data-toggle="tab" href="#menuFuncionVital">Funciones Vitales</a></li>
                            <li><a data-toggle="tab" href="#menuExamenFisico">Examen Físico</a></li>
                            <li><a data-toggle="tab" href="#menuListaExamen">Lista de Examenes</a></li>
                            <li><a data-toggle="tab" href="#menuConclusiones">Conclusiones</a></li>
                            <li><a data-toggle="tab" href="#menuResultadosAnteriores">Resultados Anteriores</a></li>
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
                                                    <hr>
                                                <div class="row">
                                                    <div class="col-md-12" style="height: 50vh;background-color: grey;">

                                                    </div>
                                                </div>
                                                    <hr>
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
                                                <a href="{{route('funcion_vital.create',$cita->id)}}" class="btn btn-xs btn-info"  id=""><span class="glyphicon glyphicon-info-sign"></span> REGISTRAR FUNCIONES VITALES</a>
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
                                                <div class="row container-fluid">
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
                                                </div>
                                                <div class="box box-default">
                                                    <div class="box-header with-border">Listado de Examenes Físicos
                                                        <div class="box-tools pull-right">
                                                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <table class="table table-hover table-bordered table-condensed">
                                                            <thead>
                                                            <th>Descripción</th>
                                                            <th>Resultado</th>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($examenes_fisicos as $key=>$value)
                                                                <tr>
                                                                    <td><input type="text" class="form-control mayusculas" value="{{$key}}" ></td>
                                                                    <td><input type="text" class="form-control mayusculas" value="{{$value}}"></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
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
                                                <div class="row">
                                                    <table class="table table-hover table-bordered table-condensed">
                                                        <thead>
                                                        <th>Med</th>
                                                        <th>Examen</th>
                                                        <th>Resultado</th>
                                                        <th>Observaciones</th>
                                                        <th>Fecha</th>
                                                        <th>Opciones</th>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($cita->citaExamen as $citaExamen)
                                                            <tr class="text-danger">
                                                                <td></td>
                                                                <td>{{$citaExamen->perfilExamen->listaExamen->descripcion}}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{Carbon\Carbon::parse($cita->fecha_examen)->format('m - y')}}</td>
                                                                <td><button type="button" idcita="{{$cita->id}}" idexamen="{{$citaExamen->perfilExamen->listaExamen->id}}" class="btn btn-xs btn-block btn-primary filtrarExamen">EXAMEN</button></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menuConclusiones" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4" >
                                                        <label for="">DIAGNOSTICOS MÉDICOS</label>
                                                        <div class="form-group">
                                                            <textarea name="" id="" class="form-control" rows="11"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">DIAGNOSTICOS EXAMEN MEDICOS</label>
                                                                <div class="form-group">
                                                                    <textarea name="" id="" class="form-control" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">RECOMENDACIONES</label>
                                                                <div class="form-group">
                                                                    <textarea name="" id="" class="form-control" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="">OBSERVACIONES / INTERCONSULTAS </label>
                                                        <div class="form-group">
                                                            <textarea name="" id="" class="form-control" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 form-inline">
                                                        <div class="form-group ">
                                                            <label for="">RC 10 años: </label>
                                                            <input type="text" class="form-control input-sm" >
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
                                                                <select name="" id="" class="form-control">
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-4 control-label">VENCIMIENTO LABORAL</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" class="form-control" name="fecha_funcion_vital" id="fecha_funcion_vital">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-default btn-sm btn-block">Interconsulta</button>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-default btn-sm btn-block">Seguimiento</button>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-default btn-sm btn-block">Certificado Ocupacional</button>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-default btn-sm btn-block">Informe Ocupacional</button>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-default btn-sm btn-block">Terminar Atención</button>
                                                            </div>
                                                        </div><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menuResultadosAnteriores" class="tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Some content in menu 2.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success">Registrar</button>
                                <a href="{{route('evaluacion_medica.index')}}" class="btn btn-warning">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>


            </form>

        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/evaluacionmedica/evaluacion.js')}}"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}
@endsection
