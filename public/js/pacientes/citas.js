$(document).ready(function() {
    $('#msg-error').hide();

    //$('#perfil').trigger('change');
    $('#perfilEditar').trigger('change');
    $('#tipoBusqueda').trigger('change');
    $('#tipoBusquedacita').trigger('change');
    $('#tipo_examen_uno').trigger('change');
    startdate = fechaActual();
    enddate = startdate;


    $('input[name="daterange"]').daterangepicker({
      "locale": {
            "format": "YYYY-MM-DD",
            "separator": " - ",
            "applyLabel": "Guardar",
            "cancelLabel": "Cancelar",
            "fromLabel": "Desde",
            "toLabel": "Hasta",
            "customRangeLabel": "Personalizar",
            "daysOfWeek": [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Setiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1
            }
    });

    $('#daterange').on('apply.daterangepicker', function(ev, picker)
    {
      if($tipoBusqueda == 'fecha'){
       startdate= picker.startDate.format('YYYY-MM-DD');
       enddate=picker.endDate.format('YYYY-MM-DD');
       var token = $('input[name=_token]').attr('value')
       $.ajax({
           type:"post",
           headers: {'X-CSRF-TOKEN':token},
           url:'/citas/busqueda_fecha',
           dataType:"json",
           data:{
             startdate:startdate,
             enddate:enddate
           },
           success: function(data){
               $('#tabla').html(data.html)
           },
           error: function(data){
               console.log("Error "+JSON.stringify(data))
           }
       });
     }
     else{
       startdate= picker.startDate.format('YYYY-MM-DD');
       enddate=picker.endDate.format('YYYY-MM-DD');
     }
   });

   $('input[name="daterangecita"]').daterangepicker({
     "locale": {
           "format": "YYYY-MM-DD",
           "separator": " - ",
           "applyLabel": "Guardar",
           "cancelLabel": "Cancelar",
           "fromLabel": "Desde",
           "toLabel": "Hasta",
           "customRangeLabel": "Personalizar",
           "daysOfWeek": [
               "Do",
               "Lu",
               "Ma",
               "Mi",
               "Ju",
               "Vi",
               "Sa"
           ],
           "monthNames": [
               "Enero",
               "Febrero",
               "Marzo",
               "Abril",
               "Mayo",
               "Junio",
               "Julio",
               "Agosto",
               "Setiembre",
               "Octubre",
               "Noviembre",
               "Diciembre"
           ],
           "firstDay": 1
           }
   });

   $('#daterangecita').on('apply.daterangepicker', function(ev, picker)
   {
        if($tipoBusquedaCita =="fecha"){
              startdate= picker.startDate.format('YYYY-MM-DD');
              enddate=picker.endDate.format('YYYY-MM-DD');
                var id= $('#idPaciente').val()
              var token = $('input[name=_token]').attr('value')
              $.ajax({
                  type:"post",
                  headers: {'X-CSRF-TOKEN':token},
                  url:'/pacientes/citas/fecha_rango',
                  dataType:"json",
                  data:{
                    startdate:startdate,
                    enddate:enddate,
                    id:id
                  },
                  success: function(data){
                      $('#tabla').html(data.html)
                  },
                  error: function(data){
                      console.log("Error "+JSON.stringify(data))
                  }
              });
        }
  });




});
var startdate;
var enddate;
$items = [];

function fechaActual(){
  var today = new Date();
var dd = today.getDate();

var mm = today.getMonth()+1;
var yyyy = today.getFullYear();
if(dd<10)
{
    dd='0'+dd;
}

if(mm<10)
{
    mm='0'+mm;
}
today = yyyy+'-'+mm+'-'+dd;
return today;
}

$('body').on('click','.item',function(e){
    if ($(this).find('input[name=check]').is(':checked')) {
        $(this).find('input[name=check]').prop('checked', false);
        $index = $items.indexOf($(this).find('input[name=check]').val());
        $items.splice($index,1);
        //console.log($(this).find('input[name=check]').val());
        console.log($items);
    }else{
        $(this).find('input[name=check]').prop('checked', true);
        $items.push($(this).find('input[name=check]').val())
        //console.log($(this).find('input[name=check]').val());
        console.log($items)
    }
});
$botonPresionado = '';
$tipo = '';
$idCita = '';
$('#registrarCita').submit(function(e){
    e.preventDefault();

    $items.length = 0;
        if($items.length <= 0){
            $('input[type=checkbox]').each(function () {
                if (this.checked) {
                    $items.push($(this).val());
                }
            });
        }


    var datos = $('#registrarCita')
    var url = datos.attr('action');
    console.log(datos);
    //$.post(url,datos.serialize() + "&items=" + $items,function (result) {
    $.post(url,datos.serialize() + "&" + $.param({'items':$items}),function (result) {

    }).success(function(data)
    {
          $idCita = data.mensaje.id;
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('#modal-confirmacion').modal('hide');
            $('#modal-exito .modal-body').html('<h3 class="text-success text-center">Cita Ocupacional '+ data.mensaje.nro_serie_cita+' al paciente '+ data.mensaje.paciente.apellido_paterno +' '+ data.mensaje.paciente.apellido_materno +', '+ data.mensaje.paciente.nombres +'</h3> <div class="text-center"><button type="button" name="imprimirCita" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-print"></span> Imprimir Cita</button></div>')
            $('#modal-exito').modal('show')
        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data) {
        $('#msg-error').fadeIn();
        $('#listaerrores').html('')
        $('#modal-confirmacion').modal('hide');
        $.each(data.responseJSON.errors, function( index, value ) {
            console.log(value);
            $('#listaerrores').append('<li>'+value+'</li>')
        });

        return;
    });
});




$('#actualizarCita').submit(function(e){
    e.preventDefault();

    var datos = $('#actualizarCita')
    var url = datos.attr('action');
    console.log(url);
    //$.post(url,datos.serialize() + "&items=" + $items,function (result) {
    $.post(url,datos.serialize() + "&" + $.param({'items':$items}),function (result) {

}).success(function(data)
{
    if($.isEmptyObject(data.error)){
        console.log(data)
          $idCita = data.mensaje.id;
        $('#modal-exito').modal({
            backdrop: 'static',
            keyboard:false
        });
        $('#modal-confirmacion').modal('hide');
        $('#modal-exito .modal-body').html('<h3 class="text-success text-center">Cita Ocupacional '+ data.mensaje.nro_serie_cita+' al paciente '+ data.mensaje.paciente.apellido_paterno +' '+ data.mensaje.paciente.apellido_materno +', '+ data.mensaje.paciente.nombres +'</h3> <div class="text-center"><button type="button" name="imprimirCita" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-print"></span> Imprimir Cita</button></div>')
        $('#modal-exito').modal('show')
    }else{
        console.log(data.error)
        return;
    }
    }).error(function(data) {
        $('#msg-error').fadeIn();
        $('#listaerrores').html('')

        $.each(data.responseJSON.errors, function( index, value ) {
            console.log(value);
            $('#listaerrores').append('<li>'+value+'</li>')
        });

        return;
    });
});
$tipoBusqueda = ''
$('#tipoBusqueda').on('change',function(e){
    e.preventDefault();
    $tipoBusqueda = $(this).val();

    $dni = false;
    $paciente = false;
    $fechaDesde = false;
    $fechaHasta = false;
    
    console.log($tipoBusqueda)

    if($tipoBusqueda == "dni"){
        $dni = false;
        $paciente = true;
        $fechaDesde = true;
        $fechaHasta = true;
    }else if($tipoBusqueda == "paciente"){
        $dni = true;
        $paciente = false;
        $fechaDesde = true;
        $fechaHasta = true;
    }else if($tipoBusqueda == "paciente_fecha"){
        $dni = true;
        $paciente = false;
        $fechaDesde = false;
        $fechaHasta = false;
    }else if($tipoBusqueda == "fecha"){
        $dni = true;
        $paciente = true;
        $fechaDesde = false;
        $fechaHasta = false;
    }else if($tipoBusqueda == "dni_fecha"){
        $dni = false;
        $paciente = true;
        $fechaDesde = false;
        $fechaHasta = false;
    }
    else if($tipoBusqueda == "dni_paciente"){
        $dni = false;
        $paciente = false;
        $fechaDesde = true;
        $fechaHasta = true;
    }else if($tipoBusqueda == "dni_paciente_fecha"){
        $dni = false;
        $paciente = false;
        $fechaDesde = false;
        $fechaHasta = false;
    }

    $('input[name=buscarcitadni]').attr('readonly',$dni);
    $('input[name=buscarcitapaciente]').attr('readonly',$paciente);
    $('input[name=desde]').attr('readonly',$fechaDesde);
    $('input[name=hasta]').attr('readonly',$fechaHasta);
});
/************************PACIENTE-CITA****************************/
$tipobusquedaCita='';
$('#tipoBusquedacita').on('change',function(e){
    e.preventDefault();
    $tipoBusquedaCita = $(this).val();

});


$('body').on('change','#perfil',function(e){
    e.preventDefault();
    $valor = $(this).val();
    //console.log($valor);
    var token = $('input[name=_token]').attr('value')

    var url = "/perfil_examen/buscar";
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            buscar : $valor
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
});

$('#perfilEditar').on('change',function(e){
    e.preventDefault();
    $valor = $(this).val();
    $cita = $('input[name=cita_id]').val()

    var token = $('input[name=_token]').attr('value')

    var url = "/perfil_examen/buscaredit";
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            buscar : $valor,
            cita: $cita
        },
        success: function(data){
            $('#tabla').html(data.html)
            $items.length = 0;
            if($items.length <= 0){
                $('input[type=checkbox]').each(function () {
                    if (this.checked) {
                        $items.push($(this).val());
                        console.log($items);
                    }
                });
            }
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });


});

