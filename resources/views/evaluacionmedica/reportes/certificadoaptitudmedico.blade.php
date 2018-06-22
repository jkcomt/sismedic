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
    table{
      width: 100%;
    }
    .font-verdana{
      font-family: Verdana, Geneva, sans-serif;
    }
    .center{
      width:100%;text-align:center;
    }
    .font-xxsmall{
      font-size: xx-small;
      font-family: Verdana, Geneva, sans-serif;
    }
    .tdcuerpo
    {
padding: 1px;
        border-bottom: 0.45px solid  rgba(0,0,0,0.1);
        border-top:0.45px solid rgba(0,0,0,0.1);
        border-left:0.45px solid rgba(0,0,0,0.1);
        border-right:0.45px solid rgba(0,0,0,0.1);
    }

    </style>
</head>
<body>
<div class="container-fluid">
  <h5 class="font-verdana center">CERTIFICADO DE APTITUD MÉDICO OCUPACIONAL</h5>
  <h5 class="font-verdana center">"CIABU"</h5>

  <table width="100%">
    <tr>
      <td width="10%" class="tdcuerpo" style="border-right:none;"><img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" style="padding:1px" width="80px" height="100px"></td>
      <td width="60%" class="tdcuerpo" style="border-left:none;">CIABU MEDICAL CENTER <br>Consultores de Salud Ocupacional </td>
      <td width="30%" class="tdcuerpo">
        <div class="font-xxsmall " style="margin-left:10%;">
        <div style="display:block">
          <div style="display:inline;width:80%;">
              EX PREOCUPACIONAL
          </div>
          <div style="display:inline;width:20%">
             (&nbsp; )
          </div>
        </div>
        <div style="display:block;">
          <div style="display:inline;width:80%;">
              EX PERIÓDICO ANUAL
          </div>
          <div style="display:inline;width:20%;">
             (&nbsp; )
          </div>
        </div>
        <div style="display:block;">
          <div style="display:inline;">
              EX DE RETIRO
          </div>
          <div style="display:inline;width:20%">
             (&nbsp; )
          </div>
        </div>

      </div> </td>
    </tr>
  </table>
  <table width="100%" style="">
    <tr>
      <td align="center" class="font-verdana center tdcuerpo" style="padding:2.5px;">CERTIFICO que el Sr.(a)</td>
    </tr>
  </table>
  <table>
    <tr>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;" width="30%">Apellidos Y Nombres</td>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;" width="70%">  {{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}}  </td>
    </tr>
    <tr>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;font-size:x-small;" width="30%">Doc Identidad (&nbsp;) CE (&nbsp;) Pasaporte (&nbsp;)</td>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;" width="70%">  {{$cita->paciente->num_dni}}  </td>
    </tr>
    <tr>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;" width="30%">Puesto Laboral</td>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;" width="70%"></td>
    </tr>
    <tr>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;" width="30%">Empresa</td>
      <td class="font-verdana tdcuerpo" align="left" style="border-top:none;" width="70%"></td>
    </tr>
  </table>
  <table width="100%" style="">
    <tr>
      <td align="center" class="font-verdana center tdcuerpo" >Al Momento de realizado el Examen Médico Ocupacional, se encuentra:</td>
    </tr>
  </table>

<table>
  <tr>
    <td class="font-verdana tdcuerpo" align="left"  width="50%" style="margin-left:10px;font-size:x-small;border-top:none;"> <h5 class="font-verdana" style="margin-left:10px;font-size:x-small;font-weight:bold;">APTO</h5>  <label style="margin-left:10px;font-size:x-small;font-weight:ligh;"> (Para el puesto en el que trabaja o postula)</label> </td>
    <td class="font-verdana tdcuerpo" align="center" style="border-top:none;border-bottom:none;font-size:x-small;font-weight:bold;" width="50%" ><h5 class="font-verdana" style="font-size:x-small;font-weight:bold;"> RESTRICCIONES - OBSERVACIONES - NO APTITUD </h5>  <label style="margin-left:10px;font-size:x-small;font-weight:ligh;"> (Solo Diagnostico/recomendaciones de índole ocupacional o relacionadas al puesto)</label>  </td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo" align="left"  width="50%" style="margin-left:10px;font-size:x-small;border-top:none;"> <h5 class="font-verdana" style="margin-left:10px;font-size:x-small;font-weight:bold;padding-top:8px;padding-bottom:8px;">APTO CON RESTRICCIONES</h5>  <label style="margin-left:10px;font-size:x-small;font-weight:ligh;"> (Para el puesto en el que trabaja o postula)</label> </td>
    <td class="font-verdana tdcuerpo" align="center" style="border-top:none;border-bottom:none;font-size:x-small;font-weight:bold;" width="50%" ></td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo" align="left"  width="50%" style="margin-left:10px;font-size:x-small;border-top:none;"> <h5 class="font-verdana" style="margin-left:10px;font-size:x-small;font-weight:bold;padding-top:8px;padding-bottom:8px;">NO APTO</h5>  <label style="margin-left:10px;font-size:x-small;font-weight:ligh;"> (Para el puesto en el que trabaja o postula)</label> </td>
    <td class="font-verdana tdcuerpo" align="center" style="border-top:none;border-bottom:none;font-size:x-small;font-weight:bold;" width="50%" ></td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo" align="left"  width="50%" style="margin-left:10px;font-size:x-small;border-top:none;"> <h5 class="font-verdana" style="margin-left:10px;font-size:x-small;font-weight:bold;padding-top:8px;padding-bottom:8px;">OBSERVADO</h5>  <label style="margin-left:10px;font-size:x-small;font-weight:ligh;"> (Para el puesto en el que trabaja o postula)</label> </td>
    <td class="font-verdana tdcuerpo" align="center" style="border-top:none;font-size:x-small;font-weight:bold;" width="50%" ></td>
  </tr>
  <tr>
    <td  class="font-verdana tdcuerpo" align="left" style="border-top:none;font-size:x-small;" width="50%"> <label style="padding:2px;font-size:x-small;"> FECHA DE  EXAMEN</label></td>
      <td  class="font-verdana tdcuerpo" align="left" style="border-top:none;font-size:x-small;" width="50%"><label style="padding:2px;font-size:x-small;">FECHA DE EMISION</label></td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo" width="50%" align="center"><br><br><br><br><br><br><br><br><u>__________________________</u>  <br> <label style="font-size:x-small;text-align:center;width:100%;">FIRMA Y SELLO DEL MÉDICO</label> </td>
    <td class="font-verdana tdcuerpo" width="50%" align="center"><br><br><br><br><br><br><br><br> <u>________________________________</u>  <br> <label style="font-size:x-small;text-align:center;width:100%;">MÉDICO EN SALUD OCUPACIONAL</label> </td>
</table>

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
