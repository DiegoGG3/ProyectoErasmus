<?php

class DestinatarioConvocatoria {
    private $idDestinatarioConvocatoria;
    private $idConvocatoria;
    private $idDestinatario;

    public function __construct($idDestinatarioConvocatoria, $idConvocatoria, $idDestinatario) {
        $this->idDestinatarioConvocatoria = $idDestinatarioConvocatoria;
        $this->idConvocatoria = $idConvocatoria;
        $this->idDestinatario = $idDestinatario;
    }

    public function getIdDestinatarioConvocatoria() {
        return $this->idDestinatarioConvocatoria;
    }

    public function setIdDestinatarioConvocatoria($idDestinatarioConvocatoria) {
        $this->idDestinatarioConvocatoria = $idDestinatarioConvocatoria;
    }

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getIdDestinatario() {
        return $this->idDestinatario;
    }

    public function setIdDestinatario($idDestinatario) {
        $this->idDestinatario = $idDestinatario;
    }
}

?>
