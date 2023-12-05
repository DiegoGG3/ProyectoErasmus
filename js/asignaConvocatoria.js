// Oculta el modal al cargar la página
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('myModal').style.display = 'none';
});

// Funciones para abrir y cerrar el modal
function openModal() {
    document.getElementById('myModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}

// Cierra el modal si se hace clic fuera de él
window.onclick = function (event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};
