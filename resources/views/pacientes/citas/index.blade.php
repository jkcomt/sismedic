@extends('layout')
@section('api')
    <style>
        th,td{
            text-align: center;
        }
    </style>

    <!-- Include Date Range Picker -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@endsection

@section('header')

    <div class="row">
      <div class="col-md-10">
        LISTADO DE CITAS DEL PACIENTE : {{$paciente->apellido_paterno.' '.$paciente->apellido_materno.', '.$paciente->nombres}}

      </div>
      <div class="col-md-2 text-right">
    <a href="{{route('pacientes.index')}}" class="btn btn-sm btn-warning">VOLVER</a>
      </div>
    </div>
@endsection
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Eliminación Exitosa</h3>
@endsection
@section('modal-footer')
    <a class="btn btn-sm btn-warning" href="{{route('pacientes.citas',[$paciente->id])}}">Volver</a>
@endsection

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

@section('content')
    {{--@include('lote.modals.edit')--}}

    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
              <a href="{{route('pacientes.citas_paciente',[$paciente->id])}}" target="_blank"  class="btn btn-info"><span class="glyphicon glyphicon-print"></span> REPORTE DE CITAS POR PACIENTE</a>

                <a href="{{route('pacientes.citas.create',[$paciente->id])}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> NUEVA CITA</a>
                <input type="hidden" value="{{$paciente->id}}" id="idPaciente">
            </div>
        </div>
        {{--<div class="col-md-7">--}}
            {{--<form action="" class="form-inline text-right">--}}

              {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                  {{--<select class="form-control" name="tipoBusquedacita" id="tipoBusquedacita">--}}
                    {{--<option value="cita">POR N° CITA</option>--}}
                    {{--<option value="fecha">POR FECHA</option>--}}
                  {{--</select>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                  {{--<input type="text" id="buscarCita" placeholder="N° DE CITA A BUSCAR" class="form-control" >--}}

               {{--</div>--}}
               {{--<div class="col-md-4">--}}
                 {{--<input type="text" id="daterangecita"  class="form-control pull-right" name="daterangecita" style="width: 100%">--}}
                {{--</div>--}}
              {{--</div>--}}

            {{--</form>--}}

        {{--</div>--}}
    </div>
    @include('buscadorgeneral.filtropacientecita')
    <div class="row" id="tabla">
        @include('pacientes.citas.tabla')
    </div>
@endsection
@section('script')

  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="{{asset('js/pacientes/citas.js')}}"></script>
@endsection
