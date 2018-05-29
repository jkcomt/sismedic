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

    li{
        font-size: 10px;
        margin-bottom:0px !important;
        padding-bottom:0px !important;
    }

        h5{
            margin-bottom:0px;
            margin-top:0px;
            padding-bottom:0px;
        }

    ul{
        margin-bottom:0px !important;
        padding-bottom:0px !important;
    }
    </style>
</head>
<body>
<div class="container-fluid">

  <div class="header">
    <u>USO DE RESPIRADORES</u>
  </div>
<table border="1">
    <thead>
    <tr>
        <td colspan="2">7.1 Ficha: Evaluación del Lugar de Trabajo (llenado por el personal de salud)</td>
    </tr>
    </thead>
 <tr>
     <td style="width: 50%;">
         <table >
             <tr>
                 <td>
                     <h5>Marcar el tipo de respirador(es) a utilizar</h5>
                     <ul class="list-unstyled">
                         <li class="@isset($usoRespirador->tipo_respirador_mascara_polvo) equis @else no-equis @endisset">

                             Máscara de polvo
                         </li>
                         <li class="@isset($usoRespirador->tipo_respirador_media_cara) equis @else no-equis @endisset">

                             1/2 cara</li>
                         <li class="@isset($usoRespirador->tipo_respirador_cara_completa) equis @else no-equis @endisset">

                             Cara completa</li>
                         <li class="@isset($usoRespirador->tipo_respirador_puri_aire_sin_energia) equis @else no-equis @endisset">

                             Purificador de aire (sin energía)</li>
                         <li class="@isset($usoRespirador->tipo_respirador_puri_aire_con_energia) equis @else no-equis @endisset">

                             Purificador de aire (con energia)</li>
                         <li class="@isset($usoRespirador->tipo_respirador_respirador_atmosfera) equis @else no-equis @endisset">

                             Respirador suministrador de atmósfera</li>
                         <li class="@isset($usoRespirador->tipo_respirador_combinacion_linea_aire_scba) equis @else no-equis @endisset">

                             Combinación línea de aire SCBA</li>
                         <li class="@isset($usoRespirador->tipo_respirador_respirador_flujo_continuo) equis @else no-equis @endisset">

                             Respirador de Flujo Continuo</li>
                         <li class="@isset($usoRespirador->tipo_respirador_respirador_suministro_aire) equis @else no-equis @endisset">

                             Respirador suministrador de aire</li>
                         <li class="@isset($usoRespirador->tipo_respirador_scba_circuito_abierto) equis @else no-equis @endisset">

                             SCBA de circuito abierto</li>
                         <li class="@isset($usoRespirador->tipo_respirador_scba_circuito_cerrado) equis @else no-equis @endisset">

                             SCBA de circuito cerrado</li>
                     </ul>
                 </td>
             </tr>
             <tr>
                 <td>
                     <h5>Tipo de Protección</h5>
                     <ul class="list-unstyled">
                         <li class="@isset($usoRespirador->tipo_respirador_filtro_hepa) equis @else no-equis @endisset">

                             Filtro HEPA (partículas)
                         </li>
                         <li class="@isset($usoRespirador->tipo_respirador_cartucho_gas_acido) equis @else no-equis @endisset">

                             Cartuchos (Gas acido)</li>
                         <li class="@isset($usoRespirador->tipo_respirador_cartucho_vapor_organico) equis @else no-equis @endisset">

                             Cartuchos (Vapor Orgánico)</li>
                         <li class="@isset($usoRespirador->tipo_respirador_cartucho_amoniaco) equis @else no-equis @endisset">

                             Cartuchos (amoniaco)</li>
                         <li class="@isset($usoRespirador->tipo_respirador_cartucho_mercurio) equis @else no-equis @endisset">

                             Cartuchos (Mercurio)</li>
                     </ul>
                 </td>
             </tr>
             <tr>
                 <td>
                     <h5>Esfuerzo Físico Esperado Requerido</h5>
                     <ul class="list-inline" >
                         <li style="margin-left: 5px" class="@isset($usoRespirador->esfuerzo_fisico_esperado)
                                 @if($usoRespirador->esfuerzo_fisico_esperado == 1)
                                    equis
                                  @else no-equis @endif @endisset">

                             Ligero
                         </li>
                         <li style="margin-left: 5px" class="@isset($usoRespirador->esfuerzo_fisico_esperado) @if($usoRespirador->esfuerzo_fisico_esperado == 2) equis @else no-equis @endif @endisset">

                             Moderado</li>
                         <li style="margin-left: 5px" class="@isset($usoRespirador->esfuerzo_fisico_esperado)
                                     @if($usoRespirador->esfuerzo_fisico_esperado == 3)
                                             equis
                                      @else no-equis @endif @endisset">

                             Pesado</li>
                     </ul>
                 </td>
             </tr>
             <tr>
                 <ul class="list-unstyled">
                     <li>Ligero: Sentado mientras escribe, tipea, manejo, manual de cargas ligero (menor 3 mts)</li>
                     <li>Moderado: Manejo manual de cargas menos de 15 Kg, operando equipos (menor 5 mts)</li>
                     <li>Pesado: manejo de cargas encima de 25 Kg, subiendo escaleras con carga, palaneando (mayor 5 mts)</li>
                 </ul>
             </tr>
         </table>
     </td>
     <td style="width: 50%;">
         <table >
             <tr>
                 <td>
                     <h5>Frecuencia de uso</h5>
                     <ul class="list-unstyled" >
                         <li class="@isset($usoRespirador->frecuencia_uso) @if($usoRespirador->frecuencia_uso == 1) equis @else no-equis @endif @endisset">

                             De manera diaria
                         </li>
                         <li class="@isset($usoRespirador->frecuencia_uso) @if($usoRespirador->frecuencia_uso == 2) equis @else no-equis @endif @endisset">

                             Ocasional – pero no más de dos veces por semana-hrs</li>
                         <li class="@isset($usoRespirador->frecuencia_uso) @if($usoRespirador->frecuencia_uso == 3) equis @else no-equis @endif @endisset">

                             Rara vez – uso de emergencia solamente.</li>
                         <li>
                             Promedio de horas de uso por Día: {{$usoRespirador->promedio_horas_dia}}
                         </li>
                     </ul>
                 </td>
             </tr>
             <tr>
                 <td>
                     <h5>Exposición de Materiales Peligros</h5>
                     <ul class="list-unstyled">
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_humo_metal) equis @else no-equis @endisset">

                             Humo de Metal
                         </li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_arsenico) equis @else no-equis @endisset">

                             Arsénico</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_plomo) equis @else no-equis @endisset">

                             Plomo</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_asbesto) equis @else no-equis @endisset">

                             Asbesto</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_dpm) equis @else no-equis @endisset">

                             DPM</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_monoxido_carbono) equis @else no-equis @endisset">

                             Monóxido de Carbono
                         </li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_dioxido_carbono) equis @else no-equis @endisset">

                             Dióxido de Carbono</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_vapor_organico) equis @else no-equis @endisset">

                             Vapor Orgánico</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_amoniaco) equis @else no-equis @endisset">

                             Amoniaco</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_silice) equis @else no-equis @endisset">

                             Sílice</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_mercurio) equis @else no-equis @endisset">

                             Mercurio</li>
                         <li class="@isset($usoRespirador->expo_materiales_peligrosos_otros) equis @else no-equis @endisset">

                             Otros</li>
                     </ul>
                 </td>
             </tr>
             <tr>
                 <td>
                     <h5>Condiciones Especiales de Trabajo</h5>
                     <ul class="list-unstyled">
                         <li class="@isset($usoRespirador->cond_especiales_elevaciones_altas_2500) equis @else no-equis @endisset">

                             Elevaciones Altas (mayor a 2500 msnm)
                         </li>
                         <li class="@isset($usoRespirador->cond_especiales_temperaturas_extremas) equis @else no-equis @endisset">

                             Temperaturas Extremas</li>
                         <li class="@isset($usoRespirador->cond_especiales_atmosferas_humedas) equis @else no-equis @endisset">

                             Atmosferas Húmedas</li>
                         <li class="@isset($usoRespirador->cond_especiales_espacios_confirmados) equis @else no-equis @endisset">

                             Espacios confirmados</li>
                         <li class="@isset($usoRespirador->cond_especiales_atmosferas_idlh) equis @else no-equis @endisset">

                             Atmosferas IDLH</li>
                         <li class="@isset($usoRespirador->cond_especiales_hazmat_fuego_rescate_mina) equis @else no-equis @endisset">

                             Hazmat / Fuego / Rescate Mina
                         </li>
                         <li class="@isset($usoRespirador->cond_especiales_epp_adicional_utilizado) equis @else no-equis @endisset">

                             EPP adicional utilizado</li>
                         <li class="@isset($usoRespirador->cond_especiales_otros) equis @else no-equis @endisset">

                             Otros: {{$usoRespirador->cond_especiales_otros_descripcion}}</li>
                     </ul>
                 </td>
             </tr>
         </table>
     </td>
 </tr>
