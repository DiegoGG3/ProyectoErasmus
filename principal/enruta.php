

<main>
<div id="cuerpo">

<?php

if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "CreaConvocatoria") {
        require_once './vistas/formularioConvocatoria.php';
    } elseif ($_GET['menu'] == "iniciarSesion") {
        require_once './vistas/iniciarSesion.php';

    } elseif ($_GET['menu'] == "editarConvocatoria") {
        require_once './vistas/editarConvocatoria.php';

    } elseif ($_GET['menu'] == "Registro") {
        require_once './vistas/registraAlumno.php';

    } elseif ($_GET['menu'] == "listaConvocatoria") {
        require_once './vistas/listaConvocatoria.php';

    }elseif ($_GET['menu'] == "misConvocatorias") {
        require_once './vistas/misConvocatorias.php';

    }elseif ($_GET['menu'] == "gestionarSolicitudes") {
        require_once './vistas/gestionarSolicitudes.php';

    }elseif ($_GET['menu'] == "puntuaSolicitud") {
        require_once './vistas/puntuaSolicitud.php';

    }elseif ($_GET['menu'] == "informacion") {
        require_once './vistas/informacion.php';

    }elseif ($_GET['menu'] == "hacerSolicitud") {
        require_once './vistas/hacerSolicitud.php';
    }
    elseif ($_GET['menu'] == "quienesSomos") {
        require_once './vistas/infoBecas.php';
    }
    elseif ($_GET['menu'] == "puntuaSolicitud") {
        require_once './vistas/puntuaSolicitud.php';
    }

    elseif ($_GET['menu'] == "cambiaConvocatoria") {
        require_once './vistas/cambiaConvocatoria.php';
    }
} else {
    require_once './vistas/landinPage.php';
}
?>
</div>
</main>


    
