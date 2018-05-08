$(function(){

});




var urls_='';


$('body').on('click','.conformidadneumologicos',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');
    console.log($tipo);
  //  alert($tipo);
    if($tipo == "registrarneumologicos")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal neumologicos</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "actualizarneumologicos")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Antecedentes Seccion <br>Personal neumologicos</h3>')
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
        if($tipo == "registrarneumologicos"){
           urls_='/antecedentes/neumologicos/crear';
             $('#registrar_antecedente_personal_neumologicos').submit();

        }else if($tipo == "actualizarneumologicos"){
          urls_='/antecedentes/neumologicos/actualizar';
            $('#registrar_antecedente_personal_neumologicos').submit();

        }
    }
});

$('#registrar_antecedente_personal_neumologicos').submit(function(e)
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
        $('#modal-exito .modal-body').html('<h3 class="text-success text-center">Registro Exitoso' +'</h3>');
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









$('#asma').on('change',function(e){

if( $('#asma').prop('checked') ) {
    $('#txtasma').attr('readonly',false)
    $('#txtedadasma').attr('readonly',false)
    $('#txtultimacrisisasma').attr('readonly',false)
}
else
{
  $('#txtasma').attr('readonly',true)
  $('#txtedadasma').attr('readonly',true)
  $('#txtultimacrisisasma').attr('readonly',true)
}
});

$('#otros_transtornos_nocturnos').on('change',function(e){

if( $('#otros_transtornos_nocturnos').prop('checked') ) {
    $('#txtotros_transtornos_nocturnos').attr('readonly',false)
}
else
{
  $('#txtotros_transtornos_nocturnos').attr('readonly',true)
}
});
