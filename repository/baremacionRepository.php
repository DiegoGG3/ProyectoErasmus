<?php
class BaremacionRepository {

    public static function añadirBaremacion($conexion,$baremacion) {
        $preparedConexion = $conexion->prepare("INSERT INTO baremacion (idSolicitud, idItem, nota, url) VALUES (:idSolicitud, :idItem, :nota, :url)");

        $idSolicitud = $baremacion->getIdSolicitud();
        $idItem = $baremacion->getIdItem();
        $nota = $baremacion->getNota();
        $url = $baremacion->getUrl();

        $preparedConexion->bindParam(':idSolicitud', $idSolicitud);
        $preparedConexion->bindParam(':idItem', $idItem);
        $preparedConexion->bindParam(':nota', $nota);
        $preparedConexion->bindParam(':url', $url);

        $preparedConexion->execute();
    }

    public static function borrarBaremacion($conexion,$idSolicitud) {
        $preparedConexion = $conexion->prepare("DELETE FROM baremacion WHERE idSolicitud = :idSolicitud");

        $preparedConexion->bindParam(':idSolicitud', $idSolicitud);

        $preparedConexion->execute();
    }

    public static function arrayBaremaciones($objetos) {
        $arrayBaremaciones = array();

        foreach ($objetos as $array) {
            array_push($arrayBaremaciones, BaremacionRepository::crearBaremacion($array->idBaremacion,$array->idSolicitud ,$array->idItem, $array->nota, $array->url));
        }

        return $arrayBaremaciones;
    }

    public static function crearBaremacion($idBaremacion, $idSolicitud,$idItem, $nota, $url) {
        return new Baremacion($idBaremacion, $idSolicitud,$idItem, $nota, $url);
    }
}

?>