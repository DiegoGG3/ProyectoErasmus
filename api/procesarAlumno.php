<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();
$candidato = CandidatoRepository::crearCandidato(
    $_POST["dniCandidato"],
    $_POST["fechanacCandidato"],
    $_POST["dniTutor"],
    $_POST["ap1Candidato"],
    $_POST["ap2Candidato"],
    $_POST["nombreCandidato"],
    $_POST["curso"],
    $_POST["telefonoCandidato"],
    $_POST["correoCandidato"],
    $_POST["domicilioCandidato"],
    $_POST["repetirContraseña"]
);

try {
    $conexion->beginTransaction();
    candidatoRepository::añadirCandidato($conexion, $candidato);
    $conexion->commit();
} catch (Exception $e) {
    $conexion->rollback();
    print "Error!: No se pudo guardar el candidato</br>";
}

header("Location: ../index.php");


?>