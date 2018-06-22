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
        border-bottom: 0.41px solid  rgba(0,0,0,0.1);
        border-top:0.41px solid rgba(0,0,0,0.1);
        border-left:0.41px solid rgba(0,0,0,0.1);
        border-right:0.41px solid rgba(0,0,0,0.1);
    }
    .tdcabeza{
      background-color: rgba(0,0,0,0.1);
      font-weight: bold;
      font-size: xx-small;
      padding: 1px;
      border-bottom: 0.41px solid  rgba(0,0,0,0.1);
      border-left:0.41px solid rgba(0,0,0,0.1);
      border-right:0.41px solid rgba(0,0,0,0.1);
    }
    .td-top{
      border-top:none;
    }

    </style>
</head>
<body>
<div class="container-fluid">
  <h5 class="font-verdana center">AUDIOGRAMA - AUDIOMETRIA</h5>


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
      <td class="tdcabeza" width="20%">APELLIDOS Y NOMBRES</td>
      <td class="tdcuerpo td-top" width="80%"></td>
    </tr>
    <tr>
      <td class="tdcabeza" width="20%">EMPRESA</td>
      <td class="tdcuerpo td-top" width="80%"></td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td class="tdcabeza" width="20%">PUESTO DE TRABAJO</td>
      <td class="tdcuerpo td-top" width="30%"></td>
      <td class="tdcabeza" width="20%">TIPO DE CONSULTA</td>
      <td class="tdcuerpo td-top" width="30%"></td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td class="tdcabeza" width="20%">EDAD</td>
      <td class="tdcuerpo td-top" width="30%"></td>
      <td class="tdcabeza" width="20%">SEXO</td>
      <td class="tdcuerpo td-top" width="30%"></td>
      <td class="tdcabeza" width="20%">FECHA EXAMEN</td>
      <td class="tdcuerpo td-top" width="30%"></td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td class="font-verdana tdcabeza td-top " colspan="2" width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">ANTECEDENTES ORL</td>
      <td class="font-verdana tdcabeza td-top " colspan="2" width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">USO DE PROTECCION AUDITIVA EN AREA DE RUIDO</td>
    </tr>
    <tr>
      <td>
        <table>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Otitis Crónica</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Ototoxida</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">TEC </td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Menengitis</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Parotiditis</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Discotecas</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
       </table>
      </td>
      <td>
        <table>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Sarampion</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Walkman</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Trauma Acustico </td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Exp. Laboral a Ruido</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Tiro:</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Labores con Exposicion al ruido</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
       </table>
      </td>
      <td>
        <table>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Tapones</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Orejeras</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Algodones </td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Otros</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Antecedentes Viaje:</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
       </table>
      </td>
      <td>
        <table>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
       </table>
      </td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td class="font-verdana tdcabeza td-top " colspan="2" width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">SINTOMATOLOGIA ACTUAL</td>
      <td class="font-verdana tdcabeza td-top " colspan="2" width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">EXAMEN ORL</td>
    </tr>
    <tr>
      <td>
        <table>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Acufenos</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Hipoacusia</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Exp. Reciente a Ruido </td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td  colspan="2" class="font-verdana tdcuerpo td-top ">Otros</td>

         </tr>


       </table>
      </td>
      <td>
        <table>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Vertigo</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Otalgia</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Enf. T. Respiratorio </td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>

       </table>
      </td>
      <td>
        <table>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Nariz</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Oido</td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">Otoscopia OI: </td>
           <td class="font-verdana tdcuerpo td-top ">NO</td>
         </tr>
         <tr>
           <td colspan="2" class="font-verdana tdcuerpo td-top ">Otros</td>

         </tr>

       </table>
      </td>
      <td>
        <table>
          <tr>
            <td class="font-verdana tdcuerpo td-top ">Garganta:</td>
            <td class="font-verdana tdcuerpo td-top ">NO</td>
          </tr>
          <tr>
            <td class="font-verdana tdcuerpo td-top ">Otoscopia OD:</td>
            <td class="font-verdana tdcuerpo td-top ">NORMAL</td>
          </tr>

         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>
         <tr>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
           <td class="font-verdana tdcuerpo td-top ">&nbsp;</td>
         </tr>

       </table>
      </td>
    </tr>
  </table>
  <table>
      <tr>
        <td class="font-verdana tdcabeza td-top "  width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">AUDIOGRAMA OIDO DERECHO</td>
        <td class="font-verdana tdcabeza td-top "  width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">AUDIOGRAMA OIDO IZQUIERDO</td>
      </tr>
      <tr>
        <td>   <table>
            <tr>
                    <td class="font-verdana tdcuerpo td-top " align="center" colspan="2">Hz</td>
                    <td class="font-verdana tdcuerpo td-top " >125</td>
                    <td class="font-verdana tdcuerpo td-top " >250</td>
                    <td class="font-verdana tdcuerpo td-top " >500</td>
                    <td class="font-verdana tdcuerpo td-top " >1000</td>
                    <td class="font-verdana tdcuerpo td-top " >2000</td>
                    <td class="font-verdana tdcuerpo td-top " >3000</td>
                    <td class="font-verdana tdcuerpo td-top " >4000</td>
                    <td class="font-verdana tdcuerpo td-top " >6000</td>
                    <td class="font-verdana tdcuerpo td-top " >8000</td>

            </tr>
            <tr>
                    <td class="font-verdana tdcuerpo td-top " rowspan="2">dB</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">VA</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>

            </tr>
            <tr>
                    <td class="font-verdana tdcuerpo td-top " align="center">VO</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>

            </tr>
          </table> </td>
        <td>   <table>
            <tr>
                    <td class="font-verdana tdcuerpo td-top " align="center" colspan="2">Hz</td>
                    <td class="font-verdana tdcuerpo td-top " >125</td>
                    <td class="font-verdana tdcuerpo td-top " >250</td>
                    <td class="font-verdana tdcuerpo td-top " >500</td>
                    <td class="font-verdana tdcuerpo td-top " >1000</td>
                    <td class="font-verdana tdcuerpo td-top " >2000</td>
                    <td class="font-verdana tdcuerpo td-top " >3000</td>
                    <td class="font-verdana tdcuerpo td-top " >4000</td>
                    <td class="font-verdana tdcuerpo td-top " >6000</td>
                    <td class="font-verdana tdcuerpo td-top " >8000</td>

            </tr>
            <tr>
                    <td class="font-verdana tdcuerpo td-top " rowspan="2">dB</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">VA</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>

            </tr>
            <tr>
                    <td class="font-verdana tdcuerpo td-top " align="center">VO</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
                    <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>

            </tr>
          </table> </td>
      </tr>
      <tr>
        <td align="center">
          <img src="{{$cita->audiometria->grafico_derecho}}"  alt="" width="321px"></td>
        <td align="center">
            <img src="{{$cita->audiometria->grafico_izquierdo}}" alt="" width="321px"></td>
      </tr>
  </table>
  <table>
      <tr>
        <td class="font-verdana tdcabeza td-top "  width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">CLAVE AUDIOGRAMA</td>
        <td class="font-verdana tdcabeza td-top "  width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">DIAPASONES</td>
        <td class="font-verdana tdcabeza td-top "  width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
              <td class="font-verdana tdcuerpo td-top " align="center">DER</td>
              <td class="font-verdana tdcuerpo td-top " align="center">IZQ</td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center">VA S/ENMASC</td>
              <td class="font-verdana tdcuerpo td-top " align="center">O</td>
              <td class="font-verdana tdcuerpo td-top " align="center">X</td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center">VO S/ENMASC</td>
              <td class="font-verdana tdcuerpo td-top " align="center">&lt;</td>
              <td class="font-verdana tdcuerpo td-top " align="center">&gt;</td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center">VO C/ENMASC</td>
              <td class="font-verdana tdcuerpo td-top " align="center">[</td>
              <td class="font-verdana tdcuerpo td-top " align="center">]</td>
            </tr>

          </table>
        </td>
        <td>
          <table>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center">OD</td>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
              <td class="font-verdana tdcuerpo td-top " align="center">OI</td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
              <td class="font-verdana tdcuerpo td-top " align="center">W</td>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
              <td class="font-verdana tdcuerpo td-top " align="center">R</td>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
              <td class="font-verdana tdcuerpo td-top " align="center">SH</td>
              <td class="font-verdana tdcuerpo td-top " align="center"></td>
            </tr>

          </table>
        </td>
        <td>
          <table>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center">STS OD:</td>
              <td class="font-verdana tdcuerpo td-top " align="center">5.0</td>
              <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center">STS OI:</td>
              <td class="font-verdana tdcuerpo td-top " align="center">3.3</td>
              <td class="font-verdana tdcuerpo td-top " align="center">&nbsp;</td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center"> &nbsp;</td>
              <td class="font-verdana tdcuerpo td-top " align="center"> &nbsp;</td>
              <td class="font-verdana tdcuerpo td-top " align="center"> &nbsp;</td>
            </tr>
            <tr>
              <td class="font-verdana tdcuerpo td-top " align="center">&nbsp; </td>
              <td class="font-verdana tdcuerpo td-top " align="center">&nbsp; </td>
              <td class="font-verdana tdcuerpo td-top " align="center">&nbsp; </td>
            </tr>
          </table>
        </td>
      </tr>
  </table>
  <table>
    <tr>
      <td class="font-verdana tdcabeza td-top "  width="10%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">DIAGNOSTICOS</td>
      <td class="font-verdana tdcuerpo td-top "  width="90%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;"></td>
    </tr>
  </table>
  <table>
    <tr>
      <td class="font-verdana tdcabeza td-top "  width="100%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">PROFESIONAL QUE REALIZO LA AUDIOMETRIA</td>
    </tr>
    <tr>
      <td class="font-verdana tdcuerpo td-top "> <br> <br> <br> <br>  </td>
    </tr>
  </table>
  <table>
    <tr>
      <td class="font-verdana tdcabeza td-top "  width="50%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">CONCLUSIONES</td>
    </tr>
    <td class="font-verdana tdcuerpo td-top "> <br> <br>  </td>
  </table>
  <table>
    <tr>
      <td class="font-verdana tdcabeza td-top "  width="100%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">PACIENTE</td>
        <td class="font-verdana tdcabeza td-top "  width="100%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;">MEDICO</td>
    </tr>
    <tr>
      <td class="font-verdana tdcuerpo td-top "  width="100%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;"> <br> <br> <br> <br> </td>
        <td class="font-verdana tdcuerpo td-top "  width="100%" align="center" style="font-size:xx-small;padding:1px;font-weight:bold;"> <br> <br> </td>
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
