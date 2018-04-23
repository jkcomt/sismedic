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
    <div class="col-md-5">
        <div class="form-group">
                <a href="{{route('citas.listareporte')}}" target="_blank"  class="btn btn-info"><span class="glyphicon glyphicon-print"></span> REPORTE GENERAL DE CITAS</a>
                <a href="{{route('citas.nuevacita')}}" class="btn btn-success">NUEVA CITA</a>
        </div>
    </div>
    <div class="col-md-7">
        {{-- <form action="" class="form-inline text-right"> --}}
          <div class="row">
            <div class="col-md-4">
              <select class="form-control" name="tipoBusqueda" id="tipoBusqueda">
                <option value="dni">POR DNI</option>
                <option value="fecha">POR FECHA</option>
                <option value="dni_fecha">POR DNI Y FECHA</option>
              </select>
            </div>
            <div class="col-md-4">
              <input type="text" id="buscarCitaDni" placeholder="BUSCAR CITAS POR DNI..." class="form-control" style="width: 100%">
           </div>
           <div class="col-md-4">
             <input type="text" id="daterange"  class="form-control pull-right" name="daterange" style="width: 100%">
            </div>
          </div>
        {{-- </form> --}}
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
