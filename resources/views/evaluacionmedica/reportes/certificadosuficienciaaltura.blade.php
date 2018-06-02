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
    *{
      margin-top: 0;
      margin-bottom: 0;
      padding: 0;
      font-family: Tahoma, Verdana, Segoe, sans-serif;
    }
     table{

      width: 690px;
    }

    .tdheader{
      background: rgba(0,0,0,0.05);

      font-size:xx-small;
    }
    .tdheight{
      overflow: hidden;
      height: 75px;
    }

      .tdrow{
      font-size:xx-small;
      border-left:0.5px solid rgba(0,0,0,0.3);
        border-right:0.5px solid rgba(0,0,0,0.3);
      border-bottom:0.5px solid rgba(0,0,0,0.3);
      }
    </style>
</head>
<body>
<div class="container-fluid">

<br>
  <div class="header">
    <u>CERTIFICACION DE SUFICIENCIA MEDICA PARA TRABAJOS EN ALTURA </u> <br>(encima de los 1.8 metros)
  </div>
  <table style="font-size:x-small;">
    <tr>
      <td  align="left" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;" ><strong> 1.- FILACION(a partir del registro medico) </strong></td>
    </tr>
  </table>
  <table>
    <tr>
      <td  class="tdrow"width="20%">&nbsp;<strong>  Apellidos y Nombres </strong>  </td>
      <td  class="tdrow" width="50%" style="padding:1px;"> <strong> &nbsp; {{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}} </strong>  </td>
      <td  class="tdrow"width="10%" align="center"><strong>  Fecha </strong></td>
      <td  class="tdrow" width="20%" style="color:red;font-size:xx-small;">que fecha se muestra</td>
    </tr>
  </table>
  <table>
    <tr>
      <td class="tdrow" width="20%">&nbsp; <strong>DNI : &nbsp; {{$cita->paciente->num_dni}}</strong> </td>
      <td class="tdrow" width="25%">&nbsp;<strong>  EDAD : &nbsp;{{\Carbon\Carbon::parse($cita->paciente->fecha_nacimiento)->age.' años'}} </strong> </td>
      <td class="tdrow" width="15%" align="center">&nbsp; <strong>SEXO</strong> </td>
      <td class="tdrow" width="10%" align="center"><strong>Masculino</strong></td>
      <td class="tdrow" align="center" width="10%">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='masculino') <strong>x</strong> @endif @endisset</td>
      <td class="tdrow" width="10%" align="center"><strong>Femenino</strong> </td>
      <td class="tdrow" align="center" width="10%">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='femenino') <strong>x</strong> @endif  @endisset</td>
    </tr>
  </table>
    <table>
    <tr>
      <td class="tdrow"width="20%"> &nbsp; <strong> Área de Trabajo</strong></td>
      <td class="tdrow"width="80%"><strong> {{$cita->paciente->comentarios}} </strong></td>
    </tr>
    <tr>
      <td class="tdrow"width="20%">&nbsp;<strong>Empresa</strong> </td>
      <td class="tdrow"width="80%"></td>
    </tr>
  </table>
  <table style="font-size:x-small;">
    <tr>

    <td class="tdrow" width="20%"> &nbsp; <strong>Años de Experiencia</strong></td>
    <td class="tdrow" width="10%" style="color:red"><strong>?¿</strong> </td>

    <td class="tdrow" width="20%">  &nbsp; <strong>Primera Actitud</strong></td>

    <td class="tdrow"width="15%" align="center">@isset($cita->sudicienciatrabajoaltura->primera_aptitud)
        @if($cita->sudicienciatrabajoaltura->primera_aptitud=='1')
          <strong>x</strong>
        @endif
    @endisset
  </td>
    <td width="20%" align="center" class="tdrow">&nbsp; <strong>  Revalidacion</strong></td>

    <td width="15%" class="tdrow">@isset($cita->sudicienciatrabajoaltura->revalidacion)
        @if($cita->sudicienciatrabajoaltura->revalidacion=='1')
          <strong>x</strong>
        @endif
    @endisset</td>
  </tr>
  </table>
  <table>
    <tr>
      <td align="left" width="100%" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"><strong>2.	ANTECEDENTES (Llenado por el médico, implicando nivel sospecha)</strong></td>
    </tr>
  </table>
  <table>
    <tr>
      <td width="40%" style="font-size:xx-small;border:0.5px solid rgba(0,0,0,0.3);"></td>
      <td width="5%" align="center" style="font-size:xx-small;border:0.5px solid rgba(0,0,0,0.3);"><strong>SI</strong></td>
      <td width="5%" align="center" style="font-size:xx-small;border:0.5px solid rgba(0,0,0,0.3);"><strong>NO</strong> </td>
      <td width="40%" style="font-size:xx-small;border:0.5px solid rgba(0,0,0,0.3);"></td>
      <td width="5%" align="center" style="font-size:xx-small;border:0.5px solid rgba(0,0,0,0.3);"><strong>SI</strong></td>
      <td width="5%" align="center" style="font-size:xx-small;border:0.5px solid rgba(0,0,0,0.3);"><strong>NO</strong></td>
    </tr>

    <tr>
      <td class="tdrow" >Todas las enfermedades que produzcan alteración de la consciencia sin importar su causa e independiente de su tratamiento</td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item1)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item1=='1')
               <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item1)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item1=='0')
               <strong> x </strong>
            @endif
        @endisset
      </td>

      <td class="tdrow">Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que alteren su capacidad o trabajar como controlar un vehículo.</td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item2)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item2=='1')
               <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item2)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item2=='0')
               <strong> x </strong>
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td class="tdrow">Alcoholismo crónico y en general todas aquellas enfermedades que produzcan incapacidad de efectuar movimientos voluntarios y/o que limiten la capacidad de trabajo como conducción, manejo o control físico de un vehículo motorizado, subir y bajar escaleras, etc.</td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item3)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item3=='1')
               <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item3)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item3=='0')
              <strong> x </strong>
            @endif
        @endisset
      </td>

      <td  class="tdrow">Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que no alteren su capacidad de trabajar, pero que se encuentran sin tratamiento o en tratamiento sin prescripción médica.</td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item4)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item4=='1')
              <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item4)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item4=='0')
            <strong> x </strong>
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td class="tdrow">
          Todas aquellas enfermedades que se caractericen por movimientos involuntarios y que interfieran seriamente su capacidad de trabajar, independiente de su tratamiento farmacológico.
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item5)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item5=='1')
              <strong>   x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item5)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item5=='0')
              <strong> x </strong>
            @endif
        @endisset
      </td>

      <td class="tdrow">
          Personas que como consecuencia de una enfermedad o su tratamiento, sufran uno o varios de los siguientes efectos: alteración del estado de consciencia, alteración del equilibrio, en la percepción, en la habilidad motriz, en la estabilidad emocional y en el juicio.
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item6)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item6=='1')
              <strong>x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item6)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item6=='0')
              <strong> x </strong>
            @endif
        @endisset
      </td>

    </tr>
    <tr>
      <td style="font-size:xx-small;">
        Perdida recurrente de la consciencia, independiente de su tratamiento, tales como narcolepsia, epilepsia, etc.
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item7)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item7=='1')
              <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item7)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item7=='0')
              <strong> x </strong>
            @endif
        @endisset
      </td>

      <td class="tdrow">
        Síndrome Apnea Obstructiva del sueño
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item8)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item8=='1')
                <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item8)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item8=='0')
                <strong> x </strong>
            @endif
        @endisset
      </td>

    </tr>

    <tr>
      <td class="tdrow">
        Anemia de cualquier grado, según criterios OMS 2011.
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item9)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item9=='1')
              <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item9)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item9=='0')
              <strong> x </strong>
            @endif
        @endisset
      </td>

      <td class="tdrow" class="tdrow">
        Obesidad (IMC > o igual a 30)
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item10)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item10=='1')
                <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item10)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item10=='0')
                <strong> x </strong>
            @endif
        @endisset
      </td>

    </tr>
    <tr>
      <td class="tdrow">
        Insuficiencia renal crónica grado IV.
      </td>
      <td class="tdrow" style="color:red">¿?</td>
      <td class="tdrow" style="color:red">¿?</td>

      <td class="tdrow">
        Diabetes mellitus o hipoglicemia, convulsiones
    </td>
      <td class="tdrow" style="color:red">¿?</td>
      <td class="tdrow" style="color:red">¿?</td>

    </tr>
    <tr>
      <td class="tdrow"colspan="1">
      <strong>   Comentarios/Detalles </strong>
      </td>
      <td class="tdrow" colspan="5">

      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td align="left" colspan="6" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"><strong>3.	PRUEBAS COMPLEMENTARIAS (Llenado por el médico)</strong></td>
    </tr>
    <tr>
      <td width="40%" class="tdrow"></td>
      <td width="5%" align="center" class="tdrow"><strong>SI</strong></td>
      <td width="5%" align="center" class="tdrow"><strong>NO</strong></td>
      <td width="40%" class="tdrow"></td>
      <td width="5%" align="center" class="tdrow"><strong>SI</strong></td>
      <td width="5%" align="center" class="tdrow"><strong>NO</strong></td>
    </tr>

    <tr>
      <td class="tdrow">Se encuentra usted resfriado o con algún cuadro respiratorio.</td>
      <td class="tdrow"></td>
      <td class="tdrow"></td>

      <td class="tdrow">Hipoacusia con compromiso de frecuencias conversacionales con promedio mayor de 40 db uni o bilateral incluso con audífonos</td>
      <td class="tdrow"></td>
      <td class="tdrow"></td>
    </tr>
    <tr>
      <td class="tdrow">Sufre de vértigo o mareos.</td>
      <td class="tdrow"></td>
      <td class="tdrow"></td>

      <td class="tdrow">Alteración de la agudeza visual (de lejos diferente a 20/30 en cada ojo) y/o de la visión de profundidad incluso con lentes correctores.</td>
      <td class="tdrow"></td>
      <td class="tdrow"></td>
    </tr>
    <tr>
      <td class="tdrow">
          Temor a las alturas
      </td>
      <td class="tdrow"></td>
      <td class="tdrow"></td>

      <td class="tdrow">
          Campimetría Anormal (Test de confrontación alterada)
      </td>
      <td class="tdrow"></td>
      <td class="tdrow"></td>

    </tr>

    <tr>
      <td class="tdrow"colspan="1">
      <strong>   Detalle las medicinas que están tomando: </strong>
      </td>
      <td class="tdrow" colspan="5">

      </td>
    </tr>

  </table>

  <table>
    <tr>
      <td align="left" colspan="6" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"><strong>4.	EXAMEN FISICO (actual)</strong> </td>
    </tr>
    <tr>
      <td class="tdrow" width="12.5">
          <label for="" style="color:gray;margin-left:10%;">FC </label> <label for=""> 585</label>
      </td>
      <td class="tdrow" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  FR</label> <label for=""> 585</label>
      </td>
      <td class="tdrow" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  PA </label> <label for=""> 585</label>
      </td>
      <td class="tdrow" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  TALLA </label> <label for=""> 585</label>
      </td>
      <td class="tdrow" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  PESO </label> <label for=""> 585</label>
      </td>
      <td class="tdrow" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  IMC </label> <label for=""> 585</label>
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td class="tdrow" ><label for="" style="font-weight:normal;">Perímetro de Cuello </label> <label for="">85959</label></td>
      <td class="tdrow" ><label for="" style="font-weight:normal;"> Perímetro de cintura </label> <label for="">85959</label> </td>
      <td class="tdrow" ><label for="" style="font-weight:normal;">Perímetro de Cadera</label> <label for="">85959</label> </td>
      <td class="tdrow" > <label for="" style="font-weight:normal;">ICC </label> <label for="">85959</label> </td>
    </tr>
  </table>
    <table>
    <tr>
      <td width="40%"  class="tdrow"></td>
      <td width="5%" align="center" class="tdrow" style="font-size:xx-small;"> <strong> SI </strong> </td>
      <td width="5%" align="center" class="tdrow" style="font-size:xx-small;"><strong> NO </strong> </td>
      <td width="40%"  class="tdrow"></td>
      <td width="5%" align="center" class="tdrow" style="font-size:xx-small;"><strong> SI </strong> </td>
      <td width="5%" align="center" class="tdrow" style="font-size:xx-small;"><strong>NO</strong>  </td>
    </tr>

    <tr>
      <td  class="tdrow" >
