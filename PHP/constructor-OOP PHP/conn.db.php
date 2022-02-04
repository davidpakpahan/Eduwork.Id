<?php
//Koneksi OOP PHP ke Database
class Koneksi
    {
        private $serverName   = 'localhost';
        private $userName     = 'root';
        private $password     = '';
        private $databaseName = 'products';

        protected $conn;

        function __construct()
        {
            if(!isset($this->conn))
                {
                    $this->conn = new mysqli ($this->serverName, $this->userName, $this->password, $this->databaseName);
                }
        }   

    }
$Koneksi = new Koneksi();
?>