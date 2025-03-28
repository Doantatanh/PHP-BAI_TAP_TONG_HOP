<?php
class Database
{
    private $host = "localhost";
    private $dbname = "aff_management";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Failed to connect with MySQL: " . $e->getMessage());
        }
    }

    public function Get_connection()
    {
        return $this->conn;
    }
}
