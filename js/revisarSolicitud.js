  
    function accederSolicitud(button) {
        var idSolicitud=button.parentNode.parentNode.childNodes[1].value;
        var dniCandidato=button.parentNode.parentNode.childNodes[3].value;
        var idConvocatoria=button.parentNode.parentNode.childNodes[5].value;


        var url = 'http://localhost/proyectoerasmus/index.php?menu=puntuaSolicitud&idSolicitud='+ idSolicitud+'&dniCandidato='+dniCandidato+'&idConvocatoria='+idConvocatoria;
        
        // Redirigir a la nueva página
        window.location.href = url;
  
    }