$botonPresionado = '';
$tipo = '';
$('body').on('click','.conformidad',function(e){
    e.preventDefault();

    console.log('click')

    $botonPresionado = 'conforme';

    $tipo = $(this).attr('tipo');
    if($tipo == "registrar")
    {
        $('.confirmar').attr('estado','conforme')

        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Generar Cita con el contrato '+ $('#perfil :selected').text() +' </h3>')
        $('.confirmar').attr('estado','conforme')

        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')

    }else if($tipo == "actualizar"){
        $('.confirmar').attr('estado','conforme')

        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Cita con el contrato '+ $('#perfilEditar :selected').text() +' </h3>')
        $('.confirmar').attr('estado','conforme')

        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')
    }

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $estado = $(this).attr('estado')
    //console.log($estado);

    var token = $('input[name=_token]').attr('value')
    if($estado == 'eliminar') {
        $(this).attr('disabled','disabled');
        var url = "/citas/delete"
        var id = $(this).attr('id')
        console.log(id)
        $.ajax({
            type: "post",
            url: url,
            headers: {'X-CSRF-TOKEN': token},
            dataType: "json",
            data: {
                id: id
            },
            success: function (data) {

                console.log(data.responseJSON)
                $('#modal-confirmacion').modal('hide')
                $('#modal-exito').modal('show')

            },
            error: function (data) {
                console.log(data.responseJSON)
            }
        });
    }else if($estado == 'conforme'){
        if($tipo == "registrar"){
            $('#registrarCita').submit();
        }else if($tipo == "actualizar"){
            $('#actualizarCita').submit();
        }
    }
});

