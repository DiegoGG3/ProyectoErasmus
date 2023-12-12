window.addEventListener("load", function () {
  const contenedor = this.document.getElementById("contenedor");
  const boton = document.getElementById("abrirPDF");
  const boton2 = document.getElementById("abrirPDF2");
  const boton3 = document.getElementById("foto");


  const documento1 = document.getElementById("documentoIdiomas");
  const documento2 = document.getElementById("documentoNotas");


  const player = document.getElementById('player');
  // const canvas = document.getElementById('canvas');
  // const context = canvas.getContext('2d');
  // const captureButton = document.getElementById('capture');

  const constraints = {
    video: true,
  };

  // captureButton.onclick = function (ev) {
  //   ev.preventDefault();

  //   // Draw the video frame to the canvas.
  //   context.drawImage(player, 0, 0, canvas.width, canvas.height);
  //   //   context.drawImage(player, 195, 75, 90, 120, 0, 0, 90, 120);

  // };

  // Attach the video stream to the video element and autoplay.
  // navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
  //   player.srcObject = stream;
  // });

  // boton3.onclick = function (ev) {
  //   ev.preventDefault();
  //   document.getElementById("contenedorFoto").style.display = "block";
  // }

  boton.onclick = function (ev) {
    ev.preventDefault();
    if (documento1.files.length == 1 && documento1.files[0].type == "application/pdf") {
      var iframe = document.createElement("iframe");
      iframe.style.width = "100%";
      iframe.style.height = "100%";


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

      closer.onclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(visualizador);
        document.body.removeChild(this);

      }
      visualizador.ondblclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(closer);
        document.body.removeChild(this);
      }
      iframe.src = URL.createObjectURL(documento1.files[0]);
    }
  }
  boton2.onclick = function (ev) {
    ev.preventDefault();
    if (documento2.files.length == 1 && documento2.files[0].type == "application/pdf") {
      var iframe = document.createElement("iframe");
      iframe.style.width = "100%";
      iframe.style.height = "100%";


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

      closer.onclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(visualizador);
        document.body.removeChild(this);

      }
      visualizador.ondblclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(closer);
        document.body.removeChild(this);
      }
      iframe.src = URL.createObjectURL(documento2.files[0]);
    }
  }

  // function Recuadro(x, y, ancho, alto, imagen) {
  //   this.x = x;
  //   this.y = y;
  //   this.ancho = ancho;
  //   this.alto = alto;
  //   this.imagen = imagen;
  //   this.contenedor = null;
  //   this.dom = null;
  //   this.mouseX = 0;
  //   this.mouseY = 0;
  // }


  // Recuadro.prototype.pinta = function (color = "black") {
  //   //Creo el div y configuro su estilo
  //   var rec = document.createElement("div");
  //   rec.style.position = "absolute";
  //   rec.style.top = this.x + "px";
  //   rec.style.left = this.y + "px";
  //   rec.style.width = this.ancho + "px";
  //   rec.style.height = this.alto + "px";
  //   rec.style.border = "1px solid " + color;
  //   rec.style.zIndex = 99;
  //   //Programo el movimiento del cuadradito
  //   rec.addEventListener("mousedown", pulsadoRaton(this))
  //   rec.addEventListener("mousemove", moverRaton(this))
  //   rec.addEventListener("mouseup", soltarRaton(this))

  //   this.dom = rec;
  //   //Creo un contenedor para la imagen donde aÃ±adir el div creado encima;
  //   var contenedor = document.createElement("div");
  //   contenedor.style.position = "relative";
  //   contenedor.style.display = "inline-block"
  //   this.contenedor = contenedor;
  //   //Lo introduzco justo delante de la imagen, introduciendo la imagen dentro 
  //   //y el cuadradito.
  //   this.imagen.parentNode.insertBefore(contenedor, this.imagen);
  //   contenedor.appendChild(this.imagen);
  //   contenedor.appendChild(rec);

  //   function pulsadoRaton(objeto) {
  //     return function (ev) {
  //       //Si he pulsado el botÃ³n izquierdo muevo el cuadradito
  //       if (ev.buttons > 0 && ev.button == 0) {
  //         objeto.mouseX = ev.offsetX;
  //         objeto.mouseY = ev.offsetY;
  //       }
  //     }
  //   }
  //   function moverRaton(objeto) {
  //     return function (ev) {
  //       //Si he pulsado el botÃ³n izquierdo muevo el cuadradito
  //       if (ev.buttons > 0 && ev.button == 0) {
  //         objeto.dom.style.left = parseInt(objeto.dom.style.left) + (ev.offsetX - objeto.mouseX) + "px";
  //         objeto.dom.style.top = parseInt(objeto.dom.style.top) + (ev.offsetY - objeto.mouseY) + "px";
  //       }
  //     }
  //   }

  //   function soltarRaton(objeto) {
  //     return function (ev) {
  //       //Si he pulsado el botÃ³n izquierdo muevo el cuadradito
  //       //Borro el auxiliar del movimiento
  //       objeto.mouseX = 0;
  //       objeto.mouseY = 0;
  //       objeto.x = parseInt(objeto.dom.style.left);
  //       objeto.y = parseInt(objeto.dom.style.top);
  //     }
  //   }
  // }

  // Recuadro.prototype.recortar = function () {
  //   var c = document.createElement("canvas");
  //   var img = document.createElement("img");
  //   //defino el tamaÃ±o del canvas y la imagen
  //   c.width = this.ancho;
  //   c.height = this.alto;
  //   img.width = this.ancho;
  //   img.height = this.alto;
  //   var ctx = c.getContext("2d");
  //   ctx.drawImage(this.imagen, this.x, this.y, this.ancho, this.alto, 0, 0, this.ancho, this.alto);
  //   img.src = c.toDataURL();
  //   return c;
  // }
})