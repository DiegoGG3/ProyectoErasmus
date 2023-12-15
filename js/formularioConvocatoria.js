// Obtener el elemento del botón con el id "enviar"
var boton = document.getElementById("enviar");

// Función para desactivar la edición de una fila según el estado del checkbox
function desactivarEdicion(checkbox) {
    // Verificar si la fila tiene un ID igual a 2 y mostrar la tabla adicional si es necesario
    if (checkbox.parentNode.parentNode.childNodes[3].id == 2) {
        mostrarTabla(checkbox);
    }

    // Obtener la fila actual
    var fila = checkbox.parentNode.parentNode;

    // Obtener todos los elementos de entrada (inputs) dentro de la fila
    var inputs = fila.getElementsByTagName('input');

    // Iterar sobre los elementos de entrada y desactivarlos si el checkbox no está marcado
    for (var i = 1; i < inputs.length; i++) {
        inputs[i].disabled = !checkbox.checked;
        inputs[1].disabled = true; // Desactivar el segundo input independientemente del estado del checkbox
    }
}

// Función para mostrar u ocultar una tabla adicional según el estado del checkbox
function mostrarTabla(checkbox) {
    var tablaAdicional = document.getElementById('tablaAdicional2');

    if (checkbox.checked) {
        tablaAdicional.style.display = 'block';
    } else {
        tablaAdicional.style.display = 'none';
    }
}

// Asignar la función activarId al hacer clic en el botón con el id "enviar"
boton.onclick = function () {
    activarId();
}

// Función para activar o desactivar el campo ID según el estado del checkbox
function activarId() {
    // Obtener todos los elementos con la clase "id"
    var ids = document.getElementsByClassName("id");

    // Iterar sobre los elementos con la clase "id"
    for (let i = 0; i < ids.length; i++) {
        // Obtener el checkbox correspondiente a la fila actual
        var checkbox = document.getElementById("seleccionar" + (i + 1));

        // Desactivar o activar el campo ID según el estado del checkbox
        ids[i].firstChild.disabled = !checkbox.checked;
    }
}