$('body').on('click','.delete',function (e) {
    e.preventDefault();

    $botonPresionado = 'eliminar'

    var id = $(this).attr('id')
    $('.confirmar').attr('id',id)
    $('.confirmar').attr('estado','eliminar')
    $('#modal-confirmacion').modal('show')
});

/*****************************************************************************/


$('#buscarCita').on('keyup',function(){
if($tipoBusquedaCita =="cita"){
    valor = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')
    var id= $('#idPaciente').val()
    var url = "buscarCita";
    //var url = $('#buscarUrlPaciente').val();
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            buscar : valor,
            id:id
        },
        success: function(data){
          //console.log(data);
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
  }
});


$('#buscarCitaDni').on('keyup',function(){
  /*valor = $(this).val();
  if($tipoBusqueda == 'dni'){
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni',
        dataType:"json",
        data:{
            buscar : valor
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
  }else if($tipoBusqueda == 'dni_fecha'){
    // var startdate= picker.startDate.format('YYYY-MM-DD');
    // var enddate=picker.endDate.format('YYYY-MM-DD');
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni_fecha',
        dataType:"json",
        data:{
          startdate:startdate,
          enddate:enddate,
          dni: valor
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
  }*/

});

$('input[name=desde]').on('change',function(e){
    console.log("desde "+$(this).val());
    buscarfecha();
});

$('input[name=hasta]').on('change',function(e){
    console.log("hasta "+$(this).val());
    buscarfecha();
});

$('button[name=buscar]').on('click',function(e){

   if($tipoBusqueda == "dni"){
       buscardni();
   }else if($tipoBusqueda == "paciente"){
       buscar_paciente();
   }else if($tipoBusqueda == "paciente_fecha"){
       buscar_paciente_fecha()
   }else if($tipoBusqueda == "fecha"){
       buscarfecha();
   }else if($tipoBusqueda == "dni_fecha"){
       buscar_dni_fecha();
   }

});

