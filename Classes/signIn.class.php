<?php

    class SignIn{

        private $conn;
        private $db;
    
        public function __construct(){

            $db = new DataBase();
            $this->conn= $db->connectDB();
    
        }

        public function logIn($email, $password){
            
            try {

                $sql = "SELECT * FROM customer WHERE email= ?";
                $query = $this->conn->prepare($sql);
                $query->execute([$email]);
                $user = $query->fetch();
                if ($password == $user['pwd']) {
                    session_start();
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['email'] = $user['email'];
                    header("Location: customerHome.html");
                } 

                $sql = "SELECT * FROM employee WHERE email= ?";
                $query = $this->conn->prepare($sql);
                $query->execute([$email]);
                $user = $query->fetch();
                if ($password == $user['password']) {
                    if($user["description"] == "admin"){
                        session_start();
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['email'] = $user['email'];
                        header("Location: dashboardAdmin.php");
                    }
                    else{
                        session_start();
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['email'] = $user['email'];
                        header("Location: dashboardEmployee.php");
                    }
                }

                return false;
            }
            catch (PDOException $ex) {

                echo $ex->getMessage();
            }
        }
    }
?>