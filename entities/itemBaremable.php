<?php

class ItemBaremable {
    private $idItem;
    private $nombre;

    public function __construct($idItem, $nombre) {
        $this->idItem = $idItem;
        $this->nombre = $nombre;
    }

    public function getIdItem() {
        return $this->idItem;
    }

    public function setIdItem($idItem) {
        $this->idItem = $idItem;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

?>
