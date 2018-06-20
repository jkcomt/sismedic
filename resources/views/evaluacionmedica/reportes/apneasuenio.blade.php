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
      margin-top: 0;
      margin-bottom: 0;
      padding: 0;
    } */
     table{

      width: 690px;
    }

    .tdheader{
      background: rgba(0,0,0,0.05);

      font-size:x-small;
    }
    .tdheight{
      overflow: hidden;
      height: 75px;
    }
    .tdrow{
    font-size:x-small;
    border-left:0.5px solid rgba(0,0,0,0.3);
      border-right:0.5px solid rgba(0,0,0,0.3);
    border-bottom:0.5px solid rgba(0,0,0,0.3);
    }

    </style>
</head>
<body>
<div class="container-fluid">

  <div class="header">
    <u>DEPARTAMENTO DE SALUD OCUPACIONAL </u> <br>(Detección de Síndrome de Ápnea de Sueño)
  </div>
  <div class="header">
    <u>FICHA DE DETECCIÓN DE S.A.S. </u> <br>(Conductores de maquinaria pesada, transporte de personal, transporte de materiales peligrosos)
  </div>
  <br>

  <table style="font-size:x-small;">
    <tr>
      <td  align="left" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;" ><strong> 1.- FILACION </strong></td>
    </tr>
  </table>
  <table>
    <tr>
      <td  class="tdrow"width="20%"> <strong>  Apellidos y Nombres </strong>  </td>
      <td  class="tdrow" width="50%" style="padding:1px;">    {{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}}   </td>
      <td  class="tdrow"width="10%" align="center"><strong>  Fecha </strong></td>
      <td  class="tdrow" width="20%" style="color:red;font-size:xx-small;">que fecha se muestra</td>
    </tr>
  </table>
  <table>
    <tr>
      <td class="tdrow" width="20%">  <strong>DNI : </strong>   {{$cita->paciente->num_dni}} </td>
      <td class="tdrow" width="25%"> <strong>  EDAD : </strong>  {{\Carbon\Carbon::parse($cita->paciente->fecha_nacimiento)->age.' años'}}  </td>
      <td class="tdrow" width="15%" align="center">  <strong>SEXO</strong> </td>
      <td class="tdrow" width="10%" align="center"><strong>Masculino</strong></td>
      <td class="tdrow" align="center" width="10%">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='masculino') <strong>x</strong> @endif @endisset</td>
      <td class="tdrow" width="10%" align="center"><strong>Femenino</strong> </td>
      <td class="tdrow" align="center" width="10%">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='femenino') <strong>x</strong> @endif  @endisset</td>
    </tr>
  </table>
    <table>
    <tr>
      <td class="tdrow"width="20%">   <strong> Área de Trabajo</strong></td>
      <td class="tdrow"width="80%"> {{$cita->paciente->comentarios}} </td>
    </tr>
    <tr>
      <td class="tdrow"width="20%">    <strong>Empresa</strong> </td>
      <td class="tdrow"width="80%"></td>
    </tr>
  </table>
    <table>
    <tr>
      <td class="tdrow"width="20%"> <strong>Trabaja de Noche</strong> </td>
      <td class="tdrow"width="5%" align="center">SI</td>
        <td class="tdrow"width="5%" align="center"> @isset($cita->ApneaSuenio->trabajo_noche) @if($cita->ApneaSuenio->trabajo_noche=='1') <strong>x</strong>  @endif @endisset</td>
      <td class="tdrow"width="5%" align="center">NO </td>
          <td class="tdrow"width="5%" align="center"> @isset($cita->ApneaSuenio->trabajo_noche) @if($cita->ApneaSuenio->trabajo_noche=='0') <strong>x</strong>  @endif @endisset</td>
      <td class="tdrow" width="20%" align="center">Dias de Trabajo</td>
        <td class="tdrow"width="10%">@isset($cita->ApneaSuenio->num_dias_trabajados) {{$cita->ApneaSuenio->num_dias_trabajados}} @endisset</td>
      <td class="tdrow"width="20%" align="center">Dias de Descanso</td>
      <td class="tdrow"width="10%">@isset($cita->ApneaSuenio->num_dias_trabajados) {{$cita->ApneaSuenio->num_dias_trabajados}} @endisset</td>

    </tr>
  </table>
  <table>
    <tr>
      <td  class="tdrow" width="70%">Años que Trabaja en dicho horario de Trabajo   @isset($cita->ApneaSuenio->anios_trabaja_horario) {{$cita->ApneaSuenio->anios_trabaja_horario}} @endisset </td>
      <td class="tdrow" width="30%"></td>
    </tr>
  </table>

  <table style="">
    <tr>
      <td colspan="9" align="left" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"><strong>2.- ANTECEDENTES PERSONALES</strong> </td>
    </tr>
  </table>
    <table style="">
    <tr>
      <td width="20%" class="tdrow"   ><strong>Ápnea de sueño</strong></td>
      <td width="5%" class="tdrow"     align="center">SI</td>
      <td width="5%" class="tdrow"     align="center">@isset($cita->ApneaSuenio->apnea_suenio) @if($cita->ApneaSuenio->apnea_suenio=='1') <strong>x</strong>  @endif @endisset</td>
      <td width="5%" class="tdrow"     align="center">NO</td>
      <td width="5%" class="tdrow"     align="center">@isset($cita->ApneaSuenio->apnea_suenio) @if($cita->ApneaSuenio->apnea_suenio=='0') <strong>x</strong> @endif @endisset</td>
      <td width="20%" class="tdrow"   ><strong>Ultimo Control</strong>  @isset($cita->ApneaSuenio->ctrl_apnea)  {{$cita->ApneaSuenio->ctrl_apnea}}  @endisset </td>
      <td width="40%" class="tdrow"   > @isset($cita->ApneaSuenio->ctrl_apnea)  {{$cita->ApneaSuenio->ctrl_apnea}}  @endisset </td>
    </tr>
    <tr>
      <td width="20%" class="tdrow"   ><strong>HTA</strong></td>
      <td width="5%" class="tdrow"    align="center">SI</td>
      <td width="5%" class="tdrow"    align="center">@isset($cita->ApneaSuenio->apnea_suenio) @if($cita->ApneaSuenio->apnea_suenio=='1') <strong>x</strong>  @endif @endisset</td>
      <td width="5%" class="tdrow"    align="center">NO</td>
      <td width="5%" class="tdrow"    align="center">@isset($cita->ApneaSuenio->apnea_suenio) @if($cita->ApneaSuenio->apnea_suenio=='0') <strong>x</strong> @endif @endisset</td>
      <td width="20%" class="tdrow"   ><strong>Mediciaión </strong>  @isset($cita->ApneaSuenio->ctrl_apnea)  {{$cita->ApneaSuenio->ctrl_apnea}}  @endisset </td>
      <td width="40%" class="tdrow"   > @isset($cita->ApneaSuenio->ctrl_apnea)  {{$cita->ApneaSuenio->ctrl_apnea}}  @endisset </td>
    </tr>
    </table>
    <table>
    <tr>
      <td width="38%"  class="tdrow" ><strong>Polisomnografia (PSG) realizada alguna vez;</strong></td>
      <td width="5%" align="center" class="tdrow">SI </td>
      <td width="5%" align="center" class="tdrow"> @isset($cita->ApneaSuenio->psg) @if($cita->ApneaSuenio->psg=='1') <strong>x</strong> @endif @endisset </td>
      <td width="5%" align="center"  class="tdrow">NO</td>
      <td align="center" width="5%" class="tdrow">@isset($cita->ApneaSuenio->psg) @if($cita->ApneaSuenio->psg=='0') <strong>x</strong>  @endif @endisset</td>
      <td width="17%"  class="tdrow"><strong>Fecha de ultima PSG</strong></td>
        <td width="20%"   class="tdrow">@isset($cita->ApneaSuenio->ctrl_psg) {{$cita->ApneaSuenio->ctrl_psg}} @endisset</td>
    </tr>
  </table>
  <table>
     <tr>
        <td  width="90%" align="left" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;">Clasificación del (los) “Choques” o accidentes vehiculares del postulante (marque solo una categoría) </td>
        <td  width="10%" align="center" class="tdheader"  style="border: 1px solid rgba(0,0,0,0.4);padding:1px;">SI</td>
        <td  width="10%" align="center" class="tdheader"   style="border: 1px solid rgba(0,0,0,0.4);padding:1px;">NO</td>
      </tr>
       <tr>
          <td  width="90%" align="left"  class="tdrow"  ><strong>Criterio 1:</strong> Se “cabeceo” y por ello le ocurrió un accidente (incidente) con un vehículo (alguna vez) </td>
          <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_uno_valor) @if($cita->ApneaSuenio->criterio_uno_valor=='1') <strong>x</strong>  @endif @endisset</td>
          <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_uno_valor) @if($cita->ApneaSuenio->criterio_uno_valor=='0') <strong>x</strong>  @endif @endisset</td>
        </tr>
      </table>
      <table>
        <tr>
           <td  width="100%" align="left"  class="tdrow"  ><strong>Criterio 2:</strong>  (o mas es positivo) </td>
           {{-- <td  width="10%" align="center"  class="tdrow" ></td>
           <td  width="10%" align="center"   class="tdrow" ></td> --}}
         </tr>
      </table>
      <table>
         <tr>
            <td  width="90%" align="left"   class="tdrow" > Accidente ocurrido entre las 0 horas y las 7 de la mañana o entre las 13 y 15 horas (tarde) </td>
            <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor1) @if($cita->ApneaSuenio->criterio_dos_valor1=='1') x  @endif @endisset</td>
            <td  width="10%" align="center" class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor1) @if($cita->ApneaSuenio->criterio_dos_valor1=='0') x  @endif @endisset</td>
          </tr>
          <tr>
             <td  width="90%" align="left"  class="tdrow"  > No hubo evidencia de maniobra evasiva del chofer para evitar la colisión. </td>
             <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor2) @if($cita->ApneaSuenio->criterio_dos_valor2=='1') x  @endif @endisset</td>
             <td  width="10%" align="center" class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor2) @if($cita->ApneaSuenio->criterio_dos_valor2=='0') x  @endif @endisset</td>
           </tr>
           <tr>
              <td  width="90%" align="left"  class="tdrow"  > Colisión frontal del vehículo </td>
              <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor3) @if($cita->ApneaSuenio->criterio_dos_valor3=='1') x  @endif @endisset</td>
              <td  width="10%" align="center"  class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor3) @if($cita->ApneaSuenio->criterio_dos_valor3=='0') x  @endif @endisset</td>
            </tr>
            <tr>
               <td  width="90%" align="left"  class="tdrow"   >Vehículo que invadió el otro carril o se desvió sin causa aparente </td>
               <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor4) @if($cita->ApneaSuenio->criterio_dos_valor4=='1') x  @endif @endisset</td>
               <td  width="10%" align="center" class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor4) @if($cita->ApneaSuenio->criterio_dos_valor4=='0') x  @endif @endisset</td>
             </tr>
             <tr>
                <td  width="90%" align="left" class="tdrow"   >La unidad cayó a un barranco, río o choco contra un poste, puente, edificio u otra estructura estática sin causa aparente </td>
                <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor5) @if($cita->ApneaSuenio->criterio_dos_valor5=='1') x  @endif @endisset</td>
                <td  width="10%" align="center" class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor5) @if($cita->ApneaSuenio->criterio_dos_valor5=='0') x  @endif @endisset</td>
              </tr>
              <tr>
                 <td  width="90%" align="left"  class="tdrow"  > Chofer viajaba solo en el vehículo  </td>
                   <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor6) @if($cita->ApneaSuenio->criterio_dos_valor6=='1') x  @endif @endisset</td>
               <td  width="10%" align="center" class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor6) @if($cita->ApneaSuenio->criterio_dos_valor6=='0') x  @endif @endisset</td>
             </tr>
             <tr>
                <td  width="90%" align="left" class="tdrow"   > Chofer no tenia copiloto y cumplía o acababa de terminar una jornada larga de trabajo (más de 8 horas) </td>
                <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor7) @if($cita->ApneaSuenio->criterio_dos_valor7=='1') x  @endif @endisset</td>
                <td  width="10%" align="center" class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor7) @if($cita->ApneaSuenio->criterio_dos_valor7=='0') x  @endif @endisset</td>
              </tr>
            <tr>
               <td  width="90%" align="left" class="tdheader"  style="border: 1px solid rgba(0,0,0,0.4);padding:1px;" >Clasificación del (los) “Choques” o accidentes vehiculares del postulante (marque solo una categoría) </td>
               <td  width="10%" align="center" class="tdheader"style="border: 1px solid rgba(0,0,0,0.4);padding:1px;">SI</td>
               <td  width="10%" align="center" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;">NO</td>
             </tr>
             <tr>
                <td  width="90%" align="left"  class="tdrow"   >Accidente confirmado por Somnolencia (Criterio 1 positivo) </td>
                <td  width="10%" align="center" class="tdrow"  >@isset($cita->ApneaSuenio->clasificacion_valor1) @if($cita->ApneaSuenio->clasificacion_valor1=='1') x  @endif @endisset</td>
                <td  width="10%" align="center" class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor1) @if($cita->ApneaSuenio->clasificacion_valor1=='0') x  @endif @endisset</td>
              </tr>
              <tr>
                 <td  width="90%" align="left"    class="tdrow"   >Accidente con alta sospecha de somnolencia (Criterio 2 positivo) </td>
                 <td  width="10%" align="center"  class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor2) @if($cita->ApneaSuenio->clasificacion_valor2=='1') x  @endif @endisset</td>
                 <td  width="10%" align="center"    class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor2) @if($cita->ApneaSuenio->clasificacion_valor2=='0') x  @endif @endisset</td>
               </tr>
               <tr>
                  <td  width="90%" align="left"      class="tdrow" >Accidente con escasa evidencia/ sospecha por somnolencia (solo 1 ítem de criterio 2) </td>
                  <td  width="10%" align="center"   class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor3) @if($cita->ApneaSuenio->clasificacion_valor3=='1') x  @endif @endisset</td>
                  <td  width="10%" align="center"    class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor3) @if($cita->ApneaSuenio->clasificacion_valor3=='0') x  @endif @endisset</td>
                </tr>
                <tr>
                   <td  width="90%" align="left"    class="tdrow"   >No se dispones de datos suficiente para clasificar el (los) incidentes. </td>
                   <td  width="10%" align="center"   class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor4) @if($cita->ApneaSuenio->clasificacion_valor4=='1') x  @endif @endisset</td>
                   <td  width="10%" align="center"    class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor4) @if($cita->ApneaSuenio->clasificacion_valor4=='0') x  @endif @endisset</td>
                 </tr>
             <tr>
                <td  width="90%" align="left"    class="tdrow"   >Accidente no debido a somnolencia (información suficiente que descarta la somnolencia)</td>
                <td  width="10%" align="center"   class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor5) @if($cita->ApneaSuenio->clasificacion_valor5=='1') x  @endif @endisset</td>
                <td  width="10%" align="center"    class="tdrow" >@isset($cita->ApneaSuenio->clasificacion_valor5) @if($cita->ApneaSuenio->clasificacion_valor5=='0') x  @endif @endisset</td>
              </tr>
  </table>
  <table>
    <tr>
      <td colspan="6" align="left" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"  ><strong>3.	ANTEC. FAMILIAR DE APNEA DEL SUEÑO</strong> </td>
    </tr>
    <tr>
      <td width="5%" class="tdrow" align="center">SI</td>
      <td width="5%"class="tdrow" align="center">@isset($cita->ApneaSuenio->antecedente_faminiliar_apnea) @if($cita->ApneaSuenio->antecedente_faminiliar_apnea=='1') x  @endif @endisset</td>
      <td width="5%" class="tdrow" align="center">NO</td>
      <td width="5%" class="tdrow" align="center">@isset($cita->ApneaSuenio->antecedente_faminiliar_apnea) @if($cita->ApneaSuenio->antecedente_faminiliar_apnea=='0') x  @endif @endisset</td>
      <td width="15%" class="tdrow" align="center">INDIQUE</td>
      <td width="65%" class="tdrow" >@isset($cita->ApneaSuenio->antecedente_faminiliar_apnea_descripcion) {{$cita->ApneaSuenio->antecedente_faminiliar_apnea_descripcion}} @endisset</td>}
    </tr>
  </table>
  <table>
    <tr>
       <td  width="90%" align="left" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"  ><strong>4.	ENTREVISTA AL PACIENTE</strong> </td>
       <td  width="10%" align="center" class="tdheader"style="border: 1px solid rgba(0,0,0,0.4);padding:1px;" >SI</td>
       <td  width="10%" align="center" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;">NO</td>
     </tr>
      <tr>
         <td  width="90%" align="left"  class="tdrow"   >En los ultimo 5 años, su pareja o esposa le ha comentado que ronca al dormir</td>
         <td  width="10%" align="center" class="tdrow" >@isset($cita->ApneaSuenio->entrevista_valor1) @if($cita->ApneaSuenio->entrevista_valor1=='1') x  @endif @endisset</td>
         <td  width="10%" align="center"  class="tdrow" >@isset($cita->ApneaSuenio->entrevista_valor1) @if($cita->ApneaSuenio->entrevista_valor1=='0') x  @endif @endisset</td>
       </tr>
       <tr>
          <td  width="90%" align="left"   class="tdrow" >En los últimos 5 años, su pareja o esposa le ha comentado que  hace ruidos al respirar mientras duerme</td>
          <td  width="10%" align="center" class="tdrow">@isset($cita->ApneaSuenio->entrevista_valor2) @if($cita->ApneaSuenio->entrevista_valor2=='1') x  @endif @endisset</td>
          <td  width="10%" align="center"  class="tdrow">@isset($cita->ApneaSuenio->entrevista_valor2) @if($cita->ApneaSuenio->entrevista_valor2=='0') x  @endif @endisset</td>
        </tr>
      <tr>
         <td  width="90%" align="left"  class="tdrow"  >En los últimos 5 años, su pareja o esposa le ha comentado que deja de respirar cuando duerme (pausa respiratoria)</td>
         <td  width="10%" align="center" class="tdrow"> @isset($cita->ApneaSuenio->entrevista_valor3) @if($cita->ApneaSuenio->entrevista_valor3=='1')  x @endif @endisset </td>
         <td  width="10%" align="center"  class="tdrow"> @isset($cita->ApneaSuenio->entrevista_valor3) @if($cita->ApneaSuenio->entrevista_valor3=='0') x @endif @endisset </td>
       </tr>
       <tr>
          <td  width="90%" align="left"   class="tdrow" >Comparado con sus compañeros, usted siente que tiene más sueño o cansancio que ellos mientras trabaja</td>
          <td  width="10%" align="center" class="tdrow">@isset($cita->ApneaSuenio->entrevista_valor4) @if($cita->ApneaSuenio->entrevista_valor4=='1') x  @endif @endisset</td>
          <td  width="10%" align="center" class="tdrow">@isset($cita->ApneaSuenio->entrevista_valor4) @if($cita->ApneaSuenio->entrevista_valor4=='0') x  @endif @endisset</td>
        </tr>
  </table>
    <table>
      <tr>
        <td width="55%" align="justify"class="tdrow">Declaro que las respuestas son ciertas según mi leal saber y entender. En caso de ser requeridos, los resultados del examen medico pueden ser revelados en términos generales, al Departamento de Salud Ocupacional de la compañía. Los resultados pueden ser enviados a mi médico particular de ser considerado necesario. </td>
        <td width="22.5%" class="tdrow">
          <div class=""  style="text-align:center;font-size: xx-small;margin-top:6%;">
            Firma del trabajador o postulante <br>dni
          </div>
      </td>
        <td width="22.5%" class="tdrow">
          <div class="" style="text-align:center; font-size: xx-small;margin-top:5%;">
            Índice Derecho
          </div>
        </td>
      </tr>

    </table>
