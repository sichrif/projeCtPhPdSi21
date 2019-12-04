<?php

    require "dbConnect.class.php";

    class User {

        private $conn;
        private $db;

        public function __construct(){
            
            $db = new DataBase();
            $this->conn = $db->connectDB();

        }

        public function signUp($username , $email ,$password){

            try{
                $query="INSERT INTO `users` (`userName`, `email`, `password`, `createdAt`)
                        VALUES (?, ?, ?, NOW());";
                $stmt=$this->conn->prepare($query);
                $stmt->execute([$username , $email ,$password]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }
            
    }

?>