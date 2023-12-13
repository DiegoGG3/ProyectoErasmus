  
    function accederSolicitud(button) {
        var idSolicitud=button.parentNode.parentNode.childNodes[1].value;

        var url = 'vistas/puntuaSolicitud.php?id='+ idSolicitud;
      
        // Redirigir a la nueva página
        window.location.href = url;
  
    }
