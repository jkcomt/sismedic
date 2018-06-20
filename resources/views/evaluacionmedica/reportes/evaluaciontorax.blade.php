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
    *{
      /* padding-top: 0;
      padding-bottom: 0;
      margin-top: 0;
      margin-bottom: 0; */
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
        font-size: xx-small;
        border-bottom: 0.45px solid  rgba(0,0,0,0.1);
        border-top:0.45px solid rgba(0,0,0,0.1);
        border-left:0.45px solid rgba(0,0,0,0.1);
        border-right:0.45px solid rgba(0,0,0,0.1);
    }
    .tdcabeza{
      background-color: rgba(0,0,0,0.1);
      font-weight: bold;
      font-size: xx-small;
      padding: 1px;
      border-bottom: 0.45px solid  rgba(0,0,0,0.1);
      border-left:0.45px solid rgba(0,0,0,0.1);
      border-right:0.45px solid rgba(0,0,0,0.1);
    }
    .td-top{
      border-top:none;
    }

    </style>
</head>
<body>
<div class="container-fluid">
  <h5 class="font-verdana center">FORMULARIO DE INFORME RADIOGRÁFICO CON</h5>
  <h5 class="font-verdana center">  METODOLOGIA OIT</h5>

  <table width="100%">
    <tr>
      <td width="10%" class="tdcuerpo" style="border-right:none;"><img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" style="padding:1px" width="80px" height="100px"></td>
      <td width="60%" class="tdcuerpo" style="border-left:none;border-right:none;"> <h6 style="font-family: Verdana, Geneva, sans-serif;"> CIABU MEDICAL CENTER <br>Consultores de Salud Ocupacional </h6> </td>
      <td width="30%" class="tdcuerpo" style="border-left:none;">
      </td>
    </tr>
  </table>
