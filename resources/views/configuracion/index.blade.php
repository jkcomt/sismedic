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
        <a href="{{route('tipoinstruccion.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-slideshare"></span></h3> <strong>Instrucción</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('profesion.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-graduation-cap"></span></h3> <strong>Profesión</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('contrata.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-building"></span></h3> <strong>Contrata</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('area.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-cube"></span></h3> <strong>Área</strong></a>

    </div>

 </div>
<br>
<div class="row">
     <div class="col-md-2">
        <a href="{{route('ocupaciones.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-briefcase"></span></h3> <strong>Ocupación</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('lugarlabor.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-building-o"></span></h3> <strong>Lugar de Labor</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('altura.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-arrow-up"></span></h3> <strong>Altura</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('gruposanguineo.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-heart-o"></span></h3> <strong>Grupo Sanguíneo</strong></a>
    </div>

</div>


</div>
</div>
<h3>CITAS</h3>
<div class="panel panel-body">
 <div class="">


    <div class="row text-center">
       <div class="col-md-2" >
        <a href="{{route('perfil.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-user-circle-o" style="font-size:25px"></span></h3> <strong>Perfil</strong></a>
    </div>
    <div class="col-md-2">
        <a href="{{route('cliente_cuenta.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-id-card"></span></h3> <strong>Cliente Cuenta</strong></a>
    </div>
    <div class="col-md-2">
        <a href="" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-address-book-o"></span></h3> <strong>Perfil Examen</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('tipo_examen.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-list-alt"></span></h3> <strong>Tipo de Examen</strong></a>
    </div>

    <div class="col-md-2">
        <a href="{{route('lista_examen.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-list"></span></h3> <strong>Lista de Examenes</strong></a>
    </div>
       <div class="col-md-2">
        <a href="{{route('lista_examen.index')}}" class="btn btn-lg btn-block btn-default" ><h3><span class="fa fa-list"></span></h3> <strong>Calendario</strong></a>
    </div>
 </div>



</div>
</div>


@endsection
@section('script')
<script src="{{asset('js/profesion.js')}}"></script>
@endsection
