<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../../backend/config.php";
require_once "../../entities/Torneos.php";
require_once "../../entities/UsuarioTorneo.php";

if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST") {

    $nombre = filter_input(INPUT_POST, 'nombre');
    $ligaId = filter_input(INPUT_POST, 'ligaId');
    $creadorId = filter_input(INPUT_POST, 'creadorId');

    $torneosRepo = $entityManager->getRepository('Torneos');

    $msg = "Torneo agregado";
    $torneo = new Torneos();
    $torneo->setNombre($nombre);
    $torneo->setLigaId($ligaId);
    $torneo->setCreadorId($creadorId);

    try {
        $entityManager->persist($torneo);
        $entityManager->flush();

        $participante = new UsuarioTorneo();
        $participante->setPronosticosAcertados(0);
        $participante->setPronosticosTotales(0);
        $participante->setPuntos(0);
        $participante->setTorneoId($torneo->getId());
        $participante->setUsuarioId($creadorId);
        
        $entityManager->persist($participante);
        $entityManager->flush();

        $json = array("error" => false, "mensaje" => $msg, "idRemoto" => $torneo->getId());
    } catch (Exception $ex) {
        $json = array("error" => true, "mensaje" => $ex->getMessage());
    }
} else {
    $json = array("error" => true, "mensaje" => "No se paso ningun parametro");
}

header('Content-type: application/json');
echo json_encode($json);