<table width="100%">
  <tr>
      <td class="font-verdana tdcabeza" align="left"  width="10%" >PLACA N°</td>
      <td class="font-verdana tdcuerpo td-top" align="center" width="10%" >{{$cita->Torax->numero_placa}}</td>
      <td class="font-verdana tdcabeza" align="left"  width="10%" >HCL </td>
      <td class="font-verdana tdcuerpo td-top" align="center" width="10%" ></td>
      <td class="font-verdana tdcabeza" align="left"  width="20%" >LECTOR </td>
      <td class="font-verdana tdcuerpo td-top" align="center" width="40%">{{$cita->Torax->personalLeyoPlaca->nombres}}</td>
    </tr>
    <tr>
      <td class="font-verdana tdcabeza" align="left"  width="10%">DNI </td>
      <td class="font-verdana tdcuerpo td-top" align="center" width="10%" >{{$cita->paciente->num_dni}}</td>
      <td class="font-verdana tdcabeza" align="left"  width="10%">EDAD </td>
      <td class="font-verdana tdcuerpo td-top" align="center" width="10%" >    {{Carbon\Carbon::parse($cita->paciente->fecha_nacimiento)->age.' años'}}</td>
      <td class="font-verdana tdcabeza" align="left" width="20%">APELLIDOS Y NOMBRES </td>
      <td class="font-verdana tdcuerpo td-top" align="center" width="40%"> {{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}} </td>
    </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcabeza" align="left"  width="10%">FECHA DE LECTURA </td>
    <td class="font-verdana tdcuerpo td-top" align="center" width="10%" ></td>
    <td class="font-verdana tdcabeza" align="left"  width="10%">FECHA DE RADIOGRAFIA </td>
    <td class="font-verdana tdcuerpo td-top" align="center" width="10%" >{{$cita->Torax->fecha_registro}} </td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcabeza">I.CALIDAD RADIOGRAFIA</td>
    <td class="font-verdana tdcuerpo">
          <table>
              <tr>
                <td class="font-verdana tdcuerpo">1</td>
                <td class="font-verdana tdcuerpo">BUENA</td>
                <td class="font-verdana tdcuerpo" align="center" style="border-right:none;font-weight:bold;">@if($cita->Torax->calidad=='1') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif</td>
              </tr>
              <tr>
                <td class="font-verdana tdcuerpo">2</td>
                <td class="font-verdana tdcuerpo">ACEPTABLE</td>
              <td class="font-verdana tdcuerpo"  align="center"style="border-right:none;font-weight:bold;">@if($cita->Torax->calidad=='2') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif </td>
              </tr>
              <tr >
                <td class="font-verdana tdcuerpo">3</td>
                <td class="font-verdana tdcuerpo">BAJA CALIDAD</td>
                    <td class="font-verdana tdcuerpo" align="center" style="border-right:none;font-weight:bold;">@if($cita->Torax->calidad=='3') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif </td>
              </tr>
              <tr>
                <td class="font-verdana tdcuerpo">4</td>
                <td class="font-verdana tdcuerpo">INACEPTABLE</td>
                <td class="font-verdana tdcuerpo" align="center" style="border-right:none;font-weight:bold;">@if($cita->Torax->calidad=='4') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif </td>
              </tr>
          </table>
    </td>
    <td class="font-verdana tdcuerpo">CAUSAS</td>

      <td>
        <table>
          <tr>
            <td class="font-verdana tdcuerpo">1</td>
            <td class="font-verdana tdcuerpo">SOBREEXPOSICIÓN</td>
            <td class="font-verdana tdcuerpo" align="center" style="border-right:none;font-weight:bold;">@if($cita->Torax->causa=='1') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif</td>
            <td class="font-verdana tdcuerpo">5</td>
            <td class="font-verdana tdcuerpo">ESCAPULAS</td>
            <td class="font-verdana tdcuerpo" align="center" style="font-weight:bold;" >@if($cita->Torax->causa=='5') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif</td>
          </tr>
          <tr>
            <td class="font-verdana tdcuerpo">2</td>
            <td class="font-verdana tdcuerpo">SUBEXPOSICION</td>
            <td class="font-verdana tdcuerpo" align="center" style="border-right:none;">@if($cita->Torax->causa=='2') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif</td>
            <td class="font-verdana tdcuerpo">6</td>
            <td class="font-verdana tdcuerpo">ARTEFACTO</td>
            <td class="font-verdana tdcuerpo" align="center" style="font-weight:bold;">@if($cita->Torax->causa=='6') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif</td>
          </tr>
          <tr>
            <td class="font-verdana tdcuerpo">3</td>
            <td class="font-verdana tdcuerpo">POSICIÓN CENTRADO</td>
            <td class="font-verdana tdcuerpo" align="center" style="border-right:none;">@if($cita->Torax->causa=='3') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif</td>
            <td class="font-verdana tdcuerpo">7</td>
            <td class="font-verdana tdcuerpo">OTROS</td>
            <td class="font-verdana tdcuerpo" align="center" style="font-weight:bold;">@if($cita->Torax->causa=='7') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif </td>
          </tr>
          <tr>
            <td class="font-verdana tdcuerpo">4</td>
            <td class="font-verdana tdcuerpo">INSPIRACIÓN INSUFICIENTE</td>
            <td class="font-verdana tdcuerpo" align="center" style="font-weight:bold;">@if($cita->Torax->causa=='4') x @else &nbsp; &nbsp; &nbsp; &nbsp; @endif</td>
            <td class="font-verdana tdcuerpo">&nbsp;</td>
            <td class="font-verdana tdcuerpo">&nbsp;</td>
              <td class="font-verdana tdcuerpo">&nbsp; &nbsp; </td>
          </tr>
        </table>
      </td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcabeza td-top" width="24%">COMENTARIOS SOBRE DEFECTOS TÉCNICOS</td>
    <td class="font-verdana tdcuerpo td-top">{{$cita->Torax->comentarios_radiografia}} </td>
  </tr>