<br><br> <br> <br> <br>
    <table>
      <tr>
         <td  width="100%" align="left" class="tdheader"  style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"   ><strong>5.	EXAMEN FISICO</strong> </td>
     </tr>
    </table>
    <table  style="font-size:x-small;text-align:left">
      <tr>
        <td width="30%" class="tdrow">
          <div>
            <div class=""style="display:inline">
                <strong>Peso: </strong>
            </div>
            <div class=""style="display:inline" >
                @isset($cita->ApneaSuenio->peso) {{$cita->ApneaSuenio->peso}} @endisset kg
            </div>
          </div>
        </td>
        <td width="40%" class="tdrow">
          <div>
            <div class=""style="display:inline">
              <strong>  Talla: </strong>
            </div>
            <div class=""style="display:inline" >
                @isset($cita->ApneaSuenio->talla) {{$cita->ApneaSuenio->talla}} @endisset mts
            </div>
          </div>
        </td>
        <td width="30%" class="tdrow">
          <div>
            <div class=""style="display:inline">
                <strong>IMC (Kg/m2): </strong>
            </div>
            <div class=""style="display:inline" >
                @isset($cita->ApneaSuenio->imc) {{$cita->ApneaSuenio->imc}} @endisset   (> 35 es de alto riesgo)
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td width="40%"  class="tdrow" style="padding:2px;">
          <div>
            <div class=""style="display:inline">
                <strong>Circunferencia de cuello</strong>
            </div>
            <div class=""style="display:inline" >

            </div>
          </div>
        </td>
        <td width="40%"  class="tdrow">
          <div>
            <div class=""style="display:inline">
            <strong>  Varón (menor de 43.2 cm, es normal)</strong>


            </div>
            <div class=""style="display:inline" >

            </div>
          </div>
        </td>
        <td width="30%"  class="tdrow">
          <div>
            <div class=""style="display:inline">
              <strong>  Mujer (menor de 40.6 cm, es normal)</strong>
            </div>
            <div class=""style="display:inline" >

            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td width="30%" class="tdrow">
          <div>
            <div class=""style="display:inline">
                Circunferencia de cuello
            </div>
            <div class=""style="display:inline" >
                @isset($cita->ApneaSuenio->circunferencia) {{$cita->ApneaSuenio->circunferencia}} @endisset   cm
            </div>
          </div>
        </td>
        <td width="30%" class="tdrow">
          <div>
            <div class=""style="display:inline">
              Varón


            </div>
            <div class=""style="display:inline" >
                {{-- SI      --}}
                @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='1') x @endif  @endisset
                  {{--
                       NO @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='0')    x @endif  @endisset --}}
            </div>
          </div>
        </td>
        <td width="40%" class="tdrow">
          <div>
            <div class=""style="display:inline">
                Mujer
            </div>
            <div class=""style="display:inline" >
              {{-- SI    --}}
              @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='0') x @endif  @endisset
                  {{--          NO
                @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='0')
                    x @endif  @endisset --}}

            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td width="30%" class="tdrow">
          <div>
            <div class=""style="display:inline">
              P. Sistólica
            </div>
            <div class=""style="display:inline" >
                @isset($cita->ApneaSuenio->psistolica) {{$cita->ApneaSuenio->psistolica}} @endisset     mmHg
            </div>
          </div>
        </td>
        <td width="30%" class="tdrow">
          <div>
            <div class=""style="display:inline">
                P. Diastólica
            </div>
            <div class=""style="display:inline" >
                  @isset($cita->ApneaSuenio->pdiastolica) {{$cita->ApneaSuenio->pdiastolica}} @endisset     mmHg
            </div>
          </div>
        </td>
        <td width="40%" class="tdrow">
          <div>
            <div class=""style="display:inline">
                Epworth        ESS
            </div>
            <div class=""style="display:inline" >
              @isset($cita->ApneaSuenio->hta_nueva) {{$cita->ApneaSuenio->hta_nueva}} @endisset
            </div>
          </div>
        </td>
      </tr>
    </table>
    <table>
      <tr>
        <td width="100%" class="tdheader" style="border:1px solid rgba(0,0,0,0.4)">Evaluación de vía aérea superior MALLAMPATI (marque con una X)</td>
      </tr>
      <tr>
        <td><img src="{{asset('img/apnea.jpg')}}" alt="" style="margin-left:140px;margin-top:20px;margin-bottom:10px;" height="200px" width="400px"> </td>
      </tr>
    </table>
    <table>
      <tr>
        <td colspan="3" align="left" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"><strong>6.	CONCLUSION DE LA EVALUACION</strong> </td>
      </tr>

    </table>
    <table>
      <tr>
         <td  width="90%" align="left"  class="tdrow" >*Ampliación: oximetría, Polisomnografia, seguimiento de tratamiento y/o interconsulta</td>
         <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">SI</td>
         <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">NO</td>
       </tr>
       <tr>
          <td  width="90%" align="left"  class="tdrow" > <strong>Requiere ampliación antes de certificar aptitud para conducir (un criterio positivo)</strong> </td>
          <td  width="10%" align="center" class="tdrow" style="font-size:x-small;"></td>
          <td  width="10%" align="center"class="tdrow" style="font-size:x-small;"></td>
        </tr>
        <tr>
           <td  width="90%" align="left" class="tdrow"   >Criterio A: Excesiva somnolencia  determinada por ESS mayor de 15 o cabeceo presenciado durante la evaluación (espera), antecedente de accidente por somnolencia o con alta sospecha por somnolencia. (ÚLTIMO AÑO)</td>
           <td  width="10%" align="center"class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_a) @if($cita->ApneaSuenio->criterio_a=='1') x @endif @endisset</td>
           <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_a) @if($cita->ApneaSuenio->criterio_a=='0') x @endif @endisset</td>
         </tr>
         <tr>
            <td  width="90%" align="left"  class="tdrow"  >Criterio B: Antecedentes de SAS sin control  reciente o sin cumplimiento de tratamiento (con CPAP o cirugía).</td>
            <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_b) @if($cita->ApneaSuenio->criterio_b=='1') x @endif @endisset</td>
            <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_b) @if($cita->ApneaSuenio->criterio_b=='0') x @endif @endisset</td>
          </tr>
        <tr>
           <td  width="90%" align="left"  class="tdrow"  >Criterio C: Historia de higiene de sueño sugiere SAS (presencia de ronquido, somnolencia excesiva durante la actividad, pausas respiratorias)</td>
           <td  width="10%" align="center"  class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_c) @if($cita->ApneaSuenio->criterio_c=='1') x @endif @endisset</td>
           <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_c) @if($cita->ApneaSuenio->criterio_c=='0') x @endif @endisset</td>
         </tr>
         <tr>
            <td  width="90%" align="left" class="tdrow"   >Criterio D: Cumple con 2 o más de las siguiente:
