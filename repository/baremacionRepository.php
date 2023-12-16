<?php
class BaremacionRepository {

    public static function añadirBaremacion($conexion,$baremacion) {
        $preparedConexion = $conexion->prepare("INSERT INTO baremacion (idBaremacion, idItem, nota, entregaCandidato, url) VALUES (:idBaremacion, :idItem, :nota, :entregaCandidato, :url)");

        $preparedConexion->bindParam(':idBaremacion', $baremacion->getIdBaremacion());
        $preparedConexion->bindParam(':idItem', $baremacion->getIdItem());
        $preparedConexion->bindParam(':nota', $baremacion->getNota());
        $preparedConexion->bindParam(':entregaCandidato', $baremacion->getEntregaCandidato());
        $preparedConexion->bindParam(':url', $baremacion->getUrl());

        $preparedConexion->execute();
    }

    public static function borrarBaremacion($conexion,$idBaremacion) {
        $preparedConexion = $conexion->prepare("DELETE FROM baremacion WHERE idBaremacion = :idBaremacion");

        $preparedConexion->bindParam(':idBaremacion', $idBaremacion);

        $preparedConexion->execute();
    }

    public static function arrayBaremaciones($objetos) {
        $arrayBaremaciones = array();

        foreach ($objetos as $array) {
            array_push($arrayBaremaciones, BaremacionRepository::crearBaremacion($array->idBaremacion, $array->idItem, $array->nota, $array->entregaCandidato, $array->url));
        }

        return $arrayBaremaciones;
    }

    public static function crearBaremacion($idBaremacion, $idItem, $nota, $entregaCandidato, $url) {
        return new Baremacion($idBaremacion, $idItem, $nota, $entregaCandidato, $url);
    }
}

?>