</table>
<table width="100%">
 <tr>
   <td class="font-verdana tdcabeza td-top " align="center" style="font-size:xx-small;padding:2px;font-weight:bold;">II. ANORMALIDADES PARENQUIMATOSAS (si NO hay anormalidades parenquimatosas pase a III. Pleuras)</td>
 </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center" >2.1 Zonas Afectadas (marque Todas las Zonas afectadas)</td>
    <td class="font-verdana tdcuerpo td-top " align="center" >2.2 Profusión (opacidades pequeñas)(escala de 12 puntos)(consulte las radiografias estándar-marque la subcategoría de profusión)</td>
    <td class="font-verdana tdcuerpo td-top " align="center" >2.3 Forma y Tamaño: (Consulte las radiografias estándar, se requieren dos símbolos; marque un primario y un secundario)</td>
    <td class="font-verdana tdcuerpo td-top " align="center" >2.4 Opacidades grandes (Marque 0 si no hay ninguna o marque A, B o C)</td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center"></td>
      <td class="font-verdana tdcuerpo td-top " align="center">Der.</td>
      <td class="font-verdana tdcuerpo td-top " align="center">Izq.</td>
      <td class="font-verdana tdcuerpo td-top " align="center">0/-</td>
      <td class="font-verdana tdcuerpo td-top " align="center">0/0</td>
      <td class="font-verdana tdcuerpo td-top " align="center">0/1</td>
      <td class="font-verdana tdcuerpo td-top " colspan="2" align="center">PRIMARIA</td>
      <td class="font-verdana tdcuerpo td-top " colspan="2"  align="center">SECUNDARIA</td>
      <td class="font-verdana tdcuerpo td-top " align="center">0</td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center">SUPERIOR</td>
    <td class="font-verdana tdcuerpo td-top " align="center" style="font-weight:bold;">@if($cita->Torax->zona_afectada_superior_derecha=='1') x @else &nbsp; &nbsp; @endif </td>
    <td class="font-verdana tdcuerpo td-top " align="center" style="font-weight:bold;">@if($cita->Torax->zona_afectada_superior_izquierda=='1') x @else &nbsp; &nbsp; @endif </td>
    <td class="font-verdana tdcuerpo td-top " align="center">1/0</td>
    <td class="font-verdana tdcuerpo td-top " align="center">1/1</td>
    <td class="font-verdana tdcuerpo td-top " align="center">1/2</td>
    <td class="font-verdana tdcuerpo td-top " align="center">p</td>
    <td class="font-verdana tdcuerpo td-top " align="center">s</td>
    <td class="font-verdana tdcuerpo td-top " align="center">p</td>
    <td class="font-verdana tdcuerpo td-top " align="center">s</td>
    <td class="font-verdana tdcuerpo td-top " align="center">A</td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center">MEDIO</td>
    <td class="font-verdana tdcuerpo td-top " align="center" style="font-weight:bold;">@if($cita->Torax->zona_afectada_media_derecha=='1') x @else &nbsp; &nbsp; @endif</td>
    <td class="font-verdana tdcuerpo td-top " align="center" style="font-weight:bold;">@if($cita->Torax->zona_afectada_media_izquierda=='1') x @else &nbsp; &nbsp; @endif</td>
    <td class="font-verdana tdcuerpo td-top " align="center">2/1</td>
    <td class="font-verdana tdcuerpo td-top " align="center">2/2</td>
    <td class="font-verdana tdcuerpo td-top " align="center">2/3</td>
    <td class="font-verdana tdcuerpo td-top " align="center">q</td>
    <td class="font-verdana tdcuerpo td-top " align="center">t</td>
    <td class="font-verdana tdcuerpo td-top " align="center">q</td>
    <td class="font-verdana tdcuerpo td-top " align="center">t</td>
    <td class="font-verdana tdcuerpo td-top " align="center">B</td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center">INFERIOR</td>
    <td class="font-verdana tdcuerpo td-top " align="center" style="font-weight:bold;">@if($cita->Torax->zona_afectada_baja_derecha=='1') x @else &nbsp; &nbsp; @endif</td>
    <td class="font-verdana tdcuerpo td-top " align="center" style="font-weight:bold;">@if($cita->Torax->zona_afectada_baja_izquierda=='1') x @else &nbsp; &nbsp; @endif</td>
    <td class="font-verdana tdcuerpo td-top " align="center">3/2</td>
    <td class="font-verdana tdcuerpo td-top " align="center">3/3</td>
    <td class="font-verdana tdcuerpo td-top " align="center">3/+</td>
    <td class="font-verdana tdcuerpo td-top " align="center">r</td>
    <td class="font-verdana tdcuerpo td-top " align="center">u</td>
    <td class="font-verdana tdcuerpo td-top " align="center">r</td>
    <td class="font-verdana tdcuerpo td-top " align="center">u</td>
    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp; C &nbsp; </td>
  </tr>

</table>
<table width="100%">
 <tr>
   <td class="font-verdana tdcabeza td-top "  width="80%" align="center" style="font-size:xx-small;padding:2px;font-weight:bold;">III. ANORMALIDADES PLEURALES (si NO hay anormalidades pase a simbolos)</td>
   <td class="font-verdana tdcuerpo td-top " width="10%">   <div style="display:inline;padding:2px;margin-left:10%;">
    &nbsp; &nbsp; &nbsp;   SI
    </div>
    <div style="display:inline-block;overflow:hidden;height:15px;margin-top:3px;width:15px;border:0.5px solid rgba(0,0,0,0.65);">
         &nbsp;  X
    </div> </td>
   <td class="font-verdana tdcuerpo td-top "  width="10%">   <div style="display:inline;padding:2px;margin-left:10%;">
      &nbsp; &nbsp; &nbsp;   NO
    </div>
    <div style="display:inline-block;overflow:hidden;height:15px;margin-top:3px;width:15px;border:0.5px solid rgba(0,0,0,0.65);">
         &nbsp;  X
    </div> </td>
</tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo td-top "><strong>3.1 Placas Pleurales</strong>&nbsp; (0=Ninguna, D=Hemitorax derecho,I=Hemitorax Izquierdo)</td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo td-top " rowspan="2">Sitio (Marque las casillas adecuadas)</td>
    <td class="font-verdana tdcuerpo td-top " rowspan="2">Calificación (marque)</td>
    <td class="font-verdana tdcuerpo td-top ">Extensión (pared Toráxica; combinada para placas de perfil y de frente)</td>
    <td class="font-verdana tdcuerpo td-top ">Ancho(opcional)(ancho mínimo exigido: 3 mm)</td>
  </tr>
  <tr>
    <td>
      <table>
        <tr>
          <td class="font-verdana tdcuerpo td-top ">1 &nbsp; </td>
          <td class="font-verdana tdcuerpo td-top "> &lt;  1/4 de la pared lateral del tórax</td>
        </tr>
        <tr>
          <td class="font-verdana tdcuerpo td-top ">2</td>
          <td class="font-verdana tdcuerpo td-top "> Entre 1/4 y 1/2 de la pared lateral del tórax</td>
        </tr>
        <tr>
          <td class="font-verdana tdcuerpo td-top ">3</td>
          <td class="font-verdana tdcuerpo td-top "> &gt;  1/2 de la pared lateral del tórax</td>
        </tr>
      </table>
    </td>
    <td>
      <table>
        <tr>
          <td class="font-verdana tdcuerpo td-top ">1</td>
          <td class="font-verdana tdcuerpo td-top ">De 3 a 5 mm</td>
        </tr>
        <tr>
          <td class="font-verdana tdcuerpo td-top ">2</td>
          <td class="font-verdana tdcuerpo td-top ">De 5 a 10 mm </td>
        </tr>
        <tr>
          <td class="font-verdana tdcuerpo td-top ">3</td>
          <td class="font-verdana tdcuerpo td-top ">Mayor a 10 mm</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcabeza td-top " width="20%" style="text-transform: uppercase;font-weight:bold;">Pared Tóraxica de perfil</td>
      <td class="font-verdana tdcuerpo td-top " width="2.5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="2.5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="2.5%" align="center"> I </td>
      <td class="font-verdana tdcuerpo td-top " width="2.5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="2.5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="2.5%" align="center"> I </td>
      <td class="font-verdana tdcuerpo td-top " width="3%" align="center">&nbsp;   &nbsp; </td>
      <td class="font-verdana tdcuerpo td-top " width="7%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="7%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="7%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="7%" align="center"> I </td>
      <td class="font-verdana tdcuerpo td-top " width="3%" align="center">&nbsp;   &nbsp; </td>
      <td class="font-verdana tdcuerpo td-top " width="11.5%" align="center"> D  </td>
      <td class="font-verdana tdcuerpo td-top " width="11.5%" align="center"> I  </td>
  </tr>
  <tr>
        <td class="font-verdana tdcuerpo td-top " colspan="1">&nbsp;</td>
        <td class="font-verdana tdcuerpo td-top " colspan="3">&nbsp;</td>
        <td class="font-verdana tdcuerpo td-top " colspan="3">&nbsp;</td>
        <td class="font-verdana tdcuerpo td-top " colspan="1">&nbsp;</td>
        <td class="font-verdana tdcuerpo td-top " colspan="2">
          <table>
            <tr>
              <td  class="font-verdana " align="center">1</td><td class="font-verdana " style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">2</td><td align="center" class="font-verdana ">3</td>
            </tr>
          </table>
        </td>
        <td class="font-verdana tdcuerpo td-top " colspan="2">
          <table>
            <tr>
              <td  class="font-verdana " align="center">1</td><td class="font-verdana "  style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">2</td><td class="font-verdana " align="center">3</td>
            </tr>
          </table>
        </td>
        <td class="font-verdana tdcuerpo td-top " colspan="1">&nbsp;</td>
        <td class="font-verdana tdcuerpo td-top " colspan="1">
          <table>
            <tr>
              <td  class="font-verdana   " align="center">1</td><td class="font-verdana   "  style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">2</td><td class="font-verdana " align="center">3</td>
            </tr>
          </table>
        </td>
        <td class="font-verdana tdcuerpo td-top " colspan="1">
          <table>
            <tr>
              <td  class="font-verdana" align="center">1</td><td class="font-verdana "  style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">2</td><td class="font-verdana" align="center">3</td>
            </tr>
          </table>
        </td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcabeza td-top " width="15%" style="text-transform: uppercase;font-weight:bold;">De Frente</td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> I </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> I </td>
      <td class="font-verdana tdcabeza td-top " width="25%" style="text-transform: uppercase;font-weight:bold;">Diafragma</td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> I </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> I </td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcabeza td-top " width="15%" style="text-transform: uppercase;font-weight:bold;">Otro(s) Sitio(s)</td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> I </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> I </td>
      <td class="font-verdana tdcabeza td-top " width="40%" style="text-transform: uppercase;font-weight:bold;">Obliteracion del Angulo  Costofrenico</td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> 0 </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> D </td>
      <td class="font-verdana tdcuerpo td-top " width="5%" align="center"> I </td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo td-top "><strong>3.2 Engrosamiento Difusa de Pleura</strong>&nbsp; (0=Ninguna, D=Hemitorax derecho,I=Hemitorax Izquierdo)</td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcabeza td-top " align="center" colspan="2" style="text-transform: uppercase;font-weight:bold;">Pared Toráxica</td>
    <td class="font-verdana tdcabeza td-top " align="center" style="text-transform: uppercase;font-weight:bold;">Calificación</td>
    <td class="font-verdana tdcabeza td-top " align="center" colspan="4" style="text-transform: uppercase;font-weight:bold;">Extensión</td>
    <td class="font-verdana tdcabeza td-top " align="center" colspan="2" style="text-transform: uppercase;font-weight:bold;">Ancho</td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center">DE PERFIL</td>
    <td class="font-verdana tdcuerpo td-top " align="center">
      <table>
          <tr>
            <td align="center">&nbsp; 0 &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; D &nbsp;</td>
            <td align="center">&nbsp; I &nbsp;</td>
          </tr>
      </table>
    </td>
    <td class="font-verdana tdcuerpo td-top " align="center">
      <table>
          <tr>
            <td align="center">&nbsp; 0 &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; D &nbsp;</td>
            <td align="center">&nbsp; I &nbsp;</td>
          </tr>
      </table>
    </td>
    <td class="font-verdana tdcuerpo td-top " align="center">0</td>
    <td class="font-verdana tdcuerpo td-top " align="center">D</td>
    <td class="font-verdana tdcuerpo td-top " align="center">0</td>
    <td class="font-verdana tdcuerpo td-top " align="center">1</td>
    <td class="font-verdana tdcuerpo td-top " align="center">D</td>
  <td class="font-verdana tdcuerpo td-top " align="center">1</td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center" colspan="3"></td>
    <td class="font-verdana tdcuerpo td-top " align="center" colspan="2">
      <table>
          <tr>
            <td align="center">&nbsp; 1 &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; 2 &nbsp;</td>
            <td align="center">&nbsp; 3 &nbsp;</td>
          </tr>
      </table>

    </td>

    <td class="font-verdana tdcuerpo td-top " align="center" colspan="2">

      <table>
          <tr>
            <td align="center">&nbsp; 1 &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; 2 &nbsp;</td>
            <td align="center">&nbsp; 3 &nbsp;</td>
          </tr>
      </table>

    </td>


    <td class="font-verdana tdcuerpo td-top " align="center">
      <table>
          <tr>
            <td align="center">&nbsp; a &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; b &nbsp;</td>
            <td align="center">&nbsp; c &nbsp;</td>
          </tr>
      </table>

    </td>
    <td class="font-verdana tdcuerpo td-top " align="center">
      <table>
          <tr>
            <td align="center">&nbsp; a &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; b &nbsp;</td>
            <td align="center">&nbsp; c &nbsp;</td>
          </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center">DE FRENTE</td>
    <td class="font-verdana tdcuerpo td-top " align="center">
      <table>
          <tr>
            <td align="center">&nbsp; 0 &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; D &nbsp;</td>
            <td align="center">&nbsp; I &nbsp;</td>
          </tr>
      </table>
    </td>
    <td class="font-verdana tdcuerpo td-top " align="center">
      <table>
          <tr>
            <td align="center">&nbsp; 0 &nbsp;</td>
            <td style="border-left:0.45px solid rgba(0,0,0,0.1);border-right:0.45px solid rgba(0,0,0,0.1);" align="center">&nbsp; D &nbsp;</td>
            <td align="center">&nbsp; I &nbsp;</td>
          </tr>
      </table>
    </td>
    <td class="font-verdana tdcuerpo td-top " align="center" colspan="9">0</td>
