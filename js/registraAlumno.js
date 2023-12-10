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
        mensajeError.innerHTML = "Las contraseñas no coinciden";
    } else {
        mensajeError.innerHTML = "";
    }
}