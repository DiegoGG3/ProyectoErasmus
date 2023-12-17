<?php
var_dump($_POST);
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();

try {
    $conexion->beginTransaction();
    convocatoriaRepository::editarMovilidades($conexion, $_POST["idConvocatoria"], $_POST["movilidades"]);
    convocatoriaRepository::editarTipo($conexion, $_POST["idConvocatoria"], $_POST["tipo"]);
    convocatoriaRepository::editarFechaInicioSolicitud($conexion, $_POST["idConvocatoria"], $_POST["FechaInicioSolicitud"]);
    convocatoriaRepository::editarFechaFinSolicitud($conexion, $_POST["idConvocatoria"], $_POST["FechaFinSolicitud"]);
    convocatoriaRepository::editarFechaInicioPrueba($conexion, $_POST["idConvocatoria"], $_POST["FechaInicioPrueba"]);
    convocatoriaRepository::editarFechaFinPrueba($conexion, $_POST["idConvocatoria"], $_POST["FechaFinPrueba"]);
    convocatoriaRepository::editarFechaListadoProvisional($conexion, $_POST["idConvocatoria"], $_POST["FechaListadoProvisional"]);
    convocatoriaRepository::editarFechaListadoDefinitivo($conexion, $_POST["idConvocatoria"], $_POST["FechaListadoDefinitivo"]);
    convocatoriaRepository::editarDestino($conexion, $_POST["idConvocatoria"], $_POST["destino"]);
    $conexion->commit();


} catch (Exception $e) {
    $conexion->rollback();
    print "Error!: No se pudo guardar la convocatoria</br>";
}
