<?php

class Database {
    private $host;
    private $port;
    private $username;
    private $password;
    private $db;
    private $conn;

    public function __construct($host,$port,$username,$password,$db){

        $this-> host = $host;
        $this-> port = $port;
        $this-> username = $username;
        $this-> password = $password;
        $this-> db = $db;
        

    }
    //Responsavel para criar a conexão com o Banco de dados
    public function createConnection(){

        $connurl = "mysql:host =$this->host;port=$this->port;dbname=$this->db";

        $this->conn = new PDO($connurl, $this->username, $this->password);

        return $this->conn;

    }

}