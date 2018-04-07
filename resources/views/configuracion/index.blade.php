@extends('layout')
@section('api')
<style>
th,td{
    text-align: center;
}
</style>

@endsection

@section('header','CONFIGURACIONES')
@section('modal-title')
<h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
<h3 class="text-success text-center">Eliminación Exitosa</h3>
@endsection
@section('modal-footer')

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




<div class="panel panel-body">
 <div class="">


    <div class="row text-center">
       <div class="col-md-2" >
        <a href="{{route('tipoinstruccion.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-users"></span></h3> <strong>Instruccion</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('profesion.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-user"></span></h3> <strong>Profesion</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('contrata.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>Contrata</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('area.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>area</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('ocupaciones.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>Ocupacion</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('ocupaciones.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>Ocupacion</strong></a>
    </div>
</div>
<br>
<div class="row">
     <div class="col-md-2">
        <a href="{{route('ocupaciones.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>Ocupacion</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('lugarlabor.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>Lugar de Labor</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('altura.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>Altura</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('gruposanguineo.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cubes"></span></h3> <strong>Grupo Sanguineo</strong></a>
    </div>

</div>


</div>
</div>


@endsection
@section('script')
<script src="{{asset('js/profesion.js')}}"></script>
@endsection