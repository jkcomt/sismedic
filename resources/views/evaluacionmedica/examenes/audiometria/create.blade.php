<style media="screen">
#mdlaudiometria{
width: 90% !important;
}

.select2-container--default .select2-selection--single{
    border-radius: 0px;
    height: 34px;
    border: 1px solid #d2d6de !important;
}
</style>
<div class="modal fade" role="dialog" id="modal-audiometria">
    <div class="modal-dialog" id="mdlaudiometria" role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form  id="audiometria">
            <div class="modal-body ">
                {{csrf_field()}}
                <div class="row form-horizontal">

                      <div class="col-lg-4">
                        <div class="col-md-12">
                            <strong>   Sintomatologia Actual</strong>
                        </div>
                        <div class="col-lg-6">
                          <div class="checkbox">
                              <label>
                                <input type="checkbox">Acúfenos
                              </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox">Hipoacusia
                                </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox">Exposicion reciente a ruido (14 horas)
                                  </label>
                              </div>

                        </div>
                        <div class="col-lg-6">
                          <div class="checkbox">
                              <label>
                                <input type="checkbox"> Vertigo
                              </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox">Otalgia
                                </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox">Enfermedad Tracto Respiratoria Alto Actual
                                  </label>
                                </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="checkbox">
                              <label>
                                <input type="checkbox">Antecedente de Viaje en las Ultimas horas
                              </label>
                            </div>
                        </div>
                        <div class="col-lg-12 form-inline" style="margin-top:5px;">

                                  <div class="form-group">

                                    <div class="input-group">
                                      <div class="input-group-addon" style="border:none">
                                              <input type="checkbox" id="otroaudiometria">
                                      </div>
                                      <div class="input-group-addon" style="border:none">
                                                    <label for="otroaudiometria">Otros</label>
                                      </div>
                                      <input type="text" class="form-control">
                                    </div>
                                  </div>

                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="col-lg-12">    <strong> Examen ORL</strong>
                          </div>
                          <div class="col-lg-6 form-inline">
                            <div class="form-group" style="margin-left:10px;">
                                <label style="font-weight: lighter;margin-right:5px;">Nariz</label>
                                <select class="form-control" name="">
                                    <option value="1">VAL_UNO</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left:10px;margin-top:5px;">
                                <label style="font-weight: lighter;margin-right:6px;">Oído</label>
                                <select class="form-control" name="">
                                    <option value="1">VAL_UNO</option>
                                </select>
                            </div>

                          </div>
                          <div class="col-lg-6 form-inline">

                            <div class="form-group" style="margin-left:0px;">
                                <label style="font-weight: lighter;margin-right:5px;">Garganta</label>
                                <select class="form-control" name="">
                                    <option value="1">VAL_UNO</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left:10px;margin-top:5px;">
                                <label style="font-weight: lighter;margin-right:6px;">&nbsp;</label>
                                <select class="form-control" name="" style="border:none;color:white;">
                                    <option value="1">V</option>
                                </select>
                            </div>

                          </div>

                          <div class="col-lg-12 form-horizontal" style="margin-top:5px;">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Otoscopia OD</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="">
                                      <option value="1">VAL_UNO  </option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top:-8px;">
                                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Otoscopia OI</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="">
                                      <option value="1">VAL_UNO  </option>
                                  </select>
                                </div>
                            </div>

                            </div>

                      </div>
                      <div class="col-lg-4">
                        <div class="col-lg-12"> <strong> Datos de Audiometro</strong>
                          </div>

                          <div class="col-lg-12 form-horizontal">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Marca</label>
                                    <div class="col-sm-8">
                                    <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top:-8px;">
                                    <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Modelo</label>
                                    <div class="col-sm-8">
                                    <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top:-8px;">
                                    <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Calibración</label>
                                    <div class="col-sm-8">
                                    <input type="email" class="form-control">
                                    </div>
                                </div>

                                 <div class="form-group" style="margin-top:-8px;">
                                    <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight: lighter;">Personal</label>
                                    <div class="col-sm-8">
                                      <select name="personal_audiometria" id="personal_audiometria" style="width:100% !important;" class="form-control">
                                        @foreach ($personales as $key => $value)
                                          <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                            </div>

                      </div>
                      <div class="col-lg-12">
                          <div class="col-lg-6">
                            <h6><strong>Oido Derecho</strong> </h6>
                            <div class="col-lg-12">
                              <div class="col-lg-1 text-center">
                               &nbsp;  <br> <input type="text" name="od_val1" value="" style="width:30px;border:white;"  readonly>
                              </div>
                              <div class="col-lg-1 text-center">
                                  125  <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  250 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  500 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  1000 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  2000 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  3000 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  4000 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  6000 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  8000 <br> <input type="text" name="" value="" style="width:30px;">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-1 text-center">
                             <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;border:white;" placeholder="E"  readonly>
                              </div>
                              <div class="col-lg-1 text-center">
                             <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                 <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                   <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                   <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                            </div>
                            <div class="col-lg-12">
                                    <canvas id="oido_derecho" width="800" height="450"></canvas>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <h6><strong>Oido Izquierdo</strong></h6>
                            <div class="col-lg-12">
                              <div class="col-lg-1 text-center">
                               &nbsp;  <br> <input type="text" name="" value="" style="width:30px;border:white;"  readonly>
                              </div>
                              <div class="col-lg-1 text-center">
                                  125  <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  250 <br> <input type="text" name="" value="" style="width:30px;">   <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  500 <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  1000 <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  2000 <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  3000 <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  4000 <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  6000 <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                              <div class="col-lg-1 text-center">
                                  8000 <br> <input type="text" name="" value="" style="width:30px;">  <!--br> <input type="text" name="" value="" style="margin-top: 5px;width:30px;"-->
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-1 text-center">
                             <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;border:white;" readonly placeholder="E">
                              </div>
                              <div class="col-lg-1 text-center">
                             <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                 <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                   <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                   <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                  <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                              <div class="col-lg-1 text-center">
                                <input type="text" name="" value="" style="margin-top: 2.5px;width:30px;">
                              </div>
                            </div>
                            <div class="col-lg-12">
                                <canvas id="oido_izquierdo" width="800" height="450"></canvas>
                            </div>
                          </div>
                      </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                      @isset($cita->colesterolHdl->id)
                        <button class="btn btn-sm btn-primary registrarColesterolHdl" tipo="colesterol_hdl_modificar" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDITAR</button>
                       @else
                        <button class="btn btn-sm btn-success registrarColesterolHdl" tipo="colesterol_hdl_guardar"  type="button">GUARDAR</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script>

