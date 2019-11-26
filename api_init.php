<?php

$_config['app_name'] = 'Api FecapSocial';

$absolutePath = realpath($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'FecapSocial' . DIRECTORY_SEPARATOR .  'App');

$pathToConfigFile = realpath($absolutePath . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'appSettings.xml');

if($pathToConfigFile){
    $configFile = simplexml_load_file($pathToConfigFile);
}else{
    echo 'Error: Config file not found';
    exit;
}

$connection = $configFile->connection;

$_config['host'] = $connection->host;

$_config['user'] = $connection->user;

$_config['password'] = $connection->pwd;

$_config['db_name'] = $connection->db_name;

$log_config = $configFile->log;

$_config["show_log"] = $log_config->show_log;

$_config["dir_log"] = $log_config->dir_log;

function outputHeader($success = true, $message = null, $dados = array(), $status_code)
{
    header('Content-type: application/json; charset=utf-8');
    http_response_code($status_code);
    $json = json_encode(array(
        'success' => $success,
        'message' => $message,
        'dados' => $dados,
    ));
    echo ($json);
    Conexao::closeInstance();
    exit;
}
