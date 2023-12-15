// Función para acceder a una solicitud al hacer clic en un botón
function accederSolicitud(button) {
    // Obtener datos de la solicitud desde los nodos padres del botón
    var idSolicitud = button.parentNode.parentNode.childNodes[1].value;
    var dniCandidato = button.parentNode.parentNode.childNodes[3].value;
    var idConvocatoria = button.parentNode.parentNode.childNodes[5].value;
  
    // Construir la URL con los parámetros necesarios
    var url = 'http://localhost/proyectoerasmus/index.php?menu=puntuaSolicitud&idSolicitud=' + idSolicitud + '&dniCandidato=' + dniCandidato + '&idConvocatoria=' + idConvocatoria;
  
    // Redirigir a la nueva página
    window.location.href = url;
  }
  