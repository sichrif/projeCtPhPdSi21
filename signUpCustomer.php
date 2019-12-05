<?php
 
    require "classes/Customer.class.php";

    if(isset($_POST["signUp"])){

        $name = $_POST["name"];
        $adresse = $_POST["adresse"];
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
        $customer->signUp($name , $adresse , $phoneNumber , $email , $password);
    }

    displayOnly:
    require "template(phtml)/SignUpCustomer.phtml";

?>