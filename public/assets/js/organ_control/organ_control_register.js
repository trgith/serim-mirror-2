function registerOrganControl() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        type: 'POST',
        url: "/registrar_organo_de_control",
        dataType: "json",
        data: { email: email, password: password, name: name },

        success: function(data) {
            if (data) {
                $("#success").text("Usuario registrado correctamente").css('display', "flex");

                setTimeout(function() {
                    $("#success").css('display', 'none');
                }, 4000);

                $("#name").val('');
                $("#email").val('');
                $("#password").val('');
            } else {
                console.log("Ha ocurrido un error con el servidor");
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

function cleanMessageName() {
    $("#error_name").html("");
}

function cleanMessageEmail() {
    $("#error_email").html("");
}

function cleanMessagePassword() {
    $("#error_password").html("");
}