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
            $username = $data["username"] ;
            $password = md5($data['password']);

            $chk_email = $this->emailCheck($email);

         
            if ($name == "" OR $username == "" OR $email == "" OR $password == "" ) {
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>Field must not be empty</div>";
                return $msg;
            }
            if (strlen($username)<3) {
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>Username is too short</div>";
                return $msg; 
            }elseif(preg_match('/[^a-z0-9_-]/i',$username)){
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>Username must only contain alphanumerical, dashes, Underscorers!</div>";
                return $msg; 
            }
            if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false) {
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>The email address is not valid</div>";
                return $msg;          
            }
            if ($chk_email == true) {
                $msg  = "<div class='alert alert-danger'><strong>ErroR!:</strong>The email address is not valid</div>";
                return $msg;  
            }
        }
        public function emailCheck($email){
            $sql = "SELECT email FROM tbl_user WHERE email = :email"; 

            $query = $this->db->pdo->prepare($sql);
            $query->bindValue(':email',$email);
            $query->excute();
            if ($query->rowCount()>0) {
                return true;
            }else{
                return false; 
            }
        }            
    }
   
?>

