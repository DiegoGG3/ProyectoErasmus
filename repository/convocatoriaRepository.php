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

        $movilidades = $convocatoria->get_movilidades();
        $tipo = $convocatoria->get_tipo();
        $fechaInicioSolicitud = $convocatoria->get_fechaInicioSolicitud();
        $fechaFinSolicitud = $convocatoria->get_fechaFinSolicitud();
        $fechaInicioPrueba = $convocatoria->get_fechaInicioPrueba();
        $fechaFinPrueba = $convocatoria->get_fechaFinPrueba();
        $fechaListadoProvisional = $convocatoria->get_fechaListadoProvisional();
        $fechaListadoDefinitivo = $convocatoria->get_fechaListadoDefinitivo();
        $idProyecto = $convocatoria->get_idProyecto();
        $destino = $convocatoria->get_destino();

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
    
    
}

?>