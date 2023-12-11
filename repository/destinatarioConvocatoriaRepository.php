<?php
class destinatarioConvocatoriaRepository{
    
    public static function crearDestinatarioConvocatoria($idDestinatarioConvocatoria, $idConvocatoria, $idDestinatario) {
        $destinatarioconvocatoria = new destinatarioconvocatoria($idDestinatarioConvocatoria, $idConvocatoria ,$idDestinatario);
        return $destinatarioconvocatoria;
    }
    
    public static function arrayDestinatarioConvocatoria($objetos) {
        $arrayDestinatarioConvocatoria = array();

        foreach ($objetos as $array) {
            array_push($arrayDestinatarioConvocatoria, destinatarioConvocatoriaRepository::crearDestinatarioConvocatoria($array->idDestinatarioConvocatoria, $array->idConvocatoria, $array->idDestinatario));
        }

        return $arrayDestinatarioConvocatoria;
    }

    public static function añadirDestinatarioConvocatoria($conexion, $destinatarioConvocatoria) {
        $preparedConexion = $conexion->prepare("INSERT INTO destinatarioConvocatoria (idDestinatarioConvocatoria, idConvocatoria, idDestinatario) VALUES (NULL, :idConvocatoria, :idDestinatario)");

        $idConvocatoria = $destinatarioConvocatoria->getIdConvocatoria();
        $idDestinatario = $destinatarioConvocatoria->getIdDestinatario();

        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->bindParam(':idDestinatario', $idDestinatario);

        $preparedConexion->execute();
    }

    public static function obtenerDestinatariosConvocatoriaId($conexion, $idConvocatoria) {
        $preparedConexion = $conexion->prepare("SELECT * FROM destinatarioConvocatoria WHERE idConvocatoria= :idConvocatoria");
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);

        $preparedConexion->execute();
        $destinatariosConvocatoria = array();

        $destinatariosConvocatoria = $preparedConexion->fetchAll(PDO::FETCH_OBJ);
        
        return destinatarioConvocatoriaRepository::arrayDestinatarioConvocatoria($destinatariosConvocatoria);
    }

    public static function obtenerConvocatoriaPorId($conexion, $idDestinatario) {
        $preparedConexion = $conexion->prepare("SELECT * FROM destinatarioConvocatoria WHERE idDestinatario= :idDestinatario");
        $preparedConexion->bindParam(':idDestinatario', $idDestinatario);

        $preparedConexion->execute();
        $destinatariosConvocatoria = array();

        $destinatariosConvocatoria = $preparedConexion->fetchAll(PDO::FETCH_OBJ);
        
        return destinatarioConvocatoriaRepository::arrayDestinatarioConvocatoria($destinatariosConvocatoria);
    }

}

?>