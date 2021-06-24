$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#table_dependency').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });

    /**
     *
     * Esconder select de Municipios
     *
     */
    $('#region_select').prop("disabled", true);

});

/*
 * ! TODO Variable auxiliar para almacenar la asignacion de anexos en base
 */
var areaId = 0;

function registerDependency() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var name_dependency = $("#name_dependency").val();
    var address = $("#address").val();
    var exterior_number = $("#exterior_number").val();
    var interior_number = $("#interior_number").val();
    var telephone = $("#telephone").val();
    var municipality_id = $("#municipality_id").val();
    var assignedAnnexesObject = constructAssignedAnnexesObject();

    $.ajax({
        type: 'POST',
        url: '/registrar_dependencia',
        dataType: 'JSON',
        data: {
            name_dependency: name_dependency,
            address: address,
            exterior_number: exterior_number,
            interior_number: interior_number,
            telephone: telephone,
            municipality_id: municipality_id,
            assignedAnnexes: assignedAnnexesObject
        },
        success: function(data) {
            console.log(data);

            if (data) {
                $("#success").text(data.message).css('display', "flex");
                setTimeout(function() {
                    $("#success").css("display", "none");
                    $("#active_municipality").prop("disabled", false);
                }, 1000);

                $("#name_dependency").val('');
                $("#address").val('');
                $("#exterior_number").val('');
                $("#interior_number").val('');
                $("#telephone").val('');
                $("#municipality_id").val();
            } else {
                console.log('Ha ocurrido un error con el servidor');
            }

            getDependencies();
        },
        error: function(response) {
            console.log(response);
            $("#error_dependency").text(response.responseJSON.errors.name_dependency);

        }
    });
}

function editDependency() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var id = $('#id').val();

    var name_dependency = $("#name_dependency").val();
    var address = $("#address").val();
    var exterior_number = $("#exterior_number").val();
    var interior_number = $("#interior_number").val();
    var telephone = $("#telephone").val();
    var municipality_id = $("#municipality_id").val();

    $.ajax({
        type: 'PUT',
        url: '/editar_dependencia/' + id,
        dataType: 'JSON',
        data: {
            id: id,
            name_dependency: name_dependency,
            address: address,
            exterior_number: exterior_number,
            interior_number: interior_number,
            municipality_id: municipality_id,
            telephone: telephone
        },
        success: function(data) {
            console.log(data);
            if (data) {
                $("#success").text(data.message).css('display', 'flex');

                setTimeout(function() {
                    $("#success").css("display", "none");
                }, 4000);
            } else {
                console.log("Se encontro un error con el servidor");
            }
        },

        error: function(response) {
            console.log(response);
            $("#error_dependency").text(response.responseJSON.errors.name_dependency);
        }
    });
}


function getDependencies() {

    var table = $('#table_dependency').DataTable();
    table.clear().draw();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        url: '/lista_dependencias',
        dataType: 'JSON',
        success: function(response) {
            for (var i = 0; i < response.data.length; i++) {
                console.log(response);
                table.row.add([
                    response.data[i]['name_dependency'],
                    response.data[i]['address'],
                    response.data[i]['exterior_number'],
                    response.data[i]['interior_number'],
                    response.data[i]['telephone'],
                    "<a class='btn btn-warning' href='editar_dependencia/" + response.data[i]['id'] + "'><div class='cil-color-border'></div></a>"
                ]).draw(false);
            }
        }
    });

}

function cleanDependency() {
    $("#error_dependency").html("");
}

function changeMunicipalities(input) {
    $('.hide').hide();
    $('#region_select').prop("disabled", false);
    $('.mostrar-' + $(input).val()).show();
}

function constructAssignedAnnexesObject() {
    //Array para contener todos los objetos de los anexos
    var assignedAnnexesObjectArray = [];

    //Se ciclan Areas, con el maximo numero de areas
    for (var k = 0; k < 6; k++) {

        //Ciclo que itera 35 veces los anexos, 35 es un numero estandar ya
        for (var i = 0; i < 35; i++) {
            //Si esta checkeado, lo guarda en un objeto y se pushea ese objeto en el array de arriba
            if ($('#Annexed-AreaID-' + i).is(":checked")) {
                var assignedAnnexesObject = {};
                assignedAnnexesObject = { "numberAnnexed": i, "area_id": this.areaId };
                assignedAnnexesObjectArray.push(assignedAnnexesObject);
            }
        }
    }

    //Retorna el array de objetos para mandarlos a BD
    return assignedAnnexesObjectArray;
}


function showAnnxeds(idArea) {
    $("#list_annexeds").fadeIn('slow');
    //areaId es para guardar esa area en la BD cuando se asignen anexos
    this.areaId = idArea;
    $.ajax({
        type: "get",
        url: "/obtener_anexos",
        data: { idArea: idArea },
        success: function(data) {
            console.log(data);
            if (data) {
                console.log(data.data[0].annexes);
                $('#row').empty();
                for (var i = 0; i < data.data[0].annexes.length; i++) {
                    $('#row').append(
                        '<div class="card card-modified-annexed">' +
                        '<div class="card-body card-body-modified-annexed">' +
                        '<input id="Annexed-' + data.data[0].annexes[i].number + '" type="checkbox" class="form-check-label" name="group"/> ' + data.data[0].annexes[i].name + '<br />' +
                        '</div>' +
                        '</div');
                }
            } else {
                console.log("Ocurrio un error con el servidor");
            }

        },
        error: function(response) {
            console.log(response);
        }
    });
}

function hideAnnexed() {
    $("#hide_annexeds").fadeOut('slow');
    $("#list_annexeds").fadeOut('slow');
}


$('#checkAll').click(function() {
    $('input:checkbox').prop('checked', this.checked);
});

// function getAreasWithAnnexeds() {

//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     $.ajax({
//         type: "get",
//         url: "/anexosAreas",
//         dataType: "dataType",
//         success: function(data) {
//             console.log(response);
//         },
//         error: function() {

//         }

//     });
// }