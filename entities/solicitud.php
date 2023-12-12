<?php

class Solicitud {
    private $idSolicitud;
    private $dniCandidato;
    private $idConvocatoria;
    private $destinatario;
    private $telefono;
    private $email;
    private $domicilio;
    private $foto;
    private $estado;


    public function __construct($idSolicitud, $dniCandidato, $idConvocatoria, $destinatario, $telefono, $email, $domicilio, $foto ,$estado) {
        $this->idSolicitud = $idSolicitud;
        $this->dniCandidato = $dniCandidato;
        $this->idConvocatoria = $idConvocatoria;
        $this->destinatario = $destinatario;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->domicilio = $domicilio;
        $this->foto = $foto;
        $this->estado = $estado;
    }

    public function getIdSolicitud() {
        return $this->idSolicitud;
    }

    public function setIdSolicitud($idSolicitud) {
        $this->idSolicitud = $idSolicitud;
    }

    public function getDniCandidato() {
        return $this->dniCandidato;
    }

    public function setDniCandidato($dniCandidato) {
        $this->dniCandidato = $dniCandidato;
    }

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getDestinatario() {
        return $this->destinatario;
    }

    public function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}

?>
