$(function(){


});
console.log("ORL");

var urls_='';


$('body').on('click','.conformidadorl',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');
    console.log($tipo);
  //  alert($tipo);
    if($tipo == "registrarorl")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal orl</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "actualizarorl")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Antecedentes Seccion <br>Personal orl</h3>')
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
        if($tipo == "registrarorl"){
           urls_='/antecedentes/orl/crear';
             $('#registrar_antecedente_personal_orl').submit();

        }else if($tipo == "actualizarorl"){
          urls_='/antecedentes/orl/actualizar';
            $('#registrar_antecedente_personal_orl').submit();

        }
    }
});

$('#registrar_antecedente_personal_orl').submit(function(e)
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

$('#hipoacusia').on('change',function(e){

if( $('#hipoacusia').prop('checked') ) {
    $('#txthipoacusia').attr('readonly',false)
    $('#txtaniohipoacusia').attr('readonly',false)
    $('#txttratamientoactualhipoacusia').attr('readonly',false)
}
else
{
  $('#txthipoacusia').attr('readonly',true)
  $('#txtaniohipoacusia').attr('readonly',true)
  $('#txttratamientoactualhipoacusia').attr('readonly',true)
}
});

$('#traumas').on('change',function(e){

if( $('#traumas').prop('checked') ) {

    $('#txttraumas').attr('readonly',false)
    $('#txtaniotraumas').attr('readonly',false)
    $('#txttratamientoactualtraumas').attr('readonly',false)
}
else
{
  $('#txttraumas').attr('readonly',true)
  $('#txtaniotraumas').attr('readonly',true)
  $('#txttratamientoactualtraumas').attr('readonly',true)
}

});

$('#otitiscronica').on('change',function(e){

if( $('#otitiscronica').prop('checked') ) {
    $('#txtotitiscronica').attr('readonly',false)
    $('#txtaniootitiscronica').attr('readonly',false)
    $('#txttratamientoactualotitiscronica').attr('readonly',false)
}
else
{
  $('#txtotitiscronica').attr('readonly',true)
  $('#txtaniootitiscronica').attr('readonly',true)
  $('#txttratamientoactualotitiscronica').attr('readonly',true)
}

});

$('#taponesauditivos').on('change',function(e){

if( $('#taponesauditivos').prop('checked') ) {
    $('#cbotaponesauditivos').attr('disabled',false)
}
else
{
  $('#cbotaponesauditivos').attr('disabled',true)
}

});

$('#orejeras').on('change',function(e){

if( $('#orejeras').prop('checked') ) {
    $('#cboorejeras').attr('disabled',false)
}
else
{
  $('#cboorejeras').attr('disabled',true)
}

});

$('#algodones').on('change',function(e){

if( $('#algodones').prop('checked') ) {
    $('#cboalgodones').attr('disabled',false)
}
else
{
  $('#cboalgodones').attr('disabled',true)
}

});

$('#otrosespecificar').on('change',function(e){

if( $('#otrosespecificar').prop('checked') ) {
    $('#cbootrosespecificar').attr('disabled',false)
}
else
{
  $('#cbootrosespecificar').attr('disabled',true)
}

});


$('#apreciacionruido').on('change',function(e){

if( $('#apreciacionruido').prop('checked') ) {
    $('#cboapreciacionruido').attr('disabled',false)
}
else
{
  $('#cboapreciacionruido').attr('disabled',true)
}

});
