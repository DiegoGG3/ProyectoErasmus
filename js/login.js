function mostrarContraseña() {
    // Obtener el campo de contraseña y cambiar su tipo para mostrar u ocultar la contraseña
    var contraseñaInput = document.getElementById("password");
    contraseñaInput.type = (contraseñaInput.type === "password") ? "text" : "password";
}