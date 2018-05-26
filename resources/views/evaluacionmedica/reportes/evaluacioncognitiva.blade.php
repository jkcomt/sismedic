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

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <table>
            <tr>
                <td style="padding-right: 10px;">
                    <img src="{{asset('img/logo.ico/logo.jpg')}}" alt="" width="80px" height="100px" >
                </td>
                <td >
                    <h5>Dirección: Calle Los Girasoles 274 Urb. California, Trujillo</h5>
                    <h5>Teléfono: (044) 322600</h5>
                    <h5>Email: contacto@ciabumedical.com</h5>
                </td >
            </tr>
        </table>
    </div>
    <hr>
    <div class="row">
        <h4 class="text-center">EVALUACIÓN COGNITIVA</h4>
            <table class="table table-condensed table-bordered">
                <tr>
                    <td><label for="">Nombre:</label></td>
                    <td colspan="3">{{$evaluacionCognitiva->cita->paciente->apellido_paterno.' '.$evaluacionCognitiva->cita->paciente->apellido_materno.' '.$evaluacionCognitiva->cita->paciente->nombres}}</td>
                </tr>
                <tr>
                    <td><label for="">Fecha:</label></td>
                    <td>{{Carbon\Carbon::parse($evaluacionCognitiva->fecha_examen)->format('d/m/Y')}}</td>
                    <td>
                        <label for="">Sexo:</label>
                    </td>
                    <td>
                        {{ucfirst($evaluacionCognitiva->cita->paciente->sexo)}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Fecha Nacimiento:</label>
                    </td>
                    <td>
                        {{Carbon\Carbon::parse($evaluacionCognitiva->cita->paciente->fecha_nacimiento)->format('d/m/Y')}}
                    </td>
                    <td><label for="">Edad:</label></td>
                    <td>{{Carbon\Carbon::parse($evaluacionCognitiva->fecha_examen)->diffInYears(Carbon\Carbon::parse($evaluacionCognitiva->cita->paciente->fecha_nacimiento))}}</td>
                </tr>
                <tr>
                    <td><label for="">Grado Instrucción</label></td>
                    <td>{{ucfirst($evaluacionCognitiva->cita->paciente->instruccion->nombre)}}</td>
                    <td><label for="">Área:</label></td>
                    <td>{{$evaluacionCognitiva->cita->paciente->area->nombre}}</td>
                </tr>
                <tr>
                    <td><label for="">Puesto</label></td>
                    <td colspan="3">{{ucfirst($evaluacionCognitiva->cita->paciente->ocupacion->nombre)}}</td>
                </tr>
            </table>
        </div>
    <div class="row">
        <h5>1. Por favor, dígame:</h5>
        <table class="table table-condensed table-bordered">
            <tr>
                <td>¿En qué año estamos?</td>
                <td>@isset($evaluacionCognitiva->en_ano) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué estación?</td>
                <td>@isset($evaluacionCognitiva->en_estacion) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué día de la semana?</td>
                <td>@isset($evaluacionCognitiva->en_dia_semana) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué mes?</td>
                <td>@isset($evaluacionCognitiva->en_mes) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué fecha?</td>
                <td>@isset($evaluacionCognitiva->en_fecha) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h5>2. Por favor, dígame:</h5>
        <table class="table table-condensed table-bordered">
            <tr>
                <td>¿En qué lugar estamos?</td>
                <td>@isset($evaluacionCognitiva->en_lugar_estamos) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué servicio estamos?</td>
                <td>@isset($evaluacionCognitiva->en_servicio_estamos) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué distrito estamos?</td>
                <td>@isset($evaluacionCognitiva->en_distrito_estamos) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué provincia estamos ?</td>
                <td>@isset($evaluacionCognitiva->en_provincia_estamos) V @endisset</td>
            </tr>
            <tr>
                <td>¿En qué país?</td>
                <td>@isset($evaluacionCognitiva->en_pais_estamos) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h5>3. Ahora le voy a nombrar tres objetos. Después que se los diga, le voy a pedir que repita en vox alta los que recuerde, en cualquier orden. Recuerde los objetos porque se los voy a preguntar más adelante:</h5>
        <table class="table table-condensed table-bordered">
            <tr>
                <td rowspan="3">
                    <h5>
                        (Lea los nombres de los objetos a razón de 1 por segundo. Luego se pide al paciente que las repita. Esta primera repetición otorga puntuación. Otorgue 1 punto por cada palabra correcta, pero continúe diciéndolas hasta que el sujeto repita las 3, un máximo de 5 repeticiones).
                    </h5>
                </td>
                <td>Árbol</td>
                <td>@isset($evaluacionCognitiva->repite_arbol) V @endisset</td>
            </tr>
            <tr>
                <td>Mesa</td>
                <td>@isset($evaluacionCognitiva->repite_mesa) V @endisset</td>
            </tr>
            <tr>
                <td>Avión</td>
                <td>@isset($evaluacionCognitiva->repite_avion) V @endisset</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="row">
        <h5>4. Si tiene 30 monedas y me va dando de tres en tres. ¿Cuántas le van quedando?</h5>
        <table class="table table-condensed table-bordered">
            <tr >
                <td rowspan="5" style="width: 50%;">
                    <h5>
                        Detenga la prueba tras 5 sustracciones. Si el sujeto no puede realizar esta prueba pídale que deletree “MUNDO” al revés.
                    </h5>
                </td>
                <td>30</td>
                <td>@isset($evaluacionCognitiva->tiene_30_monedas) V @endisset</td>
            </tr>
            <tr>
                <td>27</td>
                <td>@isset($evaluacionCognitiva->tiene_27_monedas) V @endisset</td>
            </tr>
            <tr>
                <td>24</td>
                <td>@isset($evaluacionCognitiva->tiene_24_monedas) V @endisset</td>
            </tr>
            <tr>
                <td>21</td>
                <td>@isset($evaluacionCognitiva->tiene_21_monedas) V @endisset</td>
            </tr>
            <tr>
                <td>18</td>
                <td>@isset($evaluacionCognitiva->tiene_18_monedas) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h5>5. Le voy a dar un papel. Tómelo con su mano derecha, dóblelo por la mitad con ambas manos y póngalo en el suelo.</h5>
        <table class="table table-condensed table-bordered">
            <tr>
                <td rowspan="3"  style="width: 50%;">
                    <h5>
                        Entréguele el papel y anote un punto por cada acción realizada correctamente.
                    </h5>
                </td>
                <td>Toma el papel</td>
                <td>@isset($evaluacionCognitiva->toma_papel) V @endisset</td>
            </tr>
            <tr>
                <td>Dobla por la mitad</td>
                <td>@isset($evaluacionCognitiva->dobla_mitad) V @endisset</td>
            </tr>
            <tr>
                <td>Ponla en el suelo</td>
                <td>@isset($evaluacionCognitiva->puso_suelo) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h5>6.	Hace un momento le leí una serie de 3 palabras y usted repitió las que recordó. Dígame ahora cuáles recuerda:</h5>
        <table class="table table-condensed table-bordered">
            <tr>
                <td rowspan="3">
                    <h5>
                        Anote un punto por cada objeto recordado
                    </h5>
                </td>
                <td>Toma el papel</td>
                <td>@isset($evaluacionCognitiva->repite_arbol_dos) V @endisset</td>
            </tr>
            <tr>
                <td>Dobla por la mitad</td>
                <td>@isset($evaluacionCognitiva->repite_mesa_dos) V @endisset</td>
            </tr>
            <tr>
                <td>Ponla en el suelo</td>
                <td>@isset($evaluacionCognitiva->repite_avion_dos) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h5>7.	Mostrarle un lápiz o un bolígrafo y preguntar ¿qué es esto? Hacer lo mismo con un reloj de pulsera:</h5>
        <table class="table table-condensed table-bordered">
            <tr>
                <td rowspan="2"  style="width: 50%;">
                    <h5>
                        Anote un punto por cada objeto recordado
                    </h5>
                </td>
                <td>Lápiz</td>
                <td>@isset($evaluacionCognitiva->reconoce_lapiz) V @endisset</td>
            </tr>
            <tr>
                <td>Reloj</td>
                <td>@isset($evaluacionCognitiva->reconoce_reloj) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table class="table table-condensed table-bordered">
            <tr>
                <td>
                    <h5>8.	Pedirle que repita la frase: “tres tristes tigres comen trigo en un trigal”</h5>
                </td>
                <td>Lápiz</td>
                <td>@isset($evaluacionCognitiva->repite_frase) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table class="table table-condensed table-bordered">
            <tr>
                <td><h5>9.	Escriba legiblemente en un papel “Cierre los ojos”. Pídale que lo lea y haga lo que dice la frase.</h5></td>
                <td>@isset($evaluacionCognitiva->escribe_lee_actua) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table class="table table-condensed table-bordered">
            <tr>
                <td><h5>10.	Pídale que escriba una frase con sujeto y predicado.</h5></td>
                <td>@isset($evaluacionCognitiva->escribe_sujeto_predicado) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h5>11.	Por favor copie este dibujo:
            Muestre al entrevistado el dibujo con dos pentágonos cuya intersección es un cuadrilátero. El dibujo es correcto si los pentágonos se cruzan y forman el cuadrilátero.
        </h5>
        <table class="table table-condensed table-bordered">
            <tr>
                <td class="text-center">
                    <br>
                    <img src="{{asset('img/cuadrilateros.jpg')}}" alt="" height="80px" width="150px">
                </td>
                <td><h5>Para otorgar un punto deben estar presentes los 10 ángulos y la intersección.</h5></td>
                <td>Respuesta @isset($evaluacionCognitiva->copia_dibujo) V @endisset</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table class="table table-condensed table-bordered">
            <tr>
                <td>
                    <h5>Puntos de referencia:</h5>
                    <h5>27 o más	:	NORMAL</h5>
                    <h5>24 o menos	:	SOSPECHA ATOLÓGICA</h5>
                    <h5>12 – 24	:	DETERIOSO</h5>
                    <h5>9 – 12	:	DEMENCIA</h5>

                </td>
                <td class="text-center"><h4>Puntaje Total:</h4> @isset($evaluacionCognitiva->puntaje){{ $evaluacionCognitiva->puntaje}} @endisset</td>
            </tr>
        </table>
    </div>
    </div>
</div>
</body>