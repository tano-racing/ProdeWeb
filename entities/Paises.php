<?php

/**
 * @Entity @Table(name="Paises")
 * */
class Paises {

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $Id;

    /**
     * @Column(type="string", unique=true)
     */
    protected $nombre;

    function getId() {
        return $this->Id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
