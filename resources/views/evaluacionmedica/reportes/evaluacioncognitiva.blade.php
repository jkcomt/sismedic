<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Sismedic</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>
    <style>
        body{
            font-size: 12px;
        }
        .center-text{
            text-align: center;
        }
        .padding-top{
            padding-top: 30px;
            border: hidden;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <table>
            <tr>
                <td style="padding-right: 10px;">
                    <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" width="80px" height="100px" >
                </td>
                <td >
                    <h5>Dirección: Calle Los Girasoles 274 Urb. California, Trujillo</h5>
                    <h5>Teléfono: (044) 322600</h5>
                    <h5>Email: contacto@ciabumedical.com</h5>
                </td >
            </tr>
        </table>
    </div>
    <hr>
    <div class="row">
        <h4 class="text-center">EVALUACIÓN COGNITIVA</h4>
        <table class="table table-condensed">
            <tr>
                <td><label for="">Nombre:</label></td>
                <td>{{$evaluacionCognitiva->cita->paciente->apellido_paterno.' '.$evaluacionCognitiva->cita->paciente->apellido_materno.' '.$evaluacionCognitiva->cita->paciente->nombres}}</td>
            </tr>
            <tr>
                <td><label for="">Fecha:</label></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="">Fecha Nacimiento:</label>
                </td>
                <td></td>
            </tr>
            <tr></tr>
            <tr></tr>
        </table>
    </div>
</div>
</body>