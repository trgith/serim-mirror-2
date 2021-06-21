$(document).ready(function() {
    /**
     * *JQuery Table
     */
    $('#table_id').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });

    /**
     * *Convertimos las opciones del menú en mayúsculas
     */
    $('#menuroles option').each(function() {
        $(this).text($(this).text().toUpperCase());
    });

});

function registerUsers() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });


    var name = $('#users_name_complete').val();
    var email = $('#users_email').val();
    var password = $('#users_password').val();
    var action_user = $('input[name="au"]:checked').val();
    var menuroles = $('#menuroles').val();

    $.ajax({
        type: 'POST',
        url: '/registrar_usuario',
        dataType: "json",
        data: { name: name, email: email, password: password, action_user: action_user, menuroles: menuroles },

        success: function(data) {
            if (data) {
                $("#success").html(data.message).css("display", "flex");
                $("#form_buttom_users").prop("disabled", true);

                setTimeout(function() {
                    $("#success").css("display", "none");
                    $("#form_buttom_users").prop("disabled", false);
                }, 4000);


                $("#users_name_complete").val('');
                $("#users_email").val('');
                $("#users_password").val('');
                $("#users_delivery").val('');
                $("#menuroles").val('');
            } else {
                console.log("Ha ocurrido un error con el servidor");
            }
            getUserRegistered();

        },
        error: function(response) {
            console.log(response);
            $("#error_name").text(response.responseJSON.errors.name);
            $("#error_email").text(response.responseJSON.errors.email);
            $("#error_password").text(response.responseJSON.errors.password);
            $("#error_menuroles").text(response.responseJSON.errors.menuroles);
            $("#error_actions").text(response.responseJSON.errors.action_user);

        }
    });
}


function getUserRegistered() {

    var table = $('#table_id').DataTable();
    table.clear().draw();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        url: '/lista_usuarios',
        dataType: 'JSON',
        success: function(response) {
            for (var i = 0; i < response.data.length; i++) {

                table.row.add([
                    response.data[i]['name'],
                    response.data[i]['email'],
                    response.data[i]['action_user'],
                    response.data[i]['menuroles'],
                    "<a class='btn btn-primary' href='editar_usuario/" + response.data[i]['id'] + "'><div class='cil-color-border'></div></a> " +
                    "<a class='btn btn-danger' href='eliminar_usuario/" + response.data[i]['id'] + "'><div class='cil-trash'></div></a>"
                ]).draw(false);
            }
        }
    });
}

function updateUserRegistered() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var id = $('#id').val();

    var name = $('#users_name_complete_update').val();
    var email = $('#users_email_update').val();
    var password = $('#users_password_update').val();


    $.ajax({
        type: 'PUT',
        url: '/actualizar_usuario/' + id,
        data: { id: id, name: name, email: email, password: password },
        dataType: 'JSON',
        success: function(data) {
            console.log(data);
            if (data) {
                $("#success").html(data.message).css("display", "flex");
                $("#form_buttom_users").prop("disabled", true);

                setTimeout(function() {
                    $("#success").css("display", "none");
                    $("#form_buttom_users").prop("disabled", false);
                }, 4000);

                $("#users_name_complete_update").val('');
                $("#users_email_update").val('');
                $("#users_password_update").val('');
            } else {
                console.log('Hubo un problema con el servidor');
            }
        },

        error: function(response) {
            console.log(response);
            $("#error_name").text(response.responseJSON.errors.name);
            $("#error_email").text(response.responseJSON.errors.email);
            $("#error_password").text(response.responseJSON.errors.password);
        }
    });
}


function deleteUser(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'DELETE',
        url: 'eliminar_usuario/' + id,
        data: { id: id },
        dataType: 'JSON',
        success: function(data) {
            if (data) {
                location.reload();
                alert(data.message);
            }
        },

        error: function(response) {
            console.log(response);
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

function cleanMessageRoles() {
    $("#error_menuroles").html("");
}