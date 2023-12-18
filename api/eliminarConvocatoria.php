<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();
$A=$_POST["idConvocatoria"];
try {
    $conexion->beginTransaction();
    $solicitudes=array();
    $solicitudes=SolicitudRepository::obtenerSolicitudConvocatoria($conexion,$_POST["idConvocatoria"]);
   
    foreach ($solicitudes as $solicitud) {
        $d=$solicitud->getIdSolicitud();
        BaremacionRepository::borrarBaremacion($conexion,$solicitud->getIdSolicitud());
        
    };
    IdiomaBaremoRepository::borrarIdiomaBaremo($conexion,$_POST["idConvocatoria"]);
    destinatarioConvocatoriaRepository::borrarDestinatarioConvocatoria($conexion,$_POST["idConvocatoria"]);
    SolicitudRepository::borrarSolicitud($conexion,$_POST["idConvocatoria"]);
    convocatoriaBaremoRepository::borrarConvocatoriaBaremo($conexion,$_POST["idConvocatoria"]);
    convocatoriaRepository::borrarConvocatoria($conexion, $_POST["idConvocatoria"]);

    $conexion->commit();
} catch (Exception $e) {
    $conexion->rollback();
    print "Error!: No se pudo borrar la convocatoria</br>";
}
