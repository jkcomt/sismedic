@extends('layout')
@section('api')
    <style>
        th,td{
            text-align: center;
        }
    </style>

@endsection

@section('header','LISTADO DE PACIENTES')
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Eliminación Exitosa</h3>
@endsection
@section('modal-footer')
    <a class="btn btn-sm btn-warning" href="{{route('pacientes.index')}}">Volver</a>
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
              @can('pacientes.listareporte')
              <a href="{{route('pacientes.listareporte')}}" target="_blank"  class="btn btn-info"><span class="glyphicon glyphicon-print"></span> REPORTE GENERAL PACIENTES</a>
              @endcan
              @can('pacientes.create')
                <a href="{{route('pacientes.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-user"></span> REGISTRAR PACIENTE</a>
              @endcan
              <input type="hidden" value="{{route('pacientes.destroy')}}" id="deletePaciente">

            </div>
        </div>

        <div class="col-md-7">
            <form action="" class="form-inline text-right">
                <select name="filtro" id="filtro" class="form-control">
                    <option value="historia">Nro. Historia</option>
                    <option value="dni">DNI</option>
                    <option value="paciente">PACIENTE</option>
                </select>
                <input type="text" id="buscarPaciente" placeholder="BUSCAR..." class="form-control" style="width: 45%">
                <input type="hidden" value="{{route('pacientes.search')}}" id="buscarUrlPaciente">
                {{--<button class="btn btn-primary form-control">BUSCAR</button>--}}
            </form>
        </div>
    </div>

    <div class="row" id="tabla">
        @include('pacientes.tabla')
    </div>
@endsection
@section('script')
    <script src="{{asset('js/pacientes/pacientes.js')}}"></script>
@endsection
