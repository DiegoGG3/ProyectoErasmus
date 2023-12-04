<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();

var_dump($_POST);
$convocatoria = convocatoriaRepository::crearConvocatoria(
    "",
    $_POST["movilidades"],
    $_POST["tipo"],
    $_POST["fechaInicioSolicitud"],
    $_POST["fechaFinSolicitud"],
    $_POST["fechaInicioPrueba"],
    $_POST["fechaFinPrueba"],
    $_POST["fechaListadoProvisional"],
    $_POST["fechaListadoDefinitivo"],
    $_POST["idProyecto"],
    $_POST["destino"]
);

try {
    $conexion->beginTransaction();
    convocatoriaRepository::añadirConvocatoria($conexion, $convocatoria);

    $idConvocatoia = $conexion->lastInsertId();

    for ($i = 1; $i < 5; $i++) {
        if (isset($_POST["idBaremo" . $i], $_POST["obligatorio" . $i], $_POST["min" . $i], $_POST["max" . $i], $_POST["aportado" . $i])) {
            $convocatoriaBaremo = convocatoriaBaremoRepository::crearConvocatoriaBaremo(
                "",
                $idConvocatoia,
                $_POST["idBaremo" . $i],
                $_POST["obligatorio" . $i],
                $_POST["min" . $i],
                $_POST["max" . $i],
                $_POST["aportado" . $i]
            );
            convocatoriaBaremoRepository::añadirConvocatoria($conexion, $convocatoriaBaremo);
        } else if (isset($_POST["idBaremo" . $i], $_POST["min" . $i], $_POST["max" . $i], $_POST["aportado" . $i])) {
            $convocatoriaBaremo = convocatoriaBaremoRepository::crearConvocatoriaBaremo(
                "",
                $idConvocatoia,
                $_POST["idBaremo" . $i],
                false,
                $_POST["min" . $i],
                $_POST["max" . $i],
                $_POST["aportado" . $i]
            );
            convocatoriaBaremoRepository::añadirConvocatoria($conexion, $convocatoriaBaremo);
        }else if (isset($_POST["idBaremo" . $i], $_POST["min" . $i], $_POST["max" . $i], $_POST["obligatorio" . $i])) {
            $convocatoriaBaremo = convocatoriaBaremoRepository::crearConvocatoriaBaremo(
                "",
                $idConvocatoia,
                $_POST["idBaremo" . $i],
                $_POST["obligatorio" . $i],
                $_POST["min" . $i],
                $_POST["max" . $i],
                false
            );
            convocatoriaBaremoRepository::añadirConvocatoria($conexion, $convocatoriaBaremo);
        }
    }
    $conexion->commit();
} catch (Exception $e) {
    $conexion->rollback();
    print "Error!: No se pudo guardar la convocatoria</br>";
}
