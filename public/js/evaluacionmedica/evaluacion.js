$(document).ready(function() {

});

$('body').on('click','.filtrarExamen',function(e){
    e.preventDefault();

    $idCita = $(this).attr('idcita');
    $idExamen = $(this).attr('idexamen');
        var token = $('input[name=_token]').attr('value')
        var url = "/citas/filtra_examen";
        $.ajax({
            type:"post",
            headers: {'X-CSRF-TOKEN':token},
            url:url,
            dataType:"json",
            data:{
                idCita : $idCita,
                idExamen : $idExamen
            },
            success: function(data){
                $('#examen').html(data.html)
                $id = $('#examen .modal').attr('id')
                $('#'+$id).modal('show')
            },
            error: function(data){
                //console.log("Error "+JSON.stringify(data))
            }
        });
});

$('.volver-evaluacion-examen').on('click',function(e){
    recargarListaExamenes();
});

function recargarListaExamenes(){
    $citaId = $('#CitaId').val();
    url = '/evaluacion_medica/recargar_lista_examen/'+$citaId;
    $.ajax({
        type:"get",
        url:url,
        dataType:"json",
        data:{
            id : $citaId
        },
        success: function(data){
            $('#tablaexamenes').html(data.html)
            $('#modal-exito').modal('hide')
        },
        error: function(data){
            //console.log("Error "+JSON.stringify(data))
        }
    });
}