<?php
class itemBaremableRepository{
    
    public static function crearItemBaremable($idItem, $nombre) {
        $itemBaremable = new ItemBaremable($idItem, $nombre);
        return $itemBaremable;
    }
    
    public static function arrayItemBaremables($objetos) {
        $arrayItemBaremables = array();

        foreach ($objetos as $array) {
            array_push($arrayItemBaremables, itemBaremableRepository::crearItemBaremable($array->idItem, $array->nombre));
        }

        return $arrayItemBaremables;
    }
    public static function añadirItemBaremable($conexion, $itemBaremable) {
        $preparedConexion = $conexion->prepare("INSERT INTO itemBaremable (idItem, nombre)
        VALUES (NULL, :nombre)");

        $nombre = $itemBaremable->get_nombre();

        $preparedConexion->bindParam(':nombre', $nombre);

        $preparedConexion->execute();
    }
    public static function borrarItemBaremable($conexion, $idItem) {
        $preparedConexion = $conexion->prepare("DELETE FROM itemBaremable WHERE idItem = :idItem");

        $preparedConexion->bindParam(':idItem', $idItem);

        $preparedConexion->execute();
    }

}

?>