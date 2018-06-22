$(document).ready(function() {
  console.log("audiometria.js");
});
var urls_="";
var tipo="";
$('body').on('click','.audiometria',function(e) {
    e.preventDefault();
    $botonPresionado = 'registrar';
    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-audiometria').modal('hide');
    $('#modal-confirmacion').modal('show')
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="audiometria_modificar")
    {
      urls_='/Audiometria/actualizar';
        $('body #formaudiometria').trigger('submit');
    }
    else if(tipo=="audiometria_guardar")
    {
        urls_='/Audiometria/crear';
    $('body #formaudiometria').trigger('submit');
    }



});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-audiometria').modal('show');
});

$('body').on('submit','#formaudiometria',function(e){
    e.preventDefault();

    $graficoDerecho = grafico_derecho.toBase64Image();
    $graficoIzquierdo = grafico_izquierdo.toBase64Image();

    console.log("der :"+$graficoDerecho);
    console.log("izq :"+$graficoIzquierdo);

    var datos = $(this);
    $.post(urls_,datos.serialize() + "&" + $.param({'grafico_derecho':$graficoDerecho}) + "&" + $.param({'grafico_izquierdo':$graficoIzquierdo}),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #formaudiometria').modal('hide')
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
        $('#modal-audiometria').modal('show');
        return;

    });
});
