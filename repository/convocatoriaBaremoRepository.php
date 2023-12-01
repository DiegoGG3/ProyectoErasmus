<?php
class convocatoriaBaremoRepository{
    
    public static function crearConvocatoriaBaremo($idConvocatoriaBaremo, $idConvocatoria, $idBaremo, $requisito, $VALOR_MIN, $VALOR_MAX, $presentaUser) {
        $convocatoria = new ConvocatoriaBaremo($idConvocatoriaBaremo, $idConvocatoria, $idBaremo, $requisito, $VALOR_MIN, $VALOR_MAX, $presentaUser);
        return $convocatoria;
    }

    public static function añadirConvocatoria($conexion, $convocatoriaBaremo) {
        $preparedConexion = $conexion->prepare("INSERT INTO convocatoriaBaremo (idConvocatoriaBaremo, idConvocatoria, idBaremo, requisito, VALOR_MIN, VALOR_MAX, presentaUser)
        VALUES (NULL, :idConvocatoriaBaremo, :idConvocatoria, :idBaremo, :requisito, :VALOR_MIN, :VALOR_MAX, :presentaUser)");

        $idConvocatoriaBaremo = $convocatoriaBaremo->getIdConvocatoriaBaremo();
        $idConvocatoria = $convocatoriaBaremo->getIdConvocatoria();
        $idBaremo = $convocatoriaBaremo->getIdBaremo();
        $requisito = $convocatoriaBaremo->getRequisito();
        $VALOR_MIN = $convocatoriaBaremo->getValotMin();
        $VALOR_MAX = $convocatoriaBaremo->getValorMax();
        $presentaUser = $convocatoriaBaremo->getPresentaUser();

        $preparedConexion->bindParam(':idConvocatoriaBaremo', $idConvocatoriaBaremo);
        $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);
        $preparedConexion->bindParam(':idBaremo', $idBaremo);
        $preparedConexion->bindParam(':requisito', $requisito);
        $preparedConexion->bindParam(':VALOR_MIN', $VALOR_MIN);
        $preparedConexion->bindParam(':VALOR_MAX', $VALOR_MAX);
        $preparedConexion->bindParam(':presentaUser', $presentaUser);

        $preparedConexion->execute();
    }
}
?>