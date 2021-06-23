$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#dependency_contraloria').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });

    $(".anexosHide").hide();
    $(".areasHide").hide();
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

function showAreas(idDependency) {
    $.ajax({
        type: "GET",
        url: "/getAreasFromDependency",
        data: { idDependency: idDependency },
        success: function(response) {
            $('.areasHide').show();
            //Se traspasa el valor de los anexos a una variable auxiliar
            var annexeds = response.data[0].annexeds;

            //Se crea el Objeto JSON para almacenar la data
            var areas = [];
            var area = {};
            //Se itera el response para obtener que anexos pertenecen a la dependencia
            for (var i = 0; i < annexeds.length; i++) {
                for (var j = 0; j < annexeds[i].areas.length; j++) {
                    area[annexeds[i].areas[j].area] = 0;
                }
            }
            areas.push(area);

            console.log(areas);
        },
        error: function(response) {
            console.log('error');
            console.log(response);
        }
    });
}