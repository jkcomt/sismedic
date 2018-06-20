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

        .center-text{
            text-align: center;
        }
        .padding-top{
            border: hidden;
        }
        .borde{

          width: 15px;
        }

        .input{
          border:1px solid gray;
        }
        .both {
          	border-collapse: separate;
          	border-spacing: 0px 5px;
          }
          strong{
            font-size: 10px;
            font-style: verdana;

          }
          .tdcabeza{
            border:0.45px solid gray;background:rgba(0,0,0,0.2);font-size:xx-small;padding: 2px;
          }
          .tdcuerpo{
              font-size:7px;border:0.45px solid rgba(0,0,0,0.65);padding: 2px;
          }

    </style>
</head>
<body>
<div class="container-fluid">

        <table WIDTH="100%">
            <tr>
                 <td ROWSPAN=3 WIDTH="20%">
                    <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" width="80px" height="100px">
                 </td>
                 <td  WIDTH="60%" align="center" ROWSPAN=3 >
                    <h5 style="font-family: Verdana, Geneva, sans-serif;">CENTRO MEDICO “EL SAUCO” DEPARTAMENTO DE SALUD OCUPACIONAL  SERVICIO DE LABORATORIO CLÍNICO</h5>
                 </td >
                 <td WIDTH="20%" style="font-size:xx-small;">
                    <div class="" style="display:inline-block;WIDTH:70%;">
                         PRE-OCUPACIONAL
                    </div>
                    <div style="display:inline-block;overflow:hidden;height:18px;width:20px;border:0.5px solid rgba(0,0,0,0.65);">

                    </div>
                </td>
            </tr>
            <tr>
              <td WIDTH="20%" style="font-size:xx-small;">
                 <div class="" style="display:inline-block;WIDTH:70%;">
                      ANUAL
                 </div>
                 <div style="display:inline-block;overflow:hidden;height:18px;width:20px;border:0.5px solid rgba(0,0,0,0.65);">

                 </div>
             </td>
            </tr>
            <tr>
              <td WIDTH="20%" style="font-size:xx-small;">
                 <div class="" style="display:inline-block;WIDTH:70%;">
                    RETIRO
                 </div>
                 <div style="display:inline-block;overflow:hidden;height:18px;width:20px;border:0.5px solid rgba(0,0,0,0.65);">

                 </div>
             </td>
            </tr>


        </table>

        <table WIDTH="100%" >
            <tr>
                 <td  colspan="2" style="background:rgba(0,0,0,0.2);border:1px solid gray">
                    <strong style="font-size:xx-small;">&nbsp; EXAMENES AUXILIARES</strong>
                 </td >
            </tr>
            <tr>
              <td align="left" WIDTH="25%" style="border:1px solid gray">
               <strong style="font-size:xx-small;"> &nbsp; &nbsp;EMPRESA: </strong>
              </td>
              <td WIDTH="75%" style="border:1px solid gray" >
             </td>
            </tr>
            <tr>
              <td  align="left" WIDTH="25%" style="border:1px solid gray" ><strong style="font-size:xx-small;">&nbsp; PACIENTE</strong> </td>
                <td  WIDTH="75%" style="border:1px solid gray;font-size:xx-small;">{{ $cita->paciente->nombres." ".$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno}}</td>
            </tr>
        </table>
        <table WIDTH="100%">
            <tr>
                 <td  WIDTH="15%" align="center" style="border:0.45px solid rgba(0,0,0,0.65);">
                  <strong style="font-size:xx-small;"> FECHA </strong>
                 </td>
                 <td  WIDTH="15%" align="left" style="font-size:xx-small;border:0.45px solid rgba(0,0,0,0.65);">
                    &nbsp; {{$cita->fecha_examen}}
                 </td >
                 <td  WIDTH="15%" align="center" style="border:0.45px solid rgba(0,0,0,0.65);">
                  <strong style="font-size:xx-small;"> EDAD </strong>
                 </td>
                 <td  WIDTH="15%" align="left" style="font-size:xx-small;border:0.45px solid rgba(0,0,0,0.65);">
                   &nbsp;{{Carbon\Carbon::parse($cita->paciente->fecha_nacimiento)->age.' años'}}
                 </td >
                 <td  WIDTH="15%" align="center" style="border:0.45px solid rgba(0,0,0,0.65);">
                  <strong style="font-size:xx-small;"> SEXO </strong>
                 </td>
                 <td  WIDTH="15%" align="left" style="font-size:xx-small;border:0.45px solid rgba(0,0,0,0.65);">
                   &nbsp;{{$cita->paciente->sexo}}
                 </td >

            </tr>
        </table>




        <table WIDTH="100%" >
            <tr>
                 <td  WIDTH="16%" align="center" style="font-size:xx-small;">
                   EXAMEN
                 </td>
                 <td  WIDTH="16%"  align="center" style="font-size:xx-small;">
                      RESULTADOS
                 </td >
                 <td  WIDTH="28%" align="center" style="font-size:xx-small;">
                   VALORES NORMALES
                 </td>

                 <td  WIDTH="20%"  align="center" style="font-size:xx-small;">
                      EXAMEN
                 </td >
                 <td  WIDTH="20%" align="center" style="font-size:xx-small;">
                 RESULTADOS
                 </td>
                 <td  WIDTH="0%">
                 </td >
            </tr>
            <tr>
              <td colspan="3" width="50%" align="center" style="border:0.45px solid gray;background:rgba(0,0,0,0.2);"><strong>HEMOGRAMA</strong> </td>
              <td colspan="3" width="50%" align="center" style="border:0.45px solid gray;background:rgba(0,0,0,0.2); "><strong> ORINA COMPLETA</strong> </td>
            </tr>
            <tr>
              <td  width="20%" align="left" style="font-size:7px;border:0.45px solid rgba(0,0,0,0.45);">HEMOGLOBINA</td>
              <td width="5%" style="border:0.45px solid rgba(0,0,0,0.45);" >@isset($cita->hemograma->hemoglobina) {{$cita->hemograma->hemoglobina}} @endisset</td>
              <td align="center" style="font-size:xx-small;border:0.45px solid rgba(0,0,0,0.45);"> g/dl H: 14–18 M:12–16</td>
              <td colspan="3" class="tdcabeza"> EXAMEN MACROSCÓPICO</td>
            </tr>
            <tr  class="tdcuerpo">
                 <td width="20%" align="left" style="font-size:7px;border:0.45px solid rgba(0,0,0,0.45);padding:2px;">HEMATOCRITO</td>
                 <td width="10%" style="border:0.45px solid rgba(0,0,0,0.45);"  >@isset($cita->hemograma->hematocrito) {{$cita->hemograma->hematocrito}}@endisset</td>
                 <td align="center" style="font-size:xx-small;border:0.45px solid rgba(0,0,0,0.45);">%  H: 44 – 56 M: 38 – 50 </td>
                 <td width="20%" align="left" style="font-size:7px;padding: 2px;border:0.45px solid rgba(0,0,0,0.45);">COLOR</td>
                 <td colspan="2" colspan="2" style="font-size:xx-small;border:0.45px solid rgba(0,0,0,0.45);" >@isset($cita->orinas->color) {{$cita->orinas->color}} @endisset</td>
             </tr>
             <tr  class="tdcuerpo">
               <td colspan="3" align="left" class="tdcabeza">RECUENTO CELULAR</td>
               <td width="20%" align="left" class="tdcuerpo">ASPECTO</td>
               <td colspan="2" class="tdcuerpo">@isset($cita->orinas->aspecto) {{$cita->orinas->aspecto}} @endisset</td>
             </tr>
             <tr  class="tdcuerpo">
               <td width="20%" align="left"  class="tdcuerpo">LEUCOCITOS</td>
               <td width="20%"  class="tdcuerpo" >@isset($cita->hemograma->leucocitos) {{$cita->hemograma->leucocitos}} @endisset</td>
               <td align="center"  class="tdcuerpo">xmm3 3,800 – 10,500</td>
               <td colspan="3"  class="tdcabeza"> EXAMEN BIOQUÍMICO </td>
             </tr>
             <tr  class="tdcuerpo">
               <td colspan="3" align="left" class="tdcabeza"> FORMULA DIFERENCIAL  </td>
               <td width="20%" align="left" class="tdcuerpo">DENSIDAD</td>
               <td colspan="2" colspan="2" class="tdcuerpo" >@isset($cita->orinas->densidad) {{$cita->orinas->densidad}} @endisset</td>
             </tr>
             <tr  class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo">SEGMENTADOS</td>
               <td width="20%" class="tdcuerpo" >@isset($cita->hemograma->segmentados) {{$cita->hemograma->segmentados}} @endisset</td>
               <td align="center" class="tdcuerpo">% 36 – 70 </td>
               <td width="20%" align="left" class="tdcuerpo">pH</td>
               <td colspan="2" class="tdcuerpo" >@isset($cita->orinas->ph) {{$cita->orinas->ph}} @endisset</td>
             </tr>
             <tr  class="tdcuerpo">
               <td width="20%" align="left"  class="tdcuerpo">ABASTONADOS</td>
               <td width="20%"  class="tdcuerpo" > @isset($cita->hemograma->abastonados) {{$cita->hemograma->abastonados}} @endisset</td>
               <td align="center"  class="tdcuerpo">% 0 – 5</td>
               <td width="20%" align="left"  class="tdcuerpo">GLUCOSA</td>
               <td colspan="2"  class="tdcuerpo">@isset($cita->orinas->glucosa)  {{$cita->orinas->glucosa}} @endisset</td>
             </tr>
             <tr  class="tdcuerpo">
               <td width="20%" align="left"  class="tdcuerpo">EOSINOFILOS</td>
               <td width="20%"  class="tdcuerpo" >@isset($cita->hemograma->eosinofilos) {{$cita->hemograma->eosinofilos}} @endisset</td>
               <td align="center"  class="tdcuerpo">% 0 – 1 </td>
               <td width="20%" align="left"  class="tdcuerpo">BILIRRUBINAS</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->bilirrubinas)  {{$cita->orinas->bilirrubinas}} @endisset</td>
             </tr>

             <tr  class="tdcuerpo">
               <td width="20%" align="left"  class="tdcuerpo">BASOFILOS</td>
               <td width="20%"  class="tdcuerpo" >@isset($cita->hemograma->basofilos)  {{$cita->hemograma->basofilos}} @endisset</td>
               <td align="center"  class="tdcuerpo">% 23 – 49 </td>
               <td width="20%" align="left"  class="tdcuerpo" >CUERPOS CETONICOS</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->cuerpos_cetonicos)  {{$cita->orinas->cuerpos_cetonicos}}  @endisset</td>
             </tr>

             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo">LINFOCITOS</td>
               <td width="20%" class="tdcuerpo" >@isset($cita->hemograma->linfocitos)  {{$cita->hemograma->linfocitos}} @endisset</td>
               <td align="center"class="tdcuerpo">% 23 - 49 </td>
               <td width="20%" align="left" class="tdcuerpo">PROTEÍNAS</td>
               <td colspan="2" class="tdcuerpo" >@isset($cita->orinas->proteinas) {{$cita->orinas->proteinas}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo">MONOCITOS</td>
               <td width="20%" class="tdcuerpo" >@isset($cita->hemograma->monocitos) {{$cita->hemograma->monocitos}} @endisset</td>
               <td align="center"class="tdcuerpo">% 0 – 7 </td>
               <td width="20%" align="left" class="tdcuerpo">UROBILINOGENO</td>
               <td colspan="2" class="tdcuerpo"> @isset($cita->orinas->urobilinogeno){{$cita->orinas->urobilinogeno}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"><strong>V.S.G</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mm/hora H: 0–10 M: 0–20 </td>
               <td width="20%" align="left" class="tdcuerpo">NITRITOS</td>
               <td colspan="2" class="tdcuerpo" >@isset($cita->orinas->nitritos) {{$cita->orinas->nitritos}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>GPO. SANGUINEO</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo"> </td>
               <td width="20%" align="left" class="tdcuerpo">HEMOGLOBINA</td>
               <td colspan="2" class="tdcuerpo" >@isset($cita->orinas->hemoglobina) {{$cita->orinas->hemoglobina}} @endisset</td>
             </tr>

             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>FACTOR RH</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo"></td>
               <td width="20%" align="left" class="tdcuerpo">SANGRE</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->sangre){{$cita->orinas->sangre}}  @endisset</td>
             </tr>
             <tr>
               <td colspan="3" align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2);"><strong>BIOQUÍMICA</strong> </td>
                 <td colspan="3"  class="tdcabeza">  EXAMEN MICROSCÓPICO   </td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>GLUCOSA</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl 74 – 106</td>
               <td width="20%" align="left" class="tdcuerpo">LEUCOCITOS</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->leucocitos)  {{$cita->orinas->leucocitos}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>CREATININA</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl H: 0.7–1.3 M: 0.6–1.1</td>
               <td width="20%" align="left" class="tdcuerpo">HEMATÍES</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->hematies)  {{$cita->orinas->hematies}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>ACIDO ÚRICO</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl H: 3.5–7.2 M: 2.6–6.0</td>
               <td width="20%" align="left" class="tdcuerpo">CÉLULAS EPITELIALES</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->celulas_epiteliales) {{$cita->orinas->celulas_epiteliales}}  @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>COL. TOTAL</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt; 200 </td>
               <td width="20%" align="left" class="tdcuerpo">CILINDROS</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->cilindros) {{$cita->orinas->cilindros}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>TRIGLICÉRIDOS</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt; = 150 </td>
               <td width="20%" align="left" class="tdcuerpo">CRISTALES</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->cristales) {{$cita->orinas->cristales}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>HDL COLESTEROL</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl 40 – 60 </td>
               <td width="20%" align="left" class="tdcuerpo">GÉRMENES</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->germenes) {{$cita->orinas->germenes}}  @endisset </td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>LDL COLESTEROL</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;  130 </td>
               <td width="20%" align="left" class="tdcuerpo">FILAMENTOS MUCOIDES</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->filamentos_mucoides) {{$cita->orinas->filamentos_mucoides}} @endisset</td>
             </tr>

             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>VLDL COLESTEROL</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo"> U/l H: 11–50 M: 7–32</td>
               <td width="20%" align="left" class="tdcuerpo">OTROS</td>
               <td colspan="2"  class="tdcuerpo" >@isset($cita->orinas->otros) {{$cita->orinas->otros}} @endisset</td>
             </tr>
             <tr class="tdcuerpo">
               <td width="20%" align="left" class="tdcuerpo"> <strong>GGT</strong>  </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo"> U/l </td>
               <td colspan="3"align="left" class="tdcuerpo"></td>
             </tr>
             <tr>
               <td colspan="3" width="60%" align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2);"><strong>INMUNOLOGIA</strong> </td>
                 <td colspan="3" class="tdcabeza">  EXAMEN TOXICOLOGICO   </td>
             </tr>
             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong> SÍFILISS </strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo"></td>
               <td width="20%" align="left" class="tdcuerpo">DOSAJE DE COCAINAS</td>
               <td colspan="2"  class="tdcuerpo" ></td>
             </tr>

             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>PSA</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo"></td>
               <td width="20%" align="left" class="tdcuerpo">DOSAJE DE MARIHUANA</td>
               <td colspan="2"  class="tdcuerpo" ></td>
             </tr>
             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>THEVENON</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo"></td>
               <td colspan="3" align="left" class="tdcuerpo"></td>
             </tr>
             <tr>
               <td colspan="3"  align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2);"><strong>PERFIL HEPÁTICO</strong> </td>
                 <td colspan="3" >     </td>
             </tr>
             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>BILIRRUBINA TOTAL</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
             </tr>

             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>BILIRRUBINA DTA.</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
             </tr>
             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>BILIRRUBINA IDTA.</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
             </tr>
             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>FOSFATASA ALC.</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
             </tr>

             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>TGO.</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
             </tr>

             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>TGP.</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
             </tr>
             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>PROTEINAS TOT.</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
             </tr>
             <tr>
               <td width="20%" align="left" class="tdcuerpo"><strong>ALBUMINA.</strong> </td>
               <td width="20%" class="tdcuerpo" ></td>
               <td align="center"class="tdcuerpo">mg/dl &lt;= 1.0</td>

               <td colspan="3" ></td>
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
