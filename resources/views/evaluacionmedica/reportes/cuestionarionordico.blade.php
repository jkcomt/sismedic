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

        ul {
            list-style: none;
        }

        .equis:before {
            content: 'x';
            border :1px solid black;
            padding-left:0.25em;
            padding-right:0.25em;
            text-align: center;
        }

        .no-equis:before {
            padding-left:1em;
            border :1px solid black;
        }

        .radio ul{
            margin-bottom:0px;
        }
        .ml-5{
            margin-left: 5px
        }
        .ml-10{
            margin-left: 10px
        }

        /*li{*/
            /*font-size: 10px;*/
            /*margin-bottom:0px !important;*/
            /*padding-bottom:0px !important;*/
        /*}*/

        h5{
            margin-bottom:0px;
            margin-top:0px;
            padding-bottom:0px;
        }

        /*ul{*/
            /*margin-bottom:0px !important;*/
            /*padding-bottom:0px !important;*/
        /*}*/
        .bg-gray{
            background-color: #9d9d9d;
        }

        table{
            font-size: 12px;
        }

        p{
            font-size:12px;
            padding: 5px;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="header">
        <u>CUESTIONARIO NÓRDICO DE SIGNOS Y SINTOMAS MUSCULARES</u>
    </div>
    <br>
    <table border="1">
        <tr>
            <td colspan="4" class="text-center bg-gray"><strong>1. Datos Personales</strong></td>
        </tr>
        <tr>
            <td><strong>Nombre:</strong></td>
            <td colspan="3">{{$cuestionarioNordico->cita->paciente->apellido_paterno.' '.$cuestionarioNordico->cita->paciente->apellido_materno.' '.$cuestionarioNordico->cita->paciente->nombres}}</td>
        </tr>
        <tr>
            <td><strong>Edad en años cumplidos:</strong></td>
            <td> {{Carbon\Carbon::parse($cuestionarioNordico->fecha_registro)->diffInYears(Carbon\Carbon::parse($cuestionarioNordico->cita->paciente->fecha_nacimiento))}}</td>
            <td><strong>Género</strong></td>
            <td>{{ucwords($cuestionarioNordico->cita->paciente->sexo)}}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Cuantos Años y meses ha estado Ud. haciendo el presente tipo de trabajo:</strong></td>
            <td>{{$cuestionarioNordico->datos_personales_anio}} años</td>
            <td>{{$cuestionarioNordico->datos_personales_mes}} meses</td>
        </tr>
        <tr>
            <td colspan="2"><strong>En Promedio ¿Cuantas Horas a la semana Trabaja?</strong></td>
            <td colspan="2">{{$cuestionarioNordico->datos_personales_horas}} Horas</td>
        </tr>
        <tr>
            <td ><strong>Es Ud. :</strong></td>
            <td colspan="3" class="text-center">{{ucwords($cuestionarioNordico->datos_personales_usted_es)}}</td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td colspan="4" class="text-center bg-gray"><strong>2. Problemas con los Organos de Locomoción</strong></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 50%;"><strong>Para ser respondido por todos</strong></td>
            <td colspan="2" style="width: 50%;"><strong>Para ser respondido unicamente por quienes han tenido problemas</strong></td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="text-justify">
                    <p>
                    Ha tenido usted cualquier tiempo en los últimos 12 meses, problemas (molestias,dolor o disconformidad) en:
                    </p>
                </div>
            </td>
            <td>
                <div class="text-justify">
                    <p>
                    Ha estado impidiendo en cualquier tiempo durante los pasados 12 meses para hacer sus rutinas habituales en el trabajo o su casa por este problema
                    </p>
                </div>
            </td>
            <td>
                <div class="text-justify">
                    <p>
                    Ud. ha tenido problemas durante los últimos 7 días
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td><strong>Cuello</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_cuello) @if($cuestionarioNordico->problemas_organos_cuello) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->cuello_rendimiento_laboral_casa) @if($cuestionarioNordico->cuello_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->cuello_ultimos7dias) @if($cuestionarioNordico->cuello_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Hombros</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_hombros) {{ucwords($cuestionarioNordico->problemas_organos_hombros)}} @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->hombros_rendimiento_laboral_casa) @if($cuestionarioNordico->hombros_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->hombros_ultimos7dias) @if($cuestionarioNordico->hombros_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Codos</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_codos) {{ucwords($cuestionarioNordico->problemas_organos_codos)}} @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->codos_rendimiento_laboral_casa) @if($cuestionarioNordico->codos_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->codos_ultimos7dias) @if($cuestionarioNordico->codos_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Muñeca</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_muniecas) {{ucwords($cuestionarioNordico->problemas_organos_muniecas)}} @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->muniecas_rendimiento_laboral_casa) @if($cuestionarioNordico->muniecas_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->muniecas_ultimos7dias) @if($cuestionarioNordico->muniecas_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Espalda Alta (Tórax)</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_espalda_alta) @if($cuestionarioNordico->problemas_organos_espalda_alta) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->espalda_alta_rendimiento_laboral_casa) @if($cuestionarioNordico->espalda_alta_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->espalda_alta_ultimos7dias) @if($cuestionarioNordico->espalda_alta_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Espalda Baja (Region Lumbar)</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_espalda_baja) @if($cuestionarioNordico->problemas_organos_espalda_baja) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->espalda_baja_rendimiento_laboral_casa) @if($cuestionarioNordico->espalda_baja_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->espalda_baja_ultimos7dias) @if($cuestionarioNordico->espalda_baja_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Una o ambas caderas/ muslos</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_caderas_muslos) @if($cuestionarioNordico->problemas_organos_caderas_muslos) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->caderas_muslos_rendimiento_laboral_casa) @if($cuestionarioNordico->caderas_muslos_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->caderas_muslos_ultimos7dias) @if($cuestionarioNordico->caderas_muslos_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Una o ambas rodillas</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_rodillas) @if($cuestionarioNordico->problemas_organos_rodillas) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->rodillas_rendimiento_laboral_casa) @if($cuestionarioNordico->rodillas_rendimiento_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->rodillas_ultimos7dias) @if($cuestionarioNordico->rodillas_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>Uno o ambas tobillos/pies</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_organos_tobillos_pies) @if($cuestionarioNordico->problemas_organos_tobillos_pies) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->tobillos_pies_laboral_casa) @if($cuestionarioNordico->tobillos_pies_laboral_casa) SI @else NO @endif @endisset</td>
            <td class="text-center">@isset($cuestionarioNordico->tobillos_pies_ultimos7dias) @if($cuestionarioNordico->tobillos_pies_ultimos7dias) SI @else NO @endif @endisset</td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td colspan="2" class="text-center bg-gray"><strong>3. Problemas con espada baja</strong></td>
        </tr>
        <tr>
            <td><strong>1. ¿Ud ha tenido problemas en la espalda baja(molestia, dolor, disconfort)?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_espalda_baja_uno) @if($cuestionarioNordico->problemas_espalda_baja_uno) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>2. ¿Ud ha estado hospitalizado por problemas de espalda baja?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_espalda_baja_dos) @if($cuestionarioNordico->problemas_espalda_baja_dos) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>3. ¿Ud ha tenido cambios de trabajo o actividad por problemas de espalda baja?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_espalda_baja_tres) @if($cuestionarioNordico->problemas_espalda_baja_tres) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>4. ¿Cúal es la duración total del tiempo en que ha tenido problemas de espalda le han impedido hacer rutinas de trabajo?</strong></td>
            <td class="text-center">
                @isset($cuestionarioNordico->problemas_espalda_baja_cuatro)
                    @if($cuestionarioNordico->problemas_espalda_baja_cuatro == "1")
                        0 días
                    @elseif($cuestionarioNordico->problemas_espalda_baja_cuatro == "2")
                        1 - 7 días
                    @elseif($cuestionarioNordico->problemas_espalda_baja_cuatro == "3")
                        8 - 30 días
                    @elseif($cuestionarioNordico->problemas_espalda_baja_cuatro == "4")
                        Más de 30 días
                    @elseif($cuestionarioNordico->problemas_espalda_baja_cuatro == "5")
                        Todos los días
                    @endif
                @endisset
            </td>
        </tr>
        <tr>
            <td colspan="2"><strong>5. ¿Los problemas de espalda baja han causado a ud. reduccion de su actividad física durante los ultimos 12 meses?</strong></td>
        </tr>
        <tr>
            <td><div style="padding-left:20px;">a. Actividad de trabajo (en el trabajo o la casa)</div></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_espalda_baja_cinco) @if($cuestionarioNordico->problemas_espalda_baja_cinco) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><div style="padding-left:20px;">b. Actividades recreativas</div></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_espalda_baja_seis) @if($cuestionarioNordico->problemas_espalda_baja_seis) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>6. ¿Cuál es la duración total del tiempo en que ha tenido problemas de espalda baja durante los últimos 12 meses?</strong></td>
            <td class="text-center">
                @isset($cuestionarioNordico->problemas_espalda_baja_siete)
                    @if($cuestionarioNordico->problemas_espalda_baja_siete == "1")
                        0 días
                    @elseif($cuestionarioNordico->problemas_espalda_baja_siete == "2")
                        1 - 7 días
                    @elseif($cuestionarioNordico->problemas_espalda_baja_siete == "3")
                        8 - 30 días
                    @elseif($cuestionarioNordico->problemas_espalda_baja_siete == "4")
                        Más de 30 días
                    @endif
                @endisset
            </td>
        </tr>
        <tr>
            <td><strong>7. ¿Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas de espalda baja durante los últimos 12 meses?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_espalda_baja_seis) @if($cuestionarioNordico->problemas_espalda_baja_ocho) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>8. ¿Ha tenido problemas de espalda baja en algún momento durante los últimos 7 días?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_espalda_baja_nueve) @if($cuestionarioNordico->problemas_espalda_baja_nueve) SI @else NO @endif @endisset</td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td colspan="2" class="text-center bg-gray"><strong>4. Problemas con los hombros</strong></td>
        </tr>
        <tr>
            <td><strong>9. ¿Ud ha tenido problemas de hombros(molestia, dolor, disconfort)?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_uno) @if($cuestionarioNordico->problemas_hombros_uno) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>10 ¿Ud ha tenido lesiones en sus hombros en un accidente?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_dos) {{ucwords($cuestionarioNordico->problemas_hombros_dos)}} @endisset</td>
        </tr>
        <tr>
            <td><strong>11. ¿Ud ha tenido un cambio  de trabajo  o actividad por problemas de hombros?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_tres) @if($cuestionarioNordico->problemas_hombros_tres) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>12 ¿Ud. ha tenido problemas en los hombros durante los últimos 12 meses?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_cuatro) {{ucwords($cuestionarioNordico->problemas_hombros_cuatro)}} @endisset</td>
        </tr>
        <tr>
            <td><strong>13 ¿Cual es la duración total del tiempo en que Ud. ha tenido problemas de hombros en lós últimos 12 meses?</strong></td>
            <td class="text-center">
                @isset($cuestionarioNordico->problemas_hombros_cinco)
                    @if($cuestionarioNordico->problemas_hombros_cinco == "1")
                        0 días
                    @elseif($cuestionarioNordico->problemas_hombros_cinco == "2")
                        1 - 7 días
                    @elseif($cuestionarioNordico->problemas_hombros_cinco == "3")
                        8 - 30 días
                    @elseif($cuestionarioNordico->problemas_hombros_cinco == "4")
                        Más de 30 días
                    @endif
                @endisset
            </td>
        </tr>
        <tr>
            <td colspan="2"><strong>14. ¿El problemas en sus hombros le han causado una disminución de su actividad durante los últimos 12 meses?</strong></td>
        </tr>
        <tr>
            <td><div style="padding-left:20px;">a. Actividad de trabajo (en el trabajo o la casa)</div></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_seis) @if($cuestionarioNordico->problemas_hombros_seis) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><div style="padding-left:20px;">b. Actividades recreativas</div></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_siete) @if($cuestionarioNordico->problemas_hombros_siete) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>15. ¿Cuál es la duración total del tiempo que los problemas en sus hombros le han impedido hacer rutinas de trabajo(en el trabajo o en casa) durante los últimos 12 meses?</strong></td>
            <td class="text-center">
                @isset($cuestionarioNordico->problemas_hombros_ocho)
                    @if($cuestionarioNordico->problemas_hombros_ocho == "1")
                        0 días
                    @elseif($cuestionarioNordico->problemas_hombros_ocho == "2")
                        1 - 7 días
                    @elseif($cuestionarioNordico->problemas_hombros_ocho == "3")
                        8 - 30 días
                    @elseif($cuestionarioNordico->problemas_hombros_ocho == "4")
                        Más de 30 días
                    @endif
                @endisset
            </td>
        </tr>
        <tr>
            <td><strong>16 ¿Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas en los hombros durante los últimos 12 meses?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_nueve) @if($cuestionarioNordico->problemas_hombros_nueve) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>17. ¿Ha tenido problemas de hombros en algún momento durante los últimos 7 días?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_hombros_dies) {{ucwords($cuestionarioNordico->problemas_hombros_dies)}} @endisset</td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td colspan="2" class="text-center bg-gray"><strong>5. Problemas con el cuello</strong></td>
        </tr>
        <tr>
            <td><strong>1. ¿Ud ha tenido problemas en el cuello (molestia, dolor, disconfort)?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_cuello_uno) @if($cuestionarioNordico->problemas_cuello_uno) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>2. ¿Ud ha sido lesionado en el cuello en un accidente?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_cuello_dos) @if($cuestionarioNordico->problemas_cuello_dos) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>3. ¿Ud ha tenido cambios de trabajo o actividad pro problemas en el cuello?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_cuello_tres) @if($cuestionarioNordico->problemas_cuello_tres) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>4. ¿Cuál es la duración total de tiempo en que se ha tenido problemas en el cuello durante los últimos 12 meses?</strong></td>
            <td class="text-center">
                @isset($cuestionarioNordico->problemas_cuello_cuatro)
                    @if($cuestionarioNordico->problemas_cuello_cuatro == "1")
                        0 días
                    @elseif($cuestionarioNordico->problemas_cuello_cuatro == "2")
                        1 - 7 días
                    @elseif($cuestionarioNordico->problemas_cuello_cuatro == "3")
                        8 - 30 días
                    @elseif($cuestionarioNordico->problemas_cuello_cuatro == "4")
                        Más de 30 días
                    @elseif($cuestionarioNordico->problemas_cuello_cuatro == "5")
                        Todos los días
                    @endif
                @endisset
            </td>
        </tr>
        <tr>
            <td colspan="2"><strong>5. ¿Los problemas de su cuello han causado  a Ud. reduccion de su actividad fisica durante los últimos 12 meses?</strong></td>
        </tr>
        <tr>
            <td><div style="padding-left:20px;">a. Actividad de trabajo (en el trabajo o la casa)</div></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_cuello_cinco) @if($cuestionarioNordico->problemas_cuello_cinco) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><div style="padding-left:20px;">b. Actividades recreativas</div></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_cuello_seis) @if($cuestionarioNordico->problemas_cuello_seis) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>6. ¿Cuál es la duración total del tiempo que los problemas de su cuello le han impedido hacer rutinas de trabajo(en el trabajo o en casa) durante los últimos 12 meses</strong></td>
            <td class="text-center">
                @isset($cuestionarioNordico->problemas_cuello_cuatro)
                    @if($cuestionarioNordico->problemas_cuello_siete == "1")
                        0 días
                    @elseif($cuestionarioNordico->problemas_cuello_siete == "2")
                        1 - 7 días
                    @elseif($cuestionarioNordico->problemas_cuello_siete == "3")
                        8 - 30 días
                    @elseif($cuestionarioNordico->problemas_cuello_siete == "4")
                        Más de 30 días
                    @endif
                @endisset
            </td>
        </tr>
        <tr>
            <td><strong>7. ¿Ha sido visto por un médico, fisioterapista, quiropractico u otra persona del area debido a problemas de su cuello durante los últimos 12 meses?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_cuello_ocho) @if($cuestionarioNordico->problemas_cuello_ocho) SI @else NO @endif @endisset</td>
        </tr>
        <tr>
            <td><strong>8. ¿Ha tenido problemas de su cuello en algún momento durante los últimos 7 días?</strong></td>
            <td class="text-center">@isset($cuestionarioNordico->problemas_cuello_nueve) @if($cuestionarioNordico->problemas_cuello_nueve) SI @else NO @endif @endisset</td>
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