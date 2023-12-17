<?php
class convocatoriaRepository {
    public static function arrayConvocatorias($objetos) {
        $arrayConvocatorias = array();

        foreach ($objetos as $array) {
            array_push($arrayConvocatorias, convocatoriaRepository::crearConvocatoria($array->idConvocatoria, $array->movilidades, $array->tipo, $array->fechaInicioSolicitud, $array->fechaFinSolicitud, $array->fechaInicioPrueba, $array->fechaFinPrueba, $array->fechaListadoProvisional, $array->fechaListadoDefinitivo, $array->idProyecto, $array->destino));
        }

        return $arrayConvocatorias;
    }
    public static function crearConvocatoria($idConvocatoria, $movilidades, $tipo, $fechaInicioSolicitud, $fechaFinSolicitud, $fechaInicioPrueba, $fechaFinPrueba, $fechaListadoProvisional, $fechaListadoDefinitivo, $idProyecto, $destino) {
        $convocatoria = new Convocatoria($idConvocatoria, $movilidades, $tipo, $fechaInicioSolicitud, $fechaFinSolicitud, $fechaInicioPrueba, $fechaFinPrueba, $fechaListadoProvisional, $fechaListadoDefinitivo, $idProyecto, $destino);
        return $convocatoria;
    }
    

    public static function añadirConvocatoria($conexion, $convocatoria) {
        $preparedConexion = $conexion->prepare("INSERT INTO Convocatoria (idConvocatoria, movilidades, tipo, fechaInicioSolicitud, fechaFinSolicitud, fechaInicioPrueba, fechaFinPrueba, fechaListadoProvisional, fechaListadoDefinitivo, idProyecto, destino)
        VALUES (NULL, :movilidades, :tipo, :fechaInicioSolicitud, :fechaFinSolicitud, :fechaInicioPrueba, :fechaFinPrueba, :fechaListadoProvisional, :fechaListadoDefinitivo, :idProyecto, :destino)");

        $movilidades = $convocatoria->getMovilidades();
        $tipo = $convocatoria->getTipo();
        $fechaInicioSolicitud = $convocatoria->getFechaInicioSolicitud();
        $fechaFinSolicitud = $convocatoria->getFechaFinSolicitud();
        $fechaInicioPrueba = $convocatoria->getFechaInicioPrueba();
        $fechaFinPrueba = $convocatoria->getFechaFinPrueba();
        $fechaListadoProvisional = $convocatoria->getFechaListadoProvisional();
        $fechaListadoDefinitivo = $convocatoria->getFechaListadoDefinitivo();
        $idProyecto = $convocatoria->getIdProyecto();
        $destino = $convocatoria->getDestino();

        $preparedConexion->bindParam(':movilidades', $movilidades);
        $preparedConexion->bindParam(':tipo', $tipo);
        $preparedConexion->bindParam(':fechaInicioSolicitud', $fechaInicioSolicitud);
        $preparedConexion->bindParam(':fechaFinSolicitud', $fechaFinSolicitud);
        $preparedConexion->bindParam(':fechaInicioPrueba', $fechaInicioPrueba);
        $preparedConexion->bindParam(':fechaFinPrueba', $fechaFinPrueba);
        $preparedConexion->bindParam(':fechaListadoProvisional', $fechaListadoProvisional);
        $preparedConexion->bindParam(':fechaListadoDefinitivo', $fechaListadoDefinitivo);
        $preparedConexion->bindParam(':idProyecto', $idProyecto);
        $preparedConexion->bindParam(':destino', $destino);

        $preparedConexion->execute();
    }

    public static function borrarConvocatoria($conexion, $idConvocatoria) {
        $preparedConexion = $conexion->prepare("DELETE FROM Convocatoria WHERE idConvocatoria = :idConvocatoria");

        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);

        $preparedConexion->execute();
    }

    public static function obtenerConvocatoriaPorId($conexion, $idConvocatoria) {
        $preparedConexion = $conexion->prepare("SELECT * FROM convocatoria WHERE idConvocatoria= :idConvocatoria");
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);

        $preparedConexion->execute();
        $destinatariosConvocatoria = array();

        $destinatariosConvocatoria = $preparedConexion->fetchAll(PDO::FETCH_OBJ);
        
        return convocatoriaRepository::arrayConvocatorias($destinatariosConvocatoria);
    }
    
    public static function editarMovilidades($conexion, $idConvocatoria, $nuevoMovilidades) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET movilidades = :movilidades WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':movilidades', $nuevoMovilidades);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarTipo($conexion, $idConvocatoria, $nuevoTipo) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET tipo = :tipo WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':tipo', $nuevoTipo);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarFechaInicioSolicitud($conexion, $idConvocatoria, $nuevaFechaInicioSolicitud) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET fechaInicioSolicitud = :fechaInicioSolicitud WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':fechaInicioSolicitud', $nuevaFechaInicioSolicitud);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarFechaFinSolicitud($conexion, $idConvocatoria, $nuevaFechaFinSolicitud) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET fechaFinSolicitud = :fechaFinSolicitud WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':fechaFinSolicitud', $nuevaFechaFinSolicitud);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarFechaInicioPrueba($conexion, $idConvocatoria, $nuevaFechaInicioPrueba) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET fechaInicioPrueba = :fechaInicioPrueba WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':fechaInicioPrueba', $nuevaFechaInicioPrueba);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarFechaFinPrueba($conexion, $idConvocatoria, $nuevaFechaFinPrueba) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET fechaFinPrueba = :fechaFinPrueba WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':fechaFinPrueba', $nuevaFechaFinPrueba);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarFechaListadoProvisional($conexion, $idConvocatoria, $nuevaFechaListadoProvisional) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET fechaListadoProvisional = :fechaListadoProvisional WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':fechaListadoProvisional', $nuevaFechaListadoProvisional);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarFechaListadoDefinitivo($conexion, $idConvocatoria, $nuevaFechaListadoDefinitivo) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET fechaListadoDefinitivo = :fechaListadoDefinitivo WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':fechaListadoDefinitivo', $nuevaFechaListadoDefinitivo);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarIdProyecto($conexion, $idConvocatoria, $nuevoIdProyecto) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET idProyecto = :idProyecto WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':idProyecto', $nuevoIdProyecto);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }

    public static function editarDestino($conexion, $idConvocatoria, $nuevoDestino) {
        $preparedConexion = $conexion->prepare("UPDATE Convocatoria SET destino = :destino WHERE idConvocatoria = :idConvocatoria");
        $preparedConexion->bindParam(':destino', $nuevoDestino);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->execute();
    }
    
}

?>
