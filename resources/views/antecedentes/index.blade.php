@extends('layout')
@section('api')
<style>
th,td{
    text-align: center;
}
.span-width{
  width: 18% !important;
}
</style>

@endsection

@section('header')
    <div class="row">
        <div class="col-md-6">
            ANTECEDENTES DEL PACIENTE: {{$paciente->apellido_paterno." ".$paciente->apellido_materno." ".$paciente->nombres}}
        </div>
        <div class="col-md-6 text-right">
            @if(str_replace(url('/'), '', url()->previous()) == '/evaluacion_medica/create/'.$paciente->id)
                {{-- esto rediriga al catalogo de citas --}}
                <a class="btn btn-sm btn-warning" href="{{route('evaluacion_medica.create',$cita->id)}}">VOLVER EVALUACION</a>
            @elseif(str_replace(url('/'), '', url()->previous()) == '/citas')
                {{-- esto redirige a calendario --}}
                <a class="btn btn-sm btn-warning" href="">VOLVER A CALENDARIO</a>
            @else
                <a class="btn btn-sm btn-warning" href="">IR A CATÁLOGO DE CITAS</a>
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
      <div class="col-md-12 text-right">
        {{-- <a class="btn btn-sm btn-warning btn-block" href="{{route('citas.catalogo')}}">Volver a Citas</a> --}}
          {{-- esto rediriga al catalogo de citas --}}
            <a class="btn btn-sm btn-warning" href="{{route('antecedentes.principal',$cita->id)}}">Cerrar</a>
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
{{-- @include('area.modals.edit') @include('area.modals.create') --}}



<div class="row">
    <div class="col-md-12">
        <div class="form-group nav-tabs-custom">
            <!--a href="{{--route('tipoinstruccion.create')--}}" class="btn btn-success">NUEVA INSTRUCCION</a-->
                {{-- <a href="{{route('configuracion.index')}}" class="btn btn-warning">VOLVER</a> --}}
                <ul class="nav nav-tabs">

                  <li  class="active"><a data-toggle="tab" href="#personaluno">Personales 1</a></li>
                  <li><a data-toggle="tab" href="#personaldos">Personales 2</a></li>
                  <li><a data-toggle="tab" href="#personaltres">Personales 3</a></li>
                  <li><a data-toggle="tab" href="#oculares">Oculares</a></li>
                  <li><a data-toggle="tab" href="#orl">ORL</a></li>
                  <li><a data-toggle="tab" href="#neumologicos">Neumológicos</a></li>
                  <li><a data-toggle="tab" href="#ginecologico">Ginecológico</a></li>
                  <li><a data-toggle="tab" href="#quirurgicos">Quirúrgicos</a></li>
                  <li><a data-toggle="tab" href="#familiares">Familiares</a></li>
                  <li><a data-toggle="tab" href="#historiaocupacional">Historia Ocupacional</a></li>
                </ul>
                <div class="tab-content">
                  <div id="personaluno" class="tab-pane fade in active ">
                    <div class="row">
                      <div class="col-md-12">
                           @include('antecedentes.personalesuno')
                      </div>

                    </div>

                  </div>
                  <div id="personaldos" class="tab-pane fade ">
                    <div class="row">
                        <div class="col-md-12">
                               @include('antecedentes.personalesdos')
                        </div>
                    </div>
                  </div>
                  <div id="personaltres" class="tab-pane fade ">
                       <div class="row">
                          <div class="col-md-12">
                            @include('antecedentes.personalestres')
                          </div>
                       </div>
                  </div>
                  <div id="oculares" class="tab-pane fade ">
                        <div class="row">
                            <div class="col-md-12">
                                   @include('antecedentes.oculares')
                            </div>
                        </div>
                  </div>
                  <div id="orl" class="tab-pane fade ">
                        <div class="row">
                          <div class="col-md-12">
                             @include('antecedentes.orl')
                          </div>
                        </div>
                  </div>
                  <div id="neumologicos" class="tab-pane fade ">
                      <div class="row">
                        <div class="col-md-12">
                           @include('antecedentes.neumologicos')
                        </div>
                      </div>
                  </div>
                  <div id="ginecologico" class="tab-pane fade ">
                      <div class="row">
                        <div class="col-md-12">
                           @include('antecedentes.ginecologicos')
                        </div>
                      </div>
                  </div>
                  <div id="quirurgicos" class="tab-pane fade ">
                      <div class="row">
                        <div class="col-md-12">
                           @include('antecedentes.quirurgicos')
                        </div>
                      </div>
                  </div>
                  <div id="familiares" class="tab-pane fade ">
                      <div class="row">
                        <div class="col-md-12">
                           @include('antecedentes.familiares')
                        </div>
                      </div>
                  </div>
                  <div id="historiaocupacional" class="tab-pane fade">
                      <div class="row">
                        <div class="col-md-12">
                               @include('antecedentes.historiaocupacional')
                        </div>
                      </div>
                  </div>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        {{-- <form action="" class="form-inline text-right">
           {{--<button class="btn btn-primary form-control">BUSCAR</button>}}
        </form> --}}
    </div>
</div>

<div class="row" id="tabla">


</div>
@endsection
@section('script')
<script src="{{asset('js/antecedentes/familiares.js')}}"></script>
<script src="{{asset('js/antecedentes/ginecologicos.js')}}"></script>
<script src="{{asset('js/antecedentes/historiaocupacional.js')}}"></script>
<script src="{{asset('js/antecedentes/neumologicos.js')}}"></script>
<script src="{{asset('js/antecedentes/oculares.js')}}"></script>
<script src="{{asset('js/antecedentes/orl.js')}}"></script>
<script src="{{asset('js/antecedentes/personalesdos.js')}}"></script>
<script src="{{asset('js/antecedentes/personalestres.js')}}"></script>
<script src="{{asset('js/antecedentes/personalesuno.js')}}"></script>
<script src="{{asset('js/antecedentes/quirurgico.js')}}"></script>
@endsection
