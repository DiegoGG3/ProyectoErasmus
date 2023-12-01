<?php

class ConvocatoriaBaremo {
    private $idConvocatoriaBaremo;
    private $idConvocatoria;
    private $idBaremo;
    private $requisito;
    private $valorMin;
    private $valorMax;
    private $presentaUser;

    public function __construct($idConvocatoriaBaremo, $idConvocatoria, $idBaremo, $requisito, $valorMin, $valorMax, $presentaUser) {
        $this->idConvocatoriaBaremo = $idConvocatoriaBaremo;
        $this->idConvocatoria = $idConvocatoria;
        $this->idBaremo = $idBaremo;
        $this->requisito = $requisito;
        $this->valorMin = $valorMin;
        $this->valorMax = $valorMax;
        $this->presentaUser= $presentaUser;
    }

    public function getIdConvocatoriaBaremo() {
        return $this->idConvocatoriaBaremo;
    }

    public function setIdConvocatoriaBaremo($idConvocatoriaBaremo) {
        $this->idConvocatoriaBaremo = $idConvocatoriaBaremo;
    }

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getIdBaremo() {
        return $this->idBaremo;
    }

    public function setIdBaremo($idBaremo) {
        $this->idBaremo = $idBaremo;
    }

    public function getRequisito() {
        return $this->requisito;
    }

    public function setRequisito($requisito) {
        $this->requisito = $requisito;
    }

    public function getValorMin() {
        return $this->valorMin;
    }

    public function setValorMin($valorMin) {
        $this->valorMin = $valorMin;
    }

    public function getValorMax() {
        return $this->valorMax;
    }

    public function setValorMax($valorMax) {
        $this->valorMax = $valorMax;
    }
    
    public function getPresentaUser() {
        return $this->presentaUser;
    }

    public function setPresentaUser($presentaUser) {
        $this->presentaUser = $presentaUser;
    }

}

?>
