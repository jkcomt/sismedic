$(document).ready(function(){
console.log("apneasueño");
});

var urls_="";
var tipo="";
$('body').on('click','.ApneaSuenio',function(e) {
    e.preventDefault();

    tipo = $(this).attr('tipo');

    $('.confirmar').attr('estado','registrar')
    $('#modal-ApneaSuenio').modal('hide');
    $('#modal-confirmacion').modal('show')

});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    if(tipo=="ApneaSuenio_modificar")
    {
      urls_='/apnea_suenio/actualizar';
      // console.log("if probando "+tipo);
        $('body #apnea_suenio').trigger('submit');
    }
    else if(tipo=="ApneaSuenio_guardar")
    {
        urls_='/apnea_suenio/crear';
       //console.log(urls_);
    $('body #apnea_suenio').trigger('submit');
    }

});

$('.volver-form-examen').on('click',function(e){
    e.preventDefault();
    $('#modal-confirmacion').modal('hide')
    $('#modal-ApneaSuenio').modal('show');
});

$('body').on('submit','#apnea_suenio',function(e){
    e.preventDefault();

    var datos = $(this);
    $.post(urls_,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            $('#modal-confirmacion').modal('hide')
            $('body #ApneaSuenio').modal('hide')
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
        $('#modal-ApneaSuenio').modal('show');

        return;
    });
});



$('body').on('change',"#grado_uno",function(e){
    e.preventDefault();
    if( $("#grado_uno").prop('checked') ) {
      $("#clase_id").text(' ');
      $("#visualizacion_id").text(' ');
      $("#Laringoscopica_id").text(' ');
      $("#clase_id").text('I');
      $("#visualizacion_id").text('Paladar blando, fauces, úvula, pilares');
      $("#Laringoscopica_id").text('Toda la glotis.');
   }
   else
   {

   }
});

$('body').on('change',"#grado_dos",function(e){
    e.preventDefault();
    if( $("#grado_dos").prop('checked') ) {
      $("#clase_id").text(' ');
      $("#visualizacion_id").text(' ');
      $("#Laringoscopica_id").text(' ');
      $("#clase_id").text('II');
      $("#visualizacion_id").text('Paladar blando, fauces, úvula');
      $("#Laringoscopica_id").text('Comisura posterior.');

   }
   else
   {

   }
});

$('body').on('change',"#grado_tres",function(e){
    e.preventDefault();
    if( $("#grado_tres").prop('checked') ) {
      $("#clase_id").text(' ');
      $("#visualizacion_id").text(' ');
      $("#Laringoscopica_id").text(' ');
      $("#clase_id").text('III');
      $("#visualizacion_id").text('Paladar blando y base de úvula');
      $("#Laringoscopica_id").text('Punta de epiglotis.');

   }
   else
   {

   }
});

$('body').on('change',"#grado_cuatro",function(e){
    e.preventDefault();
    if( $("#grado_cuatro").prop('checked') ) {
      $("#clase_id").text(' ');
      $("#visualizacion_id").text(' ');
      $("#Laringoscopica_id").text(' ');
      $("#clase_id").text('IV');
      $("#visualizacion_id").text('Solo paladar duro.');
      $("#Laringoscopica_id").text('No se observa estructura glótica.');

   }
   else
   {

   }
});

var1=0;var2=0;var3=0;var4=0;var5=0;var6=0;var7=0;var8=0;
$('body').on('change',".uno_epwort",function(e){
    e.preventDefault();
      var1=$(this).attr("value");
      suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
    $('#punto_escala_epworth').val(suma);
});
$('body').on('change',".dos_epwort",function(e){
    e.preventDefault();
    var2=$(this).attr("value");
    suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
  $('#punto_escala_epworth').val(suma);
});
$('body').on('change',".tres_epwort",function(e){
    e.preventDefault();
    var3=$(this).attr("value");
    suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
  $('#punto_escala_epworth').val(suma);
});
$('body').on('change',".cuatro_epwort",function(e){
    e.preventDefault();
    var4=$(this).attr("value");
    suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
  $('#punto_escala_epworth').val(suma);
});
$('body').on('change',".cinco_epwort",function(e){
    e.preventDefault();
    var5=$(this).attr("value");
    suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
  $('#punto_escala_epworth').val(suma);
});
$('body').on('change',".seis_epwort",function(e){
    e.preventDefault();
    var6=$(this).attr("value");
    suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
  $('#punto_escala_epworth').val(suma);
});

$('body').on('change',".siete_epwort",function(e){
    e.preventDefault();
    var7=$(this).attr("value");
    suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
  $('#punto_escala_epworth').val(suma);
});
$('body').on('change',".ocho_epwort",function(e){
    e.preventDefault();
    var8=$(this).attr("value");
    suma=parseInt(var1)+ parseInt(var2) + parseInt(var3)+ parseInt(var4) + parseInt(var5)+ parseInt(var6)+parseInt(var7)+ parseInt(var8);
  $('#punto_escala_epworth').val(suma);
});
