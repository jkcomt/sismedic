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
                <img src="{{asset('img/logo.ico/logo.jpg')}}" alt=""width="60px" height="80px" >
             </td>
             <td  WIDTH="70%" align="center">
                <h4 style="font-family: Verdana, Geneva, sans-serif;"> <strong>INFORME DE EXAMEN MEDICO OCUPACIONAL</strong> </h4>
             </td >
         </tr>
  </table>
  <table>
    <tr>
      <td width="30%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong>&nbsp;&nbsp; CÓDIGO MBM</strong></td>
      <td width="40%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"></td>
      <td width="15%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;&nbsp;FECHA</strong></td>
      <td width="15%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"></td>
    </tr>
  </table>

  <table style="margin-top:5px;">
    <tr>
      <td width="30%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong>&nbsp;&nbsp; PUESTO DE TRABAJO</strong></td>
      <td width="70%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;"></td>
    </tr>


  </table>
  <table style="margin-top:5px;">
    <tr >
      <td width="30%" style="background:rgba(0,0,0,0.1);font-size:x-small;border: 0.5px solid rgba(0,0,0,0.1);padding:1px;"><strong> &nbsp;&nbsp; ESTIMADO SEÑOR(A/ITA)</strong></td>
      <td width="70%" style="border: 0.5px solid rgba(0,0,0,0.1);font-size:x-small;padding:1px;">{{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}}</td>
    </tr>
  </table>
  <table style="margin-top:5px;">
    <tr>
      <td align="justify" width="100%" style="font-size:xx-small;">
        A través del presente le hacemos alcance de los resultados de su <strong>Examen Médico Anual</strong> que incluye una explicación de sus diagnósticos y las recomendaciones que usted debe seguir.
        Si luego de la explicación que el médico le brinde aún tuviese dudas o deseara una mayor ampliación de la información, contactar al correo: <strong>imunoz@pv-zonaremota.com</strong> o a los teléfonos:
         <strong> RPC: 987544836 </strong>   En el caso que  le hayan indicado controles adicionales o evaluaciones con especialistas, usted debe realizarlos a través del Plan Médico MBM en el plazo establecido y
          acercarse con los resultados y/o informes al Centro Médico
      </td>
    </tr>
  </table>

<table style="margin-top:5px;">
  <tr>
    <td  WIDTH="40%" align="left">
      <h6><strong style="font-family: Verdana, Geneva, sans-serif;">RESULTADOS</strong></h6>
    </td >
    <td  WIDTH="60%" align="left">
     <strong style="font-family: Verdana, Geneva, sans-serif;">VALORES REFERENCIALES NORMALES</strong>
    </td >
  </tr>
</table>
<table style="margin-top:-5px;">
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Presión Arterial</td>
    <td width="10%" class="tdresultadosunidad">&nbsp;&nbsp; mm/hora</td>
    <td width="10%" class="tdresultadobd"></td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; Normal menor 120/80, Pre Hipertensión hasta 139/89</td>
  </tr>
