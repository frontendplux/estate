<?php

class Database {
    
    private $host;
    private $user;
    private $pass;
    private $dbname;

    public $conn;

    public function connect() {

        $server = $_SERVER['HTTP_HOST'] ?? '';

        // LOCAL SERVER
        if ($server === 'localhost' || $server === '127.0.0.1') {
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->dbname = "biyi_estate";
        } 
        // LIVE SERVER
        else {
            $this->host = "sql212.infinityfree.com";
            $this->user = "if0_41324184";
            $this->pass = "K7e9VcU95OT8UdF";
            $this->dbname = "if0_41324184_air9ja";
        }

        // Connect to MySQL server
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass
        );

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        // Create database if not exists (only useful locally)
        $this->conn->query("CREATE DATABASE IF NOT EXISTS {$this->dbname}");

        // Select database
        $this->conn->select_db($this->dbname);

        // Charset
        $this->conn->set_charset("utf8mb4");

        return $this->conn;
    }
}