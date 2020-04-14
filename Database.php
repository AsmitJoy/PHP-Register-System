<?php
    class Database{
            private $hostdb ="localhost";
            private $userdb ="root";
            private $passdb ="";
            private $namedb ="login_regis";
            private $charset ="utf8mb4"; 
            public $pdo;

        public function __construct() {
            if(!isset($this->pdo)){
                try {
                    $link = new PDO("mysql:host".$this->hostdb.";dbname=".$this->namedb.";charset=.$this->charset.",$this->userdb,$this->passdb);
                    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $this->pdo = $link;
                } catch (PDOException $e) {
                    die("Error!:<br>".$e->getMessage());
                }
            }
        }
        
    }
    
    
?>