$(document).ready(function() {

});




$('.filtrarExamen').on('click',function(e){
    e.preventDefault();

    $idCita = $(this).attr('idcita');
    $idExamen = $(this).attr('idexamen');
    console.log($idCita+' '+$idExamen)
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
                console.log(data);
                $('#examen').html(data.html)
                $id = $('#examen .modal').attr('id')
                $('#'+$id).modal('show')
            },
            error: function(data){
                //console.log("Error "+JSON.stringify(data))
            }
        });
});
