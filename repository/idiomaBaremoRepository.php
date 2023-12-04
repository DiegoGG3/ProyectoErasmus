<?php
class IdiomaBaremoRepository {

    public static function arrayIdiomasBaremo($objetos) {
        $arrayIdiomasBaremo = array();

        foreach ($objetos as $array) {
            array_push($arrayIdiomasBaremo, IdiomaBaremoRepository::crearIdiomaBaremo($array->idIdiomaBaremo,$array->idConvocatoria, $array->nivel, $array->nota));
        }

        return $arrayIdiomasBaremo;
    }

    public static function crearIdiomaBaremo($idIdiomaBaremo, $idConvocatoria,$nivel, $nota) {
        $idiomaBaremo = new IdiomaBaremo($idIdiomaBaremo,$idConvocatoria, $nivel, $nota);
        return $idiomaBaremo;
    }


        public static function añadirIdiomaBaremo($conexion, $idiomaBaremo) {
            $preparedConexion = $conexion->prepare("INSERT INTO idiomaBaremo (idIdiomaBaremo, idConvocatoria,nivel, nota)
            VALUES (NULL,:idConvocatoria ,:nivel, :nota)");
    
            $idConvocatoria = $idiomaBaremo->get_idConvocatoria();
            $nivel = $idiomaBaremo->get_nivel();
            $nota = $idiomaBaremo->get_nota();
    
            $preparedConexion->bindParam(':idConvocatoria', $idConvocatoria);

            $preparedConexion->bindParam(':nivel', $nivel);
            $preparedConexion->bindParam(':nota', $nota);
    
            $preparedConexion->execute();
        }
    
        // Otros métodos adaptados
    
    
}

?>