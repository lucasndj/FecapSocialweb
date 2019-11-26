<?php
require_once 'api_init.php';

define('ABSOLUTE_PATHAPPCONTROLLER', $_SERVER['DOCUMENT_ROOT'] .
    DIRECTORY_SEPARATOR . 'FecapSocial' .
    DIRECTORY_SEPARATOR . 'App' .
    DIRECTORY_SEPARATOR . 'Controllers');

define('ABSOLUTE_PATHAPPMODEL', $_SERVER['DOCUMENT_ROOT'] .
    DIRECTORY_SEPARATOR . 'FecapSocial' .
    DIRECTORY_SEPARATOR . 'App' .
    DIRECTORY_SEPARATOR . 'Models');

require_once $absolutePath . DIRECTORY_SEPARATOR . 'Connection' . DIRECTORY_SEPARATOR . 'connection.php';

require_once 'linkController.php';

$link = new LinkController(Conexao::getInstance($_config));
