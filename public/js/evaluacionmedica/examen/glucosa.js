$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarGlucosa',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar'

    tipo = $(this).attr('tipo');


    if(!$('body #registrarGlucosa input[name=glucosa]').val())
    {
        $('body #registrarGlucosa input[name=glucosa]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-glucosa').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="glucosa_modificar")
    {
      urls_='/glucosa/actualizar';
      //    console.log("if probando "+tipo);
        $('body #registrarGlucosa').trigger('submit');
    }
    else if(tipo=="glucosa_guardar")
    {
        urls_='/glucosa/crear';
      $('body #registrarGlucosa').trigger('submit');
    }
});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-glucosa').modal('show');
});

$('body').on('submit','#registrarGlucosa',function(e){
    e.preventDefault();

    var datos = $(this);
    var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarGlucosa').modal('hide')
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('#modal-exito').modal('show')
        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
        //$('#msg-error').fadeIn();
        //$('#listaerrores').html('')
        $('#modal-confirmacion').modal('hide');
        $('#modal-glucosa').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.glucosa)
        {
            $('body #registrarGlucosa input[name=glucosa]').parent().addClass('has-error')
        }

        return;

    });
});
