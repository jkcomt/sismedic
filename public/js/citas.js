$(document).ready(function() {

    $('#paciente').select2({
      minimumResultsForSearch: 5,
      placeholder: 'Seleccione un paciente | filtre por DNI',
    ajax: {
        dataType: 'json',
        //
        //url: $('#buscarpaciente').val(),
        url: window.location.protocol + "//" + window.location.host+'/buscar_paciente',
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

    $('#msg-error').hide();

  //  $('#perfil').trigger('change');
    $('#tipo_examen_uno').trigger('change');

    $('#perfilEditar').trigger('change');
    //$('#tipoExamen').trigger('change');



});


$('#tipo_examen_uno').on('change',function(e)
{
  $valor = $('#tipo_examen_uno').val();
  console.log($valor);
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


$items = [];

$('#paciente').on('change',function(e){
  console.log($(this).val())
  e.preventDefault();
  $valor = $(this).val();
  var token = $('input[name=_token]').attr('value')

  $.ajax({
      type:"post",
      headers: {'X-CSRF-TOKEN':token},
      url:'/pacientes/paciente_ajax',
      dataType:"json",
      data:{
          buscar : $valor
      },
      success: function(data){
        console.log(data);
        $('#DNI').html(data.num_dni);
        $('#nroHistoria').html(data.nro_historia);
        //  $('#tabla').html(data.html)
      },
      error: function(data){
          //console.log("Error "+JSON.stringify(data))
      }
  });

});

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
    console.log($items);
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
        $('#modal-confirmacion').modal('hide');
        $.each(data.responseJSON.errors, function( index, value ) {
            console.log(value);
          $('#listaerrores').append('<li>'+value+'</li>')
          if(data.responseJSON.errors.paciente)
         {
            $('.select2-selection').addClass('has-error')
            $('#pacienteGroup').addClass('has-error')
             $('body #pacienteGroup').focus();//aqui pepe el selecte se llama paciente
             $(window).scrollTop(0);
             //$('body #pacienteGroup').select();
        //   myFunc(data.responseJSON.errors);
           }
        });
        return;
    });
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
$idCita = '';
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

    if($estado == 'eliminar'){
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












$('body').on('click','button[name=imprimirCita]',function(e){
  var url = window.location.protocol + "//" + window.location.host+"/citas/examenes_cliente/"+$idCita
  window.open(url, '_blank');
});
