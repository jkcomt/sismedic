$(function(){

});


var urls_='';


$('body').on('click','.conformidadquirurgicos',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');

  //  alert($tipo);
    if($tipo == "registrarquirurgicos")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal quirurgicos</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "actualizarquirurgicos")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Antecedentes Seccion <br>Personal quirurgicos</h3>')
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
        if($tipo == "registrarquirurgicos"){
    console.log($tipo);
           urls_='/antecedentes/quirurgicos/crear';
             $('#registrar_antecedente_personal_quirurgicos').submit();

        }else if($tipo == "actualizarquirurgicos"){
          urls_='/antecedentes/quirurgicos/actualizar';
            $('#registrar_antecedente_personal_quirurgicos').submit();

        }
    }
});

$('#registrar_antecedente_personal_quirurgicos').submit(function(e)
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




$('#apendicectomia').on('change',function(e){

if( $('#apendicectomia').prop('checked') ) {

    $('#txtanioapendicectomia').attr('readonly',false)
}
else
{
    $('#txtanioapendicectomia').attr('readonly',true)
}
});


$('#colecistectomia').on('change',function(e){

if( $('#colecistectomia').prop('checked') ) {

    $('#txtaniocolecistectomia').attr('readonly',false)
}
else
{
    $('#txtaniocolecistectomia').attr('readonly',true)
}
});


$('#herniorrafiaumbilical').on('change',function(e){

if( $('#herniorrafiaumbilical').prop('checked') ) {

    $('#txtanioherniorrafiaumbilical').attr('readonly',false)
}
else
{
    $('#txtanioherniorrafiaumbilical').attr('readonly',true)
}
});


$('#herniorrafiaumbilical').on('change',function(e){

if( $('#herniorrafiaumbilical').prop('checked') ) {

    $('#txtanioherniorrafiaumbilical').attr('readonly',false)
}
else
{
    $('#txtanioherniorrafiaumbilical').attr('readonly',true)
}
});



$('#herniorrafiainguinal').on('change',function(e){

if( $('#herniorrafiainguinal').prop('checked') ) {

    $('#txtanioherniorrafiainguinal').attr('readonly',false)
}
else
{
    $('#txtanioherniorrafiainguinal').attr('readonly',true)
}
});

$('#ocular').on('change',function(e){

if( $('#ocular').prop('checked') ) {

    $('#txtocular').attr('readonly',false)
}
else
{
    $('#txtocular').attr('readonly',true)
}
});

$('#otorrino').on('change',function(e){

if( $('#otorrino').prop('checked') ) {

    $('#txtotorrino').attr('readonly',false)
}
else
{
    $('#txtotorrino').attr('readonly',true)
}
});

$('#ginecologia').on('change',function(e){

if( $('#ginecologia').prop('checked') ) {

    $('#txtginecologia').attr('readonly',false)
}
else
{
    $('#txtginecologia').attr('readonly',true)
}
});


$('#otrascirugias').on('change',function(e){

if( $('#otrascirugias').prop('checked') ) {

    $('#otrascirugiasfecha').attr('readonly',false)
      $('#otrascirugiasobser').attr('readonly',false)

}
else
{
    $('#otrascirugiasfecha').attr('readonly',true)
    $('#otrascirugiasobser').attr('readonly',true)
}
});
