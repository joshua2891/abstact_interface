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
        
    }
       
    abstract public function intro(): string;



}

class database extends Queen
{
    public function dbname(): string;
    {
        $db= "CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($db);
    }
}

$d= new Queen();
$d->dbname();