<?php

class Baremacion {
    private $idBaremacion;
    private $idItem;
    private $nota;
    private $entregaCandidato;
    private $url;

    public function __construct($idBaremacion, $idItem, $nota, $entregaCandidato, $url) {
        $this->idBaremacion = $idBaremacion;
        $this->idItem = $idItem;
        $this->nota = $nota;
        $this->entregaCandidato = $entregaCandidato;
        $this->url = $url;
    }

    public function getIdBaremacion() {
        return $this->idBaremacion;
    }

    public function setIdBaremacion($idBaremacion) {
        $this->idBaremacion = $idBaremacion;
    }

    public function getIdItem() {
        return $this->idItem;
    }

    public function setIdItem($idItem) {
        $this->idItem = $idItem;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function getEntregaCandidato() {
        return $this->entregaCandidato;
    }

    public function setEntregaCandidato($entregaCandidato) {
        $this->entregaCandidato = $entregaCandidato;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
}

?>
