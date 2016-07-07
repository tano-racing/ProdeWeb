<?php

/**
 * @Entity @Table(name="Usuarios")
 * */
class Usuarios {

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
     * @Column(type="string", unique=true) 
     */
    protected $idUsuario;

    /**
     * @Column(type="datetime") 
     */
    protected $creadoEl;

    function getId() {
        return $this->Id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function getCreadoEl() {
        return $this->creadoEl;
    }

    function setCreadoEl($creadoEl) {
        $this->creadoEl = $creadoEl;
    }

}
