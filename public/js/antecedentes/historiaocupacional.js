$(function(){

});




var urls_='';


$('body').on('click','.conformidadhistoriaocupacional',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');

  //  alert($tipo);
    if($tipo == "registrarhistoriaocupacional")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Ocupacionales</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "actualizarfamiliares")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Antecedentes Seccion <br>Personal familiares</h3>')
        $('.confirmar').attr('estado','conforme')
        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')
      }

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
  //     alert("actualizar");
    $estado = $(this).attr('estado')

//
    var token = $('input[name=_token]').attr('value')

    if($estado == 'eliminar'){

    }else if($estado == 'conforme'){
        if($tipo == "registrarhistoriaocupacional"){

           urls_='/antecedentes/ocupacionales/crear';
             $('#antper_historiaocupacionales').submit();

        }else if($tipo == "actualizarfamiliares"){
        //  urls_='/antecedentes/familiares/actualizar';
          //  $('#antper_historiaocupacionales').submit();

        }
    }
});

$('#antper_historiaocupacionales').submit(function(e)
{
  e.preventDefault();

  $.post(urls_,$(this).serialize(),function (result) {

  }).success(function(data)
  {
    console.log(data);
      if($.isEmptyObject(data.error)){
        $('#modal-exito').modal({
             backdrop: 'static',
             keyboard:false
        });
        $('#modal-confirmacion').modal('hide');
        $('#modal-exito .modal-body').html('<h3 class="text-success text-center">Registro Exitoso</h3>');
        $('#modal-exito').modal('show')


      }else{
          console.log(data.error)
          return;
      }
  }).error(function(data) {
      $('#msg-error').fadeIn();
      $('#listaerrores').html('')
      $('#modal-confirmacion').modal('hide');
      $.each(data.responseJSON.errors, function( index, value ) {
          console.log(value);
          $('#listaerrores').append('<li>'+value+'</li>')
      });
      return;
      });

});









$items=''

$("#boton").click(function () {
		alert($('input:checkbox[name=check]:checked').val());
  $items=$items+ $('input:checkbox[name=check]:checked').val()+' ';
	});


  $("#boton1").click(function () {
		alert($('input:checkbox[name=check]:checked').val());
  $items=$items+ $('input:checkbox[name=check]:checked').val()+' ';
  	});
