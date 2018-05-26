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
    }
     table{

      width: 690px;
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
    <u>CERTIFICACION DE SUFICIENCIA MEDICA PARA TRABAJOS EN ALTURA </u> <br>(encima de los 1.8 metros)
  </div>
  <table style="font-size:x-small;">
    <tr>
      <td colspan="9" align="left" class="tdheader">1.- FILACION(a partir del registro medico)</td>
    </tr>
    <tr>
      <td colspan="1">Apellidos y Nombres </td>
      <td colspan="3" width="50%"> {{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}} </td>
      <td colspan="1">Fecha</td>
      <td colspan="4" width="15%" style="color:red;font-size:xx-small;">que fecha se muestra</td>
    </tr>
    <tr>
      <td colspan="1">DNI </td>
      <td colspan="1">{{$cita->paciente->num_dni}}</td>
      <td colspan="1">EDAD</td>
      <td colspan="1">{{\Carbon\Carbon::parse($cita->paciente->fecha_nacimiento)->age.' años'}} </td>
      <td colspan="1">SEXO</td>
      <td colspan="1" align="rig">M</td>
      <td colspan="1">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='masculino') x @endif @endisset</td>
      <td colspan="1">F</td>
      <td colspan="1">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='femenino') x @endif  @endisset</td>
    </tr>
    <tr>
      <td colspan="1">Área de Trabajo</td>
      <td colspan="8">{{$cita->paciente->comentarios}}</td>
    </tr>
    <tr>
      <td colspan="1">Empresa</td>
      <td colspan="8"></td>
    </tr>
    <tr>
  </table>
  <table style="font-size:x-small;">
    <tr>

    <td width="22%">Años de Experiencia</td>
    <td width="10%">?¿</td>
    <td width="16%"></td>
    <td width="16%">Primera Actitud</td>
    <td width="8%">@isset($cita->sudicienciatrabajoaltura->primera_aptitud)
        @if($cita->sudicienciatrabajoaltura->primera_aptitud=='1')
          x
        @endif
    @endisset
  </td>
    <td width="16%" align="center">Revalidacion</td>
    <td width="8%">@isset($cita->sudicienciatrabajoaltura->revalidacion)
        @if($cita->sudicienciatrabajoaltura->revalidacion=='1')
          x
        @endif
    @endisset</td>
  </tr>
  </table>
  <table>
    <tr>
      <td align="left" colspan="6" class="tdheader">2.	ANTECEDENTES (Llenado por el médico, implicando nivel sospecha)</td>
    </tr>
    <tr>
      <td width="40%"></td>
      <td width="5%" align="left" style="font-size:x-small;">SI</td>
      <td width="5%" align="left" style="font-size:x-small;">NO</td>
      <td width="40%"></td>
      <td width="5%" align="center" style="font-size:x-small;">SI</td>
      <td width="5%" align="center" style="font-size:x-small;">NO</td>
    </tr>

    <tr>
      <td style="font-size:xx-small;">Todas las enfermedades que produzcan alteración de la consciencia sin importar su causa e independiente de su tratamiento</td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item1)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item1=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item1)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item1=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que alteren su capacidad o trabajar como controlar un vehículo.</td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item2)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item2=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item2)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item2=='0')
              x
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">Alcoholismo crónico y en general todas aquellas enfermedades que produzcan incapacidad de efectuar movimientos voluntarios y/o que limiten la capacidad de trabajo como conducción, manejo o control físico de un vehículo motorizado, subir y bajar escaleras, etc.</td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item3)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item3=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item3)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item3=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">Personas que consumen sustancias estupefacientes o psicotrópicas en niveles que no alteren su capacidad de trabajar, pero que se encuentran sin tratamiento o en tratamiento sin prescripción médica.</td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item4)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item4=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item4)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item4=='0')
              x
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">
          Todas aquellas enfermedades que se caractericen por movimientos involuntarios y que interfieran seriamente su capacidad de trabajar, independiente de su tratamiento farmacológico.
      </td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item5)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item5=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item5)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item5=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
          Personas que como consecuencia de una enfermedad o su tratamiento, sufran uno o varios de los siguientes efectos: alteración del estado de consciencia, alteración del equilibrio, en la percepción, en la habilidad motriz, en la estabilidad emocional y en el juicio.
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item6)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item6=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item6)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item6=='0')
              x
            @endif
        @endisset
      </td>

    </tr>
    <tr>
      <td style="font-size:xx-small;">
        Perdida recurrente de la consciencia, independiente de su tratamiento, tales como narcolepsia, epilepsia, etc.
      </td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item7)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item7=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item7)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item7=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
        Síndrome Apnea Obstructiva del sueño
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item8)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item8=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item8)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item8=='0')
              x
            @endif
        @endisset
      </td>

    </tr>

    <tr>
      <td style="font-size:xx-small;">
        Anemia de cualquier grado, según criterios OMS 2011.
      </td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item9)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item9=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item9)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item9=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
        Obesidad (IMC > o igual a 30)
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item10)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item10=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center">
        @isset($cita->sudicienciatrabajoaltura->anamnesis_item10)
            @if($cita->sudicienciatrabajoaltura->anamnesis_item10=='0')
              x
            @endif
        @endisset
      </td>

    </tr>
    <tr>
      <td style="font-size:xx-small;">
        Insuficiencia renal crónica grado IV.
      </td>
      <td style="color:red;font-size:xx-small;">¿?</td>
      <td style="color:red;font-size:xx-small;">¿?</td>

      <td style="font-size:xx-small;">
        Diabetes mellitus o hipoglicemia, convulsiones
    </td>
      <td style="color:red;font-size:xx-small;">¿?</td>
      <td style="color:red;font-size:xx-small;">¿?</td>

    </tr>
    <tr>
      <td style="font-size:x-small;" colspan="1">
      <strong>   Comentarios/Detalles </strong>
      </td>
      <td style="font-size:x-small;" colspan="5">

      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td align="left" colspan="6" class="tdheader">3.	PRUEBAS COMPLEMENTARIAS (Llenado por el médico)</td>
    </tr>
    <tr>
      <td width="40%"></td>
      <td width="5%" align="left" style="font-size:x-small;">SI</td>
      <td width="5%" align="left" style="font-size:x-small;">NO</td>
      <td width="40%"></td>
      <td width="5%" align="center" style="font-size:x-small;">SI</td>
      <td width="5%" align="center" style="font-size:x-small;">NO</td>
    </tr>

    <tr>
      <td style="font-size:xx-small;">Se encuentra usted resfriado o con algún cuadro respiratorio.</td>
      <td></td>
      <td></td>

      <td style="font-size:xx-small;">Hipoacusia con compromiso de frecuencias conversacionales con promedio mayor de 40 db uni o bilateral incluso con audífonos</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">Sufre de vértigo o mareos.</td>
      <td></td>
      <td></td>

      <td style="font-size:xx-small;">Alteración de la agudeza visual (de lejos diferente a 20/30 en cada ojo) y/o de la visión de profundidad incluso con lentes correctores.</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">
          Temor a las alturas
      </td>
      <td></td>
      <td></td>

      <td style="font-size:xx-small;">
          Campimetría Anormal (Test de confrontación alterada)
      </td>
      <td></td>
      <td></td>

    </tr>

    <tr>
      <td style="font-size:x-small;" colspan="1">
      <strong>   Detalle las medicinas que están tomando: </strong>
      </td>
      <td style="font-size:x-small;" colspan="5">

      </td>
    </tr>

  </table>

  <table>
    <tr>
      <td align="left" colspan="6" class="tdheader">4.	EXAMEN FISICO (actual)</td>
    </tr>
    <tr>
      <td style="font-size:x-small;" width="12.5">
          <label for="" style="color:gray;margin-left:10%;">FC </label> <label for=""> 585</label>
      </td>
      <td style="font-size:x-small;" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  FR</label> <label for=""> 585</label>
      </td>
      <td style="font-size:x-small;" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  PA </label> <label for=""> 585</label>
      </td>
      <td style="font-size:x-small;" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  TALLA </label> <label for=""> 585</label>
      </td>
      <td style="font-size:x-small;" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  PESO </label> <label for=""> 585</label>
      </td>
      <td style="font-size:x-small;" width="12.5">
        <label for="" style="color:gray;margin-left:10%;">  IMC </label> <label for=""> 585</label>
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td style="font-size:xx-small;" ><label for="" style="font-weight:normal;">Perímetro de Cuello </label> <label for="">85959</label></td>
      <td style="font-size:xx-small;" ><label for="" style="font-weight:normal;"> Perímetro de cintura </label> <label for="">85959</label> </td>
      <td style="font-size:xx-small;" ><label for="" style="font-weight:normal;">Perímetro de Cadera</label> <label for="">85959</label> </td>
      <td style="font-size:xx-small;" > <label for="" style="font-weight:normal;">ICC </label> <label for="">85959</label> </td>
    </tr>
  </table>
    <table>
    <tr>
      <td width="40%"></td>
      <td width="5%" align="left" style="font-size:x-small;">SI</td>
      <td width="5%" align="left" style="font-size:x-small;">NO</td>
      <td width="40%"></td>
      <td width="5%" align="center" style="font-size:x-small;">SI</td>
      <td width="5%" align="center" style="font-size:x-small;">NO</td>
    </tr>

    <tr>
      <td style="font-size:xx-small;">
