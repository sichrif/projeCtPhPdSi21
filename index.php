<?php

    require "classes/product.class.php";
    require "classes/Customer.class.php";
    require "classes/signIn.class.php";

    $emailPlaceHolder="Email Address";
    if(isset($_POST["signUp"])){
    
        $name = $_POST["name"];
        $address = $_POST["adresse"];
        $phoneNumber = $_POST["phoneNumber"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordConf = $_POST["passwordConf"];

        if(!preg_match("/^[a-zA-Z0-9 ]+$/",$name)){
            $nameError = "Name must only contain letter,numbers and spaces";
            goto displayOnly;
        }

        if(strlen($phoneNumber)<8){
            $phoneError = "Phone number must contain 8 Numbers";
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


        if($password != $passwordConf){
            $passwordConfErr = "Passwords doesn't match";
            goto displayOnly;
        }
        $customer = new Customer();
        $customer->signUp($name , $email  , $password ,$phoneNumber ,$address );
        
    }

    if (isset($_POST['logIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto displayOnly;
        }

        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
            goto displayOnly;
        }
        
        $user = new SignIn;
        $auth = $user->logIn($email, $password);
        if($auth == false)
        {
            $auth_error = 'Incorrect Email or Password!!!';
        }
    }

    $product = new Product();
    $productList = $product->readAllProducts();
   
    displayOnly:
    require "template/index.phtml";
    
?>
    