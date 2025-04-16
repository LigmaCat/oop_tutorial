<?php

class Signup extends Dbh
{
    private $username ;
    private $pwd;


    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }


    private function isEmptySubmit() 
    {
        if (isset($this->username) && isset($this->pwd)) { 
            return false; 
        } else { 
            return true; 
        }
    }

    private function inserUser()
    {
    $query = "Insert Into users ('username', 'pwd') 
                  Values (:username, :pwd);";
        $stmt = $this->connect()->prepare($query); 
        $stmt->bindParam(":username", $this->username); 
        $stmt->bindParam(":pwd", $this->pwd); 
        $stmt->execute();

    }

    public function singupUser()
    {

        if ($this->isEmptySubmit()) { 
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] '/index. php'); 
            die();
        }

        $this->inserUser();

    }


}

