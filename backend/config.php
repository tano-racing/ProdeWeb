<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../vendor/autoload.php';
//require_once "../../entities/Usuarios.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

date_default_timezone_set('America/Argentina/Buenos_Aires');

$paths = array("/entities");
$isDevMode = false;

$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    //'user'     => '986595',
    //'password' => 'kapanga',
    'dbname' => '986595',
    'host' => 'localhost'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
