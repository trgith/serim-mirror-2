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
    var action_user = $('#users_delivery').val();
    var menuroles = $('#menuroles').val();

    $.ajax({
        type: 'POST',
        url: '/registrar_usuario',
        dataType: "json",
        data: { name: name, email: email, password: password, action_user: action_user, menuroles: menuroles },

        success: function(data) {
            if (data) {
                $('#success').text("Usuario registrado correctamente");

                setTimeout(function() {
                    $("#success").css('display', 'none');
                }, 4000);
            } else {
                console.log("Ha ocurrido un error con el servidor");
            }
        },
        error: function(response) {
            console.log(response);
            $("#error_name").text(response.responseJSON.errors.name);
            $("#error_email").text(response.responseJSON.errors.email);
            $("#error_password").text(response.responseJSON.errors.password);
            $("#error_menuroles").text(response.responseJSON.errors.menuroles);
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