window.addEventListener("load", function () {
  const contenedor = document.getElementById("contenedor");
  const boton = document.getElementById("abrirPDF");


  boton.onclick = function (ev) {
    ev.preventDefault();
    console.log(this.parentNode.parentNode.childNodes[1]);
    const documento1 = this.parentNode.parentNode.childNodes[1].value;
    const documento2 = this.parentNode.parentNode.childNodes[7].value;


    if (documento1 !== "") {
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
      };

      visualizador.ondblclick = function () {
        document.body.removeChild(modal);
        document.body.removeChild(closer);
        document.body.removeChild(this);
      };

      iframe.src = documento1;
    }
  };
});
