$(document).ready(function() {
    $('#msg-error').hide();
});

$botonPresionado = '';
$tipo = '';
$('body').on('click','.conformidad',function(e){
    e.preventDefault();

    console.log('click')

    $botonPresionado = 'conforme';

    $tipo = $(this).attr('tipo');
    if($tipo == "registrar")
    {
        $('.confirmar').attr('estado','conforme')

        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">¿Registrar Funciones Vitales?</h3>')
        $('.confirmar').attr('estado','conforme')

        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')

    }else if($tipo == "actualizar"){
        $('.confirmar').attr('estado','conforme')

        $('#modal-confirmacion .modal-body').html('<h3 class="text-warning text-center">¿Actualizar Funciones Vitales?</h3>')
        $('.confirmar').attr('estado','conforme')

        $('.confirmar').removeClass('btn-danger')
        $('.confirmar').addClass('btn-success')
        $('#modal-confirmacion').modal('show')
    }
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $estado = $(this).attr('estado')
    //console.log($estado);

    var token = $('input[name=_token]').attr('value')
    if($estado == 'eliminar') {
        $(this).attr('disabled','disabled');
        var url = "/citas/delete"
        var id = $(this).attr('id')
        console.log(id)
        $.ajax({
            type: "post",
            url: url,
            headers: {'X-CSRF-TOKEN': token},
            dataType: "json",
            data: {
                id: id
            },
            success: function (data) {

                console.log(data.responseJSON)
                $('#modal-confirmacion').modal('hide')
                $('#modal-exito').modal('show')

            },
            error: function (data) {
                console.log(data.responseJSON)
            }
        });
    }else if($estado == 'conforme'){
        if($tipo == "registrar"){
            $('#registrarFuncionVital').submit();
        }else if($tipo == "actualizar"){
            $('#actualizarCita').submit();
        }
    }
});

$('#registrarFuncionVital').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarFuncionVital');
    var url = datos.attr('action');

    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
            $('#modal-confirmacion').modal('hide');
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
        $('#msg-error').fadeIn();
        $('#listaerrores').html('')

        $.each(data.responseJSON.errors, function( index, value ) {
            console.log(value)
            $('#listaerrores').append('<li>'+value+'</li>')
        });

        // if(data.responseJSON.errors.matricula)
        // {
        //     $('input[name=matricula]').parent().addClass('has-error')
        // }else{
        //     $('input[name=matricula]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.apellido_materno)
        // {
        //     $('input[name=apellido_materno]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=apellido_materno]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.apellido_paterno)
        // {
        //     $('input[name=apellido_paterno]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=apellido_paterno]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.nombres)
        // {
        //     $('input[name=nombres]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=nombres]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.jefe_inmediato)
        // {
        //     $('input[name=jefe_inmediato]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=jefe_inmediato]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.departamentoOrigen)
        // {
        //     $('#departamentoOrigen').parent().addClass('has-error')
        //
        // }else{
        //     $('#departamentoOrigen').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.provinciaOrigen)
        // {
        //     $('select[name=provinciaOrigen]').parent().addClass('has-error')
        //
        // }else{
        //     $('select[name=provinciaOrigen]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.departamentoDomicilio)
        // {
        //     $('#departamentoDomGroup').parent().addClass('has-error')
        //
        // }else{
        //     $('#departamentoDomGroup').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.provinciaDomicilio)
        // {
        //     $('#provinciaDomGroup').parent().addClass('has-error')
        //
        // }else{
        //     $('#provinciaDomGroup').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.direccion)
        // {
        //     $('#direccionGroup').parent().addClass('has-error')
        //
        // }else{
        //     $('#direccionGroup').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.telf_fijo)
        // {
        //     $('input[name=telf_fijo]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=telf_fijo]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.celular)
        // {
        //     $('input[name=celular]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=celular]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.trabajo)
        // {
        //     $('input[name=trabajo]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=trabajo]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.tipo_dni)
        // {
        //     $('select[name=tipo_dni]').parent().addClass('has-error')
        //
        // }else{
        //     $('select[name=tipo_dni]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.num_dni)
        // {
        //     $('input[name=num_dni]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=num_dni]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.nr_hijo_vivos)
        // {
        //     $('input[name=nr_hijo_vivos]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=nr_hijo_vivos]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.nr_hijo_muertos)
        // {
        //     $('input[name=nr_hijo_muertos]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=nr_hijo_muertos]').parent().removeClass('has-error')
        // }
        //
        // if(data.responseJSON.errors.seccion)
        // {
        //     $('input[name=seccion]').parent().addClass('has-error')
        //
        // }else{
        //     $('input[name=seccion]').parent().removeClass('has-error')
        // }

        return;

    });
});

