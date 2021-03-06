@extends('layout')
@section('api')
    <style>
        th,td{
            text-align: center;
        }
    </style>
@endsection

@section('header','LISTADO DE FUNCIONES VITALES')
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Eliminación Exitosa</h3>
@endsection
@section('modal-footer')
    <a class="btn btn-sm btn-warning" href="">Volver</a>
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
        <div class="col-md-2">
            <div class="form-group">
                @can('funcion_vital.listareporte')
                  <a href="{{route('funcion_vital.listareporte')}}" target="_blank"  class="btn btn-info"><span class="glyphicon glyphicon-print"></span> REPORTE GENERAL</a>
                @endcan
                {{--<a href="" class="btn btn-success">NUEVA FILIACIÓN</a>--}}
            </div>
        </div>
    </div>
    @include('buscadorgeneral.filtroscita')

    <div class="row" id="tabla">
        @include('funcionvital.tabla')
    </div>
@endsection
@section('script')
    <script src="{{asset('js/funcionvital.js')}}"></script>
@endsection
