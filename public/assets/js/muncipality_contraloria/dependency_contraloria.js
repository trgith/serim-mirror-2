$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#dependency_contraloria').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });
});

function uploadImage() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    var id = $('#municipality_id').val();
    $('#id').val(id);

    var myForm = document.getElementById('myForm');
    var formData = new FormData(myForm);
    console.log(formData.get('image'));

    $.ajax({
        type: "POST",
        url: "/actualizar_imagen/",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            if (data) {
                $("#success").text(data.message).css('display', 'flex');

                setTimeout(function() {
                    $("#success").css("display", "none");
                }, 4000);
            } else {
                console.log('Ocurrio un error con el servidor');
            }
        },
        error: function(response) {
            $("#error_image").text(response.responseJSON.errors.image);
        }
    });
}