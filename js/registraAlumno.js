function validarEdad() {
    var fechaNacimiento = new Date(document.getElementById("fechanacCandidato").value);

    var hoy = new Date();
    var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();

    if (edad < 18) {
        document.getElementById("dniTutor").disabled = false;

    } else {
        document.getElementById("dniTutor").disabled = true;
        document.getElementById("dniTutor").value = "";
    }
}
function validarContraseñas() {
    var contraseña = document.getElementById("contraseñaCandidato").value;
    var repetirContraseña = document.getElementById("repetirContraseña").value;
    var mensajeError = document.getElementById("mensajeErrorContraseña");

    if (contraseña !== repetirContraseña) {
        document.getElementById("boton").disabled = true;
        mensajeError.innerHTML = "Las contraseñas no coinciden";
    } else {
        mensajeError.innerHTML = "";
        document.getElementById("boton").disabled = false;

    }
}

function mostrarContraseña() {
            var contraseñaInput = document.getElementById("contraseñaCandidato");
            contraseñaInput.type = (contraseñaInput.type === "password") ? "text" : "password";
        }

        function mostrarRepetirContraseña() {
            var repetirContraseñaInput = document.getElementById("repetirContraseña");
            repetirContraseñaInput.type = (repetirContraseñaInput.type === "password") ? "text" : "password";
        }