<?php
require 'Classes/client.class.php' ;
if(isset($_POST['updaty'])){

$name=$_POST["name"];
 $email=$_POST["email"] ;
 $password=$_POST["new_password"]; 
 $cu_password=$_POST["cu_password"];
 $phone=$_POST["Phone"];
 $adresse=$_POST["adresse"];
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

if($new_password != $con_password){
    $passwordConfErr = "Passwords doesn't match";
    goto displayOnly;

}

$up = new client;
$update = $up->updateClient($name,$email,$password,$adresse,$cid);


displayOnly:
header("location:CustomerHome.php");
}
