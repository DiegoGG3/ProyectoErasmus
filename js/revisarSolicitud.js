  
    function accederSolicitud(button) {
        var formulario=new FormData();
        var idSolicitud=button.parentNode.parentNode.childNodes[1].value;
        formulario.append("idSolicitud",idSolicitud);
  
        fetch('./vistas/puntuaSolicitud.php', {
          method: 'POST',
          body: formulario
        })
        .then(response => response.text())
        .then(data => {
          // location.reload();
          console.log(formulario);
        });  
    }
