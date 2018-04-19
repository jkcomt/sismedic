$(document).ready(function() {

    $('#paciente').select2({
      minimumResultsForSearch: 5,
      placeholder: 'Seleccione un paciente',
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

    $('#perfil').trigger('change');
    $('#perfilEditar').trigger('change');
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

    var datos = $('#registrarCita')
    var url = datos.attr('action');
    console.log(datos);
    //$.post(url,datos.serialize() + "&items=" + $items,function (result) {
    $.post(url,datos.serialize() + "&" + $.param({'items':$items}),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('#modal-confirmacion').modal('hide');
            $('#modal-exito .modal-body').html('<h3 class="text-success text-center">Cita Ocupacional '+'</h3>')
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

$('#perfil').on('change',function(e){
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
