<?php
    include_once 'Session.php';
    include 'Database.php';
    class User{

        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function userRegistration($data){
            $name  = $data['name'];
            $email = $data['email'];
            $username = $data["username"] 

            if (strlen($password)<6) {
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>Password at least 7 charecter</div>";
                return $msg; 

            $password = md5($data['password']);

            if ($name == "" OR $username == "" OR $email == "" OR $password == "" ) {
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>Field must not be empty</div>";
                return $msg;
            }
            if (strlen($username)<3) {
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>Username is too short</div>";
                return $msg; 
            }elseif('/[^a-z0-9_-]/i',$username){
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>Username must only contain alphanumerical, dashes, Underscorers!</div>";
                return $msg; 
            }
        }
        
    }
    
    
?>