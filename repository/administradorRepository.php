<?php

class administradorRepository {

    // public static function añadirAdministrador($conexion,$Administrador) {
    //     $preparedConexion = $conexion->prepare("INSERT INTO Administrador (dniAdministrador, fechanacAdministrador, dniTutor, ap1Administrador, ap2Administrador, nombreAdministrador, curso, telefonoAdministrador, correoAdministrador, domicilioAdministrador, contraseñaAdministrador) VALUES
    //      (:dniAdministrador, :fechanacAdministrador, :dniTutor, :ap1Administrador, :ap2Administrador, :nombreAdministrador, :curso, :telefonoAdministrador, :correoAdministrador, :domicilioAdministrador, :contrasenaAdministrador)");

    //     $dniAdministrador = $Administrador->getDniAdministrador();
    //     $fechaNac = $Administrador->getFechanacAdministrador();
    //     $dniTutor = $Administrador->getDniTutor();
    //     $ap1 = $Administrador->getAp1Administrador();
    //     $ap2 = $Administrador->getAp2Administrador();
    //     $nombre = $Administrador->getNombreAdministrador();
    //     $curso = $Administrador->getCurso();
    //     $telefono = $Administrador->getTelefonoAdministrador();
    //     $correo = $Administrador->getCorreoAdministrador();
    //     $domicilio = $Administrador->getDomicilioAdministrador();
    //     $contraseña = $Administrador->getContraseñaAdministrador();

    //     $preparedConexion->bindParam(':dniAdministrador', $dniAdministrador );
    //     $preparedConexion->bindParam(':fechanacAdministrador', $fechaNac);
    //     $preparedConexion->bindParam(':dniTutor', $dniTutor);
    //     $preparedConexion->bindParam(':ap1Administrador', $ap1);
    //     $preparedConexion->bindParam(':ap2Administrador', $ap2);
    //     $preparedConexion->bindParam(':nombreAdministrador', $nombre);
    //     $preparedConexion->bindParam(':curso', $curso);
    //     $preparedConexion->bindParam(':telefonoAdministrador', $telefono);
    //     $preparedConexion->bindParam(':correoAdministrador', $correo);
    //     $preparedConexion->bindParam(':domicilioAdministrador', $domicilio);
    //     $preparedConexion->bindParam(':contrasenaAdministrador', $contraseña);

    //     $preparedConexion->execute();
    // }

    // public static function borrarAdministrador($conexion,$dniAdministrador) {
    //     $preparedConexion = $conexion->prepare("DELETE FROM Administrador WHERE dniAdministrador = :dniAdministrador");

    //     $preparedConexion->bindParam(':dniAdministrador', $dniAdministrador);

    //     $preparedConexion->execute();
    // }

    public static function arrayAdministrador($objetos) {
        $arrayAdministrador = array();

        foreach ($objetos as $array) {
            array_push($arrayAdministrador, administradorRepository::crearAdministrador($array->dniAdministrador, $array->ap1Administrador, $array->fechaNacAdministrador, $array->ap2Administrador, $array->nombreAdministrador, $array->telefonoAdministrador, $array->correoAdministrador, $array->domicilioAdministrador, $array->contraseñaAdministrador));
        }

        return $arrayAdministrador;
    }

    public static function crearAdministrador($dniAdministrador, $ap1Administrador, $fechaNacAdministrador, $ap2Administrador, $nombreAdministrador, $telefonoAdministrador, $correoAdministrador, $domicilioAdministrador, $contraseñaAdministrador) {
        return new administrador($dniAdministrador, $ap1Administrador, $fechaNacAdministrador, $ap2Administrador, $nombreAdministrador, $telefonoAdministrador, $correoAdministrador, $domicilioAdministrador, $contraseñaAdministrador);
    }
}

?>