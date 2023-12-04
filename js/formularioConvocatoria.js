var boton = document.getElementById("enviar");

function desactivarEdicion(checkbox) {

    if(checkbox.parentNode.parentNode.childNodes[3].id==2){
        mostrarTabla(checkbox);
    }
    var fila = checkbox.parentNode.parentNode;
    var inputs = fila.getElementsByTagName('input'); 
    for (var i = 1; i < inputs.length; i++) {
            inputs[i].disabled = !checkbox.checked;
            inputs[1].disabled = true;
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

boton.onclick = function () {
    activarId();
}

function activarId(){
   var ids= document.getElementsByClassName("id");
    for (let i = 0; i < ids.length; i++) {
        checkbox=document.getElementById("seleccionar"+(i+1));
        ids[i].firstChild.disabled = !checkbox.checked ;
    }
}