window.addEventListener("load", function () {
  const contenedor = this.document.getElementById("contenedor");
  const boton = document.getElementById("abrirPDF");
  const documento1 = document.getElementById("documento1");

  const player = document.getElementById('player');
  const canvas = document.getElementById('canvas');
  const context = canvas.getContext('2d');
  const captureButton = document.getElementById('capture');

  const constraints = {
    video: true,
  };

  captureButton.addEventListener('click', () => {
    // Draw the video frame to the canvas.
    context.drawImage(player, 0, 0, canvas.width, canvas.height);
    //   context.drawImage(player, 195, 75, 90, 120, 0, 0, 90, 120);

  });

  // Attach the video stream to the video element and autoplay.
  navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
    player.srcObject = stream;
  });


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



})