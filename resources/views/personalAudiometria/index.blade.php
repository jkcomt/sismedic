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
  <div class="col-sm-6">LISTADO DE PERSONAL DE AUDIOMETRIA
  </div>
  <div class="col-sm-6 text-right"><a href="{{route('configuracion.index')}}" class="btn btn-warning btn-sm">VOLVER</a></div>
</div>

@endsection
@section('modal-title')
<h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
<h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
<a class="btn btn-sm btn-warning" href="{{route('personal_audiometria.index')}}">Volver</a>
@endsection

@section('modal-confirmacion-title')
<h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-confirmacion-body')
{{-- <h3 class="text-warning text-center">¿Desea eliminar el registro?</h3> --}}
<h3 class="text-warning text-center"> </h3>
@endsection
@section('modal-confirmacion-footer')
<button class="btn btn-danger confirmar" id="btn_modal_confirmacion">Confirmar</button>
<a href="" class="btn btn-warning " data-dismiss="modal" id="index" >Volver</a>
@endsection

@section('content')
{{-- @include('area.modals.edit') @include('area.modals.create') --}}
@include('personalAudiometria.modals.create')
@include('personalAudiometria.modals.edit')


<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <!--a href="{{--route('tipoinstruccion.create')--}}" class="btn btn-success">NUEVA INSTRUCCION</a-->

            <button class="btn btn-success new"> NUEVO PERSONAL DE AUDIOMETRIA</button>


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

     @include('personalAudiometria.table')
</div>
@endsection
@section('script')
<script src="{{asset('js/personal_audiometria.js')}}"></script>
@endsection
