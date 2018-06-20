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
  <div class="col-sm-6">LISTADO DE PERFILES
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
<a class="btn btn-sm btn-warning" href="{{route('perfil.index')}}">Volver</a>
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
@include('perfil.modals.create')
@include('perfil.modals.edit')


<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <!--a href="{{--route('tipoinstruccion.create')--}}" class="btn btn-success">NUEVA INSTRUCCION</a-->
    {{-- <a href="{{route('configuracion.index')}}" class="btn btn-warning">VOLVER</a> --}}
            <button class="btn btn-success new"> NUEVO PERFIL</button>


        </div>
    </div>
    <div class="col-md-4">
        <form action="" class="form-inline text-right">

            {{--<button class="btn btn-primary form-control">BUSCAR</button>--}}
        </form>
    </div>
</div>
<div class="row" id="tabla">

     @include('perfil.table')
</div>
@endsection
@section('script')
<script src="{{asset('js/perfil.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection
