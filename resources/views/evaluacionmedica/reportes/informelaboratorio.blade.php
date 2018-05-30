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
        body{
            font-size: 12px;

        }
        /* *{
          padding: 0;
          margin: 0;
        } */
        .center-text{
            text-align: center;
        }
        .padding-top{
            padding-top: 30px;
            border: hidden;
        }
        .borde{
          border: 1px solid black;width: 25px;
        }
        label{
          font-size: 10px;
          font-style: arial;

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

    </style>
</head>
<body>
<div class="container-fluid">

        <table WIDTH="100%">
            <tr>
                 <td ROWSPAN=3 WIDTH="22%">
                    <img src="{{asset('img/planvital.jpg')}}" alt="" width="150px" height="50px" >
                 </td>
                 <td  WIDTH="58%" align="center" ROWSPAN=3>
                    <h5>CENTRO MEDICO “EL SAUCO” DEPARTAMENTO DE SALUD OCUPACIONAL  SERVICIO DE LABORATORIO CLÍNICO</h5>
                 </td >
                 <td align="right">
                    PRE-OCUPACIONAL
                 </td>
                 <td class="borde" WIDTH="10%">

                </td>
            </tr>
            <tr>
              <td align="right">
                  ANUAL
              </td>
              <td class="borde">

              </td>
            </tr>
            <tr>
              <td align="right">
                  RETIRO
              </td>
              <td class="borde">

              </td>
            </tr>


        </table>

<br>
        <table WIDTH="100%">
            <tr>
                 <td  WIDTH="5%">

                 </td>
                 <td  WIDTH="35%" align="center">
                    <strong>EXAMENES AUXILIARES</strong>
                 </td >
                 <td align="center" WIDTH="30%">
                  <strong>EMPRESA: </strong>
                 </td>
                 <td WIDTH="30%" style="border:1px solid gray" >
                </td>
            </tr>
            <tr>
              <td colspan="4" style="padding-top: 10px;"></td>
            </tr>
            <tr>
              <td colspan="2" align="left" ><strong>PACIENTE</strong> </td>
                <td colspan="2" style="border:1px solid gray">{{ $cita->paciente->nombres." ".$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno}}</td>
            </tr>
            <tr>
              <td colspan="4" style="padding-top: 10px;"></td>
            </tr>
        </table>
        <table WIDTH="100%">
            <tr>
                 <td  WIDTH="15%" align="left" >
                  <strong> FECHA </strong>
                 </td>
                 <td  WIDTH="15%" align="center" style="border:1px solid gray">
                     {{$cita->fecha_examen}}
                 </td >
                 <td  WIDTH="15%" align="center" >
                  <strong> EDAD </strong>
                 </td>
                 <td  WIDTH="15%" align="center" style="border:1px solid gray">
                   {{Carbon\Carbon::parse($cita->paciente->fecha_nacimiento)->age.' años'}}
                 </td >
                 <td  WIDTH="15%" align="center" >
                  <strong> SEXO </strong>
                 </td>
                 <td  WIDTH="15%" align="center" style="border:1px solid gray">
                   {{$cita->paciente->sexo}}
                 </td >

            </tr>
        </table>



<br>
        <table class="both" WIDTH="100%">
            <tr>
                 <td  WIDTH="16%" align="center" >
                  <strong> EXAMEN </strong>
                 </td>
                 <td  WIDTH="16%">
                     <strong> RESULTADOS</strong>
                 </td >
                 <td  WIDTH="28%" align="center" >
                   <strong>VALORES NORMALES </strong>
                 </td>

                 <td  WIDTH="20%"  align="center" >
                     <strong> EXAMEN </strong>
                 </td >
                 <td  WIDTH="20%" align="center" >
                <strong> RESULTADOS</strong>
                 </td>
                 <td  WIDTH="0%">
                 </td >

            </tr>
            <tr>
              <td colspan="3" width="60%" align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2);"><strong>HEMOGRAMA</strong> </td>
              <td colspan="3" width="40%" align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2); "><strong> ORINA COMPLETA</strong> </td>
            </tr>

            <tr style="border:1px solid gray;">
              <td width="20%" align="left">HEMOGLOBINA</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->hemoglobina) {{$cita->hemograma->hemoglobina}} @endisset</td>
              <td align="center" style="font-size:xx-small"> g/dl H: 14–18 M:12–16</td>
              <td colspan="3" style="padding-left:10px"><label for=""> EXAMEN MACROSCÓPICO</label> </td>
            </tr>

            <tr style="border:1px solid gray;">
              <td width="20%" align="left">HEMATOCRITO</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->hematocrito) {{$cita->hemograma->hematocrito}}@endisset</td>
              <td align="center" style="font-size:xx-small">%  H: 44 – 56 M: 38 – 50 </td>
              <td width="20%" align="left">COLOR</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->color) {{$cita->orinas->color}} @endisset</td>
            </tr>

            <tr style="border:1px solid gray;">
              <td colspan="3" align="left"><label for=""> RECUENTO CELULAR</label></td>
              <td width="20%" align="left">ASPECTO</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->aspecto) {{$cita->orinas->aspecto}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left">LEUCOCITOS</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->leucocitos) {{$cita->hemograma->leucocitos}} @endisset</td>
              <td align="center" style="font-size:xx-small">xmm3 3,800 – 10,500</td>
              <td colspan="3" style="padding-left:10px"><label for=""> EXAMEN BIOQUÍMICO</label> </td>
            </tr>
            <tr style="border:1px solid gray;">
              <td colspan="3" align="left"><label for=""> FORMULA DIFERENCIAL</label></td>
              <td width="20%" align="left">DENSIDAD</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->densidad) {{$cita->orinas->densidad}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left">SEGMENTADOS</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->segmentados) {{$cita->hemograma->segmentados}} @endisset</td>
              <td align="center" style="font-size:xx-small">% 36 – 70 </td>
              <td width="20%" align="left">pH</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->ph) {{$cita->orinas->ph}} @endisset</td>
            </tr>

            <tr style="border:1px solid gray;">
              <td width="20%" align="left">ABASTONADOS</td>
              <td width="20%" style="border:1px solid gray;" > @isset($cita->hemograma->abastonados) {{$cita->hemograma->abastonados}} @endisset</td>
              <td align="center" style="font-size:xx-small">% 0 – 5</td>
              <td width="20%" align="left">GLUCOSA</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->glucosa)  {{$cita->orinas->glucosa}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left">EOSINOFILOS</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->eosinofilos) {{$cita->hemograma->eosinofilos}} @endisset</td>
              <td align="center" style="font-size:xx-small">% 0 – 1 </td>
              <td width="20%" align="left">BILIRRUBINAS</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->bilirrubinas)  {{$cita->orinas->bilirrubinas}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left">BASOFILOS</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->basofilos)  {{$cita->hemograma->basofilos}} @endisset</td>
              <td align="center" style="font-size:xx-small">% 23 – 49 </td>
              <td width="20%" align="left">CUERPOS CETONICOS</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->cuerpos_cetonicos)  {{$cita->orinas->cuerpos_cetonicos}}  @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left">LINFOCITOS</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->linfocitos)  {{$cita->hemograma->linfocitos}} @endisset</td>
              <td align="center" style="font-size:xx-small">% 23 - 49 </td>
              <td width="20%" align="left">PROTEÍNAS</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->proteinas) {{$cita->orinas->proteinas}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left">MONOCITOS</td>
              <td width="20%" style="border:1px solid gray;" >@isset($cita->hemograma->monocitos) {{$cita->hemograma->monocitos}} @endisset</td>
              <td align="center" style="font-size:xx-small">% 0 – 7 </td>
              <td width="20%" align="left">UROBILINOGENO</td>
              <td width="35%" style="border:1px solid gray;"> @isset($cita->orinas->urobilinogeno){{$cita->orinas->urobilinogeno}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"><strong>V.S.G</strong> </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mm/hora H: 0–10 M: 0–20 </td>
              <td width="20%" align="left">NITRITOS</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->nitritos) {{$cita->orinas->nitritos}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>GPO. SANGUINEO</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small"> </td>
              <td width="20%" align="left">HEMOGLOBINA</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->hemoglobina) {{$cita->orinas->hemoglobina}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>FACTOR RH</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small"></td>
              <td width="20%" align="left">SANGRE</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->sangre){{$cita->orinas->sangre}}  @endisset</td>
            </tr>

            <tr>
              <td colspan="3" width="60%" align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2);"><strong>BIOQUÍMICA</strong> </td>
                <td colspan="3" style="padding-left:10px"><label for="">EXAMEN MICROSCÓPICO</label> </td>
            </tr>


            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>GLUCOSA</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl 74 – 106</td>
              <td width="20%" align="left">LEUCOCITOS</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->leucocitos)  {{$cita->orinas->leucocitos}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>CREATININA</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl H: 0.7–1.3 M: 0.6–1.1</td>
              <td width="20%" align="left">HEMATÍES</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->hematies)  {{$cita->orinas->hematies}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>ACIDO ÚRICO</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl H: 3.5–7.2 M: 2.6–6.0</td>
              <td width="20%" align="left">CÉLULAS EPITELIALES</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->celulas_epiteliales) {{$cita->orinas->celulas_epiteliales}}  @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>COL. TOTAL</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt; 200 </td>
              <td width="20%" align="left">CILINDROS</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->cilindros) {{$cita->orinas->cilindros}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>TRIGLICÉRIDOS</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt; = 150 </td>
              <td width="20%" align="left">CRISTALES</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->cristales) {{$cita->orinas->cristales}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>HDL COLESTEROL</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl 40 – 60 </td>
              <td width="20%" align="left">GÉRMENES</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->germenes) {{$cita->orinas->germenes}}  @endisset </td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>LDL COLESTEROL</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;  130 </td>
              <td width="20%" align="left">FILAMENTOS MUCOIDES</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->filamentos_mucoides) {{$cita->orinas->filamentos_mucoides}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>VLDL COLESTEROL</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small"> U/l H: 11–50 M: 7–32</td>
              <td width="20%" align="left">OTROS</td>
              <td width="35%" style="border:1px solid gray;" >@isset($cita->orinas->otros) {{$cita->orinas->otros}} @endisset</td>
            </tr>
            <tr style="border:1px solid gray;">
              <td width="20%" align="left"> <strong>GGT</strong>  </td>
              <td width="20%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small"> U/l </td>
              <td width="20%" align="left"></td>
              <td width="35%" ></td>
            </tr>

            <tr>
              <td colspan="3" width="60%" align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2);"><strong>INMUNOLOGIA</strong> </td>
                <td colspan="3" style="padding-left:10px"><label for="">EXAMEN TOXICOLOGICO</label> </td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong> SÍFILISS </strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small"></td>
              <td width="20%" align="left">DOSAJE DE COCAINAS</td>
              <td width="35%" style="border:1px solid gray;" ></td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong>PSA</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small"></td>
              <td width="20%" align="left">DOSAJE DE MARIHUANA</td>
              <td width="35%" style="border:1px solid gray;" ></td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong>THEVENON</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small"></td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>

            <tr>
              <td colspan="3" width="60%" align="center" style="border:1px solid gray;background:rgba(0,0,0,0.2);"><strong>PERFIL HEPÁTICO</strong> </td>
                <td colspan="3" style="padding-left:10px"><label for=""></label> </td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong>BILIRRUBINA TOTAL</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>

            <tr>
              <td width="20%" align="left"><strong>BILIRRUBINA DTA.</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong>BILIRRUBINA IDTA.</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong>FOSFATASA ALC.</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>

            <tr>
              <td width="20%" align="left"><strong>TGO.</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>

            <tr>
              <td width="20%" align="left"><strong>TGP.</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong>PROTEINAS TOT.</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
            </tr>
            <tr>
              <td width="20%" align="left"><strong>ALBUMINA.</strong> </td>
              <td width="50%" style="border:1px solid gray;" ></td>
              <td align="center" style="font-size:xx-small">mg/dl &lt;= 1.0</td>
              <td width="20%" align="left"></td>
              <td width="35%"></td>
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
