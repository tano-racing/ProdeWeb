<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../../backend/config.php";
require_once "../../entities/Usuarios.php";

if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST") {

    $msg = "Usuario actualizado";

    $nombre = filter_input(INPUT_POST, 'nombre');
    $usuarioId = filter_input(INPUT_POST, 'idUsuario');
    $fecha = new DateTime('now');

    $usuariosRepo = $entityManager->getRepository('Usuarios');
    $usuario = $usuariosRepo->findOneBy(array('idUsuario' => $usuarioId));
    if (!$usuario) {

        $msg = "Usuario agregado";
        $usuario = new Usuarios();
        $usuario->setIdUsuario($usuarioId);
    }

    $usuario->setNombre($nombre);
    $usuario->setCreadoEl($fecha);

    try {
        $entityManager->persist($usuario);
        $entityManager->flush();

        $json = array("error" => false, "mensaje" => $msg, "idRemoto" => $usuario->getId());
    } catch (Exception $ex) {
        $json = array("error" => true, "mensaje" => $ex->getMessage());
    }
} else {
    $json = array("error" => true, "mensaje" => "No se paso ningun parametro");
}

header('Content-type: application/json');
echo json_encode($json);