Limitación en fuerza y/o movilidad de extremidades (Mayor a 2Kg / fuerza cada mano)
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1=='1')
              <strong> x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1=='0')
              <strong> x</strong>
            @endif
        @endisset
      </td>

      <td class="tdrow">
Presencia de nistagmus
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2=='1')
              <strong> x </strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2=='0')
                    <strong> x </strong>
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td class="tdrow">
Alteración presente del equilibrio
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3=='1')
            <strong> x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3=='0')
                <strong> x</strong>
            @endif
        @endisset
      </td>

      <td  class="tdrow">
Anormalidad en movimientos oculares
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4=='1')
                <strong> x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4=='0')
                <strong> x</strong>
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td  class="tdrow">
Anormalidad en la marcha
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5=='1')
                <strong> x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5=='0')
                <strong> x</strong>
            @endif
        @endisset
      </td>

      <td class="tdrow">
Pupilas no CIRLA
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6=='1')
              <strong>x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6=='0')
                <strong>x</strong>
            @endif
        @endisset
      </td>

    </tr>


    <tr>
      <td  class="tdrow">
        Alteración de la coordinación presente (dedo nariz)
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7=='1')
                <strong>x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7=='0')
                <strong>x</strong>
            @endif
        @endisset
      </td>

      <td  class="tdrow">
        Anormalidad del lenguaje 0800 16253
      </td>
      <td align="center"  class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8=='1')
                <strong>x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8=='0')
                <strong>x</strong>
            @endif
        @endisset
      </td>

    </tr>
    <tr>
      <td class="tdrow">
