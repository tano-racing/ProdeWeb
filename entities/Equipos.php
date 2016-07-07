<?php

/**
 * @Entity @Table(name="Equipos")
 * */
class Equipos {

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $Id;

    /**
     * @Column(type="string", unique=true)
     */
    protected $nombre;

    /**
     * @Column(type="string", unique=true)
     */
    protected $ligaId;
    
    function getId() {
        return $this->Id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getLigaId() {
        return $this->ligaId;
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



}
