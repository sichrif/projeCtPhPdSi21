<?php
include 'classes/user.class.php';
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'] ;
    $phone=$_POST['phone'] ;
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error="Please Enter Valid Email";
        goto displayonly;
    }
    if(strlen($phone) <8){
        $phone="Please Enter Valid phone";
        goto displayonly;
    }
    if(strlen($password) <6){
        $password_error="Password and confirm password doesn't match";
        goto displayonly;
    }
    $user= new User;
    $hached_password=password_hash($password,PASSWORD_DEFAULT);
    $user->register($name,$email,$phone,$hached_password);
}
displayonly:
include 'template(phtml)/signup.phtml';

