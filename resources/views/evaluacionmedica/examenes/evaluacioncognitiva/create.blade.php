<div class="modal fade" tabindex="-1" role="dialog" id="modal-evaluacion-cognitiva">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form id="registrarEvaluacionCognitiva" method="post">
                <input type="hidden" name="lista_examen_id" value="{{$listaExamen->id}}">
                <input type="hidden" name="cita_id" value="{{$cita->id}}">

                @isset($cita->evaluacionCognitiva->id)
                    <input type="hidden" name="evaluacionCognitivia_id" value="{{$cita->evaluacionCognitiva->id}}">
                @endisset

                <div class="modal-body" style="padding-bottom: 0px;">
                    {{csrf_field()}}
                    <style>
                        li {
                            list-style-type: none;
                        }
                    </style>
                    <div class="row form-horizontal">


                        <div class="col-md-10 nav-tabs-custom" style="margin-bottom:0px;">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Del 1 - 3</a></li>
                                <li><a data-toggle="tab" href="#menu1">Del 4 - 7</a></li>
                                <li><a data-toggle="tab" href="#menu2">Del 8 - 11</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box box-solid box-body">
                                                        <strong>1. Por favor, dígame:</strong>
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="en_ano" value="1" @isset($cita->evaluacionCognitiva->en_ano) checked @endisset> ¿En qué años estamos?
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="en_estacion" value="1" @isset($cita->evaluacionCognitiva->en_estacion) checked @endisset> ¿En qué estación?
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="en_dia_semana" value="1" @isset($cita->evaluacionCognitiva->en_dia_semana) checked @endisset> ¿En qué día de la semana?
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="en_mes" value="1" @isset($cita->evaluacionCognitiva->en_mes) checked @endisset> ¿En qué mes?
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="en_fecha" value="1"  @isset($cita->evaluacionCognitiva->en_fecha) checked @endisset> ¿En qué fecha?
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-10 col-md-offset-1">--}}
                                                                {{--<label for="">Puntuacion:</label> <input type="number">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="box box-solid box-body">
                                                    <strong>2. Por favor, dígame:</strong>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="en_lugar_estamos" value="1" @isset($cita->evaluacionCognitiva->en_lugar_estamos) checked @endisset> ¿En qué lugar estamos?
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="en_servicio_estamos" value="1" @isset($cita->evaluacionCognitiva->en_servicio_estamos) checked @endisset> ¿En qué servicio estamos?
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="en_distrito_estamos" value="1" @isset($cita->evaluacionCognitiva->en_distrito_estamos) checked @endisset> ¿En qué distrito estamos?
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="en_provincia_estamos" value="1" @isset($cita->evaluacionCognitiva->en_provincia_estamos) checked @endisset> ¿En qué provincia estamos?
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="en_pais_estamos" value="1"  @isset($cita->evaluacionCognitiva->en_pais_estamos) checked @endisset> ¿En qué país?
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-10 col-md-offset-1">--}}
                                                            {{--<label for="">Puntuacion:</label> <input type="number">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="box box-solid box-body">
                                                        <strong>3. Ahora le voy a nombrar a tres objetos. Después que se los diga, le
                                                            voy a pedir que repite en voz alta los que recuerde, en cualquier
                                                            orden. Recuerde que los objetos porque se los voy a preguntar más
                                                            adelante:
                                                        </strong>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="repite_arbol" value="1" @isset($cita->evaluacionCognitiva->repite_arbol) checked @endisset> ¿Árbol?
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="repite_mesa" value="1" @isset($cita->evaluacionCognitiva->repite_mesa) checked @endisset> ¿Mesa?
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="repite_avion" value="1" @isset($cita->evaluacionCognitiva->repite_avion) checked @endisset> ¿Avión?
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <p>
                                                                    <small>
                                                                        Lea los nombres de los objetos a razón de 1 por segundo. Luego se
                                                                        pide al paciente que las repita. Esta primera repetición otorga la
                                                                        puntuación, Otorgue 1 punto por cada palabra correcta, pero continúe
                                                                        diciéndolas hasta que el sujeto repita las 3, hasta un máximo de 5
                                                                        repeticiones
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="col-md-12">
                                        <div class="row">
                                        <div class="col-md-6" style="height: 100%;">
                                            <div class="box box-solid box-body">
                                            <strong>4. Si tiene 30 monedas y me va dando de tres en tres ¿Cuántas le van quedando?</strong>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkbox small">
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="tiene_30_monedas" value="1" @isset($cita->evaluacionCognitiva->tiene_30_monedas) checked @endisset> 30
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="tiene_27_monedas" value="1" @isset($cita->evaluacionCognitiva->tiene_27_monedas) checked @endisset> 27
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="tiene_24_monedas" value="1" @isset($cita->evaluacionCognitiva->tiene_24_monedas) checked @endisset> 24
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="tiene_21_monedas" value="1" @isset($cita->evaluacionCognitiva->tiene_21_monedas) checked @endisset> 21
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="tiene_18_monedas" value="1" @isset($cita->evaluacionCognitiva->tiene_18_monedas) checked @endisset> 18
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <small>
                                                            Detenga la prueba tras 5 sustracciones, si el sujeto no puede
                                                            realizar esta prueba pídale que deletree "MUNDO" al revés.
                                                        </small>

                                                    </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box box-solid box-body">
                                                <strong>5.Le voy a dar un papel. Tómelo con su mano derecha, dóblelo por la
                                                    mitad con ambas manos y póngalo en el suelo.</strong>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                            <div class="checkbox small">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="toma_papel" value="1" @isset($cita->evaluacionCognitiva->toma_papel) checked @endisset> Toma el papel
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="dobla_mitad" value="1" @isset($cita->evaluacionCognitiva->dobla_mitad) checked @endisset> Dobla por la mitad
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="puso_suelo" value="1" @isset($cita->evaluacionCognitiva->puso_suelo) checked @endisset> Pone en el suelo
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>
                                                            <small>
                                                            Entrégale el papel y anote un punto por cada accion realizada
                                                            correctamente.
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="box box-solid box-body">
                                                <strong>6. Hace un momento le leí una serie de 3 palabras y Ud. repitió las
                                                    que recordo. Dígame ahora cuáles recuerda:</strong>
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="checkbox small">
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="repite_arbol_dos" value="1" @isset($cita->evaluacionCognitiva->repite_arbol_dos) checked @endisset> ¿Árbol?
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="repite_mesa_dos" value="1" @isset($cita->evaluacionCognitiva->repite_mesa_dos) checked @endisset> ¿Mesa?
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="repite_avion_dos" value="1" @isset($cita->evaluacionCognitiva->repite_avion_dos) checked @endisset> ¿Avión?
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <p>
                                                        <small>
                                                            Anote un punto por cada objeto recordado
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="box box-solid box-body">
                                                <strong>7. Mostrarle un lápiz o un bolígrafo y preguntar ¿qué es esto? Hacer
                                                    lo mismo con un reloj de pulsera</strong>
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="checkbox small">
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="reconoce_lapiz" value="1" @isset($cita->evaluacionCognitiva->reconoce_lapiz) checked @endisset> Lápiz
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="reconoce_reloj" value="1" @isset($cita->evaluacionCognitiva->reconoce_reloj) checked @endisset> Reloj
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <p>
                                                        <small>
                                                            Anote un punto por cada objeto recordado
                                                        </small>
                                                    </p>

                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="menu2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="box box-solid box-body">
                                                        <strong>8. Pedirle que repita la frase: "tres tristes tigres comen trigo
                                                            en un trigal"</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="repite_frase" value="1" @isset($cita->evaluacionCognitiva->repite_frase) checked @endisset> Correcto
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="box box-solid box-body">
                                                        <strong>9. Escriba legiblemente en un papel "Cierre los ojos". Pida que
                                                            lo lea y haga lo que le dice la frase</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="escribe_lee_actua" value="1" @isset($cita->evaluacionCognitiva->escribe_lee_actua) checked @endisset> Correcto
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="box box-solid box-body">
                                                        <strong>10. Pídale que escriba una frase con sujeto y predicado</strong>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="checkbox small">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="escribe_sujeto_predicado" value="1" @isset($cita->evaluacionCognitiva->escribe_sujeto_predicado) checked @endisset> Correcto
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box box-solid box-body">
                                                    <strong>11. Por favor copie este dibujo:</strong> <br>
                                                        <strong>
                                                            Muestre al entrevistado el dibujo con dos pentágonos cuya interseccion es un cuadrilátero.
                                                            El dibujo es correcto si los pentágonos se cruzan y forman el cuadrilatero</strong>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <br>
                                                            <img src="{{asset('img/cuadrilateros.jpg')}}" alt="" height="80px" width="150px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <br>
                                                            <p>
                                                                <small>Para otorgar un punto deben estar presentes los 10 ángulos y la intersacción.</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="checkbox small">
                                                                <label>
                                                                    <input type="checkbox" name="copia_dibujo" value="1"  @isset($cita->evaluacionCognitiva->copia_dibujo) checked @endisset> Correcto
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-12 text-center" style="padding-left: 5px;">
                                    <label for="puntaje" class="label-control">PUNTAJE</label>
                                    @isset($cita->evaluacionCognitiva)
                                        <input type="number" readonly value="{{$cita->evaluacionCognitiva->puntaje}}" class="form-control text-center" name="puntaje">
                                        @else
                                        <input type="number" readonly value="00" class="form-control text-center" name="puntaje">
                                     @endisset
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <small>
                                        <ul style="padding-left: 0px;">
                                            <li><small>27 o (+): NORMAL</small></li>
                                            <li><small>24 o (-): SOSPECHA PATOLÓGICA</small></li>
                                            <li><small>12 - 24: DETERIORO</small></li>
                                            <li><small>09 - 12: DEMENCIA</small></li>
                                        </ul>
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            @isset($cita->evaluacionCognitiva->id)
                                <button class="btn btn-sm btn-primary  registrarEvaluacionCognitiva" tipo="evaluacionCognitiva_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                                @else
                                <button class="btn btn-sm btn-success registrarEvaluacionCognitiva"  tipo="evaluacionCognitiva_guardar" type="button">GUARDAR</button>
                            @endisset
                            <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                            <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
