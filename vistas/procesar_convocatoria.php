<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();

$convocatoria= convocatoriaRepository::crearConvocatoria("",$_POST["movilidades"],
$_POST["tipo"],$_POST["fechaInicioSolicitud"],$_POST["fechaFinSolicitud"],$_POST["fechaInicioPrueba"]
,$_POST["fechaFinPrueba"],$_POST["fechaListadoProvisional"],$_POST["fechaListadoDefinitivo"],$_POST["idProyecto"],$_POST["destino"]);

var_dump( $_POST);
try {
    $conexion->beginTransaction();
    // convocatoriaRepository::añadirConvocatoria($conexion,$convocatoria);

    $idConvocatoia=$conexion->lastInsertId();
    for ($i=0; $i < 3; $i++) { 
        $convocatoria= convocatoriaBaremoRepository::crearConvocatoriaBaremo("",$idConvocatoia,
        $_POST["tipo"],$_POST["fechaInicioSolicitud"],$_POST["fechaFinSolicitud"],$_POST["fechaInicioPrueba"]
        ,$_POST["fechaFinPrueba"],$_POST["fechaListadoProvisional"],$_POST["fechaListadoDefinitivo"],$_POST["idProyecto"],$_POST["destino"]);
    }
    $conexion->commit();
} catch(Exception $e) {

    $conexion->rollback();

    print "Error!: No se pudo guardar la convocatoria</br>";

}
?>