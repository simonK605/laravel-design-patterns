<?php

class Logger
{
    private static $instance;

    private function __construct()
    {
        // Private constructor to prevent external instantiation
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function log($message)
    {
        // Your logging logic here
        echo "Logging: $message\n";
    }
}