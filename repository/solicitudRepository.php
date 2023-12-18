<?php
class SolicitudRepository {
 

    public static function añadirSolicitud($conexion,$solicitud) {
        $preparedConexion = $conexion->prepare("INSERT INTO solicitud (dniCandidato, idConvocatoria, destinatario, telefono, email, domicilio, foto, estado) VALUES (:dniCandidato, :idConvocatoria, :destinatario, :telefono, :email, :domicilio, :foto, :estado)");

        $dni = $solicitud->getDniCandidato();
        $IdConvocatoria = $solicitud->getIdConvocatoria();
        $idDestinatario = $solicitud->getDestinatario();
        $tlf = $solicitud->getTelefono();
        $gmail = $solicitud->getEmail();
        $domicilio = $solicitud->getDomicilio();
        $foto = $solicitud->getFoto();
        $estado = "En revision";




        $preparedConexion->bindParam(':dniCandidato', $dni);
        $preparedConexion->bindParam(':idConvocatoria', $IdConvocatoria);
        $preparedConexion->bindParam(':destinatario', $idDestinatario);
        $preparedConexion->bindParam(':telefono', $tlf);
        $preparedConexion->bindParam(':email', $gmail);
        $preparedConexion->bindParam(':domicilio', $domicilio);
        $preparedConexion->bindParam(':foto', $foto);
        $preparedConexion->bindParam(':estado', $estado);


        $preparedConexion->execute();
    }

    public static function borrarSolicitud($conexion, $idConvocatoria) {
        $preparedConexion = $conexion->prepare("DELETE FROM solicitud WHERE idConvocatoria = :idConvocatoria");

        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);

        $preparedConexion->execute();
    }


    public static function arraySolicitudes($objetos) {
        $arraySolicitudes = array();

        foreach ($objetos as $array) {
            array_push($arraySolicitudes, SolicitudRepository::crearSolicitud($array->idSolicitud, $array->dniCandidato, $array->idConvocatoria, $array->destinatario, $array->telefono, $array->email, $array->domicilio, $array->foto, $array->estado));
        }

        return $arraySolicitudes;
    }

    public static function crearSolicitud($idSolicitud, $dniCandidato, $idConvocatoria, $destinatario, $telefono, $email, $domicilio,$foto, $estado) {
        return new Solicitud($idSolicitud, $dniCandidato, $idConvocatoria, $destinatario, $telefono, $email, $domicilio, $foto, $estado);
    }

    public static function obtenerSolicitudId($conexion, $dniCandidato) {
        $preparedConexion = $conexion->prepare("SELECT * FROM solicitud WHERE dniCandidato= :dniCandidato");
        $preparedConexion->bindParam(':dniCandidato', $dniCandidato);

        $preparedConexion->execute();
        $soliciudes = array();

        $soliciudes = $preparedConexion->fetchAll(PDO::FETCH_OBJ);
        
        return SolicitudRepository::arraySolicitudes($soliciudes);
    }

    public static function obtenerSolicitudConvocatoria($conexion, $idConvocatoria) {
        $preparedConexion = $conexion->prepare("SELECT * FROM solicitud WHERE idConvocatoria= :idConvocatoria");
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);

        $preparedConexion->execute();
        $soliciudes = array();

        $soliciudes = $preparedConexion->fetchAll(PDO::FETCH_OBJ);
        
        return SolicitudRepository::arraySolicitudes($soliciudes);
    }

    public static function editarEstadoSolicitud($conexion, $idSolicitud) {
        $preparedConexion = $conexion->prepare("UPDATE solicitud SET estado = 'aceptada' WHERE idSolicitud = :idSolicitud");

        $preparedConexion->bindParam(':idSolicitud', $idSolicitud);

        $preparedConexion->execute();
    }
}

?>