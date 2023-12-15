// Declarar una variable global r
let r;

// Función para abrir el modal de captura de foto
function modalFoto(ev) {
  ev.preventDefault();

  // Crear elementos HTML necesarios para el modal de captura de foto
  var video = document.createElement("video");
  var contenedor = document.createElement("div");
  var canvas = document.createElement("canvas");
  var cuadrito = document.createElement("div");
  var btnCaptura = document.createElement("button");
  var btnEnviarFoto = document.createElement("button");

  // Configurar atributos y estilos de los elementos
  video.setAttribute("id", "player");
  video.controls = true;
  video.style.width = "100%";
  video.style.height = "auto";
  video.autoplay = true;

  contenedor.setAttribute("id", "contenedor");

  canvas.setAttribute("id", "canvas");
  canvas.style.width = video.clientWidth + "px";
  canvas.style.height = video.clientHeight + "px";

  cuadrito.setAttribute("id", "cuadrito");

  const context = canvas.getContext('2d');

  btnCaptura.innerHTML = "Tomar Foto";
  btnCaptura.setAttribute("id", "capture");
  btnCaptura.style.margin = "10%";
  btnCaptura.style.width = "200px";
  btnCaptura.style.height = "90px";

  btnEnviarFoto.innerHTML = "Finalizar";
  btnEnviarFoto.setAttribute("id", "btnFinalizarFoto");
  btnEnviarFoto.style.margin = "10%";
  btnEnviarFoto.style.width = "200px";
  btnEnviarFoto.style.height = "90px";

  cuadrito.style.display = "none";

  // Agregar evento click para enviar la foto capturada
  btnEnviarFoto.addEventListener("click", function (event) {
    event.preventDefault();
    // Establecer la foto capturada en un elemento de imagen y en un campo de formulario
    document.getElementById('foton').src = r.recortar();
    document.getElementById('blob').value = r.recortar();
    // Cerrar el modal
    cerrarModal(event);
  });

  const constraints = { video: true };

  // Agregar evento click para capturar la foto
  btnCaptura.addEventListener('click', () => {
    canvas.width = video.clientWidth;
    canvas.height = video.clientHeight;
    canvas.style.width = canvas.width + "px";
    canvas.style.height = canvas.height + "px";
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    // Crear un objeto Recuadro para manipular la foto capturada
    r = new Recuadro(0, 0, 100, 200, canvas);
    r.pinta();
    const imageDataURL = canvas.toDataURL('image/png');
  });

  // Obtener acceso a la cámara del usuario
  navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
    video.srcObject = stream;
  });

  // Crear elementos para el modal
  var modal = document.createElement("div");
  modal.style.position = "fixed";
  modal.style.left = 0;
  modal.style.top = 0;
  modal.style.width = "100%";
  modal.style.height = "100%";
  modal.style.backgroundColor = "rgba(0,0,0,0.5)";
  modal.style.zIndex = 99;
  modal.setAttribute("id", "modal");
  document.body.appendChild(modal);

  var visualizador = document.createElement("div");
  visualizador.style.position = "fixed";
  visualizador.style.left = "15%";
  visualizador.style.top = "15%";
  visualizador.style.width = "70%";
  visualizador.style.height = "70%";
  visualizador.style.display = "grid";
  visualizador.style.gridTemplateColumns = "50% 50%";
  visualizador.style.gridTemplateRows = "70% 30%";
  visualizador.style.backgroundColor = "white";
  visualizador.style.zIndex = 100;
  visualizador.setAttribute("id", "visualizador");
  visualizador.appendChild(video);
  visualizador.appendChild(canvas);
  visualizador.appendChild(cuadrito);
  visualizador.appendChild(btnCaptura);
  visualizador.appendChild(btnEnviarFoto);
  document.body.appendChild(visualizador);

  var closer = document.createElement("div");
  closer.innerHTML = "X";
  closer.style.position = "fixed";
  closer.style.padding = "5px";
  closer.style.backgroundColor = "white";
  closer.style.top = 0;
  closer.style.right = 0;
  closer.style.zIndex = 101;
  closer.setAttribute("id", "closer");
  document.body.appendChild(closer);
  closer.setAttribute("onclick", "cerrarModal(event)");
}

// Función para cerrar el modal
function cerrarModal(ev) {
  ev.preventDefault();
  // Eliminar elementos del DOM relacionados con el modal
  document.body.removeChild(document.getElementById("modal"));
  document.body.removeChild(document.getElementById("visualizador"));
  document.body.removeChild(document.getElementById("closer"));
}

// Constructor de objetos Recuadro para manipular imágenes
function Recuadro(x, y, ancho, alto, imagen) {
  this.x = x;
  this.y = y;
  this.ancho = ancho;
  this.alto = alto;
  this.imagen = imagen;
  this.contenedor = null;
  this.dom = null;
  this.mouseX = 0;
  this.mouseY = 0;
}

// Método para dibujar un recuadro en la imagen
Recuadro.prototype.pinta = function (color = "black") {
  var rec = document.createElement("div");
  rec.style.position = "absolute";
  rec.style.top = this.x + "px";
  rec.style.left = this.y + "px";
  rec.style.width = this.ancho + "px";
  rec.style.height = this.alto + "px";
  rec.style.border = "1px solid " + color;
  rec.style.zIndex = 99;

  // Agregar eventos para manipular el recuadro
  rec.addEventListener("mousedown", pulsadoRaton(this));
  rec.addEventListener("mousemove", moverRaton(this));
  rec.addEventListener("mouseup", soltarRaton(this));

  this.dom = rec;

  var contenedor = document.createElement("div");
  contenedor.style.position = "relative";
  contenedor.style.display = "inline-block";
  this.contenedor = contenedor;

  // Insertar el contenedor y la imagen en el DOM
  this.imagen.parentNode.insertBefore(contenedor, this.imagen);
  contenedor.appendChild(this.imagen);
  contenedor.appendChild(rec);

  // Funciones internas para manejar eventos del ratón
  function pulsadoRaton(objeto) {
    return function (ev) {
      if (ev.buttons > 0 && ev.button == 0) {
        objeto.mouseX = ev.offsetX;
        objeto.mouseY = ev.offsetY;
      }
    }
  }

  function moverRaton(objeto) {
    return function (ev) {
      if (ev.buttons > 0 && ev.button == 0) {
        objeto.dom.style.left = parseInt(objeto.dom.style.left) + (ev.offsetX - objeto.mouseX) + "px";
        objeto.dom.style.top = parseInt(objeto.dom.style.top) + (ev.offsetY - objeto.mouseY) + "px";
      }
    }
  }

  function soltarRaton(objeto) {
    return function (ev) {
      objeto.mouseX = 0;
      objeto.mouseY = 0;
      objeto.x = parseInt(objeto.dom.style.left);
      objeto.y = parseInt(objeto.dom.style.top);
    }
  }
};

// Método para recortar la imagen utilizando el recuadro
Recuadro.prototype.recortar = function () {
  var c = document.createElement("canvas");
  var img = document.createElement("img");

  c.width = this.ancho;
  c.height = this.alto;
  img.width = this.ancho;
  img.height = this.alto;

  var ctx = c.getContext("2d");
  ctx.drawImage(this.imagen, this.x, this.y, this.ancho, this.alto, 0, 0, this.ancho, this.alto);

  img.src = c.toDataURL();
  return img.src;
}
