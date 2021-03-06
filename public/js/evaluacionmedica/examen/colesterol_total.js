$(document).ready(function() {
});

var urls_="";
var tipo="";
$('body').on('click','.registrarColesterolTotal',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');
    if(!$('body #registrarColesterolTotal input[name=colesterol_total]').val())
    {
        $('body #registrarColesterolTotal input[name=colesterol_total]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-colesteroltotal').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="colesterol_total_modificar")
    {
      urls_='/colesterol_total/actualizar';
          //console.log("if probando "+urls_);
          $('body #registrarColesterolTotal').trigger('submit');
    }
    else if(tipo=="colesterol_total_guardar")
    {
        urls_='/colesterol_total/crear';
      //  console.log(urls_);
        $('body #registrarColesterolTotal').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-colesteroltotal').modal('show');
});

$('body').on('submit','#registrarColesterolTotal',function(e){
    e.preventDefault();

    var datos = $(this);
    //var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarColesterolTotal').modal('hide')
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
        $('#modal-colesteroltotal').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.colesterol_total)
        {
            $('body #registrarColesterolTotal input[name=colesterol_total]').parent().addClass('has-error')
        }

        return;

    });
});
