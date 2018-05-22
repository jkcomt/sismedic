<div class="modal fade" tabindex="-1" role="dialog" id="modal-vision">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">



                  <div class="col-md-12">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Del 1 - 3</a></li>
                      <li><a data-toggle="tab" href="#menu1">Del 4 - 7</a></li>
                      <li><a data-toggle="tab" href="#menu2">Del 8 - 11</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                              <div class="col-md-12">


                                     <h4>1. Por favor, Digame:</h4>

                              </div>
                              <h5></h5>
                              <div class="col-md-12">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Remember me
                                      </label>
                                    </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="col-md-12">


                                    <h4>2. Por favor, Digame:</h4>


                              </div>
                              <h5></h5>
                              <div class="col-md-12">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Remember me
                                      </label>
                                    </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="col-md-12">

                              <h4>3. Ahora le voy a nombrar a 3 objetos. Despues que se los diga, le voy a pedir que repite en voz alta los que recuerde, en cualquier orden. Recuerde que los objetos porque se los voy a preguntar más adelante</h4>

                          </div>
                          <div class="col-md-12">
                              <div class="col-md-6">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  Lea los nombres de  los objetos a razón de 1 por segundo. Luego se pide al paciente que las repita. Estaprimera repeticion otorga la puntuacion, Otorgue 1 punto por cada palabra correcta, pero continúe diciéndolas hasta que el sujeto repita las 3, hasta un maximo de 5 repeticiones
                              </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div id="menu1" class="tab-pane fade">
                        <div class="col-md-12">
                          <div class="col-md-6">
                                <div class="col-md-12">
                                       <h4>4. Si tiene 30 monedas y me va dando de tres en tres ¿Cuántas le van quedando?:</h4>
                                </div>
                                <h5></h5>
                                    <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="col-md-12">
                                              <div class="checkbox">
                                                <label>
                                                  <input type="checkbox"> 30
                                                </label>
                                              </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 27
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 24
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 21
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 18
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <br>
                                        Detenga la prueba tras 5 sustracciones, si el sujeto no puede realizar esta prueba pídale que deletree "MUNDO"
                                      </div>
                                    </div>
                                  </div>

                          <div class="col-md-6">
                              <div class="col-md-12">
                                     <h4>5.Le voy a dar un papel. Tomelo con su mano derecha, doblelo por la mitad con ambas manos y pongalo en el suelo</h4>
                              </div>
                              <h5></h5>
                                  <div class="col-md-12">
                                    <div class="col-md-6">
                                      <div class="col-md-12">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox"> Toma el papel
                                              </label>
                                            </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox">Dobla por la mitad
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox"> Pone en el suelo
                                          </label>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="col-md-6">
                                      <br>
                                      Entrégale el papel y anote un punto por cada accion realizada correctamente.
                                    </div>
                                  </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="col-md-6">
                                <div class="col-md-12">
                                       <h4>6. Hace un momento le leí una serie de 3 palabras y Ud. repitio las que recordo digame ahora cuales Recuerda</h4>
                                </div>
                                <h5></h5>
                                    <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="col-md-12">
                                              <div class="checkbox">
                                                <label>
                                                  <input type="checkbox">Arbol
                                                </label>
                                              </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Mesa
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> Avión
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <br>
                                          Anote un punto por cada objeto recordado
                                      </div>
                                    </div>
                          </div>

                          <div class="col-md-6">
                              <div class="col-md-12">
                                     <h4>7. Mostrarle un lápiz o un boligrafo y preguntar ¿?qué es esto Hacer lo mismo con un reloj de pulsera</h4>
                              </div>
                              <h5></h5>
                                  <div class="col-md-12">
                                    <div class="col-md-6">
                                      <div class="col-md-12">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox"> Lápiz
                                              </label>
                                            </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox"> Reloj
                                          </label>
                                        </div>
                                      </div>


                                    </div>
                                    <div class="col-md-6">
                                      Anote un punto por cada objeto recordado
                                    </div>
                                  </div>
                          </div>
                        </div>
                     </div>
                      <div id="menu2" class="tab-pane fade">
                          <div class="row">
                              <div class="col-md-12">
                                <div class="col-md-6">
                                  <div class="col-md-12">
                                    <h4>8. Pedirle que repita la frase: "tres tristes tigres comen trigo en un trigal"</h4>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Correcto
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <h4>9. Escriba legiblemente en un papel "Cierre los ojos". Pida que lo lea y haga lo que le dice la frase</h4>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Correcto
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <h4>10. Pídale que escriba una frase con sujeto y predicado</h4>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Correcto
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="col-md-12">
                                    <h4>11. Porfabor copie este dibujo: <br> Muestre al entrevistado el dibujo con dos pentágonos cuya interseccion es un cuadrilátero. <br> El dibujo es correcto si los pentágonos se cruzan</h4>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Correcto
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
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