Asimetría facial
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9=='1')
              <strong>x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9=='0')
                  <strong>x</strong>
            @endif
        @endisset
      </td>

      <td class="tdrow">
Movimientos involuntarios
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10=='1')
                  <strong>x</strong>
            @endif
        @endisset
      </td>
      <td align="center" class="tdrow">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10=='0')
                  <strong>x</strong>
            @endif
        @endisset
      </td>

    </tr>

    <tr>
      <td class="tdrow" colspan="1">
      <strong>   Detalle Informacion: </strong>
      </td>
      <td class="tdrow" colspan="5">

      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td align="left" colspan="3" class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"><strong>5.	CONCLUSION DE LA PRESENTE EVALUACION</strong> </td>
    </tr>
    <tr>
      <td width="78%" class="tdrow"></td>
      <td width="10%" class="tdrow"  style="font-size:xx-small;" align="center"><strong>SI</strong></td>
      <td width="10%" class="tdrow"  style="font-size:xx-small;"><strong>OBSERVADO</strong></td>
    </tr>
    <tr>
      <td colspan="3" class="tdrow" align=left style="font-size:xx-small;"><strong>APTO PARA TRABAJAR ENCIMA DE LOS 1.8 METROS</strong></td>
    </tr>
  </table>
  <table>
    <tr>
      <td width="25%;"   style="font-size:xx-small; border-left:0.5px solid rgba(0,0,0,0.3);border-right:0.5px solid rgba(0,0,0,0.3);border-bottom: :0.5px solid rgba(0,0,0,0.3);"><label for="" style="font-weight:normal;">Desde</label> <label for="" style="font-weight:normal;color:red">¿?</label> </td>
      <td width="25%;"   style="font-size:xx-small; border-left:0.5px solid rgba(0,0,0,0.3);border-right:0.5px solid rgba(0,0,0,0.3);border-bottom: :0.5px solid rgba(0,0,0,0.3);"><label for="" style="font-weight:normal;">Hasta </label> <label for="" style="font-weight:normal;color:red">¿?</label></td>
      <td width="25%" style="font-size:xx-small; border-left:0.5px solid rgba(0,0,0,0.3);border-right:0.5px solid rgba(0,0,0,0.3);border-bottom: :0.5px solid rgba(0,0,0,0.3);" ></td>
      <td width="10%" style="font-size:xx-small; border-left:0.5px solid rgba(0,0,0,0.3);border-right:0.5px solid rgba(0,0,0,0.3);border-bottom: :0.5px solid rgba(0,0,0,0.3);color:red">¿?</td>
      <td width="11.5%" style="font-size:xx-small; border-left:0.5px solid rgba(0,0,0,0.3);border-right:0.5px solid rgba(0,0,0,0.3);border-bottom: :0.5px solid rgba(0,0,0,0.3);color:red">¿?</td>
    </tr>
  </table>
  <table>
    <tr>
      <td align="left"class="tdheader" style="border: 1px solid rgba(0,0,0,0.4);padding:1px;"><strong>6.	COMENTARIOS</strong></td>
    </tr>
    <tr>
      <td  class="tdrow" style="font-size:xx-small;color:red">Nombre y Apellidos del Médico – N° de Colegiatura <label for="">ESTE DATO DE DONDE SE OBTIENE</label> </td>
    </tr>
    <tr>
      <td  class="tdrow" style="font-size:xx-small;">Observaciones y Recomendaciones</td>
    </tr>
    <tr>
      <td  class="tdrow" style="overflow:hidden;height:50px"></td>
    </tr>
    <tr>
      <td  class="tdrow" style="font-size:xx-small;">NOTA AL PIE: La presente certificación tiene una validez igual a la señalada en CONCLUSION. La aparición de alguna enfermedad NUEVA durante la duración de esta certificación invalida este permiso y deberá ser reevaluado medicamente antes de continuar trabajando sobre los 1.8 metros de altura.</td>
    </tr>
  </table>
  <table>
    <tr>
      <td width="55%"  class="tdrow">Declaro que las respuestas son ciertas según mi leal saber y entender. En caso de ser requeridos, los resultados del examen medico pueden ser revelados en términos generales, al Departamento de Salud Ocupacional de la compañía. Los resultados pueden ser enviados a mi médico particular de ser considerado necesario. </td>
      <td width="22.5%" class="tdrow">
        <div class="" class="tdrow" style="text-align:center; margin-top:5%;">
          Firma del trabajador o postulante <br>dni
        </div>
    </td>
      <td width="22.5%" class="tdrow" style="font-size:xx-small;">
        <div class="" style="text-align:center; margin-top:5%;">
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
