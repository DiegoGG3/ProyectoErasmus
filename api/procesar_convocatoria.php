<?php
require_once "../helper/autocargar.php";
$conexion = DB::abreConexion();
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

    foreach ($_POST as $key => $variable) {
        switch ($key) {
            case '1ADM':
                $clase = destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria("", $idConvocatoia, "1ADM");
                destinatarioConvocatoriaRepository::añadirDestinatarioConvocatoria($conexion, $clase);
                break;
            case '1ASI':
                $clase = destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria("", $idConvocatoia, "1ASI");
                destinatarioConvocatoriaRepository::añadirDestinatarioConvocatoria($conexion, $clase);
                break;
            case '1BDS':
                $clase = destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria("", $idConvocatoia, "1BDS");
                destinatarioConvocatoriaRepository::añadirDestinatarioConvocatoria($conexion, $clase);
                break;
            case '1DAW':
                $clase = destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria("", $idConvocatoia, "1DAW");
                destinatarioConvocatoriaRepository::añadirDestinatarioConvocatoria($conexion, $clase);
                break;
            case '2DAW':
                $clase = destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria("", $idConvocatoia, "2DAW");
                destinatarioConvocatoriaRepository::añadirDestinatarioConvocatoria($conexion, $clase);
                break;
            case '1DAM':
                $clase = destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria("", $idConvocatoia, "1DAM");
                destinatarioConvocatoriaRepository::añadirDestinatarioConvocatoria($conexion, $clase);
                break;
            case '2DAM':
                $clase = destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria("", $idConvocatoia, "2DAM");
                destinatarioConvocatoriaRepository::añadirDestinatarioConvocatoria($conexion, $clase);
                break;
        }
    }

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
        } else if (isset($_POST["idBaremo" . $i], $_POST["min" . $i], $_POST["max" . $i], $_POST["obligatorio" . $i])) {
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
    IdiomaBaremoRepository::añadirIdiomaBaremo($conexion, IdiomaBaremoRepository::crearIdiomaBaremo("", $idConvocatoia, "A1", $_POST["A1"]));
    IdiomaBaremoRepository::añadirIdiomaBaremo($conexion, IdiomaBaremoRepository::crearIdiomaBaremo("", $idConvocatoia, "A2", $_POST["A2"]));
    IdiomaBaremoRepository::añadirIdiomaBaremo($conexion, IdiomaBaremoRepository::crearIdiomaBaremo("", $idConvocatoia, "B1", $_POST["B1"]));
    IdiomaBaremoRepository::añadirIdiomaBaremo($conexion, IdiomaBaremoRepository::crearIdiomaBaremo("", $idConvocatoia, "B2", $_POST["B2"]));
    IdiomaBaremoRepository::añadirIdiomaBaremo($conexion, IdiomaBaremoRepository::crearIdiomaBaremo("", $idConvocatoia, "C1", $_POST["C1"]));
    IdiomaBaremoRepository::añadirIdiomaBaremo($conexion, IdiomaBaremoRepository::crearIdiomaBaremo("", $idConvocatoia, "C2", $_POST["C2"]));


    $conexion->commit();
} catch (Exception $e) {
    $conexion->rollback();
    print "Error!: No se pudo guardar la convocatoria</br>";
}

header("Location: ../index.php");
