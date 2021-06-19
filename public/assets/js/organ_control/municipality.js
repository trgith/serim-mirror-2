$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#annexed_table').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });

});


function activeMunicipality() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    var id = $('#id').val();
    var state = $("#state").val();

    $.ajax({
        type: 'PUT',
        url: '/actualizar_municipio/' + id,
        dataType: 'JSON',
        data: { state: state },
        success: function(data) {
            if (data) {
                $("#success").text(data.message).css('display', "flex");
                setTimeout(function() {
                    $("#success").css('display', 'none');
                    $("#active_municipality").prop("disabled", true);
                }, 1000);

                $("#state").val('El municipio ya se encuentra activo');
            } else {
                console.log("Ha ocurrido un error con el servidor");
            }
        },

        error: function(response) {
            console.log(response);
            $("#error_state").text(response.responseJSON.errors.state);
        }
    });
}