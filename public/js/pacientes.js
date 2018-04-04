$(document).ready(function() {

    $('#msg-error').hide();

    $('#filtro').trigger('change');

    //$("select[name=paisOrigen]").val("13");

    //$('select[name=paisOrigen]').trigger('change');
    //console.log($("select[name=paisOrigen]").val())
});

$("select[name=paisOrigen]").on('change',function(e){
     //e.preventDefault();
     console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/departamentos/filtro"
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            console.log(JSON.stringify(data))
            $('#departamentoGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('body').on('change','.departamentoOrigen',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/provincias/filtro"
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#provinciaGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$("select[name=paisOrigenDom]").on('change',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/departamentos/filtrodomicilio"
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#departamentoDomGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('body').on('change','.departamentoDomicilio',function(e){
    //e.preventDefault();
    //console.log($(this).val())

    $filtro = $(this).val();
    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/provincias/filtrodomicilio"
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            //buscar : valor,
            filtro : $filtro
        },
        success: function(data){
            //console.log(JSON.stringify(data))
            $('#provinciaDomGroup').html(data.html)

        },
        error: function(data){
            alert("Error "+json.stringify(data))
        }
    });
});

$('#registrarPaciente').submit(function(e){
    e.preventDefault();

    var datos = $('#registrarPaciente');
    var url = datos.attr('action');

   $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
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
            })

       if(data.responseJSON.errors.matricula)
       {
           $('input[name=matricula]').parent().addClass('has-error')
       }else{
           $('input[name=matricula]').parent().removeClass('has-error')
       }

        if(data.responseJSON.errors.apellido_materno)
        {
            $('input[name=apellido_materno]').parent().addClass('has-error')

        }else{
            $('input[name=apellido_materno]').parent().removeClass('has-error')
        }

       if(data.responseJSON.errors.apellido_paterno)
       {
           $('input[name=apellido_paterno]').parent().addClass('has-error')

       }else{
           $('input[name=apellido_paterno]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.nombres)
       {
           $('input[name=nombres]').parent().addClass('has-error')

       }else{
           $('input[name=nombres]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.jefe_inmediato)
       {
           $('input[name=jefe_inmediato]').parent().addClass('has-error')

       }else{
           $('input[name=jefe_inmediato]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.departamentoOrigen)
       {
           $('#departamentoOrigen').parent().addClass('has-error')

       }else{
           $('#departamentoOrigen').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.provinciaOrigen)
       {
           $('select[name=provinciaOrigen]').parent().addClass('has-error')

       }else{
           $('select[name=provinciaOrigen]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.departamentoDomicilio)
       {
           $('#departamentoDomGroup').parent().addClass('has-error')

       }else{
           $('#departamentoDomGroup').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.provinciaDomicilio)
       {
           $('#provinciaDomGroup').parent().addClass('has-error')

       }else{
           $('#provinciaDomGroup').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.direccion)
       {
           $('#direccionGroup').parent().addClass('has-error')

       }else{
           $('#direccionGroup').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.telf_fijo)
       {
           $('input[name=telf_fijo]').parent().addClass('has-error')

       }else{
           $('input[name=telf_fijo]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.celular)
       {
           $('input[name=celular]').parent().addClass('has-error')

       }else{
           $('input[name=celular]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.trabajo)
       {
           $('input[name=trabajo]').parent().addClass('has-error')

       }else{
           $('input[name=trabajo]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.tipo_dni)
       {
           $('select[name=tipo_dni]').parent().addClass('has-error')

       }else{
           $('select[name=tipo_dni]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.num_dni)
       {
           $('input[name=num_dni]').parent().addClass('has-error')

       }else{
           $('input[name=num_dni]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.nr_hijo_vivos)
       {
           $('input[name=nr_hijo_vivos]').parent().addClass('has-error')

       }else{
           $('input[name=nr_hijo_vivos]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.nr_hijo_muertos)
       {
           $('input[name=nr_hijo_muertos]').parent().addClass('has-error')

       }else{
           $('input[name=nr_hijo_muertos]').parent().removeClass('has-error')
       }

       if(data.responseJSON.errors.seccion)
       {
           $('input[name=seccion]').parent().addClass('has-error')

       }else{
           $('input[name=seccion]').parent().removeClass('has-error')
       }

        return;

    });
});

$('#actualizarPaciente').submit(function(e){
    e.preventDefault();

    var datos = $('#actualizarPaciente');
    var url = datos.attr('action');

    $.post(url,datos.serialize(),function (result) {

    }).success(function(data)
    {
        if($.isEmptyObject(data.error)){
            console.log(data)
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
        })

        if(data.responseJSON.errors.matricula)
        {
            $('input[name=matricula]').parent().addClass('has-error')
        }else{
            $('input[name=matricula]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.apellido_materno)
        {
            $('input[name=apellido_materno]').parent().addClass('has-error')

        }else{
            $('input[name=apellido_materno]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.apellido_paterno)
        {
            $('input[name=apellido_paterno]').parent().addClass('has-error')

        }else{
            $('input[name=apellido_paterno]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.nombres)
        {
            $('input[name=nombres]').parent().addClass('has-error')

        }else{
            $('input[name=nombres]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.jefe_inmediato)
        {
            $('input[name=jefe_inmediato]').parent().addClass('has-error')

        }else{
            $('input[name=jefe_inmediato]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.departamentoOrigen)
        {
            $('#departamentoOrigen').parent().addClass('has-error')

        }else{
            $('#departamentoOrigen').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.provinciaOrigen)
        {
            $('select[name=provinciaOrigen]').parent().addClass('has-error')

        }else{
            $('select[name=provinciaOrigen]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.departamentoDomicilio)
        {
            $('#departamentoDomGroup').parent().addClass('has-error')

        }else{
            $('#departamentoDomGroup').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.provinciaDomicilio)
        {
            $('#provinciaDomGroup').parent().addClass('has-error')

        }else{
            $('#provinciaDomGroup').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.direccion)
        {
            $('#direccionGroup').parent().addClass('has-error')

        }else{
            $('#direccionGroup').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.telf_fijo)
        {
            $('input[name=telf_fijo]').parent().addClass('has-error')

        }else{
            $('input[name=telf_fijo]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.celular)
        {
            $('input[name=celular]').parent().addClass('has-error')

        }else{
            $('input[name=celular]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.trabajo)
        {
            $('input[name=trabajo]').parent().addClass('has-error')

        }else{
            $('input[name=trabajo]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.tipo_dni)
        {
            $('select[name=tipo_dni]').parent().addClass('has-error')

        }else{
            $('select[name=tipo_dni]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.num_dni)
        {
            $('input[name=num_dni]').parent().addClass('has-error')

        }else{
            $('input[name=num_dni]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.nr_hijo_vivos)
        {
            $('input[name=nr_hijo_vivos]').parent().addClass('has-error')

        }else{
            $('input[name=nr_hijo_vivos]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.nr_hijo_muertos)
        {
            $('input[name=nr_hijo_muertos]').parent().addClass('has-error')

        }else{
            $('input[name=nr_hijo_muertos]').parent().removeClass('has-error')
        }

        if(data.responseJSON.errors.seccion)
        {
            $('input[name=seccion]').parent().addClass('has-error')

        }else{
            $('input[name=seccion]').parent().removeClass('has-error')
        }

        return;

    });
});


$('.modal-footer #create-paciente').on('click',function (event) {
    event.preventDefault();
    //$('#limpiar').trigger('click');
    $('#msg-error').hide();
    location.reload()
    //$('#modal-exito').modal('hide')
});

$('body').on('click','.delete',function (e) {
    e.preventDefault();

    $botonPresionado = 'eliminar'

    var id = $(this).attr('id')
    $('.confirmar').attr('id',id)
    $('.confirmar').attr('estado','eliminar')
    $('#modal-confirmacion').modal('show')
});

$('.confirmar').on('click',function (e) {
    e.preventDefault();
    $estado = $(this).attr('estado')
    var id = $(this).attr('id')
    var token = $('input[name=_token]').attr('value')
    if($estado == 'eliminar') {
        var url = "/pacientes/delete"
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
    }
});

$('#fecha_nacimiento').on('change',function(e){
   e.preventDefault();
   $fechaNacimiento = new Date($(this).val());
   $hoy = new Date();
   $edad = Math.floor(($hoy-$fechaNacimiento) / (365.25 * 24 * 60 * 60 * 1000));
   $('#edad').val($edad)
   //console.log("edad "+$edad);
});

$('#fecha_ingreso').on('change',function(e){
    e.preventDefault();
    $fechaIngreso = new Date($(this).val());
    $fechaNacimiento =  new Date($('#fecha_nacimiento').val());
    $edad = Math.floor(($fechaIngreso-$fechaNacimiento) / (365.25 * 24 * 60 * 60 * 1000));
    $('#edad_ingreso').val($edad)
    console.log("edad "+$edad);
});

$filtro = "";
$('#filtro').on('change',function(e){
    e.preventDefault();
    $filtro = $(this).val();
});

$('#buscarPaciente').on('keyup',function(){
    valor = $(this).val();

    $filtro = $('#filtro').val();

    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/pacientes/buscar"
    $.ajax({
        type:"get",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            buscar : valor,
            filtro: $filtro
        },
        success: function(data){
            $('#tabla').html(data.html)
        },
        error: function(data){
            console.log("Error "+JSON.stringify(data))
        }
    });
});

