<?php

    require "classes/product.class.php";
    require "classes/Customer.class.php";
    require "classes/Functions.class.php";

    session_start();
    if(isset($_SESSION['email'])!="") {
        Functions::redirect($_SESSION["email"]);
    }


    $namePlaceHolder = "Name";
    $phonePlaceHolder = "Phone Number";
    $emailPlaceHolder = "Email Address";
    $addressPlaceHolder = "Address";
    $passwordPlaceHolder = "Password";
    $passwordConfPlaceHolder = "Re-write your Password";
    $password2PlaceHolder = "**********";

    if(isset($_POST["signUp"])){
    
        $name = $_POST["name"];
        $address = $_POST["adresse"];
        $phoneNumber = $_POST["phoneNumber"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordConf = $_POST["passwordConf"];

        if(!preg_match("/^[a-zA-Z0-9 ]+$/",$name)){
            $nameError = "Name only contains letter and number";
        }

        if(strlen($phoneNumber)<8){
            $phoneError = "Phone number must contain 8 Numbers";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailError = "Please Enter a valide Email";
        }

        if(!preg_match("/^[a-zA-Z0-9 ]+$/",$address)){
            $addressError = "adresse only contains letter, number";
        }

        if(strlen($password)<6){
            $passwordError = "Password must contain at least 6 characters";
        }


        if($password != $passwordConf){
            $passwordConfErr = "Passwords doesn't match";
        }

        if((isset($nameError))OR(isset($phoneError))OR(isset($emailError))OR(isset($addressError))OR(isset($passwordError))OR(isset($passwordConfErr)))
            goto displayOnly;

        $customer = new Customer();
        $customer->signUp($name , $email  , $password ,$phoneNumber ,$address );
        
    }

    if (isset($_POST['logIn'])) {

        $email2 = $_POST['email2'];
        $password = $_POST['password'];

        if(!filter_var($email2,FILTER_VALIDATE_EMAIL)) {
            $email_error2 = "Please Enter Valid Email";
        }

        if(strlen($password) < 6) {
            $password_error2 = "Password must contain at least 6 characters";
        }

        if((isset($email_error2))OR(isset($password_error2))){
            goto displayOnly;
        }
        
        $auth = Functions::logIn($email2, $password);
        if($auth == "Incorrect email !!")
            $email_error2 = $auth;
        else if($auth == "Wrong password !!")
            $password_error2 = $auth;
    }
   
    displayOnly:
    $product = new Product();
    $productList = $product->readAllProducts();
    require "template/index.phtml";

    
?>
    