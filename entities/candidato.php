<?php

class Candidato {
    private $dniCandidato;
    private $fechanacCandidato;
    private $dniTutor;
    private $ap1Candidato;
    private $ap2Candidato;
    private $nombreCandidato;
    private $curso;
    private $telefonoCandidato;
    private $correoCandidato;
    private $domicilioCandidato;
    private $contraseñaCandidato;

    public function __construct($dniCandidato, $fechanacCandidato, $dniTutor, $ap1Candidato, $ap2Candidato, $nombreCandidato, $curso, $telefonoCandidato, $correoCandidato, $domicilioCandidato, $contraseñaCandidato) {
        $this->dniCandidato = $dniCandidato;
        $this->fechanacCandidato = $fechanacCandidato;
        $this->dniTutor = $dniTutor;
        $this->ap1Candidato = $ap1Candidato;
        $this->ap2Candidato = $ap2Candidato;
        $this->nombreCandidato = $nombreCandidato;
        $this->curso = $curso;
        $this->telefonoCandidato = $telefonoCandidato;
        $this->correoCandidato = $correoCandidato;
        $this->domicilioCandidato = $domicilioCandidato;
        $this->contraseñaCandidato = $contraseñaCandidato;
    }

    public function getDniCandidato() {
        return $this->dniCandidato;
    }

    public function setDniCandidato($dniCandidato) {
        $this->dniCandidato = $dniCandidato;
    }

    public function getFechanacCandidato() {
        return $this->fechanacCandidato;
    }

    public function setFechanacCandidato($fechanacCandidato) {
        $this->fechanacCandidato = $fechanacCandidato;
    }

    public function getDniTutor() {
        return $this->dniTutor;
    }

    public function setDniTutor($dniTutor) {
        $this->dniTutor = $dniTutor;
    }

    public function getAp1Candidato() {
        return $this->ap1Candidato;
    }

    public function setAp1Candidato($ap1Candidato) {
        $this->ap1Candidato = $ap1Candidato;
    }

    public function getAp2Candidato() {
        return $this->ap2Candidato;
    }

    public function setAp2Candidato($ap2Candidato) {
        $this->ap2Candidato = $ap2Candidato;
    }

    public function getNombreCandidato() {
        return $this->nombreCandidato;
    }

    public function setNombreCandidato($nombreCandidato) {
        $this->nombreCandidato = $nombreCandidato;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getTelefonoCandidato() {
        return $this->telefonoCandidato;
    }

    public function setTelefonoCandidato($telefonoCandidato) {
        $this->telefonoCandidato = $telefonoCandidato;
    }

    public function getCorreoCandidato() {
        return $this->correoCandidato;
    }

    public function setCorreoCandidato($correoCandidato) {
        $this->correoCandidato = $correoCandidato;
    }

    public function getDomicilioCandidato() {
        return $this->domicilioCandidato;
    }

    public function setDomicilioCandidato($domicilioCandidato) {
        $this->domicilioCandidato = $domicilioCandidato;
    }

    public function getContraseñaCandidato() {
        return $this->contraseñaCandidato;
    }

    public function setContraseñaCandidato($contraseñaCandidato) {
        $this->contraseñaCandidato = $contraseñaCandidato;
    }
}

?>
