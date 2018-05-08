$(function(){


});
// console.log("OCULARES.JS");

var urls_='';

$('body').on('click','.conformidadtres',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');
    console.log($tipo);
  //  alert($tipo);
    if($tipo == "registrartres")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal Tres</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "actualizartres")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Antecedentes Seccion <br>Personal Tres</h3>')
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
        if($tipo == "registrartres"){
           urls_='/antecedentes/tres/crear';
             $('#registrar_antecedente_personal_tres').submit();

        }else if($tipo == "actualizartres"){
          urls_='/antecedentes/tres/actualizar';
            $('#registrar_antecedente_personal_tres').submit();

        }
    }
});

$('#registrar_antecedente_personal_tres').submit(function(e)
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

$('#glaucoma').on('change',function(e){

if( $('#glaucoma').prop('checked') ) {
    $('#txtglaucoma').attr('readonly',false)
    $('#txtanioglaucoma').attr('readonly',false)
    $('#txttratamientoactualglaucoma').attr('readonly',false)
}
else
{
  $('#txtglaucoma').attr('readonly',true)
  $('#txtanioglaucoma').attr('readonly',true)
  $('#txttratamientoactualglaucoma').attr('readonly',true)
}
});

$('#cataratas').on('change',function(e){

if( $('#cataratas').prop('checked') ) {

    $('#txtcataratas').attr('readonly',false)
    $('#txtaniocataratas').attr('readonly',false)
    $('#txttratamientoactualcataratas').attr('readonly',false)
}
else
{
  $('#txtcataratas').attr('readonly',true)
  $('#txtaniocataratas').attr('readonly',true)
  $('#txttratamientoactualcataratas').attr('readonly',true)
}

});

$('#ametropia').on('change',function(e){

if( $('#ametropia').prop('checked') ) {
    $('#txtametropia').attr('readonly',false)
    $('#txtanioametropia').attr('readonly',false)
    $('#txttratamientoactualametropia').attr('readonly',false)
}
else
{
  $('#txtametropia').attr('readonly',true)
  $('#txtanioametropia').attr('readonly',true)
  $('#txttratamientoactualametropia').attr('readonly',true)
}

});

$('#otrosoculares').on('change',function(e){

if( $('#otrosoculares').prop('checked') ) {
    $('#txtotrosoculares').attr('readonly',false)
}
else
{
  $('#txtotrosoculares').attr('readonly',true)
}

});
