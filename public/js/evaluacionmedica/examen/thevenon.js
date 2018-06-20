$(document).ready(function() {
  console.log("thevenon.js");
});
var urls_="";
var tipo="";
$('body').on('click','.thevenon',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-thevenon').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="thevenon_modificar")
    {
      urls_='/thevenon/actualizar';
        $('body #formthevenon').trigger('submit');
    }
    else if(tipo=="thevenon_guardar")
    {
        urls_='/thevenon/crear';
    $('body #formthevenon').trigger('submit');
    }



});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-thevenon').modal('show');
});

$('body').on('submit','#formthevenon',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #formthevenon').modal('hide')
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
        $('#modal-thevenon').modal('show');
        return;

    });
});
