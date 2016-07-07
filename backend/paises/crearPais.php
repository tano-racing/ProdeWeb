<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../../backend/config.php";

if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST") {

    $msg = "Pais actualizado";

    $nombre = filter_input(INPUT_POST, 'nombre');
    $paisId = filter_input(INPUT_POST, 'paisId');

    $paisesRepo = $entityManager->getRepository('Paises');
    $pais = $paisesRepo->findOneBy(array('nombre' => $nombre));
    if (!$pais) {

        $msg = "Pais agregado";
        $pais = new Paises();
        $pais->setNombre($nombre);
    }

    try {
        $entityManager->persist($pais);
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
