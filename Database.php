<?php
    class Database{
            private $hostdb ="localhost";
            private $userdb ="root";
            private $passdb ="";
            private $namedb ="login_regis";
            public $pdo;

        public function __construct() {
            if(!isset($this->pdo)){
                try {
                    $link = new PDO("mysql:host".$this->hostdb.";dbname=".$this->namedb,$this->userdb,$this->passdb);
                    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $link->exec("SET CHARACTER SET utf8");
                    $this->pdo = $link;
                } catch (PDOException $e) {
                    die("Error!:<br>".$e->getMessage());
                }
            }
        }
        
    }
    
    
?>