@extends('layout')
@section('api')
  {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> --}}
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<style>
th,td{
    text-align: center;
}
</style>

@endsection

@section('header','LISTADO DE CITAS')
@section('modal-title')
<h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
<h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
<a class="btn btn-sm btn-warning" href="{{route('citas.catalogo')}}">Volver</a>
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
{{-- @include('area.modals.edit') @include('area.modals.create') --}}
@include('altura.modals.create')
@include('altura.modals.edit')


<div class="row">
    <div class="col-md-4">
        <div class="form-group">
                <a href="{{route('citas.listareporte')}}" target="_blank"  class="btn btn-info"><span class="glyphicon glyphicon-print"></span> REPORTE GENERAL DE CITAS</a>
                <a href="{{route('citas.nuevacita')}}" class="btn btn-success"> <span class="glyphicon glyphicon-plus"></span> NUEVA CITA</a>
        </div>
    </div>
    <div class="col-md-8">
        {{-- <form action="" class="form-inline text-right"> --}}
          {{--<div class="row">--}}
            {{--<div class="col-md-3">--}}
              {{--<select class="form-control" name="tipoBusqueda" id="tipoBusqueda">--}}
                {{--<option value="dni">POR DNI</option>--}}
                {{--<option value="fecha">POR FECHA</option>--}}
                {{--<option value="dni_fecha">POR DNI Y FECHA</option>--}}
              {{--</select>--}}
            {{--</div>--}}
            {{--<div class="col-md-3">--}}
              {{--<input type="text" id="buscarCitaDni" placeholder="BUSCAR CITAS POR DNI..." class="form-control" style="width: 100%">--}}
           {{--</div>--}}
           {{--<div class="col-md-4">--}}
               {{--<div class="form-inline">--}}
                   {{--<div class="form-group">--}}
                       {{--<label for="desde">Desde:</label>--}}
                       {{--<input type="date" class="form-control" name="desde" value="{{\Carbon\Carbon::now()->toDateString()}}">--}}
                   {{--</div>--}}
               {{--</div>--}}
           {{--</div>--}}
              {{--<div class="col-md-4">--}}
                  {{--<div class="form-inline ">--}}
                      {{--<div class="form-group">--}}
                          {{--<label for="hasta">Hasta:</label>--}}
                          {{--<input type="date" class="form-control" name="hasta" value="{{\Carbon\Carbon::now()->toDateString()}}">--}}
                      {{--</div>--}}
                  {{--</div>--}}
              {{--</div>--}}
             {{--<input type="text" id="daterange"  class="form-control pull-right" name="daterange" style="width: 100%">--}}

          {{--</div>--}}
        {{-- </form> --}}
    </div>
</div>
<div class="row form-group">
            <div class="col-md-12">
                <div class="form-inline text-center">
                    <div class="form-group">
                        <label for="tipoBusqueda">Búsqueda por:</label>
                        <select class="form-control input-sm" name="tipoBusqueda" id="tipoBusqueda">
                            <option value="dni">DNI</option>
                            <option value="paciente">PACIENTE</option>
                            <option value="paciente_fecha">PACIENTE|FECHA</option>
                            <option value="fecha">FECHA</option>
                            <option value="dni_fecha">DNI|FECHA</option>
                        </select>
                    </div>
                    <div class="form-group">|
                        <label for="buscarcitadni">DNI:</label>
                        <input type="text" name="buscarcitadni" id="buscarCitaDni" placeholder="BUSCAR CITAS POR DNI" class="form-control input-sm" >
                    </div>
                    <div class="form-group">|
                        <label for="buscarcitadni">Paciente:</label>
                        <input type="text" name="buscarcitapaciente" id="buscarCitaPaciente" placeholder="BUSCAR POR APELLIDOS" class="form-control input-sm">
                    </div>
                    <div class="form-group">|
                        <label for="desde">Desde:</label>
                        <input type="date" class="form-control input-sm" name="desde" value="{{\Carbon\Carbon::now()->toDateString()}}" style="width: 130px;">
                    </div>
                    <div class="form-group text-right">|
                        <label for="hasta">Hasta:</label>
                        <input type="date" class="form-control input-sm" name="hasta" value="{{\Carbon\Carbon::now()->toDateString()}}" style="width: 130px;">
                        <button class="btn btn-success btn-sm" name="buscar"><span class="glyphicon glyphicon-search"></span></button>
                        <button class="btn btn-info btn-sm" name="limpiar"><span class="glyphicon glyphicon-erase"></span></button>
                    </div>
                </div>
            </div>

</div>

<div class="row" id="tabla">
     @include('citas.table')
</div>
@endsection
@section('script')
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
  <script src="{{asset('js/pacientes/citas.js')}}"></script>
@endsection
