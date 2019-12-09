<?php

    class Functions{

        private $conn;
        private $db;
    
        public static function logIn($email, $password){
            
            try {
                $db = new DataBase();
                $conn= $db->connectDB();
                $sql = "SELECT * FROM customer WHERE email= ?";
                $query = $conn->prepare($sql);
                $query->execute([$email]);
                $user = $query->fetch();
                if ($password == $user['pwd']) {
                    session_start();
                    $_SESSION["id"] = $user["cid"];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['phoneNumber'] = $user['phone'];
                    $_SESSION['address'] = $user['adresse'];
                    $_SESSION['password'] = $user['pwd'];
                    header("Location: customerHome.php");
                }
                if($user != false)
                    return "Wrong password !!";

                $sql = "SELECT * FROM employee WHERE email= ?";
                $query = $conn->prepare($sql);
                $query->execute([$email]);
                $user = $query->fetch();
                if ($password == $user['password']) {
                    if($user["description"] == "admin"){
                        session_start();
                        $_SESSION["id"] = $user["eid"];
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['phoneNumber'] = $user['phone'];
                        $_SESSION['address'] = $user['adresse'];
                        $_SESSION['password'] = $user['password'];
                        header("Location: AdminDashBoard/index.php");
                    }
                    else{
                        session_start();
                        $_SESSION["id"] = $user["eid"];
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['phoneNumber'] = $user['phone'];
                        $_SESSION['address'] = $user['adresse'];
                        $_SESSION['password'] = $user['password'];
                        header("Location: EmployeeDashboard/index.php");
                    }
                }

                if($user != false)
                    return "Wrong password !!";

                return "Incorrect email !!";
            }
            catch (PDOException $ex) {

                echo $ex->getMessage();
            }
        }

        public static function redirect($email){

            try{
                $db = new DataBase();
                $conn= $db->connectDB();
                $sql = "SELECT * FROM customer WHERE email= ?";
                $query = $conn->prepare($sql);
                $query->execute([$email]);
                $user = $query->fetch();
                if($email == $user["email"]){
                    header("Location: customerHome.php");
                }

                $sql = "SELECT * FROM employee WHERE email= ?";
                $query = $conn->prepare($sql);
                $query->execute([$email]);
                $user = $query->fetch();
                if($email == $user["email"]){
                    if($user["description"] == "admin")
                        header("Location: AdminDashBoard/index.php");
                    else
                        header("Location: EmployeeDashboard/index.php");
                }
            }
            catch (PDOException $ex) {

                echo $ex->getMessage();
            }

        }

    }
?>