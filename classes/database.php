<?php

class Database {
    private static $instance = null;
    private $connection = null;

    public function __construct() {
        $this->connection = new mysqli('localhost', 'root', '', 'blog');
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    function getConnection() {
        return $this->connection;
    }
}
