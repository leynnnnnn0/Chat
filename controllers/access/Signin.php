<?php

require_once 'model/validation/InputValidation.php';
class Signin{
    public static $user;
    public static function sign_in_input_validation(Database $pdo, string $email, string $password)
    {
        if(InputValidation::validate_user_input($email, $password))
        {
            InputValidation::handle_error("All fields are required.", '/chat/index.php/signin');
        }

        Signin::$user = InputValidation::validate_email_existence($pdo, $email);

        if(Signin::$user) 
        {
            if(InputValidation::validate_login_password($password, Signin::$user['pass'])) {
                InputValidation::handle_error("Incorrect Password.", '/chat/index.php/signin');
            }
        }
        
    }
}

require_once 'database/dbhelper.php';
$email = $_POST['email'];
$password = $_POST['password'];
Signin::sign_in_input_validation($pdo, $email, $password);
$_SESSION['user'] = Signin::$user;
InputValidation::handle_success("Logged in.", '/chat/index.php/chats');

