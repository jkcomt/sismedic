$(document).ready(function() {
});
var urls_="";
var tipo="";
$('body').on('click','.registrarorina',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');
    $valor1= typeof($('body #registrarorina input[name=densidad]').val());
    $valor2= typeof($('body #registrarorina input[name=ph]').val());
  //  console.log($valor1+"  "+$valor2+" "+$('body #registrarorina input[name=densidad]').val()+" "+$('body #registrarorina input[name=ph]').val());
     // if(!$('body #registrarorina input[name=color]').val())
     //  {
     //      $('body #registrarorina input[name=color]').parent().addClass('has-error')
     //  }
    /*else

    {
      $('.confirmar').attr('estado','registrar')
      $('#modal-orina').modal('hide');
      $('#modal-confirmacion').modal('show')
    }*/
    $('.confirmar').attr('estado','registrar')
    $('#modal-orina').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="orina_modificar")
    {
      urls_='/orina/actualizar';
//      console.log("if probando "+tipo);
        $('body #registrarorina').trigger('submit');
    }
    else if(tipo=="orina_guardar")
    {
        urls_='/orina/crear';
       //console.log(urls_);
    $('body #registrarorina').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-orina').modal('show');
});

$('body').on('submit','#registrarorina',function(e){
    e.preventDefault();

    var datos = $(this);
  //  var url = datos.attr('action');
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #registrarorina').modal('hide')
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
        $('#modal-orina').modal('show');
        // $.each(data.responseJSON.errors, function( index, value ) {
        // console.log(value)
        // $('#listaerrores').append('<li>'+value+'</li>')
        // });

        // if(data.responseJSON.errors.acido_urico)
        // {
        //     //$('body #registrarorina input[name=acido_urico]').parent().addClass('has-error')
        // }

        return;

    });
});