</table>


<table width="100%">
 <tr>
   <td class="font-verdana tdcabeza td-top "  width="80%" align="center" style="font-size:xx-small;padding:2px;font-weight:bold;">IV. SIMBOLOS</td>
   <td class="font-verdana tdcuerpo td-top " width="10%">   <div style="display:inline;padding:2px;margin-left:10%;">
    &nbsp; &nbsp; &nbsp;   SI
    </div>
    <div style="display:inline-block;overflow:hidden;height:15px;margin-top:3px;width:15px;border:0.5px solid rgba(0,0,0,0.65);">
         &nbsp;  X
    </div> </td>
   <td class="font-verdana tdcuerpo td-top "  width="10%">   <div style="display:inline;padding:2px;margin-left:10%;">
      &nbsp; &nbsp; &nbsp;   NO
    </div>
    <div style="display:inline-block;overflow:hidden;height:15px;margin-top:3px;width:15px;border:0.5px solid rgba(0,0,0,0.65);">
         &nbsp;  X
    </div> </td>
</tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo td-top ">(Rodee con un circulo la respuesta adecuada; si rodea <strong>od</strong>,escriba a continuación un <strong>COMENTARIO</strong> )</td>
  </tr>
</table>
<table>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center">aa</td>
    <td class="font-verdana tdcuerpo td-top " align="center">at</td>
    <td class="font-verdana tdcuerpo td-top " align="center">ax</td>
    <td class="font-verdana tdcuerpo td-top " align="center">bu</td>
    <td class="font-verdana tdcuerpo td-top " align="center">ca</td>
    <td class="font-verdana tdcuerpo td-top " align="center">cg</td>
    <td class="font-verdana tdcuerpo td-top " align="center">cn</td>
    <td class="font-verdana tdcuerpo td-top " align="center">co</td>
    <td class="font-verdana tdcuerpo td-top " align="center">cp</td>
    <td class="font-verdana tdcuerpo td-top " align="center">cv</td>
    <td class="font-verdana tdcuerpo td-top " align="center">di</td>
    <td class="font-verdana tdcuerpo td-top " align="center">ef</td>
    <td class="font-verdana tdcuerpo td-top " align="center">em</td>
    <td class="font-verdana tdcuerpo td-top " align="center">es</td>
    <td class="font-verdana tdcuerpo td-top " align="center" rowspan="2">od</td>
  </tr>
  <tr>
    <td class="font-verdana tdcuerpo td-top " align="center">fr</td>
    <td class="font-verdana tdcuerpo td-top " align="center">hi</td>
    <td class="font-verdana tdcuerpo td-top " align="center">ho</td>
    <td class="font-verdana tdcuerpo td-top " align="center">id</td>
    <td class="font-verdana tdcuerpo td-top " align="center">ih</td>
    <td class="font-verdana tdcuerpo td-top " align="center">kl</td>
    <td class="font-verdana tdcuerpo td-top " align="center">me</td>
    <td class="font-verdana tdcuerpo td-top " align="center">pa</td>
    <td class="font-verdana tdcuerpo td-top " align="center">pb</td>
    <td class="font-verdana tdcuerpo td-top " align="center">pi</td>
    <td class="font-verdana tdcuerpo td-top " align="center">px</td>
    <td class="font-verdana tdcuerpo td-top " align="center">ra</td>
    <td class="font-verdana tdcuerpo td-top " align="center">rp</td>
    <td class="font-verdana tdcuerpo td-top " align="center">tb</td>
  </tr>
</table>
<table>
    <tr>
          <td class="font-verdana tdcuerpo td-top " align="center">COMENTARIOS</td>
    </tr>
    <tr>
          <td class="font-verdana tdcuerpo td-top " align="center"> <br> <br> </td>
    </tr>
    <tr>
          <td class="font-verdana tdcuerpo td-top " align="center">DIAGNOSTICO</td>
    </tr>
    <tr>
          <td class="font-verdana tdcuerpo td-top " align="center"> <br> <br> </td>
    </tr>
    <tr>
          <td class="font-verdana tdcuerpo td-top " align="center">FIRMA Y SELLO DEL MEDICO</td>
    </tr>
    <tr>
          <td class="font-verdana tdcuerpo td-top " align="center"> <br> <br> </td>
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
