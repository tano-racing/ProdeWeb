<?php

/**
 * @Entity @Table(name="Ligas")
 * */
class Ligas {

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
     * @Column(type="string") 
     */
    protected $paisId;
    
    function getId() {
        return $this->Id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPaisId() {
        return $this->paisId;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPaisId($paisId) {
        $this->paisId = $paisId;
    }



}
