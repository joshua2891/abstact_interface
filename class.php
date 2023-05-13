<?php
class Datab extends Queen
{
    public function dbname(): string
    {
        $db = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($db);

    }

}

$d= new Datab();
$d->dbname();
