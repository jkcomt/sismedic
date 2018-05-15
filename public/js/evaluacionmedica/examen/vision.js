$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarvision',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');


      $('.confirmar').attr('estado','registrar')
      $('#modal-vision').modal('hide');
      $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="vision_modificar")
    {
      urls_='/vision/actualizar';
      //    console.log("if probando "+tipo);
        $('body #registrarvision').trigger('submit');
    }
    else if(tipo=="vision_guardar")
    {
        urls_='/vision/crear';
    //    console.log(urls_);
    $('body #registrarvision').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-vision').modal('show');
});

$('body').on('submit','#registrarvision',function(e){
    e.preventDefault();

    var datos = $(this);
  //  var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarvision').modal('hide')
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
        $('#modal-vision').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        // if(data.responseJSON.errors.acido_urico)
        // {
        //     //$('body #registrarvision input[name=acido_urico]').parent().addClass('has-error')
        // }

        return;

    });
});
