<?php

class TutorLegal {
    private $dniTutor;
    private $ap1Tutor;
    private $ap2Tutor;
    private $nombreTutor;
    private $telefonoTutor;
    private $domicilioTutor;

    public function __construct($dniTutor, $ap1Tutor, $ap2Tutor, $nombreTutor, $telefonoTutor, $domicilioTutor) {
        $this->dniTutor = $dniTutor;
        $this->ap1Tutor = $ap1Tutor;
        $this->ap2Tutor = $ap2Tutor;
        $this->nombreTutor = $nombreTutor;
        $this->telefonoTutor = $telefonoTutor;
        $this->domicilioTutor = $domicilioTutor;
    }

    public function getDniTutor() {
        return $this->dniTutor;
    }

    public function setDniTutor($dniTutor) {
        $this->dniTutor = $dniTutor;
    }

    public function getAp1Tutor() {
        return $this->ap1Tutor;
    }

    public function setAp1Tutor($ap1Tutor) {
        $this->ap1Tutor = $ap1Tutor;
    }

    public function getAp2Tutor() {
        return $this->ap2Tutor;
    }

    public function setAp2Tutor($ap2Tutor) {
        $this->ap2Tutor = $ap2Tutor;
    }

    public function getNombreTutor() {
        return $this->nombreTutor;
    }

    public function setNombreTutor($nombreTutor) {
        $this->nombreTutor = $nombreTutor;
    }

    public function getTelefonoTutor() {
        return $this->telefonoTutor;
    }

    public function setTelefonoTutor($telefonoTutor) {
        $this->telefonoTutor = $telefonoTutor;
    }

    public function getDomicilioTutor() {
        return $this->domicilioTutor;
    }

    public function setDomicilioTutor($domicilioTutor) {
        $this->domicilioTutor = $domicilioTutor;
    }
}

?>
