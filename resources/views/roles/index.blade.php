@extends('layout')
@section('api')
    <style>
        th,td{
            text-align: center;
        }
    </style>

@endsection

@section('header')
    <div class="row">
        <div class="col-sm-6">LISTA DE roles
        </div>
        <div class="col-sm-6 text-right"> <a href="{{route('configuracion.index')}}" class="btn btn-warning btn-sm">VOLVER</a></div>
    </div>

@endsection
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
    <a class="btn btn-sm btn-warning" href="{{route('roles.index')}}">Volver</a>
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
    {{--@include('usuario.modals.create')--}}
    {{--@include('usuario.modals.edit')--}}


    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
            <!--a href="{{--route('tipoinstruccion.create')--}}" class="btn btn-success">NUEVA INSTRUCCION</a-->
                {{-- <a href="{{route('configuracion.index')}}" class="btn btn-warning">VOLVER</a> --}}
                <a class="btn btn-success new" href="{{route('roles.create')}}"> NUEVO ROL</a>


            </div>
        </div>
        <div class="col-md-4">
            <form action="" class="form-inline text-right">
                {{--<input type="text" id="buscartipoinstruccion" placeholder="BUSCAR..." class="form-control">--}}
                {{--<button class="btn btn-primary form-control">BUSCAR</button>--}}
            </form>
        </div>
    </div>
    <div class="row" id="tabla">

        @include('roles.tabla')
    </div>
@endsection
@section('script')
    <script src="{{asset('js/roles.js')}}"></script>
@endsection
