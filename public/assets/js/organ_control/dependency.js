$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#table_dependency').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });
});

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

    $.ajax({
        type: 'POST',
        url: '/registrar_dependencia',
        dataType: 'JSON',
        data: { name_dependency: name_dependency, address: address, exterior_number: exterior_number, interior_number: interior_number, telephone: telephone },
        success: function(data) {
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

    $.ajax({
        type: 'PUT',
        url: '/editar_dependencia/' + id,
        dataType: 'JSON',
        data: { id: id, name_dependency: name_dependency, address: address, exterior_number: exterior_number, interior_number: interior_number, telephone: telephone },
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