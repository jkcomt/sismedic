$(document).ready(function(){
});

var urls_="";
var tipo="";
$('body').on('click','.conduccionvehicular',function(e) {
    e.preventDefault();

    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-conduccionvehicular').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
console.log(tipo);
    if(tipo=="conduccion_vehicular_modificar")
    {
      urls_='/conduccion_vehicular/actualizar';
       console.log("if probando "+tipo);
        $('body #conduccion_vehicularesq').trigger('submit');
    }
    else if(tipo=="conduccion_vehicular_guardar")
    {
        urls_='/conduccion_vehicular/crear';
       console.log("else "+urls_);
  $('body #conduccion_vehicularesq').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-conduccionvehicular').modal('show');
});

$('body').on('submit','#conduccion_vehicularesq',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #conduccionvehicular').modal('hide')
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
        $('#modal-conduccionvehicular').modal('show');

        return;
    });
});
