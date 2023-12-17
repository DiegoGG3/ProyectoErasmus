// Esperar a que la ventana cargue completamente
window.addEventListener("load", function () {
  
  // Asignar una función al evento click del botón con id "baremar"
  document.getElementById("baremar").addEventListener("click", function (ev) {
    ev.preventDefault();

    // Crear un objeto FormData y agregar el idSolicitud al formulario
    var formulario = new FormData();
    formulario.append("documentoNotas",document.getElementById("documentoNotas").value);
    formulario.append("documentoIdiomas",document.getElementById("documentoIdiomas").value);
    formulario.append("idSolicitud", document.getElementById("idSolicitud").value);

    // Obtener referencia a la tabla con id "tabla"
    var tabla = document.getElementById("tabla");

    // Iterar sobre las filas de la tabla
    for (var i = 1; i < tabla.childNodes.length * 4; i++) {
      // Verificar si la columna es la 1ra, 3ra, 5ta o 7ma
      if (i == 1 || i == 3 ) {
        formulario.append("idItem"+i,tabla.childNodes[1].childNodes[i + 1].childNodes[5].value);
        // Acceder a los elementos de la fila correspondiente
        formulario.append("valorItem"+i,tabla.childNodes[1].childNodes[i + 1].childNodes[17].childNodes[0].value);
        
      }else if(i == 5 || i == 7){
        formulario.append("idItem"+i,tabla.childNodes[1].childNodes[i + 1].childNodes[3].value);

        formulario.append("valorItem"+i,tabla.childNodes[1].childNodes[i + 1].childNodes[15].childNodes[0].value);
      }
    }

    // Realizar una solicitud fetch para procesar la información en 'api/procesarItem.php'
    fetch('./api/procesarItem.php', {
      method: 'POST',
      body: formulario
    })
    .then(response => response.text())
    .then(data => {
      console.log(data);
    });
  });
});
