<?php

namespace Core;

use PDO;

class Database
{
    private static ?Database $instance = null;
    private PDO $connection;
    
    private function __construct()
    {
        $this->connection = new PDO('mysql:host=' . Config::getInstance()->get('host'). ';dbname=' . Config::getInstance()->get('dbName'), Config::getInstance()->get('user'), Config::getInstance()->get('password'));
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
   
}