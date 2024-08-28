document.getElementById("btnOpenForm2").addEventListener("click", function mostrarF2() {
    if (document.getElementById("formOpen").classList.contains("formsend--open")) {
        document.getElementById("formOpen").classList.remove("formsend--open");
    }
    else {
        document.getElementById("formOpen").classList.add("formsend--open");
    }
});
document.getElementById("btnOpenForm").addEventListener("click", function mostrarF() {
    if (document.getElementById("formOpen").classList.contains("formsend--open")) {
        document.getElementById("formOpen").classList.remove("formsend--open");
    }
    else {
        document.getElementById("formOpen").classList.add("formsend--open");
    }
});
function EnviaMensaje() {
    var nombre = $('#txtNombre').val();
    var email = $('#txtEmail').val();
    var detalle = $('#txtDetalle').val();
    if ((nombre == '') || (email == '') || (detalle == '')) {
        document.getElementById("btnEnviar").classList.remove("btnEnviarWAIT");
        document.getElementById("btnEnviar").classList.add("btnEnviarERROR");
        document.getElementById("txtStatus").textContent = "Completa los datos";
        setTimeout(() => {
            document.getElementById("btnEnviar").classList.remove("btnEnviarERROR");
            document.getElementById("btnEnviar").classList.add("btnEnviarWAIT");
            document.getElementById("txtStatus").textContent = "Enviar";
        }, 3000);
        return false;
    }
    $.ajax({
        url: './acciones/EnviaEmail.php',
        type: 'POST',
        dataType: 'json',
        data: {
            "Asunto": 'Solicitud de contacto',
            "Nombre": nombre,
            "Email": email,
            "mensaje": detalle
        },
        beforeSend: function () {
            document.getElementById("status").classList.add("visually-hidden");
            document.getElementById("statusSpinner").classList.remove("visually-hidden");
        },
        success: function (response) {
            var error = response['error']; var msg = response['msg'];

            if (error == "si") {
                document.getElementById("btnEnviar").classList.remove("btnEnviarWAIT");
                document.getElementById("btnEnviar").classList.add("btnEnviarERROR");
                document.getElementById("txtStatus").textContent = "Error inesperado";
                setTimeout(() => {
                    document.getElementById("btnEnviar").classList.remove("btnEnviarERROR");
                    document.getElementById("btnEnviar").classList.add("btnEnviarWAIT");
                    document.getElementById("txtStatus").textContent = "Enviar";
                }, 3000);
                return false;
            }
            else if (error == "no") {
                document.getElementById("btnEnviar").classList.remove("btnEnviarWAIT");
                document.getElementById("btnEnviar").classList.add("btnEnviarOK");
                document.getElementById("status").classList.remove("visually-hidden");
                document.getElementById("statusSpinner").classList.add("visually-hidden");
                document.getElementById("txtStatus").textContent = "Enviado";
                setTimeout(() => {
                    document.getElementById("btnEnviar").classList.remove("btnEnviarOK");
                    document.getElementById("btnEnviar").classList.add("btnEnviarWAIT");
                    document.getElementById("status").classList.remove("visually-hidden");
                    document.getElementById("statusSpinner").classList.add("visually-hidden");
                    document.getElementById("txtStatus").textContent = "Enviar";
                }, 3000);

                return false;
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
    })// fin ajax
    return false;
}