Limitación en fuerza y/o movilidad de extremidades (Mayor a 2Kg / fuerza cada mano)
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_1=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
Presencia de nistagmus
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_2=='0')
              x
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">
Alteración presente del equilibrio
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_3=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
Anormalidad en movimientos oculares
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_4=='0')
              x
            @endif
        @endisset
      </td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">
Anormalidad en la marcha
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_5=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
Pupilas no CIRLA
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_6=='0')
              x
            @endif
        @endisset
      </td>

    </tr>


    <tr>
      <td style="font-size:xx-small;">
        Alteración de la coordinación presente (dedo nariz)
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_7=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
        Anormalidad del lenguaje 0800 16253
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_8=='0')
              x
            @endif
        @endisset
      </td>

    </tr>
    <tr>
      <td style="font-size:xx-small;">
Asimetría facial
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9=='1')
              x
            @endif
        @endisset
      </td>
      <td align="left" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_9=='0')
              x
            @endif
        @endisset
      </td>

      <td style="font-size:xx-small;">
Movimientos involuntarios
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10=='1')
              x
            @endif
        @endisset
      </td>
      <td align="center" style="font-size:xx-small;">
        @isset($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10)
            @if($cita->sudicienciatrabajoaltura->exploracion_fisica_item_10=='0')
              x
            @endif
        @endisset
      </td>

    </tr>

    <tr>
      <td style="font-size:xx-small;" colspan="1">
      <strong>   Detalle Informacion: </strong>
      </td>
      <td style="font-size:xx-small;" colspan="5">

      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td align="left" colspan="6" class="tdheader">5.	CONCLUSION DE LA PRESENTE EVALUACION</td>
    </tr>
    <tr>
      <td width="78%"></td>
      <td width="10%"  style="font-size:x-small;" align="center">SI</td>
      <td width="10%"  style="font-size:x-small;">OBSERVADO</td>
    </tr>
    <tr>
      <td colspan="3" align=left style="font-size:xx-small;">APTO PARA TRABAJAR ENCIMA DE LOS 1.8 METROS</td>
    </tr>
  </table>
  <table>
    <tr>
      <td width="25%;" style="font-size:xx-small;"><label for="" style="font-weight:normal;">Desde</label> <label for="" style="font-weight:normal;color:red">¿?</label> </td>
      <td width="25%;" style="font-size:xx-small;"><label for="" style="font-weight:normal;">Hasta </label> <label for="" style="font-weight:normal;color:red">¿?</label></td>
      <td width="25%"></td>
      <td width="10%" align="center"  style="font-size:xx-small;color:red">¿?</td>
      <td width="11.5%" align="center"  style="font-size:xx-small;color:red">¿?</td>
    </tr>
  </table>
  <table>
    <tr>
      <td align="left"class="tdheader">6.	COMENTARIOS</td>
    </tr>
    <tr>
      <td style="font-size:xx-small;color:red">Nombre y Apellidos del Médico – N° de Colegiatura <label for="">ESTE DATO DE DONDE SE OBTIENE</label> </td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">Observaciones y Recomendaciones</td>
    </tr>
    <tr>
      <td style="overflow:hidden;height:50px"></td>
    </tr>
    <tr>
      <td style="font-size:xx-small;">NOTA AL PIE: La presente certificación tiene una validez igual a la señalada en CONCLUSION. La aparición de alguna enfermedad NUEVA durante la duración de esta certificación invalida este permiso y deberá ser reevaluado medicamente antes de continuar trabajando sobre los 1.8 metros de altura.</td>
    </tr>
  </table>
  <table>
    <tr>
      <td width="55%" style="font-size:xx-small;">Declaro que las respuestas son ciertas según mi leal saber y entender. En caso de ser requeridos, los resultados del examen medico pueden ser revelados en términos generales, al Departamento de Salud Ocupacional de la compañía. Los resultados pueden ser enviados a mi médico particular de ser considerado necesario. </td>
      <td width="22.5%" style="font-size:xx-small;">
        <div class="" style="text-align:center; margin-top:5%;">
          Firma del trabajador o postulante <br>dni
        </div>
    </td>
      <td width="22.5%" style="font-size:xx-small;">
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
