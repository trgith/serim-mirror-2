$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#table_user_dependency').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });
});


function registerUserDependency() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var name_dependency = $("#name_dependency").val();
    var email_dependency = $("#email_dependency").val();
    var password_dependency = $("#password_dependency").val();

    $.ajax({
        type: "POST",
        url: "/guardar_usuario",
        data: { name_dependency: name_dependency, email_dependency: email_dependency, password_dependency: password_dependency },
        dataType: 'JSON',
        success: function(data) {
            if (data) {
                $("#success").text(data.message).css("display", "flex");
                $("#dependency_register_buttom").prop("disabled", true);

                setTimeout(function() {
                    $("#success").css("display", "none");
                    $("#dependency_register_buttom").prop("disabled", false);
                }, 4000);

                $("#name_dependency").val();
                $("#email_dependency").val();
                $("#password_dependency").val();

            } else {
                console.log('Hubo un problema con el servidor');
            }

            getUserRegisteredDependency();
        },

        error: function(response) {
            console.log(response);
        }
    });
}


function getUserRegisteredDependency() {

    var table = $('#table_user_dependency').DataTable();
    table.clear().draw();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        url: '/usuarios_dependencia',
        dataType: 'JSON',
        success: function(response) {
            for (var i = 0; i < response.data.length; i++) {
                table.row.add([
                    response.data[i]['name'],
                    response.data[i]['email'],
                    "<a class='btn btn-warning' href='editar_usuario_dependencia/" + response.data[i]['id'] + "'><div class='cil-color-border'></div></a> "
                ]).draw(false);
            }
        },
        error: function() {
            console.log("Ha ocurrido un error con el servidor");
        }
    });
}



function cleanMessageName() {
    $("#error_name").html("");
}

function cleanMessageEmail() {
    $("#error_email").html("");
}

function cleanMessagePassword() {
    $("#error_password").html("");
}
