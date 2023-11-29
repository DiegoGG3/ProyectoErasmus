<?php

class NivelIdiomas {
    private $idIdioma;
    private $nivel;
    private $idioma;

    public function __construct($idIdioma, $nivel, $idioma) {
        $this->idIdioma = $idIdioma;
        $this->nivel = $nivel;
        $this->idioma = $idioma;
    }

    public function getIdIdioma() {
        return $this->idIdioma;
    }

    public function setIdIdioma($idIdioma) {
        $this->idIdioma = $idIdioma;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }
}

?>
