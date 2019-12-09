<?php

    class Order{
        
        private $conn;
        private $db;
    
        public function __construct(){
            
            $db = new DataBase();
            $this->conn = $db->connectDB();
    
        }

        public function addOrders(){
            try{
                $req='DELETE FROM cart;';
                    $result = $this->conn->prepare($req);
                    $result->execute();
                }
    
             catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }