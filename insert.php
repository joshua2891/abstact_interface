<?php

abstract class queen
{
    public $conn;
    public $servername="localhost";
    public $username="root";
    public $password="";
    public $dbname="abstact";

    public function __construct()
    {
        $this->conn= new mysqli($this->servername,$this->username,$this->password);
        $db=("CREATE DATABASE IF NOT EXISTS $this->dbname")
        $this->conn->query($db);
    }
}