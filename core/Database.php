<?php
class Database {
    private static $instance = null;
    private $conn;

    private $host = "db";
    private $user = "dashboard";
    private $pass = "dashboardpw";
    private $name = "smart_dashboard";

    private function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
        if ($this->conn->connect_error) {
            die("Database connection error: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }
}
