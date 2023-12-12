// asignaConvocatoria.js
function openModal(convocatoriaId) {
    // Aquí debes agregar lógica para obtener las clases asignadas y todas las clases disponibles para la convocatoriaId

    // Llenar las tablas con datos dinámicamente (puedes usar AJAX para obtener datos del servidor)
    // Ejemplo de datos estáticos:
    const clasesAsignadas = ['Clase1', 'Clase2', 'Clase3'];
    const todasLasClases = ['ClaseA', 'ClaseB', 'ClaseC'];

    llenarTabla('tablaAsignadas', clasesAsignadas);
    llenarTabla('tablaTodas', todasLasClases);

    // Abrir el modal
    document.getElementById('myModal').style.display = 'block';
}

function closeModal() {
    // Cerrar el modal
    document.getElementById('myModal').style.display = 'none';
}

function llenarTabla(tablaId, clases) {
    const tabla = document.getElementById(tablaId);
    tabla.innerHTML = ''; // Limpiar la tabla

    clases.forEach((clase) => {
        const fila = tabla.insertRow();
        const celda = fila.insertCell(0);
        celda.innerHTML = clase;
    });
}
function moverClase(desdeTablaId, haciaTablaId) {
    const desdeTabla = document.getElementById(desdeTablaId);
    const haciaTabla = document.getElementById(haciaTablaId);

    // Obtener las clases seleccionadas
    const clasesSeleccionadas = Array.from(desdeTabla.querySelectorAll('input[type=checkbox]:checked'))
        .map((checkbox) => checkbox.parentElement.parentElement.cells[0].textContent);

    // Mover las clases a la otra tabla
    llenarTabla(desdeTablaId, obtenerClasesRestantes(desdeTabla, clasesSeleccionadas));
    llenarTabla(haciaTablaId, obtenerClasesUnicas(haciaTabla, clasesSeleccionadas));
}

function obtenerClasesRestantes(tabla, clasesSeleccionadas) {
    return Array.from(tabla.rows).map((fila) => fila.cells[0].textContent)
        .filter((clase) => !clasesSeleccionadas.includes(clase));
}

function obtenerClasesUnicas(tabla, clasesSeleccionadas) {
    return clasesSeleccionadas.concat(Array.from(tabla.rows).map((fila) => fila.cells[0].textContent));
}