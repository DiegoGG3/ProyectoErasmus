window.addEventListener("load", function () {
  
    document.getElementById("editar").addEventListener("click", function (ev) {
      ev.preventDefault();
  
      var formulario = new FormData();
      formulario.append("idConvocatoria",document.getElementById("idConvocatoria").value);
      formulario.append("movilidades",document.getElementById("movilidades").value);
      formulario.append("tipo",document.getElementById("tipo").value);
      formulario.append("FechaInicioSolicitud", document.getElementById("FechaInicioSolicitud").value);
      formulario.append("FechaFinSolicitud",document.getElementById("FechaFinSolicitud").value);
      formulario.append("FechaInicioPrueba",document.getElementById("FechaInicioPrueba").value);
      formulario.append("FechaFinPrueba",document.getElementById("FechaFinPrueba").value);
      formulario.append("FechaListadoProvisional",document.getElementById("FechaListadoProvisional").value);
      formulario.append("FechaListadoDefinitivo",document.getElementById("FechaListadoDefinitivo").value);
      formulario.append("destino",document.getElementById("destino").value);

      // Obtener referencia a la tabla con id "tabla"
  

  
      fetch('./api/editarConvocatoria.php', {
        method: 'POST',
        body: formulario
      })
      .then(response => response.text())
      .then(data => {
        var url = 'http://localhost/proyectoerasmus/index.php?menu=editarConvocatoria';
  
    // Redirigir a la nueva página
        window.location.href = url;
    });
    });
  });
  