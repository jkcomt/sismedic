$(function(){

});

console.log("hozpitalizacion");
var urls_='';
var tipo2='';

$('body').on('click','.conformidadhospitalizacion',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');
  tipo2 = $(this).attr('valor');
  //  alert($tipo);
    if($tipo == "registrarhospitalizacion")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br> hospitalizacion del paciente</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "eliminarhospitalizacion")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Eliminar hospitalizacion </h3>')
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
        if($tipo == "registrarhospitalizacion"){

            urls_='/antecedentes/hospitalizacion/crear';
             $('#antperhospitalizacion').submit();
          //  }
      }   else if($tipo == "eliminarhospitalizacion"){
            urls_='/antecedentes/hospitalizacion/actualizar';
            //console.log(urls_+" "+tipo2);
        $('#antperhospitalizacion').submit();

         }
    }
});

$('#antperhospitalizacion').submit(function(e)
{
  e.preventDefault();

  $.post(urls_,$(this).serialize()+ "&" + $.param({'hos_id':tipo2}),function (result) {

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