$('button[name=limpiar]').on('click',function(e){

    valor = "";
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni',
        dataType:"json",
        data:{
            buscar : valor
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });

    $('input[name=buscarcitadni]').val('');

});

function buscardni(){
    valor = "";
    valor = $('#buscarCitaDni').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni',
        dataType:"json",
        data:{
            buscar : valor
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

function buscarfecha(){
        startdate= $('input[name=desde]').val();
        enddate= $('input[name=hasta]').val();
        var token = $('input[name=_token]').attr('value')
        $.ajax({
            type:"post",
            headers: {'X-CSRF-TOKEN':token},
            url:'/citas/busqueda_fecha',
            dataType:"json",
            data:{
                startdate:startdate,
                enddate:enddate
            },
            success: function(data){
                $('#tabla').html(data.html)
            },
            error: function(data){
                console.log("Error "+JSON.stringify(data))
            }
        });
}

function buscar_dni_fecha(){
    valor = "";
    valor = $('#buscarCitaDni').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_dni_fecha',
        dataType:"json",
        data:{
            startdate:startdate,
            enddate:enddate,
            dni: valor
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

function buscar_paciente(){
    valor = "";
    valor = $('#buscarCitaPaciente').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_paciente',
        dataType:"json",
        data:{
            buscar : valor
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

function buscar_paciente_fecha(){
    startdate= $('input[name=desde]').val();
    enddate= $('input[name=hasta]').val();
    console.log(startdate+''+enddate);
    valor = "";
    valor = $('#buscarCitaPaciente').val();
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/citas/buscar_paciente_fecha',
        dataType:"json",
        data:{
            buscar : valor,
            startdate:startdate,
            enddate:enddate
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}

$('#buscarCitaPaciente').on('keyup',function(e){
    e.preventDefault();
    $('button[name=buscar]').trigger('click');
});

$('#tipo_examen_uno').on('change',function(e)
{
  $valor = $('#tipo_examen_uno').val();
  //console.log($valor);
  var token = $('input[name=_token]').attr('value')

  var url = "/tipo_examen/filtro";
  $.ajax({
      type:"post",
      headers: {'X-CSRF-TOKEN':token},
      url:url,
      dataType:"json",
      data:{
          filtro : $valor
      },
      success: function(data){
      //  console.log(JSON.stringify(data))
          $('#tipoExamenGroup').html(data.html)
        $('#tipoExamen').trigger('change');
      },
      error: function(data){
          console.log("Error "+JSON.stringify(data))
      }
  });
});



$('body').on('change','#tipoExamen',function(e)
{
  e.preventDefault();
      $valor = $(this).val();
      //console.log($valor);
      var token = $('input[name=_token]').attr('value')

      var url = "/perfil/filtro";
      $.ajax({
          type:"post",
          headers: {'X-CSRF-TOKEN':token},
          url:url,
          dataType:"json",
          data:{
              filtro : $valor
          },
          success: function(data){
            //console.log(JSON.stringify(data))
               $('#perfilGroup').html(data.html)
             $('#perfil').trigger('change');
          },
          error: function(data){
              console.log("Error "+JSON.stringify(data))
          }
      });
 });

$('button[name=buscar_cita_paciente]').on('click',function(e){

        startdate= $('input[name=desde_paciente]').val();
        enddate= $('input[name=hasta_paciente]').val();
        var id= $('#idPaciente').val()
        var token = $('input[name=_token]').attr('value')
        $.ajax({
            type:"post",
            headers: {'X-CSRF-TOKEN':token},
            url:'/pacientes/citas/fecha_rango',
            dataType:"json",
            data:{
                startdate:startdate,
                enddate:enddate,
                id:id
            },
            success: function(data){
                $('#tabla').html(data.html)
            },
            error: function(data){
                console.log("Error "+JSON.stringify(data))
            }
        });
});

$('button[name=limpiar_paciente]').on('click',function(e){

    startdate= "";
    enddate= "";
    var id= $('#idPaciente').val()
    var token = $('input[name=_token]').attr('value')
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:'/pacientes/citas/fecha_rango',
        dataType:"json",
        data:{
            startdate:startdate,
            enddate:enddate,
            id:id
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            console.log("Error "+JSON.stringify(data))
        }
    });

});


$('body').on('click','button[name=imprimirCita]',function(e){
  var url = window.location.protocol + "//" + window.location.host+"/citas/examenes_cliente/"+$idCita
  window.open(url, '_blank');
});
