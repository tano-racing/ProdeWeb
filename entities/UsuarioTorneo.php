<?php

/**
 * @Entity @Table(name="UsuarioTorneo")
 * */
class UsuarioTorneo {

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $Id;

    /**
     * @Column(type="integer")
     */
    protected $usuarioId;

    /**
     * @Column(type="integer") 
     */
    protected $torneoId;
    
    /**
     * @Column(type="integer") 
     */
    protected $puntos;
    
    /**
     * @Column(type="integer") 
     */
    protected $pronosticosAcertados;
    
    /**
     * @Column(type="integer") 
     */
    protected $pronosticosTotales;
    
    function getId() {
        return $this->Id;
    }

    function getUsuarioId() {
        return $this->usuarioId;
    }

    function getTorneoId() {
        return $this->torneoId;
    }

    function getPuntos() {
        return $this->puntos;
    }

    function getPronosticosAcertados() {
        return $this->pronosticosAcertados;
    }

    function getPronosticosTotales() {
        return $this->pronosticosTotales;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    function setTorneoId($torneoId) {
        $this->torneoId = $torneoId;
    }

    function setPuntos($puntos) {
        $this->puntos = $puntos;
    }

    function setPronosticosAcertados($pronosticosAcertados) {
        $this->pronosticosAcertados = $pronosticosAcertados;
    }

    function setPronosticosTotales($pronosticosTotales) {
        $this->pronosticosTotales = $pronosticosTotales;
    }



}
