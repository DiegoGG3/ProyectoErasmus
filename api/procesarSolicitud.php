<?php

require_once "../helper/autocargar.php";
$A=($_POST);
$conexion = DB::abreConexion();
Sesion::iniciar();
$dniCandidato = $_SESSION['user']->getDniCandidato();

$solicitud = solicitudRepository::crearSolicitud(
    "",
    $dniCandidato,
    $_POST["convocatoriaId"],
    $_POST["curso"],
    $_POST["telefonoCandidato"],
    $_POST["correoCandidato"],
    $_POST["domicilioCandidato"],
    $_POST["foto"],
    ""

);

try {
    $conexion->beginTransaction();
    solicitudRepository::añadirSolicitud($conexion, $solicitud);

    $file_extension = pathinfo($_FILES['documentoIdiomas']['name'], PATHINFO_EXTENSION);
    $ruta = "../archivos/idiomas/" . $_POST['convocatoriaId'] . $_SESSION['user']->getDniCandidato() . ".pdf";
    move_uploaded_file($_FILES['documentoIdiomas']['tmp_name'], $ruta);

    $file_extension = pathinfo($_FILES['documentoNotas']['name'], PATHINFO_EXTENSION);
    $ruta = "../archivos/notas/" . $_POST['convocatoriaId'] . $_SESSION['user']->getDniCandidato() . ".pdf";
    move_uploaded_file($_FILES['documentoNotas']['tmp_name'], $ruta);

    $conexion->commit();
} catch (Exception $e) {
    $conexion->rollback();
    print "Error!: No se pudo guardar la solicitud</br>";
}
?>