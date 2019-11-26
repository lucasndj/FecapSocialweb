<?php
class Conexao
{
    public static $instance;

    private function __construct()
    {
    }

    public static function getInstance($_config)
    {
        try {
            if (!isset(self::$instance)) {
                $configPdo = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                self::$instance = new PDO('mysql:host=' . $_config['host']
                    . ';dbname=' . $_config['db_name'],
                    $_config['user'], $_config['password'],
                    $configPdo);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
                    PDO::NULL_EMPTY_STRING);
            }

            return self::$instance;
        } catch (Exception $ex) {
            print_r($ex);
        }
    }

    public static function closeInstance()
    {
        self::$instance = null;
    }
}
