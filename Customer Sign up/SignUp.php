<?php   
    require "classes/users.class.php";

    if(isset($_POST['signUp'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

            if(!preg_match("/^[a-zA-Z0-9 ]+$/",$username)){
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


            if($password != $confirmPassword){
                $passwordConfErr = "Passwords doesn't match";
                goto displayOnly;
            
            }
            $user = new User();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $user->signup($username , $email ,$hashedPassword);
    }

    displayOnly:
    require "Template/SignUp.phtml";

?>