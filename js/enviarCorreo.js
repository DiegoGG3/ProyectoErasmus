window.addEventListener("load", function () {
  
    document.getElementById("botonSolicitar").addEventListener("click", function (ev) {
      ev.preventDefault();

      var formulario = new FormData();

      // Agregar datos al formulario usando append
      formulario.append("curso", document.getElementById("curso").value);
      formulario.append("telefonoCandidato", document.getElementById("telefonoCandidato").value);
      formulario.append("correoCandidato", document.getElementById("correoCandidato").value);
      formulario.append("domicilioCandidato", document.getElementById("domicilioCandidato").value);
      
  
      var formulario = new FormData();  
      fetch('./helper/enviarCorreo.php', {
        method: 'POST',
        body: formulario
      })
      .then(response => response.text())
      .then(data => {
        var url = 'http://localhost/proyectoerasmus/index.php';
  
    // Redirigir a la nueva página
        window.location.href = url;
    });
    });
  });
  