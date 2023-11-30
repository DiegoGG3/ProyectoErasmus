function desactivarEdicion(checkbox) {
    if(checkbox.parentNode.parentNode.childNodes[3].id==2){
        mostrarTabla(checkbox)
    }
    var fila = checkbox.parentNode.parentNode;
    var inputs = fila.getElementsByTagName('input'); 
    for (var i = 1; i < inputs.length; i++) {
        inputs[i].disabled = !checkbox.checked;
    }
}

function mostrarTabla(checkbox) {
    var tablaAdicional = document.getElementById('tablaAdicional2');

    if (checkbox.checked) {
        tablaAdicional.style.display = 'block';
    } else {
        tablaAdicional.style.display = 'none';
    }
}