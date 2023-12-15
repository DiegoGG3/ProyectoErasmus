// Cuando la ventana ha terminado de cargar, se agrega un evento al botón con el id "botonSolicitar"
window.addEventListener("load", function () {
  document.getElementById("botonSolicitar").addEventListener("click", function (ev) {
    // Evitar el comportamiento predeterminado del formulario al hacer clic en el botón
    ev.preventDefault();

    // Crear un nuevo objeto FormData para recopilar datos del formulario
    var formulario = new FormData();

    // Agregar datos al formulario usando append
    formulario.append("curso", document.getElementById("curso").value);
    formulario.append("telefonoCandidato", document.getElementById("telefonoCandidato").value);
    formulario.append("correoCandidato", document.getElementById("correoCandidato").value);
    formulario.append("domicilioCandidato", document.getElementById("domicilioCandidato").value);
    formulario.append("convocatoriaId", document.getElementById("convocatoriaId").value);
    formulario.append("foto", document.getElementById("blob").value);

    // Agregar archivos adjuntos del primer conjunto de campos de archivo
    var div1 = document.getElementById("divFiles");
    for (var i = 1; i < div1.childNodes.length; i++) {
      if (div1.childNodes[i].type == "file") {
        var file = (div1.childNodes[i].files[0]);
        formulario.append(div1.childNodes[i].id, file);
      }
    }

    // Agregar archivos adjuntos del segundo conjunto de campos de archivo
    var div = document.getElementById("divFiles2");
    for (var i = 1; i < div.childNodes.length; i++) {
      if (div.childNodes[i].type == "file") {
        var file = (div.childNodes[i].files[0]);
        formulario.append(div.childNodes[i].id, file);
      }
    }

    // Realizar una solicitud fetch para enviar el formulario a 'procesarSolicitud.php'
    fetch('./api/procesarSolicitud.php', {
      method: 'POST',
      body: formulario
    })
      .then(response => response.text())
      .then(data => {
        console.log(data);
      });
  });
});

// Función para validar un número de teléfono
function validarTelefono(telefono) {
  var patronTelefono = /^\d{9}$/;
  return patronTelefono.test(telefono);
}

// Función para validar y comparar el número de teléfono antes de enviar el formulario
function validarYComparar() {
  var telefonoCandidato = document.getElementById("telefonoCandidato").value;
  var mensajeError = document.getElementById("mensajeErrorYelefono");

  // Validar el número de teléfono y mostrar un mensaje de error si es incorrecto
  if (validarTelefono(telefonoCandidato) == false) {
    document.getElementById("botonSolicitar").disabled = true;
    mensajeError.innerHTML = "El teléfono es incorrecto";
  } else {
    mensajeError.innerHTML = "";
    document.getElementById("botonSolicitar").disabled = false;
  }
}

// Función para validar una dirección de correo electrónico
function validarEmail(email) {
  var patronEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  return patronEmail.test(email);
}

// Función para validar y comparar la dirección de correo electrónico antes de enviar el formulario
function validarYCompararEmail() {
  var emailCandidato = document.getElementById("correoCandidato").value;
  var mensajeErrorEmail = document.getElementById("mensajeErrorEmail");

  // Validar la dirección de correo electrónico y mostrar un mensaje de error si es incorrecta
  if (validarEmail(emailCandidato) == false) {
    document.getElementById("botonSolicitar").disabled = true;
    mensajeErrorEmail.innerHTML = "El correo electrónico es incorrecto";
  } else {
    mensajeErrorEmail.innerHTML = "";
    document.getElementById("botonSolicitar").disabled = false;
  }
}
