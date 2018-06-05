{{--@include('evaluacionmedica.reportes.anexo7d')--}}
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
{{--ANEXO 7D--}}
<div class="container-fluid">
    <table WIDTH="100%">
        <tr>
            <td WIDTH="30%">
                <img src="{{asset('img/planvital.jpg')}}" alt="" width="200px" height="50px" >
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
            <td align="justify" width="100%" style="font-size:x-small;">
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
            <td width="10%" class="tdresultadobd"></td>
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
            <td width="10%" class="tdresultadobd"></td>
            <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; </td>
        </tr>
        <tr>
            <td width="20%" class="tdresultados">&nbsp;&nbsp; V.S.G.</td>
            <td width="10%" class="tdresultadosunidad">&nbsp;&nbsp; mm/hora</td>
            <td width="10%" class="tdresultadobd"></td>
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
            <td width="10%" class="tdresultadobd"></td>
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
            <td width="10%" class="tdresultadobd"> </td>
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
            <td width="10%" class="tdresultadobd"></td>
            <td width="60%" class="tdvalorreferencial">&nbsp;&nbsp; 0.85 a 1 para varones, 0.75 a 0.9 para mujeres</td>
        </tr>
        <tr>
            <td width="30%" class="tdresultados"> &nbsp;&nbsp; IMC</td>
            <td width="10%" class="tdresultadobd"></td>
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

    {{--SALTO DE LINEA--}}
    <div style="page-break-after: always;"></div>

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
{{--SALTO DE LINEA--}}
    <div style="page-break-after: always;"></div>
{{--//////////////--}}

{{--APNEA DEL SUEÑO--}}

    <div class="header">
        <u>DEPARTAMENTO DE SALUD OCUPACIONAL </u> <br>(Detección de Síndrome de Ápnea de Sueño)
    </div>
    <div class="header">
        <u>FICHA DE DETECCIÓN DE S.A.S. </u> <br>(Conductores de maquinaria pesada, transporte de personal, transporte de materiales peligrosos)
    </div>
    <br>
    <table>
        <tr>
            <td colspan="9" align="left" class="tdheader">1.- FILACION(a partir del registro medico)</td>
        </tr>
        <tr>
            <td colspan="1"  style="font-size:x-small;">Apellidos y Nombres </td>
            <td colspan="3" width="50%"  style="font-size:x-small;"> {{$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno." ".$cita->paciente->nombres}} </td>
            <td colspan="1"  style="font-size:x-small;">Fecha</td>
            <td colspan="4" width="15%" style="color:red;font-size:x-small;padding:1px;">fecha a mostrar?</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size:x-small;padding:1px;">DNI </td>
            <td colspan="1" style="font-size:x-small;padding:1px;">{{$cita->paciente->num_dni}}</td>
            <td colspan="1" style="font-size:x-small;padding:1px;">EDAD</td>
            <td colspan="1" style="font-size:x-small;padding:1px;">{{$cita->paciente->fecha_nacimiento}} </td>
            <td colspan="1" style="font-size:x-small;padding:1px;">SEXO</td>
            <td colspan="1"style="font-size:x-small;padding:1px;" align="center">M</td>
            <td colspan="1" style="font-size:x-small;padding:1px;">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='masculino') x @endif @endisset</td>
            <td colspan="1" style="font-size:x-small;padding:1px;">F</td>
            <td colspan="1" style="font-size:x-small;padding:1px;">@isset($cita->paciente->sexo) @if($cita->paciente->sexo=='femenino') x @endif  @endisset</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size:x-small;padding:1px;">Área de Trabajo</td>
            <td colspan="8" style="font-size:xx-small;padding:1px;">{{$cita->paciente->comentarios}}</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size:x-small;padding:1px;" >Empresa</td>
            <td colspan="8" style="font-size:x-small;padding:1px;"></td>
        </tr>
        <tr>
            <td colspan="1"  style="font-size:x-small;padding:1px;"> <strong>Trabaja de Noche</strong> </td>
            <td colspan="1"  style="font-size:xx-small;padding:1px;text-align:center;">SI &nbsp; @isset($cita->ApneaSuenio->trabajo_noche) @if($cita->ApneaSuenio->trabajo_noche=='1') x  @endif @endisset</td>
            <td colspan="1"   style="font-size:xx-small;"> &nbsp; &nbsp;NO &nbsp; @isset($cita->ApneaSuenio->trabajo_noche) @if($cita->ApneaSuenio->trabajo_noche=='0') x  @endif @endisset</td>
            <td colspan="1"  style="font-size:x-small;padding:1px;">Dias de Trabajo  @isset($cita->ApneaSuenio->num_dias_trabajados) {{$cita->ApneaSuenio->num_dias_trabajados}} @endisset</td>
            <td colspan="1"  style="font-size:x-small;padding:1px;">Dias de Descanso   @isset($cita->ApneaSuenio->num_dias_descanso) {{$cita->ApneaSuenio->num_dias_descanso}} @endisset</td>
        </tr>
        <tr>
            <td colspan="3"  style="font-size:x-small;padding:1px;">Años que Trabaja en dicho horario de Trabajo   @isset($cita->ApneaSuenio->anios_trabaja_horario) {{$cita->ApneaSuenio->anios_trabaja_horario}} @endisset </td>
            <td></td>
        </tr>
        <tr>
    </table>

    <table style="">
        <tr>
            <td colspan="9" align="left" class="tdheader">2.- ANTECEDENTES PERSONALES</td>
        </tr>
        <tr>
            <td width="20%" style="font-size:x-small;padding:1px;">Ápnea de sueño</td>
            <td width="10%" style="font-size:x-small;padding:1px;">SI &nbsp; @isset($cita->ApneaSuenio->apnea_suenio) @if($cita->ApneaSuenio->apnea_suenio=='1') x  @endif @endisset</td>
            <td width="10%" style="font-size:x-small;padding:1px;">NO &nbsp;@isset($cita->ApneaSuenio->apnea_suenio) @if($cita->ApneaSuenio->apnea_suenio=='0') x  @endif @endisset</td>
            <td width="60%" style="font-size:x-small;padding:1px;">Ultimo Control &nbsp;@isset($cita->ApneaSuenio->ctrl_apnea)  {{$cita->ApneaSuenio->ctrl_apnea}}  @endisset </td>
        </tr>
        <tr>
            <td width="20%" style="font-size:x-small;padding:1px;">HTA</td>
            <td width="10%" style="font-size:x-small;padding:1px;">SI &nbsp; @isset($cita->ApneaSuenio->hta) @if($cita->ApneaSuenio->hta=='1') x  @endif @endisset</td>
            <td width="10%" style="font-size:x-small;padding:1px;" >NO &nbsp; @isset($cita->ApneaSuenio->hta) @if($cita->ApneaSuenio->hta=='0') x  @endif @endisset</td>
            <td width="60%" style="font-size:x-small;padding:1px;">Mediciaión &nbsp; @isset($cita->ApneaSuenio->medicacion){{$cita->ApneaSuenio->medicacion}} @endisset</td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="35%" style="font-size:x-small;padding:1px;">Polisomnografia (PSG) realizada alguna vez;</td>
            <td width="10%" align="center" style="font-size:x-small;padding:1px;">SI &nbsp; @isset($cita->ApneaSuenio->psg) @if($cita->ApneaSuenio->psg=='1') x  @endif @endisset</td>
            <td width="10%" align="center" style="font-size:x-small;padding:1px;">NO &nbsp; @isset($cita->ApneaSuenio->psg) @if($cita->ApneaSuenio->psg=='0') x  @endif @endisset</td>
            <td width=35% style="font-size:x-small;padding:1px;">Fecha de ultima PSG &nbsp; @isset($cita->ApneaSuenio->ctrl_psg) {{$cita->ApneaSuenio->ctrl_psg}} @endisset</td>
        </tr>
        <tr>
            <td style="font-size:x-small;padding:1px;">Antecedente de Choque de Vehículo</td>
            <td align="center" style="font-size:x-small;padding:1px; color:red;"> en mina</td>
            <td align="center" style="font-size:x-small;padding:1px; color:red;">fuera de mina</td>
            <td style="font-size:x-small;padding:1px;">(si es NO, pase a la sección 3 ) </td>
        </tr>
    </table>
    <table>
        <tr>
            <td  width="90%" align="left" class="tdheader" style="font-size:x-small;padding:1px;">Clasificación del (los) “Choques” o accidentes vehiculares del postulante (marque solo una categoría) </td>
            <td  width="10%" align="center" class="tdheader" style="font-size:x-small;border-left:0.5px  solid gray">SI</td>
            <td  width="10%" align="center" class="tdheader"  style="font-size:x-small;border-left:0.5px  solid gray">NO</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;"><strong>Criterio 1:</strong> Se “cabeceo” y por ello le ocurrió un accidente (incidente) con un vehículo (alguna vez) </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_uno_valor) @if($cita->ApneaSuenio->criterio_uno_valor=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_uno_valor) @if($cita->ApneaSuenio->criterio_uno_valor=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="100%" align="left"  style="font-size:x-small;padding:1px;"><strong>Criterio 2:</strong>  (o mas es positivo) </td>
            {{-- <td  width="10%" align="center" style="font-size:x-small;">x</td>
            <td  width="10%" align="center"  style="font-size:x-small;">x</td> --}}
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;"> Accidente ocurrido entre las 0 horas y las 7 de la mañana o entre las 13 y 15 horas (tarde) </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor1) @if($cita->ApneaSuenio->criterio_dos_valor1=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor1) @if($cita->ApneaSuenio->criterio_dos_valor1=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;"> No hubo evidencia de maniobra evasiva del chofer para evitar la colisión. </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor2) @if($cita->ApneaSuenio->criterio_dos_valor2=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor2) @if($cita->ApneaSuenio->criterio_dos_valor2=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;"> Colisión frontal del vehículo </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor3) @if($cita->ApneaSuenio->criterio_dos_valor3=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor3) @if($cita->ApneaSuenio->criterio_dos_valor3=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Vehículo que invadió el otro carril o se desvió sin causa aparente </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor4) @if($cita->ApneaSuenio->criterio_dos_valor4=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor4) @if($cita->ApneaSuenio->criterio_dos_valor4=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">La unidad cayó a un barranco, río o choco contra un poste, puente, edificio u otra estructura estática sin causa aparente </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor5) @if($cita->ApneaSuenio->criterio_dos_valor5=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor5) @if($cita->ApneaSuenio->criterio_dos_valor5=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;"> Chofer viajaba solo en el vehículo  </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor6) @if($cita->ApneaSuenio->criterio_dos_valor6=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor6) @if($cita->ApneaSuenio->criterio_dos_valor6=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;"> Chofer no tenia copiloto y cumplía o acababa de terminar una jornada larga de trabajo (más de 8 horas) </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor7) @if($cita->ApneaSuenio->criterio_dos_valor7=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_dos_valor7) @if($cita->ApneaSuenio->criterio_dos_valor7=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left" class="tdheader" style="font-size:x-small;padding:1px;">Clasificación del (los) “Choques” o accidentes vehiculares del postulante (marque solo una categoría) </td>
            <td  width="10%" align="center" class="tdheader" style="font-size:x-small;border-left:0.5px  solid gray">SI</td>
            <td  width="10%" align="center" class="tdheader" style="font-size:x-small; border-left:0.5px  solid gray">NO</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Accidente confirmado por Somnolencia (Criterio 1 positivo) </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor1) @if($cita->ApneaSuenio->clasificacion_valor1=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor1) @if($cita->ApneaSuenio->clasificacion_valor1=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Accidente con alta sospecha de somnolencia (Criterio 2 positivo) </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor2) @if($cita->ApneaSuenio->clasificacion_valor2=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor2) @if($cita->ApneaSuenio->clasificacion_valor2=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Accidente con escasa evidencia/ sospecha por somnolencia (solo 1 ítem de criterio 2) </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor3) @if($cita->ApneaSuenio->clasificacion_valor3=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor3) @if($cita->ApneaSuenio->clasificacion_valor3=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">No se dispones de datos suficiente para clasificar el (los) incidentes. </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor4) @if($cita->ApneaSuenio->clasificacion_valor4=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor4) @if($cita->ApneaSuenio->clasificacion_valor4=='1') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Accidente no debido a somnolencia (información suficiente que descarta la somnolencia)</td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor5) @if($cita->ApneaSuenio->clasificacion_valor5=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->clasificacion_valor5) @if($cita->ApneaSuenio->clasificacion_valor5=='1') x  @endif @endisset</td>
        </tr>
    </table>
    <table>
        <tr>
            <td colspan="3" align="left" class="tdheader" style="font-size:x-small;padding:1px;">3.	ANTEC. FAMILIAR DE APNEA DEL SUEÑO</td>
        </tr>
        <tr>
            <td width="10%" style="font-size:x-small;padding:1px;">SI &nbsp;@isset($cita->ApneaSuenio->antecedente_faminiliar_apnea) @if($cita->ApneaSuenio->antecedente_faminiliar_apnea=='1') x  @endif @endisset</td>
            <td width="10%" style="font-size:x-small;padding:1px;">NO &nbsp;@isset($cita->ApneaSuenio->antecedente_faminiliar_apnea) @if($cita->ApneaSuenio->antecedente_faminiliar_apnea=='0') x  @endif @endisset</td>
            <td width="80%" style="font-size:x-small;padding:1px;">INDIQUE &nbsp; @isset($cita->ApneaSuenio->antecedente_faminiliar_apnea_descripcion) {{$cita->ApneaSuenio->antecedente_faminiliar_apnea_descripcion}} @endisset</td>
        </tr>
    </table>
    <table>
        <tr>
            <td  width="90%" align="left" class="tdheader" style="font-size:x-small;padding:1px;">4.	ENTREVISTA AL PACIENTE </td>
            <td  width="10%" align="center" class="tdheader" style="font-size:x-small;border-left:0.5px  solid gray">SI</td>
            <td  width="10%" align="center" class="tdheader" style="font-size:x-small;border-left:0.5px  solid gray">NO</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">En los ultimo 5 años, su pareja o esposa le ha comentado que ronca al dormir</td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->entrevista_valor1) @if($cita->ApneaSuenio->entrevista_valor1=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->entrevista_valor1) @if($cita->ApneaSuenio->entrevista_valor1=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">En los últimos 5 años, su pareja o esposa le ha comentado que  hace ruidos al respirar mientras duerme</td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->entrevista_valor2) @if($cita->ApneaSuenio->entrevista_valor2=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->entrevista_valor2) @if($cita->ApneaSuenio->entrevista_valor2=='0') x  @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">En los últimos 5 años, su pareja o esposa le ha comentado que deja de respirar cuando duerme (pausa respiratoria)</td>
            <td  width="10%" align="center" style="font-size:x-small;"> @isset($cita->ApneaSuenio->entrevista_valor3) @if($cita->ApneaSuenio->entrevista_valor3=='1')  x @endif @endisset </td>
            <td  width="10%" align="center"  style="font-size:x-small;"> @isset($cita->ApneaSuenio->entrevista_valor3) @if($cita->ApneaSuenio->entrevista_valor3=='0') x @endif @endisset </td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Comparado con sus compañeros, usted siente que tiene más sueño o cansancio que ellos mientras trabaja</td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->entrevista_valor4) @if($cita->ApneaSuenio->entrevista_valor4=='1') x  @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->entrevista_valor4) @if($cita->ApneaSuenio->entrevista_valor4=='0') x  @endif @endisset</td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="55%" align="justify" style="font-size:x-small;">Declaro que las respuestas son ciertas según mi leal saber y entender. En caso de ser requeridos, los resultados del examen medico pueden ser revelados en términos generales, al Departamento de Salud Ocupacional de la compañía. Los resultados pueden ser enviados a mi médico particular de ser considerado necesario. </td>
            <td width="22.5%" style="font-size:xx-small;">
                <div class="" style="text-align:center; margin-top:6%;">
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
    <br><br>
    <table>
        <tr>
            <td  width="100%" align="left" class="tdheader" style="font-size:x-small;padding:1px;">5.	EXAMEN FISICO </td>
        </tr>
    </table>
    <table  style="font-size:x-small;text-align:center">
        <tr>
            <td width="30%" style="padding:2px;">
                <div>
                    <div class=""style="display:inline">
                        Peso
                    </div>
                    <div class=""style="display:inline" >
                        @isset($cita->ApneaSuenio->peso) {{$cita->ApneaSuenio->peso}} @endisset kg
                    </div>
                </div>
            </td>
            <td width="30%">
                <div>
                    <div class=""style="display:inline">
                        Talla
                    </div>
                    <div class=""style="display:inline" >
                        @isset($cita->ApneaSuenio->talla) {{$cita->ApneaSuenio->talla}} @endisset mts
                    </div>
                </div>
            </td>
            <td width="40%">
                <div>
                    <div class=""style="display:inline">
                        IMC (Kg/m2)
                    </div>
                    <div class=""style="display:inline" >
                        @isset($cita->ApneaSuenio->imc) {{$cita->ApneaSuenio->imc}} @endisset &nbsp; (> 35 es de alto riesgo)
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td width="30%" style="padding:2px;">
                <div>
                    <div class=""style="display:inline">
                        Circunferencia de cuello
                    </div>
                    <div class=""style="display:inline" >

                    </div>
                </div>
            </td>
            <td width="30%">
                <div>
                    <div class=""style="display:inline">
                        Varón (menor de 43.2 cm, es normal)


                    </div>
                    <div class=""style="display:inline" >

                    </div>
                </div>
            </td>
            <td width="40%">
                <div>
                    <div class=""style="display:inline">
                        Mujer (menor de 40.6 cm, es normal)
                    </div>
                    <div class=""style="display:inline" >

                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td width="30%" style="padding:2px;">
                <div>
                    <div class=""style="display:inline">
                        Circunferencia de cuello
                    </div>
                    <div class=""style="display:inline" >
                        @isset($cita->ApneaSuenio->circunferencia) {{$cita->ApneaSuenio->circunferencia}} @endisset  &nbsp;cm
                    </div>
                </div>
            </td>
            <td width="30%">
                <div>
                    <div class=""style="display:inline">
                        Varón


                    </div>
                    <div class=""style="display:inline" >
                        {{-- SI  &nbsp;   --}}
                        @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='1') x @endif  @endisset
                        {{-- &nbsp; &nbsp;
                         &nbsp; &nbsp; NO @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='0')  &nbsp; x @endif  @endisset --}}
                    </div>
                </div>
            </td>
            <td width="40%">
                <div>
                    <div class=""style="display:inline">
                        Mujer
                    </div>
                    <div class=""style="display:inline" >
                        {{-- SI  &nbsp; --}}
                        @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='0') x @endif  @endisset
                        {{-- &nbsp; &nbsp;  &nbsp; &nbsp; NO
                      @isset($cita->ApneaSuenio->genero_paciente) @if($cita->ApneaSuenio->genero_paciente=='0')
                        &nbsp; x @endif  @endisset --}}

                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td width="30%" style="padding:2px;">
                <div>
                    <div class=""style="display:inline">
                        P. Sistólica
                    </div>
                    <div class=""style="display:inline" >
                        @isset($cita->ApneaSuenio->psistolica) {{$cita->ApneaSuenio->psistolica}} @endisset &nbsp; &nbsp; mmHg
                    </div>
                </div>
            </td>
            <td width="30%">
                <div>
                    <div class=""style="display:inline">
                        P. Diastólica
                    </div>
                    <div class=""style="display:inline" >
                        @isset($cita->ApneaSuenio->pdiastolica) {{$cita->ApneaSuenio->pdiastolica}} @endisset &nbsp; &nbsp; mmHg
                    </div>
                </div>
            </td>
            <td width="40%">
                <div>
                    <div class=""style="display:inline">
                        Epworth    &nbsp; &nbsp; ESS
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
            <td width="100%">Evaluación de vía aérea superior MALLAMPATI (marque con una X)</td>
        </tr>
        <tr>
            <td><img src="{{asset('img/apnea.jpg')}}" alt="" style="margin:30px;" height="200px" width="400px"> </td>
        </tr>
    </table>
    <table>
        <tr>
            <td colspan="3" align="left" class="tdheader" style="font-size:x-small;padding:1px;">6.	CONCLUSION DE LA EVALUACION</td>
        </tr>

    </table>
    <table>
        <tr>
            <td  width="90%" align="left" style="font-size:x-small;padding:1px;">*Ampliación: oximetría, Polisomnografia, seguimiento de tratamiento y/o interconsulta</td>
            <td  width="10%" align="center"  style="font-size:x-small;">SI</td>
            <td  width="10%" align="center" style="font-size:x-small;">NO</td>
        </tr>
        <tr>
            <td  width="90%" align="left" style="font-size:x-small;padding:1px;"> <strong>Requiere ampliación antes de certificar aptitud para conducir (un criterio positivo)</strong> </td>
            <td  width="10%" align="center"  style="font-size:x-small;"></td>
            <td  width="10%" align="center" style="font-size:x-small;"></td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Criterio A: Excesiva somnolencia  determinada por ESS mayor de 15 o cabeceo presenciado durante la evaluación (espera), antecedente de accidente por somnolencia o con alta sospecha por somnolencia. (ÚLTIMO AÑO)</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_a) @if($cita->ApneaSuenio->criterio_a=='1') x @endif @endisset</td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_a) @if($cita->ApneaSuenio->criterio_a=='0') x @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Criterio B: Antecedentes de SAS sin control  reciente o sin cumplimiento de tratamiento (con CPAP o cirugía).</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_b) @if($cita->ApneaSuenio->criterio_b=='1') x @endif @endisset</td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_b) @if($cita->ApneaSuenio->criterio_b=='0') x @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Criterio C: Historia de higiene de sueño sugiere SAS (presencia de ronquido, somnolencia excesiva durante la actividad, pausas respiratorias)</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_c) @if($cita->ApneaSuenio->criterio_c=='0') x @endif @endisset</td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_c) @if($cita->ApneaSuenio->criterio_c=='0') x @endif @endisset</td>
        </tr>
        <tr>
            <td  width="90%" align="left"  style="font-size:x-small;padding:1px;">Criterio D: Cumple con 2 o más de las siguiente:
                IMC mayor o igual a 30.
                Hipertensión Arterial
                Circunferencia del cuello anormal.
                Puntuación  de Epworth mayor de 10 y menor de 16.
                Evaluación de vía aérea superior patológico (Mallampati III o IV)
            </td>
            <td  width="10%" align="center" style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_d) @if($cita->ApneaSuenio->criterio_d=='1') x @endif @endisset</td>
            <td  width="10%" align="center"  style="font-size:x-small;">@isset($cita->ApneaSuenio->criterio_d) @if($cita->ApneaSuenio->criterio_d=='1') x @endif @endisset</td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="100%"> <strong>Nombres y Apellidos del Médico – N° de Colegiatura</strong> </td>
        </tr>
        <tr>
            <td style="height:50px;overflow:hidden"> </td>
        </tr>
        <tr>
            <td width="100%"> <strong>Observaciones/Recomendaciones</strong> </td>
        </tr>
        <tr>
            <td style="height:50px;overflow:hidden"> </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="55%" align="justify" style="font-size:x-small;">Declaro que las respuestas son ciertas según mi leal saber y entender. En caso de ser requeridos, los resultados del examen medico pueden ser revelados en términos generales, al Departamento de Salud Ocupacional de la compañía. Los resultados pueden ser enviados a mi médico particular de ser considerado necesario. </td>
            <td width="22.5%" style="font-size:xx-small;">
                <div class="" style="text-align:center; margin-top:6%;">
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
    {{--SALTO DE LINEA--}}
    <div style="page-break-after: always;"></div>
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
