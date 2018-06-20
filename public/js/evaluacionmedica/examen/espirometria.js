$(document).ready(function() {
  console.log("espirometria.js");
});
var urls_="";
var tipo="";
$('body').on('click','.espirometria',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-espirometria').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="espirometria_modificar")
    {
      urls_='/Espirometira/actualizar';
        $('body #formespirometria').trigger('submit');
    }
    else if(tipo=="espirometria_guardar")
    {
        urls_='/Espirometira/crear';
    $('body #formespirometria').trigger('submit');
    }



});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-espirometria').modal('show');
});

$('body').on('submit','#formespirometria',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #formespirometria').modal('hide')
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
        $('#modal-confirmacion').modal('hide');
        $('#modal-espirometria').modal('show');
        return;

    });
});
