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
        <div class="col-md-6">
                PERMISOS DEL USUARIO : {{$usuario->personal->apellidos.' '.$usuario->personal->nombres}}
        </div>
        <div class="col-sm-6 text-right"> <a href="{{route('usuario.index')}}" class="btn btn-warning btn-sm">VOLVER</a></div>
    </div>

@endsection
@section('modal-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-body')
    <h3 class="text-success text-center">Registro Exitoso</h3>
@endsection
@section('modal-footer')
    <a class="btn btn-sm btn-warning" href="{{route('usuario.index')}}">Volver</a>
@endsection

@section('modal-confirmacion-title')
    <h4 class="modal-title">Aviso</h4>
@endsection
@section('modal-confirmacion-body')
    <h3 class="text-warning text-center">¿Desea actualizar los permisos?</h3>
@endsection
@section('modal-confirmacion-footer')
    <button class="btn btn-success confirmar" id="">Confirmar</button>
    <a href="" class="btn btn-warning " data-dismiss="modal" id="index" >Volver</a>
@endsection

@section('content')
    {{-- @include('area.modals.edit') @include('area.modals.create') --}}
    <div class="row" >
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5><strong>LISTADO DE MODULOS</strong>
                    </h5>
                    <hr>
                    <form action="{{route('usuario.updatepermisos')}}" id="actualizarPermisos">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value = "{{$usuario->id}}">
                        <input type="hidden" name="role_id" value = "{{$usuario->roles->first()->id}}">
                        <div class="checkbox">
                            <ul class="list-unstyled">
                                @foreach($permisos as $permiso)
                                    @if($permiso->area == "pacientes")
                                        <h4><strong>Pacientes</strong></h4>
                                    @elseif($permiso->area == "citas")
                                        <h4><strong>Citas</strong></h4>
                                    @elseif($permiso->area == "funcion_vital")
                                        <h4><strong>Funciones Vitales</strong></h4>
                                    @elseif($permiso->area == "evaluacion_medica")
                                        <h4><strong>Evaluación Médica</strong></h4>
                                    @elseif($permiso->area == "configuracion")
                                        <h4><strong>Configuración</strong></h4>
                                    @endif
                                    <li style="padding-left: 20px;">
                                        <label>
                                            <input type="checkbox" name="permiso" id="" value="{{$permiso->id}}"
                                            @foreach($permiso->roles as $role)
                                                @if($role->id == $usuario->roles->first()->id)
                                                    checked
                                                @endif
                                            @endforeach
                                            > {{$permiso->description}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="text-right">
                            <a href="{{route('usuario.index')}}" class="btn btn-warning">VOLVER</a>
                            <input type="submit" value="GUARDAR" class="btn btn-success actualizarPermisos">
                        </div>

                    </form>


                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script src="{{asset('js/permiso.js')}}"></script>
@endsection
