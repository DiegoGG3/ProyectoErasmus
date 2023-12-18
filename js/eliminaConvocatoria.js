
  function eliminarConvocatoria(button) {
    var formulario = new FormData();
    formulario.append("idConvocatoria",button.parentNode.parentNode.childNodes[1].id);
  
    fetch('./api/eliminarConvocatoria.php', {
      method: 'POST',
      body: formulario
    })
    .then(response => response.text())
    .then(data => {
      location.reload();
  });
  }
  