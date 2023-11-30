<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();

$convocatoria= convocatoriaRepository::crearConvocatoria("",$_POST["movilidades"],
$_POST["tipo"],$_POST["fechaInicioSolicitud"],$_POST["fechaFinSolicitud"],$_POST["fechaInicioPrueba"]
,$_POST["fechaFinPrueba"],$_POST["fechaListadoProvisional"],$_POST["fechaListadoDefinitivo"],$_POST["idProyecto"],$_POST["destino"]);
var_dump($convocatoria);

convocatoriaRepository::añadirConvocatoria($conexion,$convocatoria);

?>