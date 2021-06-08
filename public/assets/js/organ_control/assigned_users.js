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

                console.log(data);
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

/* function getValueRadioButtoms() {
    var radioButtom = document.querySelector('input[name="au"]:checked').value;
    var canValueButtom = radioButtom ? radioButtom.input : "Me encuentro vacio";
} */

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