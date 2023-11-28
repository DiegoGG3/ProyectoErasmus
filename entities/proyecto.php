<?php

class Proyecto {
    private $idProyecto;
    private $nombreProyecto;
    private $fechaInicio;
    private $fechaFin;

    public function __construct($idProyecto, $nombreProyecto, $fechaInicio, $fechaFin) {
        $this->idProyecto = $idProyecto;
        $this->nombreProyecto = $nombreProyecto;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }

    public function getIdProyecto() {
        return $this->idProyecto;
    }

    public function setIdProyecto($idProyecto) {
        $this->idProyecto = $idProyecto;
    }

    public function getNombreProyecto() {
        return $this->nombreProyecto;
    }

    public function setNombreProyecto($nombreProyecto) {
        $this->nombreProyecto = $nombreProyecto;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    public function getFechaFin() {
        return $this->fechaFin;
    }

    public function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;
    }
}

?>
