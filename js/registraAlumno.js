function validarEdad() {
    // Obtener la fecha de nacimiento del candidato desde el campo de entrada
    var fechaNacimiento = new Date(document.getElementById("fechanacCandidato").value);

    // Obtener la fecha actual
    var hoy = new Date();
    
    // Calcular la edad del candidato
    var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();

    // Deshabilitar el campo del DNI del tutor si el candidato es mayor de 18 años
    if (edad < 18) {
        document.getElementById("dniTutor").disabled = false;
    } else {
        document.getElementById("dniTutor").disabled = true;
        document.getElementById("dniTutor").value = "";
    }
}

function validarContraseñas() {
    // Obtener las contraseñas desde los campos de entrada
    var contraseña = document.getElementById("contraseñaCandidato").value;
    var repetirContraseña = document.getElementById("repetirContraseña").value;

    // Obtener el elemento para mostrar mensajes de error
    var mensajeError = document.getElementById("mensajeErrorContraseña");

    // Comparar las contraseñas y mostrar un mensaje de error si no coinciden
    if (contraseña !== repetirContraseña) {
        document.getElementById("boton").disabled = true;
        mensajeError.innerHTML = "Las contraseñas no coinciden";
        document.getElementById("boton").style.backgroundColor = "red";

    } else {
        mensajeError.innerHTML = "";
        document.getElementById("boton").disabled = false;
        document.getElementById("boton").style.backgroundColor = "green";

    }
}

function mostrarContraseña() {
    // Obtener el campo de contraseña y cambiar su tipo para mostrar u ocultar la contraseña
    var contraseñaInput = document.getElementById("contraseñaCandidato");
    contraseñaInput.type = (contraseñaInput.type === "password") ? "text" : "password";
}

function mostrarRepetirContraseña() {
    // Obtener el campo de repetir contraseña y cambiar su tipo para mostrar u ocultar la contraseña
    var repetirContraseñaInput = document.getElementById("repetirContraseña");
    repetirContraseñaInput.type = (repetirContraseñaInput.type === "password") ? "text" : "password";
}

function validarTelefono(telefono) {
    // Expresión regular para validar un número de teléfono con 9 dígitos
    var patronTelefono = /^\d{9}$/;
    return patronTelefono.test(telefono);
}

function validarYCompararTelefono() {
    // Obtener el número de teléfono desde el campo de entrada
    var telefonoCandidato = document.getElementById("telefonoCandidato").value;
    var mensajeError = document.getElementById("mensajeErrorTelefono");

    // Validar el número de teléfono y mostrar un mensaje de error si es incorrecto
    if (validarTelefono(telefonoCandidato) == false) {
        document.getElementById("boton").disabled = true;
        mensajeError.innerHTML = "El teléfono es incorrecto";
        document.getElementById("boton").style.backgroundColor = "red";

    } else {
        mensajeError.innerHTML = "";
        document.getElementById("boton").disabled = false;
        document.getElementById("boton").style.backgroundColor = "green";

    }
}

function validarEmail(email) {
    // Expresión regular para validar un correo electrónico
    var patronEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return patronEmail.test(email);
}

function validarYCompararEmail() {
    // Obtener la dirección de correo electrónico desde el campo de entrada
    var emailCandidato = document.getElementById("correoCandidato").value;
    var mensajeErrorEmail = document.getElementById("mensajeErrorEmail");

    // Validar la dirección de correo electrónico y mostrar un mensaje de error si es incorrecta
    if (validarEmail(emailCandidato) == false) {
        document.getElementById("boton").disabled = true;
        mensajeErrorEmail.innerHTML = "El correo electrónico es incorrecto";
        document.getElementById("boton").style.backgroundColor = "red";

    } else {
        mensajeErrorEmail.innerHTML = "";
        document.getElementById("boton").disabled = false;
        document.getElementById("boton").style.backgroundColor = "green";

    }
}

function validarDNI(dni) {
    // Expresión regular para validar el formato del DNI (8 dígitos seguidos de una letra)
    var patronDNI = /^\d{8}[a-zA-Z]$/;

    // Validar formato
    if (!patronDNI.test(dni)) {
        return false;
    }

    // Validar letra del DNI
    var letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    var numero = dni.substr(0, 8);
    var letra = dni.charAt(8).toUpperCase();
    var indice = numero % 23;

    return letra === letras.charAt(indice);
}

function validarYCompararDNI() {
    // Obtener el DNI desde el campo de entrada
    var dniCandidato = document.getElementById("dniCandidato").value;
    var mensajeErrorDNI = document.getElementById("mensajeErrorDNI");

    // Validar el DNI y mostrar un mensaje de error si es incorrecto
    if (!validarDNI(dniCandidato)) {
        document.getElementById("boton").disabled = true;
        document.getElementById("boton").style.backgroundColor = "red";

        mensajeErrorDNI.innerHTML = "El DNI es incorrecto";
    } else {
        mensajeErrorDNI.innerHTML = "";
        document.getElementById("boton").disabled = false;
        document.getElementById("boton").style.backgroundColor = "green";

    }
}

function validarYCompararDNITutor() {
    // Obtener el DNI del tutor desde el campo de entrada
    var dniTutor = document.getElementById("dniTutor").value;
    var mensajeErrorDNITutor = document.getElementById("mensajeErrorDniTutor");

    // Validar el DNI del tutor y mostrar un mensaje de error si es incorrecto
    if (!validarDNI(dniTutor)) {
        document.getElementById("boton").disabled = true;
        mensajeErrorDNITutor.innerHTML = "El DNI es incorrecto";
        document.getElementById("boton").style.backgroundColor = "red";

    } else {
        mensajeErrorDNITutor.innerHTML = "";
        document.getElementById("boton").disabled = false;
        document.getElementById("boton").style.backgroundColor = "green";

    }
}
