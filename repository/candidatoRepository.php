<?php

class candidatoRepository {

    public static function añadirCandidato($conexion,$candidato) {
        $preparedConexion = $conexion->prepare("INSERT INTO candidatos (dniCandidato, fechanacCandidato, dniTutor, ap1Candidato, ap2Candidato, nombreCandidato, curso, telefonoCandidato, correoCandidato, domicilioCandidato, contraseñaCandidato) VALUES
         (:dniCandidato, :fechanacCandidato, :dniTutor, :ap1Candidato, :ap2Candidato, :nombreCandidato, :curso, :telefonoCandidato, :correoCandidato, :domicilioCandidato, :contrasenaCandidato)");

        $dniCandidato = $candidato->getDniCandidato();
        $fechaNac = $candidato->getFechanacCandidato();
        $dniTutor = $candidato->getDniTutor();
        $ap1 = $candidato->getAp1Candidato();
        $ap2 = $candidato->getAp2Candidato();
        $nombre = $candidato->getNombreCandidato();
        $curso = $candidato->getCurso();
        $telefono = $candidato->getTelefonoCandidato();
        $correo = $candidato->getCorreoCandidato();
        $domicilio = $candidato->getDomicilioCandidato();
        $contraseña = $candidato->getContraseñaCandidato();

        $preparedConexion->bindParam(':dniCandidato', $dniCandidato );
        $preparedConexion->bindParam(':fechanacCandidato', $fechaNac);
        $preparedConexion->bindParam(':dniTutor', $dniTutor);
        $preparedConexion->bindParam(':ap1Candidato', $ap1);
        $preparedConexion->bindParam(':ap2Candidato', $ap2);
        $preparedConexion->bindParam(':nombreCandidato', $nombre);
        $preparedConexion->bindParam(':curso', $curso);
        $preparedConexion->bindParam(':telefonoCandidato', $telefono);
        $preparedConexion->bindParam(':correoCandidato', $correo);
        $preparedConexion->bindParam(':domicilioCandidato', $domicilio);
        $preparedConexion->bindParam(':contrasenaCandidato', $contraseña);

        $preparedConexion->execute();
    }

    public static function borrarCandidato($conexion,$dniCandidato) {
        $preparedConexion = $conexion->prepare("DELETE FROM candidatos WHERE dniCandidato = :dniCandidato");

        $preparedConexion->bindParam(':dniCandidato', $dniCandidato);

        $preparedConexion->execute();
    }

    public static function arrayCandidatos($objetos) {
        $arrayCandidatos = array();

        foreach ($objetos as $array) {
            array_push($arrayCandidatos, CandidatoRepository::crearCandidato($array->dniCandidato, $array->fechanacCandidato, $array->dniTutor, $array->ap1Candidato, $array->ap2Candidato, $array->nombreCandidato, $array->curso, $array->telefonoCandidato, $array->correoCandidato, $array->domicilioCandidato, $array->contraseñaCandidato));
        }

        return $arrayCandidatos;
    }

    public static function crearCandidato($dniCandidato, $fechanacCandidato, $dniTutor, $ap1Candidato, $ap2Candidato, $nombreCandidato, $curso, $telefonoCandidato, $correoCandidato, $domicilioCandidato, $contraseñaCandidato) {
        return new Candidato($dniCandidato, $fechanacCandidato, $dniTutor, $ap1Candidato, $ap2Candidato, $nombreCandidato, $curso, $telefonoCandidato, $correoCandidato, $domicilioCandidato, $contraseñaCandidato);
    }
}

?>