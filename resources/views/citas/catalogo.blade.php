@extends('layout')
@section('api')
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
    <div class="col-md-3">
        <div class="form-group">
            <!--a href="{{--route('tipoinstruccion.create')--}}" class="btn btn-success">NUEVA INSTRUCCION</a-->
                {{-- <a href="{{route('citas.catalogo')}}" class="btn btn-warning">VOLVER</a> --}}
                <a href="{{route('citas.nuevacita')}}" class="btn btn-success">NUEVA CITA</a>

        </div>
    </div>
    <div class="col-md-9">
        <form action="" class="form-inline text-right">
          <input type="text" id="buscarCitaDni" placeholder="BUSCAR CITAS POR DNI DEL PACIENTE..." class="form-control" style="width: 45%">

        </form>
    </div>
</div>
<br>
<div class="row" id="tabla">
     @include('citas.table')
</div>
@endsection
@section('script')
    <script src="{{asset('js/pacientes/citas.js')}}"></script>
@endsection
