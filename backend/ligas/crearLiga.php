<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../../backend/config.php";

if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST") {

    $msg = "Usuario actualizado";

    $nombre = filter_input(INPUT_POST, 'nombre');
    $paisId = filter_input(INPUT_POST, 'paisId');

    $ligasRepo = $entityManager->getRepository('Ligas');
    $liga = $ligasRepo->findOneBy(array('idUsuario' => $usuarioId));
    if (!$usuario) {

        $msg = "Usuario agregado";
        $liga = new Ligas();
        $liga->setNombre($nombre);
        $liga->setPaisId($paisId);
    }

    try {
        $entityManager->persist($liga);
        $entityManager->flush();

        $json = array("error" => false, "mensaje" => $msg);
    } catch (Exception $ex) {
        $json = array("error" => true, "mensaje" => $ex->getMessage());
    }
} else {
    $json = array("error" => true, "mensaje" => "No se paso ningun parametro");
}

header('Content-type: application/json');
echo json_encode($json);
