<?php
// singleton to connect to db
class ConnectDB {
    // hold the class instance.
    private static $instance = null;
    private $conn;

    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $name = 'sekolah';

    // the database connection is etablished in the private constructor.
    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
    }

    public static function getInstance()
    {
        if (!self::$instance) 
        {
            self::$instance = new ConnectDB();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$instance = ConnectDB::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDB::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDB::getInstance();
$conn = $instance->getConnection();
var_dump($conn);