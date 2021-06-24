$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#dependency_contraloria').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });

    $("#CardAnexo").hide();
    $("#CardAreas").hide();
});

var Actual = { "ActualDependency": 0, "ActualArea": 0, "ActualAnnexed": 0 };

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
    Actual['ActualDependency'] = idDependency;
    $.ajax({
        type: "GET",
        url: "/getAreasFromDependency",
        data: { idDependency: idDependency },
        success: function(response) {
            console.log(response);
            //Se agrega el titulo al card
            $('#TituloDeArea').empty();
            $('#TituloDeArea').append("Areas de " + response.data[0].name_dependency);

            //Se traspasa el valor de los anexos a una variable auxiliar
            var annexeds = response.data[0].annexeds;

            //Se crea el Objeto JSON para almacenar la data
            var areas = [];
            var area = [];

            //Se itera el response para obtener que anexos pertenecen a la dependencia
            for (var i = 0; i < annexeds.length; i++) {
                for (var j = 0; j < annexeds[i].areas.length; j++) {
                    temp = { "nombre": annexeds[i].areas[j].area, "id": annexeds[i].areas[j].id };
                    area[annexeds[i].areas[j].id] = temp;
                }
            }
            areas.push(area);
            resetArr = area.filter(function() { return true; });

            //Se pintan las areas
            $('#CuerpoParaPegarAreas').empty();
            for (var j = 0; j < resetArr.length; j++) {
                $('#CuerpoParaPegarAreas').append("<div class='col-md-3 mb-3'>" +
                    "<div class='card text-white h-100 anexos' style='background-color: #445554;'>" +
                    "<div class='card-body'>" +
                    "<div class='row'>" +
                    "<div class='col-md-12'>" +
                    "<h2 class='users__title'>" +
                    resetArr[j]['nombre'] +
                    "</h2>" +
                    "</div>" +
                    "</div>" +
                    "<br>" +
                    "<div class='row'>" +
                    "<div class='col-md-12'>" +
                    "<p class='card-text'>" +
                    "<button class='btn btn-info' onclick='showAnexos(" + resetArr[j]['id'] + ", " + idDependency + ")'>" +
                    "Ver Anexos" +
                    "</button>" +
                    "</p>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>");
            }

            //Se muestra la card
            $("#CardAreas").show();
            $("#CardAnexo").hide();
        },
        error: function(response) {
            console.log('error');
            console.log(response);
        }
    });
}

function showAnexos(idArea, idDependency) {
    Actual['ActualArea'] = idArea;
    $.ajax({
        type: "GET",
        url: "/getAnnexesFromAreas",
        data: { idDependency: idDependency, idArea: idArea },
        success: function(response) {

            //Se agrega el titulo al card
            $('#TituloDeAnexo').empty();
            $('#TituloDeAnexo').append("Anexos de " + response.data[0].area);

            //Se traspasa el valor de los anexos a una variable auxiliar
            var annexeds = response.data[0].annexes;

            //Se pintan los anexos
            $('#CuerpoParaPegarAnexos').empty();
            for (var j = 0; j < annexeds.length; j++) {
                $('#CuerpoParaPegarAnexos').append("<div class='col-md-3 mb-3'>" +
                    "<div class='card text-white h-100 anexos' style='background-color: #445554;'>" +
                    "<div class='card-body'>" +
                    "<div class='progress'>" +
                    "<div class='progress-bar bg-danger' role='progressbar' style='width: 80%' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div>" +
                    "</div>" +
                    "<br>" +
                    "<div class='row'>" +
                    "<div class='col-md-12'>" +
                    "<h2 class='users__title'>" +
                    "Anexo " + annexeds[j]['number'] +
                    "</h2>" +
                    "<small>" + annexeds[j]['name'] + "</small>" +
                    "</div>" +
                    "</div>" +
                    "<br>" +
                    "<div class='row'>" +
                    "<div class='col-md-12'>" +
                    "<p class='card-text'>" +
                    "<button class='btn btn-info' onclick='showDetails(" + annexeds[j]['number'] + ")'>" +
                    "Ver Detalles" +
                    "</button>" +
                    "</p>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>");
            }

            //Se muestra la card
            $("#CardAnexo").show();
        },
        error: function(response) {
            console.log('error');
            console.log(response);
        }
    });
}

function hideAnexos() {
    $("#CardAnexo").hide();
}