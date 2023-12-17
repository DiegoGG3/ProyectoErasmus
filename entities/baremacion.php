<?php

class Baremacion {
    private $idBaremacion;
    private $idItem;
    private $idSolicitud;
    private $nota;
    private $url;

    public function __construct($idBaremacion,$idSolicitud ,$idItem, $nota, $url) {
        $this->idBaremacion = $idBaremacion;
        $this->idSolicitud = $idSolicitud;

        $this->idItem = $idItem;
        $this->nota = $nota;
        $this->url = $url;
    }

    public function getIdBaremacion() {
        return $this->idBaremacion;
    }

    public function setidBaremacion($idBaremacion) {
        $this->idBaremacion = $idBaremacion;
    }


    public function getIdSolicitud() {
        return $this->idSolicitud;
    }

    public function setIdSolicitud($idSolicitud) {
        $this->idSolicitud = $idSolicitud;
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

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
}

?>
