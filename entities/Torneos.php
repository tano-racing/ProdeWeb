<?php

/**
 * @Entity @Table(name="Torneos")
 * */
class Torneos {

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $Id;

    /**
     * @Column(type="string")
     */
    protected $nombre;
    
    /**
     * @Column(type="integer")
     */
    protected $ligaId;
    
    /**
     * @Column(type="integer")
     */
    protected $creadorId;
    
    /**
     * @Column(type="integer")
     */
    protected $sincronizado;

    function getId() {
        return $this->Id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getLigaId() {
        return $this->ligaId;
    }

    function getCreadorId() {
        return $this->creadorId;
    }

    function getSincronizado() {
        return $this->sincronizado;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setLigaId($ligaId) {
        $this->ligaId = $ligaId;
    }

    function setCreadorId($creadorId) {
        $this->creadorId = $creadorId;
    }

    function setSincronizado($sincronizado) {
        $this->sincronizado = $sincronizado;
    }



}
