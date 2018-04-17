@extends('layout')
@section('api')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="panel panel-heading">
    <h1 class="panel-title">
        <strong>
            Bienvenid@ {{auth()->user()->personal->nombres}}
        </strong>
    </h1>
</div>
<div class="panel panel-body">
    <h1 class="text-center">
        SISMEDIC
    </h1>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Citas para hoy
            </div>
            <div class="panel-body" style="padding:0px;">
                <div class="box" style="margin-bottom: 0px;">
                    <ul id="first-list">
                        @foreach($citas as $cita)
                        <li>
                            <span>
                            </span>
                            <div class="title">
                                {{Jenssegers\Date\Date::parse($cita->fecha_registro)->toFormattedDateString()}}
                            </div>
                            <div class="info">
                                {{$cita->paciente->nombres." ".$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno}}
                            </div>
                            <div class="text-left">
                                Tipo de Examen : <span class="label label-warning">{{$cita->tipoexamen->descripcion}}</span>
                            </div>
                            <div class="time">
                                <span>
                                    {{Carbon\Carbon::parse($cita->hora_examen)->format('h:i A')}}
                                    <sup>
                                    </sup>
                                </span>
                                <span>
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Opciones
            </div>
            <div class="panel-body" style="padding:0px;">
                <div style="height: 55vh;"></div>
            </div>
        </div>
    </div>
</div>

@endsection