</table>
    {{--<br><br><br><br><br><br><br><br><br><br><br><br><br>--}}

    <table border="1">
        <tr>
            <td colspan="2">7.2 Ficha: Evaluación Personal del Empleado (llenado por el trabajador)</td>
        </tr>
        <tr>
            <td style="width: 25%;">
                <h5>
                    Sección 1:
                    <br>
                    Las Preguntas de la 1 a 8 deben ser respondidas por los empleados que usarán cualquier respirador.
                    <br>
                    Por favor colocar “SI” o “No”

                </h5>
            </td>
            <td style="width: 75%;">
                <h5>1. ¿Fuma o fumó en el último mes?</h5>
                <div>
                    <ul class="list-inline">
                        <li style="margin-left: 5px" class="@isset($usoRespirador->fuma) @if($usoRespirador->fuma == 1) equis @else no-equis @endif @endisset">

                            Si
                        </li>
                        <li style="margin-left: 5px" class="@isset($usoRespirador->fuma) @if($usoRespirador->fuma == 0) equis @else no-equis @endif @endisset">

                            No</li>
                    </ul>
                </div>
                <h5>2. ¿Ha tenido alguna vez cualquiera de las siguientes condiciones?</h5>
                <div class="small">
                    <ul class="list-inline">
                        <li style="margin-left: 5px;" class="@isset($usoRespirador->cond_palpitaciones) @if($usoRespirador->cond_palpitaciones == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->cond_palpitaciones) @if($usoRespirador->cond_palpitaciones == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px; padding-bottom:0px;">

                            a.	Palpitaciones.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->cond_convulsiones) @if($usoRespirador->cond_convulsiones == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->cond_convulsiones) @if($usoRespirador->cond_convulsiones == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            b.	Convulsiones</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->cond_diabetes) @if($usoRespirador->cond_diabetes == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->cond_diabetes) @if($usoRespirador->cond_diabetes == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            a.	Diabetes</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->cond_reacciones_alergicas) @if($usoRespirador->cond_reacciones_alergicas == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->cond_reacciones_alergicas) @if($usoRespirador->cond_reacciones_alergicas == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5 @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            b.	Reacciones alérgicas que dificultan su respiración.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->cond_claustrofia) @if($usoRespirador->cond_claustrofia == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->cond_claustrofia) @if($usoRespirador->cond_claustrofia == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5 @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            c.	Claustrofobia</li>
                    </ul>
                </div>
                <h5>3. ¿Ha tenido alguna vez algunas de los siguientes problemas pulmonares o de pulmón?</h5>
                <div class="small">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->cond_palpitaciones) @if($usoRespirador->cond_palpitaciones == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->cond_palpitaciones) @if($usoRespirador->cond_palpitaciones == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            a.	Asbestosis.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_pulmonar_asma) @if($usoRespirador->prob_pulmonar_asma == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_pulmonar_asma) @if($usoRespirador->prob_pulmonar_asma == 0) equis ml-10 @else no-equis @endif @else no-equis ml-5 @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            b.	Asma</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_bronquitis_cronica) @if($usoRespirador->prob_bronquitis_cronica == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_bronquitis_cronica) @if($usoRespirador->prob_bronquitis_cronica == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            c.	Bronquitis Crónica.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_enfisema) @if($usoRespirador->prob_enfisema == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_enfisema) @if($usoRespirador->prob_enfisema == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            d.	Enfisema.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_neumonia) @if($usoRespirador->prob_neumonia == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_neumonia) @if($usoRespirador->prob_neumonia == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            e.	Neumonía.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_tuberculosis) @if($usoRespirador->prob_tuberculosis == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_tuberculosis) @if($usoRespirador->prob_tuberculosis == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            f.	Tuberculosis.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_silicosis) @if($usoRespirador->prob_silicosis == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_silicosis) @if($usoRespirador->prob_silicosis == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            g.	Silicosis.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_neumotorax) @if($usoRespirador->prob_neumotorax == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_neumotorax) @if($usoRespirador->prob_neumotorax == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            h.	Neumotórax (pulmón colapsado).</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_cancer_pulmon) @if($usoRespirador->prob_cancer_pulmon == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_cancer_pulmon) @if($usoRespirador->prob_cancer_pulmon == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            i.	Cáncer al pulmón.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_costillas_fracturadas) @if($usoRespirador->prob_costillas_fracturadas == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_costillas_fracturadas) @if($usoRespirador->prob_costillas_fracturadas == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            j.	Costillas fracturadas.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_cualquier_lesion_pulmon) @if($usoRespirador->prob_cualquier_lesion_pulmon == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_cualquier_lesion_pulmon) @if($usoRespirador->prob_cualquier_lesion_pulmon == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            j.	Cualquier lesión al pulmón o cirugías.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_otros) @if($usoRespirador->prob_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_otros) @if($usoRespirador->prob_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            k.	Otros: {{$usoRespirador->prob_otros_descripcion}}</li>
                    </ul>
                </div>
            </td>
        </tr>
    </table>
<table border="1">

    <tr>
        <td style="width: 25%;">
        </td>
        <td style="width: 75%;">
            <h5>4. ¿Tiene algunos de los siguientes síntomas pulmonares o de enfermedades al pulmón?</h5>
            <div class="small radio">
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_reposo) @if($usoRespirador->enf_pulmonar_dif_respirar_reposo == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_reposo) @if($usoRespirador->enf_pulmonar_dif_respirar_reposo == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        a.	Dificultad para respirar en reposos.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo) @if($usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo) @if($usoRespirador->enf_pulmonar_dif_respirar_camina_nivel_suelo == 0) equis ml-10 @else no-equis @endif @else no-equis ml-5 @endisset">

                        No</li>
                    <li style="margin-left: 10px;">

                        b.	Dificultad para respirar cuando camina a nivel del suelo</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado) @if($usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado) @if($usoRespirador->enf_pulmonar_dif_respirar_camina_inclinado == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        c.	Dificultad para respirar cuando camina en un inclinado</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea) @if($usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea) @if($usoRespirador->enf_pulmonar_dif_respirar_realiza_tarea == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        d.	Dificultad para respirar cuando realiza alguna tarea</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_tos_expectoracion) @if($usoRespirador->enf_pulmonar_dif_tos_expectoracion == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_tos_expectoracion) @if($usoRespirador->enf_pulmonar_dif_tos_expectoracion == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        e.	Tos que le produce expectoración.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_tos_despierta_temprano) @if($usoRespirador->enf_pulmonar_dif_tos_despierta_temprano == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_tos_despierta_temprano) @if($usoRespirador->enf_pulmonar_dif_tos_despierta_temprano == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        f.	Tos que lo despierta temprano por la mañana.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_tos_echado) @if($usoRespirador->enf_pulmonar_dif_tos_echado == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_tos_echado) @if($usoRespirador->enf_pulmonar_dif_tos_echado == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        g.	Tos que ocurre cuando se encuentra echado</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_tos_sangre) @if($usoRespirador->enf_pulmonar_dif_tos_sangre == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_tos_sangre) @if($usoRespirador->enf_pulmonar_dif_tos_sangre == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        h.	Tos con sangre.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira) @if($usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira) @if($usoRespirador->enf_pulmonar_dif_silbidos_pecho_respira == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        i.	Silbidos del pecho cuando respira.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo) @if($usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo) @if($usoRespirador->enf_pulmonar_dif_dolor_pecho_respira_profundo == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        j.	Dolor en el pecho cuando respira profundamente.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->enf_pulmonar_dif_otros) @if($usoRespirador->enf_pulmonar_dif_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->enf_pulmonar_dif_otros) @if($usoRespirador->enf_pulmonar_dif_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        l.	Otros:{{$usoRespirador->enf_pulmonar_dif_otros_descripcion}}</li>
                </ul>
            </div>
            <h5>5. ¿Ha tenido alguna vez cualquiera de los siguientes problemas cardiovasculares?</h5>
            <div class="small radio">
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_infarto) @if($usoRespirador->pro_cardiovascular_infarto == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_infarto) @if($usoRespirador->pro_cardiovascular_infarto == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        a.	Infarto.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_angina) @if($usoRespirador->pro_cardiovascular_angina == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_angina) @if($usoRespirador->pro_cardiovascular_angina == 0) equis ml-10 @else no-equis @endif @else no-equis ml-5 @endisset">

                        No</li>
                    <li style="margin-left: 10px;">

                        b.	Angina.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_insuficiencia_cardiaca) @if($usoRespirador->pro_cardiovascular_insuficiencia_cardiaca == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_insuficiencia_cardiaca) @if($usoRespirador->pro_cardiovascular_insuficiencia_cardiaca == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        c.	Insuficiencia cardiaca</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_hinchazon_piernas) @if($usoRespirador->pro_cardiovascular_hinchazon_piernas == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_hinchazon_piernas) @if($usoRespirador->pro_cardiovascular_hinchazon_piernas == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        d.	Hinchazón en las piernas/pies (no causado por caminar)</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_arritmia_corazon) @if($usoRespirador->pro_cardiovascular_arritmia_corazon == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_arritmia_corazon) @if($usoRespirador->pro_cardiovascular_arritmia_corazon == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        e.	Arritmia al corazón.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico) @if($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico) @if($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        f.	Reflujo gastroesofágico (no relacionado con la comida).</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_otros) @if($usoRespirador->pro_cardiovascular_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_otros) @if($usoRespirador->pro_cardiovascular_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        g.	Otros: {{$usoRespirador->pro_cardiovascular_otros_descripcion}}</li>
                </ul>
            </div>
        </td>
    </tr>
</table>
<table border="1">
    <tr>
        <td style="width: 25%;">
        </td>
        <td style="width: 75%;">
            <h5>6. ¿Ha tenido alguna vez cualquiera de los siguientes síntomas cardiovasculares?</h5>
            <div class="checkbox small radio">
                <ul class="list-unstyled list-inline">
                    <li style="margin-left: 5px" class="@isset($usoRespirador->sint_dolor_pecho) @if($usoRespirador->sint_dolor_pecho == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->sint_dolor_pecho) @if($usoRespirador->sint_dolor_pecho == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        a.	Dolor o presión en su pecho.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->sint_dolor_pecho_actividad_fisica) @if($usoRespirador->sint_dolor_pecho_actividad_fisica == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->sint_dolor_pecho_actividad_fisica) @if($usoRespirador->sint_dolor_pecho_actividad_fisica == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        b.	Dolor/presión en su pecho durante actividad física.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->sint_dolor_pecho_actividad_trabajo) @if($usoRespirador->sint_dolor_pecho_actividad_trabajo == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->sint_dolor_pecho_actividad_trabajo) @if($usoRespirador->sint_dolor_pecho_actividad_trabajo == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        c.	Dolor/presión en su pecho durante su actividad de trabajo.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->sint_palpitaciones) @if($usoRespirador->sint_palpitaciones == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->sint_palpitaciones) @if($usoRespirador->sint_palpitaciones == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5 @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        d.	Palpitaciones</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->sint_acidez_estomacal_indigestion) @if($usoRespirador->sint_acidez_estomacal_indigestion == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->sint_acidez_estomacal_indigestion) @if($usoRespirador->sint_acidez_estomacal_indigestion == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5 @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        e.	Acidez estomacal o indigestión (no relacionado con la comida)</li>
                </ul>
            </div>
            <h5>3. ¿Ha tenido alguna vez algunas de los siguientes problemas pulmonares o de pulmón?</h5>
            <div class="small radio">
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->sint_otros) @if($usoRespirador->sint_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->sint_otros) @if($usoRespirador->sint_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        f.	Otros: {{$usoRespirador->sint_otros_descripcion}}</li>
                </ul>
            </div>
            <h5>7. ¿Toma actualmente medicinas para cualquiera de las siguientes condiciones?</h5>
            <div class="small radio">
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_medicina_problema_respiratorio) @if($usoRespirador->usa_medicina_problema_respiratorio == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_medicina_problema_respiratorio) @if($usoRespirador->usa_medicina_problema_respiratorio == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        g.	Problema respiratorio.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_medicina_problema_corazon) @if($usoRespirador->usa_medicina_problema_corazon == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_medicina_problema_corazon) @if($usoRespirador->usa_medicina_problema_corazon == 0) equis ml-10 @else no-equis @endif @else no-equis ml-5 @endisset">

                        No</li>
                    <li style="margin-left: 10px;">

                        h.	Problemas al corazón.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_medicina_presion_sanguinea) @if($usoRespirador->usa_medicina_presion_sanguinea == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_medicina_presion_sanguinea) @if($usoRespirador->usa_medicina_presion_sanguinea == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        i.	Presión Sanguínea.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_medicina_convulsion) @if($usoRespirador->usa_medicina_convulsion == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_medicina_convulsion) @if($usoRespirador->usa_medicina_convulsion == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        j.	Convulsiones</li>
                </ul>
            </div>
            <h5>8. ¿Si ha utilizado un respirador, ha tenido usted alguno de los siguientes problemas?</h5>
            <div class="small radio">
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_respirador_irritacion_ojos) @if($usoRespirador->usa_respirador_irritacion_ojos == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_respirador_irritacion_ojos) @if($usoRespirador->usa_respirador_irritacion_ojos == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        a.	Irritación a los ojos.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_respirador_alergias) @if($usoRespirador->usa_respirador_alergias == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_respirador_alergias) @if($usoRespirador->usa_respirador_alergias == 0) equis ml-10 @else no-equis @endif @else no-equis ml-5 @endisset">

                        No</li>
                    <li style="margin-left: 10px;">

                        b.	Alergias a la piel o erupciones.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_respirador_ansiedad) @if($usoRespirador->usa_respirador_ansiedad == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_respirador_ansiedad) @if($usoRespirador->usa_respirador_ansiedad == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        c.	Ansiedad.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_respirador_fatiga) @if($usoRespirador->usa_respirador_fatiga == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_respirador_fatiga) @if($usoRespirador->usa_respirador_fatiga == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        d.	Fatiga o debilidad.</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->usa_respirador_otros) @if($usoRespirador->usa_respirador_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->usa_respirador_otros) @if($usoRespirador->usa_respirador_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        e.	Otros: {{$usoRespirador->usa_respirador_otros_descripcion}}</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico) @if($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico) @if($usoRespirador->pro_cardiovascular_reflujo_gastroesofagico == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        f.	Reflujo gastroesofágico (no relacionado con la comida).</li>
                </ul>
                <ul class="list-unstyled list-inline" >
                    <li style="margin-left: 5px" class="@isset($usoRespirador->pro_cardiovascular_otros) @if($usoRespirador->pro_cardiovascular_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Si
                    </li>
                    <li style="" class="@isset($usoRespirador->pro_cardiovascular_otros) @if($usoRespirador->pro_cardiovascular_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                        No</li>
                    <li style="margin-left: 10px">

                        g.	Otros: {{$usoRespirador->pro_cardiovascular_otros_descripcion}}</li>
                </ul>
            </div>
        </td>
    </tr>
</table>
    <table border="1">
        <tr>
            <td style="width: 25%;">
                <h5>
                    Sección 2:
                    (Discrecional)
                    <br>
                    Las preguntas de la 9 a la 14 deben ser contestadas por empleados que han sido seleccionados para usar un respirador de casa completa o un aparato de respiración autónomo. (SCBA)
                    <br>
                    Para los empleados que han sido seleccionados para utilizar otros tipos de respiradores contestar a estas preguntas de manera voluntaria.
                    <br>
                    Por favor, marque “SI” o “NO”.

                </h5>
            </td>
            <td style="width: 75%;">
                <h5>9. ¿Ha perdido la visión en cualquier ojo(temporal o permanente)?</h5>
                <div class="checkbox small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente) @if($usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente) @if($usoRespirador->perdida_vision_cualquier_ojo_temporal_permanente == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                        </li>
                    </ul>
                </div>
                <h5>10. ¿Ha perdido la visión en cualquier ojo(temporal o permanente)?</h5>
                <div class="small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->perdida_vision_cualquier_usa_lentes_contacto) @if($usoRespirador->perdida_vision_cualquier_usa_lentes_contacto == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->perdida_vision_cualquier_usa_lentes_contacto) @if($usoRespirador->perdida_vision_cualquier_usa_lentes_contacto == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            a.	Usa lentes de contacto.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->perdida_vision_usa_lentes) @if($usoRespirador->perdida_vision_usa_lentes == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->perdida_vision_usa_lentes) @if($usoRespirador->perdida_vision_usa_lentes == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            b.	Usa lentes.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->perdida_vision_daltonismo) @if($usoRespirador->perdida_vision_daltonismo == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->perdida_vision_daltonismo) @if($usoRespirador->perdida_vision_daltonismo == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            c.	Daltonismo</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->perdida_vision_otros) @if($usoRespirador->perdida_vision_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->perdida_vision_otros) @if($usoRespirador->perdida_vision_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            d.	Otros: {{$usoRespirador->perdida_vision_otros_descripcion}}</li>
                    </ul>
                </div>
                <h5>11. ¿Ha tenido alguna lesión a sus oídos, incluyendo un tímpano roto?</h5>
                <div class="small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->lesion_oido) @if($usoRespirador->lesion_oido == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->lesion_oido) @if($usoRespirador->lesion_oido == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px"></li>
                    </ul>
                </div>
                <h5>12. ¿Tiene actualmente algunos de los siguientes problemas de audición)?</h5>
                <div class="small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_audicion_dificultad_escucha) @if($usoRespirador->prob_audicion_dificultad_escucha == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_audicion_dificultad_escucha) @if($usoRespirador->prob_audicion_dificultad_escucha == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            a.	Dificultad para escuchar.</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_audicion_usa_audifono) @if($usoRespirador->prob_audicion_usa_audifono == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_audicion_usa_audifono) @if($usoRespirador->prob_audicion_usa_audifono == 0) equis ml-10 @else no-equis @endif @else no-equis ml-5 @endisset">

                            No</li>
                        <li style="margin-left: 10px;">

                            b.	Usa un audífono</li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_audicion_otros) @if($usoRespirador->prob_audicion_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_audicion_otros) @if($usoRespirador->prob_audicion_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                            c.	Otros: {{$usoRespirador->prob_audicion_otros_descripcion}}</li>
                    </ul>
                </div>
                <h5>13. ¿Ha tenido alguna lesión a la espalda?</h5>
                <div class="small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->lesion_espalda) @if($usoRespirador->lesion_espalda == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->lesion_espalda) @if($usoRespirador->lesion_espalda == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px"></li>
                    </ul>
                </div>
            </td>
        </tr>
    </table>
    <table border="1">
        <tr>
            <td style="width: 25%;">

            </td>
            <td style="width: 75%;">
                <h5>14. ¿Tiene actualmente algunos de los siguientes problemas musculoesqueléticos?</h5>
                <div class="checkbox small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_debilidad_extremidades) @if($usoRespirador->prob_muscular_debilidad_extremidades == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_debilidad_extremidades) @if($usoRespirador->prob_muscular_debilidad_extremidades == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            a.	Debilidad en los brazos, manos, piernas o pies.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_debilidad_dolor_espalda) @if($usoRespirador->prob_muscular_debilidad_dolor_espalda == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_debilidad_dolor_espalda) @if($usoRespirador->prob_muscular_debilidad_dolor_espalda == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            b.	Dolor de espalda.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_dificultad_mover_brazos_piernas) @if($usoRespirador->prob_muscular_dificultad_mover_brazos_piernas == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_dificultad_mover_brazos_piernas) @if($usoRespirador->prob_muscular_dificultad_mover_brazos_piernas == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            c.	Dificultad para mover sus brazos y piernas.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura) @if($usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura) @if($usoRespirador->prob_muscular_dolor_inclina_adelanta_atras_cintura == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            a.	Dolor o rigidez cuando se inclina hacia adelante o atrás en la cintura
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo) @if($usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo) @if($usoRespirador->prob_muscular_dificultad_mover_cabeza_arriba_abajo == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            b.	Dificultad para mover su cabeza de arriba o abajo.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_dificultad_mover_cabeza_lado) @if($usoRespirador->prob_muscular_dificultad_mover_cabeza_lado == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_dificultad_mover_cabeza_lado) @if($usoRespirador->prob_muscular_dificultad_mover_cabeza_lado == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            c.	Dificultad para mover su cabeza de lado a lado.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_doblar_rodillas) @if($usoRespirador->prob_muscular_doblar_rodillas == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_doblar_rodillas) @if($usoRespirador->prob_muscular_doblar_rodillas == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            d.	Dificultad al doblar las rodillas
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_ponerse_cuclillas) @if($usoRespirador->prob_muscular_ponerse_cuclillas == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_ponerse_cuclillas) @if($usoRespirador->prob_muscular_ponerse_cuclillas == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            e.	Dificultad en ponerse en cuclillas.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_subir_escaleras) @if($usoRespirador->prob_muscular_subir_escaleras == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_subir_escaleras) @if($usoRespirador->prob_muscular_subir_escaleras == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            f.	Subir las escaleras o una escalera.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->prob_muscular_otros) @if($usoRespirador->prob_muscular_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->prob_muscular_otros) @if($usoRespirador->prob_muscular_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            g.	Otros: {{$usoRespirador->prob_muscular_otros_descripcion}}
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    </table>
    <table border="1" style="font-size:10px;">
        <tr>
            <td style="width: 25%;">
                <h5>
                    Sección 3:
                    (Confidencial)<br>
                    El profesional de la salud que va a revisar este cuestionario determinara si esta parte debe ser completada por el empleado.
                    <br>
                    Por favor, marque “SI” o “NO”

                </h5>
            </td>
            <td style="width: 75%;">
                <h5>1. Cuando trabaja en alturas por encima de 2500 msnm en una atmosfera que tenga <br> cantidades de oxigeno menor a la cantidad normal, tiene las siguientes sensaciones de:</h5>
                <div class="checkbox small radio">
                    <ul class="list-unstyled list-inline">
                        <li style="margin-left: 5px" class="@isset($usoRespirador->sensacion_mareos) @if($usoRespirador->sensacion_mareos == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->sensacion_mareos) @if($usoRespirador->sensacion_mareos == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            a.	Mareos.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->sensacion_dificultad_respirar) @if($usoRespirador->sensacion_dificultad_respirar == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->sensacion_dificultad_respirar) @if($usoRespirador->sensacion_dificultad_respirar == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            b.	Dificultad para respirar.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->sensacion_palpitaciones) @if($usoRespirador->sensacion_palpitaciones == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->sensacion_palpitaciones) @if($usoRespirador->sensacion_palpitaciones == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            c.	Palpitaciones.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->sensacion_otros) @if($usoRespirador->sensacion_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->sensacion_otros) @if($usoRespirador->sensacion_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            d.	Otros {{$usoRespirador->sensacion_otros_descripcion}}
                        </li>
                    </ul>
                </div>
                <h5>2. Ha trabajado con alguno de los siguientes materiales listados a continuación:</h5>
                <div class="checkbox small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_silice) @if($usoRespirador->trabaja_material_silice == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_silice) @if($usoRespirador->trabaja_material_silice == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            a.	Asbestos.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_silice) @if($usoRespirador->trabaja_material_silice == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_silice) @if($usoRespirador->trabaja_material_silice == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            b.	Sílice.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_tungsteno_cobalto) @if($usoRespirador->trabaja_material_tungsteno_cobalto == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_tungsteno_cobalto) @if($usoRespirador->trabaja_material_tungsteno_cobalto == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            c.	Tungsteno / Cobalto (Ej.: Esmerilado o soldadura)
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_berilio) @if($usoRespirador->trabaja_material_berilio == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_berilio) @if($usoRespirador->trabaja_material_berilio == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            d.	Berilio
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_aluminio) @if($usoRespirador->trabaja_material_aluminio == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_aluminio) @if($usoRespirador->trabaja_material_aluminio == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            e.	Aluminio.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_carbon) @if($usoRespirador->trabaja_material_carbon == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_carbon) @if($usoRespirador->trabaja_material_carbon == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            f.	Carbón.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_hierro) @if($usoRespirador->trabaja_material_hierro == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_hierro) @if($usoRespirador->trabaja_material_hierro == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            g.	Hierro.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_laton) @if($usoRespirador->trabaja_material_laton == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_laton) @if($usoRespirador->trabaja_material_laton == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            h.	Latón.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_material_ambientes_polvo) @if($usoRespirador->trabaja_material_ambientes_polvo == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_material_ambientes_polvo) @if($usoRespirador->trabaja_material_ambientes_polvo == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            i.	Ambientes con exceso de polvo.
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabaja_otros) @if($usoRespirador->trabaja_otros == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->trabaja_otros) @if($usoRespirador->trabaja_otros == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">
                            j.	Otros {{$usoRespirador->trabaja_otros_descripcion}}
                        </li>
                    </ul>
                </div>
                <h5>3. Liste cualquier trabajo previo/pasatiempo en los que haya sido expuestos a peligros 	respiratorios:</h5>
                <div class="checkbox small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->trabajo_previo_pasatiempo_riesgo) @endisset">

                            {{$usoRespirador->trabajo_previo_pasatiempo_riesgo}}
                        </li>
                    </ul>
                </div>
                <h5>4. ¿Has hecho alguna vez Servicio Militar?</h5>
                <div class="checkbox small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class="@isset($usoRespirador->servicio_militar) @if($usoRespirador->servicio_militar == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class="@isset($usoRespirador->servicio_militar) @if($usoRespirador->servicio_militar == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                        </li>
                    </ul>
                </div>
                <h5>5. ¿Has estado alguna vez en un equipo de MATPEL o Respuesta De Emergencias?</h5>
                <div class="checkbox small radio">
                    <ul class="list-unstyled list-inline" >
                        <li style="margin-left: 5px" class=" @isset($usoRespirador->equipo_matpel_respuesta_emergencia) @if($usoRespirador->equipo_matpel_respuesta_emergencia == 1) equis @else no-equis @endif @else no-equis @endisset">

                            Si
                        </li>
                        <li style="" class=" @isset($usoRespirador->equipo_matpel_respuesta_emergencia) @if($usoRespirador->equipo_matpel_respuesta_emergencia == 0) equis ml-10 @else no-equis ml-5 @endif @else no-equis ml-5  @endisset">

                            No</li>
                        <li style="margin-left: 10px">

                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    </table>
    <table style="font-size:10px;" border="1">
        <tr>
            <td><strong>ID Empleado:</strong></td>
            <td>{{$usoRespirador->cita->paciente->num_dni}}</td>
            <td><strong>Perfil:</strong></td>
            <td>{{$usoRespirador->cita->paciente->perfil->descripcion}}</td>
            </tr>
        <tr>
            <td><strong>Trabajador:</strong></td>
            <td>{{$usoRespirador->cita->paciente->apellido_paterno.' '.$usoRespirador->cita->paciente->apellido_materno.' '.$usoRespirador->cita->paciente->nombres}}</td>
            <td><strong>Área:</strong></td>
            <td>{{$usoRespirador->cita->paciente->area->nombre}}</td>
        </tr>
        <tr>
            <td><strong>Cargo:</strong></td>
            <td>{{$usoRespirador->cita->paciente->trabajo}}</td>
            <td><strong>Supervisor:</strong></td>
            <td>{{$usoRespirador->cita->paciente->jefe_inmediato}}</td>
        </tr>
        <tr>
            <td colspan="4">
                <h5>El trabajador mencionado ha sido examinado en el ajuste del respirador de conformidad con el Estándar de Barrick de Protección Respiratoria. Esta evaluación limitada es especificada para el uso del respirador solamente.
                    Basado en mis hallazgos he determinado que la persona:
                </h5>
                <ul class="list-unstyled" style="margin-left:10px;">
                    <li class="@isset($usoRespirador->autorizacion_clase) @if($usoRespirador->autorizacion_clase == 1) equis @else no-equis @endif @else no-equis @endisset">

                        Clase I - Sin restricciones en el uso del Respirador.
                    </li>
                    <li class="@isset($usoRespirador->autorizacion_clase) @if($usoRespirador->autorizacion_clase == 2) equis @else no-equis @endif @else no-equis @endisset">

                        Clase II - Uso condicional: Algunos usos específicos para los respiradores.
                        <ul class="list-unstyled" style="margin-left:10px;">
                            <li class="@isset($usoRespirador->uso_emergencia_solamente) equis @else  no-equis @endisset">

                                A ser utilizados en respuestas a emergencia o para escape solamente
                            </li>
                            <li class="@isset($usoRespirador->solo_papr) equis @else  no-equis @endisset">

                                Solo PAPR
                            </li>
                            <li class="@isset($usoRespirador->no_sbca) equis @else  no-equis @endisset">

                                No SBCA
                            </li>
                            <li class="@isset($usoRespirador->autorizacion_otros) equis @else  no-equis @endisset">

                                Otros
                            </li>
                        </ul>
                    </li>
                    <li class="@isset($usoRespirador->autorizacion_clase) @if($usoRespirador->autorizacion_clase == 3) equis @else no-equis @endif @else no-equis @endisset">

                        Clase III - NO SE PERMITE el uso de Respirador</li>
                    <li class="@isset($usoRespirador->autorizacion_clase) @if($usoRespirador->autorizacion_clase == 4) equis @else no-equis @endif @else no-equis @endisset">

                        Clase IV - El empleado deberá programar un examen médico exhaustivo antes de probar y emplear un respirador</li>
                    <li class="@isset($usoRespirador->autorizacion_clase) @if($usoRespirador->autorizacion_clase == 5) equis @else no-equis @endif @else no-equis @endisset">

                        Clase V - Restricciones adicionales temporales / permanentes (sin respirador)</li>
                </ul>
            </td>
        </tr>
    </table>
    <table border="1" style="font-size:10px;">
        <tr>
            <td colspan="2"><h5>FIRMA DEL MEDICO</h5></td>
            <td style="witdh:25%;"></td>
            <td ><h5>NOMBRE DEL MEDICO</h5></td>
            <td colspan="2">@isset($usoRespirador->nombre_medico) {{$usoRespirador->nombre_medico}} @else @endif</td>
        </tr>
        <tr>
            <td><h5>CMP</h5></td>
            <td>@isset($usoRespirador->cmp) {{$usoRespirador->cmp}} @else @endif</td>
            <td><h5>FECHA DEL EXAMEN</h5></td>
            <td>@isset($usoRespirador->fecha_registro) {{$usoRespirador->fecha_registro}} @else @endif</td>
            <td><h5>EXPIRA EN</h5></td>
            <td>@isset($usoRespirador->fecha_expiracion) {{$usoRespirador->fecha_expiracion}} @else @endif</td>
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
