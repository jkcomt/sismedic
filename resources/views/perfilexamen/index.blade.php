@extends('layout')
@section('api')
<style>
th,td{
    text-align: center;
}
</style>

@endsection

@section('header','LISTADO DE EXAMENES DE '.$perfil->descripcion)
@section('modal-title')
<h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
<h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
<a class="btn btn-sm btn-warning" href="{{route('perfil_examen.index',['id',$perfil->id])}}">Volver</a>
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

@include('perfilexamen.modals.create')


<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <a href="{{route('perfil.index')}}" class="btn btn-warning">VOLVER A PERFILES</a>

            <button class="btn btn-success new"> AÑADIR NUEVO EXAMEN</button>


        </div>
    </div>
    <div class="col-md-8">
        {{-- <form action="" class="form-inline text-right">
            <input type="text" id="buscartipoinstruccion" placeholder="BUSCAR..." class="form-control">
            <button class="btn btn-primary form-control">BUSCAR</button>
        </form> --}}
    </div>
</div>
<br>
<div class="row" id="tabla">

      @include('perfilexamen.table') 
</div>
@endsection
@section('script')
<script src="{{asset('js/perfilexamen.js')}}"></script>
@endsection
