$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarHemograma',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');
    $('.confirmar').attr('estado','registrar')
    $('#modal-hemograma').modal('hide');
    $('#modal-confirmacion').modal('show')
    //validar formulario fron end
    /*
     if(!$('body #registrarAnexo7d input[name=acido_urico]').val())
     {
     $('body #registrarAnexo7d input[name=acido_urico]').parent().addClass('has-error')
     }else{
     $('.confirmar').attr('estado','registrar')
     $('#modal-anexo7d').modal('hide');
     $('#modal-confirmacion').modal('show')
     }*/
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="hemograma_modificar")
    {
      urls_='/hemograma/actualizar';
      //    console.log("if probando "+tipo);
        $('body #registrarHemograma').trigger('submit');
    }
    else if(tipo=="hemograma_guardar")
    {
        urls_='/hemograma/crear';
      $('body #registrarHemograma').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-hemograma').modal('show');
});

$('body').on('submit','#registrarHemograma',function(e){
    e.preventDefault();

    var datos = $(this);
  //  var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarElectrocardiograma').modal('hide')
            $('#modal-exito').modal({
                backdrop: 'static',
                keyboard:false
            });
            $('#modal-exito').modal('show')
            console.log(data);
        }else{
            console.log(data.error)
            return;
        }
    }).error(function(data){
        //$('#msg-error').fadeIn();
        //$('#listaerrores').html('')
        $('#modal-confirmacion').modal('hide');
        $('#modal-hemograma').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        // if(data.responseJSON.errors.acido_urico)
        // {
        //     $('body #registrarAnexo7d input[name=acido_urico]').parent().addClass('has-error')
        // }

        return;

    });
});
