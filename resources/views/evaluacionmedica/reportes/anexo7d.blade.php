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
      height: 73px;
    }
    .tdresultados{
      background: rgba(0,0,0,0.1);
        font-size:x-small;
        border: 0.5px solid rgba(0,0,0,0.1);
    }
    .tdresultadosunidad
    {
      background: rgba(0,0,0,0.1);
        font-size:x-small;
        border-left: 0.5px dashed rgba(0,0,0,0.5);
        border-top: 0.5px solid rgba(0,0,0,0.1);
        border-bottom:0.5px solid rgba(0,0,0,0.1);
        border-right: 0.5px solid rgba(0,0,0,0.1);
    }
    .tdresultadobd{
        font-size:x-small;
        border: 0.5px solid rgba(0,0,0,0.1);
    }
    .tdvalorreferencial{
      font-size:x-small;
      border: 0.5px solid rgba(0,0,0,0.1);
    }
    </style>
</head>
<body>
<div class="container-fluid">

  <table WIDTH="100%">
          <tr>
             <td WIDTH="30%">
                <img src="{{asset('img/planvital.jpg')}}" alt="" width="200px" height="50px" >
             </td>
             <td  WIDTH="70%" align="center">
                <h4 style="font-family: Verdana, Geneva, sans-serif;"> <strong>ANEXO N° 7-D EVALUACION MEDICA PARA ASCENSO A GRANDES ALTITUDES</strong> </h4>(mayor de 2500 m.s.n.m)
             </td >
         </tr>
  </table>


  <table style="margin-top:3px;">
    <tr>
      <td width="30%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong>&nbsp;APELLIDOS Y NOMBRES</strong></td>
      <td width="70%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;">{{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}} </td>
    </tr>
  </table>
  <table style="margin-top:3px;">
    <tr >
      <td width="5%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;DNI</strong></td>
      <td width="15%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;</strong>{{$cita->paciente->num_dni}}</td>
      <td width="15%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;FECHA NACIMIENTO</strong></td>
      <td width="15%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;</strong>{{$cita->paciente->fecha_nacimiento}}</td>
      <td width="15%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;SEXO</strong></td>
      <td width="15%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;</strong>{{$cita->paciente->sexo}}</td>
    </tr>
  </table>
  <table style="margin-top:3px;">
    <tr>
      <td width="30%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong>&nbsp;DIRECCION</strong></td>
      <td width="70%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;">{{$cita->paciente->direccion}}</td>
    </tr>
  </table>
  <table style="margin-top:3px;">
    <tr>
      <td width="30%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong>&nbsp;EMPLEADOR</strong></td>
      <td width="70%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"></td>
    </tr>
  </table>
  <table style="margin-top:3px;">
    <tr>
      <td width="30%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong>&nbsp;ACTIVIDAD A REALIZAR</strong></td>
      <td width="70%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;">{{$cita->paciente->trabajo}}</td>
    </tr>
  </table>

  <table style="margin-top:3px;color:red;">
    <tr>
      <td width="30%" colspan="5" style="background: RGBA(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;FUNCIONES VITALES</td>
    </tr>
    <tr>
      <td align="center" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">FC:&nbsp; x min</td>
      <td align="center" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">PA:&nbsp; mmHg</td>
      <td align="center" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">FR:&nbsp; x min</td>
      <td align="center" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">IMC:&nbsp; kg/m2</td>
      <td align="center" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">SAT:&nbsp; %</td>
    </tr>
  </table>

  <table style="margin-top:3px;">
    <tr>
      <td width="70%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;El/La presenta o ha presentado en los últimos 6 meses:</td>
      <td width="15%" align="center" style="background:rgba(0,0,0,0.1);border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;">SI</td>
      <td width="15%" align="center" style="background:rgba(0,0,0,0.1);border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;">NO</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Anemia</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->anemia) @if($cita->anexo7d->anemia=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->anemia) @if($cita->anexo7d->anemia=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Cirugia mayor reciente</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->cirugia_mayor_reciente) @if($cita->anexo7d->cirugia_mayor_reciente=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->cirugia_mayor_reciente) @if($cita->anexo7d->cirugia_mayor_reciente=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Desórdenes de la coagulación, trombosis, etc.</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->desordenes_coagulacion) @if($cita->anexo7d->desordenes_coagulacion=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->desordenes_coagulacion) @if($cita->anexo7d->desordenes_coagulacion=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Diabetes Mellitus</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->diabetes_mellitus) @if($cita->anexo7d->diabetes_mellitus=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->diabetes_mellitus) @if($cita->anexo7d->diabetes_mellitus=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Hipertensión Arterial</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->hipertension_arterial) @if($cita->anexo7d->hipertension_arterial=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->hipertension_arterial) @if($cita->anexo7d->hipertension_arterial=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Embarazo</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->embarazo) @if($cita->anexo7d->embarazo=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->embarazo) @if($cita->anexo7d->embarazo=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Problemas neurológicos:epilepsia, vértigo,etc.</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_neurologicos) @if($cita->anexo7d->problemas_neurologicos=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_neurologicos) @if($cita->anexo7d->problemas_neurologicos=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Infecciones recientes(especialmente oídos,nariz,garganta)</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->infecciones_recientes) @if($cita->anexo7d->infecciones_recientes=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->infecciones_recientes) @if($cita->anexo7d->infecciones_recientes=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Obesidad Mórbida(IMC mayor a 35m/kg <sup>2</sup> )</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->obesidad_morbida) @if($cita->anexo7d->obesidad_morbida=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->obesidad_morbida) @if($cita->anexo7d->obesidad_morbida=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Problemas Cardiacos: marcapasos, coronopatia, etc.</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_cardiacos) @if($cita->anexo7d->problemas_cardiacos=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_cardiacos) @if($cita->anexo7d->problemas_cardiacos=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Problemas Respiratorios: asma,EPOC, etc.</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_respiratorios) @if($cita->anexo7d->problemas_respiratorios=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_respiratorios) @if($cita->anexo7d->problemas_respiratorios=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Problemas Oftalmológicos: retinopatía,glaucoma,etc</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_oftalmologicos) @if($cita->anexo7d->problemas_oftalmologicos=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_oftalmologicos) @if($cita->anexo7d->problemas_oftalmologicos=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Problemas Digestivos: úlcera péptica,hepatitis, etc.</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_digestivos) @if($cita->anexo7d->problemas_digestivos=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->problemas_digestivos) @if($cita->anexo7d->problemas_digestivos=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Apnea del Sueño</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->apnea_del_sueno) @if($cita->anexo7d->apnea_del_sueno=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->apnea_del_sueno) @if($cita->anexo7d->apnea_del_sueno=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Otra Condición médica importante</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->otra_condicion) @if($cita->anexo7d->otra_condicion=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->otra_condicion) @if($cita->anexo7d->otra_condicion=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Alergias</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->alergias) @if($cita->anexo7d->alergias=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->alergias) @if($cita->anexo7d->alergias=='0')   x @endif @endisset</td>
    </tr>
    <tr>
      <td width="70%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;&nbsp;&nbsp;&nbsp;Uso de medicación actual:</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->uso_de_medicacion_actual) @if($cita->anexo7d->uso_de_medicacion_actual=='1')   x @endif @endisset</td>
      <td width="15%" align="center" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"> @isset($cita->anexo7d->uso_de_medicacion_actual) @if($cita->anexo7d->uso_de_medicacion_actual=='0')   x @endif @endisset</td>
    </tr>
  </table>

  <table style="margin-top:5px;">
    <tr>
      <td width="100%"  style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:5px;" align="justify">
          Por lo que certifico que EL/LA paciente se encuentra APTO(x) para ascender a grandes altítudes,
          sin embargo, no aseguramos la respuesta durante el ascenso ni durante su permanencia.
      </td>

    </tr>
    <tr>
      <td style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;">Observaciones:</td>
    </tr>
    <tr>
      <td  style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;overflow:hidden;height:70px;">

      </td>
    </tr>
  </table>

  <table style="margin-top:10px;">
    <tr>
      <td width="100%" colspan="2" style="background: RGBA(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;">&nbsp;DATOS DEL MEDICO</td>
    </tr>

  </table>
  <table style="margin-top:5px;">
    <tr>
      <td align="left" width="30%" style="background: RGBA(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">&nbsp; DIRECCION</td>
      <td align="center" width="80%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">&nbsp; </td>
    </tr>
  </table>
  <table style="margin-top:5px;">
    <tr>
      <td align="left" width="30%" style="background: RGBA(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">&nbsp; APELLIDOS Y NOMBRES</td>
      <td align="center" width="80%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);">&nbsp; </td>
    </tr>
  </table>
  <table style="margin-top:3px;">
    <tr >
      <td width="5%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;CMP</strong></td>
      <td width="15%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;</strong></td>
      <td width="15%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;FECHA</strong></td>
      <td width="15%" style="font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;</strong></td>
    </tr>
  </table>
  <table style="margin-top:3px;">
      <tr>
        <td style="overflow:hidden;height:70px;">

        </td>
      </tr>
      <tr>
        <td align="center" style="font-size:x-small">
          FIRMA Y SELLO
        </td>
      </tr>
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
