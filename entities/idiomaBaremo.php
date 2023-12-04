<?php
class IdiomaBaremo {
    private $idIdiomaBaremo;
    private $idConvocatoria;

    private $nivel;
    private $nota;

    public function __construct($idIdiomaBaremo,$idConvocatoria, $nivel, $nota) {
        $this->idIdiomaBaremo = $idIdiomaBaremo;
        $this->idConvocatoria = $idConvocatoria;

        $this->nivel = $nivel;
        $this->nota = $nota;
    }

    public function get_idIdiomaBaremo() {
        return $this->idIdiomaBaremo;
    }

    public function get_idConvocatoria() {
        return $this->idConvocatoria;
    }

    public function get_nivel() {
        return $this->nivel;
    }

    public function get_nota() {
        return $this->nota;
    }
}

?>