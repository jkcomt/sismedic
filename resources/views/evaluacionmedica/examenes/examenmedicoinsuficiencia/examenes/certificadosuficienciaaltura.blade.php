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
        .center-text{
            text-align: center;
        }
        .padding-top{
            padding-top: 30px;
            border: hidden;
        }
          .tabla tr td{
             border: 1px solid black;
          }
          .tabla td{
            padding: 3px;
          }
          .tabla .tdheight
          {
            overflow: hidden;
            height: 85px;
          }
          .tabla
          {
            padding-left: 7%;
          }
          .tabla .tdcolor
          {
            background-color: rgba(0,0,0,0.2);
          }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <table>
            <tr>
                <td style="padding-left: 50px;">
                    <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" width="80px" height="100px" >
                </td>
                <td >
                    <h3 align="center">CENTRO MÉDICO DE SALUD OCUPACIONAL <br> “CIABU”</h3>
                </td >

            </tr>
            {{-- <tr>
              <td colspan="2" align="center"><strong> <h4>INFORME MEDICO</h4> </strong> </td>
            </tr> --}}
            </table>
            <div class="" style="width:100%;text-align:center;">
                <strong> <h4>INFORME MEDICO</h4> </strong>
            </div>

            <table class="tabla" width="90%">
            <tr>
              <td width="25%" class="tdcolor"><strong> Asunto </strong></td>
              <td width="75%"></td>
            </tr>
            <tr>
              <td class="tdcolor"><strong> Especialidad </strong></td>
              <td></td>
            </tr>
            <tr>
              <td class="tdcolor"><strong> Fecha </strong></td>
              <td></td>
            </tr>
          </table>
          <br>
        <table class="tabla" width="90%">
          <tr>
                  <td class="tdcolor"> <strong> 1.- DATOS PERSONALES</strong> </td>
          </tr>
          <tr>
                  <td class="tdheight"> {{$cita->paciente->nombres." ".$cita->paciente->apellido_paterno." ".$cita->paciente->apellido_materno}} </td>
          </tr>
        </table>
        <br>
        <table class="tabla" width="90%">
          <tr>
                  <td class="tdcolor"> <strong> 2.- ANTECEDENTES</strong> </td>
          </tr>
          <tr>
                  <td class="tdheight">  </td>
          </tr>
        </table>
        <br>
        <table class="tabla" width="90%">
          <tr>
                  <td class="tdcolor"> <strong> 3.- RESUMEN</strong> </td>
          </tr>
          <tr>
                  <td class="tdheight">   </td>
          </tr>
        </table>
    </div>


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