</table>
<table style="margin-top:5px;">
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Hemoglobina</td>
    <td width="10%" class="tdresultadosunidad">&nbsp;&nbsp; g/dl</td>
    <td width="10%" class="tdresultadobd">@isset($cita->hemograma->hemoglobina) {{$cita->hemograma->hemoglobina}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; 14 a 18 Varones y 12 a 16 en Mujeres</td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Hemograma</td>
    <td width="10%" class="tdresultadosunidad"></td>
    <td width="10%" class="tdresultadobd"></td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Leucocitos</td>
    <td width="10%" class="tdresultadosunidad"> &nbsp;&nbsp; xmm3</td>
    <td width="10%" class="tdresultadobd">@isset($cita->hemograma->leucocitos) {{$cita->hemograma->leucocitos}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; V.S.G.</td>
    <td width="10%" class="tdresultadosunidad">&nbsp;&nbsp; mm/hora</td>
    <td width="10%" class="tdresultadobd">@isset($cita->hemograma->vsg) {{$cita->hemograma->vsg}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; Menor que 10 para varones y menor que 20 para mujeres </td>
  </tr>
</table>

<table style="margin-top:5px;">
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Glucosa</td>
    <td width="10%" class="tdresultadosunidad"> &nbsp;&nbsp; mg/dl</td>
    <td width="10%" class="tdresultadobd">@isset($cita->glucosa->glucosa) {{$cita->glucosa->glucosa}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; 74 a 106</td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Creatinina</td>
    <td width="10%" class="tdresultadosunidad">&nbsp;&nbsp; mg/dl</td>
    <td width="10%" class="tdresultadobd">@isset($cita->creatinina->creatinina) {{$cita->creatinina->creatinina}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; 0.7 a 1.3 Varones y 0.6 a 1.1 Mujeres</td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados"> &nbsp;&nbsp; Acido Úrico</td>
    <td width="10%" class="tdresultadosunidad"> &nbsp;&nbsp; mg/dl</td>
    <td width="10%" class="tdresultadobd"> @isset($cita->acidoUrico->acido_urico) {{$cita->acidoUrico->acido_urico}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; 3.5 a 7.2 Varones y 2.6 a 6.0 Mujeres</td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados"> &nbsp;&nbsp; GGTP</td>
    <td width="10%" class="tdresultadosunidad"> &nbsp;&nbsp; U/l</td>
    <td width="10%" class="tdresultadobd"> @isset($cita->gamma->ggt) {{$cita->gamma->ggt}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; 11 a 50 en varones, 7 a 32 en mujeres</td>
  </tr>
</table>


<table style="margin-top:5px;">
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Colesterol Total</td>
    <td width="10%" class="tdresultadosunidad"> &nbsp;&nbsp; mg/dl</td>
    <td width="10%" class="tdresultadobd">@isset($cita->colesterolTotal->colesterol_total) {{$cita->colesterolTotal->colesterol_total}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; Menor que 200</td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados"> &nbsp;&nbsp; LDL Colesterol</td>
    <td width="10%" class="tdresultadosunidad"> &nbsp;&nbsp; mg/dl</td>
    <td width="10%" class="tdresultadobd"> @isset($cita->colesterolLdl->colesterol_ldl) {{$cita->colesterolLdl->colesterol_ldl}} @endisset </td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados"> &nbsp;&nbsp; HDL Colesterol</td>
    <td width="10%" class="tdresultadosunidad">&nbsp;&nbsp;mg/dl</td>
    <td width="10%" class="tdresultadobd"> @isset($cita->colesterolHdl->colesterol_hdl) {{$cita->colesterolHdl->colesterol_hdl}} @endisset </td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; Mayor que 40 y menor que 60</td>
  </tr>
  <tr>
    <td width="20%" class="tdresultados">&nbsp;&nbsp; Triglicéridos</td>
    <td width="10%" class="tdresultadosunidad">&nbsp;&nbsp; mg/dl</td>
    <td width="10%" class="tdresultadobd"> @isset($cita->triglicerido->triglicerido) {{$cita->triglicerido->triglicerido}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; Menor Igual que 150</td>
  </tr>
</table>

<table style="margin-top:5px;">
  <tr>
    <td width="30%" class="tdresultados">&nbsp;&nbsp;Sífilis</td>
    <td width="10%" class="tdresultadobd"> @isset($cita->sifilis->resultado) {{$cita->sifilis->resultado}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; Negativo</td>
  </tr>
  <tr>
    <td width="30%" class="tdresultados"> &nbsp;&nbsp; PSA</td>
    <td width="10%" class="tdresultadobd">  @isset($cita->psa->psa_descripcion) {{$cita->psa->psa_descripcion}} @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp;Negativo</td>
  </tr>
</table>
<table style="margin-top:5px;">
  <tr>
    <td width="30%" class="tdresultados">&nbsp;&nbsp;Ex. de Orina</td>
    <td width="55%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
    <td width="15%">&nbsp;&nbsp; </td>
  </tr>
  <tr>
    <td width="30%" class="tdresultados">&nbsp;&nbsp;Rx. Torax</td>
    <td width="55%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
    <td width="15%" style="font-size:xx-small;">Nomenclatura OIT </td>
  </tr>
  <tr>
    <td width="30%" class="tdresultados">&nbsp;&nbsp;Audiometría</td>
    <td width="55%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
    <td width="15%">&nbsp;&nbsp; </td>
  </tr>
  <tr>
    <td width="30%" class="tdresultados">&nbsp;&nbsp;Espirometría</td>
    <td width="55%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
    <td width="15%">&nbsp;&nbsp; </td>
  </tr>
  <tr>
    <td width="30%" class="tdresultados">&nbsp;&nbsp;Electrocardiograma</td>
    <td width="55%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
    <td width="15%">&nbsp;&nbsp; </td>
  </tr>

</table>


<table style="margin-top:5px;">
  <tr>
    <td width="30%" class="tdresultados">&nbsp;&nbsp; ICC</td>
    <td width="10%" class="tdresultadobd"> @isset($cita->funcionVital->perimetro_cadera)  @isset($cita->funcionVital->perimetro_abdominal) {{$funcionVital->perimetro_abdominal /($funcionVital->perimetro_cadera*1)}} @endisset @endisset </td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; 0.85 a 1 para varones, 0.75 a 0.9 para mujeres</td>
  </tr>
  <tr>
    <td width="30%" class="tdresultados"> &nbsp;&nbsp; IMC</td>
    <td width="10%" class="tdresultadobd">@isset($cita->funcionVital->talla)  @isset($cita->funcionVital->peso) {{round( $funcionVital->peso/($funcionVital->talla * $funcionVital->talla), 0, PHP_ROUND_HALF_UP)}} @endisset @endisset</td>
    <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp;Normal: (18.5 – 24.9), Sobrepeso: (25 – 29.9)</td>
  </tr>
  <tr>
    <td width="30%" > &nbsp;&nbsp; </td>
    <td width="10%" ></td>
    <td width="60%" style="font-size:xx-small;">&nbsp;&nbsp;Obesidad: (I Grado = 30 – 34.9) (II Grado = 35 – 39.9) (III Grado >= 40)</td>
  </tr>
</table>
<table style="margin-top:-5px;">
  <tr>
    <td  WIDTH="100%" colspan="2" align="left">
    <h6>  &nbsp;<strong style="font-family: Verdana, Geneva, sans-serif;">DIAGNÓSTICOS, RECOMENDACIONES Y CONTROLES</strong></h6>
    </td >
  </tr>
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:15px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:15px;"></td>
  </tr>
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:15px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:15px;"></td>
  </tr>
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:15px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:15px;"></td>
  </tr>
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:15px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:15px;"></td>
  </tr>
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:15px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:15px;"></td>
  </tr>
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:15px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:15px;"></td>
  </tr>
</table>
<table style="margin-top:5px;">
<tr>
  <td width="30%" style="border:0.1px solid  rgba(0,0,0,0.3);" align="center"><strong>APTITUD</strong></td>
  <td width="70%" style="border:0.1px solid  rgba(0,0,0,0.3);" ></td>
</tr>
</table>

<table style="margin-top:5px;">
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:50px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:50px;"></td>
  </tr>
  <tr>
    <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3); overflow:hidden;height:15px;"></td>
      <td WIDTH="50%" style="border:0.1px solid  rgba(0,0,0,0.3);overflow:hidden;height:15px;font-size:xx-small;" align="center" ><strong>Firma del Trabajador</strong><br>
(Declaro haber recibido una explicación adecuada del presente informe que me ha permitido comprender su contenido)
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
