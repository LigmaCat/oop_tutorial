<?php

class Dbh {

    Private $host = "localhost";
    Private $dbname = "dbname";
    Private $user = "user";
    Private $password = "password";


    protected function connect() {
try { 
    $pdo new PDO(
    "mysql:host" . $this->host .
    ";dbname=" . $this->dbname,
    $this->dbusername,
    $this->dbpassword); 

    $pdo->setAttribute (PDO::ATTR_ERRMODE, 
    PDO:: ERRMODE_EXCEPTION); 
    
        return $pdo; 
    } catch (PDOException $e) { 
        die("Connection failed: "$e->getMessage());
    }
}
}