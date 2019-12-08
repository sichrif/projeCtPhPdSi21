<?php

    class Customer {

        private $conn;
        private $db;

        public function __construct(){
            
            $db = new DataBase();
            $this->conn = $db->connectDB();

        }

        public function signUp($name , $email ,$password ,$phone ,$adresse){
            
            try{
                $query="INSERT INTO `customer` (`name`, `email`, `pwd`, `phone` , `adresse`)
                        VALUES (?, ?, ?, ?, ?);";
                $stmt=$this->conn->prepare($query);
                $stmt->execute([$name , $email , $password ,$phone ,$adresse]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }
    }