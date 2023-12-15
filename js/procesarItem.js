// Esperar a que la ventana cargue completamente
window.addEventListener("load", function () {
  
  // Asignar una función al evento click del botón con id "baremar"
  document.getElementById("baremar").addEventListener("click", function (ev) {
    ev.preventDefault();

    // Crear un objeto FormData y agregar el idSolicitud al formulario
    var formulario = new FormData();
    formulario.append("idSolicitud", document.getElementById("idSolicitud").value);

    // Obtener referencia a la tabla con id "tabla"
    var tabla = document.getElementById("tabla");

    // Iterar sobre las filas de la tabla
    for (var i = 1; i < tabla.childNodes.length * 3; i++) {
      // Verificar si la columna es la 1ra, 3ra, 5ta o 7ma
      if (i == 1 || i == 3 || i == 5 || i == 7) {
        // Acceder a los elementos de la fila correspondiente
        console.log(tabla.childNodes[1].childNodes[i + 1].childNodes[19].childNodes[0].value);
        console.log(tabla.childNodes[1].childNodes[i + 1].childNodes[3]);
        console.log(tabla.childNodes[1].childNodes[i + 1].childNodes[5]);
      }
    }

    // Realizar una solicitud fetch para procesar la información en 'api/procesarItem.php'
    fetch('./api/procesarItem.php', {
      method: 'POST',
      body: formulario
    })
    .then(response => response.text())
    .then(data => {
      // Actualizar o realizar acciones necesarias después de la respuesta del servidor
      // Por ejemplo, podrías recargar la página o mostrar un mensaje al usuario
      // console.log(data);
    });
  });
});
