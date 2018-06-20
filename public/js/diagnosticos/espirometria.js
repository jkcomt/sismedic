$(document).ready(function() {
  console.log("diagnosticoespirometria.js");
});
var urls_="";
var tipo="";
$('body').on('click','.diagnosticoespirometria',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-espirometria').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="diagnosticoespirometria_modificar")
    {
      urls_='/DiagnosticoEspirometria/actualizar';
        $('body #formdiagnosticoespirometria').trigger('submit');
    }
    else if(tipo=="diagnosticoespirometria_guardar")
    {
        urls_='/DiagnosticoEspirometria/crear';
    $('body #formdiagnosticoespirometria').trigger('submit');
    }



});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-espirometria').modal('show');
});

$('body').on('submit','#formdiagnosticoespirometria',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #formdiagnosticoespirometria').modal('hide')
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
