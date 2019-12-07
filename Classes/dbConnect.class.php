<?php

    class DataBase{
        
        private $host="localhost";
        private $dbName="projet";
        private $user="root";
        private $password="";
        private $dsn;
        public $connexion;

        public function connectDB(){

            $this->dsn="mysql:host=".$this->host.";dbname=".$this->dbName;
            try{
                $this->connexion= new PDO($this->dsn , $this->user , $this->password);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }

            return $this->connexion;

        }
    }

?>