@extends('layout')
@section('api')
    <style>
        th,td{
            text-align: center;
        }
    </style>

@endsection

@section('header','LISTADO DE PROFESIONES')
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Eliminación Exitosa</h3>
@endsection
@section('modal-footer')
    <a class="btn btn-sm btn-warning" href="{{route('tipoinstruccion.index')}}">Volver</a>
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

@include('profesion.modals.edit')
@include('profesion.modals.create')

    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <!--a href="{{--route('tipoinstruccion.create')--}}" class="btn btn-success">NUEVA INSTRUCCION</a-->
                 <button class="btn btn-success new"><span class="glyphicon glyphicon-pencil"></span> NUEVA PROFESION.</button>
            </div>
        </div>
        <div class="col-md-10">
            <form action="" class="form-inline text-right">
                {{-- <select name="filtro" id="filtro" class="form-control">
                    <option value="historia">Nro. Historia</option>
                    <option value="dni">DNI</option>
                    <option value="empresa">Empresa</option>
                </select>--}}
                <input type="text" id="buscarPaciente" placeholder="BUSCAR..." class="form-control" style="width: 45%">
                {{--<button class="btn btn-primary form-control">BUSCAR</button>--}}
            </form>
        </div>
    </div>
    <br>
    <div class="row" id="tabla">
        @include('profesion.table')
    </div>
@endsection
@section('script')
    <script src="{{asset('js/profesion.js')}}"></script>
@endsection