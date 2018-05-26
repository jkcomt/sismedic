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

    .header{
        width: 100%;
        text-align: center;
        font-weight: bold;
    }
    /* *{
      margin-left:0;
      margin-right:0;
      padding: 0;
    } */
     table{

      width:100%;
    }

    .tdheader{
      background: rgba(0,0,0,0.2);

      font-size:xx-small;
    }
    .tdheight{
      overflow: hidden;
      height: 75px;
    }

    </style>
</head>
<body>
<div class="container-fluid">

  <div class="header">
    <u> HISTORIA OCUPACIONAL </u>
  </div>
  <br>
  <table>
    <tr>
      <td>Apellidos y Nombres</td>
      <td> <strong align="center"> {{$paciente->apellido_paterno ." ".$paciente->apellido_materno." ".$paciente->nombres}} </strong> </td>
      <td>N° Registro</td>
      <td></td>
      <td>Fecha Nacimiento</td>
      <td><strong>{{$paciente->fecha_nacimiento}}</strong> </td>
      <td>Sexo</td>
      <td><strong>{{$paciente->sexo}}</strong> </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>Lugar de Nacimiento <strong>{{$paciente->distritoOrigen->nombre}}</strong></td>
      <td>Lugar de Procedencia <strong>{{$paciente->distritoOrigen->nombre}}</strong> </td>
    </tr>
    <tr>
      <td>Profesión</td>
      <td>Puesto de Trabajo</td>
    </tr>
  </table>
  <br>
  <table style="font-size:xx-small;">
    <tr>
      <td colspan="1">PERIODO</td>
      <td colspan="1">EMPRESA</td>
      <td colspan="1">ALTITUD</td>
      <td colspan="1">ACTIVIDADES DE LA EMPRESA</td>
      <td colspan="1" align="center">ÁREA DE TRABAJO</td>
      <td colspan="1" align="center">OCUPACIÓN</td>
      <td colspan="2" align="center">TIEMPO DE TRABAJO</td>
      <td colspan="1">PELIGROS / AGENTES OCUPACIONALES</td>
      <td colspan="1">USO EPP</td>
      <td colspan="1">TIPO EPP</td>
    </tr>
    <tr>
      <td colspan="1"></td>
      <td colspan="1"></td>
      <td colspan="1"></td>
      <td colspan="1"></td>
      <td colspan="1"></td>
      <td colspan="1"></td>
      <td colspan="1" align="center">SUBSUELO</td>
      <td colspan="1" align="center">SUPERFICIE</td>
      <td colspan="1"></td>
      <td colspan="1"></td>
      <td colspan="1"></td>
    </tr>

    @isset($paciente->antperhistoriaocupacional)
      @foreach ($paciente->antperhistoriaocupacional as $perhistoriaocupacional)
        <tr>

          <td colspan="1">{{$perhistoriaocupacional->id}}</td>
          <td colspan="1">{{$perhistoriaocupacional->empresa_lugar}}</td>
          <td colspan="1">{{$perhistoriaocupacional->altitud}}</td>
          <td colspan="1">{{$perhistoriaocupacional->rubro}}</td>
          <td colspan="1">{{$perhistoriaocupacional->area_empresa}}</td>
          <td colspan="1">{{$perhistoriaocupacional->ocupacion}}</td>
          <td colspan="1" align="center">{{$perhistoriaocupacional->labor_superficie}}</td>
          <td colspan="1" align="center">{{$perhistoriaocupacional->labor_socavon}}</td>
          <td colspan="1">{{$perhistoriaocupacional->riesgo_ocupacional}}</td>
          <td colspan="1">{{$perhistoriaocupacional->uso_epp}}</td>
          <td colspan="1">{{$perhistoriaocupacional->tipos_proteccion}}</td>
        </tr>
      @endforeach
    @endisset
  </table>
  {{-- {{$paciente->antperhistoriaocupacional}} --}}
   {{-- si pepe es linea de paciente->antperhistoriaocupacional es igual ala de arriba --}}


</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{asset('js/holder.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>
