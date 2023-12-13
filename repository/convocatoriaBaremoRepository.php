<?php
class convocatoriaBaremoRepository{
    public static function arrayConvocatoriaBaremo($objetos) {
        $arrayConvocatorias = array();

        foreach ($objetos as $array) {
            array_push($arrayConvocatorias, convocatoriaBaremoRepository::crearConvocatoriaBaremo($array->idConvocatoria, $array->idConvocatoria, $array->idBaremo, $array->requisito, $array->VALOR_MIN, $array->VALOR_MAX, $array->presentaUser));
        }

        return $arrayConvocatorias;
    }

    public static function crearConvocatoriaBaremo($idConvocatoriaBaremo, $idConvocatoria, $idBaremo, $requisito, $VALOR_MIN, $VALOR_MAX, $presentaUser) {
        $convocatoria = new convocatoriaBaremo($idConvocatoriaBaremo, $idConvocatoria, $idBaremo, $requisito, $VALOR_MIN, $VALOR_MAX, $presentaUser);
        return $convocatoria;
    }

    public static function añadirConvocatoria($conexion, $convocatoriaBaremo) {
        $preparedConexion = $conexion->prepare("INSERT INTO convocatoriaBaremo (idConvocatoriaBaremo, idConvocatoria, idBaremo, requisito, VALOR_MIN, VALOR_MAX, presentaUser)
        VALUES (NULL, :idConvocatoria, :idBaremo, :requisito, :VALOR_MIN, :VALOR_MAX, :presentaUser)");

        $idConvocatoria = $convocatoriaBaremo->getIdConvocatoria();
        $idBaremo = $convocatoriaBaremo->getIdBaremo();
        $requisito = $convocatoriaBaremo->getRequisito();
        $VALOR_MIN = $convocatoriaBaremo->getValorMin();
        $VALOR_MAX = $convocatoriaBaremo->getValorMax();
        $presentaUser = $convocatoriaBaremo->getPresentaUser();

        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->bindParam(':idBaremo', $idBaremo);
        $preparedConexion->bindParam(':requisito', $requisito);
        $preparedConexion->bindParam(':VALOR_MIN', $VALOR_MIN);
        $preparedConexion->bindParam(':VALOR_MAX', $VALOR_MAX);
        $preparedConexion->bindParam(':presentaUser', $presentaUser);

        $preparedConexion->execute();
    }

    public static function obtenerConvocatoriaBaremoId($conexion, $idConvocatoria) {
        $preparedConexion = $conexion->prepare("SELECT * FROM convocatoriaBaremo WHERE idConvocatoria= :idConvocatoria");
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);

        $preparedConexion->execute();
        $soliciudes = array();

        $soliciudes = $preparedConexion->fetchAll(PDO::FETCH_OBJ);
        
        return convocatoriaBaremoRepository::arrayConvocatoriaBaremo($soliciudes);
    }
}
?>