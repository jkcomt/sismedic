$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarGamma',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');
    if(!$('body #registrarGamma input[name=ggt]').val())
    {
        $('body #registrarGamma input[name=ggt]').parent().addClass('has-error')
    }else{
        $('.confirmar').attr('estado','registrar')
        $('#modal-gamma').modal('hide');
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="ggt_modificar")
    {
      urls_='/gamma/actualizar';
      //    console.log("if probando "+tipo);
        $('body #registrarGamma').trigger('submit');
    }
    else if(tipo=="ggt_guardar")
    {
        urls_='/gamma/crear';
    //    console.log(urls_);
        $('body #registrarGamma').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-gamma').modal('show');
});

$('body').on('submit','#registrarGamma',function(e){
    e.preventDefault();

    var datos = $(this);
  //  var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarGamma').modal('hide')
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
        $('#modal-gamma').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.gamma)
        {
            $('body #registrarGamma input[name=ggt]').parent().addClass('has-error')
        }

        return;

    });
});
