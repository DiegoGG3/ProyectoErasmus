<?php

class Convocatoria {
    private $idConvocatoria;
    private $movilidades;
    private $tipo;
    private $fechaInicioSolicitud;
    private $fechaFinSolicitud;
    private $fechaInicioPrueba;
    private $fechaFinPrueba;
    private $fechaListadoProvisional;
    private $fechaListadoDefinitivo;
    private $idProyecto;
    private $destino;

    public function __construct($movilidades, $tipo, $fechaInicioSolicitud, $fechaFinSolicitud, $fechaInicioPrueba, $fechaFinPrueba, $fechaListadoProvisional, $fechaListadoDefinitivo, $idProyecto, $destino) {
        $this->movilidades = $movilidades;
        $this->tipo = $tipo;
        $this->fechaInicioSolicitud = $fechaInicioSolicitud;
        $this->fechaFinSolicitud = $fechaFinSolicitud;
        $this->fechaInicioPrueba = $fechaInicioPrueba;
        $this->fechaFinPrueba = $fechaFinPrueba;
        $this->fechaListadoProvisional = $fechaListadoProvisional;
        $this->fechaListadoDefinitivo = $fechaListadoDefinitivo;
        $this->idProyecto = $idProyecto;
        $this->destino = $destino;
    }

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getMovilidades() {
        return $this->movilidades;
    }

    public function setMovilidades($movilidades) {
        $this->movilidades = $movilidades;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getFechaInicioSolicitud() {
        return $this->fechaInicioSolicitud;
    }

    public function setFechaInicioSolicitud($fechaInicioSolicitud) {
        $this->fechaInicioSolicitud = $fechaInicioSolicitud;
    }

    public function getFechaFinSolicitud() {
        return $this->fechaFinSolicitud;
    }

    public function setFechaFinSolicitud($fechaFinSolicitud) {
        $this->fechaFinSolicitud = $fechaFinSolicitud;
    }

    public function getFechaInicioPrueba() {
        return $this->fechaInicioPrueba;
    }

    public function setFechaInicioPrueba($fechaInicioPrueba) {
        $this->fechaInicioPrueba = $fechaInicioPrueba;
    }

    public function getFechaFinPrueba() {
        return $this->fechaFinPrueba;
    }

    public function setFechaFinPrueba($fechaFinPrueba) {
        $this->fechaFinPrueba = $fechaFinPrueba;
    }

    public function getFechaListadoProvisional() {
        return $this->fechaListadoProvisional;
    }

    public function setFechaListadoProvisional($fechaListadoProvisional) {
        $this->fechaListadoProvisional = $fechaListadoProvisional;
    }

    public function getFechaListadoDefinitivo() {
        return $this->fechaListadoDefinitivo;
    }

    public function setFechaListadoDefinitivo($fechaListadoDefinitivo) {
        $this->fechaListadoDefinitivo = $fechaListadoDefinitivo;
    }

    public function getIdProyecto() {
        return $this->idProyecto;
    }

    public function setIdProyecto($idProyecto) {
        $this->idProyecto = $idProyecto;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }
}

?>
