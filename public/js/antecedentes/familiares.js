$(function(){

});


var urls_='';


$('body').on('click','.conformidadfamiliares',function(e){
    e.preventDefault();
    console.log('click')
    $tipo = $(this).attr('tipo');

  //  alert($tipo);
    if($tipo == "registrarfamiliares")
    {
      $('.confirmar').attr('estado','conforme')
      $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">Registrar Antecedentes Seccion <br>Personal familiares</h3>')
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
        if($tipo == "registrarfamiliares"){

           urls_='/antecedentes/familiares/crear';
             $('#registrar_antecedente_personal_familiares').submit();

        }else if($tipo == "actualizarfamiliares"){
          urls_='/antecedentes/familiares/actualizar';
            $('#registrar_antecedente_personal_familiares').submit();

        }
    }
});

$('#registrar_antecedente_personal_familiares').submit(function(e)
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



$('#famsobrepeso').on('change',function(e){

 if( $('#famsobrepeso').prop('checked') ) {

    $('#cbosobrepeso').attr('disabled',false)
    $('#cbodossobrepeso').attr('disabled',false)
}
else
{
  $('#cbosobrepeso').attr('disabled',true)
  $('#cbodossobrepeso').attr('disabled',true)
}

});

$('#hipertensionarterial').on('change',function(e){

 if( $('#hipertensionarterial').prop('checked') ) {

    $('#cbohipertensionarterial').attr('disabled',false)
    $('#cbodoshipertensionarterial').attr('disabled',false)
}
else
{
  $('#cbohipertensionarterial').attr('disabled',true)
  $('#cbodoshipertensionarterial').attr('disabled',true)
}

});



$('#enfermedadcardiovascular').on('change',function(e){

 if( $('#enfermedadcardiovascular').prop('checked') ) {

    $('#cboenfermedadcardiovascular').attr('disabled',false)
    $('#cbodosenfermedadcardiovascular').attr('disabled',false)
}
else
{
  $('#cboenfermedadcardiovascular').attr('disabled',true)
  $('#cbodosenfermedadcardiovascular').attr('disabled',true)
}

});


$('#faminsuficienciavenosa').on('change',function(e){

 if( $('#faminsuficienciavenosa').prop('checked') ) {

    $('#cboinsuficienciavenosa').attr('disabled',false)
    $('#cbodosinsuficienciavenosa').attr('disabled',false)
}
else
{
  $('#cboinsuficienciavenosa').attr('disabled',true)
  $('#cbodosinsuficienciavenosa').attr('disabled',true)
}

});


$('#famdislipidemia').on('change',function(e){

 if( $('#famdislipidemia').prop('checked') ) {

    $('#cbodislipidemia').attr('disabled',false)
    $('#cbodosdislipidemia').attr('disabled',false)
}
else
{
  $('#cbodislipidemia').attr('disabled',true)
  $('#cbodosdislipidemia').attr('disabled',true)
}

});
$('#famdiabetesmelitus').on('change',function(e){

 if( $('#famdiabetesmelitus').prop('checked') ) {

    $('#cbodiabetesmelitus').attr('disabled',false)
    $('#cbodosdiabetesmelitus').attr('disabled',false)
}
else
{
  $('#cbodiabetesmelitus').attr('disabled',true)
  $('#cbodosdiabetesmelitus').attr('disabled',true)
}

});

$('#famglaucoma').on('change',function(e){

 if( $('#famglaucoma').prop('checked') ) {

    $('#cboglaucoma').attr('disabled',false)
    $('#cbodosglaucoma').attr('disabled',false)
}
else
{
  $('#cboglaucoma').attr('disabled',true)
  $('#cbodosglaucoma').attr('disabled',true)
}

});


$('#famcataratas').on('change',function(e){

 if( $('#famcataratas').prop('checked') ) {

    $('#cbocataratas').attr('disabled',false)
    $('#cbodoscataratas').attr('disabled',false)
}
else
{
  $('#cbocataratas').attr('disabled',true)
  $('#cbodoscataratas').attr('disabled',true)
}

});



$('#famcancerginecologico').on('change',function(e){

 if( $('#famcancerginecologico').prop('checked') ) {

    $('#cbocancerginecologico').attr('disabled',false)
    $('#cbodoscancerginecologico').attr('disabled',false)
    $('#txtcancerginecologico').attr('readonly',false)

}
else
{
  $('#cbocancerginecologico').attr('disabled',true)
  $('#cbodoscancerginecologico').attr('disabled',true)
  $('#txtcancerginecologico').attr('readonly',true)
}

});


$('#famcanercolon').on('change',function(e){

 if( $('#famcanercolon').prop('checked') ) {
    $('#cbocanercolon').attr('disabled',false)
    $('#cbodoscanercolon').attr('disabled',false)
}
else
{
  $('#cbocanercolon').attr('disabled',true)
  $('#cbodoscanercolon').attr('disabled',true)
}

});


$('#famotroscancer').on('change',function(e){

 if( $('#famotroscancer').prop('checked') ) {

    $('#cbootroscancer').attr('disabled',false)
    $('#cbodosotroscancer').attr('disabled',false)
    $('#txtotroscancer').attr('readonly',false)
}
else
{
  $('#cbootroscancer').attr('disabled',true)
  $('#cbodosotroscancer').attr('disabled',true)
  $('#txtotroscancer').attr('readonly',true)
}

});


$('#famepilepsia').on('change',function(e){

 if( $('#famepilepsia').prop('checked') ) {

    $('#cboepilepsia').attr('disabled',false)
    $('#cbodosepilepsia').attr('disabled',false)

}
else
{
  $('#cboepilepsia').attr('disabled',true)
  $('#cbodosepilepsia').attr('disabled',true)
}

});


$('#famasma').on('change',function(e){

 if( $('#famasma').prop('checked') ) {

    $('#cboasma').attr('disabled',false)
    $('#cbodosasma').attr('disabled',false)

}
else
{
  $('#cboasma').attr('disabled',true)
  $('#cbodosasma').attr('disabled',true)
}

});
