function listarCitas($fecha){
    console.log($fecha);

    // e.preventDefault();
    var token = $('input[name=_token]').attr('value')

    var url = "/citas/buscarfecha";
    //var url = $('#buscarUrlPaciente').val();
    $.ajax({
        type:"post",
        headers: {'X-CSRF-TOKEN':token},
        url:url,
        dataType:"json",
        data:{
            fecha: $fecha
        },
        success: function(data){
            $('#tabla').html(data.html)
            $('#modal-citas-lista').modal('show');
        },
        error: function(data){
            console.log("Error "+JSON.stringify(data))
        }
    });
}