IMC mayor o igual a 30.
Hipertensión Arterial
Circunferencia del cuello anormal.
Puntuación  de Epworth mayor de 10 y menor de 16.
Evaluación de vía aérea superior patológico (Mallampati III o IV)
</td>
            <td  width="10%" align="center" class="tdrow" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_d) @if($cita->ApneaSuenio->criterio_d=='1') x @endif @endisset</td>
            <td  width="10%" align="center" class="tdrow"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_d) @if($cita->ApneaSuenio->criterio_d=='0') x @endif @endisset</td>
          </tr>
    </table>
    <table>
      <tr>
        <td width="100%"  class="tdrow"> <strong>Nombres y Apellidos del Médico – N° de Colegiatura</strong> </td>
      </tr>
      <tr>
        <td  class="tdrow" style="height:50px;overflow:hidden" > </td>
      </tr>
      <tr>
        <td  class="tdrow" width="100%"> <strong>Observaciones/Recomendaciones</strong> </td>
      </tr>
      <tr>
        <td  class="tdrow" style="height:50px;overflow:hidden"> </td>
      </tr>
    </table>
    <table>
      <tr>
        <td width="55%"  class="tdrow" align="justify" style="font-size:x-small;">Declaro que las respuestas son ciertas según mi leal saber y entender. En caso de ser requeridos, los resultados del examen medico pueden ser revelados en términos generales, al Departamento de Salud Ocupacional de la compañía. Los resultados pueden ser enviados a mi médico particular de ser considerado necesario. </td>
        <td width="22.5%"  class="tdrow">
          <div class="" style="text-align:center;font-size: xx-small;margin-top:6%;">
            Firma del trabajador o postulante <br>dni
          </div>
      </td>
        <td width="22.5%"  class="tdrow" style="font-size:xx-small;">
          <div class="" style="text-align:center;font-size: xx-small; margin-top:5%;">
            Índice Derecho
          </div>
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
