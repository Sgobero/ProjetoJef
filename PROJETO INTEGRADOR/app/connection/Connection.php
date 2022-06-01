<?php

class Connection {

    private $host = "localhost";
    private $dbname = "projetoIntegrador";
    private $user = "root";
    private $password = "bancodedados";


        public function getConnection(){
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
            $this->user, 
            $this->password);
    
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        }

    
    }
    
    $conn = new Connection();
    $conn->getConnection();