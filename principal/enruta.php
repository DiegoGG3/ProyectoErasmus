

<main>
<div id="cuerpo">

<?php

if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "CreaConvocatoria") {
        require_once './vistas/formularioConvocatoria.php';
    } elseif ($_GET['menu'] == "iniciarSesion") {
        require_once './vistas/iniciarSesion.php';
    } elseif ($_GET['menu'] == "asignaConvocatoria") {
        require_once './vistas/asignaConvocatoria.php';
    } elseif ($_GET['menu'] == "Registro") {
        require_once './vistas/registraAlumno.php';
    }
} else {
    require_once './vistas/landinPage.php';
}
?>
</div>
</main>


    
