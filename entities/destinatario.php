<?php

class Destinatario {
    private $codigoGrupo;
    private $nombre;

    public function __construct($codigoGrupo, $nombre) {
        $this->codigoGrupo = $codigoGrupo;
        $this->nombre = $nombre;
    }

    public function getCodigoGrupo() {
        return $this->codigoGrupo;
    }

    public function setCodigoGrupo($codigoGrupo) {
        $this->codigoGrupo = $codigoGrupo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

?>
