// Esperar a que la ventana cargue completamente
window.addEventListener("load", function () {
  // Obtener referencias a elementos del DOM
  const contenedor = this.document.getElementById("contenedor");
  const boton = document.getElementById("abrirPDF");
  const boton2 = document.getElementById("abrirPDF2");
  const documento1 = document.getElementById("documentoIdiomas");
  const documento2 = document.getElementById("documentoNotas");
  const player = document.getElementById('player');
  
  // Definir las restricciones para la cámara
  const constraints = {
    video: true,
  };

  // Asignar una función al evento click del primer botón
  boton.onclick = function (ev) {
    ev.preventDefault();
    // Verificar que se haya seleccionado un archivo PDF
    if (documento1.files.length == 1 && documento1.files[0].type == "application/pdf") {
      // Crear un elemento iframe para visualizar el PDF
      var iframe = document.createElement("iframe");
      iframe.style.width = "100%";
      iframe.style.height = "100%";

      // Crear elementos para el modal
      var modal = document.createElement("div");
      modal.style.position = "fixed";
      modal.style.left = 0;
      modal.style.top = 0;
      modal.style.width = "100%";
      modal.style.height = "100%";
      modal.style.backgroundColor = "rgba(0,0,0,0.5)";
      modal.style.zIndex = 99;
      document.body.appendChild(modal);

      var visualizador = document.createElement("div");
      visualizador.style.position = "fixed";
      visualizador.style.left = "15%";
      visualizador.style.top = "15%";
      visualizador.style.width = "70%";
      visualizador.style.height = "70%";
      visualizador.style.backgroundColor = "white";
      visualizador.style.zIndex = 100;
      document.body.appendChild(visualizador);
      visualizador.appendChild(iframe);

      var closer = document.createElement("div");
      closer.innerHTML = "X";
      closer.style.position = "fixed";
      closer.style.padding = "5px";
      closer.style.backgroundColor = "white";
      closer.style.top = 0;
      closer.style.right = 0;
      closer.style.zIndex = 101;
      document.body.appendChild(closer);

      // Asignar función al evento click del botón de cierre
      closer.onclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(visualizador);
        document.body.removeChild(this);
      }

      // Asignar función al evento de doble clic en el visualizador para cerrar
      visualizador.ondblclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(closer);
        document.body.removeChild(this);
      }

      // Cargar el PDF en el iframe
      iframe.src = URL.createObjectURL(documento1.files[0]);
    }
  }

  // Asignar una función al evento click del segundo botón
  boton2.onclick = function (ev) {
    ev.preventDefault();
    // Verificar que se haya seleccionado un archivo PDF
    if (documento2.files.length == 1 && documento2.files[0].type == "application/pdf") {
      // Crear un elemento iframe para visualizar el PDF
      var iframe = document.createElement("iframe");
      iframe.style.width = "100%";
      iframe.style.height = "100%";

      // Crear elementos para el modal
      var modal = document.createElement("div");
      modal.style.position = "fixed";
      modal.style.left = 0;
      modal.style.top = 0;
      modal.style.width = "100%";
      modal.style.height = "100%";
      modal.style.backgroundColor = "rgba(0,0,0,0.5)";
      modal.style.zIndex = 99;
      document.body.appendChild(modal);

      var visualizador = document.createElement("div");
      visualizador.style.position = "fixed";
      visualizador.style.left = "15%";
      visualizador.style.top = "15%";
      visualizador.style.width = "70%";
      visualizador.style.height = "70%";
      visualizador.style.backgroundColor = "white";
      visualizador.style.zIndex = 100;
      document.body.appendChild(visualizador);
      visualizador.appendChild(iframe);

      var closer = document.createElement("div");
      closer.innerHTML = "X";
      closer.style.position = "fixed";
      closer.style.padding = "5px";
      closer.style.backgroundColor = "white";
      closer.style.top = 0;
      closer.style.right = 0;
      closer.style.zIndex = 101;
      document.body.appendChild(closer);

      // Asignar función al evento click del botón de cierre
      closer.onclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(visualizador);
        document.body.removeChild(this);
      }

      // Asignar función al evento de doble clic en el visualizador para cerrar
      visualizador.ondblclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(closer);
        document.body.removeChild(this);
      }

      // Cargar el PDF en el iframe
      iframe.src = URL.createObjectURL(documento2.files[0]);
    }
  }
});
