$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarTriglicerido',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
      tipo = $(this).attr('tipo');
           console.log("if "+tipo+"   ");
    if(!$('body #registrarTriglicerido input[name=triglicerido]').val())
    {
    //  $var1=$('body #registrarTriglicerido input[name=triglicerido]').val();
    //  console.log("1 "+tipo+"   "+$var1);
        $('body #registrarTriglicerido input[name=triglicerido]').parent().addClass('has-error')
    }else{
    //  $var1=$('body #registrarTriglicerido input[name=triglicerido]').val();
    //  console.log("2 "+tipo+"   "+$var1);
        $('.confirmar').attr('estado','registrar')
        $('#modal-triglicerido').modal('hide');
        $('#modal-confirmacion').modal('show')
    }

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();

    if(tipo=="triglicerido_modificar")
    {
       console.log("if "+tipo+"   ");
      urls_='/trigliceridos/actualizar';
      $('body #registrarTriglicerido').trigger('submit');

    }
    else if(tipo=="triglicerido_guardar")
    {
      urls_='/trigliceridos/crear';
      $('body #registrarTriglicerido').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-triglicerido').modal('show');
});

$('body').on('submit','#registrarTriglicerido',function(e){
    e.preventDefault();

    var datos = $(this);
  //  var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarTriglicerido').modal('hide')
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
        $('#modal-triglicerido').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        if(data.responseJSON.errors.sedimentacion)
        {
            $('body #registrarTriglicerido input[name=triglicerido]').parent().addClass('has-error')
        }

        return;

    });
});
