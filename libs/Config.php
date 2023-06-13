<?php

namespace Core;

class Config
{
    private static ?Config $instance = null;
    private array $config = [];
    
    private function __construct()
    {
        $this->config = require 'config/DbConfig.php';;
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return self::$instance = new Config();
        }

        return self::$instance;
    }

    public function get(string $key)
    {
        return array_key_exists($key, $this->config) ? $this->config[$key] : null;
    } 
}