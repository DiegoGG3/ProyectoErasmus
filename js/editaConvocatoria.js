// Función para acceder a una solicitud al hacer clic en un botón
function accederConvocatoria(button) {
    // Obtener datos de la solicitud desde los nodos padres del botón
    var idConvocatoria = button.parentNode.parentNode.childNodes[1].id;
    // Construir la URL con los parámetros necesarios
    var url = 'http://localhost/proyectoerasmus/index.php?menu=cambiaConvocatoria&idConvocatoria=' + idConvocatoria;
  
    // Redirigir a la nueva página
    window.location.href = url;
  }
  