

<main>
<div id="cuerpo">

<?php

if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "CreaConvocatoria") {
        require_once './vistas/formularioConvocatoria.php';
    }
    // if ($_GET['menu'] == "iniciarSesion") {
    //     require_once './vistas/iniciarSesion.php';
    // }
    if ($_GET['menu'] == "asignaConvocatoria") {
        require_once './vistas/asignaConvocatoria.php';     
    }
    if ($_GET['menu'] == "iniciarSesion") {
        require_once './vistas/registraAlumno.php';     
    }
}
?>
</div>
</main>


    
