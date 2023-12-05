<?php

class DestinatarioRepository {

    public static function arrayDestinatarios($objetos) {
        $arrayDestinatarios = array();

        foreach ($objetos as $array) {
            array_push($arrayDestinatarios, DestinatarioRepository::crearDestinatario($array->codigoGrupo, $array->nombre));
        }

        return $arrayDestinatarios;
    }

    public static function crearDestinatario($codigoGrupo, $nombre) {
        return new Destinatario($codigoGrupo, $nombre);
    }

    public static function añadirDestinatario($conexion,$destinatario) {
        $preparedConexion = $conexion->prepare("INSERT INTO destinatario (codigoGrupo, nombre) VALUES (:codigoGrupo, :nombre)");

        $codigoGrupo = $destinatario->getCodigoGrupo();
        $nombre = $destinatario->getNombre();

        $preparedConexion->bindParam(':codigoGrupo', $codigoGrupo);
        $preparedConexion->bindParam(':nombre', $nombre);

        $preparedConexion->execute();
    }

    public static function borrarDestinatario($conexion,$codigoGrupo) {
        $preparedConexion = $conexion->prepare("DELETE FROM destinatario WHERE codigoGrupo = :codigoGrupo");

        $preparedConexion->bindParam(':codigoGrupo', $codigoGrupo);

        $preparedConexion->execute();
    }
}

?>
