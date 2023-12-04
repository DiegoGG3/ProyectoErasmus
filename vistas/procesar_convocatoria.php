<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();

var_dump($_POST);
$convocatoria= convocatoriaRepository::crearConvocatoria("",$_POST["movilidades"],
$_POST["tipo"],$_POST["fechaInicioSolicitud"],$_POST["fechaFinSolicitud"],$_POST["fechaInicioPrueba"]
,$_POST["fechaFinPrueba"],$_POST["fechaListadoProvisional"],$_POST["fechaListadoDefinitivo"],$_POST["idProyecto"],$_POST["destino"]);

try {
    $conexion->beginTransaction();
    convocatoriaRepository::añadirConvocatoria($conexion,$convocatoria);

    $idConvocatoia=$conexion->lastInsertId();
        $convocatoriaBaremo= convocatoriaBaremoRepository::crearConvocatoriaBaremo("",$idConvocatoia,
        $_POST["idBaremo1"],$_POST["obligatorio1"],$_POST["min1"],$_POST["max1"]
        ,$_POST["aportado1"]);
        
        convocatoriaBaremoRepository::añadirConvocatoria($conexion, $convocatoriaBaremo);
    
    $conexion->commit();
} catch(Exception $e) {

    $conexion->rollback();

    print "Error!: No se pudo guardar la convocatoria</br>";

}
?>