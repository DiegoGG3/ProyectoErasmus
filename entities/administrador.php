<?php

class Administrador {
    private $dniAdministrador;
    private $ap1Administrador;
    private $fechaNacAdministrador;
    private $ap2Administrador;
    private $nombreAdministrador;
    private $telefonoAdministrador;
    private $correoAdministrador;
    private $domicilioAdministrador;
    private $contraseñaAdministrador;

    public function __construct($dniAdministrador, $ap1Administrador, $fechaNacAdministrador, $ap2Administrador, $nombreAdministrador, $telefonoAdministrador, $correoAdministrador, $domicilioAdministrador, $contraseñaAdministrador) {
        $this->dniAdministrador = $dniAdministrador;
        $this->ap1Administrador = $ap1Administrador;
        $this->fechaNacAdministrador = $fechaNacAdministrador;
        $this->ap2Administrador = $ap2Administrador;
        $this->nombreAdministrador = $nombreAdministrador;
        $this->telefonoAdministrador = $telefonoAdministrador;
        $this->correoAdministrador = $correoAdministrador;
        $this->domicilioAdministrador = $domicilioAdministrador;
        $this->contraseñaAdministrador = $contraseñaAdministrador;
    }

    public function getDniAdministrador() {
        return $this->dniAdministrador;
    }

    public function setDniAdministrador($dniAdministrador) {
        $this->dniAdministrador = $dniAdministrador;
    }

    public function getAp1Administrador() {
        return $this->ap1Administrador;
    }

    public function setAp1Administrador($ap1Administrador) {
        $this->ap1Administrador = $ap1Administrador;
    }

    public function getFechaNacAdministrador() {
        return $this->fechaNacAdministrador;
    }

    public function setFechaNacAdministrador($fechaNacAdministrador) {
        $this->fechaNacAdministrador = $fechaNacAdministrador;
    }

    public function getAp2Administrador() {
        return $this->ap2Administrador;
    }

    public function setAp2Administrador($ap2Administrador) {
        $this->ap2Administrador = $ap2Administrador;
    }

    public function getNombreAdministrador() {
        return $this->nombreAdministrador;
    }

    public function setNombreAdministrador($nombreAdministrador) {
        $this->nombreAdministrador = $nombreAdministrador;
    }

    public function getTelefonoAdministrador() {
        return $this->telefonoAdministrador;
    }

    public function setTelefonoAdministrador($telefonoAdministrador) {
        $this->telefonoAdministrador = $telefonoAdministrador;
    }

    public function getCorreoAdministrador() {
        return $this->correoAdministrador;
    }

    public function setCorreoAdministrador($correoAdministrador) {
        $this->correoAdministrador = $correoAdministrador;
    }

    public function getDomicilioAdministrador() {
        return $this->domicilioAdministrador;
    }

    public function setDomicilioAdministrador($domicilioAdministrador) {
        $this->domicilioAdministrador = $domicilioAdministrador;
    }

    public function getContraseñaAdministrador() {
        return $this->contraseñaAdministrador;
    }

    public function setContraseñaAdministrador($contraseñaAdministrador) {
        $this->contraseñaAdministrador = $contraseñaAdministrador;
    }
}

?>