$(document).ready(function() {
  $url = window.location.protocol + "//" + window.location.host+'/personal/buscarpersonal',
  $('#personal_audiometria').select2({
    minimumResultsForSearch: 5,
    // placeholder: 'Seleccione un paciente | filtre por DNI',
  ajax: {
      dataType: 'json',
      url: $url,
      delay: 200,
      data: function(params) {
          return {
              term: params.term
          }
      },
      processResults: function (data, page) {
          return {
              results: data
          };
      }
  }
});
      $("#od_val1").keypress(function(){
          alert("hola");
      });

});


new Chart(document.getElementById("oido_derecho"), {
  type: 'line',
  data: {
      labels: ["125", "250", "500", "1000", "2000", "3000","4000","5000","6000","8000"],
    datasets: [{
        data: [86,114,106,106,107,1110,133,221,783,2478],
        label: "VA",
        borderColor: "#3e95cd",
        fill: false
      }, {
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "VO",
        borderColor: "#8e5ea2",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});



new Chart(document.getElementById("oido_izquierdo"), {
  type: 'line',
  data: {
      labels: ["125", "250", "500", "1000", "2000", "3000","4000","5000","6000","8000"],
    datasets: [{
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "VA",
        borderColor: "#3e95cd",
        lineTension: 0,
        fill: false,
        borderColor: 'orange',
        backgroundColor: 'transparent',
        borderDash: [1, 10],
        pointBorderColor: 'orange',
        pointBackgroundColor: 'rgba(255,150,0,0.5)',
        pointRadius: 5,
        pointHoverRadius: 10,
        pointHitRadius: 10,
        pointBorderWidth: 2,
        pointStyle: 'rectRounded'
      }, {
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "VO",
        borderColor: "#8e5ea2",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});

</script>
