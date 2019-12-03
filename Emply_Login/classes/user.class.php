<?php 
    require 'dbconnect.class.php';
      class User{
        private $conx;
        public function __construct()
        {
            $db=new BasesDonnees;
            $this->conx=$db->connect(); 
        }
        public function register($name,$phone,$email,$password)
        {
            try {
                $sql="INSERT INTO employee(name,email,phone,password) VALUES ( :name,:phone,:email,:password)";
                $result=$this->conx->prepare($sql);
                $result->bindParam(':name',$name);
                $result->bindParam(':phone',$phone);
                $result->bindParam(':email',$email);
                $result->bindParam(':password',$password);
                $result->execute();
                return $result;
            } catch (PDOExeption $e) {
                echo $e->getMessage();
            }

        }
    }