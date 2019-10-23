<?php
// connect to database without singleton
class ConnectDBWOSingleton{
    private $conn;

    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $name = 'sekolah';

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$instance = new ConnectDBWOSingleton();
$conn = $instance->getConnection();
var_dump($conn);

$instance = new ConnectDBWOSingleton();
$conn = $instance->getConnection();
var_dump($conn);

$instance = new ConnectDBWOSingleton();
$conn = $instance->getConnection();
var_dump($conn);