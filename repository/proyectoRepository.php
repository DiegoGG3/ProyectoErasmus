<?php
class proyectoRepository{
    public static function crearProyecto($idProyecto, $nombreProyecto, $fechaInicio, $fechaFin) {
        $proyecto = new Proyecto($idProyecto, $nombreProyecto, $fechaInicio, $fechaFin);
        return $proyecto;
    }

    public static function arrayProyecto($objetos) {
        $arrayProyectos = array();
        foreach ($objetos as $array) {
            array_push($arrayProyectos, proyectoRepository::crearProyecto($array->idProyecto, $array->nombreProyecto, $array->fechaInicio, $array->fechaFin));
        }
        return $arrayProyectos;
    }


    public static function añadirProyecto($conexion,$proyecto) {
        $preparedConexion = $conexion->prepare("INSERT INTO Proyecto(idProyecto, nombreProyecto, fechaInicio, fechaFin)
        VALUES ('', :nombreProyecto, :fechaInicio, :fechaFin)");

        $nombreProyecto = $proyecto->get_nombreProyecto();
        $fechaInicio = $proyecto->get_fechaInicio();
        $fechaFin = $proyecto->get_fechaFin();

        $preparedConexion->bindParam(':nombreProyecto', $nombreProyecto);
        $preparedConexion->bindParam(':fechaInicio', $fechaInicio);
        $preparedConexion->bindParam(':fechaFin', $fechaFin);

        $preparedConexion->execute();
    }

    public static function borrarProyecto($conexion,$idProyecto) {
        $preparedConexion = $conexion->prepare("DELETE FROM Proyecto WHERE idProyecto = :idProyecto");

        $preparedConexion->bindParam(':idProyecto', $idProyecto);

        $preparedConexion->execute();
    }
    
}
?>