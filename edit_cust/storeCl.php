<?php   
    require "classes/client.class.php";
    if(isset($_POST['register'])) {
        $name=$_POST['name'];
        $email=$_POST['email'] ;
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $phone=$_POST['phone'];
        $adresse=$_POST['adresse'];
        $cid=$_POST['cid'];  
            if(!preg_match("/^[a-zA-Z0-9 ]+$/",$name)){
                $usernameError = "Name must only contain letter,numbers and spaces";
                goto displayOnly;
                
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailError = "Please Enter a valide Email";
                goto displayOnly;
            }
            if(strlen($password)<6){
                $passwordError = "Password must contain at least 6 characters";
                goto displayOnly;
            
            }
            if($password != $cpassword){
                $passwordConfErr = "Passwords doesn't match";
                goto displayOnly;
            
            }
            $client = new client;
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $client->add_new($name,$email,$hashedPassword,$adresse,$phone);
    }
    displayOnly:
    header("Location:CustomerHome.php");
?>