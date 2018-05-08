$(function(){

});


var urls_='';


$('body').on('click','.conformidadginecologicos',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');
    console.log($tipo);
  //  alert($tipo);
    if($tipo == "registrarginecologicos")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal ginecologicos</h3>')
      $('.confirmar').attr('estado','conforme')
      $('.confirmar').removeClass('btn-danger')
      $('.confirmar').addClass('btn-success')
      $('#modal-confirmacion').modal('show')
    }
     else if($tipo == "actualizarginecologicos")
      {

        $('.confirmar').attr('estado','conforme')
        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Actualizar Antecedentes Seccion <br>Personal ginecologicos</h3>')
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
        if($tipo == "registrarginecologicos"){
              console.log($estado+" RG ");
           urls_='/antecedentes/ginecologicos/crear';
             $('#registrar_antecedente_personal_ginecologicos').submit();

        }else if($tipo == "actualizarginecologicos"){
          urls_='/antecedentes/ginecologicos/actualizar';
            $('#registrar_antecedente_personal_ginecologicos').submit();

        }
    }
});

$('#registrar_antecedente_personal_ginecologicos').submit(function(e)
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











$('#ultimoparto').on('change',function(e){

if( $('#ultimoparto').prop('checked') ) {

    $('#txtultimoparto').attr('readonly',false)
    $('#txtanioultimoparto').attr('readonly',false)
    $('#txtdescripcionultimoparto').attr('readonly',false)
}
else
{
  $('#txtultimoparto').attr('readonly',true)
  $('#txtanioultimoparto').attr('readonly',true)
  $('#txtdescripcionultimoparto').attr('readonly',true)
}
});


$('#papanocolau').on('change',function(e){

if( $('#papanocolau').prop('checked') ) {

    $('#txtpapanocolau').attr('readonly',false)
    $('#txtaniopapanocolau').attr('readonly',false)
    $('#txtdescripcionpapanocolau').attr('readonly',false)
}
else
{
  $('#txtpapanocolau').attr('readonly',true)
  $('#txtaniopapanocolau').attr('readonly',true)
  $('#txtdescripcionpapanocolau').attr('readonly',true)
}
});


$('#ultimamamografia').on('change',function(e){

if( $('#ultimamamografia').prop('checked') ) {

    $('#txtultimamamografia').attr('readonly',false)
    $('#txtanioultimamamografia').attr('readonly',false)
    $('#txtdescripcionultimamamografia').attr('readonly',false)
}
else
{
  $('#txtultimamamografia').attr('readonly',true)
  $('#txtanioultimamamografia').attr('readonly',true)
  $('#txtdescripcionultimamamografia').attr('readonly',true)
}
});





$('#incotinenciaurinaria').on('change',function(e){

if( $('#incotinenciaurinaria').prop('checked') ) {

    $('#txtincotinenciaurinaria').attr('readonly',false)
    $('#txtanioincotinenciaurinaria').attr('readonly',false)
    $('#txtdescripcionincotinenciaurinaria').attr('readonly',false)
}
else
{
  $('#txtincotinenciaurinaria').attr('readonly',true)
  $('#txtanioincotinenciaurinaria').attr('readonly',true)
  $('#txtdescripcionincotinenciaurinaria').attr('readonly',true)
}
});



$('#ultimoginecologico').on('change',function(e){

if( $('#ultimoginecologico').prop('checked') ) {

    $('#txtultimoginecologico').attr('readonly',false)
    $('#txtanioultimoginecologico').attr('readonly',false)
    $('#txtdescripcionultimoginecologico').attr('readonly',false)
}
else
{
  $('#txtultimoginecologico').attr('readonly',true)
  $('#txtanioultimoginecologico').attr('readonly',true)
  $('#txtdescripcionultimoginecologico').attr('readonly',true)
}
});



$('#UsoAnticonceptivo').on('change',function(e){

if( $('#UsoAnticonceptivo').prop('checked') ) {

    $('#txtUsoAnticonceptivo').attr('readonly',false)
}
else
{
  $('#txtUsoAnticonceptivo').attr('readonly',true)
}
});


$('#otrosantecedentes').on('change',function(e){

if( $('#otrosantecedentes').prop('checked') ) {

    $('#txtotrosantecedentes').attr('readonly',false)
}
else
{
  $('#txtotrosantecedentes').attr('readonly',true)
}
});


$('#cancercervix').on('change',function(e){

if( $('#cancercervix').prop('checked') ) {

    $('#txtcancercervix').attr('readonly',false)
    $('#txtaniocancercervix').attr('readonly',false)
    $('#txtdescripcioncancercervix').attr('readonly',false)
}
else
{
  $('#txtcancercervix').attr('readonly',true)
  $('#txtaniocancercervix').attr('readonly',true)
  $('#txtdescripcioncancercervix').attr('readonly',true)
}
});



$('#cancercervix').on('change',function(e){

if( $('#cancercervix').prop('checked') ) {

    $('#txtcancercervix').attr('readonly',false)
    $('#txtaniocancercervix').attr('readonly',false)
    $('#txtdescripcioncancercervix').attr('readonly',false)
}
else
{
  $('#txtcancercervix').attr('readonly',true)
  $('#txtaniocancercervix').attr('readonly',true)
  $('#txtdescripcioncancercervix').attr('readonly',true)
}
});


$('#cancermama').on('change',function(e){

if( $('#cancermama').prop('checked') ) {

    $('#txtcancermama').attr('readonly',false)
    $('#txtaniocancermama').attr('readonly',false)
    $('#txtdescripcioncancermama').attr('readonly',false)
}
else
{
  $('#txtcancermama').attr('readonly',true)
  $('#txtaniocancermama').attr('readonly',true)
  $('#txtdescripcioncancermama').attr('readonly',true)
}
});
