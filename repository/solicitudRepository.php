<?php
class SolicitudRepository {
 

    public static function añadirSolicitud($conexion,$solicitud) {
        $preparedConexion = $conexion->prepare("INSERT INTO solicitud (dniCandidato, idConvocatoria, destinatario, telefono, email, domicilio) VALUES (:dniCandidato, :idConvocatoria, :destinatario, :telefono, :email, :domicilio)");

        $dni = $solicitud->getDniCandidato();
        $IdConvocatoria = $solicitud->getIdConvocatoria();
        $idDestinatario = $solicitud->getDestinatario();
        $tlf = $solicitud->getTelefono();
        $gmail = $solicitud->getEmail();
        $domicilio = $solicitud->getDomicilio();


        $preparedConexion->bindParam(':dniCandidato', $dni);
        $preparedConexion->bindParam(':idConvocatoria', $IdConvocatoria);
        $preparedConexion->bindParam(':destinatario', $idDestinatario);
        $preparedConexion->bindParam(':telefono', $tlf);
        $preparedConexion->bindParam(':email', $gmail);
        $preparedConexion->bindParam(':domicilio', $domicilio);

        $preparedConexion->execute();
    }

    public static function borrarSolicitud($conexion, $idSolicitud) {
        $preparedConexion = $conexion->prepare("DELETE FROM solicitud WHERE idSolicitud = :idSolicitud");

        $preparedConexion->bindParam(':idSolicitud', $idSolicitud);

        $preparedConexion->execute();
    }


    public static function arraySolicitudes($objetos) {
        $arraySolicitudes = array();

        foreach ($objetos as $array) {
            array_push($arraySolicitudes, SolicitudRepository::crearSolicitud($array->idSolicitud, $array->dniCandidato, $array->idConvocatoria, $array->destinatario, $array->telefono, $array->email, $array->domicilio));
        }

        return $arraySolicitudes;
    }

    public static function crearSolicitud($idSolicitud, $dniCandidato, $idConvocatoria, $destinatario, $telefono, $email, $domicilio) {
        return new Solicitud($idSolicitud, $dniCandidato, $idConvocatoria, $destinatario, $telefono, $email, $domicilio);
    }
}

?>